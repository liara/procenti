<?php
$page = $_GET["page"];
class calc {

		function average($pisne_ocene,$ustne_ocene){
                	$result = 0.7*(array_sum($pisne_ocene)/count($pisne_ocene))+0.3*(array_sum($ustne_ocene)/count($ustne_ocene));
			echo round($result,0);
			exit;
                }
}
$calc = new calc();
?>

<TITLE>Kalkulator</TITLE>
<form name="calc" action="?page=calc" method="POST">
Pisne ocene: <input type=text name="value1[]"><input type=text name="value1[]"><input type=text name="value1[]">
<input type=text name="value1[]"><input type=text name="value1[]"><input type=text name="value1[]"><br>
Ustne ocene: <input type=text name="value2[]"><input type=text name="value2[]"><input type=text name="value2[]">
<input type=text name="value2[]"><input type=text name="value2[]"><input type=text name="value2[]"><br>

Izvedi: <input type=radio name=oper value="average">Izra&#269;un <br>

<input type=submit value="Kon&#269;na ocena">
</form>
<?php
if ($page == "calc"){
$pisne_ocene = $_POST["value1"];
$ustne_ocene = $_POST["value2"];
$oper = $_POST['oper'];
if (!$pisne_ocene) return false;
if (!$ustne_ocene) return false;
$pisne_ocene=array_filter($pisne_ocene);
$ustne_ocene=array_filter($ustne_ocene);
	if(!$pisne_ocene){
		echo "Vnesi ocene";
		exit;
	}if(!$ustne_ocene){
		echo "Vnesi ocene";
		exit;
	}if(!$oper){
		echo("Ozna&#269;i Izra&#269;un!");
                exit;
        }if($oper =="average"){
		$calc->average($pisne_ocene, $ustne_ocene);
	} 
}
?> 
