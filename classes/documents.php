<?php
class documents
{
    private $CODEDOCUMENT;
    private $DESIGNATION;
    private $PRIX;
    private $DESCRIPTION;
    private $VISIBLE;
    private $AUTEUR;


    public function getCODEDOCUMENT()
    {
        return $this->CODEDOCUMENT;
    }

    public function setCODEDOCUMENT($value)
    {
        $this->CODEDOCUMENT = $value;
    }

    public function getDESIGNATION()
    {
        return $this->DESIGNATION;
    }

    public function setDESIGNATION($value)
    {
        $this->DESIGNATION = $value;
    }

    public function getPRIX()
    {
        return $this->PRIX;
    }

    public function setPRIX($value)
    {
        $this->PRIX = $value;
    }

    public function getDESCRIPTION()
    {
        return $this->DESCRIPTION;
    }

    public function setDESCRIPTION($value)
    {
        $this->DESCRIPTION = $value;
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
            $stmt = $connect->prepare("INSERT INTO `document`( `DESIGNATION`, `PRIX`, `DESCRIPTION`, `VISIBLE`, `AUTEUR`) VALUES (?,?,?,?,?)");
            $stmt->execute([$this->DESIGNATION, $this->PRIX, $this->DESCRIPTION, $this->VISIBLE = 1, $this->AUTEUR]);
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
            $stmt = $connect->prepare("SELECT * FROM `document` WHERE `VISIBLE`=? ");
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
            $stmt = $connect->prepare("SELECT * FROM `document` WHERE CODEDOCUMENT=? AND `VISIBLE`=? ");
            $stmt->execute([$this->CODEDOCUMENT, $this->VISIBLE = 1]);
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
            $stmt = $connect->prepare("UPDATE `document` SET `VISIBLE`=? WHERE CODEDOCUMENT=?");
            $stmt->execute([$this->VISIBLE = 0, $this->CODEDOCUMENT]);
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
            $stmt = $connect->prepare("UPDATE `document` SET `DESIGNATION`=?,`PRIX`=?,`DESCRIPTION`=?,`VISIBLE`=?,`AUTEUR`=? WHERE CODEDOCUMENT=?");
            $stmt->execute([$this->DESIGNATION, $this->PRIX, $this->DESCRIPTION, $this->VISIBLE = 1, $this->AUTEUR, $this->CODEDOCUMENT]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
