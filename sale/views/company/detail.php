<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2017/11/21
 * Time: 22:26
 */


use backend\assets\AppAsset;
use yii\helpers\Url;
use yii\web\View;

?>


<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>编辑公司
                        <small></small>
                    </h5>
                    <div class="ibox-tools">
                        <a class="btn btn-primary btn-sm" href="<?= Url::toRoute(['list']); ?>"> 返回 </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="form-horizontal">
                        <div class="form-group <?php if(isset($error['company_name'])):?>has-error<?php endif;?>">
                            <label class="col-sm-2 control-label">名称</label>
                            <div class="col-sm-8">
                                <span class="form-control">花木成畦手自栽</span>
                            </div>
                            <span class='has-error'><div class="help-block"><?php if(isset($error['company_name'])){echo $error['company_name'][0];};?></div></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>