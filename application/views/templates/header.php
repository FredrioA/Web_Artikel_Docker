<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title><?= $judul; ?></title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #d92400;">
            <a class="navbar-brand" href="<?= base_url(); ?>" type="hidden" name="search" value=""><strong>Dunia Artikel</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="form-inline my-2 my-lg-0" method="POST" action="">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search" autocomplete="off" style="width: 400">
                    <button class="btn btn btn-dark my-2 my-sm-0" type="submit" name="submit">Search</button>
                </form>
            </div>

            <?php if(logged_in()) : ?>
                <a type="button" class="btn btn-dark" href="<?= base_url('auth/'); ?>logout">Logout</a>
            <?php else : ?>
                <a type="button" class="btn btn-dark" href="<?= base_url('auth'); ?>">Login</a>
            <?php endif; ?>
    </nav>