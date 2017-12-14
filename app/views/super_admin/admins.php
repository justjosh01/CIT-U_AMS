
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
        <h3 class="box-title">Admins</h3>

      
        <?=add_button('super_admin/add_admin','Add Admins');?>
        

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
          <?php foreach ($data['admin'] as $key => $value) { ?>
          <tr>

            <td><?=($value['id']);?></td>
            <td><?=ucwords($value['name']);?></td>
            <td><?=($value['email']);?></td>
            <td>
              <?=update_button('super_admin/update_admin',$value['id']);?>
              <?=delete_button('super_admin/delete_admin',$value['id']);?>
            </td>           
          </tr>
          <?php } ?> 
          </tbody>
         
        </table>
        </div>
      </div>
      <!-- /.box-body -->
           <!--  <div class="box-footer clearfix">
              <p  class="pull-right"><a href="<?=URL_ROOT;?>super_admin/members">View All Transactions</a> </p>
            </div> -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
      

