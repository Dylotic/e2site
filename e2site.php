<?php
/*
 * Copyright (c) 2015 Olaf Tieleman <otieleman@zeelandnet.nl>
 *
 * Permission to use, copy, modify, and distribute this software for any
 * purpose with or without fee is hereby granted, provided that the above
 * copyright notice and this permission notice appear in all copies.
 *
 * THE SOFTWARE IS PROVIDED "AS IS" AND THE AUTHOR DISCLAIMS ALL WARRANTIES
 * WITH REGARD TO THIS SOFTWARE INCLUDING ALL IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR
 * ANY SPECIAL, DIRECT, INDIRECT, OR CONSEQUENTIAL DAMAGES OR ANY DAMAGES
 * WHATSOEVER RESULTING FROM LOSS OF USE, DATA OR PROFITS, WHETHER IN AN
 * ACTION OF CONTRACT, NEGLIGENCE OR OTHER TORTIOUS ACTION, ARISING OUT OF
 * OR IN CONNECTION WITH THE USE OR PERFORMANCE OF THIS SOFTWARE.   /v0.2
 */ 
require_once('LSERVER.php');
 
header("Refresh:10");
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

//Vul de gegevens hieronder in voor jouw systeem.
$inverters = 4;              //Max 12 inverters!
$serialinv1 = 110029200;
$serialinv2 = 110131007;
$serialinv3 = 110065595;
$serialinv4 = 110080757;
$serialinv5 = 000000000;
$serialinv6 = 000000000;
$serialinv7 = 000000000;
$serialinv8 = 000000000;
$serialinv9 = 000000000;
$serialinv0 = 000000000;
$serialinvA = 000000000;
$serialinvB = 000000000;
$table = enecsys;
//------------------------------------

$sql1 = "SELECT * FROM $table WHERE $table.id=$serialinv1 ORDER BY $table.ts DESC LIMIT 1;"; $sql2 = "SELECT * FROM $table WHERE $table.id=$serialinv2 ORDER BY $table.ts DESC LIMIT 1;";
$sql3 = "SELECT * FROM $table WHERE $table.id=$serialinv3 ORDER BY $table.ts DESC LIMIT 1;"; $sql4 = "SELECT * FROM $table WHERE $table.id=$serialinv4 ORDER BY $table.ts DESC LIMIT 1;";
$sql5 = "SELECT * FROM $table WHERE $table.id=$serialinv5 ORDER BY $table.ts DESC LIMIT 1;"; $sql6 = "SELECT * FROM $table WHERE $table.id=$serialinv6 ORDER BY $table.ts DESC LIMIT 1;";
$sql7 = "SELECT * FROM $table WHERE $table.id=$serialinv7 ORDER BY $table.ts DESC LIMIT 1;"; $sql8 = "SELECT * FROM $table WHERE $table.id=$serialinv8 ORDER BY $table.ts DESC LIMIT 1;";
$sql9 = "SELECT * FROM $table WHERE $table.id=$serialinv9 ORDER BY $table.ts DESC LIMIT 1;"; $sql0 = "SELECT * FROM $table WHERE $table.id=$serialinv0 ORDER BY $table.ts DESC LIMIT 1;";
$sqlA = "SELECT * FROM $table WHERE $table.id=$serialinvA ORDER BY $table.ts DESC LIMIT 1;"; $sqlB = "SELECT * FROM $table WHERE $table.id=$serialinvB ORDER BY $table.ts DESC LIMIT 1;";

mysql_select_db($database_LSERVER, $LSERVER);

	if ($inverters > 0)
{
	$Inverter1 = mysql_query($sql1, $LSERVER) or die(mysql_error()); $row_Inverter1 = mysql_fetch_assoc($Inverter1);
	$vdc1 = $row_Inverter1['dcpower'] / $row_Inverter1['dccurrent']; $tablewith = "160";
}
	if ($inverters > 1)
{
	$Inverter2 = mysql_query($sql2, $LSERVER) or die(mysql_error()); $row_Inverter2 = mysql_fetch_assoc($Inverter2);
	$vdc2 = $row_Inverter2['dcpower'] / $row_Inverter2['dccurrent']; $tablewith = "320";
}
	if ($inverters > 2)
{
	$Inverter3 = mysql_query($sql3, $LSERVER) or die(mysql_error()); $row_Inverter3 = mysql_fetch_assoc($Inverter3);
	$vdc3 = $row_Inverter3['dcpower'] / $row_Inverter3['dccurrent']; $tablewith = "480";
}
	if ($inverters > 3)
{
	$Inverter4 = mysql_query($sql4, $LSERVER) or die(mysql_error()); $row_Inverter4 = mysql_fetch_assoc($Inverter4);
	$vdc4 = $row_Inverter4['dcpower'] / $row_Inverter4['dccurrent']; $tablewith = "640";
}
	if ($inverters > 4)
{
	$Inverter5 = mysql_query($sql5, $LSERVER) or die(mysql_error()); $row_Inverter5 = mysql_fetch_assoc($Inverter5);
	$vdc5 = $row_Inverter5['dcpower'] / $row_Inverter5['dccurrent']; $tablewith = "800";
}
	if ($inverters > 5)
{
	$Inverter6 = mysql_query($sql6, $LSERVER) or die(mysql_error()); $row_Inverter6 = mysql_fetch_assoc($Inverter6);
	$vdc6 = $row_Inverter6['dcpower'] / $row_Inverter6['dccurrent']; $tablewith = "960";
}
	if ($inverters > 6)
{
	$Inverter7 = mysql_query($sql7, $LSERVER) or die(mysql_error()); $row_Inverter7 = mysql_fetch_assoc($Inverter7);
	$vdc7 = $row_Inverter7['dcpower'] / $row_Inverter7['dccurrent'];
}
	if ($inverters > 7)
{
	$Inverter8 = mysql_query($sql8, $LSERVER) or die(mysql_error()); $row_Inverter8 = mysql_fetch_assoc($Inverter8);
	$vdc8 = $row_Inverter8['dcpower'] / $row_Inverter8['dccurrent'];
}
	if ($inverters > 8)
{
	$Inverter9 = mysql_query($sql9, $LSERVER) or die(mysql_error()); $row_Inverter9 = mysql_fetch_assoc($Inverter9);
	$vdc9 = $row_Inverter9['dcpower'] / $row_Inverter9['dccurrent'];
}
	if ($inverters > 9)
{
	$Inverter0 = mysql_query($sql0, $LSERVER) or die(mysql_error()); $row_Inverter0 = mysql_fetch_assoc($Inverter0);
	$vdc0 = $row_Inverter0['dcpower'] / $row_Inverter0['dccurrent'];
}
	if ($inverters > 10)
{
	$InverterA = mysql_query($sqlA, $LSERVER) or die(mysql_error()); $row_InverterA = mysql_fetch_assoc($InverterA);
	$vdcA = $row_InverterA['dcpower'] / $row_InverterA['dccurrent'];
}
	if ($inverters > 11)
{
	$InverterB = mysql_query($sqlB, $LSERVER) or die(mysql_error()); $row_InverterB = mysql_fetch_assoc($InverterB);
	$vdcB = $row_InverterB['dcpower'] / $row_InverterB['dccurrent'];
}

$wh_inv1 = $row_Inverter1['wh'] / 1000; $wh_inv2 = $row_Inverter2['wh'] / 1000; $wh_inv3 = $row_Inverter3['wh'] / 1000;
$wh_inv4 = $row_Inverter4['wh'] / 1000; $wh_inv5 = $row_Inverter5['wh'] / 1000; $wh_inv6 = $row_Inverter6['wh'] / 1000;
$wh_inv7 = $row_Inverter7['wh'] / 1000; $wh_inv8 = $row_Inverter8['wh'] / 1000; $wh_inv9 = $row_Inverter9['wh'] / 1000;
$wh_inv0 = $row_Inverter0['wh'] / 1000; $wh_invA = $row_InverterA['wh'] / 1000; $wh_invB = $row_InverterB['wh'] / 1000;

$totalpower = $row_Inverter1['dcpower'] + $row_Inverter2['dcpower'] + $row_Inverter3['dcpower'] + $row_Inverter4['dcpower'] + $row_Inverter5['dcpower'] + $row_Inverter6['dcpower'] 
			+ $row_Inverter7['dcpower'] + $row_Inverter8['dcpower'] + $row_Inverter9['dcpower'] + $row_Inverter0['dcpower'] + $row_InverterA['dcpower'] + $row_InverterB['dcpower'];
$totalcurr = $row_Inverter1['dccurrent'] + $row_Inverter2['dccurrent'] + $row_Inverter3['dccurrent'] + $row_Inverter4['dccurrent'] + $row_Inverter5['dccurrent'] + $row_Inverter6['dccurrent']
			 + $row_Inverter7['dccurrent'] + $row_Inverter8['dccurrent'] + $row_Inverter9['dccurrent'] + $row_Inverter0['dccurrent'] + $row_InverterA['dccurrent'] + $row_InverterB['dccurrent'];
$totalkwh = $wh_inv1 + $wh_inv2 + $wh_inv3 + $wh_inv4 + $wh_inv5 + $wh_inv6 + $wh_inv7 + $wh_inv8 + $wh_inv9 + $wh_inv0 + $wh_invA + $wh_invB;
$totalvdc = $vdc1 + $vdc2 + $vdc3 + $vdc4 + $vdc5 + $vdc6 + $vdc7 + $vdc8 + $vdc9 + $vdc0 + $vdcA + $vdcB;
?>

<html>
<head>
<meta http-equiv="Content-Language" content="nl">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Enecsys Solar Inverters</title>
</head>

<body bgcolor="#000000" text="#FFFFFF">

<div align="center">
  <p></p>
  <table border="0" width="<?php echo $tablewith;?>" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF" bgcolor="#000000" style="border-collapse: collapse">
		<tr>
		  <td height="25" colspan="6" align="center"><b><font size="4">Inverter Live Status</font></b></td>
    </tr>
		<tr>
			  <td height="8" align="center"></td>
		</tr>
		<tr>
<?php
    if ($inverters > 0) {
?>           
			<td width="16%" height="194">
			<div align="center">
         
			<table border="0" width="95%" bgcolor="#0066FF" style="border-collapse: collapse;">
				<tr>
				  <td colspan="2"><p align="center"><strong><?php echo $row_Inverter1['id']; ?></strong></td>
			  </tr>
				<tr>
				  <td align="right">&nbsp;</td>
				  <td align="center">&nbsp;</td>
			  </tr>
				<tr>
				  <td align="left"><b>&nbsp;Power</b></td>
				  <td align="center"><strong><?php echo $row_Inverter1['dcpower']; ?></strong></td>
			  </tr>
				<tr>
				  <td align="left"><b>&nbsp;DC Volt</b></td>
				  <td align="center"><strong><?php echo number_format($vdc1,2)."";v ?></strong></td>
			  </tr>								
				<tr>
				  <td align="left"><b>&nbsp;DC Curr.</b></td>
				  <td align="center"><strong><?php echo $row_Inverter1['dccurrent']; ?></strong></td>
			  </tr>
				<tr>
				  <td align="left"><b>&nbsp;AC Volt</b></td>
				  <td align="center"><strong><?php echo $row_Inverter1['acvolt']; ?></strong></td>
			  </tr>
				<tr>
				  <td align="left"><strong>&nbsp;AC Freq.</strong></td>
				  <td align="center"><strong><?php echo $row_Inverter1['acfreq']; ?></strong></td>
			  </tr>
				<tr>
				  <td align="left"><b>&nbsp;Efficiency</b></td>
				  <td align="center"><strong><?php echo $row_Inverter1['efficiency']; ?></strong></td>
			  </tr>
				<tr>
				  <td align="left"><b>&nbsp;Temp</b></td>
				  <td align="center"><strong><?php echo $row_Inverter1['temp']; ?></strong></td>
			  </tr>
				<tr>
				  <td align="left"><b>&nbsp;State</b></td>
				  <td align="center"><strong><?php echo $row_Inverter1['state']; ?></strong></td>
			  </tr>
				<tr>
				  <td align="left"><b>&nbsp;kWh</b></td>
				  <td align="center"><strong><?php echo $wh_inv1; ?></strong></td>
			  </tr>
				<tr>
				  <td colspan="2" align="left">&nbsp;</td>
			  </tr>
				<tr>
				  <td colspan="2" align="center"><?php echo $row_Inverter1['ts']; ?></td>
			  </tr>
			  </table>
<?php
    }
?>                
			</div>
			</td>
<?php
    if ($inverters > 1) {
?>		            
			<td width="16%" height="194">
			<div align="center">
	
            <table border="0" width="95%" bgcolor="#0066FF" style="border-collapse: collapse">
				<tr>
				  <td colspan="2"><p align="center"><strong><?php echo $row_Inverter2['id']; ?></strong></td>
			  </tr>
				<tr>
				  <td align="right">&nbsp;</td>
				  <td align="center">&nbsp;</td>
			  </tr>
				<tr>
				  <td align="left"><b>&nbsp;Power</b></td>
				  <td align="center"><strong><?php echo $row_Inverter2['dcpower']; ?></strong></td>
			  </tr>
				<tr>
				  <td align="left"><b>&nbsp;DC Volt</b></td>
				  <td align="center"><strong><?php echo number_format($vdc2,2).""; ?></strong></td>
			  </tr>						
				<tr>
				  <td align="left"><b>&nbsp;DC Curr.</b></td>
				  <td align="center"><strong><?php echo $row_Inverter2['dccurrent']; ?></strong></td>
			  </tr>
				<tr>
				  <td align="left"><b>&nbsp;AC Volt</b></td>
				  <td align="center"><strong><?php echo $row_Inverter2['acvolt']; ?></strong></td>
			  </tr>
				<tr>
				  <td align="left"><b>&nbsp;AC Freq.</b></td>
				  <td align="center"><strong><?php echo $row_Inverter2['acfreq']; ?></strong></td>
			  </tr>
				<tr>
				  <td align="left"><b>&nbsp;Efficiency</b></td>
				  <td align="center"><strong><?php echo $row_Inverter2['efficiency']; ?></strong></td>
			  </tr>
				<tr>
				  <td align="left"><b>&nbsp;Temp</b></td>
				  <td align="center"><strong><?php echo $row_Inverter2['temp']; ?></strong></td>
			  </tr>
				<tr>
				  <td align="left"><b>&nbsp;State</b></td>
				  <td align="center"><strong><?php echo $row_Inverter2['state']; ?></strong></td>
			  </tr>
				<tr>
				  <td align="left"><b>&nbsp;kWh</b></td>
				  <td align="center"><strong><?php echo $wh_inv2; ?></strong></td>
			  </tr>
				<tr>
				  <td colspan="2" align="left">&nbsp;</td>
			  </tr>
				<tr>
				  <td colspan="2" align="center"><?php echo $row_Inverter2['ts']; ?></td>
			  </tr>
			  </table>
<?php
    }
?>  
			</div>
			</td>
<?php
    if ($inverters > 2) {
?>            
			<td width="16%" height="194">
			<div align="center">

			<table border="0" width="95%" bgcolor="#0066FF" style="border-collapse: collapse">
				<tr>
				  <td colspan="2"><p align="center"><strong><?php echo $row_Inverter3['id']; ?></strong></td>
			  </tr>
				<tr>
				  <td align="right">&nbsp;</td>
				  <td align="center">&nbsp;</td>
			  </tr>
				<tr>
				  <td align="left"><b>&nbsp;Power</b></td>
				  <td align="center"><strong><?php echo $row_Inverter3['dcpower']; ?></strong></td>
			  </tr>
				<tr>
				  <td align="left"><b>&nbsp;DC Volt</b></td>
				  <td align="center"><strong><?php echo number_format($vdc3,2).""; ?></strong></td>
			  </tr>		
				<tr>
				  <td align="left"><b>&nbsp;DC Curr.</b></td>
				  <td align="center"><strong><?php echo $row_Inverter3['dccurrent']; ?></strong></td>
			  </tr>
				<tr>
				  <td align="left"><b>&nbsp;AC Volt</b></td>
				  <td align="center"><strong><?php echo $row_Inverter3['acvolt']; ?></strong></td>
			  </tr>
				<tr>
				  <td align="left"><b>&nbsp;AC Freq.</b></td>
				  <td align="center"><strong><?php echo $row_Inverter3['acfreq']; ?></strong></td>
			  </tr>
				<tr>
				  <td align="left"><b>&nbsp;Efficiency</b></td>
				  <td align="center"><strong><?php echo $row_Inverter3['efficiency']; ?></strong></td>
			  </tr>
				<tr>
				  <td align="left"><b>&nbsp;Temp</b></td>
				  <td align="center"><strong><?php echo $row_Inverter3['temp']; ?></strong></td>
			  </tr>
				<tr>
				  <td align="left"><b>&nbsp;State</b></td>
				  <td align="center"><strong><?php echo $row_Inverter3['state']; ?></strong></td>
			  </tr>
				<tr>
				  <td align="left"><b>&nbsp;kWh</b></td>
				  <td align="center"><strong><?php echo $wh_inv3; ?></strong></td>
			  </tr>
				<tr>
				  <td colspan="2" align="left">&nbsp;</td>
			  </tr>
				<tr>
				  <td colspan="2" align="center"><?php echo $row_Inverter3['ts']; ?></td>
			  </tr>
			  </table>
<?php
    }
?>                
			</div>
			</td>
<?php
    if ($inverters > 3) {
?>            
			<td width="16%" height="194">
			<div align="center">

			<table border="0" width="95%" bgcolor="#0066FF" style="border-collapse: collapse">
			    <tr>
			      <td colspan="2"><p align="center"><strong><?php echo $row_Inverter4['id']; ?></strong></td>
		        </tr>
			    <tr>
			      <td align="right">&nbsp;</td>
			      <td align="center">&nbsp;</td>
		        </tr>
			    <tr>
			      <td align="left"><b>&nbsp;Power</b></td>
			      <td align="center"><strong><?php echo $row_Inverter4['dcpower']; ?></strong></td>
		        </tr>
			    <tr>
			      <td align="left"><b>&nbsp;DC Volt</b></td>
			      <td align="center"><strong><?php echo number_format($vdc4,2).""; ?></strong></td>
		        </tr>
			    <tr>
			      <td align="left"><b>&nbsp;DC Curr.</b></td>
			      <td align="center"><strong><?php echo $row_Inverter4['dccurrent']; ?></strong></td>
		        </tr>
			    <tr>
			      <td align="left"><b>&nbsp;AC Volt</b></td>
			      <td align="center"><strong><?php echo $row_Inverter4['acvolt']; ?></strong></td>
		        </tr>
			    <tr>
			      <td align="left"><b>&nbsp;AC Freq.</b></td>
			      <td align="center"><strong><?php echo $row_Inverter4['acfreq']; ?></strong></td>
		        </tr>
			    <tr>
			      <td align="left"><b>&nbsp;Efficiency</b></td>
			      <td align="center"><strong><?php echo $row_Inverter4['efficiency']; ?></strong></td>
		        </tr>
			    <tr>
			      <td align="left"><b>&nbsp;Temp</b></td>
			      <td align="center"><strong><?php echo $row_Inverter4['temp']; ?></strong></td>
		        </tr>
			    <tr>
			      <td align="left"><b>&nbsp;State</b></td>
			      <td align="center"><strong><?php echo $row_Inverter4['state']; ?></strong></td>
		        </tr>
			    <tr>
			      <td align="left"><b>&nbsp;kWh</b></td>
			      <td align="center"><strong><?php echo $wh_inv4; ?></strong></td>
		        </tr>
			    <tr>
			      <td colspan="2" align="left">&nbsp;</td>
		        </tr>
			    <tr>
			      <td colspan="2" align="center"><?php echo $row_Inverter4['ts']; ?></td>
		        </tr>
		      </table>
<?php
	}
?>
		    </div></td>
<?php
    if ($inverters > 4) {
?>            
		  <td width="16%"><div align="center">

			  <table border="0" width="95%" bgcolor="#0066FF" style="border-collapse: collapse">
			    <tr>
			      <td colspan="2"><p align="center"><strong><?php echo $row_Inverter5['id']; ?></strong></td>
		        </tr>
			    <tr>
			      <td align="right">&nbsp;</td>
			      <td align="center">&nbsp;</td>
		        </tr>
			    <tr>
			      <td align="left"><b>&nbsp;Power</b></td>
			      <td align="center"><strong><?php echo $row_Inverter5['dcpower']; ?></strong></td>
		        </tr>
			    <tr>
			      <td align="left"><b>&nbsp;DC Volt</b></td>
			      <td align="center"><strong><?php echo number_format($vdc5,2).""; ?></strong></td>
		        </tr>
			    <tr>
			      <td align="left"><b>&nbsp;DC Curr.</b></td>
			      <td align="center"><strong><?php echo $row_Inverter5['dccurrent']; ?></strong></td>
		        </tr>
			    <tr>
			      <td align="left"><b>&nbsp;AC Volt</b></td>
			      <td align="center"><strong><?php echo $row_Inverter5['acvolt']; ?></strong></td>
		        </tr>
			    <tr>
			      <td align="left"><b>&nbsp;AC Freq.</b></td>
			      <td align="center"><strong><?php echo $row_Inverter5['acfreq']; ?></strong></td>
		        </tr>
			    <tr>
			      <td align="left"><b>&nbsp;Efficiency</b></td>
			      <td align="center"><strong><?php echo $row_Inverter5['efficiency']; ?></strong></td>
		        </tr>
			    <tr>
			      <td align="left"><b>&nbsp;Temp</b></td>
			      <td align="center"><strong><?php echo $row_Inverter5['temp']; ?></strong></td>
		        </tr>
			    <tr>
			      <td align="left"><b>&nbsp;State</b></td>
			      <td align="center"><strong><?php echo $row_Inverter5['state']; ?></strong></td>
		        </tr>
			    <tr>
			      <td align="left"><b>&nbsp;kWh</b></td>
			      <td align="center"><strong><?php echo $wh_inv5; ?></strong></td>
		        </tr>
			    <tr>
			      <td colspan="2" align="left">&nbsp;</td>
		        </tr>
			    <tr>
			      <td colspan="2" align="center"><?php echo $row_Inverter5['ts']; ?></td>
		        </tr>
		      </table>
<?php
	}
?>
		    </div></td>
<?php
    if ($inverters > 5) {
?>            
		  <td width="16%"><div align="center">

			  <table border="0" width="95%" bgcolor="#0066FF" style="border-collapse: collapse">
				<tr>
				  <td colspan="2"><p align="center"><strong><?php echo $row_Inverter6['id']; ?></strong></td>
			  </tr>
				<tr>
				  <td align="right">&nbsp;</td>
				  <td align="center">&nbsp;</td>
			  </tr>
				<tr>
				  <td align="left"><b>&nbsp;Power</b></td>
				  <td align="center"><strong><?php echo $row_Inverter6['dcpower']; ?></strong></td>
			  </tr>
				<tr>
				  <td align="left"><b>&nbsp;DC Volt</b></td>
				  <td align="center"><strong><?php echo number_format($vdc6,2).""; ?></strong></td>
			  </tr>						
				<tr>
				  <td align="left"><b>&nbsp;DC Curr.</b></td>
				  <td align="center"><strong><?php echo $row_Inverter6['dccurrent']; ?></strong></td>
			  </tr>
				<tr>
				  <td align="left"><b>&nbsp;AC Volt</b></td>
				  <td align="center"><strong><?php echo $row_Inverter6['acvolt']; ?></strong></td>
			  </tr>
				<tr>
				  <td align="left"><b>&nbsp;AC Freq.</b></td>
				  <td align="center"><strong><?php echo $row_Inverter6['acfreq']; ?></strong></td>
			  </tr>
				<tr>
				  <td align="left"><b>&nbsp;Efficiency</b></td>
				  <td align="center"><strong><?php echo $row_Inverter6['efficiency']; ?></strong></td>
			  </tr>
				<tr>
				  <td align="left"><b>&nbsp;Temp</b></td>
				  <td align="center"><strong><?php echo $row_Inverter6['temp']; ?></strong></td>
			  </tr>
				<tr>
				  <td align="left"><b>&nbsp;State</b></td>
				  <td align="center"><strong><?php echo $row_Inverter6['state']; ?></strong></td>
			  </tr>
				<tr>
				  <td align="left"><b>&nbsp;kWh</b></td>
				  <td align="center"><strong><?php echo $wh_inv6; ?></strong></td>
			  </tr>
				<tr>
				  <td colspan="2" align="left">&nbsp;</td>
			  </tr>
				<tr>
				  <td colspan="2" align="center"><?php echo $row_Inverter6['ts']; ?></td>
			  </tr>
			  </table>
<?php
    }
?>              
			</div>
			</td>
		</tr>
		<tr>
		  <td height="8" align="center"></td>
    </tr>
		<tr>
<?php
    if ($inverters > 6) {
?>        
		  <td width="16%%" height="194">
          <div align="center">

            <table border="0" width="95%" bgcolor="#0066FF" style="border-collapse: collapse;">
              <tr>
                <td colspan="2"><p align="center"><strong><?php echo $row_Inverter7['id']; ?></strong></td>
              </tr>
              <tr>
                <td align="right">&nbsp;</td>
                <td align="center">&nbsp;</td>
              </tr>
              <tr>
                <td align="left"><b>&nbsp;Power</b></td>
                <td align="center"><strong><?php echo $row_Inverter7['dcpower']; ?></strong></td>
              </tr>
              <tr>
                <td align="left"><b>&nbsp;DC Volt</b></td>
                <td align="center"><strong><?php echo number_format($vdc7,2)."";v ?></strong></td>
              </tr>
              <tr>
                <td align="left"><b>&nbsp;DC Curr.</b></td>
                <td align="center"><strong><?php echo $row_Inverter7['dccurrent']; ?></strong></td>
              </tr>
              <tr>
                <td align="left"><b>&nbsp;AC Volt</b></td>
                <td align="center"><strong><?php echo $row_Inverter7['acvolt']; ?></strong></td>
              </tr>
              <tr>
                <td align="left"><strong>&nbsp;AC Freq.</strong></td>
                <td align="center"><strong><?php echo $row_Inverter7['acfreq']; ?></strong></td>
              </tr>
              <tr>
                <td align="left"><b>&nbsp;Efficiency</b></td>
                <td align="center"><strong><?php echo $row_Inverter7['efficiency']; ?></strong></td>
              </tr>
              <tr>
                <td align="left"><b>&nbsp;Temp</b></td>
                <td align="center"><strong><?php echo $row_Inverter7['temp']; ?></strong></td>
              </tr>
              <tr>
                <td align="left"><b>&nbsp;State</b></td>
                <td align="center"><strong><?php echo $row_Inverter7['state']; ?></strong></td>
              </tr>
              <tr>
                <td align="left"><b>&nbsp;kWh</b></td>
                <td align="center"><strong><?php echo $wh_inv7; ?></strong></td>
              </tr>
              <tr>
                <td colspan="2" align="left">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2" align="center"><?php echo $row_Inverter7['ts']; ?></td>
              </tr>
            </table>
<?php
    }
?>
		</td>
<?php
    if ($inverters > 7) {
?>		  
	  <td width="16%%" height="194">
          <div align="center">

            <table border="0" width="95%" bgcolor="#0066FF" style="border-collapse: collapse;">
		      <tr>
		        <td colspan="2"><p align="center"><strong><?php echo $row_Inverter8['id']; ?></strong></td>
	          </tr>
		      <tr>
		        <td align="right">&nbsp;</td>
		        <td align="center">&nbsp;</td>
	          </tr>
		      <tr>
		        <td align="left"><b>&nbsp;Power</b></td>
		        <td align="center"><strong><?php echo $row_Inverter8['dcpower']; ?></strong></td>
	          </tr>
		      <tr>
		        <td align="left"><b>&nbsp;DC Volt</b></td>
		        <td align="center"><strong><?php echo number_format($vdc8,2)."";v ?></strong></td>
	          </tr>
		      <tr>
		        <td align="left"><b>&nbsp;DC Curr.</b></td>
		        <td align="center"><strong><?php echo $row_Inverter8['dccurrent']; ?></strong></td>
	          </tr>
		      <tr>
		        <td align="left"><b>&nbsp;AC Volt</b></td>
		        <td align="center"><strong><?php echo $row_Inverter8['acvolt']; ?></strong></td>
	          </tr>
		      <tr>
		        <td align="left"><strong>&nbsp;AC Freq.</strong></td>
		        <td align="center"><strong><?php echo $row_Inverter8['acfreq']; ?></strong></td>
	          </tr>
		      <tr>
		        <td align="left"><b>&nbsp;Efficiency</b></td>
		        <td align="center"><strong><?php echo $row_Inverter8['efficiency']; ?></strong></td>
	          </tr>
		      <tr>
		        <td align="left"><b>&nbsp;Temp</b></td>
		        <td align="center"><strong><?php echo $row_Inverter8['temp']; ?></strong></td>
	          </tr>
		      <tr>
		        <td align="left"><b>&nbsp;State</b></td>
		        <td align="center"><strong><?php echo $row_Inverter8['state']; ?></strong></td>
	          </tr>
		      <tr>
		        <td align="left"><b>&nbsp;kWh</b></td>
		        <td align="center"><strong><?php echo $wh_inv8; ?></strong></td>
	          </tr>
		      <tr>
		        <td colspan="2" align="left">&nbsp;</td>
	          </tr>
		      <tr>
		        <td colspan="2" align="center"><?php echo $row_Inverter8['ts']; ?></td>
	          </tr>
	        </table>
<?php
    }
?>
			</td>
<?php
    if ($inverters > 8) {
?>            
		  <td width="16%%" height="194">
          <div align="center">

            <table border="0" width="95%" bgcolor="#0066FF" style="border-collapse: collapse;">
		      <tr>
		        <td colspan="2"><p align="center"><strong><?php echo $row_Inverter9['id']; ?></strong></td>
	          </tr>
		      <tr>
		        <td align="right">&nbsp;</td>
		        <td align="center">&nbsp;</td>
	          </tr>
		      <tr>
		        <td align="left"><b>&nbsp;Power</b></td>
		        <td align="center"><strong><?php echo $row_Inverter9['dcpower']; ?></strong></td>
	          </tr>
		      <tr>
		        <td align="left"><b>&nbsp;DC Volt</b></td>
		        <td align="center"><strong><?php echo number_format($vdc9,2)."";v ?></strong></td>
	          </tr>
		      <tr>
		        <td align="left"><b>&nbsp;DC Curr.</b></td>
		        <td align="center"><strong><?php echo $row_Inverter9['dccurrent']; ?></strong></td>
	          </tr>
		      <tr>
		        <td align="left"><b>&nbsp;AC Volt</b></td>
		        <td align="center"><strong><?php echo $row_Inverter9['acvolt']; ?></strong></td>
	          </tr>
		      <tr>
		        <td align="left"><strong>&nbsp;AC Freq.</strong></td>
		        <td align="center"><strong><?php echo $row_Inverter9['acfreq']; ?></strong></td>
	          </tr>
		      <tr>
		        <td align="left"><b>&nbsp;Efficiency</b></td>
		        <td align="center"><strong><?php echo $row_Inverter9['efficiency']; ?></strong></td>
	          </tr>
		      <tr>
		        <td align="left"><b>&nbsp;Temp</b></td>
		        <td align="center"><strong><?php echo $row_Inverter9['temp']; ?></strong></td>
	          </tr>
		      <tr>
		        <td align="left"><b>&nbsp;State</b></td>
		        <td align="center"><strong><?php echo $row_Inverter9['state']; ?></strong></td>
	          </tr>
		      <tr>
		        <td align="left"><b>&nbsp;kWh</b></td>
		        <td align="center"><strong><?php echo $wh_inv9; ?></strong></td>
	          </tr>
		      <tr>
		        <td colspan="2" align="left">&nbsp;</td>
	          </tr>
		      <tr>
		        <td colspan="2" align="center"><?php echo $row_Inverter9['ts']; ?></td>
	          </tr>
	        </table>
<?php
    }
?>
		</td>
<?php
    if ($inverters > 9) {
?>        
	  <td width="16%%" height="194">
          <div align="center">

            <table border="0" width="95%" bgcolor="#0066FF" style="border-collapse: collapse;">
		      <tr>
		        <td colspan="2"><p align="center"><strong><?php echo $row_Inverter0['id']; ?></strong></td>
	          </tr>
		      <tr>
		        <td align="right">&nbsp;</td>
		        <td align="center">&nbsp;</td>
	          </tr>
		      <tr>
		        <td align="left"><b>&nbsp;Power</b></td>
		        <td align="center"><strong><?php echo $row_Inverter0['dcpower']; ?></strong></td>
	          </tr>
		      <tr>
		        <td align="left"><b>&nbsp;DC Volt</b></td>
		        <td align="center"><strong><?php echo number_format($vdc0,2)."";v ?></strong></td>
	          </tr>
		      <tr>
		        <td align="left"><b>&nbsp;DC Curr.</b></td>
		        <td align="center"><strong><?php echo $row_Inverter0['dccurrent']; ?></strong></td>
	          </tr>
		      <tr>
		        <td align="left"><b>&nbsp;AC Volt</b></td>
		        <td align="center"><strong><?php echo $row_Inverter0['acvolt']; ?></strong></td>
	          </tr>
		      <tr>
		        <td align="left"><strong>&nbsp;AC Freq.</strong></td>
		        <td align="center"><strong><?php echo $row_Inverter0['acfreq']; ?></strong></td>
	          </tr>
		      <tr>
		        <td align="left"><b>&nbsp;Efficiency</b></td>
		        <td align="center"><strong><?php echo $row_Inverter0['efficiency']; ?></strong></td>
	          </tr>
		      <tr>
		        <td align="left"><b>&nbsp;Temp</b></td>
		        <td align="center"><strong><?php echo $row_Inverter0['temp']; ?></strong></td>
	          </tr>
		      <tr>
		        <td align="left"><b>&nbsp;State</b></td>
		        <td align="center"><strong><?php echo $row_Inverter0['state']; ?></strong></td>
	          </tr>
		      <tr>
		        <td align="left"><b>&nbsp;kWh</b></td>
		        <td align="center"><strong><?php echo $wh_inv0; ?></strong></td>
	          </tr>
		      <tr>
		        <td colspan="2" align="left">&nbsp;</td>
	          </tr>
		      <tr>
		        <td colspan="2" align="center"><?php echo $row_Inverter0['ts']; ?></td>
	          </tr>
	        </table>
<?php
    }
?>
			</td>
	<?php
    if ($inverters > 10) {
?>        
	  <td width="16%%" height="194">
          <div align="center">

            <table border="0" width="95%" bgcolor="#0066FF" style="border-collapse: collapse;">
		      <tr>
		        <td colspan="2"><p align="center"><strong><?php echo $row_InverterA['id']; ?></strong></td>
	          </tr>
		      <tr>
		        <td align="right">&nbsp;</td>
		        <td align="center">&nbsp;</td>
	          </tr>
		      <tr>
		        <td align="left"><b>&nbsp;Power</b></td>
		        <td align="center"><strong><?php echo $row_InverterA['dcpower']; ?></strong></td>
	          </tr>
		      <tr>
		        <td align="left"><b>&nbsp;DC Volt</b></td>
		        <td align="center"><strong><?php echo number_format($vdcA,2)."";v ?></strong></td>
	          </tr>
		      <tr>
		        <td align="left"><b>&nbsp;DC Curr.</b></td>
		        <td align="center"><strong><?php echo $row_InverterA['dccurrent']; ?></strong></td>
	          </tr>
		      <tr>
		        <td align="left"><b>&nbsp;AC Volt</b></td>
		        <td align="center"><strong><?php echo $row_InverterA['acvolt']; ?></strong></td>
	          </tr>
		      <tr>
		        <td align="left"><strong>&nbsp;AC Freq.</strong></td>
		        <td align="center"><strong><?php echo $row_InverterA['acfreq']; ?></strong></td>
	          </tr>
		      <tr>
		        <td align="left"><b>&nbsp;Efficiency</b></td>
		        <td align="center"><strong><?php echo $row_InverterA['efficiency']; ?></strong></td>
	          </tr>
		      <tr>
		        <td align="left"><b>&nbsp;Temp</b></td>
		        <td align="center"><strong><?php echo $row_InverterA['temp']; ?></strong></td>
	          </tr>
		      <tr>
		        <td align="left"><b>&nbsp;State</b></td>
		        <td align="center"><strong><?php echo $row_InverterA['state']; ?></strong></td>
	          </tr>
		      <tr>
		        <td align="left"><b>&nbsp;kWh</b></td>
		        <td align="center"><strong><?php echo $wh_invA; ?></strong></td>
	          </tr>
		      <tr>
		        <td colspan="2" align="left">&nbsp;</td>
	          </tr>
		      <tr>
		        <td colspan="2" align="center"><?php echo $row_InverterA['ts']; ?></td>
	          </tr>
	        </table>
<?php
    }
?>
			</td>
<?php
    if ($inverters >11) {
?>            
	  <td width="16%%" height="194">
          <div align="center">

            <table border="0" width="95%" bgcolor="#0066FF" style="border-collapse: collapse;">
		      <tr>
		        <td colspan="2"><p align="center"><strong><?php echo $row_InverterB['id']; ?></strong></td>
	          </tr>
		      <tr>
		        <td align="right">&nbsp;</td>
		        <td align="center">&nbsp;</td>
	          </tr>
		      <tr>
		        <td align="left"><b>&nbsp;Power</b></td>
		        <td align="center"><strong><?php echo $row_InverterB['dcpower']; ?></strong></td>
	          </tr>
		      <tr>
		        <td align="left"><b>&nbsp;DC Volt</b></td>
		        <td align="center"><strong><?php echo number_format($vdcB,2)."";v ?></strong></td>
	          </tr>
		      <tr>
		        <td align="left"><b>&nbsp;DC Curr.</b></td>
		        <td align="center"><strong><?php echo $row_InverterB['dccurrent']; ?></strong></td>
	          </tr>
		      <tr>
		        <td align="left"><b>&nbsp;AC Volt</b></td>
		        <td align="center"><strong><?php echo $row_InverterB['acvolt']; ?></strong></td>
	          </tr>
		      <tr>
		        <td align="left"><strong>&nbsp;AC Freq.</strong></td>
		        <td align="center"><strong><?php echo $row_InverterB['acfreq']; ?></strong></td>
	          </tr>
		      <tr>
		        <td align="left"><b>&nbsp;Efficiency</b></td>
		        <td align="center"><strong><?php echo $row_InverterB['efficiency']; ?></strong></td>
	          </tr>
		      <tr>
		        <td align="left"><b>&nbsp;Temp</b></td>
		        <td align="center"><strong><?php echo $row_InverterB['temp']; ?></strong></td>
	          </tr>
		      <tr>
		        <td align="left"><b>&nbsp;State</b></td>
		        <td align="center"><strong><?php echo $row_InverterB['state']; ?></strong></td>
	          </tr>
		      <tr>
		        <td align="left"><b>&nbsp;kWh</b></td>
		        <td align="center"><strong><?php echo $wh_invB; ?></strong></td>
	          </tr>
		      <tr>
		        <td colspan="2" align="left">&nbsp;</td>
	          </tr>
		      <tr>
		        <td colspan="2" align="center"><?php echo $row_InverterB['ts']; ?></td>
	          </tr>
	        </table>
		    <?php
    }
?></td>
    </tr>
		<tr>
		  <td height="10" align="center"></td>
    </tr>
		<tr>
		  <td colspan="6" align="center"><font size="4"><b>Totals:&nbsp;&nbsp; <font color="yellow"> <?php echo $totalpower; ?> <font color="white">Watt &nbsp;&nbsp;-&nbsp;&nbsp;<font color="yellow"><?php echo number_format($totalcurr,2).""; ?> <font color="white">Amp <font color="white"><b>&nbsp;&nbsp;-&nbsp;&nbsp;<font color="yellow"> <?php echo number_format($totalvdc,2).""; ?> <font color="white">Vdc <font color="white">&nbsp;&nbsp;-&nbsp;&nbsp;<font color="yellow"><?php echo $totalkwh; ?> <font color="white">kWh</font></b></td>
	  </tr>
		<tr>
		  <td colspan="6" align="center">&nbsp;</td>
	  </tr>
		<tr>
			<td colspan="6" align="center"></td>
		</tr>
		</table>
	<p>&nbsp;</p>
</div>
</body>
</html>
