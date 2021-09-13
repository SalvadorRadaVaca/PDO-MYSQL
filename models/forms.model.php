<?php

    require_once "connection.php";

    class FormsModel {
        /*====================================
        Register
        ====================================*/
        static public function registerMdl($table, $data) {
            $stmt = Connection::connect()->prepare("INSERT INTO $table(name, email, password) VALUES (:name, :email, :password)");
            $stmt->bindParam(":name", $data["name"], PDO::PARAM_STR);
            $stmt->bindParam(":email", $data["email"], PDO::PARAM_STR);
            $stmt->bindParam(":password", $data["password"], PDO::PARAM_STR);

            if($stmt->execute()) {
                return "ok";
            } else {
                print_r(Connection::connect()->errorInfo());
            }

            $stmt->close();
            $stmt = null;
        }

        /*====================================
        Select Registers
        ====================================*/
        static public function selectRegistersMdl($table, $item, $value) {
            if($item == null && $value == null) {
                $stmt = Connection::connect()->prepare("SELECT *, DATE_FORMAT(datee, '%Y-%m-%d') AS datee FROM $table ORDER BY id DESC");
                $stmt->execute();
                return $stmt->fetchAll();
            } else {
                $stmt = Connection::connect()->prepare("SELECT *, DATE_FORMAT(datee, '%Y-%m-%d') AS datee FROM $table WHERE $item = :$item ORDER BY id DESC");
                $stmt->bindParam(":".$item, $value, PDO::PARAM_STR);
                $stmt->execute();
                return $stmt->fetch();
            }
            
            $stmt->close();
            $stmt = null;
        }

        /*====================================
        Update Register
        ====================================*/
        static public function updateRegisterMdl($table, $data) {
            $stmt = Connection::connect()->prepare("UPDATE $table SET name = :name, email = :email, password = :password WHERE id = :id");
            $stmt->bindParam(":name", $data["name"], PDO::PARAM_STR);
            $stmt->bindParam(":email", $data["email"], PDO::PARAM_STR);
            $stmt->bindParam(":password", $data["password"], PDO::PARAM_STR);
            $stmt->bindParam(":id", $data["id"], PDO::PARAM_INT);

            if($stmt->execute()) {
                return "ok";
            } else {
                print_r(Connection::connect()->errorInfo());
            }

            $stmt->close();
            $stmt = null;
        }

        /*====================================
        Delete Register
        ====================================*/
        static public function deleteRegisterMdl($table, $value){
            $stmt = Connection::connect()->prepare("DELETE FROM $table WHERE id = :id");
            $stmt->bindParam(":id", $value, PDO::PARAM_INT);

            if($stmt->execute()) {
                return "ok";
            } else {
                print_r(Connection::connect()->errorInfo());
            }

            $stmt->close();
            $stmt = null;
        }
    }

?>