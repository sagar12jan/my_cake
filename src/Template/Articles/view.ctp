<section class="content">

<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><?= $row['title']; ?> - <?= $row['users']['FirstName']; ?></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
              <i class="fa fa-minus"></i></button>
            <a href="<?php echo $this->Url->build([
                          "action" => "index",
                            ]); 
                          ?>" class="btn btn-box-tool"  data-toggle="tooltip" title="" data-original-title="Back">
              <i class="fa fa-arrow-circle-left"></i></a>
          </div>
        </div>
        <div class="box-body">
        <?= $row['description']; ?>
        </div>
        <!-- /.box-body -->
       
      </div>
      <div class="row">
      <section class="col-lg-7 connectedSortable">

     <div class="box box-success" >
            <div class="box-header">
              <i class="fa fa-comments-o"></i>

              <h3 class="box-title">Comments...</h3>

              
            </div>
            <div class="box-body chat" id="chat-box" style=" height:200px;
  overflow-y: scroll;">
              <!-- chat item -->
              <?php foreach($comments as $comment){?>
              <!-- chat item -->
              <div class="item">
              <?= $this->Html->image("../css/dist/img/default-50x50.gif", array("alt"=>"user image","class"=>"offline"));
?>
                <p class="message">
                  <a href="<?php echo $this->Url->build([
                          "controller" => "Articles",
                          "action" => "deleteComment",$comment->commentId, $row['id'],
                            ]); 
                          ?>" class="name">
                    
                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> <?= $comment['commentedOn']; ?></small>
                    <?= $comment['users']['FirstName']." ".$comment['users']['LastName'] ?>
                    &nbsp;&nbsp;<small class="text-muted"><i class="fa fa-trash-o"></i> Delete Comment</small>
                  </a>
                  <?= $comment['comment']; ?>
                </p>
              </div>
            <?php } ?>
            </div>
            <!-- /.chat -->
            <div class="box-footer">
            <form method="post">
              <div class="input-group">
              
                <input class="form-control" name="comment" placeholder="Type message...">

                <div class="input-group-btn">
                  <button type="submit" name="save" class="btn btn-success"><i class="fa fa-plus"></i></button>
                </div>
              </div>
             
            </div>
             </form>
          </div>
          </section>   
          </div>
          
</section>
