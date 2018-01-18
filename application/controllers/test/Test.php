<?php
/**
 * Created by PhpStorm.
 * Test.php
 * Author: gl
 * Date: 2018/1/18
 * Description:
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Test extends CI_Controller
{
    public function index(){
       $this->load->model('user');
       $list['data'] = $this->user->getuserlist();
       $this->load->view('test/index',$list);
    }
}