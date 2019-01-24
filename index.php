<!DOCTYPE html>
<html lang="cs" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" media="all" href="styly.css" />

  </head>
  <body>
<?php

$HP = 100;
 do {
  $damage = rand (0,10);
  $HP -= $damage;
?>
<p>Dostal jsem damage: <?php echo $damage; ?></p>
<div class="ziju ziju_ubyty" style="width:<?php echo $HP;?>px">

</div>
<div class="ziju neziju" style="width: <?php echo 100 - $HP; ?>px">
</div>
<?php
} while ($HP > 0);
?>
</div>
  </body>
</html>
