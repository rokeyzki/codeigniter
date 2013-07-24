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

			$this->load->library('smarty');
			$this->smarty->assign("title","恭喜你smarty安装成功！");
			$this->smarty->assign("body","欢迎使用smarty模板引擎");
			$arr = array(1=>'test1',2=>'test2',3=>'test3');
			$this->smarty->assign("myarray",$arr);
			$this->smarty->display('smarty.tpl');

	}
	
}
