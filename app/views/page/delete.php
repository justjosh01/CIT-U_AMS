<!--

	Connect With Me...

	@author  : Pradeep khodke
    Blog     : http://www.codingcage.com
    Tutorial : http://www.codingcage.com/2016/08/delete-rows-from-mysql-with-bootstrap.html
    facebook : https://facebook.com/CodingCage
    twitter  : https://twitter.com/CodingCage
    twitter  : https://twitter.com/PradeepKhodke

-->
<?php define('URL_','http://localhost:8080/test/bootstrap-delete-confirm-modal/');?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Delete MySQL Rows with BootStrap Confirm Modal</title>
<link rel="stylesheet" href="<?=URL_;?>css/bootstrap.min.css" type="text/css" />
</head>
<body>

    <div class="container">
    	
        <div class="page-header">
        <h1><a target="_blank" href="http://www.codingcage.com/2016/08/delete-rows-from-mysql-with-bootstrap.html">Delete MySQL Rows with BootStrap Confirm Modal</a></h1>
        </div>
        
        <table class="table table-bordered table-condensed table-hover table-striped">
        
        	<tr>
            	<th>#ID</th>
                <th>Product Name</th>
                <th>Action</th>
            </tr>
            
            
            <?php
		 
 

			$query = "SELECT id, name FROM tbl_career_field";
			$stmt = $this->db->getQuery($query);
			 
			 foreach ($stmt  as $key => $value) {
			 

			 
				?>
                <tr>
                <td><?php echo $value['id']; ?></td>
                <td><?php echo $value['name']; ?></td>
                <td>
                <a class="delete_product" data-id="<?php echo $value['id']; ?>" href="javascript:void(0)">
                <i class="glyphicon glyphicon-trash"></i>
                </a></td>
                </tr>
                <?php
			}
			?>
            
        
        </table>
    
    </div>

<script src="<?=URL_;?>jquery-1.12-0.min.js"></script>
<script src="<?=URL_;?>js/bootstrap.min.js"></script>
<script src="<?=URL_;?>bootbox.min.js"></script>

<script>
	$(document).ready(function(){
		
		$('.delete_product').click(function(e){
			
			e.preventDefault();
			
			var pid = $(this).attr('data-id');
			var parent = $(this).parent("td").parent("tr");
			
			bootbox.dialog({
			  message: "Are you sure you want to Delete ?",
			  title: "<i class='glyphicon glyphicon-trash'></i> Delete !",
			  buttons: {
				success: {
				  label: "No",
				  className: "btn-success",
				  callback: function() {
					 $('.bootbox').modal('hide');
				  }
				},
				danger: {
				  label: "Delete!",
				  className: "btn-danger",
				  callback: function() {
					  
					  /*
					  
					  using $.ajax();
					  
					  $.ajax({
						  
						  type: 'POST',
						  URL_: 'delete.php',
						  data: 'delete='+pid
						  
					  })
					  .done(function(response){
						  
						  bootbox.alert(response);
						  parent.fadeOut('slow');
						  
					  })
					  .fail(function(){
						  
						  bootbox.alert('Something Went Wrog ....');
						  						  
					  })
					  */
					  
					  
					  $.post('super_admin/alumni', { 'delete':pid })
					  .done(function(response){
						  bootbox.alert(response);
						  parent.fadeOut('slow');
					  })
					  .fail(function(){
						  bootbox.alert('Something Went Wrog ....');
					  })
					  					  
				  }
				}
			  }
			});
			
			
		});
		
	});
</script>
</body>
</html>