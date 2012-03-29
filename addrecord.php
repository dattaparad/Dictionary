<?PHP
/**
 * @author Datta Parad <datta.parad@gmail.com>
 * @link http://www.dattaparad.wordpress.com.com
 */

$con = mysql_connect('mysql17.000webhost.com','a6582625_dict','redhat123');
if(!$con){
	echo "database not conected";
}
mysql_select_db('a6582625_dict',$con);

$file_handle = fopen("dictionary.txt", "rb");

while (!feof($file_handle) ) {

$line_of_text = fgets($file_handle);

$parts = explode(':', $line_of_text);

$sql = "INSERT INTO dict_main ( word, meaning )
VALUES
('$parts[0] ','$parts[1] ')";

if(mysql_query($sql)){
	echo "data inserted";
}
else{
	echo "records are already inserted";
}


//print $parts[0] ." ". $parts[1]. "<BR>";
}

fclose($file_handle);

?>
