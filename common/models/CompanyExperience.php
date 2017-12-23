<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%company_experience}}".
 *
 * @property integer $id
 * @property integer $personnel_id
 * @property string $company_name
 * @property integer $job_type
 * @property string $job_title
 * @property integer $industry_id
 * @property string $department
 * @property string $start_date
 * @property string $end_date
 * @property string $job_content
 * @property integer $created_at
 * @property integer $updated_at
 */
class CompanyExperience extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%company_experience}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['job_type', 'personnel_id', 'industry_id', 'created_at', 'updated_at'], 'integer'],
            [['start_date', 'end_date'], 'safe'],
            [['job_content'], 'string'],
            [['company_name', 'job_title', 'department'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'personnel_id' => Yii::t('app', '所属人才'),
            'company_name' => Yii::t('app', '公司名称'),
            'job_type' => Yii::t('app', '职位类型'),
            'job_title' => Yii::t('app', '职位名称'),
            'industry_id' => Yii::t('app', '所属行业'),
            'department' => Yii::t('app', '部门名称'),
            'start_date' => Yii::t('app', '开始日期'),
            'end_date' => Yii::t('app', '结束日期'),
            'job_content' => Yii::t('app', '工作内容'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @inheritdoc
     * @return CompanyExperienceQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CompanyExperienceQuery(get_called_class());
    }
}
