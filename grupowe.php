<!doctype html>
<html lang="pl">
  <head>
    <?php
        require 'head.php';
    ?>
    <link rel="stylesheet" href="karnety.css">
  </head>

  <body>
    <header>
      <?php
        require 'menu.php';
      ?>   
    </header>
        
    <main>
        <div class="container">
            <section>
                <div class="row">
                    <div class="col-sm-12 info">
                        <img src="img/price.png"><span class="price">Cennik</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12-sm">
                        <table class="table table-light table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Zajęcia grupowe</th>
                                    <th scope="col">Cena</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>MMA</td>
                                    <td>50zł</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>K-1</td>
                                    <td>50zł</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Wrestling</td>
                                    <td>60zł</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Fitness</td>
                                    <td>40zł</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Cardio</td>
                                    <td>30zł</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Siłowe</td>
                                    <td>80zł</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Obwodowe</td>
                                    <td>75zł</td>
                                </tr>
                            </tbody>
                        </table>
                    <div>
                </div>
            </section>
        </div>
    </main>
    
    <?php
        require 'footer.php';
    ?>
  </body>
</html>