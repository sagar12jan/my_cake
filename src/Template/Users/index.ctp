
    <section class="content-header">
      <h1>
        Users List
        <small>All Users</small>
   
      </h1>
      <ol class="breadcrumb">
      <a href="<?php echo $this->Url->build([
                    "controller" => "Users",
                    "action" => "create"
                      ]); 
                    ?>" class="btn btn-info pull-right">Create User</a>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    
      <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
           
          <!-- <div class="box-header">
              <h3 class="box-title">Responsive Hover Table</h3>

            </div> -->
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>#</th>
                  <th>User</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>City</th>
                  <th>Action</th>
                </tr>
                <?php
                  $i=1;
                foreach($results as $row){ ?>
                <tr>
                  <td><?php echo $i++; ?></td>
                  <td><?php echo $row->FirstName." ".$row->LastName; ?></td>
                  <td><?php echo $row->Email; ?></td>
                  <td><?php echo $row->Mobile;?></td>
                  <td><?php echo $row->City;?></td>
                  <td> 
                    <a class="btn btn-xs btn-default" href="<?php echo $this->Url->build([
                    "controller" => "Users",
                    "action" => "view",$row->Id
                      ]); 
                    ?>
      "><i class="fa fa-search"></i></a>
                    <a class="btn btn-xs btn-default" href="<?php echo $this->Url->build([
                    "controller" => "Users",
                    "action" => "edit",$row->Id 
                      ]); 
                    ?>"><i class="fa fa-pencil"></i></a>
                    <a class="btn btn-xs btn-default" href="<?php echo $this->Url->build([
                    "controller" => "Users",
                    "action" => "delete",$row->Id,
                      ]); 
                    ?>"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
                <?php } ?>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  