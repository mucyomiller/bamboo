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
<h1 class="marbot15">Our Menus</h1>
<div class="hr-line"><i class="mdi-action-star-rate"></i></div>
<div class="tag padding-25-per">
Different type of menus available here kindly check this section.
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
<div class="item-images">
    <img src="img/image01.jpg" alt=" " data-wow-delay="800ms" class="wow zoomIn menu-image z-depth-1"/>
</div>
<div>
    <div class="item-title">
        Bowl Of Chili <sup class="label">non veg</sup>
        <span class="price">$6</span>
    </div>
    <p>
        Spicy beef and red bean chili topped with cheddar cheese, scallions and sour cream
    </p>
</div>
</div>
<!-- item 2 -->            
<div class="col l6 s12 marbot30 wow fadeInRight animated" data-wow-delay="300ms">
<div class="item-images">
    <img src="img/image02.jpg" alt=" " data-wow-delay="800ms" class="wow zoomIn menu-image z-depth-1"/>
</div>
<div>
    <div class="item-title">
Wedge Salad <span class="price">$8</span>                              </div>
<p>
        Crispy iceberg lettuce topped with bacon, tomato, crumbled blue cheese, and blue cheese dressing.
    </p>
</div>
</div>
<!-- item 2 end -->         
</div>
<!-- first row end -->
<!-- second row -->       
<div class="clearfix">
<!-- item 3 -->
<div class="col l6 s12 marbot30 wow fadeInLeft animated" data-wow-delay="300ms">
<div class="item-images">
    <img src="img/image03.jpg" alt=" " data-wow-delay="800ms" class="wow zoomIn menu-image z-depth-1"/>
</div>
<div>
    <div class="item-title">
        French Onion Soup 
        <sup class="label">hot</sup>
        <span class="price">$6</span>                                
    </div>
    <p>
        Baked in a crock and topped with gruyere cheese
    </p>
</div>
</div>
<!-- item 4 -->
<div class="col l6 s12 marbot30 wow fadeInRight animated" data-wow-delay="300ms">
<div class="item-images">
    <img src="img/image04.jpg"  alt=" " data-wow-delay="800ms" class="wow zoomIn menu-image z-depth-1"/>
</div>
<div>
    <div class="item-title">
        caesar Salad <span class="price">$9</span>                                
    </div>
    <p>
        Romaine hearts with croutons, parmesan cheese, and caesar dressing.
    </p>
</div>
</div>
<!-- item 4 end -->                       
</div>
<!-- second row end -->
<!-- third row -->           
<div class="clearfix">
<!-- item 5 -->
<div class="col l6 s12 marbot30 wow fadeInLeft animated" data-wow-delay="300ms">
<div class="item-images">
    <img src="img/image05.jpg" alt=" " data-wow-delay="800ms" class="wow zoomIn menu-image z-depth-1"/>
</div>
<div>
    <div class="item-title">
        Chilly Cheese Steak <span class="price">$9</span>
    </div>
    <p>
        American cheese, peppers  and onions
    </p>
</div>
</div>
<!-- item 6 -->
<div class="col l6 s12 marbot30 wow fadeInRight animated" data-wow-delay="300ms">
<div class="item-images">
    <img src="img/image06.jpg" alt=" " data-wow-delay="800ms" class="wow zoomIn menu-image z-depth-1"/>
</div>
<div>
    <div class="item-title">
        House Salad <sup class="label">recommended</sup><span class="price">$7</span>
    </div>
    <p>
        Mixed greens tossed with tomato, cucumber, onion and balsamic vinegarette.
    </p>
</div>
</div>
<!-- item 6 end -->
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
@endsection