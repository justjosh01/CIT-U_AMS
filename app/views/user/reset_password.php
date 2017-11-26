<div class="login-box">
  <div class="login-logo">
     <div style="margin-bottom:10px;padding-top: 5px;" align="center">
         <img src="<?=ASSETS;?>images/favicon.png" height="80px;"  class=""> 
      </div>
      <a href=""><b>Alumni Monitoring System</b><br> Reset Password</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Input your new password</p>


    <?=isset($data['error']) ? error_message($data['error']):''; ;?>
    <?=isset($data['success']) ? success_message($data['success']):''; ;?>

   
  

    <form action="" method="post">
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="New Password" name="new_password" required>
        
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" required>
         
      </div>      
 
      <div class="row">
       
        <div class="col-xs-12">
          <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat pull-right">Change Password</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
<!-- 
    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div> -->
    <!-- /.social-auth-links -->
  </div>
  <div style="text-align: center;margin-top: 10px;"><a href="<?=URL_ROOT;?>" class="text-center">← Back to Dashboard</a></div>
  <!-- /.login-box-body -->
</div>