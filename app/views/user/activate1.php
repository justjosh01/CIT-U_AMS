<div class="login-box">
  <div class="login-logo">
    <div style="margin-bottom:10px;padding-top: 10px;" align="center">
         <img src="<?=ASSETS;?>images/favicon.png" height="80px;"  class=""> 
      </div>
    <a href=""><b>Alumni Monitoring System</b> <br>Activate Account</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Input email to confirm your account</p>


    <?=isset($data['error']) ? error_message($data['error']):''; ;?>
    <?=isset($data['success']) ? success_message($data['success']):''; ;?>

   
  <?php $action = isset($this->url[0]) && $this->url[0] == 'alumni' && $this->url[1] == 'activate_account' ? URL_ROOT.'alumni/activate' : '';?>

    <form action="<?=$action;?>" method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email" required value="<?=isset($_POST['email']) ? $_POST['email']:'';?>">
        <span class="fa fa-envelope form-control-feedback"></span>
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


  
    <a href="<?=URL_ROOT.$this->url[0];?>/login" class="text-center">I already have a Account</a><br>




  </div>
  <div style="text-align: center;margin-top: 30px;"><a href="<?=URL_ROOT;?>">← Back to Dashboard</a></div>
  <!-- /.login-box-body -->
</div>