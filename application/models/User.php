<?php
/**
 * Created by PhpStorm.
 * User.php
 * Author: gl
 * Date: 2018/1/18
 * Description:
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Model
{
    public function  __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function  gettotal()
    {
        $query=$this->db->query("SELECT count(*) total FROM ebh_users");
        return $query->result();
    }
   public function get_books($num,$offset)
    {
        $query=$this->db->get('users',$num,$offset);
        return $query->result();
    }
    public function getuserlist(){
        $list = $this->db->get('users',100)->result();//从users表里查询100条记录
        return $list;
    }


}