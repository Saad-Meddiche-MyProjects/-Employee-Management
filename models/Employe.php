<?php

class Employe
{

    static public function getAll()
    {
        $stmt = DB::connect()->prepare("SELECT * FROM `employe`");
        $stmt->execute();
        return $stmt->fetchAll();

        $stmt = null;
    }

    static public function getEmploye($data)
    {
        $id = $data["id"];

        try {
            $stmt = DB::connect()->prepare("SELECT * FROM `employe` WHERE id=:id");
            $stmt->execute([":id" => $id]);
            $employe = $stmt->fetch(PDO::FETCH_OBJ);

            return $employe;
        } catch (PDOException $e) {
            echo  'Erreur' . $e->getMessage();
        }
    }

    static public function add($data)
    {
        $stmt = DB::connect()->prepare("INSERT INTO `employe`(`nom`, `prenom`, `matricule`, `depart`, `poste`, `date_emb`,`status`) VALUES (:nom, :prenom, :matricule, :depart, :poste, :date_emb, :status)");

        $stmt->bindParam(':nom', $data['nom']);
        $stmt->bindParam(':prenom', $data['prenom']);
        $stmt->bindParam(':matricule', $data['matricule']);
        $stmt->bindParam(':depart', $data['depart']);
        $stmt->bindParam(':poste', $data['poste']);
        $stmt->bindParam(':date_emb', $data['date_emb']);
        $stmt->bindParam(':status', $data['status']);


        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }

        $stmt = null;
    }

    static public function update($data)
    {
        $stmt = DB::connect()->prepare("UPDATE employe SET nom=:nom, prenom=:prenom, matricule=:matricule, depart=:depart, poste=:poste, date_emb=:date_emb,status=:status WHERE id= :id ");

        $stmt->bindParam(':id', $data['id']);
        $stmt->bindParam(':nom', $data['nom']);
        $stmt->bindParam(':prenom', $data['prenom']);
        $stmt->bindParam(':matricule', $data['matricule']);
        $stmt->bindParam(':depart', $data['depart']);
        $stmt->bindParam(':poste', $data['poste']);
        $stmt->bindParam(':date_emb', $data['date_emb']);
        $stmt->bindParam(':status', $data['status']);

        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }

        $stmt = null;
    }

    static public function delete($data)
    {
        $id = $data["id"];

        try {
            $stmt = DB::connect()->prepare("DELETE FROM `employe` WHERE id = :id");
            $stmt->execute([":id" => $id]);
            if ($stmt->execute()) {
                return 'ok';
            }
        } catch (PDOException $e) {
            echo  'Erreur' . $e->getMessage();
        }
    }

    static public function searchEmploye($data)
    {

        $search = $data["search"];

        try {

            $stmt = DB::connect()->prepare("SELECT * FROM `employe` WHERE nom LIKE ? OR prenom LIKE ? OR matricule LIKE ?");
            $stmt->execute(["%" . $search . "%", "%" . $search . "%", "%" . $search . "%"]);

            $employes = $stmt->fetchAll();
            return $employes;

            if ($stmt->execute()) {
                return 'ok';
            }
        } catch (PDOException $e) {
            echo  'Erreur' . $e->getMessage();
        }
    }
}
