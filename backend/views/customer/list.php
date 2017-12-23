<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2017/11/7
 * Time: 11:21
 */

use backend\assets\AppAsset;
use yii\helpers\Url;
use yii\web\View;

?>

    <!--<link href="css/plugins/footable/footable.core.css" rel="stylesheet">-->
<?php AppAsset::addCssFile($this, "@web/inspinia/css/plugins/footable/footable.core.css"); ?>


    <div class="wrapper wrapper-content animated fadeInRight">
        <!--
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>FooTable with row toggler, sorting and pagination</h5>

                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <table class="footable table table-stripped toggle-arrow-tiny">
                            <thead>
                            <tr>

                                <th data-toggle="true">Project</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th data-hide="all">Company</th>
                                <th data-hide="all">Completed</th>
                                <th data-hide="all">Task</th>
                                <th data-hide="all">Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Project - This is example of project</td>
                                <td>Patrick Smith</td>
                                <td>0800 051213</td>
                                <td>Inceptos Hymenaeos Ltd</td>
                                <td><span class="pie">0.52/1.561</span></td>
                                <td>20%</td>
                                <td>Jul 14, 2013</td>
                                <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr>
                            <tr>
                                <td>Alpha project</td>
                                <td>Alice Jackson</td>
                                <td>0500 780909</td>
                                <td>Nec Euismod In Company</td>
                                <td><span class="pie">6,9</span></td>
                                <td>40%</td>
                                <td>Jul 16, 2013</td>
                                <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr>
                            <tr>
                                <td>Betha project</td>
                                <td>John Smith</td>
                                <td>0800 1111</td>
                                <td>Erat Volutpat</td>
                                <td><span class="pie">3,1</span></td>
                                <td>75%</td>
                                <td>Jul 18, 2013</td>
                                <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr>
                            <tr>
                                <td>Gamma project</td>
                                <td>Anna Jordan</td>
                                <td>(016977) 0648</td>
                                <td>Tellus Ltd</td>
                                <td><span class="pie">4,9</span></td>
                                <td>18%</td>
                                <td>Jul 22, 2013</td>
                                <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr>
                            <tr>
                                <td>Alpha project</td>
                                <td>Alice Jackson</td>
                                <td>0500 780909</td>
                                <td>Nec Euismod In Company</td>
                                <td><span class="pie">6,9</span></td>
                                <td>40%</td>
                                <td>Jul 16, 2013</td>
                                <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr>
                            <tr>
                                <td>Project
                                    <small>This is example of project</small>
                                </td>
                                <td>Patrick Smith</td>
                                <td>0800 051213</td>
                                <td>Inceptos Hymenaeos Ltd</td>
                                <td><span class="pie">0.52/1.561</span></td>
                                <td>20%</td>
                                <td>Jul 14, 2013</td>
                                <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr>
                            <tr>
                                <td>Gamma project</td>
                                <td>Anna Jordan</td>
                                <td>(016977) 0648</td>
                                <td>Tellus Ltd</td>
                                <td><span class="pie">4,9</span></td>
                                <td>18%</td>
                                <td>Jul 22, 2013</td>
                                <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr>
                            <tr>
                                <td>Project
                                    <small>This is example of project</small>
                                </td>
                                <td>Patrick Smith</td>
                                <td>0800 051213</td>
                                <td>Inceptos Hymenaeos Ltd</td>
                                <td><span class="pie">0.52/1.561</span></td>
                                <td>20%</td>
                                <td>Jul 14, 2013</td>
                                <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr>
                            <tr>
                                <td>Alpha project</td>
                                <td>Alice Jackson</td>
                                <td>0500 780909</td>
                                <td>Nec Euismod In Company</td>
                                <td><span class="pie">6,9</span></td>
                                <td>40%</td>
                                <td>Jul 16, 2013</td>
                                <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr>
                            <tr>
                                <td>Betha project</td>
                                <td>John Smith</td>
                                <td>0800 1111</td>
                                <td>Erat Volutpat</td>
                                <td><span class="pie">3,1</span></td>
                                <td>75%</td>
                                <td>Jul 18, 2013</td>
                                <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr>
                            <tr>
                                <td>Gamma project</td>
                                <td>Anna Jordan</td>
                                <td>(016977) 0648</td>
                                <td>Tellus Ltd</td>
                                <td><span class="pie">4,9</span></td>
                                <td>18%</td>
                                <td>Jul 22, 2013</td>
                                <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr>
                            <tr>
                                <td>Alpha project</td>
                                <td>Alice Jackson</td>
                                <td>0500 780909</td>
                                <td>Nec Euismod In Company</td>
                                <td><span class="pie">6,9</span></td>
                                <td>40%</td>
                                <td>Jul 16, 2013</td>
                                <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr>
                            <tr>
                                <td>Project
                                    <small>This is example of project</small>
                                </td>
                                <td>Patrick Smith</td>
                                <td>0800 051213</td>
                                <td>Inceptos Hymenaeos Ltd</td>
                                <td><span class="pie">0.52/1.561</span></td>
                                <td>20%</td>
                                <td>Jul 14, 2013</td>
                                <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr>
                            <tr>
                                <td>Gamma project</td>
                                <td>Anna Jordan</td>
                                <td>(016977) 0648</td>
                                <td>Tellus Ltd</td>
                                <td><span class="pie">4,9</span></td>
                                <td>18%</td>
                                <td>Jul 22, 2013</td>
                                <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr>
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
        -->

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <a href="<?= Url::toRoute("add") ?>" class="btn btn-primary"> 新增人才 </a>
                    </div>

                    <div class="ibox-content">
                        <input type="text" class="form-control input-sm m-b-xs" id="filter" placeholder="Search in table">

                        <table class="footable table table-stripped" data-page-size="8" data-filter=#filter>
                            <thead>
                            <tr>
                                <th>姓名</th>
                                <th>手机</th>
                                <th data-hide="phone,tablet">邮箱</th>
                                <th data-hide="phone,tablet">QQ</th>
                                <th data-hide="phone,tablet">工作年限</th>
                                <th data-hide="phone,tablet">操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($list as $key=>$value):?>
                                <tr class="gradeX">
                                    <td><?=$value->username;?></td>
                                    <td><?=$value->mobile;?></td>
                                    <td><?=$value->email;?></td>
                                    <td class="center"><?=$value->qq;?></td>
                                    <td class="center"><?=$value->work_life;?>年</td>
                                    <td class="">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs"><a href="<?php Url::toRoute(['look'])?>">查看</a></button>
                                            <button class="btn-white btn btn-xs"><a href="<?php echo Url::toRoute(['edit', 'id'=>$value->id])?>">编辑</a></button>
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
            <strong>Copyright</strong> Example Company &copy; 2014-2017
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