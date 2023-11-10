<?php
$campos = "id,caption,media_type,media_url,permalink,timestamp,username,profile_pic_url";
$token = "IGQWROTmN6NHhWaHJBaUJEX3d6TTd2Ti1nX29rVEF3bHYzdlBxNzZAiYzVIaDFrdm9DS3hnQVh2TnZALVWJSY1RhZA1B6eHJXYy15Q0kweXN4WGdtNFBOSGpkbUhOYllhamdnQzNBTlp6SlktWTQ3T0FBZADR5ajJOT1kZD";
$limitador = 3;
$stringApi = "https://graph.instagram.com/me/media?fields={$campos}&access_token={$token}&limit={$limitador}";
$conversaojsonPHP = @file_get_contents($stringApi);
$ResultadoDecodificados = json_decode($conversaojsonPHP, true, 512, JSON_BIGINT_AS_STRING);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Informativo | SSP-BA</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="index.php">STELECOM/SSP-BA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Blog</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                                <li><a class="dropdown-item" href="blog-home.html">Blog Home</a></li>
                                <li><a class="dropdown-item" href="blog-post.html">Blog Post</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Portfolio</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                                <li><a class="dropdown-item" href="portfolio-overview.html">Portfolio Overview</a></li>
                                <li><a class="dropdown-item" href="portfolio-item.html">Portfolio Item</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-5">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!--FOREACH HERE -->
                        <?php
                        $arrFiles = array();
                        $dirPath = "./assets/infos";
                        $files = preg_grep('/^([^.])/', scandir($dirPath));

                        print_r($files);

                        $count_files = count($files);

                        for ($i = 2; $i <= $count_files; $i++):
                            foreach ($files as $index => $file):
                                $filePath = $dirPath . '/' . $file;
                                if (is_file($filePath)):
                                    ?>
                                        <div class="carousel-item <?php echo $index === 2 ? 'active' : ''; ?>" data-bs-interval="3000">
                                            <div class="row gx-5 align-items-center justify-content-center">
                                                <div class="col-lg-8 col-xl-7 col-xxl-6">
                                                    <div class="my-5 text-center text-xl-start">
                                                        <h1 class="display-5 fw-bolder text-white mb-2">Novembro Azul é uma campanha
                                                        </h1>
                                                        <p class="lead fw-normal text-white-50 mb-4">de conscientização que ocorre
                                                            durante
                                                            todo o
                                                            mês de novembro com o objetivo de conscientizar a população masculina
                                                            sobre
                                                            a
                                                            importância da
                                                            prevenção e do diagnóstico precoce do câncer de próstata, que é o
                                                            segundo
                                                            tipo
                                                            de câncer
                                                            mais comum entre os homens.
                                                            Prevenir é a melhor forma de cuidar. Faça o exame anualmente. Cuide-se!
                                                            A
                                                            STELECOM
                                                            abraça essa causa. #bahiassp #stelecom #novembroazul #prevenção
                                                            #câncerdepróstata</p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img
                                                        class="img-fluid rounded-3 my-5" src="<?php echo $filePath; ?>" alt="..." />
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif;
                            endforeach;
                        endfor; ?>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
        </header>
        <!-- Features section-->
        <section class="py-5" id="features">
            <div class="container px-5 my-5">
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5 mb-lg-0"><img src="assets/logostel.png" width="300vw" /></div>
                    <div class="col-lg-8">
                        <div class="row gx-5 row-cols-1 row-cols-md-2">
                            <div class="col mb-5 h-100">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                        class="bi bi-collection"></i></div>
                                <h2 class="h5">Featured title</h2>
                                <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is
                                    just a bit more text.</p>
                            </div>
                            <div class="col mb-5 h-100">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                        class="bi bi-building"></i></div>
                                <h2 class="h5">Featured title</h2>
                                <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is
                                    just a bit more text.</p>
                            </div>
                            <div class="col mb-5 mb-md-0 h-100">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                        class="bi bi-toggles2"></i></div>
                                <h2 class="h5">Featured title</h2>
                                <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is
                                    just a bit more text.</p>
                            </div>
                            <div class="col h-100">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                        class="bi bi-toggles2"></i></div>
                                <h2 class="h5">Featured title</h2>
                                <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is
                                    just a bit more text.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial section-->
        <div class="py-5 bg-light">
            <div class="container px-5 my-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-10 col-xl-7">
                        <div class="text-center">
                            <div class="fs-4 mb-4 fst-italic">"Working with Start Bootstrap templates has saved me tons
                                of development time when building new projects! Starting with a Bootstrap template just
                                makes things easier!"</div>
                            <div class="d-flex align-items-center justify-content-center">
                                <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d"
                                    alt="..." />
                                <div class="fw-bold">
                                    Tom Ato
                                    <span class="fw-bold text-primary mx-1">/</span>
                                    CEO, Pomodoro
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog preview section-->
        <section class="py-5">
            <div class="container px-5 my-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div class="text-center">
                            <h2 class="fw-bolder">Nossas Redes Sociais</h2>
                            <p class="lead fw-normal text-muted mb-5">Acompanhe as últimas postagens feitas em nosso
                                instagram.</p>
                        </div>
                    </div>
                </div>
                <div class="row gx-5">
                    <?php foreach ($ResultadoDecodificados["data"] as $cp):
                        $caption = isset($cp["caption"]) ? $cp["caption"] : "";
                        $media_type = isset($cp["media_type"]) ? $cp["media_type"] : "";
                        $media_url = isset($cp["media_url"]) ? $cp["media_url"] : "";
                        $permalink = isset($cp["permalink"]) ? $cp["permalink"] : "";
                        $timestamp = isset($cp["timestamp"]) ? $cp["timestamp"] : "";
                        $username = isset($cp["username"]) ? $cp["username"] : "";
                        $comments = isset($cp["id"]) ? $cp["id"] : "";

                         ?>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="<?php echo $media_url; ?>" alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                                    <!--<a class="text-decoration-none link-dark stretched-link">
                                         <h5 class="card-title mb-3">títulooooo</h5> </a>-->
                                    <p class="card-text mb-0">
                                        <?php echo $caption; ?>
                                    </p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle me-3" src="<?php echo $media_url; ?>" width="30px"
                                                height="30px" alt="..." />
                                            <div class="small">
                                                <div class="fw-bold"><a href="<?php echo $username; ?>" target='_blank'>
                                                        <?php echo $username; ?>
                                                    </a></div>
                                                <div class="text-muted">
                                                    <?php $date = new DateTimeImmutable($timestamp);
                                                    echo $date->format("d/m/Y h:i"); ?>
                                                    &middot;
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
        </section>
    </main>
    <!-- Footer-->
    <footer class="bg-dark py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0 text-white">Copyright &copy; SECRETARIA DA SEGURANÇA PÚBLICA 2023</div>
                </div>
                <div class="col-auto">
                    <a class="link-light small" href="#!">Privacy</a>
                    <span class="text-white mx-1">&middot;</span>
                    <a class="link-light small" href="#!">Terms</a>
                    <span class="text-white mx-1">&middot;</span>
                    <a class="link-light small" href="#!">Contact</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>