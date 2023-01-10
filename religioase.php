<?php
   require_once "conection.php";
   $sql="select image from images where name='Catedrala Mitropolitana1'";
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
                        <a href="#">Religioase</a>
                        <a href="culturale.php">Culturale</a>
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
    <h1 class="t"> Catedrala Mitropolitană din Timișoara </h1>
    <img src="<?php echo $row['image']; ?>" alt="Catedrala" class="center">
    <?php
        }
      ?>
      <?php
   $sql="select image from images where id>1 and id<=5";
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
      
    <p> Catedrala Mitropolitană din Timișoara este cel mai mare edificiu religios din Timișoara,
         catedrală a Mitropoliei Banatului, cu hramul „Trei Ierarhi”. A fost construită între 1936 și 1941
         și este un simbol al orașului. Cu înălțimea de 90,5 m în prezent este a doua biserică din România 
         ca înălțime după Catedrala Mântuirii Neamului, viitoarea catedrală patriarhală din București.</p>
         <p>Stilul arhitectonic a fost inspirat de arhitectura moldovenească în general și în special de Biserica
             Sfântul Gheorghe din Hârlău.  Stilul arhitectural al catedralei este atât unic cât și neobișnuit pentru 
             un lăcaș de cult ortodox de asemenea dimensiuni. Acesta îmbină tradiția religioasă română cu arhitectura 
             moldovenească și bizantină. Stilul, cu firide sub streșini, cu bolte înstelate în interior, cu discuri 
             lăcuite într-o multitudine de culori, poate fi găsit în mănăstiri precum Cozia sau Prislop, tipice secolului al XIV-lea.</p>
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2784.0219609380933!2d21.222029715530265!3d45.750705679105366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47455d78ad1df08b%3A0xa6d770774ae8d8f0!2sCatedrala%20Mitropolitan%C4%83%20Ortodox%C4%83!5e0!3m2!1sro!2sro!4v1670950379646!5m2!1sro!2sro"  width="900" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<div>



</div>
<?php
   $sql="select image from images where name='Domul Catolic1'";
?>
<?php
      
      $poze=$mysqli->query($sql);
      for($i=0;$i<1;$i++){
        $row=$poze->fetch_assoc();
      ?>  
<h2 class="t">Catedrala Sfântul Gheorghe din Timișoara </h2>
<img src="<?php echo $row['image']; ?>" alt="Domul" class="center">
<?php
        }
      ?>
       <?php
   $sql="select image from images where  id>5 and id<=10";
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
  
<p> Catedrala Sfântul Gheorghe din Timișoara sau Domul Romano-Catolic este catedrala Episcopiei Romano-Catolice de Timișoara
    și unul din monumentele emblematice ale orașului. Edificiul are hramul Sfântului Gheorghe și a fost construit între anii 1736–1774.</p>
     <p>Construcția a durat peste 2 decenii, în 2 etape: 1736-1751 și 1755-1774. Monumentul este realizat în stil baroc din cărămidă și 
    are decorații din piatră și stuc. Turlele au o înălțime redusă, determinată de apropierea zidului cetății. Interiorul este bogat și 
    somptuos, remarcându-se cele 9 altare decorate în stil baroc și rococo, sculptate de vienezul Johan Müller, împodobite cu icoane vechi,
 orga construită în 1908 de Leopold Wegenstein, dar si ușile de stejar ornamentate cu grilaje din nichel pur. Domul Romano-Catolic (Catedrala Romano-Catolică) 
 este considerat a fi cea mai unitară și reprezentativă construcție barocă a Timișoarei și una dintre cele mai valoroase existente în Banat.
Proiectul inițial, posibil a fi realizat de Joh. Jacob Schelblauer (consilier al orașului Viena), a fost materializat între anii 1736 și 1774, iar execuția trădează,
 în ciuda celor patru constructori (Kaspar Dissel, Johann Lechner, Carl Alexander Steinlein, Johann Theodor Kostka), ce s-au succedat la conducerea lucrărilor, 
 o stăpânire perfectă a tehnicilor barocului. La decorația interioară au participat artiști renumiți ca Michael Angelo Unterberger (pictor și director al Academiei 
 artelor frumoase din Viena), la pictarea altarului principal (1754), sculptorul vienez Johann Joseph Rossler, prin statuile Sfântului Carol Boromeus (în stânga altarului),
  a Sfintei Theresia (în dreapta altarului) și a perechii de heruvimi care domină ornamentația din partea centrală a altarului, precum și Johann Schopf (1772), la decorarea altarelor laterale.</p>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.6508456223587!2d21.227905415530604!3d45.758145279105634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47456781dc3f5451%3A0x9245cf4b1a5baf73!2zQ2F0ZWRyYWxhIHJvbWFuby1jYXRvbGljxIMg4oCeU2bDom50dWwgR2hlb3JnaGXigJ0!5e0!3m2!1sro!2sro!4v1670950830244!5m2!1sro!2sro" width="900" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<?php
   $sql="select image from images where name='Biserica Milenium'";
?>
<?php
      
      $poze=$mysqli->query($sql);
      for($i=0;$i<1;$i++){
        $row=$poze->fetch_assoc();
      ?>  
<h3 class="t">Biserica Millennium din Timișoara </h3>
<img src="<?php echo $row['image']; ?>" alt="Domul" class="center">
<?php
        }
      ?>
       <?php
   $sql="select image from images where id>11 and id<=15";
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
  
<p> Biserica Millennium, cu hramul Sfânta Maria, este cea mai mare biserică ro­ma­no-catolică din Timișoara,
     situată în Piața Romanilor din cartierul Fabric.</p>
 <p>Lăcașul a fost construit pentru cinstirea a 1000 de ani de la creștinarea regelui Ștefan I al Ungariei
     (de aici numele de Millennium).</p>
     <p>Construcția, în stil neoromanic, a început în 1896 și a fost terminată în 1901. 
     Proiectul a fost realizat de arhitectul Lajos Ybl.
  Biserica a fost sfințită în data de 13 octombrie 1901 de episcopul Sándor Dessewffy.
    Vechea biserică parohială din Fabric a fost donată în anul 1906 către Biserica Română Unită cu Roma, Greco-Catolică.</p>
    <p>
        Biserica are două turnuri cu o înălțime de 65 de metri, cupola centrală având 45 de metri înălțime. Capacitatea lăcașului 
        este de până la 3000 de persoane. Marele clopot are o greutate de 2420 de kilograme. Este dotată cu o orgă fabricată de meșterul 
        Leopold Wegenstein și donată de episcopul Alexander Dessewffy.
    </p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.7246075058288!2d21.245589115530457!3d45.75666667910549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47456764863959ff%3A0x521f36806a0e356e!2sBiserica%20Millenium!5e0!3m2!1sro!2sro!4v1670952229608!5m2!1sro!2sro" width="900" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<?php
   $sql="select image from images where name='Catedrala Ortodoxa Sarba din Timisoara3'";
?>
<?php
      
      $poze=$mysqli->query($sql);
      for($i=0;$i<1;$i++){
        $row=$poze->fetch_assoc();
      ?>  
<h3 class="t">Catedrala Ortodoxa Sarba din Timisoara </h3>
<img src="<?php echo $row['image']; ?>" alt="Domul" class="center">
<?php
        }
      ?>
       <?php
   $sql="select image from images where id>16 and id<=20";
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
  
<p> Situata pe strada Emanoil Ungureanu, nr. 14, in Piata Unirii din Timisoara,
este ridicata pe locul unei biserici mai vechi ce a ars in incendiul din 1728;
aceasta noua biserica a fost construita intre anii 1744 - 1748;</p>
 <p>Lăcașul a fost construit pentru cinstirea a 1000 de ani de la creștinarea regelui Ștefan I al Ungariei
     (de aici numele de Millennium).</p>
     <p>Din punct de vedere arhitectural apartine stilului baroc,
fiind construita cu ajutorul donatiilor primite de la credinciosi.
In prima faza, edificiul nu avea turnuri, acestea fiind adaugate la renovarea din anul 1791.Cele doua turnuri sunt dotate cu 5 clopote,
interiorul a fost pictat de catre artistul Constantin Daniel, iar iconostasul a fost realizat de catre sculptorul sarb Mihailo Janic.</p>
    <p>
    La inceputul existentei sale, edificiul a fost folosit atat de catre credinciosii ortodocsi de etnie romana, cat si de cei de etnie sarba,
     insa mai tarziu cele doua Biserici s-au separat, iar aceasta a revenit comunitatii sarbe.
In anul 1964 a fost declarata monument istoric.
    </p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.667617559331!2d21.225795815530514!3d45.75780907910547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47456781cebc85dd%3A0xf814c0f477e291da!2zRXBpc2NvcGlhIE9ydG9kb3jEgyBTw6JyYsSD!5e0!3m2!1sro!2sro!4v1673385833530!5m2!1sro!2sro"width="900" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
   </body>
</html>

