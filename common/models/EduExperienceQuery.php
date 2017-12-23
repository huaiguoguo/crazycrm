<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[EduExperience]].
 *
 * @see EduExperience
 */
class EduExperienceQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return EduExperience[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return EduExperience|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
