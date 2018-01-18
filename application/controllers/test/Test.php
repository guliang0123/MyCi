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
        $this->load->model('user','mpage');    //调数据库数据
        $this->load->helper('url');       //系统的帮助类
    }

    public function page()
    {
        //总记录数

        $date=$this->mpage->gettotal();
        $number=$date[0]->total;

        $config['base_url'] = 'http://gl.ci.net/test/test/page/'; //路径
        $config['total_rows'] = $number;  //配置记录总条数
        $config['per_page'] = 8; //配置每页显示的记录数

        //如果你希望在整个分页周围围绕一些标签，你可以通过下面的两种方法：
        //$config['uri_segment'] = 4;     //指定第几参数为分页页数(默认是3 这个可不写)
        $config['next_link'] = '下一页';
        $config['prev_link'] = '上一页';
        $config['last_link'] = '末页';
        $config['first_link'] = '首页';
        $config['use_page_numbers'] = TRUE;

        //配置样式
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['attributes'] = array('class' => 'myclass');//给所有<a>标签加上class
        //配置分页导航当前页两边显示的条数
        $config['num_links'] = 3;
        //配置偏移量在url中的位置
        $curpage = $this->uri->segment(4);
        //配置分页类
        $tab['data']=$this->mpage->get_books($config['per_page'], $curpage);//当前页显示的数据

        $this->pagination->initialize($config);
        $this->load->view('test/page',$tab);     //调页面  传数据
    }

    public function index(){
       $this->load->model('user');
       $list['data'] = $this->user->getuserlist();//注意要分配变量
       $this->load->view('test/index',$list);
    }
}