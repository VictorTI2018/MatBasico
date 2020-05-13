<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de Matematica Básica</title>
    <link rel="stylesheet" href="views/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/assets/css/styles.css">
    <link rel="stylesheet" href="views/assets/css/pages.css">
</head>

<body>
    <div id="app">
        <header>

        </header>
        <aside>
            <div class="logo">
                <p class="logo_title">Matematica Basica</p>
            </div>
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Tutorial</a>
            </div>
        </aside>
        <main>
            <section class="section">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <?php
                        require __DIR__ . '/../views/pages/basico/index.php'
                        ?>
                    </div>
                </div>
            </section>
        </main>
        <footer>

        </footer>
    </div>
    <script src="views/assets/js/jquery.min.js"></script>
    <script src="views/assets/js/bootstrap.min.js"></script>
    <script src="views/assets/js/geral.js"></script>
    <script src="views/assets/js/app/aula01/index.js"></script>
</body>

</html>