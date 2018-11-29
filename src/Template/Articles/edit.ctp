<section class="content">

<div class="row">
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-8">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Article</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="fname" class="col-sm-2 control-label">Title</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" placeholder="Article Title" value="<?= $row['title'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="lname" class="col-sm-2 control-label">Description</label>

                  <div class="col-sm-10">
                    <textarea class="form-control" name="description" placeholder="Description"><?= $row['description'];?></textarea>
                  </div>
                </div>
                                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
              <a href="<?php echo $this->Url->build([
                    "controller" => "articles",
                    "action" => "index"
                      ]); 
                    ?>" class="btn btn-default">Back</a>
                <button type="submit" class="btn btn-info pull-right">Save</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
        <!--/.col (right) -->
      </div>


</section>