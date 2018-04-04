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

<script type="text/javascript">

	$('.owl-carousel').owlCarousel({
	    loop:true,
	    margin:10,
	    items:1,
	    autoHeight:true
	})	

</script>