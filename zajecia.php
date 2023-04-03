<?php
    session_start();
?>

<!doctype html>
<html lang="pl">
  <head>
    <?php
        require 'head.php';
    ?>
    <link rel="stylesheet" href="zajecia.css">
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
                <div class="row registration">
                    <div class="col-xl-6 col-sm-12 center">
                        <p class="info center">Opis dostępnych zajęć w naszej siłowni:</p>

                        <form method="post" action="skrypt_opis.php">
                            <select name="zajecia" required="required" name="zajecia" id="option">
                                <option value="" disabled selected>Wybierz zajęcia</option>

                                <?php
                                     require 'skrypt_generowane_opcje.php';
                                ?>

                            </select>
                            <input type="submit" value="Potwierdź wybór" id="ok">
                            <br><br>
                        </form>

                        <div class="description">

                            <?php

                                if(isset($_SESSION['opis']))
                                {
                                    echo $_SESSION['opis'];
                                }
                                
                            ?>

                        </div>
                    </div>

                    <div class="col-xl-6 col-sm-12">
                        <form method="post" action="skrypt_rezerwacja.php">
                            <fieldset>
                            <legend>Rejestracja na zajęcia</legend>
                                <input type="email" required="required" placeholder="E-mail" onfocus="this.placeholder=''" onblur="this.placeholder='E-mail'" name="email">
                                <br>
                                <input type="text" required="required" placeholder="Imię" onfocus="this.placeholder=''" onblur="this.placeholder='Imię'" name="imie">
                                <br>
                                <input type="text" required="required" placeholder="Nazwisko" onfocus="this.placeholder=''" onblur="this.placeholder='Nazwisko'" name="nazwisko">
                                <br>
                                <select name="zajecia" required="required" name="zajecia">
                                    <option value="" disabled selected>Wybierz zajęcia</option>

                                    <?php
                                         require 'skrypt_generowane_opcje.php';
                                    ?>  

                                </select>
                                <br>
                                <input type="date" required="required" name="data" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>">
                                <br>
                                <input type="submit" value="Zarezerwuj">

                                <div class="Error">
                                    <?php
                                        if(isset($_SESSION['Error']))
                                        {
                                            echo $_SESSION['Error'];
                                            unset($_SESSION['Error']);
                                        }

                                        if(isset($_SESSION['It_works']))
                                        {
                                            echo $_SESSION['It_works'];
                                            unset($_SESSION['It_works']);
                                        }
                                    ?>
                                </div>

                            </fieldset>
                        </form>
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