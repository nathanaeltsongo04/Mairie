<?php
class commandes
{
    private $CODECOMMANDE;
    private $DECLARANT;
    private $DOCUMENT;
    private $STATUT;
    private $DDATE;
    private $VISIBLE;
    private $AUTEUR;


    public function getCODECOMMANDE()
    {
        return $this->CODECOMMANDE;
    }

    public function setCODECOMMANDE($value)
    {
        $this->CODECOMMANDE = $value;
    }

    public function getDECLARANT()
    {
        return $this->DECLARANT;
    }

    public function setDECLARANT($value)
    {
        $this->DECLARANT = $value;
    }

    public function getDOCUMENT()
    {
        return $this->DOCUMENT;
    }

    public function setDOCUMENT($value)
    {
        $this->DOCUMENT = $value;
    }

    public function getSTATUT()
    {
        return $this->STATUT;
    }

    public function setSTATUT($value)
    {
        $this->STATUT = $value;
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
            $stmt = $connect->prepare("INSERT INTO `commande`(`DECLARANT`, `DOCUMENT`, `STATUT`, `VISIBLE`) VALUES (?,?,?,?)");
            $stmt->execute([$this->DECLARANT, $this->DOCUMENT, $this->STATUT = 0, $this->VISIBLE = 1]);
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
            $stmt = $connect->prepare("SELECT citoyen.EMAIL as EMAIL, commande.DDATE AS DDATE,commande.STATUT as STATUT,commande.CODECOMMANDE as CODECOMMANDE,commande.DECLARANT as DECLARANT,citoyen.NOM as NOM,citoyen.POSTNOM as POSTNOM,citoyen.PRENOM as PRENOM,document.DESIGNATION as DOCUMENT,document.PRIX as PRIX FROM `commande` inner join citoyen on commande.DECLARANT=citoyen.CODECITOYEN inner join document on commande.DOCUMENT = document.CODEDOCUMENT WHERE commande.VISIBLE=? ORDER BY commande.STATUT ASC ");
            $stmt->execute([$this->VISIBLE = 1]);
            return $stmt->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function mensuelle()
    {
        $con = new Database();
        $connect = $con->open();
        try {
            $stmt = $connect->prepare("SELECT COUNT(STATUT) as  TOTAL,MONTHNAME(CURRENT_DATE()-INTERVAL 1 MONTH) as MONTH FROM `commande` WHERE MONTH(DDATE)=MONTH(CURDATE()-INTERVAL 1 MONTH)");
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function journaliere()
    {
        $con = new Database();
        $connect = $con->open();
        try {
            $stmt = $connect->prepare("SELECT COUNT(STATUT) as  TOTAL,DATE_SUB(CURDATE(),INTERVAL 1 DAY) as DAY FROM `commande` WHERE DATE(DDATE)=DATE_SUB(CURDATE(),INTERVAL 1 DAY)");
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function annuelle()
    {
        $con = new Database();
        $connect = $con->open();
        try {
            $stmt = $connect->prepare("SELECT COUNT(STATUT) as  TOTAL,YEAR(CURRENT_DATE()-INTERVAL 1 YEAR) as ANNEE FROM `commande` WHERE YEAR(DDATE)=YEAR(CURDATE()-INTERVAL 1 YEAR)");
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function totalcommande()
    {
        $con = new Database();
        $connect = $con->open();
        try {
            $stmt = $connect->prepare("SELECT COUNT(STATUT) as TOTAL FROM`commande` WHERE VISIBLE=?");
            $stmt->execute([$this->VISIBLE = 1]);
            return $stmt->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function count()
    {
        $con = new Database();
        $connect = $con->open();
        try {
            $stmt = $connect->prepare("SELECT COUNT(STATUT) as NOMBRE FROM `commande` WHERE STATUT=? AND VISIBLE=?");
            $stmt->execute([$this->STATUT = 0, $this->VISIBLE = 1]);
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
            $stmt = $connect->prepare("SELECT commande.DDATE AS DDATE,commande.STATUT as STATUT,commande.CODECOMMANDE as CODECOMMANDE,commande.DECLARANT as DECLARANT,citoyen.NOM as NOM,citoyen.POSTNOM as POSTNOM,citoyen.PRENOM as PRENOM,document.DESIGNATION as DOCUMENT,document.PRIX as PRIX FROM `commande` inner join citoyen on commande.DECLARANT=citoyen.CODECITOYEN inner join document on commande.DOCUMENT = document.CODEDOCUMENT WHERE commande.CODECOMMANDE=?");
            $stmt->execute([$this->CODECOMMANDE]);
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
            $stmt = $connect->prepare("UPDATE `commande` SET `VISIBLE`=? WHERE CODECOMMANDE=?");
            $stmt->execute([$this->CODECOMMANDE, $this->VISIBLE = 0]);
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
            $stmt = $connect->prepare("UPDATE `commande` SET `DECLARANT`=?,`DOCUMENT`=?,`VISIBLE`=?,`AUTEUR`=? WHERE `CODECOMMANDE`=?");
            $stmt->execute([$this->DECLARANT, $this->DOCUMENT, $this->VISIBLE = 1, $this->AUTEUR, $this->CODECOMMANDE]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function paid()
    {
        try {
            $con = new Database();
            $connect = $con->open();
            $stmt = $connect->prepare("UPDATE `commande` SET `STATUT`=? WHERE `CODECOMMANDE`=?");
            $stmt->execute([$this->STATUT = 1, $this->CODECOMMANDE]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
