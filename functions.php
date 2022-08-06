<?php
	
	function selectProductUsingId($uID){

		global $msg;
		global $prodNo; global $prodID; global $prodName; global $prodDescr; global $prodCat; global $prodPrice; global $prodQuan;

		$sqlExistProd = mysql_query("SELECT * FROM tblproduct WHERE prod_id = '$uID'") or die(mysql_error());
		if(mysql_num_rows($sqlExistProd) >= 1){

			$getRowProd = mysql_fetch_array($sqlExistProd);
			$prodNo = $getRowProd["prod_no"];
			$prodID = $getRowProd["prod_id"];
			$prodName = $getRowProd["prod_name"];
			$prodDescr = $getRowProd["prod_descr"];
			$prodCat = $getRowProd["prod_cat"];
			$prodPrice = $getRowProd["prod_price"];
			$prodQuan = $getRowProd["prod_quan"];


			enableProductComponents();

		}else{
			$msg = "No record found";
			disableProductComponents();
		}
	}
?>