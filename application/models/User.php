<?php
/**
 * Created by PhpStorm.
 * User.php
 * Author: gl
 * Date: 2018/1/18
 * Description:
 */

class User extends CI_Model
{
    public function getuserlist(){
        $list = $this->db->get('users',100)->result();//从users表里查询100条记录
        return $list;
    }
}