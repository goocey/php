<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ContentList extends CI_Controller {

	public function index()
	{
		$data = $this->load->helper('html');
		$data['contents'] = array(
				'worktime' => '作業時間管理',
				'urlencode' => 'URLエンコード'
		);
		$this->load->view('contentlist',$data);
	}

}
