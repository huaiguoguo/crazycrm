<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%edu_experience}}".
 *
 * @property integer $id
 * @property integer $personnel_id
 * @property string $school_name
 * @property string $professional_name
 * @property string $education
 * @property integer $start_date
 * @property integer $end_date
 * @property string $school_experience
 * @property integer $created_at
 * @property integer $updated_at
 */
class EduExperience extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%edu_experience}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['start_date', 'personnel_id', 'end_date', 'created_at', 'updated_at'], 'integer'],
            [['school_experience'], 'string'],
            [['school_name'], 'string', 'max' => 60],
            [['professional_name', 'education'], 'string', 'max' => 30],
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
            'school_name' => Yii::t('app', '学校名称'),
            'professional_name' => Yii::t('app', '专业名称'),
            'education' => Yii::t('app', '学历'),
            'start_date' => Yii::t('app', '开始日期'),
            'end_date' => Yii::t('app', '结束日期'),
            'school_experience' => Yii::t('app', ' 在校经历'),
            'created_at' => Yii::t('app', '创建日期'),
            'updated_at' => Yii::t('app', '更新日期'),
        ];
    }

    /**
     * @inheritdoc
     * @return EduExperienceQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EduExperienceQuery(get_called_class());
    }
}
