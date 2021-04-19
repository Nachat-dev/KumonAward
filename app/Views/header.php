<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kumon</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/header.css">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="/profile" style="margin-left: 25px;">Kumon</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>-->
            </ul>
        </div>
        <div class="row headerright" style="float: right;">
            <div id="outer">
                <?php $session = session(); ?>
                <p class="inner" type=""><?= $session->get('stdNameTH') ?></p>&nbsp;
                <div class="inner dropdown">
                    <a class="dropbtn" style="margin-right: 20px;"><i class="fas fa-chevron-circle-down"></i></a>
                    <div class="dropdown-content">
                        <a href="/logout">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

</body>

</html>