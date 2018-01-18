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
