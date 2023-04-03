<!doctype html>
<html lang="pl">
  <head>
    <?php
        require 'head.php';
    ?>
    <link rel="stylesheet" href="galeria.css">
  </head>

  <body>
    <header>
      <?php
          require 'menu.php';
        ?>   
    </header>
        
    <main>
        <div class="container-fluid">
            <section>

                <div class="row">
                    <div class="col-xl-4 col-sm-12">
                      <hr>
                      <hr>
                    </div>
                    <div class="col-xl-4 col-sm-12">
                        <div class="tborder">
                            <p>Galeria zdjęć</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-12">
                      <hr>
                      <hr>
                    </div>
                </div>

                <div class="row">

                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="grafika">
                            <div class="zdj1">
                                <img class="img-fluid myborder" src="img/img1.jpg">
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="grafika">
                            <div class="zdj1">
                               <img class="img-fluid myborder" src="img/img2.jpg">
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="grafika">
                            <div class="zdj1">
                                <img class="img-fluid myborder" src="img/img3.jpeg">
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="grafika">
                            <div class="zdj1">
                                <img class="img-fluid myborder" src="img/img4.jpg">
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="grafika">
                            <div class="zdj1">
                                <img class="img-fluid myborder" src="img/img5.jpg">
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="grafika">
                            <div class="zdj1">
                                <img class="img-fluid myborder" src="img/img6.jpg">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12 personnel">
                        <p>Nasza kadra</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-md-6 col-sm-12">
                        <div class="grafika">
                            <div class="zdj2">
                                <div class="name-text">
                                  <a href="https://pl.wikipedia.org/wiki/Dwayne_Johnson" target="_blank"><img class="img-fluid myborder" src="img/img7.jpg"></a>
                                  <a class="link" href="https://pl.wikipedia.org/wiki/Dwayne_Johnson" target="_blank"><p>Dwayne Johnson - treningi obwodowe</p></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 col-sm-12">
                        <div class="grafika">
                            <div class="zdj2">
                              <div class="name-text">
                                <a href="https://pl.wikipedia.org/wiki/Mariusz_Pudzianowski" target="_blank"><img class="img-fluid myborder" src="img/img8.jpg"></a>
                                <a class="link" href="https://pl.wikipedia.org/wiki/Mariusz_Pudzianowski" target="_blank"><p>Mariusz Pudzianowski - treningi siłowe</p></a>
                              </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 col-sm-12">
                        <div class="grafika">
                            <div class="zdj2">
                              <div class="name-text">
                                <a href="https://pl.wikipedia.org/wiki/Anna_Lewandowska_(ur._1988)" target="_blank"><img class="img-fluid myborder" src="img/img9.jpg"></a>
                                <a class="link" href="https://pl.wikipedia.org/wiki/Anna_Lewandowska_(ur._1988)" target="_blank"><p>Anna Lewandowska - treningi fitness i cardio</p></a>
                              </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 col-sm-12">
                        <div class="grafika">
                            <div class="zdj2">
                              <div class="name-text"> 
                                <a href="https://pl.wikipedia.org/wiki/Bob_Sapp" target="_blank"><img class="img-fluid myborder" src="img/img10.jpg"></a>
                                <a class="link" href="https://pl.wikipedia.org/wiki/Bob_Sapp" target="_blank"><p>Bob Sapp - treningi MMA, K-1 oraz Wrestling</p></a>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <?php
        require 'footer.php';
    ?>
  </body>
</html>