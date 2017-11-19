<?php
if($_POST['data']) {
$fp = fopen("../temp/file.txt", "w"); 
fwrite($fp, '!!!-888'); 
fclose($fp);
die('!!!-888');
/*
	$table=$_POST['table'];
	$aldata=explode("\n",$_POST['data']);
	$rescnt = count($aldata);
	$i=0;
	$j=0;
	if($rescnt > 0){
		include("connect.php");
		switch($table) {
			case "ob" :
				$result = mysql_query("DELETE FROM `tmc` WHERE 1=1") ;
				foreach($aldata as $dat) { 
					$afld=explode(";",$dat); 
					$result = mysql_query("INSERT INTO tmc (ID,Kod,Descr,EdIzm,ktar,ksize) VALUES (".$afld[0].",".$afld[1].",".$afld[2].",".$afld[3].",".$afld[4].",".$afld[5].")");
					if($result) {$i++;} 
				}
				break;			
			case "kagent" :
				$result = mysql_query("DELETE FROM `kagent` WHERE 1=1");
				foreach($aldata as $dat) { 
					$afld=explode(";",$dat); 
					$result = mysql_query("INSERT INTO kagent (ID,Kod,Descr,Adres,Tel,Dolg,DDolg,agentid,q1,q2,q3) VALUES (".$afld[0].",".$afld[1].",".$afld[2].",".$afld[3].",".$afld[4].",".$afld[5].",".$afld[6].",".$afld[7].",".$afld[8].",".$afld[9].",".$afld[10].")");
					if($result) {$i++;} else {echo $afld[1].$afld[2] ;}
				}
				break;
		}
	}	
*/	
	$ret="<ERR>0</ERR><RECC>".$i."</RECC><RECV>".$rescnt."</RECV>";

//	$handle = fopen("file.txt", "w");
//	$fwrite = fwrite($handle,$data);
//	fclose($handle);
}
else
{
/*
	$data = file_get_contents("file.txt");
	$aldata=explode("\n",$data);
$result = count($aldata);
if($result > 0){
include("connect.php");
foreach($aldata as $dat) { 
	$afld=explode(";",$dat); 
	$result = mysql_query("INSERT INTO tmc (ID,Kod,Descr,EdIzm) VALUES (".$afld[0].",".$afld[1].",".$afld[2].",".$afld[3].")");
	}
}
*/
/*
	$data = file_get_contents("file.txt");
	$aldata=explode("\n",$data);

		include("connect.php");
		$result = mysql_query("DELETE FROM `tmc` WHERE 1=1") ;
		foreach($aldata as $dat) { 
			$i++;
			$afld=explode(";",$dat); 
			$result = mysql_query("INSERT INTO tmc (ID,Kod,Descr,EdIzm) VALUES (".$afld[0].",".$afld[1].",".$afld[2].",".$afld[3].")");
			}
*/

	$ret="<ERR>1</ERR>";
}

echo $ret ;

?>

