<?php get_header(); ?>
 <div id="head-slide">
 		<div class="h-slide">
 			<p class="citat">Time spent with pets is never wasted.</p>
 		</div>
 </div>
 <div id="content">	
	 <div class="big-section-naslovna">
	 	<div class="big-section-1">
	 		<?php  
	 		$about = new WP_query( array('cat' => 'upoznaj-me', 'tag' =>'upoznajme', 'p'=> '12'));
	 		while ($about->have_posts()):
	 		$about->the_post(); 
	 		?>
			   <a href="<?php echo get_page_link('9');?>"><h3><?php the_title();?></h3></a>
			   <p><?php the_excerpt();?></p>
			<?php  endwhile;?>
		</div>
	 </div>
<div style="clear: both;"></div>
	 <div class="mini-section-naslovna">	
		 	<div class="mini-section-1">
		 		<div class="mini-sec-1-txt">
				 	<?php
			      	$zivot = new WP_Query( array( 'cat' => 'zbrini-me', 'tag' =>'zbrinime') );
			      	while ( $zivot->have_posts() ) :
			      	$zivot->the_post();
		    		?>
					    <a href="<?php echo get_page_link('28');?>"><h3><?php the_title();?></h3></a>
					    <p><?php the_excerpt(); ?></p>
		  			<?php endwhile;?>
  				</div>
  			<div class="mini-sec-1-img">
  					<a href="<?php echo get_page_link('28');?>"><img src="<?php bloginfo('template_url');?>/assets/images/rsz_1cage4.jpg"></a>
  					<!--<a href="https://placeholder.com"><img src="https://via.placeholder.com/350x150"></a>-->
  			</div>	
	 	</div>
	 <div style="clear: both;"></div>	
	 	<div class="mini-section-2">
	 		<div class="mini-sec-2-txt">
		 		<?php  
		 		$eat = new WP_query(array('cat' => 'upoznaj-me', 'tag' =>'upoznajme', 'p'=> '21'));
		 		while ($eat->have_posts()):
		 			$eat->the_post();
		 		?>
			 		<a href="<?php echo get_page_link('9');?>"><h3><?php the_title();?></h3></a>
				   	<p><?php the_excerpt(); ?></p>
		 		<?php endwhile;?>
	 		</div>
	 		<div class="mini-sec-2-img">
	 			<a href="<?php echo get_page_link('9');?>"><img src="<?php bloginfo('template_url');?>/assets/images/rsz_echin3.jpg"></a>
	 		</div>
	 	</div>
	 </div>	
<div style="clear: both;"></div>
<script>
	$(document).ready(function(){
		$("a#single_image").fancybox();
		$("a#single_image").fancybox({
			'hideOnContentClick':true
		});
		$("a.group").fancybox({
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'overlayShow'	:	false
	});
	});
</script>
	 <div class="big-section-naslovna2">
	    <div class="big-section-2">
			<a href="<?php echo get_page_link('28');?>"><h3>Što je potrebno?</h3></a>
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
		<div class="galerija-naslovna">
			<a id="single_image" class="group" href="<?php bloginfo('template_url');?>/assets/images/cage1.jpg"><img src="<?php bloginfo('template_url');?>/assets/images/cage1.jpg"></a>
			<a id="single_image" class="group" href="<?php bloginfo('template_url');?>/assets/images/cage2.jpg"><img src="<?php bloginfo('template_url');?>/assets/images/cage2.jpg"></a>
			<a id="single_image" class="group" href="<?php bloginfo('template_url');?>/assets/images/cage4.jpg"><img src="<?php bloginfo('template_url');?>/assets/images/cage4.jpg"></a>
			<a id="single_image" class="group" href="<?php bloginfo('template_url');?>/assets/images/cage6.jpg"><img src="<?php bloginfo('template_url');?>/assets/images/cage6.jpg"></a>
		</div>
	</div>
</div>
	
<?php get_footer(); ?>