@extends('frontend.theme')
@section('content')
<!-- Home Content Section -->
<div class="home">
<!-- Home Slider Banner -->
<div class="sub-banner">
<div class="parallax-container">
<div class="parallax">
<img src="img/home-slider/02.jpg" class="fullwidth" alt="" />
</div>
</div>
<!-- Banner Logo -->
<div class="banner-text wow fadeInUp animated" data-wow-delay="300ms">
<h1 class="marbot15">Menu Details</h1>
<div class="hr-line"><i class="mdi-action-star-rateimage"></i></div>
<div class="tag padding-25-per">
Different type of menus available in Breakfast.
</div>
</div>
<!-- // Banner Logo -->
</div>
<!-- // Home Slider Banner -->
</div>
<!-- Home Content Section -->
</div>
<!-- //Home Section -->
<!-- Menu Starts -->
<div id="menu" class="scrollspy">
<div class="whitebg">
<div class="menu-sections">
<!-- Menu 2 -->
<div id="menu-item2" class="col s12 m12 16 menu-type-two">
<!--<img src="img/menu-img2.png" class="fullwidth" alt=" " />-->
<div class="tab-content">
<div class="container">
<div class="row">
<!--<h4 class="center"> 5 Different type of menus available here kindly check this section</h4>-->

<div class="col s12 martop30">
<!-- first row -->
<div class="clearfix">
<!-- item 1 -->
<div class="col l6 s12 marbot30 wow fadeInLeft animated" data-wow-delay="300ms">
<div>
    <div class="item-title">
        Menus in Breakfast 
    </div>
    <p>
    	Simple breakfast...............................35,000 rwf <br/>
    	(Tea or coffee, sliced bread, Fresh fruits and eggs)
    </p>
    <p>
    	Breakfast complete .........................5,000 rwf <br>
    	(The or coffee, bread, Fresh fruits, eggs and glass of juice)
    	</p>
    	<p>
		Continental breakfast......................5,000 rwf <br>
		(The or coffee, Fresh fruits, glass of juice, ham, cheese and eggs)
    </p>
</div>
</div>      
</div>
<!-- first row end -->                
</div>
<!-- second row end -->
</div>
<!-- third row end -->
</div>   
</div>
</div>
</div>
</div>
<!-- Menu 2 -->
</div>
</div>
</div>
<!-- // Menu Ends -->
<!-- HR Section -->
<div class="container">
<div class="row">
<hr>
</div>
</div>
<!-- HR Section -->
<!-- Splid Section -->
<div id="splider" class="whitebg">
<div class="container">
<div class="row">
<div class="tag center wow fadeInLeft animated" data-wow-delay="300ms">
Crispy <b>fried rolls</b> stuffed with shrimp and glass noodles. 
</div>
<div class="center martop30">
<a href="menu3.htm" class="waves-effect waves-light btn wow fadeInRight animated" data-wow-delay="300ms">Private Dining</a>
</div>
</div>
</div>
</div>
<!-- Splid Section -->
@endsection()