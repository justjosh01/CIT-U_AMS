<div class="login-box">
  <div class="login-logo">
    <div style="margin-bottom:10px;padding-top: 10px;" align="center">
         <img src="<?=ASSETS;?>images/favicon.png" height="80px;"  class=""> 
      </div>
    <a href=""><b>Alumni Monitoring System</b> <br>Forgot Password</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Input email to reset your password</p>


    <?=isset($data['error']) ? error_message($data['error']):''; ;?>
    <?=isset($data['success']) ? success_message($data['success']):''; ;?>

   
  

    <form action="" method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
 
      <div class="row">
        <div class="col-xs-6">
         
        
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat pull-right">Continue</button>
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

  
    <a href="<?=URL_ROOT.$this->url[0];?>/login" class="text-center">I already have a Account</a><br>


    <?php if($this->url[0]=='admins'): ?>
    <a href="<?=URL_ROOT;?>admins/register" class="text-center">Register an account</a>
    <?php endif; ?>


  </div>
  <div style="text-align: center;margin-top: 30px;"><a href="<?=URL_ROOT;?>" class="text-center" >← Back to Dashboard</a></div>
  <!-- /.login-box-body -->
</div>