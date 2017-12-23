<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2017/11/9
 * Time: 13:01
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
                        <form method="post" class="form-horizontal">
                            <div class="form-group <?php if(isset($error['company_name'])):?>has-error<?php endif;?>">
                                <label class="col-sm-2 control-label">名称</label>
                                <div class="col-sm-8">
                                    <input type="text" name="Company[company_name]" value="<?=$company->company_name;?>" placeholder="名称" class="form-control">
                                </div>
                                <span class='has-error'><div class="help-block"><?php if(isset($error['company_name'])){echo $error['company_name'][0];};?></div></span>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">行业</label>
                                <div class="col-sm-2">
                                    <select class="form-control m-b parent_permission" name="Company[industry_id]">
                                        <option value>----选择行业----</option>
                                        <?php foreach ($industry as $key=>$value):?>
                                            <option value="<?=$value->id;?>" <?php if($value->id == $company->industry_id):?> selected <?php endif;?> ><?=$value->name;?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group <?php if(isset($error['city_id'])):?>has-error<?php endif;?>">
                                <label class="col-sm-2 control-label">城市</label>
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <select class="form-control m-b province" name="Company[province_id]">
                                                <option value>----选择省份----</option>
                                                <?php foreach ($province as $key=>$value):?>
                                                    <option value="<?=$value->region_id;?>" <?php if($value->region_id == $company->province_id):?>selected<?php endif;?> ><?=$value->region_name;?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control m-b city" name="Company[city_id]">
                                                <option value>----选择城市----</option>
                                                <?php foreach ($city as $key=>$value):?>
                                                    <option value="<?=$value->region_id;?>" <?php if($value->region_id == $company->city_id):?> selected <?php endif;?> ><?=$value->region_name;?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                        <span class='has-error'><div class="help-block"><?php if(isset($error['city_id'])){echo $error['city_id'][0];};?></div></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group <?php if(isset($error['scale'])):?>has-error<?php endif;?>">
                                <label class="col-sm-2 control-label">规模</label>
                                <div class="col-sm-8">
                                    <input type="text" name="Company[scale]" value="<?=$company->scale;?>" placeholder="规模"  class="form-control">
                                </div>
                                <span class='has-error'><div class="help-block"><?php if(isset($error['scale'])){echo $error['scale'][0];};?></div></span>
                            </div>

                            <div class="form-group <?php if(isset($error['mobile'])):?>has-error<?php endif;?>">
                                <label class="col-sm-2 control-label">电话</label>
                                <div class="col-sm-8">
                                    <input type="text" name="Company[mobile]" value="<?=$company->mobile;?>" placeholder="电话"  class="form-control">
                                </div>
                                <span class='has-error'><div class="help-block"><?php if(isset($error['mobile'])){echo $error['mobile'][0];};?></div></span>
                            </div>

                            <div class="form-group <?php if(isset($error['website'])):?>has-error<?php endif;?>">
                                <label class="col-sm-2 control-label">网址</label>
                                <div class="col-sm-8">
                                    <input type="text" name="Company[website]" value="<?=$company->website;?>" placeholder="网址"  class="form-control">
                                </div>
                                <span class='has-error'><div class="help-block"><?php if(isset($error['website'])){echo $error['website'][0];};?></div></span>
                            </div>

                            <div class="form-group <?php if(isset($error['name'])):?>has-error<?php endif;?>">
                                <label class="col-sm-2 control-label">简介</label>
                                <div class="col-sm-8">
                                    <textarea name="Company[instroduce]" value="<?=$company->instroduce;?>" placeholder="简介" rows="5"  class="form-control"></textarea>
                                </div>
                                <span class='has-error'><div class="help-block"><?php if(isset($error['instroduce'])){echo $error['instroduce'][0];};?></div></span>
                            </div>

                            <div class="form-group <?php if(isset($error['remarks'])):?>has-error<?php endif;?>">
                                <label class="col-sm-2 control-label">备注</label>
                                <div class="col-sm-8">
                                    <textarea name="Company[remarks]" value="<?=$company->remarks;?>" placeholder="备注" rows="5"  class="form-control"></textarea>
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