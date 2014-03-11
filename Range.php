<?php
function check_range($str) {
	echo $str;
	
	$firstNumeric = substr($str, 1, 1);
	$secondNumeric = substr( $str,3,1);
	
	//is char 2 > char 4 exit
	if($firstNumeric > $secondNumeric){
		echo "Exception : Invalid Range Exception";
		return;
	}
	
	//is string then exit
	if(is_int((int) $$firstNumeric) === FALSE AND is_int((int) $secondNumeric) === FALSE){
		echo "Exception : Invalid Range Exception";
		return;
	}	

	


	//split string
		//case first char
			//if "[" keep first numeic
			//if "(" not keep first numeric
		//case last char
			//if "[" keep first numeic
			//if "(" not keep first numeric
	$start = substr( $str,0,1);
	$end = substr( $str, -1 ,1);

	
}

check_range($arg = "[0,5]");
?>