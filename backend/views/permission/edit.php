<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2017/11/7
 * Time: 12:05
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
                    <h5>编辑权限
                        <small></small>
                    </h5>
                    <div class="ibox-tools">
                        <a class="btn btn-primary btn-sm" href="<?= Url::toRoute(['permission']); ?>"> 返回 </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form method="post" class="form-horizontal">
                        <div class="form-group <?php if (isset($error['description'])): ?>has-error<?php endif; ?>">
                            <label class="col-sm-2 control-label">权限名称</label>
                            <div class="col-sm-8">
                                <input type="text" name="PermissionForm[description]" placeholder="权限名称"
                                       class="form-control" value="<?=$permission_info->description;?>">
                            </div>
                            <span class='has-error'><div class="help-block"><?php if (isset($error['description'])) {
                                        echo $error['description'][0];
                                    }; ?></div></span>
                        </div>

                        <div class="form-group <?php if (isset($error['name'])): ?>has-error<?php endif; ?>"><label
                                    class="col-sm-2 control-label">权限路径</label>
                            <div class="col-sm-8">
                                <input type="text" name="PermissionForm[name]" placeholder="权限路径" value="<?=$permission_info->name;?>" class="form-control">
                            </div>
                            <span class='has-error'>
                                <div class="help-block">
                                    <?php if (isset($error['name'])) {
                                        echo $error['name'][0];
                                    }; ?>
                                </div>
                            </span>
                        </div>

                        <div class="form-group"><label class="col-sm-2 control-label">父级权限</label>
                            <div class="col-sm-8">
                                <div class="row">
                                    <div class="col-md-4">
                                        <select class="form-control m-b parent_permission"
                                                name="PermissionForm[parent_permission]" id="parent_permission">
                                            <option value>----选择父级权限----</option>
                                            <?php foreach ($permission as $key => $value): ?>
                                                <option value="<?= $value->name; ?>"
                                                    <?php if ($parent && $parent->name == $value->name): ?> selected <?php endif; ?> ><?= $value->description; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="form-control m-b" name="PermissionForm[child_permission]"
                                                id="child_permission">
                                            <option value>请选择</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group"><label class="col-sm-2 control-label">排序</label>
                            <div class="col-sm-2">
                                <input type="number" name="PermissionForm[sort]" placeholder="排序" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="hidden" value="<?=$permission_info->name;?>" name="PermissionForm[old_name]"/>
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-white" type="submit">关闭</button>
                                <button class="btn btn-primary" type="submit">保存</button>
                            </div>
                        </div>
                        <input type="hidden" name="<?= Yii::$app->request->csrfParam; ?>"
                               value="<?= Yii::$app->request->csrfToken; ?>"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php AppAsset::addJsFile($this, '/js/common.js'); ?>

<script>

    <?php $this->beginBlock('init_change'); ?>

    $(function () {

        var parent_name = $("#parent_permission").val();

        $.ajax({
            'url': "<?=Url::toRoute(['permission/getchild'])?>",
            'method': 'POST',
            'data': {'parent_name': parent_name, 'current_name':'<?=$permission_info->name;?>'},
            'success': function (data) {
                select_template(data);
            },
            'error': function (error) {
            }
        });

        function select_template(data) {
            $.each(data.child, function (k, v) {
                console.log(v.name);
                var select_str = "";
                var child_name = "<?= !empty($child)?$child->name:"";?>";
                if(v.name == child_name){
                    select_str = "selected";
                }
                var option = "<option value='" + v.name + "' "+select_str+">" + v.description + "</option>";
                $("#child_permission").append(option);
            });

        }

    });


    <?php $this->endBlock();?>

</script>

<?php $this->registerJs($this->blocks['init_change'], View::POS_END) ?>

