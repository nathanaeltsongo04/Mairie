<?php
require('./dompdf/autoload.inc.php');
require('./classes/linkdb.php');
require('./classes/paiement.php');

$data = new paiement();
$data->setCODEPAYEMENT($_GET['id']);
$data->livraison();
$all = $data->bonnevie();


// reference the Dompdf namespace
use Dompdf\Dompdf;
use Dompdf\Options;

$current = date('d/m/Y');
$a = 'Content-Type';
$b = 'text/html; charset=utf-8';

$html .= '<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0014)about:internet -->
<html>

    <head>
        <title>residence</title>
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

        .cs8BD51C12 {
            color: #000000;
            background-color: transparent;
            border-left-style: none;
            border-top-style: none;
            border-right-style: none;
            border-bottom-style: none;
            font-family: Times New Roman;
            font-size: 13px;
            font-weight: bold;
            font-style: normal;
            padding-left: 2px;
            padding-right: 2px;
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
            style="border-width:0px;empty-cells:show;width:624px;height:413px;position:relative;">
            <tr>
                <td style="width:0px;height:0px;"></td>
                <td style="height:0px;width:2px;"></td>
                <td style="height:0px;width:8px;"></td>
                <td style="height:0px;width:61px;"></td>
                <td style="height:0px;width:2px;"></td>
                <td style="height:0px;width:10px;"></td>
                <td style="height:0px;width:12px;"></td>
                <td style="height:0px;width:14px;"></td>
                <td style="height:0px;width:12px;"></td>
                <td style="height:0px;width:24px;"></td>
                <td style="height:0px;width:35px;"></td>
                <td style="height:0px;width:1px;"></td>
                <td style="height:0px;width:35px;"></td>
                <td style="height:0px;width:23px;"></td>
                <td style="height:0px;width:26px;"></td>
                <td style="height:0px;width:12px;"></td>
                <td style="height:0px;width:68px;"></td>
                <td style="height:0px;width:4px;"></td>
                <td style="height:0px;width:48px;"></td>
                <td style="height:0px;width:12px;"></td>
                <td style="height:0px;width:21px;"></td>
                <td style="height:0px;width:14px;"></td>
                <td style="height:0px;width:27px;"></td>
                <td style="height:0px;width:40px;"></td>
                <td style="height:0px;width:6px;"></td>
                <td style="height:0px;width:14px;"></td>
                <td style="height:0px;width:43px;"></td>
                <td style="height:0px;width:40px;"></td>
                <td style="height:0px;width:10px;"></td>
            </tr>
            <tr style="vertical-align:top;">
                <td style="width:0px;height:23px;"></td>
                <td class="cs739196BC" colspan="19"
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
                <td class="cs101A94F7" colspan="4" rowspan="4"
                    style="width:85px;height:69px;text-align:left;vertical-align:top;">
                    <div style="overflow:hidden;width:85px;height:69px;">
                        <img src="./assets/img/flag.png" width="85px" height="69px">
                    </div>
                </td>
                <td></td>
                <td class="cs2A8593E6" colspan="17"
                    style="width:404px;height:22px;line-height:17px;text-align:center;vertical-align:middle;">
                    <nobr>REPUBLIQUE&nbsp;DEMOCRATIQUE&nbsp;DU&nbsp;CONGO</nobr>
                </td>
                <td></td>
                <td class="cs101A94F7" colspan="2" rowspan="4"
                    style="width:83px;height:69px;text-align:left;vertical-align:top;">
                    <div style="overflow:hidden;width:83px;height:69px;">
                        <img src="./assets/img/armoirie.png" width="83px" height="69px">
                    </div>
                </td>
                <td></td>
            </tr>
            <tr style="vertical-align:top;">
                <td style="width:0px;height:22px;"></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="cs2A8593E6" colspan="17"
                    style="width:404px;height:22px;line-height:17px;text-align:center;vertical-align:middle;">
                    <nobr>PROVINCE&nbsp;DU&nbsp;NORD-KIVU</nobr>
                </td>
                <td></td>
                <td></td>
            </tr>
            <tr style="vertical-align:top;">
                <td style="width:0px;height:22px;"></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="cs2A8593E6" colspan="17"
                    style="width:404px;height:22px;line-height:17px;text-align:center;vertical-align:middle;">
                    <nobr>ATTESTATION&nbsp;DE&nbsp;BONNE&nbsp;CONDUITE&nbsp;VIE&nbsp;ET&nbsp;MOEURS</nobr>
                </td>
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
                <td class="cs6105B8F3" colspan="5"
                    style="width:81px;height:22px;line-height:15px;text-align:left;vertical-align:top;">
                    <nobr>Je&nbsp;sousigne</nobr>
                </td>
                <td class="csFB8F06" colspan="6"
                    style="width:96px;height:22px;line-height:15px;text-align:left;vertical-align:top;">
                    <nobr>' . $_SESSION['postnom'] . '' . $_SESSION['prenom'] . '</nobr>
                </td>
                <td class="cs6105B8F3" colspan="17"
                    style="width:445px;height:22px;line-height:15px;text-align:left;vertical-align:top;">
                    <nobr>
                             officier&nbsp;de&nbsp;l\'Etat&nbsp;Civil&nbsp;et&nbsp;Mairie&nbsp;de&nbsp;Goma,&nbsp;certifie&nbsp;que&nbsp;Mr,Mme,Mlle&nbsp;:
                    </nobr>
                </td>
            </tr>
            <tr style="vertical-align:top;">
                <td style="width:0px;height:22px;"></td>
                <td></td>
                <td class="csFB8F06" colspan="10"
                    style="width:177px;height:22px;line-height:15px;text-align:left;vertical-align:top;">
                    <nobr>' . $val['NOM'] . ' ' . $val['POSTNOM'] . ' ' . $val['PRENOM'] . '</nobr>
                </td>
                <td class="cs6105B8F3" colspan="3"
                    style="width:82px;height:22px;line-height:15px;text-align:left;vertical-align:top;">
                    <nobr>de&nbsp;Nationalit&#233;</nobr>
                </td>
                <td class="csFB8F06" colspan="2"
                    style="width:78px;height:22px;line-height:15px;text-align:left;vertical-align:top;">
                    <nobr>' . $val['NATIONALITE'] . '</nobr>
                </td>
                <td class="cs6105B8F3" colspan="2"
                    style="width:50px;height:22px;line-height:15px;text-align:left;vertical-align:top;">
                    <nobr>n&#233;(e)&nbsp;&#224;</nobr>
                </td>
                <td class="csFB8F06" colspan="3"
                    style="width:45px;height:22px;line-height:15px;text-align:left;vertical-align:top;">
                    <nobr>' . $val['LIEU'] . '</nobr>
                </td>
                <td class="cs6105B8F3"
                    style="width:25px;height:22px;line-height:15px;text-align:left;vertical-align:top;">
                    <nobr>&nbsp;&nbsp;le</nobr>
                </td>
                <td class="csFB8F06" colspan="4"
                    style="width:101px;height:22px;line-height:15px;text-align:left;vertical-align:top;">
                    <nobr>' . $val['DDATE'] . '</nobr>
                </td>
                <td></td>
                <td></td>
            </tr>
            <tr style="vertical-align:top;">
                <td style="width:0px;height:22px;"></td>
                <td class="cs6105B8F3" colspan="3"
                    style="width:69px;height:22px;line-height:15px;text-align:left;vertical-align:top;">
                    <nobr>fils/fille&nbsp;de</nobr>
                </td>
                <td></td>
                <td class="csFB8F06" colspan="5"
                    style="width:70px;height:22px;line-height:15px;text-align:left;vertical-align:top;">
                    <nobr>' . $val['PERE'] . '</nobr>
                </td>
                <td class="cs6105B8F3"
                    style="width:33px;height:22px;line-height:15px;text-align:left;vertical-align:top;">
                    <nobr>et&nbsp;de</nobr>
                </td>
                <td class="csFB8F06" colspan="4"
                    style="width:83px;height:22px;line-height:15px;text-align:left;vertical-align:top;">
                    <nobr>' . $val['MERE'] . '</nobr>
                </td>
                <td class="cs6105B8F3" colspan="2"
                    style="width:78px;height:22px;line-height:15px;text-align:left;vertical-align:top;">
                    <nobr>,&nbsp;Etat&nbsp;Civil</nobr>
                </td>
                <td class="csFB8F06" colspan="4"
                    style="width:83px;height:22px;line-height:15px;text-align:left;vertical-align:top;">
                    <nobr>' . $val['ETATCIVIL'] . '</nobr>
                </td>
                <td class="cs6105B8F3" colspan="3"
                    style="width:79px;height:22px;line-height:15px;text-align:left;vertical-align:top;">
                    <nobr>,Profession</nobr>
                </td>
                <td class="csFB8F06" colspan="5"
                    style="width:111px;height:22px;line-height:15px;text-align:left;vertical-align:top;">
                    <nobr>' . $val['PROFESSION'] . '</nobr>
                </td>
            </tr>
            <tr style="vertical-align:top;">
                <td style="width:0px;height:22px;"></td>
                <td class="cs6105B8F3" colspan="8"
                    style="width:119px;height:22px;line-height:15px;text-align:left;vertical-align:top;">
                    <nobr>,Territoire&nbsp;d\'origine</nobr>
                </td>
                <td class="csFB8F06" colspan="4"
                    style="width:93px;height:22px;line-height:15px;text-align:left;vertical-align:top;">
                    <nobr>' . $val['TERRITOIRE'] . '</nobr>
                </td>
                <td class="cs6105B8F3" colspan="3"
                    style="width:59px;height:22px;line-height:15px;text-align:left;vertical-align:top;">
                    <nobr>,Province</nobr>
                </td>
                <td class="csFB8F06" colspan="5"
                    style="width:151px;height:22px;line-height:15px;text-align:left;vertical-align:top;">
                    <nobr>' . $val['PROVINCE'] . '</nobr>
                </td>
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
                <td class="cs6105B8F3" colspan="12"
                    style="width:235px;height:22px;line-height:15px;text-align:left;vertical-align:top;">
                    <nobr>En&nbsp;R&#233;publique&nbsp;Democratique&nbsp;du&nbsp;Congo</nobr>
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
                <td style="width:0px;height:68px;"></td>
                <td></td>
                <td class="cs6105B8F3" colspan="27"
                    style="width:620px;height:68px;line-height:15px;text-align:left;vertical-align:top;">
                    <nobr>
                        -Condanation&nbsp;&#224;&nbsp;plus&nbsp;de&nbsp;5&nbsp;ans&nbsp;de&nbsp;servitude&nbsp;p&#233;nale&nbsp;encourue&nbsp;au&nbsp;congo&nbsp;pendant&nbsp;20&nbsp;ans&nbsp;ann&#233;es&nbsp;pr&#233;cedentes:N&#233;ant
                    </nobr><br />
                    <nobr>
                        -Mention&nbsp;&#233;ventuelle&nbsp;d\'une&nbsp;mesure&nbsp;d\'expulsion&nbsp;au&nbsp;congo:&nbsp;N&#233;ant
                    </nobr><br />
                    <nobr>
                        -Condanation&nbsp;&#224;&nbsp;moins&nbsp;de&nbsp;15&nbsp;jours&nbsp;de&nbsp;servitude&nbsp;p&#233;nale&nbsp;ou&nbsp;&#224;&nbsp;une&nbsp;amande&nbsp;inf&#233;rieure&nbsp;&#224;&nbsp;100&nbsp;Fc&nbsp;encourue&nbsp;au&nbsp;congo
                    </nobr><br />
                    <nobr>pendant&nbsp;l\'ann&#233;e&nbsp;pr&#233;c&#233;dente:&nbsp;N&#233;ant</nobr>
                </td>
            </tr>
            <tr style="vertical-align:top;">
                <td style="width:0px;height:16px;"></td>
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
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>';
}
$html .= '
            <tr style="vertical-align:top;">
                <td style="width:0px;height:22px;"></td>
                <td></td>
                <td class="cs8BD51C12" colspan="27"
                    style="width:618px;height:22px;line-height:15px;text-align:center;vertical-align:top;">
                    <nobr>
                        Est&nbsp;de&nbsp;Bonne&nbsp;Conduite,Vie&nbsp;et&nbsp;Moeurs&nbsp;et&nbsp;que&nbsp;son&nbsp;attitude&nbsp;civique&nbsp;n\'a&nbsp;donn&#233;e&nbsp;lieu&nbsp;&#224;&nbsp;aucun&nbsp;reproche
                    </nobr>
                </td>
            </tr>
            <tr style="vertical-align:top;">
                <td style="width:0px;height:13px;"></td>
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
                <td class="csFB8F06" colspan="7"
                    style="width:178px;height:22px;line-height:15px;text-align:left;vertical-align:top;">
                    <nobr>' . $current . '</nobr>
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
                <td class="cs5EA817F2" colspan="11"
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
