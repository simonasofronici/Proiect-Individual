<?php
   require_once "conection.php";
   $sql="select img from traseu where nume='Traseu1'";
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="widthf=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css" type="text/css" >
<style>
  header{
   background-image: url('TM1.jpg');
   background-size: cover;
}
div.gallery {
  border: 1px solid rgb(65, 64, 64);
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
.container{
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

* {
  box-sizing: border-box;
}
body{
    position: relative;
    background-image: url(t1.jpg);
    text opacity: 1;
}
.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
</style>
<header>
    <div class="container2">
           <img src="pmt-logo.png" alt="logo" class="logo">
           <nav>
            <ul >
                <li><a href="pi.html">Acasa</a></li>
                <li><a href="Home.html">Despre</a></li>
                <li class="dropdown">
                    <a class="dropbtn">Obiective Turistice</a>
                    <div class="dropdown-content">
                        <a href="religioase.php">Religioase</a>
                        <a href="culturale.php">Culturale</a>
                      </div>
                      <li><a href="#">Trasee</a></li>
                
            </ul>
           </nav>
    </div>
   </header>
   <h1 class="t">Traseu1: </h1>
   <?php
      
        $poze=$mysqli->query($sql);
        for($i=0;$i<3;$i++){
          $row=$poze->fetch_assoc();
        ?>
    <div class="responsive">
        <div class="gallery">
          <a target="_blank" href=<?php echo $row['img']; ?>>
            <img src=<?php echo $row['img']; ?>  width="600" height="400">
          </a>
        </div>
      </div>
      <?php
        }
      ?>

<?php
   $sql="select link from traseu where nume='Traseu1'";
?>
      <?php
      
      $poze=$mysqli->query($sql);
      for($i=0;$i<1;$i++){
        $row=$poze->fetch_assoc();
      ?>
     <div>
        <a href=<?php echo $row['link']; ?>>Obtine Indicatii</a>
    </div>
    <?php
        }
      ?>

      <div class="clearfix"></div>
      <?php
   $sql="select img from traseu where nume='Traseu2'";
?>
      <h2 class="t">Traseu2: </h2>
   <?php
      
        $poze=$mysqli->query($sql);
        for($i=0;$i<4;$i++){
          $row=$poze->fetch_assoc();
        ?>
    <div class="responsive">
        <div class="gallery">
          <a target="_blank" href=<?php echo $row['img']; ?>>
            <img src=<?php echo $row['img']; ?>  width="600" height="400">
          </a>
        </div>
      </div>
      <?php
        }
      ?>

<?php
   $sql="select link from traseu where nume='Traseu2'";
?>
      <?php
      
      $poze=$mysqli->query($sql);
      for($i=0;$i<1;$i++){
        $row=$poze->fetch_assoc();
      ?>
     <div>
        <a href=<?php echo $row['link']; ?>>Obtine Indicatii</a>
    </div>
    <?php
        }
      ?>

      <div class="clearfix"></div>
      <?php
   $sql="select img from traseu where nume='Traseu3'";
?>
      <h2 class="t">Traseu3: </h2>
   <?php
      
        $poze=$mysqli->query($sql);
        for($i=0;$i<3;$i++){
          $row=$poze->fetch_assoc();
        ?>
    <div class="responsive">
        <div class="gallery">
          <a target="_blank" href=<?php echo $row['img']; ?>>
            <img src=<?php echo $row['img']; ?>  width="600" height="400">
          </a>
        </div>
      </div>
      <?php
        }
      ?>

<?php
   $sql="select link from traseu where nume='Traseu3'";
?>
      <?php
      
      $poze=$mysqli->query($sql);
      for($i=0;$i<1;$i++){
        $row=$poze->fetch_assoc();
      ?>
     <div>
        <a href=<?php echo $row['link']; ?>>Obtine Indicatii</a>
    </div>
    <?php
        }
      ?>

      <div class="clearfix"></div>

      <?php
   $sql="select img from traseu where nume='Traseu4'";
?>
      <h2 class="t">Traseu4: </h2>
   <?php
      
        $poze=$mysqli->query($sql);
        for($i=0;$i<4;$i++){
          $row=$poze->fetch_assoc();
        ?>
    <div class="responsive">
        <div class="gallery">
          <a target="_blank" href=<?php echo $row['img']; ?>>
            <img src=<?php echo $row['img']; ?>  width="600" height="400">
          </a>
        </div>
      </div>
      <?php
        }
      ?>

<?php
   $sql="select link from traseu where nume='Traseu4'";
?>
      <?php
      
      $poze=$mysqli->query($sql);
      for($i=0;$i<1;$i++){
        $row=$poze->fetch_assoc();
      ?>
     <div>
        <a href=<?php echo $row['link']; ?>>Obtine Indicatii</a>
    </div>
    <?php
        }
      ?>

      <div class="clearfix"></div>
      
      <?php
   $sql="select img from traseu where nume='Traseu5'";
?>
      <h2 class="t">Traseu5: </h2>
   <?php
      
        $poze=$mysqli->query($sql);
        for($i=0;$i<3;$i++){
          $row=$poze->fetch_assoc();
        ?>
    <div class="responsive">
        <div class="gallery">
          <a target="_blank" href=<?php echo $row['img']; ?>>
            <img src=<?php echo $row['img']; ?>  width="600" height="400">
          </a>
        </div>
      </div>
      <?php
        }
      ?>

<?php
   $sql="select link from traseu where nume='Traseu5'";
?>
      <?php
      
      $poze=$mysqli->query($sql);
      for($i=0;$i<1;$i++){
        $row=$poze->fetch_assoc();
      ?>
     <div>
        <a href=<?php echo $row['link']; ?>>Obtine Indicatii</a>
    </div>
    <?php
        }
      ?>

      <div class="clearfix"></div>
      
      </body>
</html>