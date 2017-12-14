 

 

  <div class="row">
    <div class="col-xs-12">
     
          <?php
          if(!empty($data['error'])){
            error_message($data['error']);
          }
          if(!empty($data['success']) ){
            success_message($data['success']);
          }
        ?> 
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Import Alumni</h3>
          <?=add_button('admins/add_alumni','Add Alumni');?>
        </div>
        <!-- /.box-header -->
        <div class="box-body ">


 
 

        <form  method="post" action=""  enctype="multipart/form-data" class="form-horizontal">

          <div class="form-group">
            <label class="col-sm-2 control-label">File * </label>
            <div class="col-sm-10">
               <input type="file" name="file" value="" >
               <p class="help-block">CSV Files Only.</p>
 

              
            </div>
          </div>

         

        
   

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
               
             

              <button type="submit" name="import" class="btn btn-primary"><i class="fa fa-fw fa-save"></i> SAVE</button>
            </div>
          </div>
        </form>
      </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
 
             
              