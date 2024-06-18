@extends('site.layouts.app')


@section('content')

<!--Work-Section-->
<section class="gray-bg" id="work">
   <div class="space-80"></div>
   <div class="container">
      <div class="row wow fadeInUp">
         <div class="col-xs-12 col-md-8 col-md-offset-2 text-center">
            <h3 class="text-uppercase">{{ __('messages.Text1') }}</h3>
            {{ __('messages.Text2') }}
         </div>
      </div>
      <div class="space-60"></div>
      <div class="row">
         <div class="col-xs-12 col-sm-6 col-md-3 text-center wow fadeInUp" data-wow-delay="0.2s">
            <div class="hover-shadow">
               <div class="space-60">
                  <img src="{{url('imgs/icon/icon1.svg')}}" alt=" " width="60">
               </div>
               <div class="space-20"></div>
               <h5 class="text-uppercase">{{ __('messages.Text3a') }}</h5>
               <p>{{ __('messages.Text3') }}</p>
            </div>
         </div>
         <div class="col-xs-12 col-sm-6 col-md-3 text-center wow fadeInUp" data-wow-delay="0.4s">
            <div class="hover-shadow">
               <div class="space-60">
                  <img src="{{url('imgs/icon/icon2.svg')}}" alt=" " width="60">
               </div>
               <div class="space-20"></div>
               <h5 class="text-uppercase">{{ __('messages.Text4') }}</h5>
               <p>{{ __('messages.Text5') }}</p>
            </div>
         </div>
         <div class="col-xs-12 col-sm-6 col-md-3 text-center wow fadeInUp" data-wow-delay="0.6s">
            <div class="hover-shadow">
               <div class="space-60">
                  <img src="{{url('imgs/icon/icon3.svg')}}" alt=" " width="60">
               </div>
               <div class="space-20"></div>
               <h5 class="text-uppercase">{{ __('messages.Text6') }}</h5>
               <p>{{ __('messages.Text7') }}</p>
            </div>
         </div>
         <div class="col-xs-12 col-sm-6 col-md-3 text-center wow fadeInUp" data-wow-delay="0.8s">
            <div class="hover-shadow">
               <div class="space-60">
                  <img src="{{url('imgs/icon/icon4.svg')}}" alt=" " width="60">
               </div>
               <div class="space-20"></div>
               <h5 class="text-uppercase">{{ __('messages.Result') }}</h5>
               <p>{{ __('messages.Text8') }}</p>
            </div>
         </div>
      </div>
      <div class="space-60"></div>
      <div class="row">
         <div class="col-xs-12 col-md-8 col-md-offset-2 text-center wow fadeInUp">
            <div class="down-offset ">
               <img src="{{url('imgs/mobile1.png')}}" alt=" " >
            </div>
         </div>
      </div>
   </div>
</section>
<!--Work-Section/-->

<!--Feature-Section-->
<section class="fix">
   <div class="space-60"></div>
   <div class="container" id="feature">
      <div class="space-100"></div>
      <div class="row wow fadeInUp">
         <div class="col-xs-12 col-md-6 col-md-offset-3 text-center">
            <h3 class="text-uppercase">{{ __('messages.Text9') }}</h3>
            <p>{{ __('messages.Text10') }}</p>
         </div>
      </div>
      <div class="space-60"></div>
      <div class="row feature-area">
         <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInLeft">
            <div class="space-90"></div>
            <a href="#feature1" data-toggle="tab">
               <div class="media single-feature">
                  <div class="media-body text-right">
                     <h5>{{ __('messages.Languages') }}</h5>
                     <p>{{ __('messages.Text11') }}</p>
                  </div>
                  <div class="media-right">
                     <div class="border-icon">
                        <span class="ti-flag-alt-2"></span>
                     </div>
                  </div>
               </div>
            </a>
            <div class="space-90"></div>
            <a href="#feature2" data-toggle="tab">
               <div class="media single-feature">
                  <div class="media-body text-right">
                     <h5>{{ __('messages.Users') }}</h5>
                     <p>{{ __('messages.Text12') }}</p>
                  </div>
                  <div class="media-right">
                     <div class="border-icon">
                        <span class="ti-user"></span>
                     </div>
                  </div>
               </div>
            </a>

            <!--<a href="#feature3" data-toggle="tab">
               <div class="media single-feature">
                  <div class="media-body text-right">
                     <h5>FULL FREE CHAT</h5>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididugnt ut labore</p>
                  </div>
                  <div class="media-right">
                     <div class="border-icon">
                        <span class="ti-comments"></span>
                     </div>
                  </div>
               </div>
            </a> -->
            <div class="space-30"></div>
         </div>
         <div class="hidden-xs hidden-sm col-md-4 text-center fix wow fadeIn">
            <div class="down-offset relative ">
               <img src="{{url('imgs/mobile2.png')}}" alt=" " >
               <div class="screen_image tab-content">
                  <div id="feature1" class="tab-pane fade in active">
                     <img src="{{url('imgs/feature/1.jpg')}}" alt=" " >
                  </div>
                  <div id="feature2" class="tab-pane fade">
                     <img src="{{url('imgs/feature/6.jpg')}}" alt=" " >
                  </div>
                  <div id="feature3" class="tab-pane fade">
                     <img src="{{url('imgs/feature/3.jpg')}}" alt=" " >
                  </div>
                  <div id="feature4" class="tab-pane fade">
                     <img src="{{url('imgs/feature/4.jpg')}}" alt=" " >
                  </div>
                  <div id="feature5" class="tab-pane fade">
                     <img src="{{url('imgs/feature/5.jpg')}}" alt=" " >
                  </div>
                  <div id="feature6" class="tab-pane fade">
                     <img src="{{url('imgs/feature/2.jpg')}}" alt=" " >
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInRight">
            <div class="space-90"></div>
            <a href="#feature4" data-toggle="tab">
               <div class="media single-feature">
                  <div class="media-left">
                     <div class="border-icon">
                        <span class="ti-stats-up"></span>
                     </div>
                  </div>
                  <div class="media-body">
                     <h5>{{ __('messages.Text13') }}</h5>
                     <p>{{ __('messages.Text14') }}</p>
                  </div>
               </div>
            </a>
            <div class="space-35"></div>
            <a href="#feature5" data-toggle="tab">
               <div class="media single-feature">
                  <div class="media-left">
                     <div class="border-icon">
                        <span class="ti-bar-chart"></span>
                     </div>
                  </div>
                  <div class="media-body">
                     <h5>{{ __('messages.Functionalities') }}</h5>
                     <p>{{ __('messages.Text15') }}</p>
                  </div>
               </div>
            </a>
            <div class="space-30"></div>

            <div class="space-80"></div>
         </div>
      </div>
      <div class="space-80"></div>
   </div>
</section>
<!--Feature-Section-->
<!--Screenshot-Section-->
<section>
   <div class="container">
      <div class="row wow fadeInUp">
         <div class="col-xs-12 col-md-6 col-md-offset-3 text-center">
            <h3 class="text-uppercase">{{ __('messages.Our_system') }}</h3>
            <p>{{ __('messages.Our_system_Text') }}</p>
         </div>



      </div>
      <div class="space-10"></div>
      <div class="row wow fadeIn">
         <div class="col-xs-12">
            <div class="space-60"></div>
            <div class="list_screen_slide">
               <div class="item">
                  <a href="{{url('imgs/screen/screen1.jpg')}}" class="work-popup">
                  <img src="{{url('imgs/screen/screen1.jpg')}}" alt=" " >
                  </a>
               </div>
               <div class="item">
                  <a href="{{url('imgs/screen/screen2.jpg')}}" class="work-popup">
                  <img src="{{url('imgs/screen/screen2.jpg')}}" alt=" " >
                  </a>
               </div>
               <div class="item">
                  <a href="{{url('imgs/screen/screen3.jpg')}}" class="work-popup">
                  <img src="{{url('imgs/screen/screen3.jpg')}}" alt=" " >
                  </a>
               </div>
               <div class="item">
                  <a href="{{url('imgs/screen/screen4.jpg')}}" class="work-popup">
                  <img src="{{url('imgs/screen/screen4.jpg')}}" alt=" " >
                  </a>
               </div>
               <div class="item">
                  <a href="{{url('imgs/screen/screen5.jpg')}}" class="work-popup">
                  <img src="{{url('imgs/screen/screen5.jpg')}}" alt=" " >
                  </a>
               </div>
               <div class="item">
                  <a href="{{url('imgs/screen/screen1.jpg')}}" class="work-popup">
                  <img src="{{url('imgs/screen/screen1.jpg')}}" alt=" " >
                  </a>
               </div>
               <div class="item">
                  <a href="{{url('imgs/screen/screen2.jpg')}}" class="work-popup">
                  <img src="{{url('imgs/screen/screen2.jpg')}}" alt=" " >
                  </a>
               </div>
               <div class="item">
                  <a href="{{url('imgs/screen/screen3.jpg')}}" class="work-popup">
                  <img src="{{url('imgs/screen/screen3.jpg')}}" alt=" " >
                  </a>
               </div>
               <div class="item">
                  <a href="{{url('imgs/screen/screen4.jpg')}}" class="work-popup">
                  <img src="{{url('imgs/screen/screen4.jpg')}}" alt=" " >
                  </a>
               </div>
            </div>
            <div class="space-40"></div>
         </div>
      </div>
   </div>
   <div class="space-80"></div>
</section>
<!--Screenshot-Section/-->


<!--Price-section-->
<section class="relative fix" id="price">
   <div class="section-bg overlay-bg fix">
    <!--  <img src="{{url('imgs/bg2.jpg')}}" alt=" " > -->
   </div>
   <div class="space-80"></div>
   <div class="container">
      <div class="row wow fadeInUp">
         <div class="col-xs-12 col-md-6 col-md-offset-3 text-center text-white">
            <h3 class="text-uppercase">I Do My Finances</h3>
            <p>{{ __('messages.Text16') }}</p>
         </div>
      </div>
      <div class="space-60"></div>
      <div class="row">
     @foreach ($plans as $plan)

         <div class="col-xs-12 col-sm-4 wow fadeInLeft" style="visibility: visible; animation-name: fadeInUp;">

            <div class="down-offset ">

               <div class="panel price-table text-center">
                  <h3 class="text-uppercase price-title">{{ $plan->name }}</h3>
                 <hr>
                  <div class="space-10"></div>
                  <ul class="list-unstyled">
                    <!-- <li><strong class="amount"><span class="big">3 </span></strong>{{ __('messages.Text17') }}</li> -->
                    <li>{{ $plan->total_user_plan }} {{ __('messages.Text18') }}</li>
                    <li>{{ __('messages.Add_income') }}</li>
                    <li>{{ __('messages.Add_expenses') }}</li>
                     <li>{{ __('messages.Analytical_reports') }}</li>
                     <li>{{ __('messages.Free_30-day_trial') }}</li>

                     <li><strong class="amount">&#36; <span class="big">{{ number_format($plan->price, 2, ',', '.') }}</span></strong> </li>
                     @foreach ($plan->details as $detail)
                     <li>{{ $detail->name }}</li>
                   @endforeach


                  </ul>
                  <div class="space-30"></div>
                  <hr>
    <a href="{{ route('plan.subscription', $plan->url) }}" class="btn btn-link text-uppercase">{{ __('messages.purchase') }}</a>

               </div>

            </div>

         </div>
         @endforeach
      </div>
   </div>
   <div class="space-80"></div>
</section>

<!--Price-section/-->


<!--Screenshot-Section-->
  <!--<section>
   <div class="container">
                  <div class="space-50"></div>
      <div class="row wow fadeInUp">
         <div class="col-xs-12 col-md-6 col-md-offset-3 text-center">
            <h3 class="text-uppercase"> {{ __('messages.PartnerFriends') }}</h3>
         </div>
      </div>

    <div class="row wow fadeIn">
         <div class="col-xs-12">
            <div class="slider">
            	<div class="slide-track">
            		<div class="slide">
            		<a href="#">	<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" /></a>
            		</div>
            		<div class="slide">
            		<a href="#">	<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" /></a>
            		</div>
            		<div class="slide">
            		<a href="#">	<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" /></a>
            		</div>
            		<div class="slide">
            		<a href="#">	<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" /></a>
            		</div>
            		<div class="slide">
            		<a href="#">	<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" /></a>
            		</div>
            		<div class="slide">
            		<a href="#">	<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" /></a>
            		</div>
            		<div class="slide">
            		<a href="#">	<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" /></a>
            		</div>
            		<div class="slide">
            		<a href="#">	<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" /></a>
            		</div>
            		<div class="slide">
            		<a href="#">	<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" /></a>
            		</div>
            		<div class="slide">
            		<a href="#">	<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" /></a>
            		</div>
            		<div class="slide">
            		<a href="#">	<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" /></a>
            		</div>
            		<div class="slide">
            		<a href="#">	<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" /></a>
            		</div>
            		<div class="slide">
            		<a href="#">	<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" /></a>
            		</div>
            		<div class="slide">
            		<a href="#">	<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" /></a>
            		</div>
            	</div>
            </div>

            <div class="space-40"></div>
         </div>
      </div>
   </div>
   <div class="space-80"></div>
</section> -->
<!--Screenshot-Section/-->


<!--Map-->

<div class="space-20"></div>
<!-- <div id="contact"></div> -->


@endsection
