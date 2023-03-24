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
            <div id="dashboard-principal-main-toolbar">
                <div id="dashboard-principal-main-toolbar-ecommerce">
                    <p class="title">E-commerce | Painel de Controle</p>
                    <ul id="dashboard-principal-main-toolbar-ecommerce-ul">
                        <p>Home</p>
                        <span id="dashboard-principal-main-toolbar-ecommerce-span"></span>
                        <p>Dashboard</p>
                    </ul>
                </div>
            </div>

            <div id="dashboard-principal-main-content">
                <div id="dashboard-principal-main-content-upper">
                    <div class="class-dashboard-cards" id="dashboard-principal-main-content-upper-vendas">
                        <div>
                            <p class="class-dashboard-cards-grande"><span class="class-dashboard-cards-normal">R$ㅤ</span>69.700</p>
                            <p class="class-dashboard-cards-pequeno">Vendas esse mês</p>
                        </div>
                        <i class="fa-solid fa-coins" style="color: #6d6f74;"></i>
                    </div>
                    <div class="class-dashboard-cards" id="dashboard-principal-main-content-upper-produtos">
                        <div>
                            <p class="class-dashboard-cards-grande">345</p>
                            <p class="class-dashboard-cards-pequeno">Produtos ativos</p>
                        </div>
                        <i class="fa-solid fa-box" style="color: #aaaaaa;"></i>
                    </div>
                    <div class="class-dashboard-cards" id="dashboard-principal-main-content-upper-fornecedores">
                        <div>
                            <p class="class-dashboard-cards-grande">25</p>
                            <p class="class-dashboard-cards-pequeno">Fornecedores</p>
                        </div>
                        <i class="fa-solid fa-building" style="color: #aaaaaa;"></i>
                    </div>
                    <div class="class-dashboard-cards" id="dashboard-principal-main-content-upper-clientes">
                        <div>
                            <p class="class-dashboard-cards-grande">4500</p>
                            <p class="class-dashboard-cards-pequeno">Clientes</p>
                        </div>
                        <i class="fa-solid fa-user" style="color: #aaaaaa;"></i>
                    </div>
                </div>
                <div id="dashboard-principal-main-content-middle">
                    <div class="bgbranco" id="dashboard-principal-main-content-middle-carrinhos-ativos">
                        <div class="title" id="dashboard-principal-main-content-middle-carrinhos-ativos-p">
                            <p>Carrinhos Ativos</p>
                        </div>
                        <div>
                            <div id="dashboard-principal-main-content-middle-tags">
                                <div>
                                    <img src="../img/dashboard/carrinhos/tags/t-shirt.svg" alt="">
                                    <p>Moda</p>
                                </div>
                                <div>
                                    <img src="../img/dashboard/carrinhos/tags/gaming.svg" alt="">
                                    <p>Jogos</p>
                                </div>
                                <div>
                                    <img src="../img/dashboard/carrinhos/tags/watch.svg" alt="">
                                    <p>Eletrônicos</p>
                                </div>
                                <div>
                                    <img src="../img/dashboard/carrinhos/tags/gloves.svg" alt="">
                                    <p>Esporte</p>
                                </div>
                                <div>
                                    <img src="../img/dashboard/carrinhos/tags/shoes.svg" alt="">
                                    <p>Tênis</p>
                                </div>
                            </div>

                            <div id="dashboard-principal-main-content-middle-lista">
                                <table>
                                    <tr>
                                        <td>ITEM</td>
                                        <td>QTY</td>
                                        <td>PREÇO</td>
                                        <td>VALOR TOTAL</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="bgbranco" id="dashboard-principal-main-content-middle-ecommerce">
                        <div>
                            <p>Novo aplicativo de <strong>E-commerce</strong></p>
                        </div>
                        <div>
                            <img src="../img/dashboard/ecommerce/homem.svg" alt="">
                        </div>
                        <div id="dashboard-principal-main-content-middle-ecommerce-a">
                            <a href="#" id="dashboard-principal-main-content-middle-ecommerce-a-novidades">Ver Novidades</a>
                            <a href="#" id="dashboard-principal-main-content-middle-ecommerce-a-produtos">Ver Produtos</a>
                        </div>
                    </div>
                </div>
                <div id="dashboard-principal-main-content-lower">
                    <div class="bgbranco"></div>
                    <div class="bgbranco"></div>
                </div>
            </div>
        </div>

        <?php include("../config/dashboard/footer.php") ?>
    </div>

    <script src="https://kit.fontawesome.com/d1efe6d39d.js" crossorigin="anonymous"></script>
</body>
</html>