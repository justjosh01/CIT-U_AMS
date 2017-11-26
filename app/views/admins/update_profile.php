 

 

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
          <hr>
        </div>
        <!-- /.box-header -->

        <div class="box-body ">

        <form class="form-horizontal" method="post" action="" role="form" enctype="multipart/form-data">

          <div class="form-group">
            <label class="col-md-2 control-label">Admin ID * </label>
            <div class="col-md-10">
              <input type="text" name="admin_id" class="form-control" required placeholder="Admin ID" value="<?=isset($data['admin']['admin_id']) ? $data['admin']['admin_id'] : ''; ?>" readonly>
              
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">Full Name * </label>
            <div class="col-md-10">
              <input type="text" name="name" class="form-control" required placeholder="Full Name" value="<?=isset($data['admin']['name']) ? $data['admin']['name'] : ''; ?>" readonly>
              
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">Gender </label>
            <div class="col-md-10">
              <input type="text" name="gender" class="form-control" required placeholder="Gender" value="<?=isset($data['admin']['gender']) ? $data['admin']['gender'] : ''; ?>" readonly>
              
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">Date of Birth </label>
            <div class="col-md-10">
              <input type="text" name="date_of_birth" class="form-control" required placeholder="Date of Birth" value="<?=isset($data['admin']['date_of_birth']) ? $data['admin']['date_of_birth'] : ''; ?>" readonly>
              
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">Contact Number </label>
            <div class="col-md-10">
              <input type="text" name="contact_number" class="form-control" required placeholder="Contact Number" value="<?=isset($data['admin']['contact_number']) ? $data['admin']['contact_number'] : ''; ?>" >
              
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">Department </label>
            <div class="col-md-10">
              <input type="text" name="department" class="form-control" required placeholder="Department" value="<?=isset($data['admin']['department']) ? $data['admin']['department'] : ''; ?>" >
              
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">Email * </label>
            <div class="col-md-10">
              <input type="email" name="email" class="form-control" required placeholder="Email Address" value="<?=isset($data['admin']['email']) ? $data['admin']['email'] : ''; ?>" readonly>
              
            </div>
          </div>  

          <!-- <div class="form-group">
            <label class="col-md-2 control-label">Country * </label>
            <div class="col-md-10">
              <select class="form-control" name="location" style="width: 100%;">
                  <option value=""></option>
                  <?php foreach ($data['country'] as $key => $value) {

                  // $selected = ($key=='PH') ? 'selected':'';
                  $selected = ($data['admin']['location']==$key) ? 'selected':'';
                    
                    echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
                  } ?> 

              </select>
              
            </div>
          </div>  --> 
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
 