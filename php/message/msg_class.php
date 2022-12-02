<?php

    class Message {
        /* CADASTRO */
        public function create($conn){
            $insert_user = "INSERT INTO usuario (nome, email, senha) VALUES (:nome, :email, :senha)";

            $cad_user = $con->prepare($insert_user);
            $cad_user->bindParam(':nome', $name);
            $cad_user->bindParam(':email', $email);
            $cad_user->bindParam(':senha', $pass);

            try{
                $cad_user->execute();
                echo "Usuário cadastrado com sucesso!<br><br>";
                echo '<a href="http://localhost/Site-PH2.0/php/contato.php">Home</a>';

            } catch(Exception $e) {
                echo $e->getMessage("Falha no cadastro do usuário! Erro: ".$e->error_reporting);
            }

        }
        
        /* LOGIN */
        public function checkUser($conn) {

        }

        /* SHOW MESSAGE */
        public function read($conn){
            #mostrar: nome_user e mensagem
        }

        /* APAGAR MENSAGEM */
        public function delete(){

        }
    }
?>