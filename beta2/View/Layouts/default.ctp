<?php
$description = __d('cake_dev', 'Huggle');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>
		<?php echo $description; ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->css('style');
		echo $this->Html->css('base/style');
		echo $this->Html->css('colorbox');
		echo $this->Html->css('inner');
		echo $this->Html->css('formbox');
		echo $this->Html->css('demo_table');
		echo $this->Html->css('datatable');
		echo $this->Html->css('overcast/jquery-ui-1.8.17.custom');
		echo $scripts_for_layout;
		echo $this->Html->script('jquery-1.7.1.min.js');
	?>
</head>
<body>

		<?php echo $this->element('navigation'); ?>
		
		<div id="content">
		
			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>

		<?php 
		echo $this->element('footer');
		echo $this->Html->script('jquery.form.js'); 
		echo $this->Html->script('datatable/jquery.datatables.min.js'); 
		echo $this->Html->script('datatable/jquery.jeditable.js'); 
		//echo $this->Html->script('datatable/jquery-ui.js'); 
		echo $this->Html->script('jquery-ui-1.8.17.custom.min.js'); 
		echo $this->Html->script('datatable/jquery.validate.js'); 
		echo $this->Html->script('datatable/jquery.dataTables.editable.js'); 
		echo $this->Html->script('formbox.js'); 
		echo $this->Html->script('underscore.js');
		echo $this->Html->script('backbone-0.9.1.js');
		echo $this->Html->script('sidebar.js');
		echo $this->Html->script('rightx.js');
		echo $this->Html->script('application.js');
		?>
</body>
</html>