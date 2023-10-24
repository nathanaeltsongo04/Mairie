<?php
class paiement
{
    private $CODEPAYEMENT;
    private $COMMANDE;
    private $MONTANT;
    private $DDATE;
    private $VISIBLE;
    private $STATUT;
    private $AUTEUR;


    public function getCODEPAYEMENT()
    {
        return $this->CODEPAYEMENT;
    }

    public function setCODEPAYEMENT($value)
    {
        $this->CODEPAYEMENT = $value;
    }
    public function getCOMMANDE()
    {
        return $this->COMMANDE;
    }

    public function setCOMMANDE($value)
    {
        $this->COMMANDE = $value;
    }

    public function getMONTANT()
    {
        return $this->MONTANT;
    }

    public function setMONTANT($value)
    {
        $this->MONTANT = $value;
    }

    public function getDDATE()
    {
        return $this->DDATE;
    }

    public function setDDATE($value)
    {
        $this->DDATE = $value;
    }

    public function getVISIBLE()
    {
        return $this->VISIBLE;
    }

    public function setVISIBLE($value)
    {
        $this->VISIBLE = $value;
    }
    public function getSTATUT()
    {
        return $this->STATUT;
    }

    public function setSTATUT($value)
    {
        $this->STATUT = $value;
    }

    public function getAUTEUR()
    {
        return $this->AUTEUR;
    }

    public function setAUTEUR($value)
    {
        $this->AUTEUR = $value;
    }

    public function inserer()
    {

        $con = new Database();
        $connect = $con->open();
        try {
            $stmt = $connect->prepare("INSERT INTO `payement`( `COMMANDE`,`MONTANT`, `VISIBLE`,`STATUT` ,`AUTEUR`) VALUES (?,?,?,?,?)");
            $stmt->execute([$this->COMMANDE, $this->MONTANT, $this->VISIBLE = 1, $this->STATUT = 0, $this->AUTEUR]);
            $con->close();
        } catch (Exception $e) {
            return $this->$e;
        }
    }

    public function afficher()
    {
        $con = new Database();
        $connect = $con->open();
        try {
            $stmt = $connect->prepare("SELECT payement.CODEPAYEMENT as CODEPAYEMENT,citoyen.NOM,citoyen.POSTNOM,citoyen.PRENOM,document.DESIGNATION as DOCUMENT, payement.MONTANT as MONTANT, payement.DDATE as DDATE, payement.STATUT as STATUT, payement.AUTEUR as AUTEUR FROM `payement` inner join commande on payement.COMMANDE=commande.CODECOMMANDE inner join citoyen on commande.DECLARANT= citoyen.CODECITOYEN inner join document on commande.DOCUMENT=document.CODEDOCUMENT WHERE payement.VISIBLE=? ORDER BY payement.STATUT ASC ");
            $stmt->execute([$this->VISIBLE = 1]);
            return $stmt->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function naissance()
    {
        $con = new Database();
        $connect = $con->open();
        try {
            $stmt = $connect->prepare("SELECT citoyen.NOM as NOM,citoyen.POSTNOM as POSTNOM, citoyen.PRENOM as PRENOM, citoyen.DATEDENAISSANCE as DDATE,citoyen.LIEUDENAISSANCE as LIEU,citoyen.PERE as PERE, citoyen.MERE as MERE,citoyen.ADRESSE as ADDRESSE FROM `payement` inner join commande on payement.COMMANDE = commande.CODECOMMANDE inner join citoyen on commande.DECLARANT=citoyen.CODECITOYEN WHERE payement.CODEPAYEMENT=?");
            $stmt->execute([$this->CODEPAYEMENT]);
            return $stmt->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function residence()
    {
        $con = new Database();
        $connect = $con->open();
        try {
            $stmt = $connect->prepare("SELECT citoyen.NOM as NOM,citoyen.POSTNOM as POSTNOM, citoyen.PRENOM as PRENOM, citoyen.DATEDENAISSANCE as DDATE,citoyen.IDCARTE as PIECE,citoyen.PERE as PERE, citoyen.MERE as MERE,citoyen.ADRESSE as ADDRESSE FROM `payement` inner join commande on payement.COMMANDE = commande.CODECOMMANDE inner join citoyen on commande.DECLARANT=citoyen.CODECITOYEN WHERE payement.CODEPAYEMENT=?");
            $stmt->execute([$this->CODEPAYEMENT]);
            return $stmt->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function bonnevie()
    {
        $con = new Database();
        $connect = $con->open();
        try {
            $stmt = $connect->prepare("SELECT citoyen.NOM as NOM,citoyen.POSTNOM as POSTNOM, citoyen.PRENOM as PRENOM, citoyen.DATEDENAISSANCE as DDATE,citoyen.LIEUDENAISSANCE as LIEU,citoyen.NATIONALITE as NATIONALITE,citoyen.ETATCIVIL as ETATCIVIL,citoyen.PROFESSION as PROFESSION,citoyen.TERRITOIRE as TERRITOIRE,citoyen.PROVINCE as PROVINCE,citoyen.PERE as PERE, citoyen.MERE as MERE FROM `payement` inner join commande on payement.COMMANDE = commande.CODECOMMANDE inner join citoyen on commande.DECLARANT=citoyen.CODECITOYEN WHERE payement.CODEPAYEMENT=?");
            $stmt->execute([$this->CODEPAYEMENT]);
            return $stmt->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function documentlivre()
    {
        $con = new Database();
        $connect = $con->open();
        try {
            $stmt = $connect->prepare("SELECT COUNT(STATUT) as TOTAL FROM`payement` WHERE VISIBLE=? AND STATUT=?");
            $stmt->execute([$this->VISIBLE = 1, $this->STATUT = 1]);
            return $stmt->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function documennontlivre()
    {
        $con = new Database();
        $connect = $con->open();
        try {
            $stmt = $connect->prepare("SELECT COUNT(STATUT) as TOTAL FROM`payement` WHERE VISIBLE=? AND STATUT=?");
            $stmt->execute([$this->VISIBLE = 1, $this->STATUT = 0]);
            return $stmt->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function afficherid()
    {
        $con = new Database();
        $connect = $con->open();
        try {
            $stmt = $connect->prepare("SELECT * FROM `payement` WHERE CODEPAYEMENT=? AND `VISIBLE`=? ");
            $stmt->execute([$this->CODEPAYEMENT, $this->VISIBLE = 1]);
            return $stmt->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function supprimer()
    {
        try {
            $con = new Database();
            $connect = $con->open();
            $stmt = $connect->prepare("UPDATE `payement` SET `VISIBLE`=? WHERE CODEPAYEMENT=?");
            $stmt->execute([$this->CODEPAYEMENT, $this->VISIBLE = 0]);
            return $stmt->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function modifier()
    {
        try {
            $con = new Database();
            $connect = $con->open();
            $stmt = $connect->prepare("UPDATE `payement` SET `STATUT`=? WHERE CODEPAYEMENT=?");
            $stmt->execute([$this->STATUT = 1, $this->CODEPAYEMENT]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function livraison()
    {
        try {
            $con = new Database();
            $connect = $con->open();
            $stmt = $connect->prepare("UPDATE `payement` SET `STATUT`=? WHERE CODEPAYEMENT=?");
            $stmt->execute([$this->STATUT = 1, $this->CODEPAYEMENT]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
