<?php

App::uses('PaginatorHelper', 'View/Helper');

/**
 * カスタムした Paginator
 * 最初のページ・最後のページの番号を表示しないときでも、省略（...)を表示させる。
 * そうするには、number() メソッドのオプションで first => 0, last => 0, hsCustom => true
 * を渡してやる。
 * オリジナルの Paginator からの変更点は オリジナルと差分をとって確認すること。
 */
class SalaryPaginatorHelper extends PaginatorHelper {

/**
 * オプションで hsCustom = true が渡されていれば、ellipsis を表示するように改造
 *
 * @param type $first
 * @param type $options
 * @return boolean|string
 */
	public function first($first = '<< first', $options = array()) {
		$options = array_merge(
				array(
			'tag' => 'span',
			'after' => null,
			'model' => $this->defaultModel(),
			'separator' => ' | ',
			'ellipsis' => '...',
			'class' => null,
			'hsCustom' => false,
				), (array) $options);

		$params = array_merge(array('page' => 1), (array) $this->params($options['model']));
		unset($options['model']);

		if ($params['pageCount'] <= 1) {
			return false;
		}
		extract($options);
		unset($options['tag'], $options['after'], $options['model'], $options['separator'], $options['ellipsis'], $options['class']);

		$out = '';

		$showEllipsis = $hsCustom ? true : is_int($first);

		if ($showEllipsis && $params['page'] >= $first) {
			if ($after === null) {
				$after = $ellipsis;
			}
			for ($i = 1; $i <= $first; $i++) {
				$out .= $this->Html->tag($tag, $this->link($i, array('page' => $i), $options), compact('class'));
				if ($i != $first) {
					$out .= $separator;
				}
			}
			$out .= $after;
		} elseif ($params['page'] > 1 && is_string($first)) {
			$options += array('rel' => 'first');
			$out = $this->Html->tag($tag, $this->link($first, array('page' => 1), $options), compact('class')) . $after;
		}
		return $out;
	}

	public function prev($title = '<< Prev', $options = array(), $disabledTitle = null, $disabledOptions = array()) {
		$defaults = array(
				'rel' => 'prev'
		);

		$options = array_merge(
				array(
						'tag' => 'span',
						'after' => null,
						'model' => $this->defaultModel(),
						'separator' => ' | ',
						'ellipsis' => '...',
						'class' => 'Button1 prev',
						'hsCustom' => false,
				), (array) $options);

		$options = array_merge($defaults, (array)$options);
		return $this->_pagingLink('Prev', $title, $options, $disabledTitle, $disabledOptions);
	}

	public function next($title = 'Next >>', $options = array(), $disabledTitle = null, $disabledOptions = array()) {
		$defaults = array(
				'rel' => 'next'
		);

		$options = array_merge(
				array(
						'tag' => 'span',
						'after' => null,
						'model' => $this->defaultModel(),
						'separator' => ' | ',
						'ellipsis' => '...',
						'class' => 'Button1 next',
						'hsCustom' => false,
				), (array) $options);

		$options = array_merge($defaults, (array)$options);
		return $this->_pagingLink('Next', $title, $options, $disabledTitle, $disabledOptions);
	}

	public function last($last = 'last >>', $options = array()) {
		$options = array_merge(
				array(
			'tag' => 'span',
			'before' => null,
			'model' => $this->defaultModel(),
			'separator' => ' | ',
			'ellipsis' => '...',
			'class' => null,
			'hsCustom' => false
				), (array) $options);

		$params = array_merge(array('page' => 1), (array) $this->params($options['model']));
		unset($options['model']);

		if ($params['pageCount'] <= 1) {
			return false;
		}

		extract($options);
		unset($options['tag'], $options['before'], $options['model'], $options['separator'], $options['ellipsis'], $options['class']);

		$out = '';
		$lower = $params['pageCount'] - $last + 1;

		$showEllipsis = $hsCustom ? true : is_int($last);

		if ($showEllipsis && $params['page'] <= $lower) {
			if ($before === null) {
				$before = $ellipsis;
			}
			for ($i = $lower; $i <= $params['pageCount']; $i++) {
				$out .= $this->Html->tag($tag, $this->link($i, array('page' => $i), $options), compact('class'));
				if ($i != $params['pageCount']) {
					$out .= $separator;
				}
			}
			$out = $before . $out;
		} elseif ($params['page'] < $params['pageCount'] && is_string($last)) {
			$options += array('rel' => 'last');
			$out = $before . $this->Html->tag(
							$tag, $this->link($last, array('page' => $params['pageCount']), $options), compact('class')
			);
		}
		return $out;
	}

	public function numbers($options = array()) {
		if ($options === true) {
			$options = array(
				'before' => ' | ', 'after' => ' | ', 'first' => 'first', 'last' => 'last'
			);
		}

		$defaults = array(
			'tag' => 'span', 'before' => null, 'after' => null, 'model' => $this->defaultModel(), 'class' => null,
			'modulus' => '8', 'separator' => ' | ', 'first' => null, 'last' => null, 'ellipsis' => '...',
			'currentClass' => 'current', 'currentTag' => null,
			'hsCustom' => false,
		);
		$options += $defaults;

		$params = (array) $this->params($options['model']) + array('page' => 1);
		unset($options['model']);

		if ($params['pageCount'] <= 1) {
			return false;
		}

		extract($options);
		unset($options['tag'], $options['before'], $options['after'], $options['model'], $options['modulus'], $options['separator'], $options['first'], $options['last'], $options['ellipsis'], $options['class'], $options['currentClass'], $options['currentTag']
		);

		$out = '';

		if ($modulus && $params['pageCount'] > $modulus) {
			$half = intval($modulus / 2);
			$end = $params['page'] + $half;

			if ($end > $params['pageCount']) {
				$end = $params['pageCount'];
			}
			$start = $params['page'] - ($modulus - ($end - $params['page']));
			if ($start <= 1) {
				$start = 1;
				$end = $params['page'] + ($modulus - $params['page']) + 1;
			}

			if (isset($first) && $start > 1) {
				$offset = ($start <= (int) $first) ? $start - 1 : $first;
				if ($offset < $start - 1) {
					$out .= $this->first($offset, compact('tag', 'separator', 'ellipsis', 'class', 'hsCustom'));
				} else {
					$out .= $this->first($offset, compact('tag', 'separator', 'class', 'ellipsis', 'hsCustom') + array('after' => $separator));
				}
			}

			$out .= $before;

			for ($i = $start; $i < $params['page']; $i++) {
				$out .= $this->Html->tag($tag, $this->link($i, array('page' => $i), $options), compact('class')) . $separator;
			}

			if ($class) {
				$currentClass .= ' ' . $class;
			}
			if ($currentTag) {
				$out .= $this->Html->tag($tag, $this->Html->tag($currentTag, $params['page']), array('class' => $currentClass));
			} else {
				$out .= $this->Html->tag($tag, $params['page'], array('class' => $currentClass));
			}
			if ($i != $params['pageCount']) {
				$out .= $separator;
			}

			$start = $params['page'] + 1;
			for ($i = $start; $i < $end; $i++) {
				$out .= $this->Html->tag($tag, $this->link($i, array('page' => $i), $options), compact('class')) . $separator;
			}

			if ($end != $params['page']) {
				$out .= $this->Html->tag($tag, $this->link($i, array('page' => $end), $options), compact('class'));
			}

			$out .= $after;

			if (isset($last) && $end < $params['pageCount']) {
				$offset = ($params['pageCount'] < $end + (int) $last) ? $params['pageCount'] - $end : $last;
				if ($offset <= $last && $params['pageCount'] - $end > $offset) {
					$out .= $this->last($offset, compact('tag', 'separator', 'ellipsis', 'class', 'hsCustom'));
				} else {
					$out .= $this->last($offset, compact('tag', 'separator', 'class', 'ellipsis', 'hsCustom') + array('before' => $separator));
				}
			}
		} else {
			$out .= $before;

			for ($i = 1; $i <= $params['pageCount']; $i++) {
				if ($i == $params['page']) {
					if ($class) {
						$currentClass .= ' ' . $class;
					}
					if ($currentTag) {
						$out .= $this->Html->tag($tag, $this->Html->tag($currentTag, $i), array('class' => $currentClass));
					} else {
						$out .= $this->Html->tag($tag, $i, array('class' => $currentClass));
					}
				} else {
					$out .= $this->Html->tag($tag, $this->link($i, array('page' => $i), $options), compact('class'));
				}
				if ($i != $params['pageCount']) {
					$out .= $separator;
				}
			}

			$out .= $after;
		}

		return $out;
	}

	protected function _pagingLink($which, $title = null, $options = array(), $disabledTitle = null, $disabledOptions = array()) {
		$check = 'has' . $which;
		$_defaults = array(
				'url' => array(), 'step' => 1, 'escape' => true, 'model' => null,
				'tag' => 'span', 'class' => strtolower($which), 'disabledTag' => null
		);
		$options = array_merge($_defaults, (array)$options);
		$paging = $this->params($options['model']);
		if (empty($disabledOptions)) {
			$disabledOptions = $options;
		}

		if (!$this->{$check}($options['model']) && (!empty($disabledTitle) || !empty($disabledOptions))) {
			if (!empty($disabledTitle) && $disabledTitle !== true) {
				$title = $disabledTitle;
			}
			$options = array_merge($_defaults, (array)$disabledOptions);
		} elseif (!$this->{$check}($options['model'])) {
			return null;
		}

		foreach (array_keys($_defaults) as $key) {
			${
				$key} = $options[$key];
				unset($options[$key]);
		}

		// 独自実装(次ページや前ページが存在しない場合でもボタンを表示したいため)
		$url = array_merge(
				array('page' => $paging['page'] + ($which === 'Prev' ? $step * -1 : $step)),
				$url
		);
		if ($tag === false) {
			return $this->link(
					$title,
					$url,
					compact('escape', 'model', 'class') + $options
			);
		}
		$link = $this->link($title, $url, compact('escape', 'model') + $options);
		return $this->Html->tag($tag, $link, compact('class'));

// 		if ($this->{$check}($model)) {
// 			$url = array_merge(
// 					array('page' => $paging['page'] + ($which === 'Prev' ? $step * -1 : $step)),
// 					$url
// 			);
// 			if ($tag === false) {
// 				return $this->link(
// 						$title,
// 						$url,
// 						compact('escape', 'model', 'class') + $options
// 				);
// 			}
// 			$link = $this->link($title, $url, compact('escape', 'model') + $options);
// 			return $this->Html->tag($tag, $link, compact('class'));
// 		} else {
// 			unset($options['rel']);
// 			if (!$tag) {
// 				if ($disabledTag) {
// 					$tag = $disabledTag;
// 					$disabledTag = null;
// 				} else {
// 					$tag = $_defaults['tag'];
// 				}
// 			}
// 			if ($disabledTag) {
// 				$title = $this->Html->tag($disabledTag, $title, compact('escape') + $options);
// 				return $this->Html->tag($tag, $title, compact('class'));
// 			}
// 			return $this->Html->tag($tag, $title, compact('escape', 'class') + $options);
// 		}
	}
}
