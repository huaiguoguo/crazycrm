<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2017/11/5
 * Time: 17:19
 */

namespace backend\controllers;


use common\models\City;
use common\models\Company;
use common\models\Func;
use common\models\Project;
use common\models\Region;
use Yii;
use yii\web\Controller;
use yii\web\Response;

class ProjectController extends Controller
{
    public function actionIndex()
    {
    }

    public function actionList()
    {
        $data         = [];
        $data['list'] = Project::find()->all();

        return $this->render('list', $data);
    }

    public function actionAdd()
    {
        $data            = [];
        $data['company'] = Company::find()->all();
        $data['city']    = City::find()->all();
        $data['func']    = Func::find()->all();

        $Project = new Project();
        if ($Project->load(Yii::$app->request->post()) && $Project->save()) {
            return $this->goBack();
        }
        $data['error'] = $Project->getErrors();

        return $this->render('add', $data);
    }

    public function actionEdit()
    {

        $id = Yii::$app->request->get('id');

        $Project = Project::findOne($id);
        if ($Project->load(Yii::$app->request->post()) && $Project->save()) {
            return $this->goBack();
        }

        $data['project']  = $Project;
        $data['company']  = Company::find()->all();

        $data['func']     = Func::find()->all();
        $data['error']    = $Project->getErrors();

        $data['province'] = Region::find()->where(['region_type'=>1])->all();

        $data['city'] = Region::find()->where(['parent_id'=>$Project->province_id])->all();

        return $this->render('edit', $data);
    }


    public function actionDelete()
    {

    }


    public function actionGetcity()
    {
        if (Yii::$app->request->isAjax && Yii::$app->request->isPost){
            Yii::$app->response->format = Response::FORMAT_JSON;

            $region_id = Yii::$app->request->post('region_id');

            $city = Region::find()->where(['parent_id'=>$region_id])->all();

            $data = ["result"=>$city, 'code'=>200, 'error'=>0, 'messgae'=>'success'];

            Yii::$app->response->data = $data;
            Yii::$app->response->send();

        }
    }
}