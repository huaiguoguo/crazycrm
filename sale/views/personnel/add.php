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
                        <h5>编辑人才
                            <small></small>
                        </h5>
                        <div class="ibox-tools">
                            <a class="btn btn-primary btn-sm" href="<?= Url::toRoute(['list']); ?>"> 返回 </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <form method="post" class="form-horizontal">

                            <div class="form-group <?php if(isset($error['username'])):?>has-error<?php endif;?>">
                                <label class="col-sm-2 control-label">姓名</label>
                                <div class="col-sm-3">
                                    <input type="text" name="Personnel[username]" placeholder="姓名" value="<?=$personnel->username;?>" class="form-control">
                                </div>
                                <span class='has-error'><div class="help-block"><?php if(isset($error['username'])){echo $error['username'][0];};?></div></span>
                            </div>

                            <div class="form-group <?php if(isset($error['nickname'])):?>has-error<?php endif;?>">
                                <label class="col-sm-2 control-label">昵称</label>
                                <div class="col-sm-3">
                                    <input type="text" name="Personnel[nickname]" placeholder="昵称" value="<?=$personnel->nickname;?>" class="form-control">
                                </div>
                                <span class='has-error'><div class="help-block"><?php if(isset($error['nickname'])){echo $error['nickname'][0];};?></div></span>
                            </div>

                            <div class="form-group <?php if(isset($error['gender'])):?>has-error<?php endif;?>">
                                <label class="col-sm-2 control-label">性别</label>
                                <div class="col-sm-10 inline">
                                    <div class="i-checks checkbox-inline"><label> <input type="radio" value="1" <?php if($personnel->gender==1):?> checked="" <?php endif;?> name="Personnel[gender]"> <i></i> 男 </label></div>
                                    <div class="i-checks checkbox-inline"><label> <input type="radio" value="2" <?php if($personnel->gender==2):?> checked="" <?php endif;?> name="Personnel[gender]"> <i></i> 女 </label></div>
                                </div>
                                <span class='has-error'><div class="help-block"><?php if(isset($error['gender'])){echo $error['gender'][0];};?></div></span>
                            </div>



                            <div class="form-group <?php if(isset($error['status'])):?>has-error<?php endif;?>">
                                <label class="col-sm-2 control-label">状态</label>
                                <div class="col-sm-2">
                                    <select class="form-control m-b " name="Personnel[status]">
                                        <option value>----选择状态----</option>
                                        <option value="1" <?php if($personnel->status==1):?> selected <?php endif;?>>离职</option>
                                        <option value="2" <?php if($personnel->status==2):?> selected <?php endif;?>>在职看机会</option>
                                        <option value="3" <?php if($personnel->status==3):?> selected <?php endif;?>>在职不看机会</option>
                                    </select>
                                </div>
                                <span class='has-error'><div class="help-block"><?php if(isset($error['status'])){echo $error['status'][0];};?></div></span>
                            </div>


                            <div class="form-group <?php if(isset($error['work_life'])):?>has-error<?php endif;?>">
                                <label class="col-sm-2 control-label">工作经验</label>
                                <div class="col-sm-2">
                                    <input type="number" min="0" max="99" name="Personnel[work_life]" placeholder="工作经验" value="<?=$personnel->work_life;?>" class="form-control">
                                </div>
                                <span class='has-error'><div class="help-block"><?php if(isset($error['work_life'])){echo $error['work_life'][0];};?></div></span>
                            </div>

                            <div class="form-group <?php if(isset($error['mobile'])):?>has-error<?php endif;?>">
                                <label class="col-sm-2 control-label">手机</label>
                                <div class="col-sm-3">
                                    <input type="number" min="0" name="Personnel[mobile]" placeholder="手机" value="<?=$personnel->mobile;?>"  class="form-control">
                                </div>
                                <span class='has-error'><div class="help-block"><?php if(isset($error['mobile'])){echo $error['mobile'][0];};?></div></span>
                            </div>

                            <div class="form-group <?php if(isset($error['website'])):?>has-error<?php endif;?>">
                                <label class="col-sm-2 control-label">个人主页</label>
                                <div class="col-sm-3">
                                    <input type="url" name="Personnel[website]" placeholder="个人主页" value="<?=$personnel->website;?>"  class="form-control">
                                </div>
                                <span class='has-error'><div class="help-block"><?php if(isset($error['website'])){echo $error['website'][0];};?></div></span>
                            </div>

                            <div class="form-group <?php if(isset($error['qq'])):?>has-error<?php endif;?>">
                                <label class="col-sm-2 control-label">QQ</label>
                                <div class="col-sm-3">
                                    <input type="text" name="Personnel[qq]" placeholder="QQ" value="<?=$personnel->qq;?>"  class="form-control">
                                </div>
                                <span class='has-error'><div class="help-block"><?php if(isset($error['qq'])){echo $error['qq'][0];};?></div></span>
                            </div>

                            <div class="form-group <?php if(isset($error['email'])):?>has-error<?php endif;?>">
                                <label class="col-sm-2 control-label">邮箱</label>
                                <div class="col-sm-3">
                                    <input type="email" name="Personnel[email]" placeholder="邮箱" value="<?=$personnel->email;?>"  class="form-control">
                                </div>
                                <span class='has-error'><div class="help-block"><?php if(isset($error['email'])){echo $error['email'][0];};?></div></span>
                            </div>



                            <div class="form-group <?php if(isset($error['func_id'])):?>has-error<?php endif;?>">
                                <label class="col-sm-2 control-label">现在职能</label>
                                <div class="col-sm-3">
                                    <select class="form-control m-b " name="Personnel[func_id]">
                                        <option value>----选择现在职能----</option>
                                        <?php foreach($func as $key=>$value):?>
                                            <option value="<?=$value->id;?>" <?php if($personnel->func_id==$value->id):?> selected <?php endif;?> ><?=$value->name;?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                                <span class='has-error'><div class="help-block"><?php if(isset($error['func_id'])){echo $error['func_id'][0];};?></div></span>
                            </div>


                            <div class="form-group <?php if(isset($error['location_ctiy'])):?>has-error<?php endif;?>">
                                <label class="col-sm-2 control-label">所在城市</label>
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <select class="form-control m-b location_province" name="Personnel[location_province]">
                                                <option value>----选择省份----</option>
                                                <?php foreach ($province as $key=>$value):?>
                                                    <option value="<?=$value->region_id;?>" <?php if($value->region_id == $personnel->location_province):?>selected<?php endif;?> ><?=$value->region_name;?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control m-b location_city" name="Personnel[location_ctiy]">
                                                <option value>----选择城市----</option>
                                                <?php foreach ($location_city as $key=>$value):?>
                                                    <option value="<?=$value->region_id;?>" <?php if($personnel->location_ctiy):?> selected <?php endif;?> ><?=$value->region_name;?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                        <span class='has-error'><div class="help-block"><?php if(isset($error['location_ctiy'])){echo $error['location_ctiy'][0];};?></div></span>
                                    </div>
                                </div>
                            </div>



                            <div class="form-group <?php if(isset($error['annual_salary'])):?>has-error<?php endif;?>">
                                <label class="col-sm-2 control-label">当前年薪</label>
                                <div class="col-sm-3">
                                    <input type="number" min="1" name="Personnel[annual_salary]" placeholder="当前年薪" value="<?=$personnel->annual_salary;?>"  class="form-control">
                                </div>
                                <span class='has-error'><div class="help-block"><?php if(isset($error['annual_salary'])){echo $error['annual_salary'][0];};?></div></span>
                            </div>


                            <div class="form-group <?php if(isset($error['expectation_city'])):?>has-error<?php endif;?>">
                                <label class="col-sm-2 control-label">期望城市</label>
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <select class="form-control m-b expectation_province" name="Personnel[expectation_province]">
                                                <option value>----选择省份----</option>
                                                <?php foreach ($province as $key=>$value):?>
                                                    <option value="<?=$value->region_id;?>" <?php if($value->region_id == $personnel->expectation_province):?>selected<?php endif;?> ><?=$value->region_name;?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control m-b expectation_city" name="Personnel[expectation_city]">
                                                <option value>----选择城市----</option>
                                                <?php foreach ($expectation_city as $key=>$value):?>
                                                    <option value="<?=$value->region_id;?>" <?php if($personnel->expectation_city):?> selected <?php endif;?> ><?=$value->region_name;?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                        <span class='has-error'><div class="help-block"><?php if(isset($error['expectation_city'])){echo $error['expectation_city'][0];};?></div></span>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group <?php if(isset($error['expectation_industry'])):?>has-error<?php endif;?>">
                                <label class="col-sm-2 control-label">期望行业</label>
                                <div class="col-sm-2">
                                    <select class="form-control m-b " name="Personnel[expectation_industry]">
                                        <option value>----选择行业----</option>
                                        <?php foreach ($industry as $key=>$value):?>
                                            <option value="<?=$value->id;?>" <?php if($value->id == $personnel->expectation_industry):?>selected<?php endif;?>><?=$value->name;?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                                <span class='has-error'><div class="help-block"><?php if(isset($error['expectation_industry'])){echo $error['expectation_industry'][0];};?></div></span>
                            </div>

                            <div class="form-group <?php if(isset($error['expectation_func'])):?>has-error<?php endif;?>">
                                <label class="col-sm-2 control-label">期望职位</label>
                                <div class="col-sm-2">
                                    <select class="form-control m-b " name="Personnel[expectation_func]">
                                        <option value>----选择期望职位----</option>
                                        <?php foreach($func as $key=>$value):?>
                                            <option value="<?=$value->id;?>" <?php if($personnel->expectation_func==$value->id):?> selected <?php endif;?> ><?=$value->name;?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                                <span class='has-error'><div class="help-block"><?php if(isset($error['expectation_func'])){echo $error['expectation_func'][0];};?></div></span>
                            </div>

                            <div class="form-group <?php if(isset($error['expectation_annual_salary'])):?>has-error<?php endif;?>">
                                <label class="col-sm-2 control-label">期望年薪</label>
                                <div class="col-sm-3">
                                    <input type="number" min="1" name="Personnel[expectation_annual_salary]" placeholder="期望年薪" value="<?=$personnel->expectation_annual_salary;?>"  class="form-control">
                                </div>
                                <span class='has-error'><div class="help-block"><?php if(isset($error['expectation_annual_salary'])){echo $error['expectation_annual_salary'][0];};?></div></span>
                            </div>

                            <div class="form-group <?php if(isset($error['skill_evaluation'])):?>has-error<?php endif;?>">
                                <label class="col-sm-2 control-label">技能评价</label>
                                <div class="col-sm-8">
                                    <textarea name="Personnel[skill_evaluation]" placeholder="技能评价" rows="5"  class="form-control"><?=$personnel->skill_evaluation;?></textarea>
                                </div>
                                <span class='has-error'><div class="help-block"><?php if(isset($error['skill_evaluation'])){echo $error['skill_evaluation'][0];};?></div></span>
                            </div>

                            <div class="form-group <?php if(isset($error['self_evaluation'])):?>has-error<?php endif;?>">
                                <label class="col-sm-2 control-label">人才评价</label>
                                <div class="col-sm-8">
                                    <textarea name="Personnel[self_evaluation]" placeholder="技能评价" rows="5"  class="form-control"><?=$personnel->self_evaluation;?></textarea>
                                </div>
                                <span class='has-error'><div class="help-block"><?php if(isset($error['self_evaluation'])){echo $error['self_evaluation'][0];};?></div></span>
                            </div>

                            <div class="form-group <?php if(isset($error['remarks'])):?>has-error<?php endif;?>">
                                <label class="col-sm-2 control-label">备注</label>
                                <div class="col-sm-8">
                                    <textarea name="Personnel[remarks]" placeholder="备注" rows="5"  class="form-control"><?=$personnel->remarks;?></textarea>
                                </div>
                                <span class='has-error'><div class="help-block"><?php if(isset($error['remarks'])){echo $error['remarks'][0];};?></div></span>
                            </div>

                            <div class="form-group <?php if(isset($error['remarks'])):?>has-error<?php endif;?>">
                                <label class="col-sm-2 control-label">附件简历</label>
                                <div class="col-sm-8">
                                    <textarea name="Personnel[remarks]" placeholder="附件简历" rows="5"  class="form-control"><?=$personnel->remarks;?></textarea>
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