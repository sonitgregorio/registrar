<?php

	/**
	* 
	*/
	class Main extends CI_Controller
	{
		
		public function index(){
			$this->load->view('templates/header');
			if ($this->session->userdata('uid'))
			{
				$this->load->view('templates/navigation');
				$this->load->view('templates/home');
			}
			else
			{
				$this->load->view('index');
			}
			$this->load->view('templates/footer');
		}
		public function verify_user()
		{
			$this->load->model('mainmd');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$result = $this->mainmd->check_user($username, $password);
			if ($result) 
			{
				$this->session->set_userdata('uid', $result['id']);
			}
			else
			{
				$this->mainmd->messageForm('danger', 'Invalid Username/Password', 'message');
			}
			redirect('/');
		}
	}