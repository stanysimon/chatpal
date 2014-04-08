<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <?php echo $form->labelEx($model,'username'); ?>
									<?php echo $form->textField($model,'username',$htmlOptions=array( "id"=>"username","class"=>"form-control","placeholder"=>"E-mail","type"=>"email")); ?>
									<?php echo $form->error($model,'username'); ?>
                                </div>
                                <div class="form-group">
									<?php echo $form->labelEx($model,'password'); ?>
									<?php echo $form->passwordField($model,'password',$htmlOptions=array( "id"=>"password","class"=>"form-control","placeholder"=>"Password","type"=>"password")); ?>
									<?php echo $form->error($model,'password'); ?>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <?php echo CHtml::submitButton('Login',$htmlOptions=array("id"=>"login","class"=>"btn btn-lg btn-success btn-block")); ?>
                                <!-- <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $this->endWidget(); ?>

