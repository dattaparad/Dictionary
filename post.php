<?php
/**
 * @author Datta Parad <datta.parad@gmail.com>
 * @link http://www.dattaparad.wordpress.com.com
 */

sleep(3);
	if (empty($_POST['word'])) {
	$return['error'] = true;
	$return['msg'] = 'You did not enter you word.';
}
else {

	$con = mysql_connect('mysql17.000webhost.com','a6582625_dict','redhat123');
	mysql_select_db('a6582625_dict',$con);
	$result = mysql_query("SELECT *
FROM dict_main
WHERE word = '". $_POST['word'] ."'
LIMIT 0 , 30");

	$meaning = "";	
	while($row = mysql_fetch_array($result)){
		
		$meaning = $row['meaning'];
	}
	if($meaning ){
	$return['error'] = false;
	$return['msg'] = 'Meaning of word is : ' . $meaning . '.';
	}
	else{
		$return['error'] = false;
		$return['msg'] = 'Record not found in database';
	
	}
}

echo json_encode($return);

