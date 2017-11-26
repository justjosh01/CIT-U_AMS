<?php //dmarkdevin@gmail.com

class mysqli{
	
	public $conn;

	public function __construct(){
	 
			try{


           $this->conn = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
            

		    }catch(PDOException $e){
				// die($e->getMessage());
                die('');
			}
 
	}
 
	     /*
     * Returns rows from the database based on the conditions
     * @param string name of the table
     * @param array select, where, order_by, limit and return_type conditions
     */

     public function getQuery($query){
        try{

      
        $q =  $this->conn->prepare($query);
         $this->conn->exec("set names utf8");
        $q->execute();
        $list = $q->fetchAll(PDO::FETCH_ASSOC);
      
        return $list;

        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function getCount($query){
        try{

      
        $q =  $this->conn->prepare($query);
         $this->conn->exec("set names utf8");
        $q->execute();
        $list =$q->rowCount();
      
        return $list;

        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function getRows($table,$conditions = array()){
        

        try{



       	$sql = 'SELECT ';
        $sql .= array_key_exists("select",$conditions)?$conditions['select']:'*';
        $sql .= ' FROM '.$table;

        
        if(array_key_exists("where",$conditions)){
            $sql .= ' WHERE ';
            $i = 0;
            foreach($conditions['where'] as $key => $value){
                $pre = ($i > 0)?' AND ':'';
                $sql .= $pre.$key." = '".$value."'";
                $i++;
            }
        }
        
        if(array_key_exists("order_by",$conditions)){
            $sql .= ' ORDER BY '.$conditions['order_by']; 
        }
        
        if(array_key_exists("start",$conditions) && array_key_exists("limit",$conditions)){
            $sql .= ' LIMIT '.$conditions['start'].','.$conditions['limit']; 
        }elseif(!array_key_exists("start",$conditions) && array_key_exists("limit",$conditions)){
            $sql .= ' LIMIT '.$conditions['limit']; 
        }
        
        $query = $this->conn->prepare($sql);
        $query->execute();
        
        if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){
            switch($conditions['return_type']){
                case 'count':
                    $data = $query->rowCount();
                    break;
                case 'single':
                    // $data = $query->fetch(PDO::FETCH_ASSOC);
                    $data = $query->fetch();
             
                    break;
                default:
                    $data = '';
            }
        }else{
            if($query->rowCount() > 0){
                $data = $query->fetchAll();
            }
        }
        return isset($data)?$data:array();

         }catch(PDOException $e){
				die($e->getMessage());
		}


    }
    
    /*
     * Insert data into the database
     * @param string name of the table
     * @param array the data for inserting into the table
     */
    public function insert($table,$data){
        if(!empty($data) && is_array($data)){
            $columns = '';
            $values  = '';
            $i = 0;
            if(!array_key_exists('date_added',$data)){
                $data['date_added'] = date("Y-m-d H:i:s");
            }

            if(!array_key_exists('user_id',$data)){
                $data['user_id'] = null;
            }          

            $columnString = implode(',', array_keys($data));
            $valueString = ":".implode(',:', array_keys($data));
            $sql = "INSERT INTO ".$table." (".$columnString.") VALUES (".$valueString.")";
            $query = $this->conn->prepare($sql);
            foreach($data as $key=>$val){
                 $query->bindValue(':'.$key, $val);
            }


            $insert = $query->execute();
            return $insert?$this->conn->lastInsertId():false;
        }else{
            return false;
        }
    }
    
    /*
     * Update data into the database
     * @param string name of the table
     * @param array the data for updating into the table
     * @param array where condition on updating data
     */
    public function update($table,$data,$conditions){

    	try{


        if(!empty($data) && is_array($data)){
            $colvalSet = '';
            $whereSql = '';
            $i = 0;
            // if(!array_key_exists('date_modified',$data)){
            //     $data['date_modified'] = date("Y-m-d H:i:s");
            // }
            if(!array_key_exists('modified',$data)){
                $data['date_modified'] = date("Y-m-d H:i:s");
            }

            foreach($data as $key=>$val){
                $pre = ($i > 0)?', ':'';
                $colvalSet .= $pre.$key."='".$val."'";
                $i++;
            }
            if(!empty($conditions)&& is_array($conditions)){
                $whereSql .= ' WHERE ';
                $i = 0;
                foreach($conditions as $key => $value){
                    $pre = ($i > 0)?' AND ':'';
                    $whereSql .= $pre.$key." = '".$value."'";
                    $i++;
                }
            }
            $sql = "UPDATE ".$table." SET ".$colvalSet.$whereSql;
            $query = $this->conn->prepare($sql);
 
            $update = $query->execute();
            return $update?true:false;




        }else{
            return false;
        }

         }catch(PDOException $e){
				die($e->getMessage());
		}
    }
    
    /*
     * Delete data from the database
     * @param string name of the table
     * @param array where condition on deleting data
     */
    public function delete($table,$conditions){
        $whereSql = '';
        if(!empty($conditions)&& is_array($conditions)){
            $whereSql .= ' WHERE ';
            $i = 0;
            foreach($conditions as $key => $value){
                $pre = ($i > 0)?' AND ':'';
                $whereSql .= $pre.$key." = '".$value."'";
                $i++;
            }
        }
        $sql = "DELETE FROM ".$table.$whereSql;
        $delete = $this->conn->exec($sql);
        return $delete?$delete:false;
    }


    
    // =============================================

 
}