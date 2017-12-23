<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2017/11/5
 * Time: 17:10
 */

namespace sale\controllers;

use common\models\City;
use common\models\Industry;
use common\models\Region;
use yii;
use common\models\Company;
use yii\web\Controller;

class CompanyController extends Controller
{

    public function actionIndex()
    {
    }

    public function actionList()
    {
        $data         = [];
        $list         = Company::find()->all();
        $data['list'] = $list;

        return $this->render('list', $data);
    }

    public function actionAdd()
    {
        $data = [];
        $Company = new Company();
        if ($Company->load(Yii::$app->request->post()) && $Company->save()) {
            return $this->goBack();
        }

        $data['company'] = $Company;
        $data['error'] = $Company->getErrors();
        $data['industry'] = Industry::find()->all();
        $data['province'] = City::find()->where(['level'=>1])->all();
        return $this->render('add', $data);

    }


    public function actionDetail()
    {
        $data = [];
        $data['error'] = [];
        return $this->render('detail', $data);
    }

    public function actionEdit()
    {
        $data = [];
        $id = Yii::$app->request->get('id');
        $Company = Company::findOne($id);
        if ($Company->load(Yii::$app->request->post()) && $Company->save()) {
            return $this->goBack();
        }

        $data['company'] = $Company;
        $data['error'] = $Company->getErrors();
        $data['industry'] = Industry::find()->all();
        $data['province'] = Region::find()->where(['region_type'=>1])->all();
        $data['city'] = Region::find()->where(['parent_id'=>$Company->province_id])->all();

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