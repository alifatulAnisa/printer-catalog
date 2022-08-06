<?php
session_start();
?>
<?php
	
	function selectProductUsingId($hpID){

		global $msg;
		global $hpID; global $hpPIC; global $hpMODEL; global $hpTYPE; global $hpCOLOR; global $hpDESC; global $hpPRICE;

		$sqlExistProd = mysql_query("SELECT * FROM hp WHERE hp_id = '$hpID'") or die(mysql_error());
		if(mysql_num_rows($sqlExistProd) >= 1){

			$getRowProd = mysql_fetch_array($sqlExistProd);
			$hpID = $getRowProd["hp_id"];
			$hpPIC = $getRowProd["hp_pic"];
			$hpMODEL = $getRowProd["hp_model"];
			$hpTYPE = $getRowProd["hp_type"];
			$hpCOLOR = $getRowProd["hp_color"];
			$hpDESC = $getRowProd["hp_ds"];
			$hpPRICE = $getRowProd["hp_price"];


			enableProductComponents();

		}else{
			$msg = "No record found";
			disableProductComponents();
		}
	}
?>