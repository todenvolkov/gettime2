<?php $this->pageTitle = Yii::t('user', 'Authorization'); ?>

<?php Yii::app()->clientScript->registerScriptFile('http://connect.facebook.net/ru_RU/all.js'); ?>

<h1>Authorization</h1>

<?php $this->widget('application.modules.yupe.widgets.YFlashMessages'); ?>

<div class="form">

    <?php $form = $this->beginWidget('CActiveForm', array(
                                                         'id' => 'login-form',
                                                         'enableClientValidation' => true
                                                    ));?>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'email'); ?>
        <?php echo $form->textField($model, 'email') ?>
        <?php echo $form->error($model, 'email'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'password'); ?>
        <?php echo $form->passwordField($model, 'password') ?>
        <?php echo $form->error($model, 'password'); ?>
    </div>

    <div class="row">
        <p class="hint">
            <?php echo CHtml::link(Yii::t('user', "Registration"), array('/user/account/registration')); ?>
            | <?php echo CHtml::link(Yii::t('user', "Password Recovery"), array('/user/account/recovery')) ?>
        </p>
    </div>

    <div class="row submit">
        <?php echo CHtml::submitButton('Login'); ?>
    </div>

    <?php $this->endWidget(); ?>
</div><!-- form -->

<?php  $this->widget('application.modules.social.extensions.eauth.EAuthWidget',array('action' => '/social/social/login/'));?>
