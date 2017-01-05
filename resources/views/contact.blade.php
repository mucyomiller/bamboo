@extends('frontend.theme')
@section('content')
<!-- Home Content Section -->
<div class="home">
<!-- Home Slider Banner -->
<div class="sub-banner">
<div class="parallax-container">
<div class="parallax">
<img src="img/reservation.jpg" class="fullwidth" alt="" />
</div>
</div>
<!-- Banner Logo -->
<div class="banner-text wow fadeInUp animated" data-wow-delay="300ms">
<h1 class="marbot15">Get in touch </h1>
<div class="hr-line"><i class="mdi-action-star-rate"></i></div>
<div class="tag padding-25-per">We can contact you by filling out the form below, Please note that contacts are only confirmed once we check availability.. Thank you! </div>
</div>
<!-- // Banner Logo -->
</div>
<!-- // Home Slider Banner -->
</div>
<!-- Home Content Section -->
</div>
<!-- //Home Section -->
<!-- Contact Starts -->
<div class="contactbg">
<div id="contact" class="graybg contact-overlay scrollspy">
<div class="container">
<div class="row">
<div class="clearfix">
<div class="col l7 s12">
<div class="contact-form marbot30">
<form id="contact_form" class="clearfix" action="#" method="post">
<div class="input-field col s12">
<i class="mdi-action-account-circle prefix"></i>
<input type="text" name="name" class="" placeholder="* Name : "
onfocus="this.placeholder = ''" onBlur="this.placeholder = '* Name :'" />
</div>
<div class="input-field col s12">
<i class="mdi-communication-email prefix"></i>
<input type="text" name="email"  class=""
placeholder="* Email : " onFocus="this.placeholder = ''" onBlur="this.placeholder = '* Email :'" />
</div>
<div class="input-field col s12">
<i class="mdi-communication-phone prefix"></i>
<input type="text" name="phone" class=""
placeholder="* Phone : " onFocus="this.placeholder = ''" onBlur="this.placeholder = '* Phone :'" />
</div>
<div class="input-field col s12">
<i class="mdi-editor-mode-edit prefix"></i>
<textarea name="message" class="materialize-textarea" id="textarea1"
placeholder="* Message : " onFocus="this.placeholder = ''" onBlur="this.placeholder = '* Message :'"></textarea>
</div>
<div class="contact col s12 martop30">
<!--<input id="contactsubmitBtn1" value="Send a message" name="Confirm" type="submit" class="submitBtn">-->
<a class="waves-effect waves-light btn" id="conbutton" >Send a message</a>                          </div>
</form>
<div id="contact_form_thanks" class="col s12"><p> </p></div>
</div>
</div>
<div class="col l5 s12 wow fadeInRight animated" data-wow-delay="300ms">
<h4>Contact Info</h4>
<div class="contact-details">
<div class="row">
<div class="col s12 marbot15">
<span class="cont-info-left">
<i class="mdi-action-home"></i>
</span>
<span class="cont-info-right">
KG  Street, near chez land , <br/> Kigali Gasabo.
</span>
</div>
<div class="col s12 marbot15">
<span class="cont-info-left">
<i class="mdi-communication-email prefix"></i>
</span>
<span class="cont-info-right">
<a href="#">info@bambooshade.com</a>
</span>
</div>
<div class="col s12 marbot15">
<span class="cont-info-left">
<i class="mdi-communication-phone prefix"></i>
</span>
<span class="cont-info-right">
<a href="#">+(250)-788-519339</a>
</span>
</div>
</div>
</div>
<div class="footer-social-icons martop60">
<h4>Get Social</h4>
<div class="social-space">
<a href="#" class="btn-floating waves-effect waves-light btn-large white wow rollIn animated" data-wow-delay="0.5s">
<i class="fa fa-facebook facebook"></i>                        </a>
<a href="#" class="btn-floating waves-effect waves-light btn-large white wow rollIn animated" data-wow-delay="0.5s">
<i class="fa fa-twitter twitter"></i>                        </a>
<a href="#" class="btn-floating waves-effect waves-light btn-large white wow rollIn animated" data-wow-delay="0.5s">
<i class="fa fa-youtube-play youtube"></i>                        </a>                   </div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>
<!-- Contact Ends -->
<!-- Footer And Map -->
<div id="footer">
<!--  Map Section -->
<div class="map-section">
<!-- map -->
<div class="map_wrapper">
<div class="map-close"><img src="img/close-white.png" alt=" ">
<div class="close_box"></div>
</div>
<div id="map_canvas"></div>
</div>
<!-- // map -->
<section id="foot_top" class="show-googlemap plus"> 
<div class="foot_top_txt">
<div><i class="wow pulse animated mdi-maps-place foot_icon" data-wow-delay="300ms" data-wow-iteration="infinite" data-wow-duration="2s" ></i> View us on the map <i class="mdi-hardware-keyboard-arrow-down foot_icon"></i>
</div>
</div>
</section> 
</div>
<!-- // Map Section -->
@endsection