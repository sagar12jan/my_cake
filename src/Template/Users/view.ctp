<section class="content">

<div class="row">
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-8">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"> User Detail</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           
            <form class="form-horizontal" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="fname" class="col-sm-2 control-label">First Name</label>

                  <div class="col-sm-10">
                    <?= $row->FirstName;?>
                  </div>
                </div>
                <div class="form-group">
                  <label for="lname" class="col-sm-2 control-label">Last Name</label>

                  <div class="col-sm-10">
                    <?= $row->LastName;?>
                  </div>
                </div>
                <div class="form-group">
                  <label for="email" class="col-sm-2 control-label">E-Mail</label>

                  <div class="col-sm-10">
                  <?= $row->Email;?>
                  </div>
                </div>
                <div class="form-group">
                  <label for="mobile" class="col-sm-2 control-label">Mobile</label>

                  <div class="col-sm-10">
                  <?= $row->Mobile;?>
                  </div>
                </div>

                <div class="form-group">
                  <label for="city" class="col-sm-2 control-label">City</label>

                  <div class="col-sm-10">
                  <?= $row->City;?>
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?php echo $this->Url->build([
                    "controller" => "Users",
                    "action" => "index"
                      ]); 
                    ?>" class="btn btn-default">Back</a>
              </div>
              <!-- /.box-footer -->
            </form>
    
          </div>
        </div>
        <!--/.col (right) -->
      </div>


</section>
