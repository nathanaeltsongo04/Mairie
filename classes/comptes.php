<?php
class Comptes
{
    private $CODECOMPTE;
    private $UTILISATEUR;
    private $NOMUTILISATEUR;
    private $MOTDEPASSE;
    private $VISIBLE;


    public function getCODECOMPTE()
    {
        return $this->CODECOMPTE;
    }

    public function setCODECOMPTE($value)
    {
        $this->CODECOMPTE = $value;
    }

    public function getUTILISATEUR()
    {
        return $this->UTILISATEUR;
    }

    public function setUTILISATEUR($value)
    {
        $this->UTILISATEUR = $value;
    }

    public function getNOMUTILISATEUR()
    {
        return $this->NOMUTILISATEUR;
    }

    public function setNOMUTILISATEUR($value)
    {
        $this->NOMUTILISATEUR = $value;
    }

    public function getMOTDEPASSE()
    {
        return $this->MOTDEPASSE;
    }

    public function setMOTDEPASSE($value)
    {
        $this->MOTDEPASSE = $value;
    }

    public function getVISIBLE()
    {
        return $this->VISIBLE;
    }

    public function setVISIBLE($value)
    {
        $this->VISIBLE = $value;
    }

    public function inserer()
    {

        $con = new Database();
        $connect = $con->open();
        try {
            $stmt = $connect->prepare("INSERT INTO `compte`(`UTILISATEUR`, `NOMUTILISATEUR`, `MOTDEPASSE`, `VISIBLE`) VALUES (?,?,?,?)");
            $stmt->execute([$this->UTILISATEUR, $this->NOMUTILISATEUR, $this->MOTDEPASSE, $this->VISIBLE = 1]);
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
            $stmt = $connect->prepare("SELECT * FROM `compte` WHERE `VISIBLE`=? ");
            $stmt->execute([$this->VISIBLE = 1]);
            return $stmt->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function utilisateur()
    {
        $con = new Database();
        $connect = $con->open();
        try {
            $stmt = $connect->prepare("SELECT UTILISATEUR FROM `compte` WHERE `VISIBLE`=? AND UTILISATEUR=? ");
            $stmt->execute([$this->VISIBLE = 1, $this->UTILISATEUR]);
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
            $stmt = $connect->prepare("SELECT * FROM `compte` WHERE UTILISATEUR=? AND `VISIBLE`=? ");
            $stmt->execute([$this->UTILISATEUR, $this->VISIBLE = 1]);
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
            $stmt = $connect->prepare("UPDATE ``compte`` SET `VISIBLE`=? WHERE CODECOMPTE=?");
            $stmt->execute([$this->CODECOMPTE, $this->VISIBLE = 0]);
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
            $stmt = $connect->prepare("UPDATE `compte` SET `NOMUTILISATEUR`=?,`MOTDEPASSE`=?,`VISIBLE`=? WHERE `CODECOMPTE`=?");
            $stmt->execute([$this->NOMUTILISATEUR, $this->MOTDEPASSE, $this->VISIBLE = 1, $this->CODECOMPTE]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
