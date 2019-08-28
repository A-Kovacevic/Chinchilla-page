<?php get_header(); ?>
<script type="text/javascript">
        $(window).load(function(){
          $('.flexslider').flexslider({
          animation: "slide",
          animationLoop: false,
          itemWidth: 450,
          itemMargin: 3
        });
          $('#toggle').click(function(){
            $('#div-header').toggle("slow");
        });
        });
</script>

<section id="contain-upoznaj">
    <section id="sect-1">
      <div class="cont-small"><!--odakle dolazim-->
        <?php
          $query = new WP_Query( array( 'cat' => 'upoznaj-me', 'tag' =>'upoznajme', 'p'=> '12') );
          while ( $query->have_posts() ) :
          $query->the_post();
        ?>
        <h3><?php the_title();?></h3>
        <p><?php the_content(); ?></p>

      <?php endwhile;?>
      </div>
    </section>

    <section id="sect-2"> <!--što jedem-->
        <div class="cont-big">
           <?php
          $q = new WP_Query( array( 'cat' => 'upoznaj-me', 'tag' =>'upoznajme', 'p'=> '21') );
          while ( $q->have_posts() ) :
          $q->the_post();
          ?>
          <h3><?php the_title();?></h3>
          <p><?php the_content(); ?></p>
         </div> 
        <div class="flexslider">
                  <ul class="slides">
              <li>
              <?php echo types_render_field('galerija', array("width" => "500", "height" => "350", "separator" => "</li><li>")) ?>
            </ul>
          </div>
            <?php endwhile;?>
        </div>
     
    </section> 

    <section id="sect-3">
        <div class="p-slider">
          <div class="flexslider">
            <h3>Dresura</h3>
                <ul class="slides">
                  <li>
                      <p>Prvi dani u novom domu za činčilu znaju biti jako stresni, stoga treba biti strpljiv. Prilagodba moze trajati tjednima, čak i mjesecima. Kako su činčile vrlo plahe životinje, potrebno je tiho prilaziti kavezu te joj tiho pričati kako bi se priviknula na glas. Činčile su noćne životinje, stoga vrijeme koje bi posvetili joj za igru je poželjnno u večernjim satima.</p>
                  </li>
                  <li>
                      <p>Nakon nekoliko dana, činčilu treba puštati iz kaveza svakodnevno. Kako su vrlo energične životinje, potrebno im je dosta vremena kako bi se istrčale. Nemojte ju loviti, to može biti veliki stres.Također, ne hvatajte činčilu za rep jer bi ga mogla odbaciti. Kada se životinjica malo smiri, možemo pokušati namamiti ju poslasticom da bi nam jela s dlana. To je prvi korak u dresuri.</p>
                  </li><li>
                      <p>Sada činčila ima veće povjerenje u Vas. Pokušavajte ju mamiti u krilo, na leđa, na rame. Budite oprezni i mirni, kako se životinjica ne bi uplašila, pala i u najgorem slučaju ozlijedila. Hranite ju dok je kod Vas. Mazite. Jasno će Vam dati do znanja što joj ne odgovara, tako da ćete ubrzo znati što voli.</p>
                  </li><li>
                      <p>Konačno. Vaša vam činčila dolazi, ne boji se i privržena je. Možete ju polako uzimati u ruke. No, oprezno. Jednom rukom uhvatite ju ispod glave, dok joj drugom rukom pridržavajte stražnje šapice.</p>
                  </li><li>
                      <p>Dalje, ako ste dovoljno strpljivi, možete svoju činčilu naučiti raznim trikovima.</p>
                  </li>
                  <li>
                    
                  </li>
                </ul>
              </div>
          
          
         
        </div>
        
    </section>

    <section id="sect-1-1">
      <div class="cont-small-1">
        <h3>Održi me zdravim</h3>
          <p>Zdrava činčila ima gusto,mekano i sjajno krzno. Suhu njuškicu, vesele oči bez promjena. Uredno se hrani, konzumira vodu te je aktivan. Ukoliko primjetite promjene, odvedite ju kod veterinara<br>
          Gubitak na težini je pokazatelj bolesti(proljev, zatvor, infekcije) ili većeg stresa. Ako činčila izgubi više od 10% tjelesne težine u 1-2 dana, tada ju treba prisilno hraniti.<br>
          Mutne, sive, zatvorene, natečene ili drugačije promjene na očima mogu biti znak upale rožnice, problema sa zubima ili mehaničkih povreda očiju.<br>
          Kada činčila jako plitko diše, često kiše, ima vlažnu njuškicu te se slabo kreće, mogući su problemi s dišnim putevima. <br>
          Zubi moraju stajati tako da bi se jedanko trošili. Ako su predugi , treba im više suhih grančica. Ukoliko činčila jako slini to može biti znak problema s kutnjacima. Tada je krzno sljepljeno i masno od usta, preko vrrata sve do trbuha. U tom slučaju što prije posjetite veterinara.</p>
      </div>
    </section>
</section>

<?php get_footer(); ?>