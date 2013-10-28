<?php
/* @var $this UsersController */
/* @var $model Users */



?>

<h1>View Users #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'business_name',
		'business_address',
		'position_title',
		'first_name',
		'last_name',
		'contact_no',
		'gender',
		'email',
		'username',
		'password',
	),
)); ?>
