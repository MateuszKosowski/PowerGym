<!doctype html>
<html lang="pl">
  <head>
    <?php
        require 'head.php';
    ?>
    <link rel="stylesheet" href="glowna.css">
    <link rel="stylesheet" href="mapa.css">
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
                  <div class="col-sm-12 mb-5">
                    <img class="img-fluid" src="img/gym.jpeg">
                  </div>
              </div>
            </section>
            <section>
                <div class="row">
                  <div class="col-sm-12 mb-5 gInfo">
                        <h1><span>POWER</span>GYM</h1>
                        <p>To siłownia nowej generacji. Powstała w odpowiedzi na wciąż rosnące wymagania klientów chcących zadbać o swoje zdrowie, poprawić sylwetkę czy też po prostu czuć się lepiej. Z nami zrzucisz zbędne kilogramy, zbudujesz masę mięśniową, ujędrnisz ciało, zredukujesz cellulit, wyleczysz bóle pleców oraz wady postawy, zapobiegniesz osteoporozie, poprawisz swoje samopoczucie fizyczne i psychiczne. Nasi trenerzy to wykwalifikowana kadra z wieloletnim doświadczeniem, zarówno w sportach siłowych jak i wydolnościowych. To co nas wyróżnia to indywidualne podejście do każdego klienta, profesjonalna obsługa i trening najwyższej klasy.</p>
                  </div>
                </div>
            </section>
            <section>
                <div class="row gx-3">
                  <div class="col-xl-6 discount">
                    <h1 class="ad">Kupując online zapłacisz <span>nawet 20% mniej</span> za pierwszy pełny miesiąc umowy!</h1>
                    <ul class="adUl">
                      <li><span>1.</span><strong> O zł</strong>  opłata członkowska</li>
                      <li><span>2.</span> <strong> 7-dniowa</strong> Gwarancja Satysfakcji</li>
                      <li><span>3.</span><strong> 10% rabatu</strong> na zakupy w sklepie stacjonarnym</li>
                    </ul>
                  </div>

                  <div class=" col-xl-6 map-responsive " style="height: 500px">
                      <iframe src="https://maps.google.com/maps?q=Strykowska%2010/18,%2091-725%20%C5%81%C3%B3d%C5%BA&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:1px black solid; border-radius: 20px;" allowfullscreen></iframe>
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