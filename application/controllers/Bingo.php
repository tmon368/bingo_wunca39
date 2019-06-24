<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bingo extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function board()
	{
		$this->load->view('board');
	}

	public function result()
	{
		$this->load->view('result');
	}
	
	public function addResult()
	{
		$this->load->view('add_bingo_result');
	}
}
