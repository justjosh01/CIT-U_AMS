<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <!-- small box -->
          <div class="small-box bg-aqua" style="background: #F86B02 !important;">
            <div class="inner">
              <h2><?=$data['active'];?></h2>

              <p>Alumni: already Active</p>
            </div>
            <div class="icon">
              <i class="fa fa-graduation-cap"></i>
            </div>
            <a href="<?=URL_ROOT;?>admins/active_alumni" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
          <div class="small-box bg-aqua" style="background: #c1c7d1 !important;">
            <div class="inner">
              <h2><?=$data['inactive'];?></h2>

              <p>Alumni: not yet Active</p>
            </div>
            <div class="icon">
              <i class="fa fa-graduation-cap"></i>
            </div>
            <a href="<?=URL_ROOT;?>admins/inactive_alumni" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
          <br>
        <!-- ./col -->

          <!-- DONUT CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Career Field</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <!-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button> -->
              </div>
            </div>
            <div class="box-body">
              <canvas id="pieChart" style="height:250px"></canvas>
            </div>
            <br>
            <!-- /.box-body -->
          </div>
          <br>
          <!-- /.box -->
          
        </div>

        <!-- /.col (LEFT) -->
        <div class="col-md-6">

          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Salary Range</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="areaChart" style="height:233px"></canvas>
                <br>
              </div>
              

            </div>
            <!-- <br> -->
          </div>
          <br>
          <!-- /.box -->

          <!-- BAR CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Employment Rate</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart" style="height:255px"></canvas>

              </div>
              <br>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (RIGHT) -->
      </div>
      <!-- /.row -->

    </section>