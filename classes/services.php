<?php
class services
{
    private $CODESERVICE;
    private $DESIGNATION;
    private $EMAIL;
    private $VISIBLE;
    private $AUTEUR;

    public function getCODESERVICE()
    {
        return $this->CODESERVICE;
    }

    public function setCODESERVICE($value)
    {
        $this->CODESERVICE = $value;
    }

    public function getDESIGNATION()
    {
        return $this->DESIGNATION;
    }

    public function setDESIGNATION($value)
    {
        $this->DESIGNATION = $value;
    }

    public function getEMAIL()
    {
        return $this->EMAIL;
    }

    public function setEMAIL($value)
    {
        $this->EMAIL = $value;
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
            $stmt = $connect->prepare("INSERT INTO `service`( `DESIGNATION`, `EMAIL`, `VISIBLE`, `AUTEUR`) VALUES (?,?,?,?)");
            $stmt->execute([$this->DESIGNATION, $this->EMAIL, $this->VISIBLE = 1, $this->AUTEUR]);
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
            $stmt = $connect->prepare("SELECT * FROM `service` WHERE `VISIBLE`=? ");
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
            $stmt = $connect->prepare("SELECT * FROM `service` WHERE CODESERVICE=? AND `VISIBLE`=? ");
            $stmt->execute([$this->CODESERVICE, $this->VISIBLE = 1]);
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
            $stmt = $connect->prepare("UPDATE `service` SET `VISIBLE`=? WHERE CODESERVICE=?");
            $stmt->execute([$this->VISIBLE = 0, $this->CODESERVICE]);
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
            $stmt = $connect->prepare("UPDATE `service` SET `DESIGNATION`=?,`EMAIL`=?,`VISIBLE`=?,`AUTEUR`=? WHERE CODESERVICE=?");
            $stmt->execute([$this->DESIGNATION, $this->EMAIL, $this->VISIBLE = 1, $this->AUTEUR, $this->CODESERVICE]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
