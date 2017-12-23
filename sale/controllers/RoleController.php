<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2017/11/7
 * Time: 11:38
 */

namespace sale\controllers;

use yii;
use sale\component\EController;
use yii\rbac\Role;

/**
 * @author: 火柴<290559038@qq.com>
 * @descri: 角色管理控制器  角色列表  添加/编辑/删除
 * Class RoleController
 * @package backend\controllers
 */
class RoleController extends EController
{
    public function actionIndex()
    {
    }

    public function actionList()
    {
        $data = [];
        $auth = Yii::$app->authManager;
        $list = $auth->getRoles();
        $data['list'] = $list;
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
        $data = [];
        if (Yii::$app->request->isAjax) {

        }

        return $this->render('edit', $data);
    }

    public function actionDelete()
    {
        if (Yii::$app->request->isAjax) {

        }
    }
}