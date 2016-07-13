<?php
Function dateTofr($dtsql){
 $dtfr=substr($dtsql,8,2)."/".substr($dtsql,5,2)."/".substr($dtsql,0,4)." à ".substr($dtsql,11,2)."h".substr($dtsql,14,2);
    return $dtfr;
}
Function isValidPhone($str) {
	$str = htmlspecialchars($str);
    if (preg_match("#^0[1-79]([-. ]?[0-9]{2}){4}$#", $str) && !in_array($str, $GLOBALS["TAB_FAUX_NUM"])) { return true; } 
    else { return false; }
}
Function isMobilePhone($str) {
	$str = htmlspecialchars($str);
	if (preg_match("#^0[6-7]([-. ]?[0-9]{2}){4}$#", $str)) 
	{ return true; } else { return false; }
}
Function isValidEmail($str) {
	$str = htmlspecialchars($str);
	if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $str)) {return true;} else { return false; }  
}
?>