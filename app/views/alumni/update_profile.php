

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
            <label class="col-md-2 control-label">ID Number</label>
              <div class="col-md-10">
                <input class="form-control" type="text" value="<?=isset($data['alumnus']['alumni_id']) ? $data['alumnus']['alumni_id'] : ''; ?>" name="alumni_id"  readonly>
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">Full Name</label>
              <div class="col-md-10">
                <input class="form-control" type="text" value="<?=isset($data['alumnus']['name']) ? $data['alumnus']['name'] : ''; ?>" name="name" required placeholder="Full Name" readonly>
              </div>
          </div>


          <div class="form-group">
            <label class="col-md-2 control-label">Mailing Address</label>
            <div class="col-md-10">
              <input type="text" name="mailing_address" class="form-control" required placeholder="Mailing Address" value="<?=isset($data['alumnus']['mailing_address']) ? $data['alumnus']['mailing_address'] : ''; ?>">
              
            </div>
          </div>

           <div class="form-group" >
            <label class="col-md-2 control-label">Gender</label>
            <div class="col-md-10">
              <select class="form-control" name="gender"  required>
                <option></option>
                <option <?=isset($data['alumnus']['gender']) && ($data['alumnus']['gender']=='Male') ? 'selected' : ''; ?> value="1">Male</option>
                <option <?=isset($data['alumnus']['gender']) && ($data['alumnus']['gender']=='Female') ? 'selected' : ''; ?> value="2">Female</option>
 
                <option <?=isset($data['alumnus']['gender']) && ($data['alumnus']['gender']=='Others') ? 'selected' : ''; ?> value="3">Others</option>
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
            <label for="civil_status" class="col-md-2 control-label">Civil Status</label>
              <div class="col-md-10">
                <select class="form-control" name="civil_status"  required>
                  <option></option>
                  <option <?=isset($data['alumnus']['civil_status']) && ($data['alumnus']['civil_status']=="Single") ? 'selected' : ''; ?> value="1" >Single</option>
                  <option <?=isset($data['alumnus']['civil_status']) && ($data['alumnus']['civil_status']=="Married") ? 'selected' : ''; ?> value="2" >Married</option>
                  <option <?=isset($data['alumnus']['civil_status']) && ($data['alumnus']['civil_status']=="Separated") ? 'selected' : ''; ?> value="3" >Sepated</option>
                  <option <?=isset($data['alumnus']['civil_status']) && ($data['alumnus']['civil_status']=="Widow") ? 'selected' : ''; ?> value="4" >Widow</option>
                  <option <?=isset($data['alumnus']['civil_status']) && ($data['alumnus']['civil_status']=="Deceased") ? 'selected' : ''; ?> value="5" >Deceased</option>
                </select>
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">Email</label>
            <div class="col-md-10">
              <input type="email" name="email" class="form-control" required placeholder="Email Address" value="<?=isset($data['alumnus']['email']) ? $data['alumnus']['email'] : ''; ?>" readonly>
              
            </div>
          </div> 

          <div class="form-group">
            <label class="col-md-2 control-label">Contact Number</label>
            <div class="col-md-10">
              <input type="text" name="contact_number" class="form-control" value="<?=isset($data['alumnus']['contact_number']) ? $data['alumnus']['contact_number'] : ''; ?>" >
              
            </div>
          </div> 

          
           
        </form>
      </div>
       <!-- /.box-body -->
      </div>
      <!-- /.box -->

      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Educational Background</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body ">

        <form class="form-horizontal" method="post" action="" role="form" enctype="multipart/form-data">
          <div class="form-group">
            <label class="col-md-2 control-label">Elementary</label>
              <div class="col-md-10">
                <input class="form-control" type="text" value="<?=isset($data['alumnus']['elementary']) ? $data['alumnus']['elementary'] : ''; ?>" name="elementary">
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Secondary</label>
              <div class="col-md-10">
                <input class="form-control" type="text" value="<?=isset($data['alumnus']['secondary']) ? $data['alumnus']['secondary'] : ''; ?>" name="secondary">
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Tertiary</label>
              <div class="col-md-10">
                <input class="form-control" type="text" value="<?=isset($data['alumnus']['tertiary']) ? $data['alumnus']['tertiary'] : ''; ?>" name="tertiary">
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">Course Taken</label>
              <div class="col-md-10">
                <select class="form-control" name="degree"  required>
                  <option></option>
                  <option <?=isset($data['alumnus']['degree']) && ($data['alumnus']['degree']=='Bachelor of Science in Information Technology') ? 'selected' : ''; ?> value="1">Bachelor of Science in Information Technology</option>
                  <option <?=isset($data['alumnus']['degree']) && ($data['alumnus']['degree']=='Bachelor of Science in Computer Science') ? 'selected' : ''; ?> value="2">Bachelor of Science in Computer Science</option>
                  <option <?=isset($data['alumnus']['degree']) && ($data['alumnus']['degree']=='Bachelor of Science in Computer Engineering') ? 'selected' : ''; ?> value="3">Bachelor of Science in Computer Engineering</option>
                  <option <?=isset($data['alumnus']['degree']) && ($data['alumnus']['degree']=='Bachelor of Science in Mechanical Engineering') ? 'selected' : ''; ?> value="4">Bachelor of Science in Mechanical Engineering</option>
                  <option <?=isset($data['alumnus']['degree']) && ($data['alumnus']['degree']=='Bachelor of Science in Civil Engineering') ? 'selected' : ''; ?> value="5">Bachelor of Science in Civil Engineering</option>
                </select>
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Year Graduated</label>
              <div class="col-md-10">
                <select id="year_graduated" class="form-control" name="year">
                  <option></option>
                  <option <?=isset($data['alumnus']['year_graduated']) && ($data['alumnus']['year_graduated']=='2019') ? 'selected' : ''; ?> value="0">2019</option>
                  <option <?=isset($data['alumnus']['year_graduated']) && ($data['alumnus']['year_graduated']=='2018') ? 'selected' : ''; ?> value="1">2018</option>
                  <option <?=isset($data['alumnus']['year_graduated']) && ($data['alumnus']['year_graduated']=='2017') ? 'selected' : ''; ?> value="2">2017</option>
                  <option <?=isset($data['alumnus']['year_graduated']) && ($data['alumnus']['year_graduated']=='2016') ? 'selected' : ''; ?> value="3">2016</option>
                  <option <?=isset($data['alumnus']['year_graduated']) && ($data['alumnus']['year_graduated']=='2015') ? 'selected' : ''; ?> value="4">2015</option>
                  <option <?=isset($data['alumnus']['year_graduated']) && ($data['alumnus']['year_graduated']=='2014') ? 'selected' : ''; ?> value="5">2014</option>
                  <option <?=isset($data['alumnus']['year_graduated']) && ($data['alumnus']['year_graduated']=='2013') ? 'selected' : ''; ?> value="6">2013</option>
                  <option <?=isset($data['alumnus']['year_graduated']) && ($data['alumnus']['year_graduated']=='2012') ? 'selected' : ''; ?> value="7">2012</option>
                  <option <?=isset($data['alumnus']['year_graduated']) && ($data['alumnus']['year_graduated']=='2011') ? 'selected' : ''; ?> value="8">2011</option>
                  <option <?=isset($data['alumnus']['year_graduated']) && ($data['alumnus']['year_graduated']=='2010') ? 'selected' : ''; ?> value="9">2010</option>
                  <option <?=isset($data['alumnus']['year_graduated']) && ($data['alumnus']['year_graduated']=='2009') ? 'selected' : ''; ?> value="10">2009</option>
                  <option <?=isset($data['alumnus']['year_graduated']) && ($data['alumnus']['year_graduated']=='2008') ? 'selected' : ''; ?> value="11">2008</option>
                  <option <?=isset($data['alumnus']['year_graduated']) && ($data['alumnus']['year_graduated']=='2007') ? 'selected' : ''; ?> value="12">2007</option>
                  <option <?=isset($data['alumnus']['year_graduated']) && ($data['alumnus']['year_graduated']=='2006') ? 'selected' : ''; ?> value="13">2006</option>
                  <option <?=isset($data['alumnus']['year_graduated']) && ($data['alumnus']['year_graduated']=='2005') ? 'selected' : ''; ?> value="14">2005</option>
                  <option <?=isset($data['alumnus']['year_graduated']) && ($data['alumnus']['year_graduated']=='2004') ? 'selected' : ''; ?> value="15">2004</option>
                  <option <?=isset($data['alumnus']['year_graduated']) && ($data['alumnus']['year_graduated']=='2003') ? 'selected' : ''; ?> value="16">2003</option>
                  <option <?=isset($data['alumnus']['year_graduated']) && ($data['alumnus']['year_graduated']=='2002') ? 'selected' : ''; ?> value="17">2002</option>
                  <option <?=isset($data['alumnus']['year_graduated']) && ($data['alumnus']['year_graduated']=='2001') ? 'selected' : ''; ?> value="18">2001</option>
                  <option <?=isset($data['alumnus']['year_graduated']) && ($data['alumnus']['year_graduated']=='2000') ? 'selected' : ''; ?> value="19">2000</option>
                </select>
              </div>
          </div>
        </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Current Employment Information</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body ">

        <form class="form-horizontal" method="post" action="" role="form" enctype="multipart/form-data">
          <div class="form-group">
            <label class="col-md-2 control-label">Current Employment Status</label>
              <div class="col-md-10">
                <select id="employment_status" class="form-control" name="employment_status">
                  <option></option>
                  <option <?=isset($data['alumnus']['employment_status']) && ($data['alumnus']['employment_status']=='Employed') ? 'selected' : ''; ?> value="1">Employed</option>

                  <option<?=isset($data['alumnus']['employment_status']) && ($data['alumnus']['employment_status']=='Unemployed') ? 'selected' : ''; ?> value="2">Unemployed</option>
                </select>
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Since</label>
              <div class="col-md-10">
                <select id="year_hired_or_fired" class="form-control" name="year">
                  <option></option>
                  <option <?=isset($data['alumnus']['year_hired_or_fired']) && ($data['alumnus']['year_hired_or_fired']=='2019') ? 'selected' : ''; ?> value="0">2019</option>
                  <option <?=isset($data['alumnus']['year_hired_or_fired']) && ($data['alumnus']['year_hired_or_fired']=='2018') ? 'selected' : ''; ?> value="1">2018</option>
                  <option <?=isset($data['alumnus']['year_hired_or_fired']) && ($data['alumnus']['year_hired_or_fired']=='2017') ? 'selected' : ''; ?> value="2">2017</option>
                  <option <?=isset($data['alumnus']['year_hired_or_fired']) && ($data['alumnus']['year_hired_or_fired']=='2016') ? 'selected' : ''; ?> value="3">2016</option>
                  <option <?=isset($data['alumnus']['year_hired_or_fired']) && ($data['alumnus']['year_hired_or_fired']=='2015') ? 'selected' : ''; ?> value="4">2015</option>
                  <option <?=isset($data['alumnus']['year_hired_or_fired']) && ($data['alumnus']['year_hired_or_fired']=='2014') ? 'selected' : ''; ?> value="5">2014</option>
                  <option <?=isset($data['alumnus']['year_hired_or_fired']) && ($data['alumnus']['year_hired_or_fired']=='2013') ? 'selected' : ''; ?> value="6">2013</option>
                  <option <?=isset($data['alumnus']['year_hired_or_fired']) && ($data['alumnus']['year_hired_or_fired']=='2012') ? 'selected' : ''; ?> value="7">2012</option>
                  <option <?=isset($data['alumnus']['year_hired_or_fired']) && ($data['alumnus']['year_hired_or_fired']=='2011') ? 'selected' : ''; ?> value="8">2011</option>
                  <option <?=isset($data['alumnus']['year_hired_or_fired']) && ($data['alumnus']['year_hired_or_fired']=='2010') ? 'selected' : ''; ?> value="9">2010</option>
                  <option <?=isset($data['alumnus']['year_hired_or_fired']) && ($data['alumnus']['year_hired_or_fired']=='2009') ? 'selected' : ''; ?> value="10">2009</option>
                  <option <?=isset($data['alumnus']['year_hired_or_fired']) && ($data['alumnus']['year_hired_or_fired']=='2008') ? 'selected' : ''; ?> value="11">2008</option>
                  <option <?=isset($data['alumnus']['year_hired_or_fired']) && ($data['alumnus']['year_hired_or_fired']=='2007') ? 'selected' : ''; ?> value="12">2007</option>
                  <option <?=isset($data['alumnus']['year_hired_or_fired']) && ($data['alumnus']['year_hired_or_fired']=='2006') ? 'selected' : ''; ?> value="13">2006</option>
                  <option <?=isset($data['alumnus']['year_hired_or_fired']) && ($data['alumnus']['year_hired_or_fired']=='2005') ? 'selected' : ''; ?> value="14">2005</option>
                  <option <?=isset($data['alumnus']['year_hired_or_fired']) && ($data['alumnus']['year_hired_or_fired']=='2004') ? 'selected' : ''; ?> value="15">2004</option>
                  <option <?=isset($data['alumnus']['year_hired_or_fired']) && ($data['alumnus']['year_hired_or_fired']=='2003') ? 'selected' : ''; ?> value="16">2003</option>
                  <option <?=isset($data['alumnus']['year_hired_or_fired']) && ($data['alumnus']['year_hired_or_fired']=='2002') ? 'selected' : ''; ?> value="17">2002</option>
                  <option <?=isset($data['alumnus']['year_hired_or_fired']) && ($data['alumnus']['year_hired_or_fired']=='2001') ? 'selected' : ''; ?> value="18">2001</option>
                  <option <?=isset($data['alumnus']['year_hired_or_fired']) && ($data['alumnus']['year_hired_or_fired']=='2000') ? 'selected' : ''; ?> value="19">2000</option>
                </select>
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Sector</label>
              <div class="col-md-10">
                <select id="sector" class="form-control" name="sector">
                  <option></option>
                  <option <?=isset($data['alumnus']['sector']) && ($data['alumnus']['sector']=='Government') ? 'selected' : ''; ?> value="1">Government</option>

                  <option <?=isset($data['alumnus']['sector']) && ($data['alumnus']['sector']=='Academe') ? 'selected' : ''; ?> value="2">Academe</option>

                  <option <?=isset($data['alumnus']['sector']) && ($data['alumnus']['sector']=='Private') ? 'selected' : ''; ?> value="3">Private</option>

                  <option <?=isset($data['alumnus']['sector']) && ($data['alumnus']['sector']=='NGO/Foundation') ? 'selected' : ''; ?> value="4">NGO/Foundation</option>

                  <option <?=isset($data['alumnus']['sector']) && ($data['alumnus']['sector']=='Self-employed') ? 'selected' : ''; ?> value="5">Self-employed</option>
                </select>
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Career Field</label>
              <div class="col-md-10">
                <select id="career_field" class="form-control" name="career_field">
                  <option></option>
                  <option <?=isset($data['alumnus']['career_field']) && ($data['alumnus']['career_field']=='Agriculture, Food, & Natural Resources') ? 'selected' : ''; ?> value="1">Agriculture, Food, & Natural Resources</option>

                  <option <?=isset($data['alumnus']['career_field']) && ($data['alumnus']['career_field']=='Business, Management, & Administration') ? 'selected' : ''; ?> value="2">Business, Management, & Administration</option>

                  <option <?=isset($data['alumnus']['career_field']) && ($data['alumnus']['career_field']=='Communications & Information Systems') ? 'selected' : ''; ?> value="3">Communications & Information Systems</option>

                  <option <?=isset($data['alumnus']['career_field']) && ($data['alumnus']['career_field']=='Engineering, Manufacturing, & Technology') ? 'selected' : ''; ?> value="4">Engineering, Manufacturing, & Technology</option>

                  <option <?=isset($data['alumnus']['career_field']) && ($data['alumnus']['career_field']=='Health Science Technology') ? 'selected' : ''; ?> value="5">Health Science Technology</option>

                  <option <?=isset($data['alumnus']['career_field']) && ($data['alumnus']['career_field']=='Human Services') ? 'selected' : ''; ?> value="6">Human Services</option>
                </select>
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Status of Employment</label>
              <div class="col-md-10">
                <select id="status_of_employment" class="form-control">
                  <option></option>
                  <option <?=isset($data['alumnus']['work_status']) && ($data['alumnus']['work_status']=='Permanent') ? 'selected' : ''; ?> value="1">Permanent</option>
                  
                  <option <?=isset($data['alumnus']['work_status']) && ($data['alumnus']['work_status']=='Temporary') ? 'selected' : ''; ?> value="2">Temporary</option>

                  <option <?=isset($data['alumnus']['work_status']) && ($data['alumnus']['work_status']=='Contractual') ? 'selected' : ''; ?> value="3">Contractual</option>

                  <option <?=isset($data['alumnus']['work_status']) && ($data['alumnus']['work_status']=='Self-employed') ? 'selected' : ''; ?> value="4">Self-employed</option>
                </select>
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Is current job related to graduate academic training?</label>
              <div class="col-md-10">
                <select id="is_job_aligned" class="form-control" name="is_job_aligned">
                  <option></option>
                 <option <?=isset($data['alumnus']['is_job_aligned']) && ($data['alumnus']['is_job_aligned']=='Yes') ? 'selected' : ''; ?> value="1">Yes</option>
                  <option <?=isset($data['alumnus']['is_job_aligned']) && ($data['alumnus']['is_job_aligned']=='No') ? 'selected' : ''; ?> value="2">No</option>
                </select>
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Position</label>
              <div class="col-md-10">
                <input class="form-control" type="text" value="<?=isset($data['alumnus']['position']) ? $data['alumnus']['position'] : ''; ?>" name="position">
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Monthly Salary Range</label>
              <div class="col-md-10">
                <select id="salary_range" class="form-control" name="salary_range">
                  <option></option>
                  <option <?=isset($data['alumnus']['salary_range']) && ($data['alumnus']['salary_range']=='5,000 - 20,000') ? 'selected' : ''; ?> value="1">5,000 - 20,000</option>

                  <option <?=isset($data['alumnus']['salary_range']) && ($data['alumnus']['salary_range']=='21,000 - 35,000') ? 'selected' : ''; ?> value="2">21,000 - 35,000</option>

                  <option <?=isset($data['alumnus']['salary_range']) && ($data['alumnus']['salary_range']=='36,000 - 50,000') ? 'selected' : ''; ?> value="3">36,000 - 50,000</option>

                  <option <?=isset($data['alumnus']['salary_range']) && ($data['alumnus']['salary_range']=='51,000 - 65,000') ? 'selected' : ''; ?> value="4">51,000 - 65,000</option>

                  <option <?=isset($data['alumnus']['salary_range']) && ($data['alumnus']['salary_range']=='66,000 - 80,000') ? 'selected' : ''; ?> value="5">66,000 - 80,000</option>

                  <option <?=isset($data['alumnus']['salary_range']) && ($data['alumnus']['salary_range']=='81,000 - 95,000') ? 'selected' : ''; ?> value="6">81,000 - 95,000</option>
                </select>
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Company Name</label>
              <div class="col-md-10">
                <input class="form-control" type="text" value="<?=isset($data['alumnus']['company_name']) ? $data['alumnus']['company_name'] : ''; ?>" name="company_name">
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Company Address</label>
              <div class="col-md-10">
                <input class="form-control" type="text" value="<?=isset($data['alumnus']['company_address']) ? $data['alumnus']['company_address'] : ''; ?>" name="company_address">
              </div>
          </div>
        </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Employment History Information</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body ">

        <form class="form-horizontal" method="post" action="" role="form" enctype="multipart/form-data">
          <div class="form-group">
            <label class="col-md-2 control-label">Status</label>
              <div class="col-md-10">
                <select id="past_employment_status" class="form-control" name="employment_status">
                  <option></option>
                   <option <?=isset($data['alumnus']['past_employment_status']) && ($data['alumnus']['past_employment_status']=='Employed, locally') ? 'selected' : ''; ?> value="1">Employed, locally</option>
                  
                  <option<?=isset($data['alumnus']['past_employment_status']) && ($data['alumnus']['past_employment_status']=='Employed, abroad') ? 'selected' : ''; ?> value="2">Employed, abroad</option>

                  <option<?=isset($data['alumnus']['past_employment_status']) && ($data['alumnus']['past_employment_status']=='Self-employed') ? 'selected' : ''; ?> value="2">Self-employed</option>
                </select>
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Since</label>
              <div class="col-md-10">
                <select id="past_employed_date" class="form-control" name="year">
                  <option></option>
                  <option <?=isset($data['alumnus']['past_year_hired_or_fired']) && ($data['alumnus']['past_year_hired_or_fired']=='2019') ? 'selected' : ''; ?> value="0">2019</option>
                  <option <?=isset($data['alumnus']['past_year_hired_or_fired']) && ($data['alumnus']['past_year_hired_or_fired']=='2018') ? 'selected' : ''; ?> value="1">2018</option>
                  <option <?=isset($data['alumnus']['past_year_hired_or_fired']) && ($data['alumnus']['past_year_hired_or_fired']=='2017') ? 'selected' : ''; ?> value="2">2017</option>
                  <option <?=isset($data['alumnus']['past_year_hired_or_fired']) && ($data['alumnus']['past_year_hired_or_fired']=='2016') ? 'selected' : ''; ?> value="3">2016</option>
                  <option <?=isset($data['alumnus']['past_year_hired_or_fired']) && ($data['alumnus']['past_year_hired_or_fired']=='2015') ? 'selected' : ''; ?> value="4">2015</option>
                  <option <?=isset($data['alumnus']['past_year_hired_or_fired']) && ($data['alumnus']['past_year_hired_or_fired']=='2014') ? 'selected' : ''; ?> value="5">2014</option>
                  <option <?=isset($data['alumnus']['past_year_hired_or_fired']) && ($data['alumnus']['past_year_hired_or_fired']=='2013') ? 'selected' : ''; ?> value="6">2013</option>
                  <option <?=isset($data['alumnus']['past_year_hired_or_fired']) && ($data['alumnus']['past_year_hired_or_fired']=='2012') ? 'selected' : ''; ?> value="7">2012</option>
                  <option <?=isset($data['alumnus']['past_year_hired_or_fired']) && ($data['alumnus']['past_year_hired_or_fired']=='2011') ? 'selected' : ''; ?> value="8">2011</option>
                  <option <?=isset($data['alumnus']['past_year_hired_or_fired']) && ($data['alumnus']['past_year_hired_or_fired']=='2010') ? 'selected' : ''; ?> value="9">2010</option>
                  <option <?=isset($data['alumnus']['past_year_hired_or_fired']) && ($data['alumnus']['past_year_hired_or_fired']=='2009') ? 'selected' : ''; ?> value="10">2009</option>
                  <option <?=isset($data['alumnus']['past_year_hired_or_fired']) && ($data['alumnus']['past_year_hired_or_fired']=='2008') ? 'selected' : ''; ?> value="11">2008</option>
                  <option <?=isset($data['alumnus']['past_year_hired_or_fired']) && ($data['alumnus']['past_year_hired_or_fired']=='2007') ? 'selected' : ''; ?> value="12">2007</option>
                  <option <?=isset($data['alumnus']['past_year_hired_or_fired']) && ($data['alumnus']['past_year_hired_or_fired']=='2006') ? 'selected' : ''; ?> value="13">2006</option>
                  <option <?=isset($data['alumnus']['past_year_hired_or_fired']) && ($data['alumnus']['past_year_hired_or_fired']=='2005') ? 'selected' : ''; ?> value="14">2005</option>
                  <option <?=isset($data['alumnus']['past_year_hired_or_fired']) && ($data['alumnus']['past_year_hired_or_fired']=='2004') ? 'selected' : ''; ?> value="15">2004</option>
                  <option <?=isset($data['alumnus']['past_year_hired_or_fired']) && ($data['alumnus']['past_year_hired_or_fired']=='2003') ? 'selected' : ''; ?> value="16">2003</option>
                  <option <?=isset($data['alumnus']['past_year_hired_or_fired']) && ($data['alumnus']['past_year_hired_or_fired']=='2002') ? 'selected' : ''; ?> value="17">2002</option>
                  <option <?=isset($data['alumnus']['past_year_hired_or_fired']) && ($data['alumnus']['past_year_hired_or_fired']=='2001') ? 'selected' : ''; ?> value="18">2001</option>
                  <option <?=isset($data['alumnus']['past_year_hired_or_fired']) && ($data['alumnus']['past_year_hired_or_fired']=='2000') ? 'selected' : ''; ?> value="19">2000</option>
                </select>
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Sector</label>
              <div class="col-md-10">
                <select id="past_sector" class="form-control" name="sector">
                  <option></option>
                   <option <?=isset($data['alumnus']['past_sector']) && ($data['alumnus']['past_sector']=='Government') ? 'selected' : ''; ?> value="1">Government</option>

                  <option <?=isset($data['alumnus']['past_sector']) && ($data['alumnus']['past_sector']=='Academe') ? 'selected' : ''; ?> value="2">Academe</option>

                  <option <?=isset($data['alumnus']['past_sector']) && ($data['alumnus']['past_sector']=='Private') ? 'selected' : ''; ?> value="3">Private</option>

                  <option <?=isset($data['alumnus']['past_sector']) && ($data['alumnus']['past_sector']=='NGO/Foundation') ? 'selected' : ''; ?> value="4">NGO/Foundation</option>

                  <option <?=isset($data['alumnus']['past_sector']) && ($data['alumnus']['past_sector']=='Self-employed') ? 'selected' : ''; ?> value="5">Self-employed</option>
                </select>
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Career Field</label>
              <div class="col-md-10">
                <select id="past_career_field" class="form-control" name="career_field">
                  <option></option>
                  <option <?=isset($data['alumnus']['past_career_field']) && ($data['alumnus']['past_career_field']=='Agriculture, Food, & Natural Resources') ? 'selected' : ''; ?> value="1">Agriculture, Food, & Natural Resources</option>

                  <option <?=isset($data['alumnus']['past_career_field']) && ($data['alumnus']['past_career_field']=='Business, Management, & Administration') ? 'selected' : ''; ?> value="2">Business, Management, & Administration</option>

                  <option <?=isset($data['alumnus']['past_career_field']) && ($data['alumnus']['past_career_field']=='Communications & Information Systems') ? 'selected' : ''; ?> value="3">Communications & Information Systems</option>

                  <option <?=isset($data['alumnus']['past_career_field']) && ($data['alumnus']['past_career_field']=='Engineering, Manufacturing, & Technology') ? 'selected' : ''; ?> value="4">Engineering, Manufacturing, & Technology</option>

                  <option <?=isset($data['alumnus']['past_career_field']) && ($data['alumnus']['past_career_field']=='Health Science Technology') ? 'selected' : ''; ?> value="5">Health Science Technology</option>

                  <option <?=isset($data['alumnus']['past_career_field']) && ($data['alumnus']['past_career_field']=='Human Services') ? 'selected' : ''; ?> value="6">Human Services</option>
                </select>
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Status of Employment</label>
              <div class="col-md-10">
                <select id="past_status_of_employment" class="form-control" name="status_of_employment">
                  <option></option>
                  <option <?=isset($data['alumnus']['past_work_status']) && ($data['alumnus']['past_work_status']=='Permanent') ? 'selected' : ''; ?> value="1">Permanent</option>
                  
                  <option <?=isset($data['alumnus']['past_work_status']) && ($data['alumnus']['past_work_status']=='Temporary') ? 'selected' : ''; ?> value="2">Temporary</option>

                  <option <?=isset($data['alumnus']['past_work_status']) && ($data['alumnus']['past_work_status']=='Contractual') ? 'selected' : ''; ?> value="3">Contractual</option>

                  <option <?=isset($data['alumnus']['past_work_status']) && ($data['alumnus']['past_work_status']=='Self-employed') ? 'selected' : ''; ?> value="4">Self-employed</option>
                </select>
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Is past job related to graduate academic training?</label>
              <div class="col-md-10">
                <select id="is_job_aligned_history" class="form-control" name="is_job_aligned">
                 <option></option>
                 <option <?=isset($data['alumnus']['is_past_job_aligned']) && ($data['alumnus']['is_past_job_aligned']=='Yes') ? 'selected' : ''; ?> value="1">Yes</option>
                  <option <?=isset($data['alumnus']['is_past_job_aligned']) && ($data['alumnus']['is_past_job_aligned']=='No') ? 'selected' : ''; ?> value="2">No</option>
                </select>
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Position</label>
              <div class="col-md-10">
                <input class="form-control" type="text" value="<?=isset($data['alumnus']['past_position']) ? $data['alumnus']['past_position'] : ''; ?>" name="past_position">
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Monthly Salary Range</label>
              <div class="col-md-10">
                <select id="past_salary_range" class="form-control" name="salary_range">
                  <option></option>
                  <option <?=isset($data['alumnus']['past_salary_range']) && ($data['alumnus']['past_salary_range']=='5,000 - 20,000') ? 'selected' : ''; ?> value="1">5,000 - 20,000</option>

                  <option <?=isset($data['alumnus']['past_salary_range']) && ($data['alumnus']['past_salary_range']=='21,000 - 35,000') ? 'selected' : ''; ?> value="2">21,000 - 35,000</option>

                  <option <?=isset($data['alumnus']['past_salary_range']) && ($data['alumnus']['past_salary_range']=='36,000 - 50,000') ? 'selected' : ''; ?> value="3">36,000 - 50,000</option>

                  <option <?=isset($data['alumnus']['past_salary_range']) && ($data['alumnus']['past_salary_range']=='51,000 - 65,000') ? 'selected' : ''; ?> value="4">51,000 - 65,000</option>

                  <option <?=isset($data['alumnus']['past_salary_range']) && ($data['alumnus']['past_salary_range']=='66,000 - 80,000') ? 'selected' : ''; ?> value="5">66,000 - 80,000</option>

                  <option <?=isset($data['alumnus']['past_salary_range']) && ($data['alumnus']['past_salary_range']=='81,000 - 95,000') ? 'selected' : ''; ?> value="6">81,000 - 95,000</option>
                </select>
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Company Name</label>
              <div class="col-md-10">
                <input class="form-control" type="text" value="<?=isset($data['alumnus']['past_company_name']) ? $data['alumnus']['past_company_name'] : ''; ?>" name="past_company_name">
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Company Address</label>
              <div class="col-md-10">
                <input class="form-control" type="text" value="<?=isset($data['alumnus']['past_company_address']) ? $data['alumnus']['past_company_address'] : ''; ?>" name="past_company_address">
              </div>
          </div>
        </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Professional Awards/Recognitions Received</h3>
          <p><small>&nbsp; &nbsp; Please add all of your professional awards or recognitions received. If none, please skip or write N/A.</small></p>
        </div>
        <!-- /.box-header -->
        <div class="box-body ">

        <form class="form-horizontal" method="post" action="" role="form" enctype="multipart/form-data">
          <div class="form-group">
            <label class="col-md-2 control-label">Title of Award</label>
              <div class="col-md-10">
                <input class="form-control" type="text" value="<?=isset($data['alumnus']['award']) ? $data['alumnus']['award'] : ''; ?>" name="award">
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Date Given</label>
              <div class="col-md-10">
                <input class="form-control" type="date" value="<?=isset($data['alumnus']['date_given']) ? $data['alumnus']['date_given'] : ''; ?>" name="date_given">
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Awarding Body</label>
              <div class="col-md-10">
                <input class="form-control" type="text" value="<?=isset($data['alumnus']['awarding_body']) ? $data['alumnus']['awarding_body'] : ''; ?>" name="awarding_body">
              </div>
          </div>
        </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Personal Testimony</h3>
          <p><small>&nbsp; &nbsp; Kindly write a brief testimony on how the program/curriculum has been helpful</small></p>
        </div>
        <!-- /.box-header -->
        <div class="box-body ">

        <form class="form-horizontal" method="post" action="" role="form" enctype="multipart/form-data">
          <div class="form-group">
            <label class="col-md-2 control-label">Personal / Family</label>
              <div class="col-md-10">
                <input class="form-control" type="text" value="<?=isset($data['alumnus']['testimony_personal_family']) ? $data['alumnus']['testimony_personal_family'] : ''; ?>" name="testimony_personal_family">
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Career</label>
              <div class="col-md-10">
                <input class="form-control" type="text" value="<?=isset($data['alumnus']['testimony_career']) ? $data['alumnus']['testimony_career'] : ''; ?>" name="testimony_career">
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Community / Regions / National Development:</label>
              <div class="col-md-10">
                <input class="form-control" type="text" value="<?=isset($data['alumnus']['testimony_community']) ? $data['alumnus']['testimony_community'] : ''; ?>" name="testimony_community">
              </div>
          </div>
        </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">User Information</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body ">

        <form class="form-horizontal" method="post" action="" role="form" enctype="multipart/form-data">
          <div class="form-group">
            <label class="col-md-2 control-label">Recovery Email</label>
              <div class="col-md-10">
                <input class="form-control" type="text" value="<?=isset($data['alumnus']['recovery_email']) ? $data['alumnus']['recovery_email'] : ''; ?>" name="recovery_email">
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Change Password</label>
              <div class="col-md-10">
               <input class="form-control" type="password" value=""  name="newpassword" placeholder="Enter only if you want to change the password" >
              </div>
          </div>  

           <div class="form-group">
            <label class="col-md-2 control-label">Confirm Password * </label>
            <div class="col-md-10">
              <input type="password" name="confirmpassword" class="form-control" required placeholder="Confirm Password" value="">
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
 