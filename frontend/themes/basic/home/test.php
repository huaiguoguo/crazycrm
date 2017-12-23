<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2017/12/3
 * Time: 16:55
 */
?>



<?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

<div class="page-header">基本信息</div>
<?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

<?= $form->field($model, 'nickname') ?>

<?= $form->field($model, 'mobile'); ?>
<?= $form->field($model, 'email'); ?>
<?= $form->field($model, 'qq'); ?>
<?= $form->field($model, 'birthday'); ?>
<?= $form->field($model, 'status'); ?>


<div class="page-header">自我描述</div>
<?= $form->field($model, 'self_evaluation')->textarea(['rows'=>8, 'cols'=>5]); ?>

<div class="page-header">期望工作</div>
<?= $form->field($model, 'expectation_job'); ?>

<div class="page-header">教育经历</div>
<?= $form->field($model, 'edu_expectation'); ?>

<div class="form-group">
    <?= Html::submitButton('保存', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
</div>

<?php ActiveForm::end(); ?>




