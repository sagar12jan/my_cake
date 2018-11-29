
    <section class="content-header">
      <h1>
        Articles List
        <small>All Articles</small>
   
      </h1>
      <ol class="breadcrumb">
      <a href="<?php echo $this->Url->build([
                    "controller" => "Articles",
                    "action" => "create"
                      ]); 
                    ?>" class="btn btn-info pull-right">Post Article</a>
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
                  <th>Title</th>
                  <th>Author</th>
                  <th>Posted On</th>
                  <th>Action</th>
                </tr>
                <?php
                $i=1;
                foreach($results as $row){ ?>
                <tr>
                  <td><?php echo $i++; ?></td>
                  <td><?php echo $row->title; ?></td>
                  <td><?php echo $row->users['FirstName']." ".$row->users['LastName']; ?></td>
                  <td><?php echo $row->createdOn; ?></td>
                  
                  <td> 
                    <a class="btn btn-xs btn-default" href="<?php echo $this->Url->build([
                    "controller" => "Articles",
                    "action" => "view",$row->id
                      ]); 
                    ?>
      "><i class="fa fa-search"></i></a>
                  <?php if($loginUserId == $row->users['Id']){ ?>
                          <a class="btn btn-xs btn-default" href="<?php echo $this->Url->build([
                          "controller" => "Articles",
                          "action" => "edit",$row->id 
                            ]); 
                          ?>"><i class="fa fa-pencil"></i></a>
                          <a class="btn btn-xs btn-default" href="<?php echo $this->Url->build([
                          "controller" => "Articles",
                          "action" => "delete",$row->id,
                            ]); 
                          ?>"><i class="fa fa-trash"></i></a>
                  <?php } ?>
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
  