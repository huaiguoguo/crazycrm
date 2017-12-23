<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2017/11/7
 * Time: 11:41
 */

namespace backend\controllers;


use backend\component\EController;

/**
 * @author: 火柴<290559038@qq.com>
 * @descri: 管理员控制器 给管理员分配角色 添加/编辑/列表
 * Class AdministratorController
 * @package backend\controllers
 */
class AdministratorController extends EController
{
    public function actionIndex()
    {
    }

    public function actionList()
    {
        $data = [];
        return $this->render('list', $data);
    }

    public function actionAdd()
    {
        $data = [];
        if (Yii::$app->request->isAjax) {

        }

        return $this->render('add', $data);
    }

    public function actionEdit()
    {
    }

    public function actionAssign()
    {
    }

    public function actionDelete()
    {
    }
}