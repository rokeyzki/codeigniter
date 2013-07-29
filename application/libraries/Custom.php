<?php
if (!defined('BASEPATH')) exit('No direct script access allowed'); 

class Custom {

    function __construct() 
    {  
        /** 获取CI句柄 **/
        $this->CI = & get_instance();
		/** 默认使用jQuery **/
		$this->jquery();
    }
	
	function jquery()
	{
		$this->CI->load->helper('url');
		echo "<script type='text/javascript' src='".base_url('resources/jquery/jquery-1.10.2.min.js')."'></script>";	
	}

	function bootstrap()
	{
		$this->CI->load->helper('url');
		echo "<link href='".base_url('resources/bootstrap/css/bootstrap.min.css')."' rel='stylesheet' type='text/css' media='screen'>";
		echo "<script type='text/javascript' src='".base_url('resources/bootstrap/js/bootstrap.min.js')."'></script>";	
	}
	
	function maxmertkit()
	{
		$this->CI->load->helper('url');
		echo "<link href='".base_url('resources/maxmertkit/css/maxmertkit.css')."' rel='stylesheet' type='text/css' media='screen'>";
		echo "<link href='".base_url('resources/maxmertkit/css/maxmertkit-components.css')."' rel='stylesheet' type='text/css' media='screen'>";
		echo "<link href='".base_url('resources/maxmertkit/css/maxmertkit-animation.css')."' rel='stylesheet' type='text/css' media='screen'>";	
	}

}
?>