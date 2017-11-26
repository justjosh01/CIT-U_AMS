 

 

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
          <h3 class="box-title">Alumni Registration</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body ">


 
 

        <form  method="post" action=""  enctype="multipart/form-data" class="form-horizontal">

          <div class="form-group">
            <label class="col-sm-2 control-label">Alumni ID * </label>
            <div class="col-sm-10">
              <input type="text" name="alumni_id" class="form-control" required placeholder="Alumni ID" value="<?=isset($data['alumnus']['alumni_id']) ? $data['alumnus']['alumni_id'] : ''; ?>">
              
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Name * </label>
            <div class="col-sm-10">
              <input type="text" name="name" class="form-control" required placeholder="Full Name" value="<?=isset($data['alumnus']['name']) ? $data['alumnus']['name'] : ''; ?>">
              
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Email * </label>
            <div class="col-sm-10">
              <input type="email" name="email" class="form-control" required placeholder="Email Address" value="<?=isset($data['alumnus']['email']) ? $data['alumnus']['email'] : ''; ?>">
              
            </div>
          </div>  
          <div class="form-group">
            <label class="col-sm-2 control-label">Contact Number * </label>
            <div class="col-sm-10">
              <input type="text" name="contact_number" class="form-control" placeholder="Contact Number"  value="<?=isset($data['alumnus']['contact_number']) ? $data['alumnus']['contact_number'] : ''; ?>" >
            </div>
          </div> 

          <div class="form-group">
            <label for="date_of_birth" class="col-md-2 control-label">Date of Birth</label>
              <div class="col-md-10">
                <input type="date" id="date_of_birth" class="form-control" value="<?=isset($data['alumnus']['date_of_birth']) ? $data['alumnus']['date_of_birth'] : ''; ?>" name="date_of_birth">
              </div>
          </div>

          <div class="form-group" >
            <label class="col-md-2 control-label">Gender</label>
            <div class="col-md-10">
              <select class="form-control" name="gender"  required>
                <option></option>
                <option <?=isset($data['alumnus']['gender']) && ($data['alumnus']['gender']=='Male') ? 'selected' : ''; ?> value="Male">Male</option>
                <option <?=isset($data['alumnus']['gender']) && ($data['alumnus']['gender']=='Female') ? 'selected' : ''; ?> value="Female">Female</option>
 
                <option <?=isset($data['alumnus']['gender']) && ($data['alumnus']['gender']=='Others') ? 'selected' : ''; ?> value="Others">Others</option>
              </select>
            </div>
          </div> 

          <div class="form-group">
            <label for="year_graduated" class="col-md-2 control-label">Year Graduated *</label>
              <div class="col-md-10">
                <input type="year" id="year_graduated" class="form-control" value="<?=isset($data['alumnus']['year_graduated']) ? $data['alumnus']['year_graduated'] : ''; ?>" name="year_graduated">
              </div>
          </div>

          
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
 