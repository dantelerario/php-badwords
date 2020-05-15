<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-badwords</title>
  </head>
  <body>
    <?php
      //Creare una variabile con un paragrafo di testo.
      // Visualizzare a schermo il paragrafo
      // Visualizzare a schermo la relativa lunghezza del paragrafo
      // Sostituire tutte le ricorrenze, nel paragrafo creato, della badword passata in GET (query string) con tre * (asterschi).

      $text = 'Creare una variabile con un paragrafo di testo';

      $replace = str_replace($_GET["name"], '***', $text);
     ?>

     <p><?php echo $text ?></p>

     <p>Il paragrafo è lungo <?php echo strlen($text); ?></p>

     <p><strong>Sostituzione della badword presa con GET con ***: </strong> <?php echo $replace; ?></p>




  </body>
</html>
