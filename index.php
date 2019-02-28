<?php
  function innericons($class){
    for($i=1; $i<=4; $i++){
      echo '<div class="'.$class.$i.'"></div>';
    }
  }
  function drawtrack($class){
    for($i=1; $i<=6; $i++){
      echo '<div class="'.$class.$i.'"></div>';
    }
  }
  function draw8divs($class){
    for($i=1; $i<=8; $i++){
      echo '<div class="'.$class.$i.'"></div>';
    }
  }
  function stylemaker($class){
    $wid=0;
    if($class=='gbat' || $class=='gbbt' || $class=='gbct'){
      for($i=1; $i<=6; $i++){
        echo '.'.$class.$i.'{
          position:absolute;
          left:'.$wid.'px;
        }';
        $wid=30*$i;
      }
    }
      for($i=1; $i<=6; $i++){
        echo '.'.$class.$i.'{ border:1px solid black; width:30px; height:30px; }'.PHP_EOL;
      }
  }
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Ludo</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <style type="text/css">
  <?php
  stylemaker('rgat');
  stylemaker('rgbt');
  stylemaker('rgct');
  stylemaker('gbat');
  stylemaker('gbbt');
  stylemaker('gbct');
  stylemaker('byat');
  stylemaker('bybt');
  stylemaker('byct');
  ?>
  </style>
  <body>

    <div class="container">
      <div class="red">
        <?php innericons('red') ?>
      </div>
      <div class="gotorg">
        <div class="rga">
            <?php drawtrack('rgat'); ?>
        </div>
        <div class="rgb">
            <?php drawtrack('rgbt'); ?>
        </div>
        <div class="rgc">
          <?php drawtrack('rgct'); ?>
        </div>
      </div>
      <div class="green">
        <?php innericons('green') ?>
      </div>
      <div class="gotogb">
        <div class="gba">
            <?php drawtrack('gbat'); ?>
        </div>
        <div class="gbb">
            <?php drawtrack('gbbt'); ?>
        </div>
        <div class="gbc">
          <?php drawtrack('gbct'); ?>
        </div>
      </div>
      <div class="blue">
        <?php innericons('blue') ?>
      </div>
      <div class="gotoby">
        <div class="bya">
            <?php drawtrack('byat'); ?>
        </div>
        <div class="byb">
            <?php drawtrack('bybt'); ?>
        </div>
        <div class="byc">
          <?php drawtrack('byct'); ?>
        </div>
      </div>
      <div class="yellow">
        <?php innericons('yellow') ?>
      </div>
      <div class="gotoyr">
        <div class="gba">
            <?php drawtrack('gbat'); ?>
        </div>
        <div class="gbb">
            <?php drawtrack('gbbt'); ?>
        </div>
        <div class="gbc">
          <?php drawtrack('gbct'); ?>
        </div>
      </div>
      <div class="centerarea">
        <?php draw8divs('carea'); ?>
      </div>
    </div>

  </body>
</html>
