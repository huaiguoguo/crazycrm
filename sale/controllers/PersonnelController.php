<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2017/11/5
 * Time: 17:20
 */

namespace sale\controllers;

use common\models\Func;
use common\models\Region;
use yii;
use common\models\City;
use common\models\Industry;
use common\models\Customer;
use sale\component\EController;
use yii\web\Response;


/**
 * @author: 火柴<290559038@qq.com>
 * @descri: 人才管理控制器
 * Class PersonnelController
 * @package backend\controllers
 */
class PersonnelController extends EController
{

    public function actionIndex()
    {
        $data = [];

        return $this->render('index', $data);
    }


    public function actionList()
    {
        $data         = [];
        $list         = Customer::find()->all();
        $data['list'] = $list;

        return $this->render('list', $data);
    }

    public function actionAdd()
    {
        $data = [];
        $Personnel = new Customer();
        if ($Personnel->load(Yii::$app->request->post()) && $Personnel->save()) {
            return $this->goBack();
        }
        $data['personnel'] = $Personnel;
        $data['error'] = $Personnel->getErrors();
        $data['industry'] = Industry::find()->all();
        $data['func'] = Func::find()->all();
        $data['province'] = Region::find()->where(['region_type'=>1])->all();

        $data['location_city'] = Region::find()->where(['parent_id'=>$Personnel->location_province])->all();
        $data['expectation_city'] = Region::find()->where(['parent_id'=>$Personnel->expectation_province])->all();

        return $this->render('add', $data);
    }


    public function actionHaha()
    {

        return $this->render('haha');

    }


    public function actionEdit()
    {
        $data = [];
        $id = Yii::$app->request->get('id');
        $Personnel = Customer::findOne($id);

        if ($Personnel->load(Yii::$app->request->post()) && $Personnel->save()) {
            return $this->goBack();
        }

        $data['personnel'] = $Personnel;
        $data['error'] = $Personnel->getErrors();
        $data['industry'] = Industry::find()->all();
        $data['func'] = Func::find()->all();
        $data['province'] = Region::find()->where(['region_type'=>1])->all();

        $data['location_city'] = Region::find()->where(['parent_id'=>$Personnel->location_province])->all();
        $data['expectation_city'] = Region::find()->where(['parent_id'=>$Personnel->expectation_province])->all();

        return $this->render('edit', $data);
    }

    public function actionDelete()
    {
        if (Yii::$app->request->isAjax) {

        }
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