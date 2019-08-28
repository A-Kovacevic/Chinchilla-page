
	<?php wp_footer(); ?>

	<?php 
if(isset($_POST ['posalji'])){
      $to = "utekla25@gmail.com";
      $from = $_POST ['mail'];
      $ime = $_POST['name'];
      $subject = "Upit";
      $subject2 = "Vaš upit";
      $message = $ime . " " . $prezime . " " . "\n\n" . $_POST['poruka'] ;
      $message2 = "Kopija vašeg maila" . $ime . "\n\n" . $_POST['poruka'];
      $headers = "From:" . $from;
      $headers2 = "From:" . $to;
      mail ($to, $subject, $message, $headers);
      mail ($to, $subject2, $message2, $headers2);
      header('Location: page-hvala.php');

}
?>
	 <div id="obrazac">
	 	<div class="pitanja">
	 		<form>
	 		<div class="obrasci" >
	 			<div class="imeimail">	 			
		 			<div class="divime"><p>Ime</p><input type="text" name="name" ></div>
		 			<div style="width: 2%;float: left;margin: 0 2%;"><p></p></div>
		 			<div class="divmail"><p>E-mail</p><input type="text" name="mail"></div>
	 			</div>
	 			<div style="clear: both;"></div>
	 			<div class="textarea"><p>Vaš upit</p><textarea rows="4" cols="70" name="poruka"></textarea></div>      
	 			<input type="submit" name="posalji" value="Posalji" class="submit">

	 		</div>	
	 		</form>
	 	</div>
	 	<div class="kontakt">
	 		<p>Chinchillas</p>
	       <p>E-mail: chinchillas@yahoo.com</p>
	       <p>Mobitel: +385-91-670-2429</p>
	       <a href="https://www.facebook.com/pages/category/Community/Prodaja-činčila-422239341197278/" target="blank"><p>Facebook:  Prodaja činčila</p></a>
	       <p>Adresa: Plepelićeva ulica 43</p>
	       <p>10410 Velika Gorica</p>
	 	</div>
	 </div>
</body>