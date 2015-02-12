<!DOCTYPE HTML>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width" />

        <!--        arquivos das fontes icomoon-->
        <link type="text/css" rel="stylesheet" href="../css/styleIcomoon.css" />
    </head>

    <!--    arquivos do bootstrap-->
    <link type="text/css" rel="stylesheet" href="../css/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="../css/bootstrap-responsive.css" />
    <link type="text/css" rel="stylesheet" href="../css/style.css" />
    <title>Guide Register</title>
</head>
<body>
    <div class="container">
        <div id="header-menu" class="navbar-fixed-top navbar-inverse header-menu">
            <div class="navbar">
                <div class="navbar-inner container">
                    <div class="container">
                        <!-- .btn-navbar é usado como alternador para conteúdo de barra de navegação colapsável -->
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>

                        <!-- Tenha certeza de deixar a marca se você quer que ela seja mostrada -->
                        <a class="brand" href="#"><span class="icon-home3"></span> Guide Register</a>

                        <!-- Tudo que você queira escondido em 940px ou menos, coloque aqui -->
                        <div class="nav-collapse">
                            <!-- .nav, .navbar-search, .navbar-form, etc -->
                            <ul class="nav">
                                <div class="btn-group">
                                    <a class="btn dropdown-toggle btn-inverse" data-toggle="dropdown" href="#">
                                        <i class="icon-user icon-white"></i> Aluno
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <!-- Links de menu dropdown -->

                                        <li ><a href="#">Início</a> </li>
                                        <li class="dropdown-submenu">
                                            <a tabindex="-1" href="#"><i class="icon-search"></i> Pesquisar</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="">Pesquisa do Aluno</a></li>
                                                <li><a href="">Ata de turmas</a></li>
                                                <li><a href="">Pesquisa de disciplina</a></li>

                                            </ul>
                                        </li>
                                    </ul>
                                </div>  
                            </ul> 

                            <ul class="nav">
                                <div class="btn-group">
                                    <a class="btn dropdown-toggle btn-inverse" data-toggle="dropdown" href="#">
                                        <span class="icon-users4"></span> Professores
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <!-- Links de menu dropdown -->

                                        <li ><a href="#"><span class="icon-user-add"></span> Cadastrar Professor</a> </li>
                                        <li class="dropdown-submenu">
                                            <a tabindex="-1" href="#"><span class="icon-list2"></span> Listar</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="">Listas</a></li>
                                                <li><a href="">Pesquisa do Professor</a></li>
                                                <li><a href="">Resultados</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>  
                            </ul>  
                            <ul class="nav">
                                <div class="btn-group">
                                    <a class="btn dropdown-toggle btn-inverse" data-toggle="dropdown" href="#">
                                        <i class="icon-home icon-white"></i> Turmas
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <!-- Links de menu dropdown -->

                                        <li ><a href="#"> <i class="icon-plus"></i> Cadastrar</a> </li>
                                        <li class="dropdown-submenu">
                                            <a tabindex="-1" href="#"><i class="icon-list-alt"></i> Listar</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="">Listas</a></li>
                                                <li><a href="">Pesquisa da Turma</a></li>
                                                <li><a href="">Resultados</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>  
                            </ul> 
                            <ul class="nav">
                                <div class="btn-group">
                                    <a class="btn dropdown-toggle btn-inverse" data-toggle="dropdown" href="#">
                                        <i class="icon-folder-open icon-white"></i> Relatórios
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <!-- Links de menu dropdown -->

                                        <li ><a href="#">Pesquisa do Aluno</a> </li>
                                        <li ><a href="#">Ata dos Turmas</a> </li>
                                        <li ><a href="#">Pesquisa das Disciplinas</a> </li>
                                    </ul>
                                </div>  
                            </ul>  
                            <ul class="nav">
                                <a class="btn btn-inverse" href=""><i class="icon-exclamation-sign icon-white"></i> Aviso</a> 
                            </ul>  
                        </div>
                    </div>
                </div>
            </div>

            <!-- ---------------------- Inicio ------------------------------------------- -->
        </div> 
        <div class="container relatorios1"> 

            <form class="form-horizontal ">
                <img src="../img/capa.jpg" alt="" />
                
                <div class="control-group">
                    <label class="control-label" for="inputEmail"></label>
                    <div class="controls">
                        <input type="text" id="inputEmail" placeholder="Email">
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </div>
                </div>
            </form> 

        </div>
        
        <div class="container relatorios2">
            
                <form class="form-horizontal">
                    <img src="../img/capa.jpg" alt="" />
                    <div class="control-group">
                        <label class="control-label" for="inputEmail">Nova senha</label>
                        <div class="controls">
                            <input type="text" placeholder="">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Confirmar senha</label>
                        <div class="controls">
                            <input type="password" id="inputPassword" placeholder="Senha">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" class="btn">Entrar</button>
                        </div>
                    </div>
                </form>
            
        </div>
    </div> 
    <!-- ---------------------- Fim ---------------------------------------------- -->  

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!--<script type="text/javascript" src="js/demo.js"></script>-->

</body>
</html>