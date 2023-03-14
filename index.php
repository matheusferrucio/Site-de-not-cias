<?php include('config.php') ?> <!-- arquivo que contém a url do site -->
<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- script fontawesome -->
    <script src="https://kit.fontawesome.com/62e5760e2b.js" crossorigin="anonymous"></script>
    <!-- css do bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo ENDERECO_SITE; ?>css/style.css">
    <link rel="stylesheet" href="<?php echo ENDERECO_SITE; ?>css/noticia.css">
    <title>Notícias ETEC</title>
</head>
<body>
    <?php $url = isset($_GET['url']) ? $_GET['url'] : 'home'; ?>

    <header>
        <div class="container">
            <div class="w100 centralizar logo">NOTÍCIAS ETEC</div>
            <div class="w100 centralizar menu">
                <nav>
                    <ul class="w100 menu-desktop">
                        <li><a href="<?php echo ENDERECO_SITE; ?>home">Início</a></li>
                        <li><a href="<?php echo ENDERECO_SITE; ?>adicionar">Adicionar notícias</a></li>
                    </ul>
                </nav>
            </div>
            <div class="borda"></div>
        </div>
    </header>

    <div class="container-principal">
        <?php 
            # Verifica se a página existe e se existir ela é incluida
            if(file_exists($url.'.php')){
                include($url.'.php');
            }else {
                echo "<h1 style='text-align: center; padding: 30px 0; font-size: 4em;'>Essa página não existe!!!</h1>";
            }
        ?>
    </div>

    <footer>
        <div class="container">
            <div class="borda"></div>
            <div class="w100 centralizar logo">NOTÍCIAS ETEC</div>
            <p style="text-align: center; font-size: 1.1em;padding-bottom: 20px;">Todos os direitos reservados ©</p>
        </div>
    </footer>


    <!-- script do bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- script jquery -->
    <script src="<?php echo ENDERECO_SITE; ?>js/jquery.js"></script>
    <!-- script principal -->
    <script src="<?php echo ENDERECO_SITE; ?>js/script.js"></script>
</body>
</html>