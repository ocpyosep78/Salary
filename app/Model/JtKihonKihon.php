<?php
App::uses('AppModel', 'Model');
/**
 * JtKihonKihon Model
 *
 */
class JtKihonKihon extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'jt_kihon_kihon';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'EmpBasicInformationID';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'EmpNo' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'EmpDiv' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'registered_date' => array(
			'datetime' => array(
				'rule' => array('datetime'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'registered_by' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'latest_flg' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	/**
	 * 職員番号検索のPaginateオプションを取得する
	 */
	public function getPaginateOptionsForEmpSearch($page, $familyNameKana, $firstNameKana, $jobDutyCdFrom, $jobDutyCdTo, $familyName, $firstName, $jobGradeCdFrom, $jobGradeCdTo, $empDivFrom, $empDivTo, $depCdFrom, $depCdTo, $mgrCdFrom, $mgrCdTo) {

		$fields = array(
				'JtKihonKihon.EmpNo',
				'JtKihonKihon.FamilyName',
				'JtKihonKihon.FirstName',
				'JtKihonKihon.FamilyNameKana',
				'JtKihonKihon.FirstNameKana',
				'JtKihonKihon.EmpDiv',
				'JtKihonRekiSyozoku.DepCD',
				'JtKihonRekiSyozoku.MgrCD',
				'JtKihonRekiSyokumu.JobDutyCD'
		);

		$searchCondition = array();
		// カナ（姓）
		$searchCondition['JtKihonKihon.FamilyNameKana LIKE ?'] =  '%' . $familyNameKana . '%';
		// カナ（名）
		$searchCondition['JtKihonKihon.FirstNameKana LIKE ?']  =  '%' . $firstNameKana . '%';
		// 漢字（姓）
		$searchCondition['JtKihonKihon.FamilyName LIKE ?']     =  '%' . $familyName . '%';
		// 漢字（名）
		$searchCondition['JtKihonKihon.FirstName LIKE ?']     =  '%' . $firstName . '%';

		$joins = array(
				array('type' => 'LEFT',
						'table' => 'jt_kihon_reki_syozoku',
						'alias' => 'JtKihonRekiSyozoku',
						'conditions' => 'JtKihonKihon.EmpDeptHistID = JtKihonRekiSyozoku.EmpDeptHistID'
				),
				array('type' => 'LEFT',
						'table' => 'jt_kihon_reki_syokumu',
						'alias' => 'JtKihonRekiSyokumu',
						'conditions' => 'JtKihonKihon.EmpJobDutyHistID = JtKihonRekiSyokumu.EmpJobDutyHistID'
				),
				array('type' => 'LEFT',
						'table' => 'jt_kihon_reki_syokuso',
						'alias' => 'JtKihonRekiSyokuso',
						'conditions' => 'JtKihonKihon.EmpJobGradeHistID = JtKihonRekiSyokuso.EmpJobGradeHistID'
				),
		);

		$options = array(
			'JtKihonKihon' => array(
				'fields'     => $fields,
				'conditions' => $searchCondition,
				'joins'      => $joins,
				'limit'      => PAGINATION_VIEW_LIMIT_COMMON_SEARCH, // 一度に表示する件数
				'order'      => array('JtKihonKihon.EmpNo' => 'asc'),
				'page'       => $page, // 最初に表示するページ
			)
		);

		return $options;
	}
}
