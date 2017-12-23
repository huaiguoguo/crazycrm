<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[CompanyExperience]].
 *
 * @see CompanyExperience
 */
class CompanyExperienceQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return CompanyExperience[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return CompanyExperience|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
