<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');  
require_once('smarty/Smarty.class.php');  
class CI_Smarty extends Smarty{

    //CI句柄
    private $CI;

    function __construct() {  
        parent::__construct();
        /** 获取CI句柄 */
        $this->CI = & get_instance();
        $this->initSmarty();
    }

    /**
    * 初始化smarty
    * @return void
    */
    function initSmarty(){
        $this->CI->load->helper('url');
        $this->template_dir =  APPPATH."views"; //模板存放目录,本人直接用的是CI的views目录，当然可以用templates也行。  
        $this->compile_dir = APPPATH."views/templates_c"; //编译目录，在application下需要新建此目录  
        $this->cache_dir = APPPATH."cache";//缓存目录。  
        $this->caching = 0;  
        //$this->cache_lifetime = 120; //缓存更新时间  
        //$this->debugging = true;  
        $this->compile_check = true; //检查当前的模板是否自上次编译后被更改；如果被更改了，它将重新编译该模板。  
        //$this->force_compile = true; //强制重新编译模板  
        //$this->allow_php_templates= true; //开启PHP模板  
        $this->left_delimiter = "{{"; //左定界符  
        $this->right_delimiter = "}}"; //右定界符  
        $this->smarty->assign('base_url', base_url()); ////非常重要，静态页面的css以及js路径  
    }
}  
/* End of file Smarty.php */  
/* Location: ./application/libraries/Smarty.php */