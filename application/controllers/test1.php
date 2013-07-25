<?php
header("Content-type:text/html;charset=utf-8");
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class test1 extends CI_Controller {

	
	public function view($page = 'home')
	{
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			// 页面不存在
			show_404();
		}
		
		$data['title'] = ucfirst($page); // 将title中的第一个字符大写
		
		$this->load->view('templates/header', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer', $data);
	}
	
	public function about($page = 'about')
	{
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			// 页面不存在
			show_404();
		}
	
		$data['title'] = ucfirst($page); // 将title中的第一个字符大写
		$data['testTxt'] = '这又是什么？test';
	
		$this->load->view('templates/header', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer', $data);
	}
	
	public function smarty(){
		
			$this->load->helper('html');
			$this->load->library('smarty');
			$this->smarty->assign("title","恭喜你smarty安装成功！");
			$this->smarty->assign("body","欢迎使用smarty模板引擎");
			$arr = array(1=>'test1',2=>'test2',3=>'test3');
			$this->smarty->assign("myarray",$arr);
			
			$link1 = array(
				'href' => 'resources/bootstrap/css/bootstrap.min.css',
				'rel' => 'stylesheet',
				'type' => 'text/css',
				'media' => 'screen'
			);			
			$link1 = link_tag($link1);
			$this->smarty->assign("link1",$link1);
			
			$this->load->helper('url');
			$link2 = base_url('resources/jquery/jquery-1.10.2.min.js');
			$this->smarty->assign("link2",$link2);			
			
			$link3 = base_url('resources/bootstrap/js/bootstrap.min.js');
			$this->smarty->assign("link3",$link3);			
						
			$this->smarty->display('smarty.tpl');

	}
	
}
