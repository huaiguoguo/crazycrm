<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2016/7/6
 * Time: 19:30
 */

namespace common\models;

use yii;
use yii\base\Model;

use yii\rbac\Permission;
use common\models\AuthItem;
use common\component\HoComm;

class PermissionForm extends Model
{
    public $name;
    public $old_name;
    public $description;
    public $level;
    public $sort;
    public $parent_permission;
    public $child_permission;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description'], 'required', 'message' => '请填写{attribute}'],
            //[['name'], 'unique', 'targetClass' => '\common\models\Authitem', 'message' => '此标识已经添加过了' ],
            [['level', 'sort'], 'integer'],
            [['name', 'old_name', 'parent_permission', 'child_permission'], 'string', 'max' => 30],
            [['description'], 'string', 'max' => 255],
        ];
    }


    public function attributeLabels()
    {
        return [
            'name'        => '权限路径',
            'description' => '权限名称',
        ];
    }


    public function add()
    {
        $auth = Yii::$app->authManager;

        $createPermission              = $auth->createPermission($this->name);
        $createPermission->description = $this->description;
//        $createPermission->sort        = $this->sort;
//        $createPermission->level       = 1;

        $transaction = Yii::$app->db->beginTransaction();

        try {
            $parent = false;
            if ($this->child_permission) {
                $parent = $auth->getPermission($this->child_permission);
            } else {
                if ($this->parent_permission) {
                    $parent = $auth->getPermission($this->parent_permission);
                }
            }

            $auth->add($createPermission);
            if ($parent) {
//                $createPermission->level = $parent->level + 1;
                $auth->addChild($parent, $createPermission);
            }
            $transaction->commit();
            HoComm::getMenuCopy(true);

            return true;
        } catch (yii\db\Exception $e) {
            $transaction->rollBack();

            return false;
        }
    }


    public static function getPermission($name)
    {
        $auth = Yii::$app->authManager;

        return $auth->getPermission($name);
    }


    public function updateItem()
    {
        $auth = Yii::$app->authManager;

        //找到旧菜单对像
        $child  = $auth->getPermission($this->old_name);
        $parent = $auth->getParent($this->old_name);

        //移除旧的关系
        if ($parent){
            $isSuccess = $auth->removeChild($parent, $child);
        }

        //给子菜单 赋上新名
        $child->name        = $this->name;
        $child->description = $this->description;


        if ($auth->updateItem($this->old_name, $child)) {
            $select_parent = false;
            if ($this->child_permission) {
                $select_parent = $auth->getPermission($this->child_permission);
            } else {
                if ($this->parent_permission) {
                    $select_parent = $auth->getPermission($this->parent_permission);
                }
            }
            if ($select_parent) {
                $auth->addChild($select_parent, $child);
            }
            HoComm::getMenuCopy(true);
            return true;
        } else {
            return false;
        }
    }


}


?>