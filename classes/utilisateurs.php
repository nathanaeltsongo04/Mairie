<?php
class Utilisateurs
{
    private $CODEUTILISATEUR;
    private $NOM;
    private $POSTNOM;
    private $PRENOM;
    private $FONCTION;
    private $VISIBLE;
    private $PHOTO;
    private $AUTEUR;


    public function getCODEUTILISATEUR()
    {
        return $this->CODEUTILISATEUR;
    }

    public function setCODEUTILISATEUR($value)
    {
        $this->CODEUTILISATEUR = $value;
    }

    public function getNOM()
    {
        return $this->NOM;
    }

    public function setNOM($value)
    {
        $this->NOM = $value;
    }

    public function getPOSTNOM()
    {
        return $this->POSTNOM;
    }

    public function setPOSTNOM($value)
    {
        $this->POSTNOM = $value;
    }

    public function getPRENOM()
    {
        return $this->PRENOM;
    }

    public function setPRENOM($value)
    {
        $this->PRENOM = $value;
    }

    public function getFONCTION()
    {
        return $this->FONCTION;
    }

    public function setFONCTION($value)
    {
        $this->FONCTION = $value;
    }

    public function getVISIBLE()
    {
        return $this->VISIBLE;
    }

    public function setVISIBLE($value)
    {
        $this->VISIBLE = $value;
    }
    public function getPHOTO()
    {
        return $this->PHOTO;
    }

    public function setPHOTO($value)
    {
        $this->PHOTO = $value;
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
            $stmt = $connect->prepare("INSERT INTO `utilisateur`(`NOM`, `POSTNOM`, `PRENOM`, `FONCTION`, `VISIBLE`, `AUTEUR`) VALUES (?,?,?,?,?,?)");
            $stmt->execute([$this->NOM, $this->POSTNOM, $this->PRENOM, $this->FONCTION, $this->VISIBLE = 1, $this->AUTEUR]);
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
            $stmt = $connect->prepare("SELECT utilisateur.CODEUTILISATEUR as CODEUTILISATEUR,  utilisateur.NOM as NOM,  utilisateur.POSTNOM as POSTNOM,  utilisateur.PRENOM as PRENOM, utilisateur.FONCTION,service.DESIGNATION as FONCTION,utilisateur.AUTEUR as AUTEUR FROM `utilisateur` inner join service on utilisateur.FONCTION = service.CODESERVICE WHERE utilisateur.VISIBLE=? ");
            $stmt->execute([$this->VISIBLE = 1]);
            return $stmt->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function matricule()
    {
        $con = new Database();
        $connect = $con->open();
        try {
            $stmt = $connect->prepare("SELECT `CODEUTILISATEUR` FROM `utilisateur` WHERE `VISIBLE`=? AND CODEUTILISATEUR=?");
            $stmt->execute([$this->VISIBLE = 1, $this->CODEUTILISATEUR]);
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
            $stmt = $connect->prepare("SELECT * FROM `utilisateur` WHERE CODEUTILISATEUR=? AND `VISIBLE`=? ");
            $stmt->execute([$this->CODEUTILISATEUR, $this->VISIBLE = 1]);
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
            $stmt = $connect->prepare("UPDATE `utilisateur` SET `VISIBLE`=? WHERE CODEUTILISATEUR=?");
            $stmt->execute([$this->CODEUTILISATEUR, $this->VISIBLE = 0]);
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
            $stmt = $connect->prepare("UPDATE `utilisateur` SET `NOM`=?,`POSTNOM`=?,`PRENOM`=?,`FONCTION`=?,`VISIBLE`=?,`PHOTO`=?,`AUTEUR`=? WHERE `CODEUTILISATEUR`=?");
            $stmt->execute([$this->NOM, $this->POSTNOM, $this->PRENOM, $this->FONCTION, $this->VISIBLE = 1, $this->PHOTO, $this->AUTEUR, $this->CODEUTILISATEUR]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
