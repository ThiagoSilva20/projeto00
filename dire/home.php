<?php
session_start();

$id_usuario = $_SESSION["IdUsuario"];

if($id_usuario == null){
    header('Location:./index.php', true, 303);
}

include "./conecta.php";

$sql = "SELECT id, nome, EhAdmin FROM usuarios WHERE id=". $id_usuario .";";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    $usuario = $result->fetch_assoc();

    include "cabecalho.php";
?>


<body>

    <header>

        <nav class="nav-extended">
            <div class="nav-wrapper">
                <ul id="nav-mobile" class="right">
                    <li><a href="./home.php">Início</a></li>
                    <?php
                        if($usuario["EhAdmin"] == true){
                            echo "<li><a href=\"./cadastro_pontos.php\">Novo Ponto</a></li>";
                        }
                    ?>
                    <li class="green-text"><?= $usuario["nome"] ?></li>
                    <li><a href="./logout.php"><i class="small material-icons">exit_to_app</i></a></li>
                </ul>
            </div>
            <div class="nav-content">
                <h1 class="logo center"> <img src="img/logo20.png" id="logo"></h1>
                <h1 class="logo center"><img src="img/culturis.png" class="logo center" width="323px" align="center"></h1>
                <ul class="tabs tabs-transparent teal ">
                    <li class="tab hoverable"><a href="#inicio">Galerias</a></li>
                    <li class="tab hoverable"><a href="#sv">Sobre</a></li>
                    <li class="tab hoverable"><a href="#rodape">Contato</a></li>
                </ul>
            </div>
        </nav>

        <div id="inicio"></div>
        <div class="title">
            <h4 align="center"> <strong>Conheça os principais pontos turísticos do Rio de Janeiro: </stong>
            </h4>
            <h5 align="center"> Quer visitar algum ponto turísto e não sabe qual quer?<br><br> Preparamos para você alguns dos lugares ideias para você e sua família. Rerserve hoje sua Viajem</h5>
        </div>

    </header>

    <main>
        <div class="row">
            <?php

            $sql_pontos = "SELECT id, titulo, link_imagem, descricao, linkcar FROM pontos;";

            $result_pontos  = $conexao->query($sql_pontos);

            while($pontos = $result_pontos->fetch_assoc()){

            ?>

                <div class="col s3">

                    <div class="card hoverable">

                        <div class="card-image">

                            <img src="<?= $pontos["link_imagem"] ?>" height="300px">

                            <span class="card-title">
                                <?= $pontos["titulo"] ?>
                            </span>

                            <a class="btn-floating halfway-fab waves-effect waves-light ciano hoverable" href="<?= $pontos["linkcar"] ?>">
                                <i class="material-icons">shopping_cart</i>
                            </a>


                        </div>

                        <div class="card-content">

                            <p><?= $pontos["descricao"] ?></p>

                        </div>

                    </div>

                </div>

            <?php } ?>


        </div>
        <div id="sv">
            <div>
                <h5 id="serv">Conheça nossos Serviços</h5>
            </div>
            <div class="container" align="center">
                <div class="row align-items-center" id="cont">
                    <div class="col s4">
                        <span class="material-icons" id="ic">directions_bus_filled</span>
                        <p id="ip">Ônibus de excursão</p>
                        <p id="ip">Compre passagens e faça sua viagem com o nosso
                            ônibus próprio de passeio.
                        </p>
                    </div>
                    <div class="col s4">
                        <span class="material-icons" id="ic">directions_car</span>
                        <p id="ip">Locação de veículos</p>
                        <p id="ip">Alugue um carro e economize sua gasolina.
                        </p>
                    </div>
                    <div class="col s4">
                        <span class="material-icons" id="ic">pedal_bike</span>
                        <p id="ip">Locomoção saudavel</p>
                        <p id="ip">Tenha um passeio agradável e desfrute da
                            paisagem. Alugue já a sua bicicleta.
                        </p>
                    </div>
                    <div class="col s4">
                        <span class="material-icons" id="ic">groups</span>
                        <p id="ip">Atividade Social</p>
                        <p id="ip">Desfrute de momentos agrádaveis e valiosos.
                            Compre já nosso plano cultural e venha aprender
                            mais sobre aquele seu hobbie chiclete. </p>
                    </div>
                    <div class="col s4">
                        <span class="material-icons" id="ic">piano</span>
                        <p id="ip">Titulo</p>
                        <p id="ip">Está em dúvida se deve investir em seu hobbie
                            profissionalmente? Entre em contato com nossa empresa
                            para saber mais sobre o assunto.</p>
                    </div>
                    <div class="col s4">
                        <span class="material-icons" id="ic">apartment</span>
                        <p id="ip">Titulo</p>
                        <p id="ip">Empresa totalmente direcionada para o foco
                            em turismo e cultura.
                        </p>
                    </div>
                </div>

            </div>
            <h4 class="area" align="center"><strong>Áreas Artísticas</strong></h4>
            <div id="all">
                <div class="estilo">
                    <div class="row">
                        <img src="img/atuacaoteat.jpg" id="im1" align="left">
                        <h6 align="center" class="tt">Atuação</h6>
                        <p id="tx">Além de ser uma das várias artes que está presente no nosso pais,
                            <br>o teatro abrange nossas áreas culturais, nos influenciando, seja pelo
                            <br>os sentimentos, seja pela forma que nos cativa, ele nos faz expressar
                            <br>tanto artisticamente quanto filosoficamente, a nossa maneira de ser
                            <br>e viver dentro de nossa sociedade e dentro do mundo.
                        </p>
                        <div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="estilo">
                    <div class="row">
                        <img src="img/paintingideas.jpg" id="im2" align="left">
                        <h6 align="center" class="tt">Pintura</h6>
                        <p id="tx">Sendo uma das artes mais conhecidas no mundo inteiro, a
                            <br>pintura é uma maneira de se expressar culturamente e artísticamente,
                            <br>incentivando o uso de sua criatividade,fazendo-o imergir em seu próprio
                            <br>mundo,aproveitando assim o seu tempo livre ou até mesmo aproveitando
                            <br>a carreira que escolheu caso queira trabalhar nesta área.
                        </p>
                    </div>
                </div>
                <br>

                <div class="estilo">
                    <div class="row">
                        <img src="img\peoplemusic.jpg" id="im3" align="left">
                        <div class="row">
                            <h6 align="center" class="tt">Música</h6>
                            <p id="tx" id="m">A música está presente sempre no nosso dia a dia, seja na rua,
                                <br>seja em casa, seja na sua tv ou celular,ela nos proporciona uma diversos
                                <br>sentimentos, que nos fazem lembrar de momentos que passamos pelas nossas
                                <br>vida ou nosso estado emocional no momento. A música pode se tornar um
                                <br>escape para momentos díficeis, como estresse, pressão e entre outros.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
            <div>
                <h5 align="center">Veja oque nossos clientes dizem</h5>
                <br>
                <div class="row align-items-center" id="coment">
                    <div class="col s4">
                        <img src="img/iconemulher1.png" id="imagedit">
                        <div class="quadrado" id="black">
                            <h6 align="center"> <strong>Cassia</strong></h6>
                            <p>"No início eu estava meio apreensiva, com medo de ser só algo superficial,
                                porém ao longo da experiência fui percebendo que era muita mais aprofundado (...)".</p>
                        </div>
                    </div>
                    <div class="col s4">
                        <img src="img/iconemulher2.png" id="imagedit">
                        <div class="quadrado" id="black">
                            <h6 align="center"><strong>Stella</strong></h6>
                            <p>"Como sou uma pessoa que adora o ar livre me interessei pelo serviço e logo comprei o plano,
                                amei totalmente a viagem e o jeito que foi feito o turismo."
                            </p>
                        </div>
                    </div>
                    <div class="col s4">
                        <img src="img/icone_homem.png" id="imagedit">
                        <div class="quadrado" id="black">
                            <h6 align="center"><strong>Rodrigo</strong></h6>
                            <p>"Quando ouvi falar de Culturis achava que era só mais uma empresa querendo fazer algo grande,
                                acabei me enganando, fiz um de seus pacotes culturais e me surpreendi."
                            </p>
                        </div>
                    </div>
                </div>

    </main>

    <footer>
        <div id="rodape">

            <div class="row align-items-center">
                <div class="col s4 center">
                    <img src="img/logo20.png" height="90px">
                </div>

                <div class="col s4 center">
                    <div>
                        <ul>
                            <h6>Entre em contato</h6>
                            <a href="https://api.whatsapp.com/send?phone=5521993392724&text=Ol%C3%A1%2C%20Vamos%20Viajar%20%3F">
                                <span class="material-icons">whatsapp</span>whatsapp</a> <br>
                            <a href="https://instagram.com/cultu.ris?utm_medium=copy_link"><i class="fa fa-instagram" style="font-size:24px"></i>instagram</a>
                        </ul>
                    </div>
                </div>
                <div class="col s4 center">
                    <div>
                        <h5>
                            Sobre-nós
                        </h5>
                        Somos uma empresa de turismo e cultura, temos o objetivo de mostrar as maravilhas do Rio de Janeiro.
                    </div>
                </div>
            </div>

        </div>
    </footer>

</body>
<?php
}
else{
    header('Location:./index.php', true, 303);
}

?>

</html>