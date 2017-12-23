<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2017/11/7
 * Time: 12:04
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
                        <h5>新增客户
                            <small></small>
                        </h5>
                        <div class="ibox-tools">
                            <a class="btn btn-primary btn-sm" href="<?= Url::toRoute(['list']); ?>"> 返回 </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <form method="post" class="form-horizontal">

                            <div class="form-group <?php if(isset($error['nickname'])):?>has-error<?php endif;?>">
                                <label class="col-sm-2 control-label">昵称</label>
                                <div class="col-sm-6">
                                    <input type="text" name="Customer[nickname]" placeholder="昵称" value="<?=$customer->nickname;?>" class="form-control">
                                </div>
                                <span class='has-error'><div class="help-block"><?php if(isset($error['nickname'])){echo $error['nickname'][0];};?></div></span>
                            </div>


                            <div class="form-group <?php if(isset($error['username'])):?>has-error<?php endif;?>">
                                <label class="col-sm-2 control-label">姓名</label>
                                <div class="col-sm-6">
                                    <input type="text" name="Customer[username]" placeholder="姓名" value="<?=$customer->username;?>" class="form-control">
                                </div>
                                <span class='has-error'><div class="help-block"><?php if(isset($error['username'])){echo $error['username'][0];};?></div></span>
                            </div>



                            <div class="form-group <?php if(isset($error['gender'])):?>has-error<?php endif;?>">
                                <label class="col-sm-2 control-label">性别</label>
                                <div class="col-sm-6 inline">
                                    <div class="i-checks checkbox-inline"><label> <input type="radio" value="1" <?php if($customer->gender==1):?> checked="" <?php endif;?> name="Customer[gender]"> <i></i> 男 </label></div>
                                    <div class="i-checks checkbox-inline"><label> <input type="radio" value="2" <?php if($customer->gender==2):?> checked="" <?php endif;?> name="Customer[gender]"> <i></i> 女 </label></div>
                                </div>
                                <span class='has-error'><div class="help-block"><?php if(isset($error['gender'])){echo $error['gender'][0];};?></div></span>
                            </div>

                            <div class="form-group <?php if(isset($error['status'])):?>has-error<?php endif;?>">
                                <label class="col-sm-2 control-label">状态</label>
                                <div class="col-sm-6">
                                    <select class="form-control m-b " name="Customer[status]">
                                        <option value>----选择状态----</option>
                                        <option value="1" <?php if($customer->status==1):?> selected <?php endif;?>>咨询中</option>
                                        <option value="2" <?php if($customer->status==2):?> selected <?php endif;?>>已交押金</option>
                                        <option value="3" <?php if($customer->status==3):?> selected <?php endif;?>>已付费</option>
                                        <option value="4" <?php if($customer->status==3):?> selected <?php endif;?>>已完结</option>
                                    </select>
                                </div>
                                <span class='has-error'><div class="help-block"><?php if(isset($error['status'])){echo $error['status'][0];};?></div></span>
                            </div>


                            <div class="form-group <?php if(isset($error['mobile'])):?>has-error<?php endif;?>">
                                <label class="col-sm-2 control-label">手机</label>
                                <div class="col-sm-6">
                                    <input type="number" min="0" name="Customer[mobile]" placeholder="手机" value="<?=$customer->mobile;?>"  class="form-control">
                                </div>
                                <span class='has-error'><div class="help-block"><?php if(isset($error['mobile'])){echo $error['mobile'][0];};?></div></span>
                            </div>

                            <div class="form-group <?php if(isset($error['qq'])):?>has-error<?php endif;?>">
                                <label class="col-sm-2 control-label">QQ</label>
                                <div class="col-sm-6">
                                    <input type="text" name="Customer[qq]" placeholder="QQ" value="<?=$customer->qq;?>"  class="form-control">
                                </div>
                                <span class='has-error'><div class="help-block"><?php if(isset($error['qq'])){echo $error['qq'][0];};?></div></span>
                            </div>

                            <div class="form-group <?php if(isset($error['wechat'])):?>has-error<?php endif;?>">
                                <label class="col-sm-2 control-label">微信</label>
                                <div class="col-sm-6">
                                    <input type="text" name="Customer[wechat]" placeholder="微信" value="<?=$customer->wechat;?>"  class="form-control">
                                </div>
                                <span class='has-error'><div class="help-block"><?php if(isset($error['wechat'])){echo $error['wechat'][0];};?></div></span>
                            </div>

                            <div class="form-group <?php if(isset($error['email'])):?>has-error<?php endif;?>">
                                <label class="col-sm-2 control-label">邮箱</label>
                                <div class="col-sm-6">
                                    <input type="email" name="Customer[email]" placeholder="邮箱" value="<?=$customer->email;?>"  class="form-control">
                                </div>
                                <span class='has-error'><div class="help-block"><?php if(isset($error['email'])){echo $error['email'][0];};?></div></span>
                            </div>

                            <div class="form-group <?php if(isset($error['website'])):?>has-error<?php endif;?>">
                                <label class="col-sm-2 control-label">主页</label>
                                <div class="col-sm-6">
                                    <input type="url" name="Customer[website]" placeholder="个人主页" value="<?=$customer->website;?>"  class="form-control">
                                </div>
                                <span class='has-error'><div class="help-block"><?php if(isset($error['website'])){echo $error['website'][0];};?></div></span>
                            </div>

                            <div class="form-group <?php if(isset($error['type'])):?>has-error<?php endif;?>">
                                <label class="col-sm-2 control-label">需求类型</label>
                                <div class="col-sm-5">
                                    <select class="form-control m-b " name="Customer[type]">
                                        <option value>----选择需求类型----</option>
                                        <option value="1" <?php if($customer->type==1):?> selected <?php endif;?>>注册公司</option>
                                        <option value="2" <?php if($customer->type==2):?> selected <?php endif;?>>注册商标</option>
                                    </select>
                                </div>
                                <span class='has-error'><div class="help-block"><?php if(isset($error['type'])){echo $error['type'][0];};?></div></span>
                            </div>

                            <div class="form-group <?php if(isset($error['location_ctiy'])):?>has-error<?php endif;?>">
                                <label class="col-sm-2 control-label">所在城市</label>
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <select class="form-control m-b location_province" name="Customer[location_province]">
                                                <option value>----选择省份----</option>
                                                <?php foreach ($province as $key=>$value):?>
                                                    <option value="<?=$value->region_id;?>" <?php if($value->region_id == $customer->location_province):?>selected<?php endif;?> ><?=$value->region_name;?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control m-b location_city" name="Customer[location_ctiy]">
                                                <option value>----选择城市----</option>
                                                <?php foreach ($location_city as $key=>$value):?>
                                                    <option value="<?=$value->region_id;?>" <?php if($customer->location_ctiy):?> selected <?php endif;?> ><?=$value->region_name;?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                        <span class='has-error'><div class="help-block"><?php if(isset($error['location_ctiy'])){echo $error['location_ctiy'][0];};?></div></span>
                                    </div>
                                </div>
                            </div>



                            <div class="form-group <?php if(isset($error['remarks'])):?>has-error<?php endif;?>">
                                <label class="col-sm-2 control-label">备注</label>
                                <div class="col-sm-8">
                                    <textarea name="Customer[remarks]" placeholder="备注" rows="5"  class="form-control"><?=$customer->remarks;?></textarea>
                                </div>
                                <span class='has-error'><div class="help-block"><?php if(isset($error['remarks'])){echo $error['remarks'][0];};?></div></span>
                            </div>




                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-white" type="submit">关闭</button>
                                    <button class="btn btn-primary" type="submit">保存</button>
                                </div>
                            </div>
                            <input type="hidden" name="<?=Yii::$app->request->csrfParam;?>" value="<?=Yii::$app->request->csrfToken;?>"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php AppAsset::addCssFile($this, "@web/inspinia/css/plugins/iCheck/custom.css"); ?>
<?php AppAsset::addJsFile($this, "@web/inspinia/js/plugins/iCheck/icheck.min.js"); ?>
    <script type="text/javascript">

        <?php $this->beginBlock('iCheck'); ?>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });

            $(".location_province").change(function () {
//                $(this).children('option:selected').val();
                select($(this), $(".location_city"));
            })

            $(".expectation_province").change(function () {
//                $(this).children('option:selected').val();
                select($(this), $(".expectation_city"));
            })



            function select(current_obj, city_class_obj) {
                ajax_config.url = '<?=Url::toRoute(['getcity']);?>';
                ajax_config.success = function (data) {
                    if (data.code==200){
                        var selection_option = "<option value>----选择城市----</option>";
                        $.each(data.result, function (index, value) {
                            selection_option +="<option value='"+value.region_id+"'>"+value.region_name+"</option>";
                        })
                        city_class_obj.html(selection_option);
                    }
                };
                ajax_config.error = function (error) {
                    console.log(error)
                };

                ajax_config.data.region_id = current_obj.val();
                ajax_config.data.csrf_backend = csrf_backend;
                getAjaxResult(ajax_config);
            }


        });
        <?php $this->endBlock(); ?>

    </script>
<?php $this->registerJs($this->blocks['iCheck'], View::POS_END) ?>

<?php AppAsset::addJsFile($this, '/js/common.js');?>