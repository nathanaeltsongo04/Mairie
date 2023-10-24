<?php
require('./dompdf/autoload.inc.php');
require('./classes/linkdb.php');
require('./classes/paiement.php');

$data = new paiement();
$data->setCODEPAYEMENT($_GET['id']);
$data->livraison();
$all = $data->residence();


// reference the Dompdf namespace
use Dompdf\Dompdf;
use Dompdf\Options;

$current = date('d/m/Y');
$a = 'Content-Type';
$b = 'text/html; charset=utf-8';

$html .= '
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0014)about:internet -->
<html>

    <head>
        <title>Attestation de Residence</title>
        <meta HTTP-EQUIV=' . $a . ' CONTENT=' . $b . ' />
        <style type="text/css">
        .csFB8F06 {
            color: #000000;
            background-color: transparent;
            border-left-style: none;
            border-top-style: none;
            border-right-style: none;
            border-bottom-style: none;
            font-family: Times New Roman;
            font-size: 13px;
            font-weight: bold;
            font-style: italic;
            padding-left: 2px;
        }

        .cs101A94F7 {
            color: #000000;
            background-color: transparent;
            border-left-style: none;
            border-top-style: none;
            border-right-style: none;
            border-bottom-style: none;
            font-family: Times New Roman;
            font-size: 13px;
            font-weight: normal;
            font-style: normal;
        }

        .cs6105B8F3 {
            color: #000000;
            background-color: transparent;
            border-left-style: none;
            border-top-style: none;
            border-right-style: none;
            border-bottom-style: none;
            font-family: Times New Roman;
            font-size: 13px;
            font-weight: normal;
            font-style: normal;
            padding-left: 2px;
        }

        .cs5EA817F2 {
            color: #000000;
            background-color: transparent;
            border-left-style: none;
            border-top-style: none;
            border-right-style: none;
            border-bottom-style: none;
            font-family: Times New Roman;
            font-size: 13px;
            font-weight: normal;
            font-style: normal;
            padding-left: 2px;
            padding-right: 2px;
        }

        .cs2A8593E6 {
            color: #000000;
            background-color: transparent;
            border-left-style: none;
            border-top-style: none;
            border-right-style: none;
            border-bottom-style: none;
            font-family: Times New Roman;
            font-size: 15px;
            font-weight: normal;
            font-style: normal;
            padding-left: 2px;
            padding-right: 2px;
        }

        .cs739196BC {
            color: #5C5C5C;
            background-color: transparent;
            border-left-style: none;
            border-top-style: none;
            border-right-style: none;
            border-bottom-style: none;
            font-family: Segoe UI;
            font-size: 11px;
            font-weight: normal;
            font-style: normal;
        }

        .csF7D3565D {
            height: 0px;
            width: 0px;
            overflow: hidden;
            font-size: 0px;
            line-height: 0px;
        }
        </style>
    </head>

    <body leftMargin=10 topMargin=10 rightMargin=10 bottomMargin=10 style="background-color:#FFFFFF">
        <table cellpadding="0" cellspacing="0" border="0"
            style="border-width:0px;empty-cells:show;width:624px;height:400px;position:relative;">
            <tr>
                <td style="width:0px;height:0px;"></td>
                <td style="height:0px;width:10px;"></td>
                <td style="height:0px;width:47px;"></td>
                <td style="height:0px;width:14px;"></td>
                <td style="height:0px;width:24px;"></td>
                <td style="height:0px;width:14px;"></td>
                <td style="height:0px;width:11px;"></td>
                <td style="height:0px;width:109px;"></td>
                <td style="height:0px;width:12px;"></td>
                <td style="height:0px;width:34px;"></td>
                <td style="height:0px;width:63px;"></td>
                <td style="height:0px;width:11px;"></td>
                <td style="height:0px;width:11px;"></td>
                <td style="height:0px;width:47px;"></td>
                <td style="height:0px;width:2px;"></td>
                <td style="height:0px;width:35px;"></td>
                <td style="height:0px;width:47px;"></td>
                <td style="height:0px;width:22px;"></td>
                <td style="height:0px;width:2px;"></td>
                <td style="height:0px;width:99px;"></td>
                <td style="height:0px;width:10px;"></td>
            </tr>
            <tr style="vertical-align:top;">
                <td style="width:0px;height:23px;"></td>
                <td class="cs739196BC" colspan="14"
                    style="width:409px;height:23px;line-height:14px;text-align:center;vertical-align:middle;">
                    <nobr>
                        
                    </nobr>
                </td>
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
            </tr>
            <tr style="vertical-align:top;">
                <td style="width:0px;height:2px;"></td>
                <td></td>
                <td class="cs101A94F7" colspan="4" rowspan="4"
                    style="width:99px;height:69px;text-align:left;vertical-align:top;">
                    <div style="overflow:hidden;width:99px;height:69px;">
                        <img src="./assets/img/flag.png" width="83px" height="69px">
                    </div>
                </td>
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
                <td class="cs101A94F7" rowspan="4" style="width:99px;height:69px;text-align:left;vertical-align:top;">
                    <div style="overflow:hidden;width:99px;height:69px;">
                        <img src="./assets/img/armoirie.png" width="83px" height="69px">
                    </div>
                </td>
                <td></td>
            </tr>
            <tr style="vertical-align:top;">
                <td style="width:0px;height:23px;"></td>
                <td></td>
                <td></td>
                <td class="cs2A8593E6" colspan="10"
                    style="width:367px;height:23px;line-height:17px;text-align:center;vertical-align:middle;">
                    <nobr>REPUBLIQUE&nbsp;DEMOCRATIQUE&nbsp;DU&nbsp;CONGO</nobr>
                </td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr style="vertical-align:top;">
                <td style="width:0px;height:22px;"></td>
                <td></td>
                <td></td>
                <td class="cs2A8593E6" colspan="10"
                    style="width:367px;height:22px;line-height:17px;text-align:center;vertical-align:middle;">
                    <nobr>PROVINCE&nbsp;DU&nbsp;NORD-KIVU</nobr>
                </td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr style="vertical-align:top;">
                <td style="width:0px;height:22px;"></td>
                <td></td>
                <td></td>
                <td class="cs2A8593E6" colspan="10"
                    style="width:367px;height:22px;line-height:17px;text-align:center;vertical-align:middle;">
                    <nobr>ATTESTATION&nbsp;DE&nbsp;RESIDENCE</nobr>
                </td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr style="vertical-align:top;">
                <td style="width:0px;height:30px;"></td>
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
                <td class="cs6105B8F3" colspan="13"
                    style="width:405px;height:22px;line-height:15px;text-align:left;vertical-align:top;">
                    <nobr>
                        La&nbsp;mairie&nbsp;de&nbsp;la&nbsp;r&#233;publique&nbsp;d&#233;mocratique&nbsp;de&nbsp;Congo&nbsp;par&nbsp;la&nbsp;pr&#233;sente,&nbsp;que
                    </nobr>
                </td>
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
                <td class="cs6105B8F3" colspan="4"
                    style="width:93px;height:22px;line-height:15px;text-align:left;vertical-align:top;">
                    <nobr>&nbsp;Mr/Mme/Mlle</nobr>
                </td>
                <td class="csFB8F06" colspan="8"
                    style="width:263px;height:22px;line-height:15px;text-align:left;vertical-align:top;">
                    <nobr>' . $val['NOM'] . ' ' . $val['POSTNOM'] . ' ' . $val['PRENOM'] . '</nobr>
                </td>
                <td class="cs6105B8F3"
                    style="width:45px;height:22px;line-height:15px;text-align:left;vertical-align:top;">
                    <nobr>n&#233;(e)&nbsp;le</nobr>
                </td>
                <td class="csFB8F06" colspan="4" rowspan="2"
                    style="width:104px;height:33px;line-height:15px;text-align:left;vertical-align:top;">
                    <nobr>' . $val['DDATE'] . '</nobr><br />
                    <nobr></nobr>
                </td>
                <td></td>
                <td></td>
                <td></td>
            </tr>            
            <tr style="vertical-align:top;">
                <td style="width:0px;height:22px;"></td>
                <td class="cs6105B8F3" colspan="3"
                    style="width:69px;height:22px;line-height:15px;text-align:left;vertical-align:top;">
                    <nobr>fils/fille&nbsp;de</nobr>
                </td>
                <td class="csFB8F06" colspan="5" rowspan="2"
                    style="width:168px;height:34px;line-height:15px;text-align:left;vertical-align:top;">
                    <nobr>' . $val['PERE'] . '</nobr><br />
                    <nobr></nobr>
                </td>
                <td class="cs6105B8F3"
                    style="width:32px;height:22px;line-height:15px;text-align:left;vertical-align:top;">
                    <nobr>et&nbsp;de</nobr>
                </td>
                <td class="csFB8F06" colspan="4" rowspan="2"
                    style="width:130px;height:34px;line-height:15px;text-align:left;vertical-align:top;">
                    <nobr>' . $val['MERE'] . '</nobr><br />
                    <nobr></nobr>
                </td>
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
                <td class="cs6105B8F3" colspan="7"
                    style="width:227px;height:22px;line-height:15px;text-align:left;vertical-align:top;">
                    <nobr>Titulaire&nbsp;du&nbsp;passport/Carte&nbsp;d\'&#233;lecteur&nbsp;n&#176;</nobr>
                </td>
                <td class="csFB8F06" colspan="3" rowspan="2"
                    style="width:107px;height:33px;line-height:15px;text-align:left;vertical-align:top;">
                    <nobr>' . $val['PIECE'] . '</nobr><br />
                    <nobr></nobr>
                </td>
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
                <td class="cs6105B8F3" colspan="2"
                    style="width:55px;height:23px;line-height:15px;text-align:left;vertical-align:top;">
                    <nobr>a&nbsp;r&#233;sid&#233;</nobr>
                </td>
                <td class="csFB8F06" colspan="18"
                    style="width:565px;height:23px;line-height:15px;text-align:left;vertical-align:top;">
                    <nobr>' . $val['ADDRESSE'] . '</nobr>
                </td>
            </tr>
            <tr style="vertical-align:top;">
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
                <td class="cs5EA817F2" colspan="20"
                    style="width:620px;height:22px;line-height:15px;text-align:center;vertical-align:middle;">
                    <nobr>
                        En&nbsp;foi&nbsp;de&nbsp;quoi,&nbsp;le&nbsp;pr&#233;sent&nbsp;document&nbsp;est&nbsp;&#233;tabli&nbsp;et&nbsp;d&#233;livr&#233;&nbsp;pour&nbsp;servir&nbsp;et&nbsp;valoir&nbsp;ce&nbsp;que&nbsp;de&nbsp;droit
                    </nobr>
                </td>
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
            </tr>
            <tr style="vertical-align:top;">
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
                <td class="cs6105B8F3" colspan="4"
                    style="width:93px;height:22px;line-height:15px;text-align:left;vertical-align:top;">
                    <nobr>Fait&nbsp;&#224;&nbsp;Goma,&nbsp;le</nobr>
                </td>
                <td class="csFB8F06" colspan="5" rowspan="2"
                    style="width:178px;height:34px;line-height:15px;text-align:left;vertical-align:top;">
                    <nobr>' . $current . '</nobr><br />
                    <nobr></nobr>
                </td>
            </tr>
            <tr style="vertical-align:top;">
                <td style="width:0px;height:12px;"></td>
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
                <td class="cs5EA817F2" colspan="9"
                    style="width:271px;height:22px;line-height:15px;text-align:center;vertical-align:middle;">
                    <nobr>Officier&nbsp;de&nbsp;l\'Etat&nbsp;Civil&nbsp;et&nbsp;Mairie&nbsp;de&nbsp;Goma</nobr>
                </td>
            </tr>
        </table>
    </body>

</html>
';

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
$dompdf->stream('Attesationderesidence.pdf', ['Attachment' => false]);
