<?php include "cabecalho.php" ?>

<body>
    <nav class="nav-extended teal lighten-3">

        <div class="nav-wrapper">

        </div>
        <div class="nav-content">
            <h1 class="logo center">Culturis</h1>
            <ul class="tabs tabs-transparent teal ">
                <li class="tab hoverable"><a href="./index.php">Voltar</a></li>
            </ul>
        </div>
    </nav>

    <!--inicio do cadastro -->
    <form role="form" id="form" method="POST" action="./cadastro_usuario.php">

        <div class="row">
            <div class="col s6 offset-s3">
                <div class="card">
                    <div class="card-content">
                        <!--titulo-->
                        <span class="card-title center" id="cadastro">Cadrastro</span>
                        <!--nome-->
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" id="nome" name="nome" class="validate" require>
                                <label for="nome">Seu Nome</label>
                            </div>
                        </div>
                        <!--email-->
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="email" id="email" class="validate" name="email" require>
                                <label for="email">Seu E-mail</label>
                            </div>
                        </div>
                        <!--senha-->
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="password" id="senha" name="senha" class="validate" require>
                                <label for="senha">Sua senha</label>
                            </div>
                        </div>
                        <!--numero de telefone -->
                        <div class="row">
                            <div class="input-field col s12">
                                <label for="phone">Seu Número</label>

                                <input type="tel" id="telefone" name="telefone" required>

                                <small>Formato: 21 96404-4651</small>
                            </div>
                        </div>
                                <div class="card-action">
                                    <div>
                                
                            <input class="waves-effect waves-light btn" type="submit" value="enviar"  id ="home1"/>
                                
                            </div>
                            </form>
                        </div>
                    </div>
                    <!--botão-->
                    </div>
                </div>
            </div>
        </div>
    </form>

</body>

</html>