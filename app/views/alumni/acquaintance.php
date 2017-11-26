
<div class="row">
  <div class="col-xs-12">


    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Alumni</h3>

        
      

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
            
            
             
          </tr>
          </thead>
          <tbody>
          <?php foreach ($data['list'] as $key => $value) { ?>
          <tr>

            <td><?=($value['id']);?></td>
            <td><?=ucwords($value['name']);?></td>
            <td><?=($value['email']);?></td>
                    
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
      

 