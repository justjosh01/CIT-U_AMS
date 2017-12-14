 

 

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
            <label for="admin_id" class="col-sm-2 control-label">Admin ID * </label>
            <div class="col-sm-10">
              <input type="text" name="admin_id" class="form-control" required placeholder="Full Name" value="<?=isset($data['admin']['admin_id']) ? $data['admin']['admin_id'] : ''; ?>">
            </div>
          </div>

          <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Name * </label>
            <div class="col-sm-10">
              <input type="text" id="name" name="name" class="form-control" required placeholder="Full Name" value="<?=isset($data['admin']['name']) ? $data['admin']['name'] : ''; ?>">
            </div>
          </div>

          <div class="form-group" >
            <label for="gender" class="col-md-2 control-label">Gender</label>
            <div class="col-md-10">
               <select id="gender" class="form-control" name="gender" style="width: 100%;">
                  <option value=""></option>
                  <?php foreach ($data['gender'] as $key => $value) {

                  // $selected = ($key=='Male') ? 'selected':'';
                  $selected = ($data['admin']['gender']==$key) ? 'selected':'';
                    
                  echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
                  } ?> 

              </select>
              
            </div>
          </div> 

          <div class="form-group">
            <label for="date_of_birth" class="col-md-2 control-label">Date of Birth</label>
              <div class="col-md-10">
                 <input type="date" id="date_of_birth" name="date_of_birth" class="form-control" required placeholder="Date of Birth" value="<?=isset($data['admin']['date_of_birth']) ? $data['admin']['date_of_birth'] : ''; ?>" >
              </div>
          </div>

          <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email * </label>
            <div class="col-sm-10">
              <input type="email" id="email" name="email" class="form-control" required placeholder="Email Address" value="<?=isset($data['admin']['email']) ? $data['admin']['email'] : ''; ?>">
              
            </div>
          </div>

          <div class="form-group">
            <label for="contact_number" class="col-sm-2 control-label">Contact Number * </label>
            <div class="col-sm-10">
              <input type="text" id="contact_number" name="contact_number" class="form-control" placeholder="Contact Number"  value="<?=isset($data['admin']['contact_number']) ? $data['admin']['contact_number'] : ''; ?>" >
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
            <label for="country" class="col-md-2 control-label">Location </label>
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
 

        <!--   <div class="form-group">
            <label for="password" class="col-sm-2 control-label">Password * </label>
            <div class="col-sm-10">
              <input type="password" id="password" name="password" class="form-control"  placeholder="Password">
              
            </div>
          </div>
          <div class="form-group">
            <label for="retype_password" class="col-sm-2 control-label">Retype Password * </label>
            <div class="col-sm-10">
              <input type="password" id="retype_password" name="confirm_password" class="form-control"  placeholder="Retype Password">
              
            </div>
          </div> -->
          
           
          


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
 