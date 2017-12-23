<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%company}}".
 *
 * @property integer $id
 * @property string $company_name
 * @property integer $industry_id
 * @property string $scale
 * @property integer $city_id
 * @property integer $province_id
 * @property integer $mobile
 * @property string $website
 * @property string $instroduce
 * @property string $remarks
 * @property integer $created_at
 * @property integer $updated_at
 */
class Company extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%company}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['industry_id', 'province_id', 'city_id', 'mobile', 'created_at', 'updated_at'], 'integer'],
            [['instroduce'], 'string'],
            [['company_name'], 'string', 'max' => 20],
            [['scale'], 'string', 'max' => 10],
            [['website'], 'string', 'max' => 60],
            [['remarks'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'           => Yii::t('app', 'ID'),
            'company_name' => Yii::t('app', 'Company Name'),
            'industry_id'  => Yii::t('app', 'Industry ID'),
            'scale'        => Yii::t('app', 'Scale'),
            'province_id'  => Yii::t('app', 'Province ID'),
            'city_id'      => Yii::t('app', 'City ID'),
            'mobile'       => Yii::t('app', 'Mobile'),
            'website'      => Yii::t('app', 'Website'),
            'instroduce'   => Yii::t('app', 'Instroduce'),
            'remarks'      => Yii::t('app', 'Remarks'),
            'created_at'   => Yii::t('app', 'Created At'),
            'updated_at'   => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @inheritdoc
     * @return CompanyQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CompanyQuery(get_called_class());
    }

}
