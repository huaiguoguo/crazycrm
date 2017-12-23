<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/11
 * Time: 16:28
 */

use yii\bootstrap\ActiveForm;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;

?>



<div class="row">

    <nav class="col-lg-2 col-sm-2 sidebar-nav">
        <ul class="nav nav">
            <li><a href="#">个人信息</a></li>
            <li><a href="#">自我描述</a></li>
            <li><a href="#">期望工作</a></li>
            <li><a href="#">教育经历</a></li>
            <li><a href="#">工作经历</a></li>
            <li><a href="#">项目经历</a></li>
            <li><a href="#">技能评价</a></li>
        </ul>
    </nav>


    <div class="col-lg-10 col-sm-10 col-xs-10 col-md-10">

        <!--        <div class="ibox float-e-margins">-->
        <!---->
        <!--            <div class="ibox-content">-->

        <form method="post" class="">
            <input type="hidden" name="<?= Yii::$app->request->csrfParam; ?>" value="<?= Yii::$app->request->csrfToken; ?>"/>

            <div class="page-header">个人信息</div>


            <div class="row">
                <div class="col-sm-4">

                    <div class="form-group">
                        <label class=" control-label">姓名</label>
                        <input type="text" class="form-control" name="username" placeholder="姓名">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label">昵称</label>
                        <input type="text" class="form-control" name="nickname" placeholder="昵称">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label" for="">邮箱</label>
                        <input type="text" name="email" class="form-control" placeholder="邮箱">
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label" for="">qq</label>
                        <input type="number" min="10010" name="qq" class="form-control" placeholder="qq">
                    </div>
                </div>
            </div>


            <div class="row">

                <div class="col-sm-4 col-lg-4">
                    <div class="form-group">
                        <label class="control-label" for="">手机</label>
                        <input type="tel" name="mobile" class="form-control" placeholder="手机">
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4">
                    <div class="form-group">
                        <label class="control-label" for="">生日</label>
                        <input type="date" name="birthday" class="form-control" placeholder="生日">
                    </div>
                </div>

            </div>


            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label" for="">当前状态</label>
                        <select name="status" class="form-control">
                            <option value>请选择状态</option>
                            <option value=1>在职</option>
                            <option value=2>离职</option>
                        </select>
                    </div>
                </div>
            </div>


            <div class="page-header"><span class="">自我描述</span></div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="control-label" for="">自我介绍</label>
                        <textarea rows="8" name="self_evaluation" class="form-control" placeholder="自我介绍"></textarea>
                    </div>
                </div>
            </div>


            <div class="page-header">期望工作</div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label" for="">期望职位</label>
                        <input type="text" name="expectation_job" class="form-control" placeholder="期望职位"/>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="form-group">
                        <label class="control-label" for="">薪资要求</label>
                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xs-4">
                                <select name="expectation_salary_min" class="form-control">
                                    <option value>请选择</option>
                                    <option value="1">1k</option>
                                    <option value="2">2k</option>
                                    <option value="3">3k</option>
                                </select>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xs-4">
                                <select name="expectation_salary_max" class="form-control">
                                    <option value>请选择</option>
                                    <option value="1">1k</option>
                                    <option value="2">2k</option>
                                    <option value="3">3k</option>
                                    <option value="4">4k</option>
                                    <option value="5">5k</option>
                                    <option value="6">6k</option>
                                    <option value="7">7k</option>
                                    <option value="8">8k</option>
                                    <option value="9">9k</option>
                                    <option value="13">13k</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label" for="">期望行业</label>
                        <input type="number" name="expectation_industry" class="form-control" placeholder="期望行业"/>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label" for="">期望城市</label>
                        <input type="number" name="expectation_city" class="form-control" placeholder=""/>
                    </div>
                </div>
            </div>


            <div class="page-header"><span style="color:red">教育经历</span> <span class="pull-right">添加</span></div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label" for="">学校名称</label>
                        <input type="text" name="edu[0][school_name]" class="form-control" placeholder="学校名称"/>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label" for="">专业名称</label>
                        <input type="text" name="edu[0][professional_name]" class="form-control" placeholder="专业名称"/>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label" for="">学历</label>
                        <input type="text" name="edu[0][education]" class="form-control" placeholder="学历"/>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="form-group">
                        <label class="control-label" for="">时间段</label>
                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xs-4">
                                <select name="edu[0][start_date]" class="form-control">
                                    <option value>请选择</option>
                                    <option value="1">2010</option>
                                    <option value="2">2011</option>
                                    <option value="3">2012</option>
                                </select>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xs-4">
                                <select name="edu[0][end_date]" class="form-control">
                                    <option value>请选择</option>
                                    <option value="1">2013</option>
                                    <option value="2">2014</option>
                                    <option value="3">2015</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="control-label" for="">在校经历</label>
                        <textarea rows="8" name="edu[0][school_experience]" class="form-control" placeholder="在校经历"></textarea>
                    </div>
                </div>
            </div>






            <div class="page-header">工作经历 <span class="pull-right">添加</span></div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label" for="">公司名称</label>
                        <input type="text" name="company[0][company_name]" class="form-control" placeholder="公司名称"/>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label" for="">职位类型</label>
                        <input type="number" name="company[0][job_type]" class="form-control" placeholder="职位类型"/>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label" for="">职位名称</label>
                        <input type="text" name="company[0][job_title]" class="form-control" placeholder="职位名称"/>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label" for="">所属行业</label>
                        <input type="number" name="company[0][industry_id]" class="form-control" placeholder="所属行业"/>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label" for="">所属部门</label>
                        <input type="text" name="company[0][department]" class="form-control" placeholder="所属部门(选填)"/>
                    </div>
                </div>

                <div class="col-sm-8">
                    <div class="form-group">
                        <label class="control-label" for="">时间段</label>
                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xs-4">
                                <select name="company[0][start_date]" class="form-control">
                                    <option value>请选择</option>
                                    <option value="1">2010</option>
                                    <option value="2">2011</option>
                                    <option value="3">2012</option>
                                </select>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xs-4">
                                <select name="company[0][end_date]" class="form-control">
                                    <option value>请选择</option>
                                    <option value="1">2013</option>
                                    <option value="2">2014</option>
                                    <option value="3">2015</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="control-label" for="">工作内容</label>
                        <textarea rows="8" name="company[0][job_content]" class="form-control" placeholder="工作内容"></textarea>
                    </div>
                </div>
            </div>




            <div class="page-header">项目经历 <span class="pull-right">添加</span></div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label" for="">项目名称</label>
                        <input type="text" name="project[0][project_name]" class="form-control" placeholder="项目名称"/>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label" for="">项目角色</label>
                        <input type="text" name="project[0][project_role]" class="form-control" placeholder="项目角色"/>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label" for="">项目网址</label>
                        <input type="text" name="project[0][website]" class="form-control" placeholder="项目网址(选填)"/>
                    </div>
                </div>

                <div class="col-sm-8">
                    <div class="form-group">
                        <label class="control-label" for="">时间段</label>
                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xs-4">
                                <select name="project[0][start_date]" class="form-control">
                                    <option value>请选择</option>
                                    <option value="1">2010</option>
                                    <option value="2">2011</option>
                                    <option value="3">2012</option>
                                </select>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xs-4">
                                <select name="project[0][end_date]" class="form-control">
                                    <option value>请选择</option>
                                    <option value="1">2013</option>
                                    <option value="2">2014</option>
                                    <option value="3">2015</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="control-label" for="">项目描述</label>
                        <textarea rows="8" name="project[0][project_description]" class="form-control" placeholder="工作内容"></textarea>
                    </div>
                </div>
            </div>


            <div class="page-header">社交账号 <span class="pull-right">添加</span></div>
            <div class="row">
                <div class="col-sm-10">
                    <div class="form-group">
                        <label class="control-label" for="">网址</label>
                        <input type="text" name="social[0][website]" class="form-control" placeholder="网址"/>
                    </div>
                </div>
            </div>


            <div class="page-header">技能标签 <span class="pull-right">添加</span></div>
            <div class="row">
                <div class="form-group hidden">
                    <label class="col-sm-2 control-label" for="">技能评价</label>
                    <div class="col-sm-5">
                        <textarea name="" class="form-control" placeholder="技能评价"></textarea>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="form-group">
                    <div class="col-lg-2 col-lg-offset-5">
                        <button type="submit" class="btn btn-success">提交</button>
                    </div>
                </div>
            </div>
        </form>

        <!--    </div>-->
        <!--</div>-->
    </div>
</div>





