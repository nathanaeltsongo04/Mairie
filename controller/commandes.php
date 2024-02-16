<?php
require('../classes/linkdb.php');
require('../classes/citoyens.php');
require('../classes/commandes.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require('../PHPMailer/src/Exception.php');
require('../PHPMailer/src/PHPMailer.php');
require('../PHPMailer/src/SMTP.php');

$data = new Citoyens();


$commande = new commandes();
$codecitoyen;
$to = 'nathanaeltsongo04@gmail.com';

if (isset($_GET['vieetmoeurs'])) {
    try {
        $data->setNOM($_POST['nom']);
        $data->setPOSTNOM($_POST['postnom']);
        $data->setPRENOM($_POST['prenom']);
        $data->setNATIONALITE($_POST['nationalite']);
        $data->setLIEUDENAISSANCE($_POST['lieudenaissance']);
        $data->setDATEDENAISSANCE($_POST['datedenaissance']);
        $data->setPERE($_POST['pere']);
        $data->setMERE($_POST['mere']);
        $data->setETATCIVIL($_POST['etatcivil']);
        $data->setPROFESSION($_POST['profession']);
        $data->setTERRITOIRE($_POST['territoire']);
        $data->setPROVINCE($_POST['province']);
        $data->setCONTACT($_POST['contact']);
        $data->setEMAIL($_POST['email']);
        $data->vieetmoeurs();

        $rs = $data->getlast();
        foreach ($rs as $key => $val) {

            $commande->setDECLARANT($val['CODECITOYEN']);
        }

        $commande->setDOCUMENT($_POST['document']);
        $commande->inserer();

        $email = $to;
        $subject = "Attestation de Bonne conduite , Vie et Moeurs";
        $message = "Vous avez une commande " . $subject . " de la part de " . $_POST['nom'] . " " . $_POST['postnom'] . " " . $_POST['prenom'];

        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'nathanaeltsongo04@gmail.com';
        $mail->Password = 'ienz rbrx gfcv xqte';
        $mail->Port = 465;
        $mail->SMTPSecure = 'ssl';
        $mail->isHTML(true);
        $mail->setFROM($email, "Mairie Client");
        $mail->addAddress($to);
        $mail->Subject = ("$subject");
        $mail->Body = $message;
        $mail->send();

        header('location:../index.php?msg=true&info=Sent Successfully');
    } catch (Exception $e) {
        return $e;
    }
} elseif (isset($_GET['actenaissance'])) {
    try {
        $data->setNOM($_POST['nom']);
        $data->setPOSTNOM($_POST['postnom']);
        $data->setPRENOM($_POST['prenom']);
        $data->setNATIONALITE($_POST['nationalite']);
        $data->setLIEUDENAISSANCE($_POST['lieudenaissance']);
        $data->setDATEDENAISSANCE($_POST['datedenaissance']);
        $data->setPERE($_POST['pere']);
        $data->setMERE($_POST['mere']);
        $data->setADRESSE($_POST['adresse']);
        $data->setCONTACT($_POST['contact']);
        $data->setEMAIL($_POST['email']);
        $data->actenaissance();

        $rs = $data->getlast();
        foreach ($rs as $key => $val) {

            $commande->setDECLARANT($val['CODECITOYEN']);
        }
        $commande->setDOCUMENT($_POST['document']);
        $commande->inserer();

        $email = $to;
        $subject = "Acte de Naissance";
        $message = "Vous avez une commande " . $subject . " de la part de " . $_POST['nom'] . " " . $_POST['postnom'] . " " . $_POST['prenom'];

        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'nathanaeltsongo04@gmail.com';
        $mail->Password = 'ienz rbrx gfcv xqte';
        $mail->Port = 465;
        $mail->SMTPSecure = 'ssl';
        $mail->isHTML(true);
        $mail->setFROM($email, "Mairie Client");
        $mail->addAddress($to);
        $mail->Subject = ("$subject");
        $mail->Body = $message;
        $mail->send();

        header('location:../index.php?msg=true&info=Sent Successfully');
    } catch (Exception $e) {
        return $e;
    }
} elseif (isset($_GET['residence'])) {
    try {
        $data->setNOM($_POST['nom']);
        $data->setPOSTNOM($_POST['postnom']);
        $data->setPRENOM($_POST['prenom']);
        $data->setIDCARTE($_POST['idcarte']);
        $data->setGENRE($_POST['genre']);
        $data->setDATEDENAISSANCE($_POST['datedenaissance']);
        $data->setPERE($_POST['pere']);
        $data->setMERE($_POST['mere']);
        $data->setADRESSE($_POST['adresse']);
        $data->setCONTACT($_POST['contact']);
        $data->setEMAIL($_POST['email']);
        $data->residence();

        $rs = $data->getlast();
        foreach ($rs as $key => $val) {

            $commande->setDECLARANT($val['CODECITOYEN']);
        }
        $commande->setDOCUMENT($_POST['document']);
        $commande->inserer();

        $email = $to;
        $subject = "Attestation de Residence";
        $message = "Vous avez une commande " . $subject . " de la part de " . $_POST['nom'] . " " . $_POST['postnom'] . " " . $_POST['prenom'];

        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'nathanaeltsongo04@gmail.com';
        $mail->Password = 'ienz rbrx gfcv xqte';
        $mail->Port = 465;
        $mail->SMTPSecure = 'ssl';
        $mail->isHTML(true);
        $mail->setFROM($email, "Mairie Client");
        $mail->addAddress($to);
        $mail->Subject = ("$subject");
        $mail->Body = $message;
        $mail->send();




        header('location:../index.php?msg=true&info=Sent Successfully');
    } catch (Exception $e) {
        return $e;
    }
}