<?php
/**
 * 友好调试，默认中断
 */
if(!function_exists('dd')){
    function dd($data,$isexit=true)
    {
        $str = '<div style="clear: both;"><pre>';
        $str .= print_r($data,true);//以字符串方式输出
        $str .= '</pre></div>';
        echo $str;
        if($isexit){
            exit;
        }

    }
}
/**
 * 数据分页样式配置
 */
if(!function_exists('page_config')){
    function page_config($number,$per_nums=10){
        $config['total_rows'] = $number;  //配置记录总条数
        $config['per_page'] = $per_nums; //配置每页显示的记录数
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
        //配置分页导航当前页两边显示的条数
        $config['num_links'] = 5;

        return $config;
    }
}