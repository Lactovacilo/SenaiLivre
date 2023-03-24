<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>Dashboard</title>
</head>
<body id="dashboard">
    <?php include("../config/dashboard/sidebaropen.php") ?>

    <button><i class="fa-solid fa-border-all" style="color: #c5c5c8;"></i><p class="lit-up">Painel de controle</p></button>
    <button><i class="fa-solid fa-address-book" style="color: #c5c5c8;"></i><p>Usuários</p></button>
    <button><i class="fa-solid fa-user" style="color: #c5c5c8;"></i><p>Minha conta</p></button>
    <button><i class="fa-solid fa-shield-halved" style="color: #c5c5c8;"></i><p>Segurança</p></button>
    <button><i class="fa-solid fa-file" style="color: #c5c5c8;"></i><p>Corporativo</p></button>
    <button><i class="fa-solid fa-volleyball" style="color: #c5c5c8;"></i><p>Esportes</p></button>
    <button><i class="fa-solid fa-landmark" style="color: #c5c5c8;"></i><p>Acadêmico</p></button>
    <button><i class="fa-solid fa-chart-pie" style="color: #c5c5c8;"></i><p>Relatórios</p></button>
    <button><i class="fa-solid fa-fill-drip" style="color: #c5c5c8;"></i><p>Customização</p></button>
    <button><i class="fa-solid fa-bell" style="color: #c5c5c8;"></i><p>Alertas</p></button>
    
    <?php include("../config/dashboard/sidebarclose.php") ?>
    <div id="dashboard-principal">
        <?php include("../config/dashboard/header.php") ?>

        <div id="dashboard-principal-main">
            
        </div>

        <?php include("../config/dashboard/footer.php") ?>
    </div>

    <script src="https://kit.fontawesome.com/d1efe6d39d.js" crossorigin="anonymous"></script>
</body>
</html>