<?php
    include("../config/cabecalho.php");
?>

    <div id="login">
        <form class="form" action="" method="post">
            <p class="title">Realizar login</p>

            <label for="login">Login</label>
            <input type="text" id="login" name="login" placeholder="Informe seu login" required>

            <label for="password">Senha</label>
            <input type="password" id="senha" name="senha" placeholder="Informe sua senha" required>

            <button type="submit">Enviar</button>
            <button type="reset">Limpar</button>
        </form>
    </div>

<?php
    include("../conexao.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $login = $_POST["login"];
        $senha = $_POST["senha"];

        $sql = "SELECT * FROM usuario WHERE login = :login AND senha = :senha";
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":login", $login);
        $stmt->bindValue(":senha", $senha);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            echo "Pode logar";
        }else{
            echo "Acesso negado";
        }
    }

    include("../config/rodape.php");
?>