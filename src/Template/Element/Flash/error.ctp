<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<!-- <div class="message error" onclick="this.classList.add('hidden');"><?= $message ?></div> -->
<div class="alert alert-danger" onclick="this.classList.add('hidden')">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
<h4><i class="icon fa fa-info"></i> Alert!</h4>
<?= $message ?>
</div>