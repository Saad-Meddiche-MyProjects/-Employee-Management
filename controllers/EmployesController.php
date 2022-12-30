<?php

class EmployesController
{

    public function getAllEmployes()
    {
        $employes = Employe::getAll();
        return $employes;
    }

    public function getOneEmploye()
    {
        if (isset($_POST['id'])) {
            $data = array(
                'id' => $_POST['id']
            );
            $employe = Employe::getEmploye($data);
            return $employe;
        }
    }

    public function findEmployes()
    {
        if (isset($_POST['search'])) {
            $data = array(
                'search' => $_POST['search']
            );
            $employes = Employe::searchEmploye($data);
            return $employes;
        }
    }

    public function addEmploye()
    {
        if (isset($_POST["Valider"])) {
            $data = array(
                'nom' => $_POST["nom"],
                'prenom' => $_POST["Prenom"],
                'matricule' => $_POST["Matricule"],
                'depart' => $_POST["Departement"],
                'poste' => $_POST["Post"],
                'date_emb' => $_POST["Date_Emb"],
                'status' => $_POST["status"]
            );
            $result = Employe::add($data);
            if ($result === 'ok') {
                Session::set('success', 'Employe Ajouter');
                Redirect::to('home');
            } else {
                return $result;
            }
        }
    }

    public function updateEmploye()
    {
        if (isset($_POST["Update"])) {
            $data = array(
                'id' => $_POST["id"],
                'nom' => $_POST["nom"],
                'prenom' => $_POST["Prenom"],
                'matricule' => $_POST["Matricule"],
                'depart' => $_POST["Departement"],
                'poste' => $_POST["Post"],
                'date_emb' => $_POST["Date_Emb"],
                'status' => $_POST["status"]
            );
            $result = Employe::update($data);
            if ($result === 'ok') {
                Session::set('success', 'Employe Modifier');
                Redirect::to('home');
            } else {
                return $result;
            }
        }
    }

    public function deleteEmploye()
    {
        if (isset($_POST["id"])) {
            $data = array(
                'id' => $_POST['id']
            );
            $result = Employe::delete($data);

            if ($result === 'ok') {
                Session::set('success', 'Employe Suprimer');
                Redirect::to('home');
            } else {
                return $result;
            }
        }
    }
}
