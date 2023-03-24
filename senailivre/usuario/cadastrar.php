<?php
    include("../config/cabecalho.php");
?>

    <div id="cadastrar">
        <form class="form" action="" method="post">
            <p class="title">Realizar cadastro</p>

            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" placeholder="Informe seu nome" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Informe seu email" required>

            <label for="login">Login</label>
            <input type="text" id="login" name="login" placeholder="Informe seu login" required>

            <label for="password">Senha</label>
            <input type="password" id="senha" name="senha" placeholder="Informe sua senha" required>

            <button type="submit">Cadastrar</button>
            <button type="reset">Limpar</button>
        </form>
    </div>

<?php
      include("../conexao.php");

      if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $login = $_POST["login"];
        $senha = $_POST["senha"];

        $sql = "INSERT INTO usuario(nome, email, login, senha) VALUES (:nome, :email, :login, :senha)";
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":nome", $nome);
        $stmt->bindValue(":email", $email);
        $stmt->bindValue(":login", $login);
        $stmt->bindValue(":senha", $senha);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            echo "Registrado com sucesso";
        }else{
            echo "Falha ao registrar o usuário";
        }
    }

    include("../config/rodape.php");
?>