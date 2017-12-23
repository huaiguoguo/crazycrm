<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2017/11/7
 * Time: 11:20
 */

namespace sale\component;

use yii;
use yii\web\Controller;

class EController extends Controller
{

    public function __get($name)
    {
        if ($name == 'auth') {
            return Yii::$app->authManager;
        }else{
            return "您要访问的变量不存在";
        }
    }

    protected function getAllPermission()
    {
        $auth = $this->auth;

        $permission = $auth->getPermissions();
        foreach ($permission as $key => $value) {
            $child = $auth->getChildren($value->name);
            if ($child) {
                foreach ($child as $ke => $val) {
                    if (array_key_exists($ke, $permission)) {
                        unset($permission[$ke]);
                    }
                }
            }
        }
        return $permission;
    }


    protected function get(){}
    protected function post(){}

    ///循环找三次，最上层的那个是父菜单(parent)，紧接着的那个菜单作为子菜单(child)
    public function getSelectOption($name, &$data)
    {
        $parent = $this->auth->getParent($name);
        if ($parent) {
            array_unshift($data, $parent);
            $this->getSelectOption($parent->name, $data);
        }
    }

}