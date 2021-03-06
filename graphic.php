<?php
/*
 * Template Name: graphic
 */?>
<style>
	.link-graphics {
		color: #fb2e01!important;
	}
</style>
 <?php

get_header ();?>

<?php while(have_posts()) {
	the_post(); ?>


<div id="page-container">
	

<h1><?php the_title(); ?></h1>
<div id="portfolio-container">

<div class="graphicwrap">
	<div class="portfolio-header">

	<div class="portfolio-image-container">
		<a href="https://iamjmitch-cdn.sirv.com/Images/silverfoxFB.jpg" target="_blank" class="portfolio-image"> <img src="https://iamjmitch-cdn.sirv.com/Images/silverfoxlogo.jpg"></a>
	</div>
	<div class="graphic-text">
		<a href="https://iamjmitch-cdn.sirv.com/Images/silverfoxFB.jpg" target="_blank" ><h3>Logo Design</h3></a>
		<ul>
			<li>Type: Commision</li>
			<li>Medium: Digital Presence</li>
			<li>A logo design made for a friend's small business. </li>
			<li>Used for digital mediums such as facebook</li>
			<li>Made in Photoshop</li>
			
		</ul>
		</div>
	</div>


<div class="graphicwrap">
	<div class="portfolio-header">

	<div class="portfolio-image-container">
		<a href="https://iamjmitch-cdn.sirv.com/Images/silverfox-final.jpg" target="_blank" class="portfolio-image"> <img src="https://iamjmitch-cdn.sirv.com/Images/silverfox.jpg"></a>
	</div>
	<div class="graphic-text">
		<a href="https://iamjmitch-cdn.sirv.com/Images/silverfox-final.jpg" target="_blank" ><h3>Business Card Design</h3></a>
		<ul>
			<li>Type: Commision</li>
			<li>Medium: Business Card</li>
			<li>A business card made for a friend's cleaning business.</li>
			<li>Made in Illustrator & Photoshop</li>
			
		</ul>
		</div>
	</div>
		

</div>


<div class="graphicwrap">
	<div class="portfolio-header">

	<div class="portfolio-image-container">
		<a href="https://iamjmitch-cdn.sirv.com/Images/canvas.jpg" target="_blank" class="portfolio-image"> <img src="https://iamjmitch-cdn.sirv.com/Images/pier.jpg"></a>
	</div>
	<div class="graphic-text">
		<a href="https://iamjmitch-cdn.sirv.com/Images/canvas.jpg" target="_blank" ><h3>Redcliffe Pier Canvas</h3></a>
		<ul>
			<li>Type: Personal</li>
			<li>Medium: Canvas</li>
			<li>A wedding present made for family friends</li>
			<li>Made in Photoshop</li>
			<li>Features the actual pier the happy couple got married on</li>
			<br>
			<li>Original photo and song lyrics 	&copy; their respective owners. Content used for personal under fair use. No monetary gain came from this artwork</li>
			
		</ul>
		</div>
	</div>
		

</div>


<div class="graphicwrap">
	<div class="portfolio-header">

	<div class="portfolio-image-container">
		<a href="https://iamjmitch-cdn.sirv.com/Images/salbusiness.jpg" target="_blank" class="portfolio-image"> <img src="https://iamjmitch-cdn.sirv.com/Images/salbc.jpg"></a>
	</div>
	<div class="graphic-text">
		<a href="https://iamjmitch-cdn.sirv.com/Images/salbusiness.jpg" target="_blank" ><h3>Business Card Design </h3></a>
		<ul>
			<li>Type: Commision</li>
			<li>Medium: Business Card</li>
			<li>A business card made for a friend's small business.</li>
			<li>Made in Illustrator</li>
			
			
		</ul>
		</div>
	</div>
		

</div>


<div class="graphicwrap">
	<div class="portfolio-header">

	<div class="portfolio-image-container">
		<a href="https://iamjmitch-cdn.sirv.com/Images/Sal_product_label.jpg" target="_blank" class="portfolio-image"> <img src="https://iamjmitch-cdn.sirv.com/Images/salship.jpg"></a>
	</div>
	<div class="graphic-text">
		<a href="https://iamjmitch-cdn.sirv.com/Images/Sal_product_label.jpg" target="_blank" ><h3>Product Labels</h3></a>
		<ul>
			<li>Type: Commision</li>
			<li>Medium: Print</li>
			<li>Product labels made for a friend's small business.</li>
			<li>Made in Illustrator</li>
			
			
		</ul>
		</div>
	</div>
		

</div>

<div class="graphicwrap">
	<div class="portfolio-header">

	<div class="portfolio-image-container">
		<a href="https://iamjmitch-cdn.sirv.com/Images/salflyer.png" target="_blank" class="portfolio-image"> <img src="https://iamjmitch-cdn.sirv.com/Images/salflyer.png"></a>
	</div>
	<div class="graphic-text">
		<a href="https://iamjmitch-cdn.sirv.com/Images/salflyer.png" target="_blank" ><h3>Promotional Giveaways</h3></a>
		<ul>
			<li>Type: Commision</li>
			<li>Medium: Print</li>
			<li>Promotional material made for a friend's small business.</li>
			<li>Made in Illustrator</li>
			
			
		</ul>
		</div>
	</div>
		

</div>






<div class="graphicwrap">
	<div class="portfolio-header">

	<div class="portfolio-image-container">
		<a href="https://iamjmitch-cdn.sirv.com/Images/salfacebook.jpg" target="_blank" class="portfolio-image"> <img src="https://iamjmitch-cdn.sirv.com/Images/salslogo.jpg"></a>
	</div>
	<div class="graphic-text">
		<a href="https://iamjmitch-cdn.sirv.com/Images/salfacebook.jpg" target="_blank" ><h3>Sal's Cupcakes Logo </h3></a>
		<ul>
			<li>Type: Commision</li>
			<li>Medium: Digital Presence</li>
			<li>A logo design made for a friend's small business. </li>
			<li>Used for digital mediums such as facebook</li>
			<li>Made in Illustrator</li>
			
			
		</ul>
		</div>
	</div>
		

</div>

</div>


 <?php the_content(); ?> 
 </div>


</div>


<?php }
	get_footer();
		?>

