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
    <h1 class="t"> Catedrala Mitropolitan?? din Timi??oara </h1>
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
      
    <p> Catedrala Mitropolitan?? din Timi??oara este cel mai mare edificiu religios din Timi??oara,
         catedral?? a Mitropoliei Banatului, cu hramul ???Trei Ierarhi???. A fost construit?? ??ntre 1936 ??i 1941
         ??i este un simbol al ora??ului. Cu ??n??l??imea de 90,5 m ??n prezent este a doua biseric?? din Rom??nia 
         ca ??n??l??ime dup?? Catedrala M??ntuirii Neamului, viitoarea catedral?? patriarhal?? din Bucure??ti.</p>
         <p>Stilul arhitectonic a fost inspirat de arhitectura moldoveneasc?? ??n general ??i ??n special de Biserica
             Sf??ntul Gheorghe din H??rl??u.  Stilul arhitectural al catedralei este at??t unic c??t ??i neobi??nuit pentru 
             un l??ca?? de cult ortodox de asemenea dimensiuni. Acesta ??mbin?? tradi??ia religioas?? rom??n?? cu arhitectura 
             moldoveneasc?? ??i bizantin??. Stilul, cu firide sub stre??ini, cu bolte ??nstelate ??n interior, cu discuri 
             l??cuite ??ntr-o multitudine de culori, poate fi g??sit ??n m??n??stiri precum Cozia sau Prislop, tipice secolului al XIV-lea.</p>
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
<h2 class="t">Catedrala Sf??ntul Gheorghe din Timi??oara </h2>
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
  
<p> Catedrala Sf??ntul Gheorghe din Timi??oara sau Domul Romano-Catolic este catedrala Episcopiei Romano-Catolice de Timi??oara
    ??i unul din monumentele emblematice ale ora??ului. Edificiul are hramul Sf??ntului Gheorghe ??i a fost construit ??ntre anii 1736???1774.</p>
     <p>Construc??ia a durat peste 2 decenii, ??n 2 etape: 1736-1751 ??i 1755-1774. Monumentul este realizat ??n stil baroc din c??r??mid?? ??i 
    are decora??ii din piatr?? ??i stuc. Turlele au o ??n??l??ime redus??, determinat?? de apropierea zidului cet????ii. Interiorul este bogat ??i 
    somptuos, remarc??ndu-se cele 9 altare decorate ??n stil baroc ??i rococo, sculptate de vienezul Johan M??ller, ??mpodobite cu icoane vechi,
 orga construit?? ??n 1908 de Leopold Wegenstein, dar si u??ile de stejar ornamentate cu grilaje din nichel pur. Domul Romano-Catolic (Catedrala Romano-Catolic??) 
 este considerat a fi cea mai unitar?? ??i reprezentativ?? construc??ie baroc?? a Timi??oarei ??i una dintre cele mai valoroase existente ??n Banat.
Proiectul ini??ial, posibil a fi realizat de Joh. Jacob Schelblauer (consilier al ora??ului Viena), a fost materializat ??ntre anii 1736 ??i 1774, iar execu??ia tr??deaz??,
 ??n ciuda celor patru constructori (Kaspar Dissel, Johann Lechner, Carl Alexander Steinlein, Johann Theodor Kostka), ce s-au succedat la conducerea lucr??rilor, 
 o st??p??nire perfect?? a tehnicilor barocului. La decora??ia interioar?? au participat arti??ti renumi??i ca Michael Angelo Unterberger (pictor ??i director al Academiei 
 artelor frumoase din Viena), la pictarea altarului principal (1754), sculptorul vienez Johann Joseph Rossler, prin statuile Sf??ntului Carol Boromeus (??n st??nga altarului),
  a Sfintei Theresia (??n dreapta altarului) ??i a perechii de heruvimi care domin?? ornamenta??ia din partea central?? a altarului, precum ??i Johann Schopf (1772), la decorarea altarelor laterale.</p>
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
<h3 class="t">Biserica Millennium din Timi??oara </h3>
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
  
<p> Biserica Millennium, cu hramul Sf??nta Maria, este cea mai mare biseric?? ro??ma??no-catolic?? din Timi??oara,
     situat?? ??n Pia??a Romanilor din cartierul Fabric.</p>
 <p>L??ca??ul a fost construit pentru cinstirea a 1000 de ani de la cre??tinarea regelui ??tefan I al Ungariei
     (de aici numele de Millennium).</p>
     <p>Construc??ia, ??n stil neoromanic, a ??nceput ??n 1896 ??i a fost terminat?? ??n 1901. 
     Proiectul a fost realizat de arhitectul Lajos Ybl.
  Biserica a fost sfin??it?? ??n data de 13 octombrie 1901 de episcopul S??ndor Dessewffy.
    Vechea biseric?? parohial?? din Fabric a fost donat?? ??n anul 1906 c??tre Biserica Rom??n?? Unit?? cu Roma, Greco-Catolic??.</p>
    <p>
        Biserica are dou?? turnuri cu o ??n??l??ime de 65 de metri, cupola central?? av??nd 45 de metri ??n??l??ime. Capacitatea l??ca??ului 
        este de p??n?? la 3000 de persoane. Marele clopot are o greutate de 2420 de kilograme. Este dotat?? cu o org?? fabricat?? de me??terul 
        Leopold Wegenstein ??i donat?? de episcopul Alexander Dessewffy.
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
 <p>L??ca??ul a fost construit pentru cinstirea a 1000 de ani de la cre??tinarea regelui ??tefan I al Ungariei
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

