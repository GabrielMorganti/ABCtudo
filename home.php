<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS/BOOTSTRAP/JS -->
    <?php
    include_once('./inc/links.php')
    ?>
    <!-- /CSS/BOOTSTRAP/JS -->
    <title>Document</title>
</head>

<body>

    <!-- HEADER -->
    <div class="container-fluid">
        <?php
        include_once('./inc/header.php')
        ?>
    </div>
    <!-- /HEADER -->

    <!-- BODY -->
    <div class="container-fluid">
        <div class="row noticias-destaque">
            <div class="flex-container">
                <div class="col-md-6">
                    <div class="row mt-5">
                        <h5 class="text-cent">NOTÍCIAS EM DESTAQUE
                            <div class="borda"></div>
                        </h5>
                    </div>

                    <div class="row mt-1 noticia-destaque">
                        <a style="text-decoration: none;" class="" href=""><img class="img-fluid " src="./img/as-melhores-smart-tvs-da-samsung-2-1-1130x580.jpg.webp" alt="">
                            <h3 class="mt-2">As melhores Smart TVs da Samsung</h3>

                            <p>As televisões têm evoluído muito ao longo dos anos, e as Smart TVs se tornaram um dos principais destaques da indústria de eletrônicos. Afinal, esses aparelhos não apenas oferecem uma experiência de entretenimento aprimorada, mas também uma série de recursos inteligentes, como a facilidade em assistir a conteúdos no streaming e na internet, só que…</p>

                            <div class="teste53">
                                <p><?php
                                    date_default_timezone_set('America/Sao_Paulo');
                                    echo date("d/m/Y");
                                    ?>
                                </p>
                                <p class="mb-5 d-flex justify-content-end">Leia Mais</p>
                            </div>

                        </a>
                    </div>

                </div>

                <div class="col-md-2">

                </div>

                <div class="col-md-4">
                    <div class="row mt-5">
                        <h5 class="text-center"><i class="bi bi-newspaper"></i> Últimas Notícias
                            <div class="borda"></div>
                        </h5>

                    </div>

                    <div class="row mt-1 noticias-recente">
                        <a style="text-decoration: none;" class="" href=""><img class="img-fluid rounded-2" src="./img/cocacola.jpg" alt="">
                        
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /BODY -->

</body>

</html>