<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2017/11/7
 * Time: 11:37
 */

namespace backend\controllers;

use common\component\EDbManager;
use common\models\AuthItem;
use common\models\PermissionForm;
use yii;
use backend\component\EController;
use common\models\Customer;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Response;

/**
 * @author: 火柴<290559038@qq.com>
 * @descri: 权限控制器  新增/编辑/删除 权限项
 * Class PermissionController
 * @package backend\controllers
 */
class PermissionController extends EController
{

    public function actionIndex()
    {
    }

    public function actionList()
    {
        $data         = [];
        $list         = $this->auth->getPermissions();
        $data['list'] = $list;

        return $this->render('list', $data);
    }

    public function actionAdd()
    {
        $data = [];

        $data['error'] = [];

        $permissionForm = new PermissionForm();
        if ($permissionForm->load(Yii::$app->request->post()) && $permissionForm->validate()) {
            if ($permissionForm->add()) {
                Yii::$app->session->setFlash('success', '新增权限成功');

                return $this->redirect(['list']);
            } else {
                Yii::$app->session->setFlash('error', '新增权限失败');

                return $this->redirect(['list']);
            }
        } else {
            $data['error'] = $permissionForm->getErrors();
        }

        $data['permission'] = $this->getAllPermission();

        return $this->render('add', $data);
    }


    public function actionAjaxGetPermission()
    {
        Yii::$app->response->format = yii\web\Response::FORMAT_JSON;
        if (Yii::$app->request->isAjax && Yii::$app->request->isPost) {
            $auth = $this->auth;
            $item = $auth->getChildren(Yii::$app->request->post('name'));

            return ['code' => 200, 'msg' => 'success', 'data' => $item];
        }
    }


    public function actionEdit()
    {

        $data                    = [];
        $name                    = trim(Yii::$app->request->get('name'));
        $permission_info         = $this->auth->getPermission($name);
        $data['permission_info'] = $permission_info;


        $permissionForm = new PermissionForm();
        if ($permissionForm->load(Yii::$app->request->post()) && $permissionForm->validate()) {
            if ($permissionForm->updateItem()) {
                return $this->redirect(['list']);
            } else {
                return $this->redirect(['list']);
            }
        }

        $data_select = [];
        $this->getSelectOption($name, $data_select);

        $data['parent'] = !empty($data_select[0]) ? $data_select[0] : false;
        $data['child']  = !empty($data_select[1]) ? $data_select[1] : false;

        $data['permission'] = $this->getAllPermission();

        return $this->render('edit', $data);

    }


    public function actionDelete()
    {

        if (Yii::$app->request->isAjax) {

        }

    }


    public function actionGetchild()
    {
        if (Yii::$app->request->isAjax && Yii::$app->request->isPost) {
            $response         = Yii::$app->response;
            $response->format = Response::FORMAT_JSON;
            $current_name     = Yii::$app->request->post('current_name');
            $parent_name             = Yii::$app->request->post('parent_name');
            $children         = $this->auth->getChildren($parent_name);

            unset($children[$current_name]);

            $response->data = ['child' => $children];
            $response->send();
        }
    }


}