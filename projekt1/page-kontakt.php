<?php get_header(); ?>

<section id="contain-kontakt-form">
  
<?php 
if(isset($_POST ['submit'])){
      $to = "utekla25@gmail.com";
      $from = $_POST ['email'];
      $ime = $_POST['ime'];
      $prezime = $_POST['prezime'];
      $boja = $_POST['boja'];
      $spol = $_POST['spol'];
      $subject = "Rezervacija";
      $subject2 = "Vaša rezrevacija";
      $message = $ime . " " . $prezime . " " . "\n\n" . $_POST['message'] . $_POST['boja'] . $_POST['spol'];
      $message2 = "Kopija vašeg maila" . $ime . "\n\n" . $_POST['message'];
      $headers = "From:" . $from;
      $headers2 = "From:" . $to;
      mail ($to, $subject, $message, $boja, $spol, $headers);
      mail ($to, $subject2, $message2, $boja, $spol, $headers2);
      header('Location: page-hvala.php');
}
?>
<script>
  $(document).ready(function(){
    $("a#single_image").fancybox();
    $("a#single_image").fancybox({
      'hideOnContentClick':true
    });
    $("a.group").fancybox({
    'transitionIn'  : 'elastic',
    'transitionOut' : 'elastic',
    'speedIn'   : 600, 
    'speedOut'    : 200, 
    'overlayShow' : false
  });
  });
</script>
<div class="background">
    <div class="kont-forma">
      <h3>Rezervacija</h3>
      <form action="" method="post">
          <div class="imeprezime">
              <div class="ime"><p>Ime</p><input type="text" name="ime"><br></div>
              <div class="prezime"><p>Prezime</p><input type="text" name="prezime" ><br></div>
          </div>
          <div class="mailbroj">
              <div class="email"><p>E-mail</p><input type="text" name="email"><br> </div>
              <div class="broj"> <p>Broj mobitela</p><input type="number" name="broj"><br> </div>
          </div>
        <div class="bojaspol">
             <div class="boja"><p>Boja</p>
                <input type="radio" name="boja" value="standard"><span>Standard (250kn)</span><br>
                <input type="radio" name="boja" value="beige"><span>Beige (350kn)</span><br>
                <input type="radio" name="boja" value="white"><span>White (450kn)</span>
            </div>
            <div class="spol">
               <p> Spol</p>
               <input type="radio" name="spol" value="m"><span>Muški</span><br>
                <input type="radio" name="spol" value="z"><span>Ženski</span>
            </div>
          </div>
            <div class="poruka">  
                <p>Upišite poruku</p><textarea name="message" rows="10" width="96%"></textarea>
            </div>
        </form>
       
      <input type="submit" name="submit" value="Pošalji">
  </div> 
  <div class="galerija">
    <a id="single_image" class="group" href="<?php bloginfo('template_url');?>/assets/images/baby1.jpg"><img src="<?php bloginfo('template_url');?>/assets/images/baby1.jpg"></a>
      <a id="single_image" class="group" href="<?php bloginfo('template_url');?>/assets/images/baby2.jpg"><img src="<?php bloginfo('template_url');?>/assets/images/baby2.jpg"></a>
      <a id="single_image" class="group" href="<?php bloginfo('template_url');?>/assets/images/baby4.jpg"><img src="<?php bloginfo('template_url');?>/assets/images/baby4.jpg"></a>
      <a id="single_image" class="group" href="<?php bloginfo('template_url');?>/assets/images/baby5.jpg"><img src="<?php bloginfo('template_url');?>/assets/images/baby5.jpg"></a>
  </div>
</div>
 </section> 


 <footer>
   <section id="kontakt">
     <div class="karta"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2785.11810711693!2d16.059996750933205!3d45.72872617900233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47667ef6c7f83595%3A0xb3b781ccdfc35e27!2sPlepeli%C4%87eva+ul.+43%2C+10410%2C+Velika+Gorica!5e0!3m2!1shr!2shr!4v1539251804788" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
       </div>
    <div class="kont-opce">
      <h3>O nama</h3>
       <p>Chinchillas</p>
       <p>E-mail: chinchillas@yahoo.com</p>
       <p>Mobitel: +385-91-670-2429</p>
       <a href="https://www.facebook.com/pages/category/Community/Prodaja-činčila-422239341197278/"><p>Facebook:  Prodaja činčila</p></a> 
     </div>
      
   </section>
 </footer>



