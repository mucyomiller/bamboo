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
<h1 class="marbot15">Book A Table</h1>
<div class="hr-line"><i class="mdi-action-star-rate"></i></div>
<div class="tag padding-12-per">with Open Table below or call us at 123-456-7890</div>
</div>
<!-- // Banner Logo -->
</div>
<!-- // Home Slider Banner -->
</div>
<!-- Home Content Section -->
</div>
<!-- //Home Section -->
<!-- Reservatiob Starts -->
<div id="reservation" class="graybg scrollspy">
<div class="container">
<div class="row">
<div class="col l6 s12 marbot30">
<img data-wow-delay="800ms"  class="materialboxed wow flipInY" data-caption="A picture of some deer and tons of trees" src="img/reservation-left-img.png" alt=" ">
</div>
<div class="col l6 s12">
<div class="form martop30">
<div class="row">
<div class="clearfix reservation">
<form method="post" class="clearfix" id="reservation_form" action="#">
<div class="input-field col l6 s12">
<span class="left"><i class="mdi-action-event prefix"></i></span>
<span class="col s10">
<input id="date" type="text" class="datepicker" name="date" placeholder="Date "
onfocus="this.placeholder = ''" onBlur="this.placeholder = '* Date :'"  />
</span> <span></span>
</div>
<div class="input-field col l6 s12">
<span class="left"><i class="mdi-device-access-time prefix"></i></span>
  <span class="col s10"><select class="browser-default" name="time" id="time">
    <option value="" disabled selected>Time</option>
    <option value="6:00 am">6:00 am</option>
    <option value="6:30 am">6:30 am</option>
    <option value="7:00 am">7:00 am</option>
    <option value="7:30 am">7:30 am</option>
    <option value="8:00 am">8:00 am</option>
    <option value="8:30 am">8:30 am</option>
    <option value="9:00 am">9:00 am</option>
    <option value="9:30 am">9:30 am</option>
    <option value="10:00 am">10:00 am</option>
     <option value="10:30 am">10:30 am</option>
    <option value="11:00 am">11:00 am</option>
    <option value="11:30 am">11:30 am</option>
    <option value="12:00 pm">12:00 pm</option>
    <option value="12:30 pm">12:30 pm</option>
    <option value="1:00 pm">1:00 pm</option>
    <option value="1:30 pm">1:30 pm</option>
    <option value="2:00 pm">2:00 pm</option>
    <option value="2:30 pm">2:30 pm</option>
    <option value="3:00 pm">3:00 pm</option>
    <option value="3:30 pm">3:30 pm</option>
    <option value="4:00 pm">4:00 pm</option>
    <option value="4:30 pm">4:30 pm</option>
    <option value="5:00 pm">5:00 pm</option>
    <option value="5:00 pm">5:30 pm</option>
    <option value="6:00 pm">6:00 pm</option>
    <option value="6:30 pm">6:30 pm</option>
    <option value="7:00 pm">7:00 pm</option>
    <option value="7:30 pm">7:30 pm</option>
    <option value="8:00 pm">8:00 pm</option>
    <option value="8:30 pm">8:30 pm</option>
    <option value="9:00 pm">9:00 pm</option>
    <option value="9:30 pm">9:30 pm</option>
    <option value="10:00 pm">10:00 pm</option>
    <option value="10:30 pm">10:30 pm</option>
    <option value="11:00 pm">11:00 pm</option>
    <option value="11:30 pm">11:30 pm</option>
     <option value="12:00 pm">12:00 pm</option>
  </select>
  </span> <span></span>
</div>
<div class="input-field col s12">
<span class="left"><i class="mdi-social-person prefix"></i></span>
  <span class="col s10"><select class="browser-default" name="noofpeople" id="noofpeople">
    <option value="" disabled selected>How Many People's</option>
    <option value="1">1 person</option>
    <option value="2">2 People's</option>
    <option value="3">3 People's</option>
    <option value="4">4 People's</option>
    <option value="5">5 People's</option>
    <option value="6">6 People's</option>
    <option value="7">7 People's</option>
    <option value="8">8 People's</option>
    <option value="9">9 People's</option>
     <option value="10">10 People's</option>
    <option value="11">11 People's</option>
    <option value="12">12 People's</option>
    <option value="13">13 People's</option>
    <option value="14">14 People's</option>
    <option value="15">15 People's</option>
  </select>
  </span> <span></span>
</div>
<div class="col s12 martop30">
<!--<input id="reservesubmitBtn" value="Find A Table !" name="Confirm" type="submit" class="submitBtn">-->
<a class="waves-effect waves-light btn" id="resbutton" >Find A Table !</a>  </div>
<p class="clearfix">Please Allow up to 24 Hours for booking confirmation</p>
</form>
<div id="reservation_form_thanks" class="col s12"><p> </p></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Reservatiob Ends -->
<!-- Footer And Map -->
<div id="footer">
<!--  Map Section -->
<div class="map-section">
<!-- map -->
<div class="map_wrapper">
<div class="map-close"><img src="img/close-white.png" alt=" ">
<div class="close_box">
</div>
</div>
<div id="map_canvas">
</div>
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