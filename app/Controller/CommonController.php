<?php

App::uses('AppController', 'Controller');

/**
 * コントローラ基底クラス
 */
class CommonController extends AppController {

	public $layout = '';

	/** CakePHP本体で使用されるモデル。各機能ごとのControllerでは、こちらに定義。 */
	public $uses = array();

	/** 全機能共通で読み込むモデル */
	public $userModels = array();

	/** CakePHP本体で使用されるコンポーネント。各機能ごとのControllerでは、こちらに定義。 */
	public $components = array();

	/** 全機能共通で読み込むコンポーネント */
	public $userComponents = array(
		//'Auth',
		'Session',
		'Cookie',
 		'DebugKit.Toolbar',
	);

	/** CakePHP本体で使用されるヘルパー。各機能ごとのControllerでは、こちらに定義。 */
	public $helpers = array(
        'DebugKit.Toolbar'
    );

	/** 全機能共通で読み込むヘルパー */
	public $userHelpers = array(
		'Form',
		'SalaryForm',
		'Html',
		'Session',
	);

	public function __construct($request = null, $response = null) {
		// 共通のコンポーネントで含まれていないものを追加
		foreach ($this->userModels as $model) {
			if (!array_key_exists($model, $this->uses)) {
				$this->uses[] = $model;
			}
		}

		// 共通のコンポーネントで含まれていないものを追加
		foreach ($this->userComponents as $component) {
			if (!array_key_exists($component, $this->components)) {
				$this->components[] = $component;
			}
		}

		// 共通のヘルパーで含まれていないものを追加
		foreach ($this->userHelpers as $helper) {
			if (!in_array($helper, $this->helpers)) {
				$this->helpers[] = $helper;
			}
		}
		parent::__construct($request, $response);
	}

	public function beforeFilter() {
		parent::beforeFilter();
	}

	public function beforeRender() {
		parent::beforeRender();
	}

}
