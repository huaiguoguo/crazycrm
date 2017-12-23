<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%project}}".
 *
 * @property integer $id
 * @property string $project_name
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $number
 * @property integer $company_id
 * @property string $year_salary
 * @property integer $level
 * @property integer $func
 * @property integer $province_id
 * @property integer $city_id
 * @property string $jd
 * @property string $jr
 */
class Project extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%project}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['project_name', 'number', 'company_id', 'year_salary', 'level', 'func', 'city_id', 'jd', 'jr'], 'required'],
            [['status', 'created_at', 'updated_at', 'number', 'company_id', 'level', 'func', 'province_id', 'city_id'], 'integer'],
            [['year_salary'], 'number'],
            [['jd', 'jr'], 'string'],
            [['project_name'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'project_name' => Yii::t('app', 'Project Name'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'number' => Yii::t('app', 'Number'),
            'company_id' => Yii::t('app', 'Company ID'),
            'year_salary' => Yii::t('app', 'Year Salary'),
            'level' => Yii::t('app', 'Level'),
            'func' => Yii::t('app', 'Func'),
            'province_id' => Yii::t('app', 'Province ID'),
            'city_id' => Yii::t('app', 'City ID'),
            'jd' => Yii::t('app', 'Jd'),
            'jr' => Yii::t('app', 'Jr'),
        ];
    }

    /**
     * @inheritdoc
     * @return ProjectQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProjectQuery(get_called_class());
    }
}
