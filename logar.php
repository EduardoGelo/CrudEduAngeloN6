<?php
    if(isset($_GET['sucess'])) {
        if($_GET['sucess'] == "ok") {
            echo "Usuário cadastrado com sucesso";
        }
    }

    if(isset($_POST['submit'])) {
        if(isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
                session_start();
                require "db_config.php";
                $user = $_POST['nome'];
                $senha = $_POST['senha'];
                $sql = "SELECT * FROM usuario WHERE nome = :nome AND senha = :senha";
                $result = $conn->prepare($sql);
                $result->bindValue(':nome', $user);
                $result->bindValue(':senha', $senha);
                $result->execute();

                if($result->rowCount() > 0) {
                    $dado = $result->fetch();

                    $_SESSION['id_usuario'] = $dado['id_usuario'];
                    
                    header('Location: site.php');
                }
                else{
                    header('Location: login.php?erro=ok');
                }
        }
        if (isset($erro)) {
            $_SESSION['erro_login'] = $erro;
            echo "<script>window.location.href='login.php';</script>";
            exit();
        }
    }
    