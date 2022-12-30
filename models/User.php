<?php
class User
{

    static public function login($data)
    {
        $username = $data["username"];

        try {

            $stmt = DB::connect()->prepare("SELECT * FROM `users` WHERE username = :username");

            $stmt->execute([":username" => $username]);

            $user = $stmt->fetch(PDO::FETCH_OBJ);


            return $user;
        } catch (PDOException $e) {
            echo  'Erreur' . $e->getMessage();
        }
    }

    static public function createUser($data)
    {
        $stmt = DB::connect()->prepare("INSERT INTO `users`(`fullname`, `username`, `password`) VALUES (:fullname, :username, :password)");

        $stmt->bindParam(':fullname', $data['fullname']);
        $stmt->bindParam(':username', $data['username']);
        $stmt->bindParam(':password', $data['password']);



        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }

        $stmt = null;
    }
}
