<?php
/**
 *
 * システム全体で使用するラベルを定義する。
 * 特定のコントローラやVIEWで限定的にしか使用しないものは記述しないでください。
 * また以下に定義を追記する場合はご相談ください。
 */
$const_labels = array(
	'FLEXIBLE_ACTION_TYPE'=>array(
		'labels'=>array(
			'close'   => array('symbol'=>'FLEXIBLE_ACTION_TYPE_CLOSE', 'name'=>'閉じる'),
			'edit'    => array('symbol'=>'FLEXIBLE_ACTION_TYPE_EDIT',  'name'=>'修正'),
			'add'     => array('symbol'=>'FLEXIBLE_ACTION_TYPE_ADD',   'name'=>'追加'),
			'delete'  => array('symbol'=>'FLEXIBLE_ACTION_TYPE_DELETE','name'=>'削除'),
		)
	),
);

$config['const_labels'] = $const_labels;
foreach($const_labels as $key=>$label) {
	$confval = array();
	foreach($label['labels'] as $val => $data) {
		if(isset($data['symbol']) && !empty($data['symbol'])) {
       		if(!defined($data['symbol'])) {
       			if(defined($val)) {
       				$val = constant($val);
       			}
       			define($data['symbol'],$val);
       		}
		}
		if(defined($val)) {
			// すでにdefineされてるものであればその値を使用します。
			$confval[ constant($val) ] = $data['name'];
		} else {
			$confval[$val] = $data['name'];
		}
	}
	Configure::write($key,$confval);
}

?>