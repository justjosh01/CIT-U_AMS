<div class="register-box">
  <div class="register-logo">
     <div style="margin-bottom:10px;padding-top: 5px;" align="center">
         <img src="<?=ASSETS;?>images/favicon.png" height="80px;"  class=""> 
      </div>
    <a href=""><b>Alumni Monitoring System</b> Sign Up</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register an account</p>

        <?php
          if(!empty($data['error'])){
            error_message($data['error']);
          }
          if(!empty($data['success']) ){
            success_message($data['success']);
          }
        ?>
    <form action="" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Full name" name="name" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Contact Number" name="contact_number" required>
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
      </div>


      <div class="form-group has-feedback">
        <!-- <input type="text" class="form-control" placeholder="Location" name="location" required>
        <span class="glyphicon glyphicon-map-marker form-control-feedback"></span> -->
              <!-- <p class="help-block">Choose Country</p> -->
              <select class="form-control" name="location" style="width: 100%;">
                  <option value=""></option>
                  <?php foreach ($data['country'] as $key => $value) {

                    $selected = ($key=='PH') ? 'selected':'';
                  
                    
                    echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
                  } ?> 

              </select>


      </div>



      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Retype password" name="confirm_password" required>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>


      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox">
            <label>
              <input type="checkbox"> I agree to the <a href="#" class="text-center">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <input type="submit" name="submit" class="btn btn-primary btn-block btn-flat" value="Register">
        </div>
        <!-- /.col -->
      </div>
    </form>

<!--     <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>
    </div> -->

    <a href="<?=URL_ROOT;?>admins/login" class="text-center">I already have an account</a>
  </div>
  <!-- /.form-box -->
<div style="text-align: center;margin-top: 10px;"><a href="<?=URL_ROOT;?>" class="text-center">← Back to Dashboard</a></div>

</div>
