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
                        <span class="card-title center" id="cadastro">Cadrastro do card</span>
                       
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" id="titulo" name="titulo" class="validate" require>
                                <label for="nome">titulo</label>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" id="descricao" class="validate" name="descricao" require>
                                <label for="email">descrição</label>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" id="senha" name="link_imagem" class="validate" require>
                                <label for="senha">link da imagem</label>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="input-field col s12">
                                <label for="phone">link do card</label>

                                <input type="tel" id="link_card" name="link_card" required>
                            </div>
                        </div>
                                <div class="card-action">
                                    <div>
                                
                            <input class="waves-effect waves-light btn" type="submit" value="enviar"  id ="home1"/>
                                
                            </div>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</body>

</html>