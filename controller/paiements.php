<?php
require('../classes/linkdb.php');
require('../classes/paiement.php');
require('../classes/commandes.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require('../PHPMailer/src/Exception.php');
require('../PHPMailer/src/PHPMailer.php');
require('../PHPMailer/src/SMTP.php');


$data = new paiement();
$auteur = $_SESSION['postnom'] . " " . $_SESSION['prenom'];

$to = $_GET['contact'];

if (isset($_POST['save'])) {
    try {
        $data->setCOMMANDE($_POST['id']);
        $data->setMONTANT($_POST['montant']);
        $data->setAuteur($auteur);
        $data->inserer();
        $data = new commandes();
        $data->setCODECOMMANDE($_POST['id']);
        $data->paid();

        $email = $to;
        $subject = "Paiement";
        $message = "Vous avez payé " . $_POST['montant'] . "Fc en raison de votre commande, " . $_POST['document'] . "; veuillez passer au Bureau II; pour récuperer votre document ";

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

        header('location:../commandes.php?msg=true&info=Cash in Successfully');
    } catch (Exception $e) {
        return $e;
    }
}
