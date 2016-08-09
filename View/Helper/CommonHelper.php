<?php

App::uses('AppHelper', 'View/Helper');


class CommonHelper extends AppHelper {


	function addressSubstitution($name, $datas){

		// $prefecture = $datas['prefectures'][$datas['data'][$name]['prefecture_id']];
		// return $prefecture . $datas['data'][$name]['city_name'] . $datas['data'][$name]['address'];
		App::import('Component', 'Common');
		$component = new CommonComponent(new ComponentCollection());
		return $component->addressSubstitution($name, $datas);
	}

	function nh($string) {

		return nl2br(h($string));
	}

	function pager_link_replace($slug, $string) {

		if (mb_substr($slug, -1) == '/') {

			return str_replace('/' . $slug, '/' . rawurlencode(trim($slug, '/')) . '/', $string, $c);
		}

		return str_replace('/' . $slug, '/' . rawurlencode($slug) . '/', $string, $c);
	}

	// 生年月日へ変換
	function _birthday_chenge($data) {

		App::import('Component', 'Common');
		$component = new CommonComponent(new ComponentCollection());
		return $component->_birthday_chenge($data);
	}

	function is_timeup($base_time, $timeup_data) {

		App::import('Component', 'Common');
		$component = new CommonComponent(new ComponentCollection());
		return $component->is_timeup($base_time, $timeup_data);
	}

	function treePut($path) {

		$cnt = 	count(explode('/', trim($path, '/'))) - 1;
		for ($i=0; $i<$cnt; $i++) {
			echo "-";
		}
	}

	function parentPathPut($category) {

		return strtr($category['Category']['path'], array($category['Category']['slug'] . '/' => ''));
	}

	// 予約可能日の判別
	function isOpenDay($clinic=array(), $date=NULL, $type=NULL) {

		App::import('Component', 'Common');
		$component = new CommonComponent(new ComponentCollection());
		return $component->isOpenDay($clinic, $date, $type);
	}

	// スマートフォンの振分け（コンポーネントから呼び出し）
	function checkSmartPhone() {

		App::import('Component', 'Common');
		$component = new CommonComponent(new ComponentCollection());
		return $component->checkSmartPhone();
	}

	// 日付[yyyy-mm-dd] から 曜日の取得 第2引数（$type:1でカッコあり）
	function weekday($date, $type = 0) {

		if(!empty($date)){

			$datetime = new DateTime($date);
			$week = array("日", "月", "火", "水", "木", "金", "土");
			$w = $week[(int)date_format($datetime, 'w')];

			if($type === 1){
				$w = "（" . $w . "）";
			}

		}
		return $w;
	}

	function findByPostId($id=NULL) {

		App::import('Model', 'Post');
		$Post = new Post;
		return $Post->findByPostId($id);
	}



}
