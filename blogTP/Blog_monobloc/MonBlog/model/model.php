<?php
class Model {
    private $bdd;

    public function __construct() {
        try {
            $this->bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function getAllBillets() {
        $billets = $this->bdd->query('SELECT BIL_ID as id, BIL_DATE as date, BIL_TITRE as titre, BIL_CONTENU as contenu FROM T_BILLET ORDER BY BIL_ID DESC');
        return $billets->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getBilletById($billetId) {
        $req = $this->bdd->prepare('SELECT BIL_ID As id, BIL_TITRE AS titre, BIL_CONTENU AS contenu, DATE_FORMAT(BIL_DATE, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM t_billet WHERE BIL_ID = :id');
        $req->bindParam(':id', $billetId, PDO::PARAM_INT);
        $req->execute();
        return $req->fetch(PDO::FETCH_ASSOC);
    }

    public function getCommentsByBilletId($billetId) {
        $req = $this->bdd->prepare('SELECT COM_AUTEUR AS auteur, COM_CONTENU AS commentaire, DATE_FORMAT(COM_DATE, \'%d/%m/%Y à %Hh%imin%ss\') AS date_commentaire_fr FROM t_commentaire WHERE BIL_ID = :id ORDER BY COM_DATE');
        $req->bindParam(':id', $billetId, PDO::PARAM_INT);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
