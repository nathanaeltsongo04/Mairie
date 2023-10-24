<?php
class Livraison
{
    private $CODELIVRAISON;
    private $PAYEMENT;
    private $DDATE;
    private $VISIBLE;
    private $AUTEUR;


    public function getCODELIVRAISON()
    {
        return $this->CODELIVRAISON;
    }

    public function setCODELIVRAISON($value)
    {
        $this->CODELIVRAISON = $value;
    }

    public function getPAYEMENT()
    {
        return $this->PAYEMENT;
    }

    public function setPAYEMENT($value)
    {
        $this->PAYEMENT = $value;
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
            $stmt = $connect->prepare("INSERT INTO `livraison`( `PAYEMENT`, `DDATE`, `VISIBLE`, `AUTEUR`) VALUES (?,?,?,?)");
            $stmt->execute([$this->PAYEMENT, $this->DDATE, $this->VISIBLE = 1, $this->AUTEUR]);
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
            $stmt = $connect->prepare("SELECT * FROM `livraison` WHERE `VISIBLE`=? ");
            $stmt->execute([$this->VISIBLE = 1]);
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
            $stmt = $connect->prepare("SELECT * FROM `livraison` WHERE CODELIVRAISON=? AND `VISIBLE`=? ");
            $stmt->execute([$this->CODELIVRAISON, $this->VISIBLE = 1]);
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
            $stmt = $connect->prepare("UPDATE `livraison` SET `VISIBLE`=? WHERE CODELIVRAISON=?");
            $stmt->execute([$this->CODELIVRAISON, $this->VISIBLE = 0]);
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
            $stmt = $connect->prepare("UPDATE `livraison` SET `PAYEMENT`=?,`VISIBLE`=?,`AUTEUR`=? WHERE `CODELIVRAISON`=?");
            $stmt->execute([$this->PAYEMENT, $this->VISIBLE = 1, $this->AUTEUR, $this->CODELIVRAISON]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
