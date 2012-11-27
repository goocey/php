<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Urlencode extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->textarea = array(
				'name' => 'data',
				'id'   => 'textarea_urldecode',
				'rows' => '10',
				'cols' => '40'
		);
		$this->charset = array(
				'SJIS' => 'SJIS',
				'UTF-8' => 'UTF-8',
				'JIS' => 'JIS',
				'EUC-JP' => 'EUC-JP'
		);
	}
	//
	public function index()
	{
		$data['form']= $this->load->helper('form');
		$data['textarea'] = $this->textarea;
		$this->load->view('urlencode', $data);
	}
	//
	public function form()
	{
		//
		$input_data = $this->input->post();
		$data['form']= $this->load->helper('form');
		$data['textarea'] = $this->textarea;
		$data['textarea']['value'] = $input_data['data'];
		if($input_data['button'] == 'encode') {
			// URL
			$data['multiline'] = $this->retUrlencode($input_data['data']);
			$this->load->view('urlencode', $data);
		} else if ($input_data['button'] == 'decode') {
			$data['multiline'] = $this->retUrldecode($input_data['data']);
			$this->load->view('urlencode', $data);
		}
	}

	// urlencode
	private function retUrlencode($data) {
		foreach ($this->charset as $charline) {
			$multi_encode_array[$charline] = mb_convert_encoding($data, $charline, 'UTF-8');
			$multi_encode_array[$charline] = urlencode($multi_encode_array[$charline]);
		}


		return $multi_encode_array;
	}

	private function retUrldecode($data) {
		foreach ($this->charset as $charline) {
			$data = urldecode($data);
			$multi_encode_array[$charline] = mb_convert_encoding($data, 'UTF-8', $charline);
		}
		return $multi_encode_array;
	}
}

