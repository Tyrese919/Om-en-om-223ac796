<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bit Academy Schaakt</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <table>
    <?php

      for ($i=0; $i < 8 ; $i++) {
        if(($i % 2) == 1) {
          $check = 1;
        } else {
          $check = 0;
        }
        ?><tr><?php

        for ($j=1; $j < 9 ; $j++) {

          if(($j % 2) == $check) {
              ?>
                <td class="cell black"></td>
              <?php
            } else {
              ?>
                <td class="cell white"></td>
              <?php
            }
          }

      ?></tr><?php

    }

    ?>
      </table>
  </body>
</html>
