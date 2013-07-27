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
	public function getPaginateOptionsForEmpSearch($page, $familyNameKana, $firstNameKana, $jobDutyCdFrom, $jobDutyCdTo, $familyName, $firstName, $jobGradeCdFrom, $jobGradeCdTo, $empDivFrom, $empDivTo, $depCdFrom, $depCdTo, $retired, $mgrCdFrom, $mgrCdTo) {

		$fields = array(
				'JtKihonKihon.EmpNo',
				'JtKihonKihon.FamilyName',
				'JtKihonKihon.FirstName',
				'JtKihonKihon.FamilyNameKana',
				'JtKihonKihon.FirstNameKana',
				'JtKihonKihon.EmpDiv',
				'JtKihonKihon.RetiredDate',
				'JtKihonKihon.BirthDate',
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
		$searchCondition['JtKihonKihon.FirstName LIKE ?']      =  '%' . $firstName . '%';
		// 職員区分（FROM）
		if (isset($empDivFrom) && $empDivFrom !== "") {
			$searchCondition['JtKihonKihon.EmpDiv >= '] = $empDivFrom;
		}
		// 職員区分（TO）
		if (isset($empDivTo) && $empDivTo !== "") {
			$searchCondition['JtKihonKihon.EmpDiv <= '] = $empDivTo;
		}
		// 退職者
		if ($retired === '1') {
			// 退職者を除く
			$searchCondition += array('JtKihonKihon.RetiredDate IS NULL');
		} else if ($retired === '2') {
			// 退職者のみ
			$searchCondition += array('JtKihonKihon.RetiredDate IS NOT NULL');
		}
		// 職種職務（FROM）
		if (isset($jobDutyCdFrom) && $jobDutyCdFrom !== "") {
			$searchCondition['JtKihonRekiSyokumu.JobDutyCD >= '] = $jobDutyCdFrom;
		}
		// 職種職務（TO）
		if (isset($jobDutyCdTo) && $jobDutyCdTo !== "") {
			$searchCondition['JtKihonRekiSyokumu.JobDutyCD <= '] = $jobDutyCdTo;
		}
		// 職層（FROM）
		if (isset($jobGradeCdFrom) && $jobGradeCdFrom !== "") {
			$searchCondition['JtKihonRekiSyokuso.JobGradeCD >= '] = $jobGradeCdFrom;
		}
		// 職層（TO）
		if (isset($jobGradeCdTo) && $jobGradeCdTo !== "") {
			$searchCondition['JtKihonRekiSyokuso.JobGradeCD <= '] = $jobGradeCdTo;
		}
		// 所属（FROM）
		if (isset($depCdFrom) && $depCdFrom !== "") {
			$searchCondition['JtKihonRekiSyozoku.DepCD >= '] = $depCdFrom;
		}
		// 所属（TO）
		if (isset($depCdTo) && $depCdTo !== "") {
			$searchCondition['JtKihonRekiSyozoku.DepCD <= '] = $depCdTo;
		}
		// 役職（FROM）
		if (isset($mgrCdFrom) && $mgrCdFrom !== "") {
			$searchCondition['JtKihonRekiSyozoku.MgrCD >= '] = $mgrCdFrom;
		}
		// 役職（TO）
		if (isset($mgrCdTo) && $mgrCdTo !== "") {
			$searchCondition['JtKihonRekiSyozoku.MgrCD <= '] = $mgrCdTo;
		}

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
