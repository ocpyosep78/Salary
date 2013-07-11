<?php
App::uses('AppModel', 'Model');

/**
 * Paginator Model
 */
class Paginator extends AppModel {

	var $name = 'Paginator';

	var $useTable = false;

	public function paginate($conditions, $fields, $order, $limit, $page = 1, $recursive = null, $extra = array()) {

		$offset = $page * $limit - $limit;

		$sql = $conditions;
// 		$sql .= " order by " . $order;
		$sql .= " limit " . $limit;
		$sql .= " offset " . $offset;

		return $this->query($sql);
	}

	function paginateCount($conditions = null, $recursive = 0, $extra = array()) {

		$this->recursive = $recursive;
		$results = $this->query($conditions);

		return count($results);
	}
}