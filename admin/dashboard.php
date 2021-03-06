<div id="page-wrapper">

  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
      <div class="col-lg-12">

        <h1 class="page-header">
          Dashboard <small>Statistics Overview</small>
        </h1>
        <ol class="breadcrumb">
          <li class="active">
            <i class="fa fa-dashboard"></i> Dashboard
          </li>
        </ol>
      </div>
    </div>
    <!-- end page-heading -->

    <div class="row">

      <!-- orders -->
      <div class="col-lg-4 col-md-6">
        <div class="panel panel-yellow">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3">
                <i class="fa fa-shopping-cart fa-5x"></i>
              </div>
              <div class="col-xs-9 text-right">
                <div class="huge"><?= get_total_orders() ?></div>
                <div>Orders!</div>
              </div>
            </div>
          </div>
          <a href="?page=orders">
            <div class="panel-footer">
              <span class="pull-left">View Details</span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </a>
        </div>
      </div>
      <!-- end orders -->
    

      <!-- products -->
      <div class="col-lg-4 col-md-6">
        <div class="panel panel-red">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3">
                <i class="fa fa-support fa-5x"></i>
              </div>
              <div class="col-xs-9 text-right">
                <div class="huge"><?= get_total_products() ?></div>
                <div>Products!</div>
              </div>
            </div>
          </div>
          <a href="?page=products">
            <div class="panel-footer">
              <span class="pull-left">View Details</span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </a>
        </div>
      </div>
      <!-- end products -->




      <!-- categories -->
      <div class="col-lg-4 col-md-6">
        <div class="panel panel-green">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3">
                <i class="fa fa-tasks fa-5x"></i>
              </div>
              <div class="col-xs-9 text-right">
                <div class="huge"><?= get_total_categories() ?></div>
                <div>Categories!</div>
              </div>
            </div>
          </div>
          <a href="?page=categories">
            <div class="panel-footer">
              <span class="pull-left">View Details</span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </a>
        </div>        
      </div> <!-- end categories -->




    </div> <!-- end row -->

  </div> <!-- end container-fluid -->

</div> <!-- end page-wrapper -->