<div class="col-md-12 menufixo">
    <div class="flex-container">
        <div class="row">
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">
                    <a class="navbar-brand horario d-none d-md-block d-lg-block">
                        <?php
                        date_default_timezone_set('America/Sao_Paulo');
                        echo date("d/m/Y");
                        ?>
                    </a>

                    <p class="navbar-brand horario d-block d-md-none">
                        MENU |
                        <?php
                        date_default_timezone_set('America/Sao_Paulo');
                        echo date("d/m/Y");
                        ?>
                    </p>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-md-center" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Cultura e Lazer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Previdenciário</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Saúde</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Sete Cidades</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">SAI</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Vídeos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contato</a>
                            </li>
                        </ul>

                        <li class="nav-item d-flex justify-content-start mt-1  d-block d-md-none">
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </li>
                    </div>

                    <li class="nav-item d-flex justify-content-end mt-1 me-5 d-none d-md-block d-lg-block">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
                        </form>

                    </li>
                </div>
            </nav>
        </div>
    </div>
</div>

<div class="row background-ABC" style="background-image: url(./img/the-online-post-header-bg.png); height: 40vh;">
    <div class="flex-container">
        <div class="col-md-6 d-flex justify-content-center">
            <a href=""><img src="./img/logo.webp" alt=""></a>
        </div>
    </div>
</div>
<div class="row borda"></div>