<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/14
 * Time: 10:30
 */

namespace backend\controllers;

use Yii;
use yii\web\Controller;

class TestController extends Controller
{

    public function actionError()
    {
        $exception = Yii::$app->errorHandler->exception;
        if ($exception !== null) {
            return $this->render('error', ['exception' => $exception]);
        }
    }


    public function actionIndex()
    {
        $data = [];

        return $this->render('index', $data);
    }


    public function actionAdd()
    {

        $auth = Yii::$app->authManager;

        dump($auth);

        $permission              = $auth->createPermission("/test/one");
        $permission->description = "这是测试one";
//        $permission->ruleName = "ruleone";
        if ($auth->add($permission)) {
            echo "权限项创建成功";
        } else {
            echo "权限项创建不成功";
        }

        return $this->renderContent('添加');
    }


    public function actionAddchild()
    {
        $auth = Yii::$app->authManager;

        $parent = $auth->getPermission("/test/one");

        $child              = $auth->createPermission("/test/two");
        $child->description = "这是one的子类";

        $child_is = $auth->addChild($parent, $child);


        dump($child_is);


        return $this->renderContent("添加子项");
    }


    public function actionDelete()
    {
        return $this->renderContent('删除');
    }

    public function actionUpdate()
    {
        return $this->renderContent('更新');
    }

    public function actionSelect()
    {
        return $this->renderContent('查询');
    }


}