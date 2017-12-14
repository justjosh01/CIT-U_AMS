 

 

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
            <label for="admin_id" class="col-md-2 control-label">Admin ID * </label>
            <div class="col-md-10">
              <input type="text" id="admin_id" name="admin_id" class="form-control" required placeholder="Admin ID" value="<?=isset($data['admin']['admin_id']) ? $data['admin']['admin_id'] : ''; ?>" readonly >
              
            </div>
          </div>

          <div class="form-group">
            <label for="name" class="col-md-2 control-label">Full Name * </label>
            <div class="col-md-10">
              <input type="text" id="name" name="name" class="form-control" required placeholder="Full Name" value="<?=isset($data['admin']['name']) ? $data['admin']['name'] : ''; ?>" readonly>
              
            </div>
          </div>

          <div for="gender" class="form-group">
            <label for="gender" class="col-md-2 control-label">Gender </label>
            <div class="col-md-10">
              <select id="gender" class="form-control" name="gender" style="width: 100%;">
                  <option value=""></option>
                  <?php foreach ($data['gender'] as $key => $value) {

                  $selected = ($data['admin']['gender']==$key) ? 'selected':'';
                    
                    echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
                  } ?> 

              </select>
              
            </div>
          </div>

          <div class="form-group">
            <label for="date_of_birth" class="col-md-2 control-label">Date of Birth </label>
            <div class="col-md-10">
              <input type="date" id="date_of_birth" name="date_of_birth" class="form-control" required placeholder="Date of Birth" value="<?=isset($data['admin']['date_of_birth']) ? $data['admin']['date_of_birth'] : ''; ?>" >
              
            </div>
          </div>

          <div class="form-group">
            <label for="contact_number" class="col-md-2 control-label">Contact Number </label>
            <div class="col-md-10">
              <input type="text" id="contact_number" name="contact_number" class="form-control" required placeholder="Contact Number" value="<?=isset($data['admin']['contact_number']) ? $data['admin']['contact_number'] : ''; ?>" >
              
            </div>
          </div>

          <div class="form-group">
            <label for="department" class="col-md-2 control-label">Department </label>
            <div class="col-md-10">
              <select id="department" class="form-control" name="department" style="width: 100%;">
                  <option value=""></option>
                  <?php foreach ($data['department'] as $key => $value) {


                  $selected = ($data['admin']['department']==$key) ? 'selected':'';
                    
                    echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
                  } ?> 

              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="email" class="col-md-2 control-label">Email * </label>
            <div class="col-md-10">
              <input type="email" id="email" name="email" class="form-control" required placeholder="Email Address" value="<?=isset($data['admin']['email']) ? $data['admin']['email'] : ''; ?>" readonly>
              
            </div>
          </div>  

          <div class="form-group">
            <label for="country" class="col-md-2 control-label">Country * </label>
            <div class="col-md-10">
              <select id="country" class="form-control" name="country" style="width: 100%;">
                  <option value=""></option>
                  <?php foreach ($data['country'] as $key => $value) {

                  $selected = ($data['admin']['location']==$key) ? 'selected':'';
                    
                    echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
                  } ?> 

              </select>
            </div>
          </div>  

          <div class="form-group">
            <label for="newpassword"  class="col-md-2 control-label">Change Password * </label>
            <div class="col-md-10">
              <input type="password" id="newpassword" name="newpassword" class="form-control"   placeholder="Enter only if you want to change the password" value="">
               
              
            </div>
          </div>           
           <div class="form-group">
            <label for="confirmpassword" class="col-md-2 control-label">Confirm Password * </label>
            <div class="col-md-10">
              <input type="password" id="confirmpassword" name="confirmpassword" class="form-control" required placeholder="Confirm Password" value="">
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
 