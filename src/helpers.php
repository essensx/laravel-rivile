<?php

function object2array($arrObjData, $arrSkipIndices = array()) {
	$arrData = array();

	if (is_object($arrObjData)) {
		$arrObjData = get_object_vars($arrObjData);
	}

	if (is_array($arrObjData)) {
		foreach ($arrObjData as $index => $value) {
			if (is_object($value) || is_array($value)) {
				$value = object2array($value, $arrSkipIndices);
			}
			if (in_array($index, $arrSkipIndices)) continue;

			$arrData[$index] = (empty($value)) ? NULL : $value;
		}
	}
	return $arrData;
}
