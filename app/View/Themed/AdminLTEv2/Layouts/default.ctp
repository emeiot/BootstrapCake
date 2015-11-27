<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'AdminLTEv2 Template');
?>
<?php echo $this->Html->docType('html5'); ?> 
<html>
	<head>
		<?php echo $this->Html->charset(); ?>

		<title>
			<?php echo $cakeDescription ?>:
			<?php echo $title_for_layout; ?>
		</title>
		<?php 
			echo $this->Html->meta('icon');
			echo $this->Html->meta(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no']);
			echo $this->fetch('meta');

			echo $this->Html->css('bootstrap.min.css');
			echo $this->Html->css('//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
			echo $this->Html->css('//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css');
			//echo $this->Html->css('//fonts.googleapis.com/css?family=Droid+Serif:400,700,700italic,400italic');
			echo $this->Html->css('skins/_all-skins.min.css');
			echo $this->Html->css('AdminLTE');
			echo $this->fetch('css');

			
			//echo $this->Html->script('libs/jquery-1.10.2.min');
			//echo $this->Html->script('libs/bootstrap.min');
			
			echo $this->fetch('script');
		?>
	</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

		<?php echo $this->element('menu/top_menu'); ?>
		<?php echo $this->element('menu/left_sidebar'); ?>
				<!-- Content Wrapper. Contains page content -->
				<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<section class="content-header">
				<h1>
				Page Header
				<small>Optional description</small>
				</h1>
				<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
				<li class="active">Here</li>
				</ol>
				</section>

				<!-- Main content -->
				<section class="content">

				<!-- Your Page Content Here -->
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>				
				</section>
				<!-- /.content -->
				</div>
				<!-- /.content-wrapper -->
			
		<?php echo $this->element('menu/footer'); ?>
		<?php echo $this->element('menu/right_sidebar'); ?>
</div><!-- ./wrapper -->		
		
		<?php
			echo $this->Html->script('plugins/jQuery/jQuery-2.1.4.min');
			echo $this->Html->script('bootstrap.min');
			echo $this->Html->script('app');
			echo $this->fetch('script');
		?>
		
	</body>

</html>