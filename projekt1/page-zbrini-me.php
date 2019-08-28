<?php get_header(); ?>
<script type="text/javascript">
        $(window).load(function(){
          $('.flexslider').flexslider({
          animation: "slide",
          animationLoop: false,
          itemWidth: 600,
          itemMargin: 5
        });
          $('#toggle').click(function(){
            $('#div-header').toggle("slow");
        });
        });
</script>

<section id="contain-zbrini">
  <section id="sect-slider-1">
    <div class="cont-slider">
      <!--ovdje ide slider sa slikama kaveza-->
      <div class="flexslider">
                <ul class="slides">
                  <li>
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/cage1.jpg" style="width: 600px; height: 400px;" />
                  </li>
                  <li>
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/cage2.jpg" style="width: 600px; height: 400px;" />
                  </li><li>
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/cage4.jpg" style="width: 600px; height: 400px;" />
                  </li><li>
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/cage6.jpg" style="width: 600px; height: 400px;" />
                  </li><li>
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/cage7.jpg" style="width: 600px; height: 400px;" />
                  </li>
                </ul>
         </div>
     </div>
  </section>

  <section id="sect-2-wrap">
    <div class="sect-2">
    <?php
        $query = new WP_Query( array( 'cat' => 'zbrini-me', 'tag' =>'zbrinime') );
        while ( $query->have_posts() ) :
        $query->the_post();
      ?>
      <div class="sect-2-L">
      <h3><?php the_title();?></h3>
      <p><?php the_content(); ?></p>

    <?php endwhile;?>
     </div>

      <div class="sect-2-R">
        <h3>Popis za kupnju</h3>
        <ul>
          <li>Transporter</li>
          <li>Pojilica za glodavce</li>
          <li>Drvna kućica</li>
          <li>Posuda za hranu</li>
          <li>Visilica za sijeno</li>
          <li>Hrana za činčile</li>
          <li>Sijeno</li>
          <li>Pjesak za činčile</li>
          <li>Drveni predmeti</li>
          <li>Grančice</li>
          <li>Kamen plutač/Sipina kost</li>
          <li>Igračke</li>
          <li>Podloga za kavez(peleti)</li>
        </ul>
      </div>
  <div style="clear: both;"></div>    
  </section>

     <section id="sect-3">
     <div class="sect-p">
      <h3>A moja rekreacija?</h3>
              <div class="flexslider">
                <ul class="slides">

                  <li>
                    <p>Vježba je ozbiljno važna za zdravlje činčile i činčili se mora dozvoliti najmanje 1-2 sata po noći da izađe iz kaveza! U divljini, činčile se mogu izjuriti po volji, skačući čak do 1 m u zrak i trčeči u potpunoj brzini, ali u zarobljeništvu činčilama treba osigurati njihovo divlje ponašanje puštajući ih izvan kaveza slobodne.</p>
                  </li><li>
                    <p>Činčila koja je stalno zatvorena u svojem kavezu, gleda na kavez kao na svoju kaznu i počne imati poremećeno ponašanje kao griženje vlastitog krzna.<br>
                    Bez neophodne vježbe izvan kaveza, činčile će početi patiti od depresije, strahova, ekstremne anksioznosti i neurotičnog ponašanja kao kretanja u krug. Činčila će također izgubiti svoju mobilnost, patiti od gubitka mišićne mase i snage, koja će se ispoljavati u nemogućnosti skakanja ili trčanja. Činčile u ovom stanju postanu mentalno povučene i poremećene zbog nepravde koja im se nanosi zatvaranjem u kavez bez mogućnosti vježbe i gubitka slobode.</p>
                  </li><li>
                    <p>Soba u kojoj će se činčila igrati mora biti potpuno sigurna. To znači posakrivati sve električne kablove, zablokirati sve rupe ili udubine, ukloniti sobne biljke, teške ukrasne predmete i sve ostale objekte koji za činčile predstavljaju potencijalnu opasnost. Spustite se na koljena i pogledajte oko sebe na visini činčile prije njihovog puštanja, te sklonite sve što bi bilo opasno ili suviše vrijedno da bi bilo izglodano.</p>
                  </li><li>
                    <p>Vrijeme puštanja činčile iz kaveza je zapravo vrijeme da komunicirate i igrate se sa ljubimcem, stoga ugasite TV i soba neka bude tiha, samo sa Vas dvoje u njoj. Pričajte smireno činčili i sjedite na podu, što će joj omogućiti da skoči na Vas. Ako je činčila nervozna, možete se legnuti na pod kako bi joj izgledali manje prijeteće i s vremenom će radoznala priroda činčile, natjerati je da Vam priđe i počne se penjati po Vama.</p>
                  </li><li>
                    <p>Možda ćete čak imati i privilegiju da Vam rasčupa kosu ili gricka nožne prste i noge, što je sve signal da je Vaša činčila zahvalna, sretna, povjerljiva i vezana za Vas.<br>
                    Nemojte ganjati činčilu kada je puštena, ali joj dozvolite da ona dođe k Vama - zapravo bi najbolje bilo ignorirati je i čitati knjigu - radoznalost činčile će Vam je dovesti i uskoro će sa Vama okretati stranice i grickati ih!</p>
                  </li><li>  
                    <p>Neke činčile ganjaju noge kada hodate po sobi, naročito ako nosite čarape ili papuče, stoga gazite vrlo oprezno i uvijek gledajte kamo stavljate nogu! Ako nagazite činčilu to bi moglo biti fatalno! Činčila može doživjeti lom kičme, traumu glave ili naglu smrt.<br>
                    Iskoristite vrijeme puštanja činčile kao mogućnost da je pogladite i dotaknete, ali je nemojte hvatati i držati - sjetite se da je to NJIHOVO slobodno vrijeme i zadnje što žele je da ih se drži (osim ako to same ne žele).</p>
                  </li>
                </ul>
         </div>

  </section> 
</section>





<?php get_footer(); ?>