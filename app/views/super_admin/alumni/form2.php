 

 

  <div class="row">
    <div class="col-xs-12">
     
   
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Members Registration</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body ">
        <?php
          if(!empty($data['error'])){
            error_message($data['error']);
          }
          if(!empty($data['success']) ){
            success_message($data['success']);
          }
        ?>

 

        <form  method="post" action="" role="form" enctype="multipart/form-data" class="form-horizontal">

          <div class="form-group">
            <label class="col-sm-2 control-label">Full Name * </label>
            <div class="col-sm-10">
              <input type="text" name="name" class="form-control"  placeholder="Full Name" value="<?=isset($data['member']['name']) ? $data['member']['name'] : ''; ?>">
              
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="row">
                <?php
                foreach ($data['materials'] as $key => $value) {
                ?>
                <div class="col-sm-2">
                  <div class="checkbox">
                    <label>
                    <input type="checkbox" name="materials[]"  value="<?=$value['id'];?>">
                    <?=$value['name'];?>
                    </label>
                  </div>
                </div>     
                <?php
                }
                ?>
              </div>
            </div>
          </div>



          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
               
              <input type="submit" name="submit" class="btn btn-default"  value="Save">
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
 