<?php

/**
 * Debug vars
 * @param unknown $var
 * @param number $depth
 * @param string $highlight
 * @param string $label
 * @param string $echo
 * @return string
 */
function debug($var, $depth=10, $highlight=false, $label=null, $echo=true) {
	ob_start();
	CVarDumper::dump($var, $depth, $highlight);
	$out = ob_get_clean();
	$out = '<pre>'
			. (($label===null) ? '' : rtrim($label) . ' ')
			. $out
			. '</pre>';
	if($echo) echo $out;
	return $out;
}

/**
 * Debug and die
 * @param unknown $var
 * @param number $depth
 * @param string $highlight
 * @param string $label
 */
function debugDie($var, $depth=10, $highlight=false, $label=null) {
	ob_start();
	CVarDumper::dump($var, $depth, $highlight);
	$out = ob_get_clean();
	$out = '<pre>'
			. (($label===null) ? '' : rtrim($label) . ' ')
			. $out
			. '</pre>';
	print $out;
	die();
}
