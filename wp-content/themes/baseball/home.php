<?php
get_header();
?>
<h1>Hello World this is now HOME!</h1>
<div class="owl-carousel owl-theme">
    <div class="item"><img src='banner.png'></div>
    <div class="item"><img src="banner2.png"></div>
    <div class="item"><img src='big_placeholder.png'></div>
    <div class="item"><img src="big_placeholder.png"></div>
</div>
<div class='banner_div one'>
	<img src='hat.png'>
	<h2>Headware</h2>
	<p>From on field caps to winter hats! <br>We have every time and mutiple styles and sizes.<br><br><a href="#">Check them out!</a></p>
</div>

<div class='banner_div two'>
	<img src='jersey.jpeg'>
	<h2>Jerseys</h2>
	<p>Authentic MLB jersey same as the ones used on field! <br>All styles and teams.<br><br><a href="#">Check them out!</a></p>
</div>
<script type="text/javascript">

	$('.owl-carousel').owlCarousel({
	    loop:true,
	    margin:10,
	    items:1,
	    autoHeight:true
	})	

</script>