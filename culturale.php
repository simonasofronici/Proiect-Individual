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
      
    <p> Parcul Rozelor, cunoscut anterior drept Parcul trandafirilor, Rosarium, Parcul de Cultura ??i Odihn?? ?????tefan Plav??????? 
        ??i Parcul de Cultur?? este unul din parcurile din Timi??oara.</p>
         <p>Parcul a fost ??nfiin??at ??n 1891, odat?? cu Parcul Copiilor, cu ocazia Expozi??iei Universale (industrial??, comercial?? ??i agrar??),
          c??nd aici au fost realizate aranjamente florale de c??tre gr??dinarii Wilhelm M??hle, Franz Niemetz ??i Beno Agatsy. Florile au fost
         admirate de Franz Joseph, care a vizitat expozi??ia. Amenajarea peisagistic?? a parcului a ??nceput ??n 1929 de c??tre arhitec??ii 
         peisagi??ti ??rp??d M??hle, fiul lui Wilhelm M??hle, ??i Mihai Demetrovici, ??eful serviciului de horticultur?? din perioada respectiv??.
          Parcul a fost amenajat ??n stil englezesc, cu alei, baldachine ??i rondouri de trandafiri. ??n perioada interbelic?? numele parcului
         era Rosarium ??i aici existau peste 1200 de variet????i de trandafiri, etichetate. Tot ??n aceast?? perioad?? a fost amenajat teatrul ??n 
         aer liber.</p>
         <p>??n 1944 parcul a fost distrus ??n urma bombardamentelor. Dup?? al Doilea R??zboi Mondial parcul a fost ref??cut, ??n el organiz??ndu-se 
        diverse spectacole ??n aer liber.Tot ??n parc exista o baz?? sportiv??, amenajat?? iarna ca patinoar, iar vara ca teren de tenis.</p>
        <p>
            ??n 2012 parcul a fost reamenajat. Imediat l??ng?? intrarea principal??, din str. Academician Alexandru Borza, se afl?? busturile 
            lui Wilhelm M??hle (1844???1908), dezvelit la 2 august 2013[7] ??i ??rp??d M??hle (1870???1930), dezvelit la 1 august 2014.[1]
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
<h2 class="t">Pia??a Victoriei din Timi??oara </h2>
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
  
<p> Pia??a Victoriei, fost?? Pia??a Operei, este una din pie??ele centrale ale municipiului Timi??oara, locul ??n care Timi??oara a fost 
    proclamat?? ??n 20 decembrie 1989 primul ora?? liber din Rom??nia. La polii opu??i ai pie??ei se g??sesc la nord Opera, iar la sud Catedrala
  Mitropolitan??. Dinspre Oper?? spre Catedral?? promenada de pe dreapta se nume??te ???Corso???, iar cea de pe st??nga ???Surogat???.
 ??n jurul pie??ei se g??sesc institu??ii culturale - Opera Rom??n??, Teatrul Na??ional, Teatrul Maghiar de Stat, Teatrul German de Stat,
  Catedrala Mitropolitan??, cinematografele Timi??, Capitol ??i Studio, Muzeul Banatului, galerii de art?? ??i multe magazine.
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
<h3 class="t">Pia??a Unirii din Timi??oara </h3>
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
  
<p> Pia??a Unirii este cea mai veche pia???? istoric?? din Timi??oara, amenajat?? ??n stil baroc.

    De-a lungul istoriei sale pia??a s-a numit ??i Hauptplatz (Pia??a Principal??), Domplatz (Pia??a Domului) ??i Pia??a Losonczy
 (dup?? numele comitelui ??tefan Losonczy, ucis la 1552 c??nd cetatea a fost cucerit?? de turci). Numele de Pia??a Unirii i-a fost dat ??n 1919,
  pentru c?? aici s-au oprit trupele rom??ne care au intrat ??n Timi??oara.
 Obiectivul g??zduie??te importante obiective turistice, precum Domul romano-catolic, Palatul Baroc, Catedrala Ortodox?? S??rb??, Casa Br??ck, 
 Monumentul Sfintei Treimi, f??nt??na cu ap?? mineral?? ??i alte monumente arhitecturale.</p>
 Dezvoltarea Pie??ei Unirii este legat?? de istoria ora??ului. ??n 1716 trupele imperiale ale generalului Eugeniu de Savoia au cucerit Timi??oara 
 din m??inile otomanilor, deschiz??nd dou?? secole de dezvoltare urban?? ??n direct?? leg??tur?? cu st??p??nirea austriac?? ??i austro-ungar??. Chiar ??n 
 acela an a ??nceput redesenarea Timi??oarei, care a devenit dintr-o cetate medieval?? ??nconjurat?? de mla??tini o fort??rea???? modern?? cu str??zi 
 sistematizate.</p>
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.6831771617276!2d21.2267299155305!3d45.75749717910546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47456781b7c76ba9%3A0xdf9cdca30597d91!2zUGlhyJthIFVuaXJpaSwgVGltaciZb2FyYQ!5e0!3m2!1sro!2sro!4v1670955011305!5m2!1sro!2sro" width="900" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
    
   </body>
</html>