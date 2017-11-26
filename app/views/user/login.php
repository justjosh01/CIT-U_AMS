<div class="login-box">
  <div class="login-logo">
      <div style="margin-bottom:10px;padding-top: 10px;" align="center">
         <img src="<?=ASSETS;?>images/favicon.png" height="80px;"  class=""> 
      </div>
    <a href=""><b>Alumni Monitoring System</b> Login</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg"><?=ucwords($this->url[0]);?> Login</p>


    <?=isset($data['error']) ? error_message($data['error']):''; ;?>
    <?=isset($data['success']) ? success_message($data['success']):''; ;?>

    <?php $action = isset($this->url[0]) && $this->url[0] == 'admins' && $this->url[1] == 'verify_email' ? URL_ROOT.'admins/login' : '';?>
  

    <form action="<?=$action;?>" method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email" required value="<?=isset($_POST['email']) ? $_POST['email']:'';?>">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" required >
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
<!--           <div class="checkbox ">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div> -->
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
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

    <a href="<?=URL_ROOT.$this->url[0];?>/forgot_password" class="text-center">I forgot my password</a><br>

    <?php if($this->url[0]=='admins'): ?>
    <a href="<?=URL_ROOT;?>admins/register" class="text-center">Register a new account</a>
    <?php endif; ?>

    <?php if($this->url[0]=='alumni'): ?>
     <a href="<?=URL_ROOT;?>alumni/activate" class="text-center">Activate account</a>
    <?php endif; ?>

  </div>

  <div style="text-align: center;margin-top: 10px;"><a href="<?=URL_ROOT;?>" class="text-center">← Back to Dashboard</a></div>
  <!-- /.login-box-body -->
</div>