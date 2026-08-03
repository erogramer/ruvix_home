<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Menu model class
 *
 * Copyright (c) CIBoard <www.ciboard.co.kr>
 *
 * @author CIBoard (develop@ciboard.co.kr)
 */

class Menu_model extends CB_Model
{

	/**
	 * 테이블명
	 */
	public $_table = 'menu';

	/**
	 * 사용되는 테이블의 프라이머리키
	 */
	public $primary_key = 'men_id'; // 사용되는 테이블의 프라이머리키

	function __construct()
	{
		parent::__construct();
	}


	public function get_all_menu($device_view_type = '')
	{
		$cachename = $device_view_type === 'mobile'
			? 'pagemenu-mobile' : 'pagemenu-desktop';

		if ( ! $result = $this->cache->get($cachename)) {

			$where = $device_view_type === 'mobile'
				? array('men_mobile' => 1) : array('men_desktop' => 1);

			$return = $this->get('', '', $where, '', 0, 'men_order', 'asc');

			if ($return) {
				foreach ($return as $key => $value) {
					$result[$value['men_parent']][$value['men_id']] = $value;
				}
				$this->cache->save($cachename, $result);
			}
		}
		return $result;
	}


	/**
	 * 주어진 링크(예: 문서 페이지 주소)와 men_link 가 일치하는 메뉴를 찾아
	 * 최상위메뉴 -> ... -> 일치하는 메뉴 순서의 배열로 반환합니다
	 * 일치하는 메뉴가 없으면 빈 배열을 반환합니다
	 */
	public function get_menu_breadcrumb_by_link($link, $device_view_type = '')
	{
		$menu = $this->get_all_menu($device_view_type);
		if (empty($menu)) {
			return array();
		}

		$byid = array();
		foreach ($menu as $children) {
			foreach ($children as $men_id => $row) {
				$byid[$men_id] = $row;
			}
		}

		$target = $this->_normalize_menu_link($link);

		$matched = null;
		foreach ($byid as $row) {
			if ( ! empty($row['men_link']) && $this->_normalize_menu_link($row['men_link']) === $target) {
				$matched = $row;
				break;
			}
		}

		if (empty($matched)) {
			return array();
		}

		$breadcrumb = array();
		$current = $matched;
		while ($current) {
			array_unshift($breadcrumb, $current);
			$parent_id = $current['men_parent'];
			$current = ($parent_id && isset($byid[$parent_id])) ? $byid[$parent_id] : null;
		}

		return $breadcrumb;
	}


	/**
	 * 메뉴 링크 비교를 위해 프로토콜/도메인을 제거하고 경로(path)만 남겨 정규화합니다
	 * (men_link 에 절대경로/상대경로가 섞여 있어도 동일하게 비교할 수 있도록 합니다)
	 */
	protected function _normalize_menu_link($url)
	{
		$url = trim($url);
		$path = parse_url($url, PHP_URL_PATH);
		if ($path === null || $path === false) {
			$path = $url;
		}
		return rtrim($path, '/');
	}


	/**
	 * 주어진 men_id 의 하위메뉴(자식)들과, 각 하위메뉴 자신의 하위메뉴(손자)를
	 * 'children' 키에 담아 함께 반환합니다 (문서 본문 아래 하위메뉴 카드 표시용)
	 */
	public function get_menu_children_tree($men_id, $device_view_type = '')
	{
		$menu = $this->get_all_menu($device_view_type);
		if (empty($men_id) || empty($menu[$men_id])) {
			return array();
		}

		$children = array();
		foreach ($menu[$men_id] as $child) {
			$child['children'] = ! empty($menu[$child['men_id']]) ? array_values($menu[$child['men_id']]) : array();
			$children[] = $child;
		}

		return $children;
	}
}
