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
        <?php if(basename($_SERVER['PHP_SELF'])=="index.php#persDaten"){echo 'active';}else{echo '';}//setzt aktiven link active?>"><li>pers. Daten</li></a>
        <a href="#Daten"><li>pers. Daten</li></a>
        <a href="#Daten"><li>pers. Daten</li></a>
        <a href="#Daten"><li>pers. Daten</li></a>
    </ul>
  </div>

  <div class="col-9">
    <?php
        if(basename($_SERVER['PHP_SELF'])=="index.php#persDaten"){echo 'active';}else{echo '';}//setzt aktiven link active?>">HOME</a>
    ?>
    <h1>The City</h1>
    <p>Chania is the capital of the Chania region on the island of Crete. The city can be divided in two parts, the old town and the modern city.</p>
    <p>Resize the browser window to see how the content respond to the resizing.</p>
  </div>
</div>
<?php

    include 'elements/footer.php';

?>