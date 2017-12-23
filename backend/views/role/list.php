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

<!--<link href="css/plugins/footable/footable.core.css" rel="stylesheet">-->
<?php AppAsset::addCssFile($this, "@web/inspinia/css/plugins/footable/footable.core.css"); ?>

<div class="wrapper wrapper-content animated fadeInRight">

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <a href="<?php Url::toRoute("add") ?>" class="btn btn-primary"> 新增角色 </a>
                </div>

                <div class="ibox-content">
                    <input type="text" class="form-control input-sm m-b-xs" id="filter" placeholder="Search in table">

                    <table class="footable table table-stripped" data-page-size="8" data-filter=#filter>
                        <thead>
                        <tr>
                            <th>角色</th>
                            <th>路径</th>
                            <th data-hide="phone,tablet">Platform(s)</th>
                            <th data-hide="phone,tablet">Engine version</th>
                            <th data-hide="phone,tablet">CSS grade</th>
                            <th data-hide="phone,tablet">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($list as $key=>$value):?>
                            <tr class="gradeX">
                                <td><?=$value->name;?></td>
                                <td><?=$value->description;?></td>
                                <td>Win 95+</td>
                                <td class="center">4</td>
                                <td class="center">X</td>
                                <td class="">
                                    <div class="btn-group">
                                        <button class="btn-white btn btn-xs"><a href="/permission/permission.html">查看</a></button>
                                        <button class="btn-white btn btn-xs"><a href="/permission/edit-permission.html?name=%2Fcomment%2Findex">编辑</a></button>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="5">
                                <ul class="pagination pull-right"></ul>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="footer">
    <div class="pull-right">
        10GB of <strong>250GB</strong> Free.
    </div>
    <div>
        <strong>Copyright</strong> 火柴工作室 &copy; 2014-2018
    </div>
</div>


<?php AppAsset::addJsFile($this, "@web/inspinia/js/plugins/footable/footable.all.min.js"); ?>
<!-- FooTable -->
<!--<script src="js/plugins/footable/footable.all.min.js"></script>-->


<!-- Page-Level Scripts -->
<script>
    <?php $this->beginBlock('footable'); ?>
    $(document).ready(function () {
        $('.footable').footable();
        $('.footable2').footable();
    });
    <?php $this->endBlock(); ?>
</script>
<?php $this->registerJs($this->blocks['footable'], View::POS_END) ?>



