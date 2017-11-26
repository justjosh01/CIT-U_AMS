 

 

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
          <h3 class="box-title">Profile</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body ">

        <form class="form-horizontal" method="post" action="" role="form" enctype="multipart/form-data">

          <div class="form-group">
            <label class="col-md-2 control-label">Full Name * </label>
            <div class="col-md-10">
              <input type="text" name="name" class="form-control" required placeholder="Full Name" value="<?=isset($data['alumnus']['name']) ? $data['alumnus']['name'] : ''; ?>" readonly>
              
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">Email * </label>
            <div class="col-md-10">
              <input type="email" name="email" class="form-control" required placeholder="Email Address" value="<?=isset($data['alumnus']['email']) ? $data['alumnus']['email'] : ''; ?>" readonly>
              
            </div>
          </div>  

           

           <div class="form-group">
            <label class="col-md-2 control-label">Change Password * </label>
            <div class="col-md-10">
              <input type="password" name="newpassword" class="form-control"   placeholder="Enter only if you want to change the password" value="">
               
              
            </div>
          </div>  

           <div class="form-group">
            <label class="col-md-2 control-label">Confirm Password * </label>
            <div class="col-md-10">
              <input type="password" name="confirmpassword" class="form-control" required placeholder="Confirm Password" value="">
              <p class="help-block">Please confirm your current password to make changes to your profile.</p>
              
            </div>
          </div>          
      


          <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
               
              <button type="submit" name="submit" class="btn btn-primary" > <i class="fa fa-save"></i> Save</button>
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
 