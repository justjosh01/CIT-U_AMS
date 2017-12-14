

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
        <div class="box-header with-border">
          <h3 class="box-title">Personal Information</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body ">

        <form class="form-horizontal" method="post" action="" role="form" enctype="multipart/form-data">

          <div class="form-group">
            <label for="alumni_id" class="col-md-2 control-label">ID Number</label>
              <div class="col-md-10">
                <input class="form-control" type="text" id="alumni_id" value="<?=isset($data['alumnus']['alumni_id']) ? $data['alumnus']['alumni_id'] : ''; ?>" name="alumni_id"  readonly>
              </div>
          </div>


          <div class="form-group">
            <label for="name" class="col-md-2 control-label">Full Name</label>
              <div class="col-md-10">
                <input class="form-control" type="text" id="name" value="<?=isset($data['alumnus']['name']) ? $data['alumnus']['name'] : ''; ?>" name="name" required placeholder="Full Name" readonly>
              </div>
          </div>


          <div class="form-group">
            <label for="mailing_address" class="col-md-2 control-label">Mailing Address</label>
            <div class="col-md-10">
              <input type="text" id="mailing_address" name="mailing_address" class="form-control" required placeholder="Mailing Address" value="<?=isset($data['alumnus']['mailing_address']) ? $data['alumnus']['mailing_address'] : ''; ?>">
              
            </div>
          </div>

           <div class="form-group" >
            <label for="gender" class="col-md-2 control-label">Gender</label>
            <div class="col-md-10">
              <select id="gender" class="form-control" name="gender" style="width: 100%;" >
                  <option value=""></option>
                  <?php foreach ($data['gender'] as $key => $value) {

                  $selected = ($data['alumnus']['gender']==$key) ? 'selected':'';
                    
                    echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
                  } ?> 

              </select>
            </div>
          </div> 
          
          <div class="form-group">
            <label for="date_of_birth" class="col-md-2 control-label">Date of Birth</label>
              <div class="col-md-10">
                <input type="date" id="date_of_birth" class="form-control" value="<?=isset($data['alumnus']['date_of_birth']) ? $data['alumnus']['date_of_birth'] : ''; ?>" name="date_of_birth" readonly>
              </div>
          </div>

          <div class="form-group">
            <label for="place_of_birth" class="col-md-2 control-label">Place of Birth</label>
              <div class="col-md-10">
                <input type="text" id="place_of_birth" class="form-control" required placeholder="Place of Birth" value="<?=isset($data['alumnus']['place_of_birth']) ? $data['alumnus']['place_of_birth'] : ''; ?>" name="place_of_birth" >
              </div>
          </div>

          <div class="form-group">
            <label for="home_address" class="col-md-2 control-label">Home Address</label>
            <div class="col-md-10">
              <input type="text" id="home_address" name="home_address" class="form-control" required placeholder="Home Address" value="<?=isset($data['alumnus']['home_address']) ? $data['alumnus']['home_address'] : ''; ?>">
              
            </div>
          </div>

          <div class="form-group">
            <label for="citizenship" class="col-md-2 control-label">Citizenship</label>
            <div class="col-md-10">
              <input type="text" id="citizenship" name="citizenship" class="form-control" required placeholder="Citizenship" value="<?=isset($data['alumnus']['citizenship']) ? $data['alumnus']['citizenship'] : ''; ?>">
              
            </div>
          </div>



          <div class="form-group">
            <label for="civil_status" class="col-md-2 control-label">Civil Status</label>
              <div class="col-md-10">
                <select id="civil_status" class="form-control" name="civil_status" style="width: 100%;">
                  <option value=""></option>
                  <?php foreach ($data['civil_status'] as $key => $value) {

                  $selected = ($data['alumnus']['civil_status']==$key) ? 'selected':'';
                    
                    echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
                  } ?> 

              </select>
              </div>
          </div>

          <div class="form-group">
            <label for="email" class="col-md-2 control-label">Email</label>
            <div class="col-md-10">
              <input type="email" id="email" name="email" class="form-control" required placeholder="Email Address" value="<?=isset($data['alumnus']['email']) ? $data['alumnus']['email'] : ''; ?>" readonly>
              
            </div>
          </div> 

          <div class="form-group">
            <label for="contact_number" class="col-md-2 control-label">Contact Number</label>
            <div class="col-md-10">
              <input type="text" id="contact_number" name="contact_number" class="form-control" value="<?=isset($data['alumnus']['contact_number']) ? $data['alumnus']['contact_number'] : ''; ?>" >
              
            </div>
          </div> 

          <div class="form-group">
            <label for="location" class="col-md-2 control-label">Location</label>
              <div class="col-md-10">
                <select id="location" class="form-control" name="location" style="width: 100%;">
                  <option value=""></option>
                  <?php foreach ($data['location'] as $key => $value) {

                  $selected = ($data['alumnus']['location']==$key) ? 'selected':'';
                    
                    echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
                  } ?> 

              </select>
              </div>
          </div>

          <div class="box-header">
            <hr>
              <h3 class="box-title">Educational Background</h3>
            <hr>
          </div>
       
          <div class="form-group">
            <label for="elementary" class="col-md-2 control-label">Elementary</label>
              <div class="col-md-10">
                <input class="form-control" type="text" id="elementary" value="<?=isset($data['alumnus']['elementary']) ? $data['alumnus']['elementary'] : ''; ?>" name="elementary">
              </div>
          </div>
          <div class="form-group">
            <label for="secondary" class="col-md-2 control-label">Secondary</label>
              <div class="col-md-10">
                <input class="form-control" type="text" id="secondary" value="<?=isset($data['alumnus']['secondary']) ? $data['alumnus']['secondary'] : ''; ?>" name="secondary">
              </div>
          </div>
          <div class="form-group">
            <label for="tertiary" class="col-md-2 control-label">Tertiary</label>
              <div class="col-md-10">
                <input class="form-control" type="text" id="tertiary" value="<?=isset($data['alumnus']['tertiary']) ? $data['alumnus']['tertiary'] : ''; ?>" name="tertiary" readonly>
              </div>
          </div>

          <div class="form-group">
            <label for="degree" class="col-md-2 control-label">Course Taken</label>
              <div class="col-md-10">
                <select id="degree" class="form-control" name="degree" style="width: 100%;">
                  <option value=""></option>
                  <?php foreach ($data['degree'] as $key => $value) {

                  $selected = ($data['alumnus']['degree']==$key) ? 'selected':'';
                    
                    echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
                  } ?> 

              </select>
              </div>
          </div>
          <div class="form-group">
            <label for="year_graduated" class="col-md-2 control-label">Year Graduated</label>
              <div class="col-md-10">
                <select id="year_graduated" class="form-control" name="year_graduated" style="width: 100%;">
                  <option value=""></option>
                  <?php foreach ($data['year'] as $key => $value) {

                  $selected = ($data['alumnus']['year_graduated']==$key) ? 'selected':'';
                    
                    echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
                  } ?> 

              </select>
              </div>
          </div>

          <div class="form-group">
            <label for="date_of_graduation" class="col-md-2 control-label">Date of Graduation</label>
              <div class="col-md-10">
                <input type="date" id="date_of_graduation" class="form-control" value="<?=isset($data['alumnus']['date_of_graduation']) ? $data['alumnus']['date_of_graduation'] : ''; ?>" name="date_of_graduation" >
              </div>
          </div>

          <div class="box-header">
          <hr>
          <h3 class="box-title">Current Employment Information</h3>
          <hr>
        </div>
        
          <div class="form-group">
            <label for="employment_status" class="col-md-2 control-label">Current Employment Status</label>
              <div class="col-md-10">
                <select id="employment_status" class="form-control" name="employment_status" style="width: 100%;">
                  <option value=""></option>
                  <?php foreach ($data['employment_status'] as $key => $value) {

                  $selected = ($data['alumnus']['employment_status']==$key) ? 'selected':'';
                    
                    echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
                  } ?> 

              </select>
              </div>
          </div>
          <div class="form-group">
            <label for="year_hired_or_fired" class="col-md-2 control-label">Since</label>
              <div class="col-md-10">
                <select id="year_hired_or_fired" class="form-control" name="year_hired_or_fired" style="width: 100%;">
                  <option value=""></option>
                  <?php foreach ($data['year'] as $key => $value) {

                  $selected = ($data['alumnus']['year_hired_or_fired']==$key) ? 'selected':'';
                    
                    echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
                  } ?> 

              </select>
              </div>
          </div>
          <div class="form-group">
            <label for="sector" class="col-md-2 control-label">Sector</label>
              <div class="col-md-10">
                <select id="sector" class="form-control" name="sector" style="width: 100%;">
                  <option value=""></option>
                  <?php foreach ($data['sector'] as $key => $value) {

                  $selected = ($data['alumnus']['sector']==$key) ? 'selected':'';
                    
                    echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
                  } ?> 

              </select>
              </div>
          </div>
          <div class="form-group">
            <label for="career_field" class="col-md-2 control-label">Career Field</label>
              <div class="col-md-10">
                <select id="career_field" class="form-control" name="career_field">
                  <option></option>
                  <?php foreach ($data['career_field'] as $key => $value) {

                  $selected = ($data['alumnus']['career_field']==$key) ? 'selected':'';
                    
                    echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
                  } ?> 
                </select>
              </div>
          </div>
          <div class="form-group">
            <label for="work_status" class="col-md-2 control-label">Status of Employment</label>
              <div class="col-md-10">
                <select id="work_status" class="form-control" name="work_status">
                  <option></option>
                  <?php foreach ($data['work_status'] as $key => $value) {

                  $selected = ($data['alumnus']['work_status']==$key) ? 'selected':'';
                    
                    echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
                  } ?> 
                </select>
              </div>
          </div>
          <div class="form-group">
            <label for="is_job_aligned" class="col-md-2 control-label">Is current job related to graduate academic training?</label>
              <div class="col-md-10">
                <select id="is_job_aligned" class="form-control" name="is_job_aligned">
                  <option></option>
                 <?php foreach ($data['job_aligned'] as $key => $value) {

                  $selected = ($data['alumnus']['is_job_aligned']==$key) ? 'selected':'';
                    
                    echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
                  } ?> 
                </select>
              </div>
          </div>
          <div class="form-group">
            <label for="position" class="col-md-2 control-label">Position</label>
              <div class="col-md-10">
                <input class="form-control" type="text" id="position" value="<?=isset($data['alumnus']['position']) ? $data['alumnus']['position'] : ''; ?>" name="position">
              </div>
          </div>
          <div class="form-group">
            <label for="salary_range" class="col-md-2 control-label">Monthly Salary Range</label>
              <div class="col-md-10">
                <select id="salary_range" class="form-control" name="salary_range">
                  <option></option>
                  <?php foreach ($data['salary_range'] as $key => $value) {

                  $selected = ($data['alumnus']['salary_range']==$key) ? 'selected':'';
                    
                    echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
                  } ?> 
                </select>
              </div>
          </div>
          <div class="form-group">
            <label for="company_name" class="col-md-2 control-label">Company Name</label>
              <div class="col-md-10">
                <input class="form-control" type="text" id="company_name" value="<?=isset($data['alumnus']['company_name']) ? $data['alumnus']['company_name'] : ''; ?>" name="company_name">
              </div>
          </div>
          <div class="form-group">
            <label for="company_address" class="col-md-2 control-label">Company Address</label>
              <div class="col-md-10">
                <input class="form-control" type="text" id="company_address" value="<?=isset($data['alumnus']['company_address']) ? $data['alumnus']['company_address'] : ''; ?>" name="company_address">
              </div>
          </div>

          <div class="box-header">
          <hr>
          <h3 class="box-title">Employment History Information</h3>
          <hr>
        </div>
        
          <div class="form-group">
            <label for="past_employment_status" class="col-md-2 control-label">Status</label>
              <div class="col-md-10">
                <select id="past_employment_status" class="form-control" name="past_employment_status">
                  <option></option>
                   <?php foreach ($data['past_employment_status'] as $key => $value) {

                  $selected = ($data['alumnus']['past_employment_status']==$key) ? 'selected':'';
                    
                    echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
                  } ?> 
                </select>
              </div>
          </div>
          <div class="form-group">
            <label for="past_year_hired_or_fired" class="col-md-2 control-label">Since</label>
              <div class="col-md-10">
                <select id="past_year_hired_or_fired" class="form-control" name="past_year_hired_or_fired">
                  <option></option>
                 <?php foreach ($data['year'] as $key => $value) {

                  $selected = ($data['alumnus']['past_year_hired_or_fired']==$key) ? 'selected':'';
                    
                    echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
                  } ?> 
                </select>
              </div>
          </div>
          <div class="form-group">
            <label for="past_sector" class="col-md-2 control-label">Sector</label>
              <div class="col-md-10">
                <select id="past_sector" class="form-control" name="past_sector">
                  <option></option>
                   <?php foreach ($data['sector'] as $key => $value) {

                  $selected = ($data['alumnus']['past_sector']==$key) ? 'selected':'';
                    
                    echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
                  } ?> 
                </select>
              </div>
          </div>
          <div class="form-group">
            <label for="past_career_field" class="col-md-2 control-label">Career Field</label>
              <div class="col-md-10">
                <select id="past_career_field" class="form-control" name="past_career_field">
                  <option></option>
                  <?php foreach ($data['career_field'] as $key => $value) {

                  $selected = ($data['alumnus']['past_career_field']==$key) ? 'selected':'';
                    
                    echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
                  } ?> 
                </select>
              </div>
          </div>
          <div class="form-group">
            <label for="past_work_status" class="col-md-2 control-label">Status of Employment</label>
              <div class="col-md-10">
                <select id="past_work_status" class="form-control" name="past_work_status">
                  <option></option>
                  <?php foreach ($data['work_status'] as $key => $value) {

                  $selected = ($data['alumnus']['past_work_status']==$key) ? 'selected':'';
                    
                    echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
                  } ?> 
                </select>
              </div>
          </div>
          <div class="form-group">
            <label for="is_past_job_aligned" class="col-md-2 control-label">Is past job related to graduate academic training?</label>
              <div class="col-md-10">
                <select id="is_past_job_aligned" class="form-control" name="is_past_job_aligned">
                 <option></option>
                 <?php foreach ($data['job_aligned'] as $key => $value) {

                  $selected = ($data['alumnus']['is_past_job_aligned']==$key) ? 'selected':'';
                    
                    echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
                  } ?> 
                </select>
              </div>
          </div>
          <div class="form-group">
            <label for="past_position" class="col-md-2 control-label">Position</label>
              <div class="col-md-10">
                <input id="past_position" class="form-control" type="text" value="<?=isset($data['alumnus']['past_position']) ? $data['alumnus']['past_position'] : ''; ?>" name="past_position">
              </div>
          </div>
          <div class="form-group">
            <label for="past_salary_range" class="col-md-2 control-label">Monthly Salary Range</label>
              <div class="col-md-10">
                <select id="past_salary_range" class="form-control" name="past_salary_range">
                  <option></option>
                 <?php foreach ($data['salary_range'] as $key => $value) {

                  $selected = ($data['alumnus']['past_salary_range']==$key) ? 'selected':'';
                    
                    echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
                  } ?> 
                </select>
              </div>
          </div>
          <div class="form-group">
            <label for="past_company_name" class="col-md-2 control-label">Company Name</label>
              <div class="col-md-10">
                <input id="past_company_name" class="form-control" type="text" value="<?=isset($data['alumnus']['past_company_name']) ? $data['alumnus']['past_company_name'] : ''; ?>" name="past_company_name">
              </div>
          </div>
          <div class="form-group">
            <label for="past_company_address" class="col-md-2 control-label">Company Address</label>
              <div class="col-md-10">
                <input id="past_company_address" class="form-control" type="text" value="<?=isset($data['alumnus']['past_company_address']) ? $data['alumnus']['past_company_address'] : ''; ?>" name="past_company_address">
              </div>
          </div>

           <div class="box-header">
          <hr>
          <h3 class="box-title">Professional Awards/Recognitions</h3>
          <p><small>Please add all of your professional awards or recognitions received. If none, please skip or write N/A.</small></p>
          <hr>
        </div>
       
          <div class="form-group">
            <label for="award" class="col-md-2 control-label">Title of Award</label>
              <div class="col-md-10">
                <input id="award" class="form-control" type="text" value="<?=isset($data['alumnus']['award']) ? $data['alumnus']['award'] : ''; ?>" name="award">
              </div>
          </div>
          <div class="form-group">
            <label for="date_given" class="col-md-2 control-label">Date Given</label>
              <div class="col-md-10">
                <input id="date_given" class="form-control" type="date" value="<?=isset($data['alumnus']['date_given']) ? $data['alumnus']['date_given'] : ''; ?>" name="date_given">
              </div>
          </div>
          <div class="form-group">
            <label for="awarding_body" class="col-md-2 control-label">Awarding Body</label>
              <div class="col-md-10">
                <input id="awarding_body" class="form-control" type="text" value="<?=isset($data['alumnus']['awarding_body']) ? $data['alumnus']['awarding_body'] : ''; ?>" name="awarding_body">
              </div>
          </div>

          <div class="box-header">
          <hr>
          <h3 class="box-title">Personal Testimony</h3>
          <p><small>Kindly write a brief testimony on how the program/curriculum has been helpful</small></p>
          <hr>
        </div>
        
          <div class="form-group">
            <label for="testimony_personal_family" class="col-md-2 control-label">Personal / Family</label>
              <div class="col-md-10">
                <input id="testimony_personal_family" class="form-control" type="text" value="<?=isset($data['alumnus']['testimony_personal_family']) ? $data['alumnus']['testimony_personal_family'] : ''; ?>" name="testimony_personal_family">
              </div>
          </div>
          <div class="form-group">
            <label for="testimony_career" class="col-md-2 control-label">Career</label>
              <div class="col-md-10">
                <input id="testimony_career" class="form-control" type="text" value="<?=isset($data['alumnus']['testimony_career']) ? $data['alumnus']['testimony_career'] : ''; ?>" name="testimony_career">
              </div>
          </div>
          <div class="form-group">
            <label for="testimony_community" class="col-md-2 control-label">Community / Regions / National Development:</label>
              <div class="col-md-10">
                <input id="testimony_community" class="form-control" type="text" value="<?=isset($data['alumnus']['testimony_community']) ? $data['alumnus']['testimony_community'] : ''; ?>" name="testimony_community">
              </div>
          </div>

     
        <div class="box-header">
          <hr>
          <h3 class="box-title">User Information</h3>
          <hr>
        </div>

          <div class="form-group">
            <label for="recovery_email" class="col-md-2 control-label">Recovery Email</label>
              <div class="col-md-10">
                <input id="recovery_email" class="form-control" type="text" value="<?=isset($data['alumnus']['recovery_email']) ? $data['alumnus']['recovery_email'] : ''; ?>" name="recovery_email">
              </div>
          </div>
          <div class="form-group">
            <label for="username" class="col-md-2 control-label">Username</label>
              <div class="col-md-10">
                <input id="username" class="form-control" type="text" value="<?=isset($data['alumnus']['username']) ? $data['alumnus']['username'] : ''; ?>" name="username">
              </div>
          </div>
          <div class="form-group">
            <label for="newpassword" class="col-md-2 control-label">Change Password</label>
              <div class="col-md-10">
               <input id="newpassword" class="form-control" type="password" value=""  name="newpassword" placeholder="Enter only if you want to change the password" >
              </div>
          </div>  
          <div class="form-group">
            <label for="confirmpassword" class="col-md-2 control-label">Confirm Password * </label>
            <div class="col-md-10">
              <input id="confirmpassword" type="password" name="confirmpassword" class="form-control" required placeholder="Confirm Password" value="">
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
 