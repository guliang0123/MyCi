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
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination'); //系统的library
        $this->load->model('user','user');    //加载user模型，赋为变量user
        $this->load->helper('url');       //系统的帮助类
    }

    /**
     * @description 数据分页
     */
    public function page()
    {
        //1.总记录数
        $date = $this->user->gettotal();
        $number =$date[0]->total;//总记录
        $config = page_config($number);//调用自定义助手函数 加载配置 默认每页显示10条
        $config['base_url'] = 'http://gl.ci.net/test/test/page/'; //路径
        $this->pagination->initialize($config);
        //配置偏移量在url中的位置
        $curpage = $this->uri->segment(4);
        $tab['data'] = $this->user->get_books($config['per_page'], $curpage);//当前页显示的数据
        $tab['pagestr'] = $this->pagination->create_links();
        $this->load->view('test/page',$tab);     //调页面  传数据
    }

    /**
     * @description 首页
     */
    public function index(){
       $this->load->model('user');
       $list['data'] = $this->user->getuserlist();//注意要分配变量
       $this->load->view('test/index',$list);
    }
}