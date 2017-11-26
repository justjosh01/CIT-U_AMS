 

 

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
          <h3 class="box-title">Admins Registration</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body ">


 
 

        <form  method="post" action=""  enctype="multipart/form-data" class="form-horizontal">

          <div class="form-group">
            <label class="col-sm-2 control-label">Name * </label>
            <div class="col-sm-10">
              <input type="text" name="name" class="form-control" required placeholder="Full Name" value="<?=isset($data['admin']['name']) ? $data['admin']['name'] : ''; ?>">

 

              
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Email * </label>
            <div class="col-sm-10">
              <input type="email" name="email" class="form-control" required placeholder="Email Address" value="<?=isset($data['admin']['email']) ? $data['admin']['email'] : ''; ?>">
              
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Contact Number * </label>
            <div class="col-sm-10">
              <input type="text" name="contact_number" class="form-control" placeholder="Contact Number"  value="<?=isset($data['admin']['contact_number']) ? $data['admin']['contact_number'] : ''; ?>" >
            </div>
          </div>  

          <div class="form-group">
            <label class="col-sm-2 control-label">Password * </label>
            <div class="col-sm-10">
              <input type="password" name="password" class="form-control"  placeholder="Password">
              
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Retype Password * </label>
            <div class="col-sm-10">
              <input type="password" name="confirm_password" class="form-control"  placeholder="Retype Password">
              
            </div>
          </div>
          
           
          


          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
               
             

              <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-fw fa-save"></i> SAVE</button>
            </div>
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
 