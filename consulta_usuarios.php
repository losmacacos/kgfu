<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<link rel="stylesheet" href="css/bootstrap.css" />
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Cadastro de Usuário - Atibaia 2</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>


<body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header">
            
        <div class="header-logo">
            <a class="site-logo" href="index.html"><img src="images/logo.png" alt="Homepage"></a>
        </div>

         <nav class="header-nav-wrap">
            <ul class="header-nav">
                <li><a href="index.html#home" title="home">Home</a></li>
                <li><a href="index.html#about" title="about">História</a></li>
                <li><a href="index.html#works" title="works">Liga Garra de Águia</a></li>
                <li class="current"><a href="blog.html" title="blog">Atibaia II</a></li>
                <li><a href="index.html#contact" title="contact">Contato</a></li>   
            </ul>
        </nav>


        <a class="header-menu-toggle" href="#0"><span>Menu</span></a>

    </header> <!-- end s-header -->


    <article class="blog-single">

        <!-- page header/blog hero
        ================================================== -->
        <div class="page-header page-header--single page-hero" style="background-image:url(images/blog/blog-bg-02.jpg)">
        
            <div class="row page-header__content narrow">
                <article class="col-full">
                    <div class="page-header__info">
                        <div class="page-header__cat">
                            Cadastro do Atleta
                        </div>
                    </div>
                    <h1 class="page-header__title">
                        
                            Insira seus dados pessoais logo abaixo!
                        
                    </h1>
                    <ul class="page-header__meta">
                        <li class="date">Novas turmas - 2017</li>
                        <li class="author">
                            - 
                            <span>  Instrutora Andressa Nardini</span>
                        </li>
                    </ul>
                    
                </article>
            </div>
    
        </div> <!-- end page-header -->

        <div class="row blog-content">
            <div class="col-full blog-content__main">

        <?php
        require_once 'classes/Usuarios.php';
        $usuario = new Usuarios();
        ?>

        <?php
        if(isset($_GET['acao']) && $_GET['acao'] == 'deletar'):

            $id = (int)$_GET['id'];
            if($usuario->delete($id)){
                echo "Deletado com sucesso!";
            }

        endif;
        ?>

        <?php
        if(isset($_GET['acao']) && $_GET['acao'] == 'editar'){

            $id = (int)$_GET['id'];
            $resultado = $usuario->find($id);
        ?>


        <?php } ?>

        <table class="table table-hover">
            
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome:</th>
                    <th>E-mail:</th>
                    <th>Endereço:</th>
                    <th>Cidade:</th>
                    <th>DataNascimento:</th>
                    <th>Sexo:</th>
                    <th>Modalidade:</th>
                    <th>telResidencial:</th>
                    <th>telCelular:</th>
                    <th>whatsApp:</th>
                </tr>
            </thead>
            
            <?php foreach($usuario->findAll() as $key => $value): ?>

            <tbody>
                <tr>
                    <td><?php echo $value->id; ?></td>
                    <td><?php echo $value->nome; ?></td>
                    <td><?php echo $value->email; ?></td>
                    <td><?php echo $value->endereco.", "; ?><?php echo $value->numero." - "; ?><?php echo $value->bairro; ?></td>
                    <td><?php echo $value->cidade; ?></td>
                    <td><?php echo $value->dataNasc; ?></td>
                    <td><?php echo $value->sexo; ?></td>
                    <td><?php echo $value->modalidade; ?></td>
                    <td><?php echo $value->telResidencial; ?></td>
                    <td><?php echo $value->telCelular; ?></td>
                    <td><?php echo $value->whatsApp; ?></td>
                    <td>
                        <?php echo "<a href='atualizar_usuario.php?acao=editar&id=" . $value->id . "'>Editar</a>"; ?>
                        <?php echo "<a href='consulta_usuarios.php?acao=deletar&id=" . $value->id . "' onclick='return confirm(\"Deseja realmente deletar?\")'>Deletar</a>"; ?>
                    </td>
                </tr>
            </tbody>

            <?php endforeach; ?>

        </table>
            </div>
        </div>
                

    </article>


    <!-- footer
    ================================================== -->
   <footer>
        <div class="row">
            <div class="col-full">

                <div class="footer-logo">
                    <a class="footer-site-logo" href="#0"><img src="images/logo.png" alt="Homepage"></a>
                </div>

                <ul class="footer-social">
                    <li><a href="#0">
                        <i class="im im-facebook" aria-hidden="true"></i>
                        <span>Facebook</span>
                    </a></li>
                    <li><a href="#0">
                        <i class="im im-twitter" aria-hidden="true"></i>
                        <span>Twitter</span>
                    </a></li>
                    <li><a href="#0">
                        <i class="im im-instagram" aria-hidden="true"></i>
                        <span>Instagram</span>
                    </a></li>
                    <li><a href="#0">
                        <i class="im im-pinterest" aria-hidden="true"></i>
                        <span>Pinterest</span>
                    </a></li>
                </ul>
                    
            </div>
        </div>
    
            <div class="row footer-bottom">

            <div class="col-twelve">
                <div class="copyright">
                    <span>© Copyright Losmacacos 2017</span> 
                    <span>Design by Losmacacos</span>   
                </div>

                <div class="go-top">
                <a class="smoothscroll" title="Back to Top" href="#top"><i class="im im-arrow-up" aria-hidden="true"></i></a>
                </div>
            </div>

        </div> <!-- end footer-bottom -->
        </footer> <!-- end footer -->
    
    
        <div id="preloader"> 
            <div id="loader"></div>
        </div>
    
    
        <!-- Java Script
        ================================================== -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/jQuery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/MascaraValidacao.js"></script>

</body>

</html>