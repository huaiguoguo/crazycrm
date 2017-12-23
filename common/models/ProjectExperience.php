<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%project_experience}}".
 *
 * @property integer $id
 * @property integer $personnel_id
 * @property string $project_name
 * @property string $project_role
 * @property string $website
 * @property integer $start_date
 * @property integer $end_date
 * @property string $project_description
 * @property integer $created_at
 * @property integer $updated_at
 */
class ProjectExperience extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%project_experience}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['start_date', 'personnel_id', 'end_date', 'created_at', 'updated_at'], 'integer'],
            [['project_description'], 'string'],
            [['project_name'], 'string', 'max' => 30],
            [['project_role'], 'string', 'max' => 20],
            [['website'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'                  => Yii::t('app', 'ID'),
            'personnel_id'        => Yii::t('app', '所属人才'),
            'project_name'        => Yii::t('app', '项目名称'),
            'project_role'        => Yii::t('app', '项目角色'),
            'website'             => Yii::t('app', '网址'),
            'start_date'          => Yii::t('app', '开始日期'),
            'end_date'            => Yii::t('app', '结束日期'),
            'project_description' => Yii::t('app', '项目描述'),
            'created_at'          => Yii::t('app', '创建日期'),
            'updated_at'          => Yii::t('app', '更新日期'),
        ];
    }

    /**
     * @inheritdoc
     * @return ProjectExperienceQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProjectExperienceQuery(get_called_class());
    }
}
