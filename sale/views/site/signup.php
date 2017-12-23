<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2017/11/7
 * Time: 9:28
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title                   = '金猎人';
$this->params['breadcrumbs'][] = $this->title;

?>


<div class="middle-box text-center loginscreen  animated fadeInDown">
    <div>
        <div>
            <h1 class="logo-name">IN+</h1>
        </div>
        <h3>Register to IN+</h3>
        <p>创建一个账号 </p>
        <?php
        $form = ActiveForm::begin([

                                      'layout'      => 'default',
                                      'options'     => ['class' => 'm-t'],
                                      'fieldConfig' => [
                                          'template'             => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
                                          'horizontalCssClasses' => [
                                              'label'   => 'col-sm-4',
                                              'offset'  => 'col-sm-offset-4',
                                              'wrapper' => 'col-sm-8',
                                              'error'   => '',
                                              'hint'    => '',
                                          ],
                                      ],
                                  ]);
        ?>


        <?php echo $form->field($model, 'username')->textInput(['autofocus' => true, 'autocomplete' => 'off', 'placeholder' => '用户名'])->label(''); ?>
        <?php echo $form->field($model, 'email')->textInput(['autofocus' => true, 'autocomplete' => 'off', 'placeholder' => '邮箱'])->label(''); ?>
        <?php echo $form->field($model, 'password')->passwordInput(['autofocus' => true, 'autocomplete' => 'off', 'placeholder' => '密码'])->label(''); ?>

        <div class="form-group">
            <div class="checkbox i-checks">
                <label> <input type="checkbox"><i></i> 同意条款和政策</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary block full-width m-b">注册</button>

        <?php ActiveForm::end(); ?>
        <p class="m-t">
            <small>Power By Yii 2 &copy; 2017</small>
        </p>
    </div>
</div>


<!--






<div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Name" required="">
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email" required="">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required="">
            </div>
            <div class="form-group">
                <div class="checkbox i-checks"><label> <input type="checkbox"><i></i> Agree the terms and policy
                    </label></div>
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">Register</button>

            <p class="text-muted text-center">
                <small>Already have an account?</small>
            </p>
            <a class="btn btn-sm btn-white btn-block" href="login.html">Login</a>

-->


