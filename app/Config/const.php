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
	// 検索結果で一度に表示する件数
	'PAGINATION_VIEW_LIMIT' => array(
		'labels' => array(
			'20'   => array('symbol' => 'PAGINATION_VIEW_LIMIT_COMMON_SEARCH', 'name' => '表示件数（検索子画面）'),
		)
	),
	// 検索結果表示項目：委託先会社マスタ
	'VIEW_COLUMN_SMITAKUSAKIKAISHA' => array(
		'labels' => array(
			'ConsignmentCompanyCD'   => array('symbol' => '', 'name' => '委託先会社コード'),
			'ConsignmentCompanyName' => array('symbol' => '', 'name' => '委託先会社名'),
		)
	),
	// 検索項目：委託先会社マスタ
	'SELECT_COLUMN_SMITAKUSAKIKAISHA' => array(
		'labels' => array(
			'ConsignmentCompanyCD'   => array('symbol' => '', 'name' => '委託先会社コード'),
			'ConsignmentCompanyName' => array('symbol' => '', 'name' => '委託先会社名'),
		)
	),
	// 検索結果表示項目：市町村マスタ
	'VIEW_COLUMN_LGOVMASTER' => array(
		'labels' => array(
			'LGovCode' => array('symbol' => '', 'name' => '市町村コード'),
			'LGovName' => array('symbol' => '', 'name' => '市町村名'),
		)
	),
	// 検索項目：市町村マスタ
	'SELECT_COLUMN_LGOVMASTER' => array(
		'labels' => array(
				'LGovCode' => array('symbol' => '', 'name' => '市町村コード'),
				'LGovName' => array('symbol' => '', 'name' => '市町村名'),
		)
	),
	// 検索結果表示項目：支給区分マスタ
	'VIEW_COLUMN_QMSHIKYUKUBUN' => array(
		'labels' => array(
			'PaymentDivCD' => array('symbol' => '', 'name' => '支給区分コード'),
			'PaymentDivName' => array('symbol' => '', 'name' => '支給区分名'),
		)
	),
	// 検索項目：支給区分マスタ
	'SELECT_COLUMN_QMSHIKYUKUBUN' => array(
		'labels' => array(
			'PaymentDivCD' => array('symbol' => '', 'name' => '支給区分コード'),
			'PaymentDivName' => array('symbol' => '', 'name' => '支給区分名'),
		)
	),
	// 検索結果表示項目：給与支払者マスタ
	'VIEW_COLUMN_QMKYUYOSHIHARAISHA' => array(
		'labels' => array(
			'PayerDiv' => array('symbol' => '', 'name' => '支払者区分コード'),
			'PayerName' => array('symbol' => '', 'name' => '支払者区分名'),
		)
	),
	// 検索項目：給与支払者マスタ
	'SELECT_COLUMN_QMKYUYOSHIHARAISHA' => array(
		'labels' => array(
			'PayerDiv' => array('symbol' => '', 'name' => '支払者区分コード'),
			'PayerName' => array('symbol' => '', 'name' => '支払者区分名'),
		)
	),
	// 検索結果表示項目：人事基本情報
	'VIEW_COLUMN_JTKIHONKIHON' => array(
		'labels' => array(
			'EmpNo'           => array('symbol' => '', 'name' => '職員番号'),
			'Name'            => array('symbol' => '', 'name' => '漢字氏名'),
			'NameKana'        => array('symbol' => '', 'name' => 'カナ氏名'),
			'empDiv'          => array('symbol' => '', 'name' => '職員区分'),
			'retired'         => array('symbol' => '', 'name' => '退職'),
			'DepCD'           => array('symbol' => '', 'name' => '所属CD'),
			'DepShortCD'      => array('symbol' => '', 'name' => '所属名（短縮）'),
			'MgrCD'           => array('symbol' => '', 'name' => '役職CD'),
			'MgrName'         => array('symbol' => '', 'name' => '役職名'),
			'JobDutyCD'       => array('symbol' => '', 'name' => '職務CD'),
			'JobCategoryName' => array('symbol' => '', 'name' => '職務名'),
		)
	),
	// 検索項目：人事基本情報
	'SELECT_COLUMN_JTKIHONKIHON' => array(
		'labels' => array(
			'EmpNo' => array('symbol' => '', 'name' => '職員番号'),
			'FamilyName' => array('symbol' => '', 'name' => '氏名_氏'),
			'FirstName' => array('symbol' => '', 'name' => '氏名_名'),
		)
	),
	// キャッシュのキー
	'CACHE_KEY' => array(
		'labels' => array(
			'CodeName' => array('symbol' => 'CACHE_KEY_CODENAME', 'name' => 'コード名称'),
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

/** キャッシュデータのキーマップ */
Configure::write('CACHE_KEY_MAP',array(
	// 役職
	'MgrCD' => array('MgrName', 'MgrShortName'),
	// 手当詳細
	'AllowDetailCD' => array('AllowDetailName', 'AllowDetailSName'),
	// 職員区分
	'EmpDiv' => array('EmpDivName', 'EmpDivShortName'),
	// 給与体系
	'SalaryTypeCD' => array('SalaryTypeName', 'SalaryTypeShortName'),
	// 職層マスタ
	'JobGradeCD' => array('JobGradeName', 'JobGradeShortName'),
	// 職種職務マスタ
	'JobDutyCD' => array('JobTypeName', 'JobTypeShortName'),
	// 給料表名称マスタ
	'SalaryTable' => array('SalaryTableName', 'SalaryTableSName'),
	// 勤怠事由マスタ
	'AttendanceOrderedReasonCD' => array('NAME'),
	// 銀行マスタ
	'A_Account_BankCD' => array('BankNameKana'),
	//'B_Account_BankCD' => array('BankNameKana'),
	'A_Account_BranchCD' => array('BankBrancheName'),
	//'B_Account_BranchCD' => array('BankBrancheName'),
	// 科目テーブル
	'AccountCD' => array('AccountName', 'AccountShortName'),
	// 支給種別CDマスタ
	'EtcTypeCD' => array('EtcTypeName', 'EtcTypeSName'),
	// 給料表級名称マスタ
	'SalaryClass' => array('SalaryClassName', 'SalaryClassNameShort'),
	// 現給保障区分マスタ
	'SalaryGuaranteeFlg' => array('SalaryGuaranteeDivName', 'SalaryGuaranteeDivShortName'),
	// 手当コードマスタ
	'TravelExpTypeCD' => array('AllowanceName', 'AllowanceShortName'),
	// 福利控除金種別マスタ
	'DeductionCD' => array('BenefitDeductMoneyTypeName'),
));
?>