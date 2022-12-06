<?php
    include 'elements/head.php';
?>


<div class="header">
  <h1>Wolfgang Matyus</h1>
  <h1>Willkommen zu meinem perslönlichen Portfolio!</h1>
</div>
<?php
    include 'elements/nav.php';
?>
<hr>
<div class="row">
  <div class="col-3 sideMenu">
    <ul class="sidebar">
        <li  class="nav-link 
          <?php if(basename($_SERVER['PHP_SELF'])=="index.php#persDaten"){echo 'active';}else{echo '';}//setzt aktiven link active?>
            "><a href="#persDaten">Persönliche Daten</a></li>
        <li  class="nav-link 
          <?php if(basename($_SERVER['PHP_SELF'])=="index.php#pastJob"){echo 'active';}else{echo '';}//setzt aktiven link active?>
            "><a href="#pastJob">Beruflicher Werdegang</a></li>
        <li  class="nav-link 
          <?php if(basename($_SERVER['PHP_SELF'])=="index.php#school"){echo 'active';}else{echo '';}//setzt aktiven link active?>
            "><a href="#school">Schulische Laufbahn</a></li>
    </ul>
  </div>

  <div class="col-9">
    <p>
    <?php
        echo $_SERVER['PHP_SELF'] .'<br>';
        echo $_SERVER['SCRIPT_FILENAME'] .'<br>';
        echo $_SERVER['SCRIPT_NAME'] .'<br>';
        echo $_SERVER['SCRIPT_URI'] .'<br>';
      
        if(basename($_SERVER['PHP_SELF'])=="index.php#persDaten"){echo '<h1>Perönliche Daten</h1>';}else{echo '';}?>
    </p>
  </div>
</div>
<?php

    include 'elements/footer.php';

?>