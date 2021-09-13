<?php

    class FormsController {
        /*====================================
        Register
        ====================================*/
        static public function registerCtr() {
            if(isset($_POST["registerName"])) {
                $table = "registers";
                $data = array("name" => $_POST["registerName"],
                              "email" => $_POST["registerEmail"],
                              "password" => $_POST["registerPassword"]);
                $response = FormsModel::registerMdl($table, $data);
                return $response;
            }
        }

        /*====================================
        Select Registers
        ====================================*/
        static public function selectRegistersCtr($item, $value) {
            $table = "registers";
            $response = FormsModel::selectRegistersMdl($table, $item, $value);
            return $response;
        }

        /*====================================
        Ingress
        ====================================*/
        public function ingressCtr() {
            if(isset($_POST["ingressEmail"])) {
                $table = "registers";
                $item = "email";
                $value = $_POST["ingressEmail"];
                $response = FormsModel::selectRegistersMdl($table, $item, $value);
                
                if($response["email"] == $_POST["ingressEmail"] && $response["password"] == $_POST["ingressPassword"]) {
                    
                    $_SESSION["validateIngress"] = "ok";
                   
                    echo '<script>
                              if(window.history.replaceState) {
                                  window.history.replaceState(null, null, window.location.href);
                              }
                              window.location = "index.php?page=beginning";
                          </script>';
                } else {
                    echo '<script>
                              if(window.history.replaceState) {
                                  window.history.replaceState(null, null, window.location.href);
                              }
                          </script>';
                    echo '<div class="alert alert-danger">Error to ingress to system, the user or password not match</div>';
                }
            }
        }

        /*====================================
        Update Register
        ====================================*/
        static public function updateRegisterCtr() {
            if(isset($_POST["updateName"])) {
                if($_POST["updatePassword"] != "") {
                    $password = $_POST["updatePassword"];
                } else {
                    $password = $_POST["currentPassword"];
                }
                $table = "registers";
                $data = array("id" => $_POST["userId"],
                              "name" => $_POST["updateName"],
                              "email" => $_POST["updateEmail"],
                              "password" => $password);
                $response = FormsModel::updateRegisterMdl($table, $data);
                return $response;
            }
        }

        /*====================================
        Delete Register
        ====================================*/
        public function deleteRegisterCtr() {
            if(isset($_POST["deleteRegister"])) {
                $table = "registers";
                $value = $_POST["deleteRegister"];
                $response = FormsModel::deleteRegisterMdl($table, $value);
                if($response == "ok") {
                    echo '<script>
                              if(window.history.replaceState) {
                                  window.history.replaceState(null, null, window.location.href);
                              }
                              window.location = "index.php?page=beginning";
                          </script>';
                }
            }
        }
    }

?>