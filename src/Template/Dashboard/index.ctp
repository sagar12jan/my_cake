
    <section class="content-header">
      <h1>
        Dashboard
        <small>v 2.0</small>
   
      </h1>
      <ol class="breadcrumb">
      
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    
    <div class="row">
        <a href="<?php echo $this->Url->build([
                    "controller" => "Users",
                    "action" => "index"
                      ]); 
                    ?>">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-user"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Users</span>
              <span class="info-box-number"><?= $usersCount?><small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        </a>
        <a href="<?php echo $this->Url->build([
                    "controller" => "Articles",
                    "action" => "index"
                      ]); 
                    ?>">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-list-alt"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Articles</span>
              <span class="info-box-number"><?= $articlesCount ?><small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          </a>
          <!-- /.info-box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  