<?php
if (!defined('BASEPATH')) exit('No direct script access allowed'); 

class Custom {

    function __construct() 
    {  
        /** 获取CI句柄 **/
        //$this->CI = & get_instance();
		/** 默认使用jQuery **/
		$this->jquery();
    }
	
	function jquery()
	{
		//$this->CI->load->helper('url');
		echo "<script type='text/javascript' src='".base_url('resources/jquery/jquery-1.10.2.min.js')."'></script>";	
	}

	function bootstrap()
	{
		//$this->CI->load->helper('url');
		echo "<link href='".base_url('resources/bootstrap/css/bootstrap.min.css')."' rel='stylesheet' type='text/css' media='screen'>";
		echo "<script type='text/javascript' src='".base_url('resources/bootstrap/js/bootstrap.min.js')."'></script>";	
	}
	
	function maxmertkit()
	{
		//$this->CI->load->helper('url');
		echo "<link href='".base_url('resources/maxmertkit/css/reset.css')."' rel='stylesheet' type='text/css' media='screen'>";
		echo "<link href='".base_url('resources/maxmertkit/css/maxmertkit.css')."' rel='stylesheet' type='text/css' media='screen'>";
		echo "<link href='".base_url('resources/maxmertkit/css/maxmertkit-components.css')."' rel='stylesheet' type='text/css' media='screen'>";
		echo "<link href='".base_url('resources/maxmertkit/css/maxmertkit-animation.css')."' rel='stylesheet' type='text/css' media='screen'>";
		//echo "<link href='".base_url('resources/maxmertkit/css/style.css')."' rel='stylesheet' type='text/css' media='screen'>";
		
		//echo "<script type='text/javascript' src='".base_url('resources/maxmertkit/js/libs/html5shiv.js')."'></script>";
		//echo "<script type='text/javascript' src='".base_url('resources/maxmertkit/js/libs/easing.js')."'></script>";
		//echo "<script type='text/javascript' src='".base_url('resources/maxmertkit/js/libs/imagesLoaded.js')."'></script>";
		echo "<script type='text/javascript' src='".base_url('resources/maxmertkit/js/libs/modernizr.js')."'></script>";
		
		
		echo "<script type='text/javascript' src='".base_url('resources/maxmertkit/js/plugins/maxmertkit.js')."'></script>";
		echo "<script type='text/javascript' src='".base_url('resources/maxmertkit/js/plugins/maxmertkit.modal.js')."'></script>";	
		
		//echo "<script type='text/javascript' src='".base_url('resources/maxmertkit/js/plugins/maxmertkit.affix.js')."'></script>";	
		//echo "<script type='text/javascript' src='".base_url('resources/maxmertkit/js/plugins/maxmertkit.scrollspy.js')."'></script>";	
		//echo "<script type='text/javascript' src='".base_url('resources/maxmertkit/js/plugins/maxmertkit.popup.js')."'></script>";	
		//echo "<script type='text/javascript' src='".base_url('resources/maxmertkit/js/plugins/maxmertkit.tabs.js')."'></script>";	
		//echo "<script type='text/javascript' src='".base_url('resources/maxmertkit/js/plugins/maxmertkit.carousel.js')."'></script>";	
		//echo "<script type='text/javascript' src='".base_url('resources/maxmertkit/js/plugins/maxmertkit.button.js')."'></script>";	
		//echo "<script type='text/javascript' src='".base_url('resources/maxmertkit/js/plugins/maxmertkit.notify.js')."'></script>";	
	}

}
?>