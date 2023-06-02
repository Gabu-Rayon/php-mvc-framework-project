<?php 

use app\core\Application; 

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="stylesheet" href="../inc/css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title><?php echo $this->title  ?></title>

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact Us</a>
                    </li>
                </ul>

                <?php if(Application::isGuest()):  ?>

                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">

                    <li class="nav-item active">
                        <a class="nav-link  active" href="/login">Login<span class="sr-only"> (Current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Register</a>
                    </li>
                </ul>
                <?php else: ?>

                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link  active" href="/profile">Profile
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link  active" href="/logout">Welcome
                            <?php echo Application::$app->user->getDisplayName() ?>
                            (Logout)
                        </a>
                    </li>
                </ul>

                <?php endif; ?>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php

     if (Application::$app->session->getFlash('success')):
     
     ?>

        <div class="alert alert-success">

            <?php echo Application::$app->session->getFlash('success') ?>

        </div>

        <?php endif; ?>

        {{content}}

    </div>

    <!-- <script src="../inc/js/bootstrap.bundle.min.js"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>