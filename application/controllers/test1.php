<?php
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
	
	public function smarty()
	{
		
		//$this->load->library('smarty');
		$this->smarty->assign("title","恭喜你smarty安装成功！");
		$this->smarty->assign("body","欢迎使用smarty模板引擎");
		$arr = array(1=>'test1',2=>'test2',3=>'test3');
		$this->smarty->assign("myarray",$arr);
		
		$this->load->library('custom');
		$this->custom->bootstrap();				
					
		$this->smarty->display('smarty.tpl');

	}
	public function __construct()
  	{
    	parent::__construct();
    	$this->load->model('dbtest_model');
  	}
		
	public function dbtest_all(){
		$data['txt'] = $this->dbtest_model->get_txt();
		$this->load->view('dbtest_all', $data);
	}

	public function dbtest_one($ad_id = '1'){
		$txt = $this->dbtest_model->get_txt($ad_id);
		
		//$this->load->library('smarty');
		$this->smarty->assign("txt",$txt);
		
		$this->smarty->display('dbtest_one.tpl');
	}
	
	public function dbtest_add()
	{
	  $this->load->helper('form');
	  $this->load->library('form_validation');
	  
	  $data['title'] = 'Create a news item';
	  
	  $this->form_validation->set_rules('text', 'text', 'required');
	  
	  if ($this->form_validation->run() === FALSE)
	  {
	    $this->load->view('templates/header', $data);  
	    $this->load->view('dbtest_add');
	    $this->load->view('templates/footer');
	    
	  }
	  else
	  {
	    $this->dbtest_model->add_txt();
	    $this->load->view('dbtest_addsuccess');
	  }		
	}
	
	public function formTest()
	{
		//$this->load->library('smarty');
		$this->smarty->assign("title","表单提交测试");
		
		//$this->load->helper('url');
		$link = base_url('test1-formAdd');
		$this->smarty->assign("link",$link);
		
		$link2 = base_url('resources/custom/js/form.js');
		$this->smarty->assign("link2",$link2);
		$link3 = base_url('resources/jquery/jquery-1.10.2.min.js');
		$this->smarty->assign("link3",$link3);
		
		$this->smarty->display('formTest.tpl');		
	}
	
	public function formAdd()
	{
		$txt = $this->input->post('text');	
		
		//$this->load->library('smarty');
		$this->smarty->assign("txt",$txt);
		
		$result = $this->dbtest_model->add_txt();
		if($result == 1)
		{
			$this->smarty->assign("content","添加成功");
		}
		else
		{
			$this->smarty->assign("content","添加失败");
		}
		$this->smarty->display('formAdd.tpl');
	}
	
	public function ajax()
	{

		$this->load->library('custom');
		$data['link'] = base_url('resources/custom/js/ajax.js');
		$data['link2'] = base_url('index.php/test1/ajax2');	
			
		$this->load->view('ajax', $data);
	}

	public function ajax2()
	{
		$test4 = $this->input->post('test');
		$arrayAjax = array(
			'test1','test2','test3',$test4
		);
		echo json_encode($arrayAjax);
	}
	
	public function customClass()
	{				
		$this->smarty->display('classTest.tpl');
		
		/**js+css的框架放在最后加载**/
		$this->load->library('custom');
		$this->custom->bootstrap();
	}
	
	public function maxmertkit()
	{
		/**js+css的框架放在HEAD中加载**/
		$this->load->library('custom');
		$this->custom->maxmertkit();
		
		$this->smarty->display('maxmert.tpl');
		
	}
	
	public function pageTest()
	{
		$this->load->library('custom');
		$this->custom->maxmertkit();
		
		$this->smarty->assign("title","页面组合测试");	
		$this->smarty->assign("time",date("Y-m-d H:i:s"));
		
		$this->smarty->display('pageHeader.tpl');	
		$this->smarty->display('pageBody.tpl');	
		$this->smarty->display('pageFooter.tpl');	
	}

	public function sessionLogin()
	{
		$this->load->library('session');

		$newdata = array(
							'username'  => 'rokeyzki',
                   			'email'     => 'rokeyzki@gmail.com',
                   			'logged_in' => TRUE
        				);

		$this->session->set_userdata($newdata);
		$this->session->set_userdata('user_id', '1');

		$content = $this->session->all_userdata();

		$this->smarty->assign("content",$content);

		$this->smarty->display('session.tpl');
		
	}

	public function sessionLogout()
	{
		$this->load->library('session');

		$isLogin = $this->session->userdata('logged_in');

		$content = array();

		if($isLogin)
		{
			$content['username'] = '已登录';
		}
		else
		{
			$content['username'] = '未登录';
		}

		$this->smarty->assign("content",$content);

		$this->smarty->display('session.tpl');

		$this->session->unset_userdata('user_id');	
		$this->session->sess_destroy();	
	}	
}
