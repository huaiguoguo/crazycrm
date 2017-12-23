<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2017/11/9
 * Time: 15:00
 */

namespace common\component;


use yii\db\Expression;
use yii\db\Query;
use yii\rbac\DbManager;

class EDbManager extends DbManager
{
    public function getParent($name)
    {
        $query = (new Query)
            ->select(['name', 'type', 'description', 'rule_name', 'data', 'created_at', 'updated_at'])
            ->from([$this->itemTable, $this->itemChildTable])
            ->where(['child' => $name, 'name' => new Expression('[[parent]]')]);

        $children = [];
        foreach ($query->all($this->db) as $row) {
//            $children[$row['name']] = $this->populateItem($row);
            $children = $this->populateItem($row);
        }

        return $children;
    }


    public function updateItem($name, $item){
        return parent::updateItem($name, $item);
    }


}