<?php
   require_once "conection.php";
   $sql="select image from images where tip='cultural' and id=1";
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
                        <a href="#">Culturale</a>
                      </div>
                      <li><a href="traseu.php">Trasee</a></li>
            </ul>
           </nav>
    </div>
   </header>
   <div>
   <?php
      
      $poze=$mysqli->query($sql);
      for($i=0;$i<1;$i++){
        $row=$poze->fetch_assoc();
      ?>  
    <h1 class="t"> Parcul Rozelor</h1>
    <img src="<?php echo $row['image']; ?>" alt="Parcul" class="center">
    <?php
        }
      ?>
      <?php
   $sql="select image from images where  tip='cultural' and id>1 and id<=5";
?>
    <?php
      
        $poze=$mysqli->query($sql);
        for($i=0;$i<4;$i++){
          $row=$poze->fetch_assoc();
        ?>
    <div class="responsive">
        <div class="gallery">
          <a target="_blank" href=<?php echo $row['image']; ?>>
            <img src=<?php echo $row['image']; ?>  width="600" height="400">
          </a>
        </div>
      </div>
      <?php
        }
      ?>
      
      
     
      
      <div class="clearfix"></div>
      
    <p> Parcul Rozelor, cunoscut anterior drept Parcul trandafirilor, Rosarium, Parcul de Cultura și Odihnă „Ștefan Plavăț” 
        și Parcul de Cultură este unul din parcurile din Timișoara.</p>
         <p>Parcul a fost înființat în 1891, odată cu Parcul Copiilor, cu ocazia Expoziției Universale (industrială, comercială și agrară),
          când aici au fost realizate aranjamente florale de către grădinarii Wilhelm Mühle, Franz Niemetz și Beno Agatsy. Florile au fost
         admirate de Franz Joseph, care a vizitat expoziția. Amenajarea peisagistică a parcului a început în 1929 de către arhitecții 
         peisagiști Árpád Mühle, fiul lui Wilhelm Mühle, și Mihai Demetrovici, șeful serviciului de horticultură din perioada respectivă.
          Parcul a fost amenajat în stil englezesc, cu alei, baldachine și rondouri de trandafiri. În perioada interbelică numele parcului
         era Rosarium și aici existau peste 1200 de varietăți de trandafiri, etichetate. Tot în această perioadă a fost amenajat teatrul în 
         aer liber.</p>
         <p>În 1944 parcul a fost distrus în urma bombardamentelor. După al Doilea Război Mondial parcul a fost refăcut, în el organizându-se 
        diverse spectacole în aer liber.Tot în parc exista o bază sportivă, amenajată iarna ca patinoar, iar vara ca teren de tenis.</p>
        <p>
            În 2012 parcul a fost reamenajat. Imediat lângă intrarea principală, din str. Academician Alexandru Borza, se află busturile 
            lui Wilhelm Mühle (1844–1908), dezvelit la 2 august 2013[7] și Árpád Mühle (1870–1930), dezvelit la 1 august 2014.[1]
        </p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2784.041858249247!2d21.23022781553026!3d45.75030677910538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47455d81525cb4d5%3A0xd8179b2d28e5587b!2sParcul%20Rozelor!5e0!3m2!1sro!2sro!4v1670953077303!5m2!1sro!2sro" width="900" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
<div>



</div>
<?php
   $sql="select image from images where tip='cultural' and id=6";
?>
<?php
      
      $poze=$mysqli->query($sql);
      for($i=0;$i<1;$i++){
        $row=$poze->fetch_assoc();
      ?>  
<h2 class="t">Piața Victoriei din Timișoara </h2>
<img src=<?php echo $row['image']; ?> alt="Piata" class="center">
<?php
        }
      ?>
       <?php
   $sql="select image from images where  tip='cultural' and id>6 and id<=10";
?>
    <?php
      
        $poze=$mysqli->query($sql);
        for($i=0;$i<4;$i++){
          $row=$poze->fetch_assoc();
        ?>
<div class="responsive">
    <div class="gallery">
      <a target="_blank" href=<?php echo $row['image']; ?>>
        <img src=<?php echo $row['image']; ?>  width="600" height="400">
      </a>
    </div>
  </div>
  <?php
        }
      ?>
  
  
  
  <div class="clearfix"></div>
  
<p> Piața Victoriei, fostă Piața Operei, este una din piețele centrale ale municipiului Timișoara, locul în care Timișoara a fost 
    proclamată în 20 decembrie 1989 primul oraș liber din România. La polii opuși ai pieței se găsesc la nord Opera, iar la sud Catedrala
  Mitropolitană. Dinspre Operă spre Catedrală promenada de pe dreapta se numește „Corso”, iar cea de pe stânga „Surogat”.
 În jurul pieței se găsesc instituții culturale - Opera Română, Teatrul Național, Teatrul Maghiar de Stat, Teatrul German de Stat,
  Catedrala Mitropolitană, cinematografele Timiș, Capitol și Studio, Muzeul Banatului, galerii de artă și multe magazine.
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.9204970180385!2d21.223343615530318!3d45.75273977910549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47455d7f9457c5f9%3A0xf7f1fbe8f7af5686!2sPia%C8%9Ba%20Victoriei%2C%20Timi%C8%99oara!5e0!3m2!1sro!2sro!4v1670954493946!5m2!1sro!2sro" width="900" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<?php
   $sql="select image from images where tip='cultural' and id=11";
?>
<?php
      
      $poze=$mysqli->query($sql);
      for($i=0;$i<1;$i++){
        $row=$poze->fetch_assoc();
      ?>  
<h3 class="t">Piața Unirii din Timișoara </h3>
<img src=<?php echo $row['image']; ?> alt="Domul" class="center">
<?php
        }
      ?>
       <?php
   $sql="select image from images where  tip='cultural' and id>11 and id<=15";
?>
    <?php
      
        $poze=$mysqli->query($sql);
        for($i=0;$i<4;$i++){
          $row=$poze->fetch_assoc();
        ?>
<div class="responsive">
    <div class="gallery">
      <a target="_blank" href=<?php echo $row['image']; ?>>
        <img src=<?php echo $row['image']; ?>  width="600" height="400">
      </a>
    </div>
  </div>
  <?php
        }
      ?>
  
  
  
  <div class="clearfix"></div>
  
<p> Piața Unirii este cea mai veche piață istorică din Timișoara, amenajată în stil baroc.

    De-a lungul istoriei sale piața s-a numit și Hauptplatz (Piața Principală), Domplatz (Piața Domului) și Piața Losonczy
 (după numele comitelui Ștefan Losonczy, ucis la 1552 când cetatea a fost cucerită de turci). Numele de Piața Unirii i-a fost dat în 1919,
  pentru că aici s-au oprit trupele române care au intrat în Timișoara.
 Obiectivul găzduiește importante obiective turistice, precum Domul romano-catolic, Palatul Baroc, Catedrala Ortodoxă Sârbă, Casa Brück, 
 Monumentul Sfintei Treimi, fântâna cu apă minerală și alte monumente arhitecturale.</p>
 Dezvoltarea Pieței Unirii este legată de istoria orașului. În 1716 trupele imperiale ale generalului Eugeniu de Savoia au cucerit Timișoara 
 din mâinile otomanilor, deschizând două secole de dezvoltare urbană în directă legătură cu stăpânirea austriacă și austro-ungară. Chiar în 
 acela an a început redesenarea Timișoarei, care a devenit dintr-o cetate medievală înconjurată de mlaștini o fortăreață modernă cu străzi 
 sistematizate.</p>
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.6831771617276!2d21.2267299155305!3d45.75749717910546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47456781b7c76ba9%3A0xdf9cdca30597d91!2zUGlhyJthIFVuaXJpaSwgVGltaciZb2FyYQ!5e0!3m2!1sro!2sro!4v1670955011305!5m2!1sro!2sro" width="900" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
    
   </body>
</html>