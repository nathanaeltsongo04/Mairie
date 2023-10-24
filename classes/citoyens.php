<?php
class Citoyens
{
    private $CODECITOYEN;
    private $NOM;
    private $POSTNOM;
    private $PRENOM;
    private $GENRE;
    private $DATEDENAISSANCE;
    private $LIEUDENAISSANCE;
    private $ADRESSE;
    private $CONTACT;
    private $EMAIL;
    private $PERE;
    private $MERE;
    private $PARTENAIRE;
    private $ENFANT;
    private $ETATCIVIL;
    private $PROFESSION;
    private $CHEFFERIE;
    private $TERRITOIRE;
    private $PROVINCE;
    private $NATIONALITE;
    private $IDCARTE;
    private $VISIBLE;
    private $AUTEUR;


    public function getCODECITOYEN()
    {
        return $this->CODECITOYEN;
    }

    public function setCODECITOYEN($value)
    {
        $this->CODECITOYEN = $value;
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

    public function getGENRE()
    {
        return $this->GENRE;
    }

    public function setGENRE($value)
    {
        $this->GENRE = $value;
    }

    public function getDATEDENAISSANCE()
    {
        return $this->DATEDENAISSANCE;
    }

    public function setDATEDENAISSANCE($value)
    {
        $this->DATEDENAISSANCE = $value;
    }

    public function getLIEUDENAISSANCE()
    {
        return $this->LIEUDENAISSANCE;
    }

    public function setLIEUDENAISSANCE($value)
    {
        $this->LIEUDENAISSANCE = $value;
    }

    public function getADRESSE()
    {
        return $this->ADRESSE;
    }

    public function setADRESSE($value)
    {
        $this->ADRESSE = $value;
    }

    public function getCONTACT()
    {
        return $this->CONTACT;
    }

    public function setCONTACT($value)
    {
        $this->CONTACT = $value;
    }

    public function getEMAIL()
    {
        return $this->EMAIL;
    }

    public function setEMAIL($value)
    {
        $this->EMAIL = $value;
    }

    public function getPERE()
    {
        return $this->PERE;
    }

    public function setPERE($value)
    {
        $this->PERE = $value;
    }

    public function getMERE()
    {
        return $this->MERE;
    }

    public function setMERE($value)
    {
        $this->MERE = $value;
    }

    public function getPARTENAIRE()
    {
        return $this->PARTENAIRE;
    }

    public function setPARTENAIRE($value)
    {
        $this->PARTENAIRE = $value;
    }

    public function getENFANT()
    {
        return $this->ENFANT;
    }

    public function setENFANT($value)
    {
        $this->ENFANT = $value;
    }

    public function getETATCIVIL()
    {
        return $this->ETATCIVIL;
    }

    public function setETATCIVIL($value)
    {
        $this->ETATCIVIL = $value;
    }

    public function getPROFESSION()
    {
        return $this->PROFESSION;
    }

    public function setPROFESSION($value)
    {
        $this->PROFESSION = $value;
    }

    public function getCHEFFERIE()
    {
        return $this->CHEFFERIE;
    }

    public function setCHEFFERIE($value)
    {
        $this->CHEFFERIE = $value;
    }

    public function getTERRITOIRE()
    {
        return $this->TERRITOIRE;
    }

    public function setTERRITOIRE($value)
    {
        $this->TERRITOIRE = $value;
    }

    public function getPROVINCE()
    {
        return $this->PROVINCE;
    }

    public function setPROVINCE($value)
    {
        $this->PROVINCE = $value;
    }

    public function getNATIONALITE()
    {
        return $this->NATIONALITE;
    }

    public function setNATIONALITE($value)
    {
        $this->NATIONALITE = $value;
    }

    public function getIDCARTE()
    {
        return $this->IDCARTE;
    }

    public function setIDCARTE($value)
    {
        $this->IDCARTE = $value;
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
            $stmt = $connect->prepare("INSERT INTO `citoyen`(`NOM`, `POSTNOM`, `PRENOM`, `GENRE`, `DATEDENAISSANCE`, `LIEUDENAISSANCE`, `ADRESSE`, `CONTACT`, `EMAIL`, `PERE`, `MERE`, `PARTENAIRE`, `ENFANT`, `ETATCIVIL`, `PROFESSION`, `CHEFFERIE`, `TERRITOIRE`, `PROVINCE`, `NATIONALITE`, `IDCARTE`, `VISIBLE`, `AUTEUR`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
            $stmt->execute([$this->NOM, $this->POSTNOM, $this->PRENOM, $this->GENRE, $this->DATEDENAISSANCE, $this->LIEUDENAISSANCE, $this->ADRESSE, $this->CONTACT, $this->EMAIL, $this->PERE, $this->MERE, $this->PARTENAIRE, $this->ENFANT, $this->ETATCIVIL, $this->PROFESSION, $this->CHEFFERIE, $this->TERRITOIRE, $this->PROVINCE, $this->NATIONALITE, $this->IDCARTE, $this->VISIBLE = 1, $this->AUTEUR]);
            $con->close();
        } catch (Exception $e) {
            return $this->$e;
        }
    }
    public function vieetmoeurs()
    {

        $con = new Database();
        $connect = $con->open();
        try {
            $stmt = $connect->prepare("INSERT INTO `citoyen`(`NOM`, `POSTNOM`, `PRENOM`,`DATEDENAISSANCE`, `LIEUDENAISSANCE`, `EMAIL`, `PERE`, `MERE`,`ETATCIVIL`, `PROFESSION`, `TERRITOIRE`, `PROVINCE`, `NATIONALITE`,`CONTACT`,`VISIBLE`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
            $stmt->execute([$this->NOM, $this->POSTNOM, $this->PRENOM, $this->DATEDENAISSANCE, $this->LIEUDENAISSANCE, $this->EMAIL, $this->PERE, $this->MERE, $this->ETATCIVIL, $this->PROFESSION, $this->TERRITOIRE, $this->PROVINCE, $this->NATIONALITE, $this->CONTACT, $this->VISIBLE = 1]);
            $con->close();
        } catch (Exception $e) {
            return $this->$e;
        }
    }
    public function actenaissance()
    {

        $con = new Database();
        $connect = $con->open();
        try {
            $stmt = $connect->prepare("INSERT INTO `citoyen`(`NOM`, `POSTNOM`, `PRENOM`,`DATEDENAISSANCE`, `LIEUDENAISSANCE`, `EMAIL`, `PERE`, `MERE`,`ADRESSE`, `NATIONALITE`,`CONTACT`,`VISIBLE`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
            $stmt->execute([$this->NOM, $this->POSTNOM, $this->PRENOM, $this->DATEDENAISSANCE, $this->LIEUDENAISSANCE, $this->EMAIL, $this->PERE, $this->MERE, $this->ADRESSE, $this->NATIONALITE, $this->CONTACT, $this->VISIBLE = 1]);
            $con->close();
        } catch (Exception $e) {
            return $this->$e;
        }
    }
    public function residence()
    {

        $con = new Database();
        $connect = $con->open();
        try {
            $stmt = $connect->prepare("INSERT INTO `citoyen`(`NOM`, `POSTNOM`, `PRENOM`,`DATEDENAISSANCE`, `IDCARTE`, `EMAIL`, `PERE`, `MERE`,`ADRESSE`, `GENRE`,`CONTACT`,`VISIBLE`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
            $stmt->execute([$this->NOM, $this->POSTNOM, $this->PRENOM, $this->DATEDENAISSANCE, $this->IDCARTE, $this->EMAIL, $this->PERE, $this->MERE, $this->ADRESSE, $this->GENRE, $this->CONTACT, $this->VISIBLE = 1]);
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
            $stmt = $connect->prepare("SELECT * FROM `citoyen` WHERE `VISIBLE`=? ");
            $stmt->execute([$this->VISIBLE = 1]);
            return $stmt->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function getlast()
    {
        $con = new Database();
        $connect = $con->open();
        try {
            $stmt = $connect->prepare("SELECT * FROM `citoyen` ORDER BY CODECITOYEN DESC LIMIT 1 ");
            $stmt->execute();
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
            $stmt = $connect->prepare("SELECT * FROM `citoyen` WHERE CODECITOYEN=? AND `VISIBLE`=? ");
            $stmt->execute([$this->CODECITOYEN, $this->VISIBLE = 1]);
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
            $stmt = $connect->prepare("UPDATE `citoyen` SET `VISIBLE`=? WHERE CODECITOYEN=?");
            $stmt->execute([$this->CODECITOYEN, $this->VISIBLE = 0]);
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
            $stmt = $connect->prepare("UPDATE `citoyen` SET `NOM`=?,`POSTNOM`=?,`PRENOM`=?,`GENRE`=?,`DATEDENAISSANCE`=?,`LIEUDENAISSANCE`=?,`ADRESSE`=?,`CONTACT`=?,`EMAIL`=?,`PERE`=?,`MERE`=?,`PARTENAIRE`=?,`ENFANT`=?,`ETATCIVIL`=?,`PROFESSION`=?,`CHEFFERIE`=?,`TERRITOIRE`=?,`PROVINCE`=?,`NATIONALITE`=?,`IDCARTE`=?,`VISIBLE`=?,`AUTEUR`=? WHERE `CODECITOYEN`=?");
            $stmt->execute([$this->NOM, $this->POSTNOM, $this->PRENOM, $this->GENRE, $this->DATEDENAISSANCE, $this->LIEUDENAISSANCE, $this->ADRESSE, $this->CONTACT, $this->EMAIL, $this->PERE, $this->MERE, $this->PARTENAIRE, $this->ENFANT, $this->ETATCIVIL, $this->PROFESSION, $this->CHEFFERIE, $this->TERRITOIRE, $this->PROVINCE, $this->NATIONALITE, $this->IDCARTE, $this->VISIBLE = 1, $this->AUTEUR, $this->CODECITOYEN]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}