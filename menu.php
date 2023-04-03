<?php
echo<<<end
    <!--Belka nawigacyjna-->
    <nav class="navbar navbar-expand-xxl fixed-top navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="strona-główna"><img src="img/logo.png"></a> <!-- Logo -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Przełącznik nawigacyjny">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">

            <li class="nav-item ms-5">
            <a class="nav-link"  href="strona-główna">Strona głowna  <i class="icon-home"></i></a>
            </li>

            <li class="nav-item ms-5">
            <a class="nav-link" href=" zapis-na-zajęcia">Zajęcia <i class="icon-calendar"></i></a>
            </li>

            <li class="nav-item dropdown ms-5">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Cennik <i class="icon-money"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="cennik-karnety">Karnety</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="cennik-zajęcia-grupowe">Zajęcia grupowe</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="cennik-suplementy">Suplementy diety</a></li>
            </ul>
            </li>

            <li class="nav-item ms-5">
            <a class="nav-link" href="galeria-zdjęć">Galeria <i class="icon-picture"></i></a>
            </li>

        </ul>
        </div>
    </div>
    </nav>
end;
?>