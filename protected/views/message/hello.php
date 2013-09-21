<?php
/* @var $this MessageController */

$this->breadcrumbs=array(
	'Message'=>array('/message'),
	'Hello',
);
?>
<h1>Hello World!</h1>

<h3><?php echo $time; ?></h3>
<!--<a href="/yii_demo1/index.php?r=message/goodbye">Goodbye!</a>-->
<!--<a href="index.php?r=message/goodbye">Goodbye!</a>-->
<p><?php echo CHtml::link('Goodbye', array('message/goodbye')); ?></p>