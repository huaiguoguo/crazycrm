<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2017/11/9
 * Time: 13:00
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
                    <h5>编辑项目
                        <small></small>
                    </h5>
                    <div class="ibox-tools">
                        <a class="btn btn-primary btn-sm" href="<?= Url::toRoute(['list']); ?>"> 返回 </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form method="post" class="form-horizontal">
                        <div class="form-group <?php if(isset($error['project_name'])):?>has-error<?php endif;?>">
                            <label class="col-sm-2 control-label">项目名称</label>
                            <div class="col-sm-8">
                                <input type="text" name="Project[project_name]" value="<?=$project->project_name;?>" placeholder="项目名称" class="form-control">
                            </div>
                            <span class='has-error'><div class="help-block"><?php if(isset($error['project_name'])){echo $error['project_name'][0];};?></div></span>
                        </div>

                        <div class="form-group <?php if(isset($error['number'])):?>has-error<?php endif;?>">
                            <label class="col-sm-2 control-label">招聘数量</label>
                            <div class="col-sm-8">
                                <input type="number" name="Project[number]" value="<?=$project->number;?>" placeholder="招聘数量" class="form-control">
                            </div>
                            <span class='has-error'><div class="help-block"><?php if(isset($error['number'])){echo $error['number'][0];};?></div></span>
                        </div>

                        <div class="form-group <?php if(isset($error['company_id'])):?>has-error<?php endif;?>">
                            <label class="col-sm-2 control-label">公司</label>
                            <div class="col-sm-2">
                                <select class="form-control m-b parent_permission" name="Project[company_id]">
                                    <option value>----选择公司----</option>
                                    <?php foreach ($company as $key=>$value):?>
                                        <option value="<?=$value->id;?>" <?php if($value->id == $project->company_id):?>selected<?php endif;?>><?=$value->company_name;?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <span class='has-error'><div class="help-block"><?php if(isset($error['company_id'])){echo $error['company_id'][0];};?></div></span>
                        </div>

                        <div class="form-group <?php if(isset($error['year_salary'])):?>has-error<?php endif;?>">
                            <label class="col-sm-2 control-label">年薪</label>
                            <div class="col-sm-8">
                                <input type="text" name="Project[year_salary]" value="<?=$project->year_salary;?>" placeholder="年薪"  class="form-control">
                            </div>
                            <span class='has-error'><div class="help-block"><?php if(isset($error['year_salary'])){echo $error['year_salary'][0];};?></div></span>
                        </div>

                        <div class="form-group <?php if(isset($error['level'])):?>has-error<?php endif;?>">
                            <label class="col-sm-2 control-label">优先级</label>
                            <div class="col-sm-2">
                                <select class="form-control m-b parent_permission" name="Project[level]">
                                    <option value>----选择优先级----</option>
                                    <option value="1" <?php if($project->level == 1):?> selected <?php endif;?> >1级</option>
                                    <option value="2" <?php if($project->level == 2):?> selected <?php endif;?> >2级</option>
                                    <option value="3" <?php if($project->level == 3):?> selected <?php endif;?> >3级</option>
                                    <option value="4" <?php if($project->level == 4):?> selected <?php endif;?> >4级</option>
                                </select>
                            </div>
                            <span class='has-error'><div class="help-block"><?php if(isset($error['level'])){echo $error['level'][0];};?></div></span>
                        </div>

                        <div class="form-group <?php if(isset($error['func'])):?>has-error<?php endif;?>">
                            <label class="col-sm-2 control-label">职能</label>
                            <div class="col-sm-2">
                                <select class="form-control m-b parent_permission" name="Project[func]">
                                    <option value>----选择职能----</option>
                                    <?php foreach($func as $key=>$value):?>
                                        <option value="<?=$value->id;?>" <?php if($project->func == $value->id):?> selected <?php endif;?>><?=$value->name;?>级</option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <span class='has-error'><div class="help-block"><?php if(isset($error['func'])){echo $error['func'][0];};?></div></span>
                        </div>

                        <div class="form-group <?php if(isset($error['city_id'])):?>has-error<?php endif;?>">
                            <label class="col-sm-2 control-label">所在城市</label>
                            <div class="col-sm-8">
                                <div class="row">
                                    <div class="col-md-3">
                                        <select class="form-control m-b province" name="Project[province_id]">
                                            <option value>----选择省份----</option>
                                            <?php foreach ($province as $key=>$value):?>
                                                <option value="<?=$value->region_id;?>" <?php if($value->region_id == $project->province_id):?>selected<?php endif;?> ><?=$value->region_name;?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control m-b city" name="Project[city_id]">
                                            <option value>----选择城市----</option>
                                            <?php foreach ($city as $key=>$value):?>
                                                <option value="<?=$value->region_id;?>" <?php if($value->region_id == $project->city_id):?> selected <?php endif;?> ><?=$value->region_name;?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                    <span class='has-error'><div class="help-block"><?php if(isset($error['city_id'])){echo $error['city_id'][0];};?></div></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group <?php if(isset($error['jd'])):?>has-error<?php endif;?>">
                            <label class="col-sm-2 control-label">职位描述</label>
                            <div class="col-sm-8">
                                <textarea name="Project[jd]" placeholder="职位描述" rows="5"  class="form-control"><?=$project->jd;?></textarea>
                            </div>
                            <span class='has-error'><div class="help-block"><?php if(isset($error['jd'])){echo $error['jd'][0];};?></div></span>
                        </div>

                        <div class="form-group <?php if(isset($error['jr'])):?>has-error<?php endif;?>">
                            <label class="col-sm-2 control-label">职位要求</label>
                            <div class="col-sm-8">
                                <textarea name="Project[jr]" placeholder="职位要求" rows="5"  class="form-control"><?=$project->jr;?></textarea>
                            </div>
                            <span class='has-error'><div class="help-block"><?php if(isset($error['jr'])){echo $error['jr'][0];};?></div></span>
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


<script type="text/javascript">

    <?php $this->beginBlock('getcity'); ?>
    $(document).ready(function () {

        $(".province").change(function () {
//                $(this).children('option:selected').val();
            select($(this), $(".city"));
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
<?php $this->registerJs($this->blocks['getcity'], View::POS_END) ?>


<?php AppAsset::addJsFile($this, '/js/common.js');?>



