<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">

        <title><?= $title ?></title>

        <!-- Add Bootstrap lib -->
        <link rel="stylesheet" href="/public/assets/bootstrap/dist/css/bootstrap.min.css" >
        <!-- Add Сss -->
        <link rel="stylesheet" href="/public/css/main.css" >

        <!-- Add JQ Lib-->
        <script src='/public/assets/jquery/dist/jquery.min.js'></script>

        <!-- Add BS3 js Lib-->
        <script src='/public/assets/bootstrap/dist/js/bootstrap.min.js'></script>

        <!-- Add Js-->
        <script src='/public/js/main.js'></script>
    </head>
    <body>
        <div class="container-fluid">
            <header class="row">
                <?= $top_nav ?>
            </header>
            <div class="row main_content">
                <div class="col-sm-12">
                    <section class="row head">
                        <div class="col-sm-12 head_logo">
                        </div>
                        <div class="col-sm-12">
                            <h1> <?= $h1 ?> </h1>
                        </div>
                    </section>

                    <?= $content ?>
                </div>
            </div>
            <footer>

            </footer>
        </div>
    </body>
</html>



