<?php
    include 'elements/head.php';
    ?>

<?php
include 'elements/nav.php';
?>

<div class="header">
  <h1>Wolfgang Matyus</h1>
  <h1>Willkommen zu meinem perslönlichen Portfolio!</h1>
</div>
<hr>
<div class="row">
  <div class="col-3 menu">
    <ul class="sidebar">
        <a href="#persDaten" class="nav-link
          <?php if(basename($_SERVER['PHP_SELF'])=="index.php#persDaten"){echo 'active';}else{echo '';}//setzt aktiven link active?>
            "><li>pers. Daten</li></a>
        <a href="#pastJob" class="nav-link
          <?php if(basename($_SERVER['PHP_SELF'])=="index.php#persDaten"){echo 'active';}else{echo '';}//setzt aktiven link active?>
            "><li>Beruflicher Werdegang</li></a>
        <a href="#school" class="nav-link
          <?php if(basename($_SERVER['PHP_SELF'])=="index.php#persDaten"){echo 'active';}else{echo '';}//setzt aktiven link active?>
            "><li>Schulische Laufbahn</li></a>
    </ul>
  </div>

  <div class="col-9">
    <?php
        if(basename($_SERVER['PHP_SELF'])=="index.php#persDaten"){echo '<h1>Perönliche Daten</h1>' . include 'include/TempData/persData.php';;}else{echo '';}?>
  </div>
</div>
<?php

    include 'elements/footer.php';

?>