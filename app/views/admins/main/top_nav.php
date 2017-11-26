
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- <img src="<?=ASSETS.BACK;?>dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> -->
              <i class="fa fa-user"></i>
              <span class="hidden-xs"><?=name();?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header "  >
                <img src="<?=ASSETS;?>images/head.png" class="img-circle" alt="User Image"> 


                <p>
                 <b><?=name();?></b>&nbsp;
                  <medium><?=email_address();?></medium>
                </p>
              </li>
              <!-- Menu Body -->
<!--               <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                
              </li> -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?=URL_ROOT.$this->url[0];?>/update_profile" class="btn btn-default btn-flat"><i class="fa fa-fw fa-user"></i> Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?=URL_ROOT.$this->url[0];?>/logout" class="btn btn-default btn-flat"><i class="fa fa-fw fa-sign-out"></i> Sign out</a>
                </div>
              </li>
            </ul>
          </li>
<!-- 
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
 -->


            
          <!-- Control Sidebar Toggle Button -->
          <!-- <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
        </ul>
      </div>