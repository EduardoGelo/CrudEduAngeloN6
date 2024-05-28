<?php
if(isset($_POST['submit'])) {
        if(isset($_POST['user']) && !empty($_POST['user']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
                require "db_config.php";
                $user = $_POST['user'];
                $senha = $_POST['senha'];
                try {
                        $sqlChecarUser = "SELECT COUNT(*) as total FROM usuario WHERE nome = :nome";
                        $result = $conn->prepare($sqlChecarUser);
                        $result->bindValue(':nome', $user);
                        $result->execute();
                        $row = $result->fetch();
            
                        if ($row['total'] > 0) {
                            header('Location: cadastro.php?cadastro_error=usuario_duplicado');
                            exit();
                        }
                    } catch(PDOException $erro) {
                        echo "Erro na verificação de usuário: " . $erro->getMessage();
                        exit();
                    }
                $sql = "INSERT INTO usuario(nome, senha) VALUES(:nome, :senha)";
                $result = $conn->prepare($sql);
                $result->bindValue("nome", $user);
                $result->bindValue("senha", $senha);
                $result->execute();
                header('Location: login.php?sucess=ok'); 
        }
}