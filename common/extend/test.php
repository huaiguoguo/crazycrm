<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2017/11/8
 * Time: 12:53
 */


$auth                          = Yii::$app->authManager;

//        //找到父菜单
//        $parent = $auth->getPermission('/test/test');
//
//        //创建一个子菜单
//        $child = $auth->createPermission("/test/haha");
//        $auth->add($child);
//
//        //把子菜单加入父菜单下面
//        $addPermission = $auth->addChild($parent, $child);


//////////////////
//        $child = $auth->createRole("管理员");
//        $child->description = "测试角色";
//        $auth->add($child);
//
//        //找到父角色
//        $parent = $auth->getRole('管理员');
//
//        //创建一个子角色
//        $child = $auth->createRole("子管理员");
//        $auth->add($child);
//
//        //把子角色加入父角色下面
//        $addRole = $auth->addChild($parent, $child);
//        dump(Yii::$app->user->identity->role);
//        $role = $auth->createRole('管理员a');
//        $child = $auth->createPermission("/test/haha");
//        $test = $auth->addChild($role, $child);