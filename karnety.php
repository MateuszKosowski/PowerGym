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
                                    <th scope="col">Usługi/Karnety</th>
                                    <th scope="col">Cena</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Wejście jednorazowe</td>
                                    <td>30zł</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Opłata wpisowa</td>
                                    <td>19zł</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td><dfn title="Pon-Czw od 09:00 do 15:00, Pt-Nd goidzny działania klubu">Karnet werjsa - Normal</dfn></td>
                                    <td>89zł</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td><dfn title="Pon-Nd goidzny działania klubu">Karnet wersja - Pro</dfn></td>
                                    <td>129zł</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Zamrożenie karnetu</td>
                                    <td>30zł</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Wypożyczenie kłódki</td>
                                    <td>5zł</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Dopłata za wejście po godzinach obowiązywania karnetu</td>
                                    <td>10zł</td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Kara za udostępnienie karnetu osobom trzecim</td>
                                    <td>250zł</td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>Kara za brak zmiany obuwia</td>
                                    <td>100zł</td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td>Kara za uszkodzenie szafki</td>
                                    <td>300zł</td>
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