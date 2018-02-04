
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
        <h3 class="box-title">Alumni</h3>

        

        <?=add_button('admins/import_alumni','Import Alumni');?>&nbsp;
        <?=add_button('admins/add_alumni','Add Alumni');?>
        
      

      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="table-responsive col-sm-12">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Number</th>
            <th>Name</th>
            <th>Email</th>
            <th></th>
            
             
          </tr>
          </thead>
          <tbody>
          <?php foreach ($data['user'] as $key => $value) { ?>
          <tr>

            <td><?=($value['id']);?></td>
            <td><?=ucwords($value['name']);?></td>
            <td><?=($value['email']);?></td>
            <td>
              <?=update_button('admins/update_alumni',$value['id']);?>
              <?=delete_button('admins/delete_alumni',$value['id']);?>
            </td>           
          </tr>
          <?php } ?> 
          </tbody>
         
        </table>
        </div>
      </div>
      
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
      

 