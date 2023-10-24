<?php
require('./dompdf/autoload.inc.php');
require('./classes/linkdb.php');
require('./classes/paiement.php');

$data = new paiement();
$data->setCODEPAYEMENT($_GET['id']);
$data->livraison();
$all = $data->naissance();


// reference the Dompdf namespace
use Dompdf\Dompdf;
use Dompdf\Options;

$current = date('d/m/Y');
$a = 'Content-Type';
$b = 'text/html; charset=utf-8';

$html .= '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0014)about:internet -->
<html>
<head>
	<title>Acte de Naissance</title>
	<meta HTTP-EQUIV=' . $a . ' CONTENT=' . $b . '/>
	<style type="text/css">
		.csFB8F06 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:13px; font-weight:bold; font-style:italic; padding-left:2px;}
		.cs101A94F7 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:normal; }
		.cs6105B8F3 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:normal; padding-left:2px;}
		.cs5EA817F2 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:normal; padding-left:2px;padding-right:2px;}
		.cs2A8593E6 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:15px; font-weight:normal; font-style:normal; padding-left:2px;padding-right:2px;}
		.cs739196BC {color:#5C5C5C;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Segoe UI; font-size:11px; font-weight:normal; font-style:normal; }
		.csF7D3565D {height:0px;width:0px;overflow:hidden;font-size:0px;line-height:0px;}
	</style>
</head>
<body leftMargin=10 topMargin=10 rightMargin=10 bottomMargin=10 style="background-color:#FFFFFF">
<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;width:624px;height:328px;position:relative;">
	<tr>
		<td style="width:0px;height:0px;"></td>
		<td style="height:0px;width:10px;"></td>
		<td style="height:0px;width:25px;"></td>
		<td style="height:0px;width:22px;"></td>
		<td style="height:0px;width:14px;"></td>
		<td style="height:0px;width:2px;"></td>
		<td style="height:0px;width:22px;"></td>
		<td style="height:0px;width:14px;"></td>
		<td style="height:0px;width:58px;"></td>
		<td style="height:0px;width:97px;"></td>
		<td style="height:0px;width:23px;"></td>
		<td style="height:0px;width:50px;"></td>
		<td style="height:0px;width:12px;"></td>
		<td style="height:0px;width:11px;"></td>
		<td style="height:0px;width:49px;"></td>
		<td style="height:0px;width:22px;"></td>
		<td style="height:0px;width:13px;"></td>
		<td style="height:0px;width:21px;"></td>
		<td style="height:0px;width:52px;"></td>
		<td style="height:0px;width:14px;"></td>
		<td style="height:0px;width:83px;"></td>
		<td style="height:0px;width:10px;"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:23px;"></td>
		<td class="cs739196BC" colspan="14" style="width:409px;height:23px;line-height:14px;text-align:center;vertical-align:middle;"><nobr></nobr></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:10px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td></td>
		<td class="cs101A94F7" colspan="5" rowspan="4" style="width:85px;height:69px;text-align:left;vertical-align:top;"><div style="overflow:hidden;width:85px;height:69px;">
			<img src="./assets/img/flag.png" width="83px" height="69px">
		</td>
		<td></td>
		<td class="cs2A8593E6" colspan="11" style="width:404px;height:22px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>REPUBLIQUE&nbsp;DEMOCRATIQUE&nbsp;DU&nbsp;CONGO</nobr></td>
		<td></td>
		<td class="cs101A94F7" rowspan="4" style="width:83px;height:69px;text-align:left;vertical-align:top;"><div style="overflow:hidden;width:83px;height:69px;">
			<img src="./assets/img/armoirie.png" width="83px" height="69px">
		</td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td></td>
		<td></td>
		<td class="cs2A8593E6" colspan="11" style="width:404px;height:22px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>PROVINCE&nbsp;DU&nbsp;NORD-KIVU</nobr></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td></td>
		<td></td>
		<td class="cs2A8593E6" colspan="11" style="width:404px;height:22px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>EXTRAIT&nbsp;DE&nbsp;RESITRE&nbsp;DES&nbsp;DECLARATIONS&nbsp;DE&nbsp;NAISSANCE</nobr></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:3px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:23px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>';
foreach ($all as $key => $val) {
	$html .= '<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td class="cs6105B8F3" colspan="4" style="width:69px;height:22px;line-height:15px;text-align:left;vertical-align:top;"><nobr>&#192;&nbsp;Date&nbsp;du</nobr></td>
		<td></td>
		<td class="csFB8F06" colspan="4" rowspan="2" style="width:189px;height:33px;line-height:15px;text-align:left;vertical-align:top;"><nobr>' . $val['DDATE'] . '</nobr><br/><nobr></nobr></td>
		<td class="cs6105B8F3" colspan="2" style="width:71px;height:22px;line-height:15px;text-align:left;vertical-align:top;"><nobr>Est&nbsp;n&#233;(e)&nbsp;&#224;</nobr></td>
		<td class="csFB8F06" colspan="4" rowspan="3" style="width:92px;height:48px;line-height:15px;text-align:left;vertical-align:top;"><nobr>' . $val['LIEU'] . '</nobr><br/><nobr></nobr><br/><nobr></nobr></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:11px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:15px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td class="cs6105B8F3" colspan="6" style="width:93px;height:22px;line-height:15px;text-align:left;vertical-align:top;"><nobr>Le&nbsp;(la)&nbsp;nomm&#233;e</nobr></td>
		<td class="csFB8F06" colspan="7" style="width:263px;height:22px;line-height:15px;text-align:left;vertical-align:top;"><nobr>' . $val['NOM'] . ' ' . $val['POSTNOM'] . ' ' . $val['PRENOM'] . '</nobr></td>
		<td class="cs6105B8F3" colspan="2" style="width:69px;height:22px;line-height:15px;text-align:left;vertical-align:top;"><nobr>fils/fille&nbsp;de</nobr></td>
		<td class="csFB8F06" colspan="6" rowspan="2" style="width:191px;height:33px;line-height:15px;text-align:left;vertical-align:top;"><nobr>' . $val['PERE'] . '</nobr><br/><nobr></nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:11px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:23px;"></td>
		<td class="cs6105B8F3" colspan="2" style="width:33px;height:23px;line-height:15px;text-align:left;vertical-align:top;"><nobr>et&nbsp;de</nobr></td>
		<td class="csFB8F06" colspan="6" rowspan="2" style="width:130px;height:34px;line-height:15px;text-align:left;vertical-align:top;"><nobr>' . $val['MERE'] . '</nobr><br/><nobr></nobr></td>
		<td class="cs6105B8F3" colspan="2" style="width:118px;height:23px;line-height:15px;text-align:left;vertical-align:top;"><nobr>r&#233;sidant&nbsp;&#224;&nbsp;l\'adresse</nobr></td>
		<td class="csFB8F06" colspan="7" rowspan="2" style="width:176px;height:34px;line-height:15px;text-align:left;vertical-align:top;"><nobr>' . $val['ADDRESSE'] . '</nobr><br/><nobr></nobr></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	
	<tr style="vertical-align:top;">
		<td style="width:0px;height:10px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>';
}
$html .= '<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td class="cs6105B8F3" colspan="4" style="width:93px;height:22px;line-height:15px;text-align:left;vertical-align:top;"><nobr>Fait&nbsp;&#224;&nbsp;Goma,&nbsp;le</nobr></td>
		<td class="csFB8F06" colspan="5" rowspan="2" style="width:178px;height:33px;line-height:15px;text-align:left;vertical-align:top;"><nobr>' . $current . '</nobr><br/><nobr></nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:11px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:23px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td class="cs5EA817F2" colspan="9" style="width:271px;height:23px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>Officier&nbsp;de&nbsp;l\'Etat&nbsp;Civil&nbsp;et&nbsp;Mairie&nbsp;de&nbsp;Goma</nobr></td>
	</tr>
</table>
</body>
</html>';

$dompdf = new Dompdf();
$option = new Options();
$option->set('chroot', realpath(''));
$dompdf = new Dompdf($option);
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A5', 'landscape');

// Render the HTML as PDF

$dompdf->render();

// Output the generated PDF to Browser
ob_clean();
$dompdf->stream('Actedenaissance.pdf', ['Attachment' => false]);
