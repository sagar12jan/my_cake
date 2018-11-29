<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: My Cake';
?>
<!DOCTYPE html>
<html>
<head style="height: auto; min-height: 100%;">
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?php /*<?= //$this->Html->css('base.css') ?>
    <?= //$this->Html->css('style.css') ?>
 
    <?= $this->fetch('meta') ?>
    
    <?= $this->fetch('script') ?> */
 
?>
    <?=  $this->Html->css('bower_components/bootstrap/dist/css/bootstrap.min.css') ?>
  <!-- Font Awesome -->
  <?=  $this->Html->css('bower_components/font-awesome/css/font-awesome.min.css') ?>
  <!-- Ionicons -->
  <?=  $this->Html->css('bower_components/Ionicons/css/ionicons.min.css') ?>
  <!-- Theme style -->
  <?=  $this->Html->css('dist/css/AdminLTE.min.css') ?>
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
       <?=  $this->Html->css('dist/css/skins/_all-skins.min.css') ?>

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<body class="hold-transition <?php echo $this->request->params['controller'] != 'Login'? 'skin-blue sidebar-mini':'login-page'?>">
<?php 

if($this->request->params['controller'] != 'Login'){  
 echo $this->element('header'); 
 echo $this->element('aside');
}

?>
    <!-- <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul> -->
        <!-- <div class="top-bar-section">
            <ul class="right">
                <li><a target="_blank" href="https://book.cakephp.org/3.0/">Documentation</a></li>
                <li><a target="_blank" href="https://api.cakephp.org/3.0/">API</a></li>
            </ul>
        </div> -->
    
    <!-- </nav> -->
    <?= $this->Flash->render() ?>
    
    <!-- <div class="container clearfix"> -->
        <?= $this->fetch('content') ?>
    <!-- </div> -->

    <?= $this->element('footer') ?>




</body>
</html>
