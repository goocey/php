<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Worktime extends CI_Controller {

	// テキストエリアの設定
	public function __construct(){
		parent::__construct();

		$this->textarea = array(
				'name' => 'worktime',
				'id'   => 'worktime',
				'rows' => '10',
				'cols' => '40'
		);
		$this->month_dropdown = $this->getMonthData();
	}
	public function index()
	{
		$data['form']= $this->load->helper('form');
		$data['textarea'] = $this->textarea;
		$this->load->view('worktime', $data);
	}

	// フォームからのデータを受け取る
	public function form()
	{
		$this->calcwork($this->input->post());
	}

	// 給与計算を行うためのメソッド
	private function calcwork($workdata) {
		if(isset($workdata['worktime'])) {
			foreach(explode("\n", $workdata['worktime']) as $value) {
				$match_flag = false;
				$line = array();
				if (preg_match("/(\d{4}年(\d.)月(\d.)日", $value, $matches) == 1) {
					$line = explode(" ", $value);
					$match_flag = true;
					$year  = $matches[1];
					$month = $matches[2];
					$day   = $matches[3];
				}
				if ($match_flag) {

				}

			}
			return true;
		}
		return false;
	}

	// 月の名称と月の値を返却する
	private function getMonthData() {
		$today = new DateTime(date('Y-m-d'));
		for ($i = -6; $i <= 12; $i++){
			$today->getTimestamp();
			$today->modify("{$i} month");
			var_dump($today->format('Y-m-d'));
		}
	}
}

