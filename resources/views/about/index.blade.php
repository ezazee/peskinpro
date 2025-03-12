@extends('about.master.master-app')
@section('content')
<section class="vs-hero-wrapper vs-hero-layout1 bg-light-theme">
   <div class="vs-hero-carousel" data-height="980" data-slidertype="responsive" data-allowfullscreen="false"
      data-maxratio="2">
      <div class="ls-slide" data-ls="duration: 10000; transition2d: 5;">
         <div data-ls-mobile="left: 1100px;" class="ls-l ls-responsive bg-theme"
            style="
            top: 160px;
            left: 50%;
            height: 500px;
            width: 500px;
            opacity: 0.4;
            border-radius: 50%;
            "
            data-ls="loop: true; loopscalex: 2.5; loopscaley: 2.5; loopduration: 5000; loopcount: -1; loopfilter: blur(2px); loopopacity: 0; delayin: 2000; transitionout:false; keyframe:true;">
         </div>
         <div data-ls-mobile="left: 1100px;" class="ls-l ls-responsive bg-theme"
            style="
            top: 160px;
            left: 50%;
            height: 500px;
            width: 500px;
            opacity: 0.4;
            border-radius: 50%;
            "
            data-ls="loop: true; loopscalex: 2.5; loopscaley: 2.5; loopduration: 5000; loopcount: -1; loopfilter: blur(2px); loopopacity: 0; delayin: 3500; transitionout:false; keyframe:true;">
         </div>
         <div data-ls-mobile="left: 1100px;" class="ls-l ls-responsive bg-theme"
            style="
            top: 160px;
            left: 50%;
            height: 500px;
            width: 500px;
            opacity: 0.4;
            border-radius: 50%;
            "
            data-ls="loop: true; loopscalex: 2.5; loopscaley: 2.5; loopduration: 5000; loopcount: -1; loopfilter: blur(2px); loopopacity: 0; delayin: 5000; transitionout:false; keyframe:true;">
         </div>
         <div data-ls-mobile="left: 980px;" class="ls-l ls-responsive bg-white"
            style="
            top: 30px;
            left: 50%;
            height: 760px;
            width: 760px;
            border-radius: 50%;
            "
            data-ls="showinfo:1; scalexin: 0.5; scaleyin: 0.5; delayin: 1500; durationin:1400;  showinfo:1; parallax:true; parallaxlevel:3; parallaxaxis: x; transitionout:false; keyframe:true;">
         </div>
         <img data-ls-mobile="left: 850px;" src="{{ asset('asset-about/img/hero/CICA-B5-Refreshing-Toner2.png') }}"
            class="ls-layer ls-responsive" alt="Spa Girl"
            style="
            top: 0;
            left: 50%;
            z-index: auto;
            width: 950px;
            height: 980px;
            "
            data-ls="showinfo:1; delayin: 300; durationin:1400;  showinfo:1; parallax:true; parallaxlevel:3; parallaxaxis: x; transitionout:false; keyframe:true;" />
         <p data-ls-tablet="font-size: 30px; left: 80px; width: 200px;"
            data-ls-laptop="font-size: 30px; left: 80px; width: 200px;"
            style="
            top: 290px;
            left: 160px;
            margin: 0px;
            font-size: 20px;
            width: 163px;
            font-weight: bold;
            "
            class="ls-layer ls-hide-phone ls-responsive"
            data-ls="delalyin: 400; offsetxin:left;durationin:1200;easingin:swing;transitionout:false;keyframe:true; parallax:true; parallaxlevel:3; parallaxaxis: x;">
            CICA
         </p>
         <h1 data-ls-mobile="left: 100px; top: 140px; font-size: 140px; line-height: 180px; width: 800px;"
            data-ls-tablet="left: 80px; font-size: 100px; line-height: 120px; width: 600px; top: 380px;"
            data-ls-laptop="left: 80px; font-size: 100px; line-height: 120px; width: 800px; top: 380px;"
            style="
            top: 330px;
            left: 160px;
            margin: 0px;
            text-transform: capitalize;
            font-size: 72px;
            font-weight: medium;
            line-height: 90px;
            width: 390px;
            white-space: normal;
            "
            class="ls-layer ls-responsive"
            data-ls="delayin: 500;  offsetxin: -200; durationin: 1000; delayin: 600; easingin:easeOutQuint; parallax:true; parallaxlevel:3; parallaxaxis: x; transitionout:false; keyframe:true;">
            Refreshing Toner
         </h1>
         <div data-ls-mobile="left: 80px; top: 580px; width: 850px; height: 250px; line-height: 250px; font-size: 70px;"
            data-ls-tablet="height: 110px; line-height: 110px; width: 370px; font-size: 30px; top: 670px; left: 50px;"
            data-ls-laptop="height: 110px; line-height: 110px; width: 370px; font-size: 30px; top: 670px; left: 50px;"
            class="hero-btn ls-l ls-responsive"
            style="
            top: 528px;
            left: 120px;
            width: 266px;
            height: 80px;
            line-height: 80px;
            font-size: 14px;
            padding: 7px;
            padding-left: 40px;
            overflow: hidden;
            "
            data-ls="delayin: 500; offsetxin:left;durationin:1200;easingin:swing;transitionout:false;keyframe:true; parallax:true; parallaxlevel:3; parallaxaxis: x;">
            <a href="{{ route('shop.index') }}" class="vs-btn wave-style1">Belanja Sekarang<i class="far fa-arrow-right"></i></a>
         </div>
      </div>
      <div class="ls-slide" data-ls="duration: 10000; transition2d: 5;">
        <div data-ls-mobile="left: 1100px;" class="ls-l ls-responsive bg-theme"
           style="
           top: 160px;
           left: 50%;
           height: 500px;
           width: 500px;
           opacity: 0.4;
           border-radius: 50%;
           "
           data-ls="loop: true; loopscalex: 2.5; loopscaley: 2.5; loopduration: 5000; loopcount: -1; loopfilter: blur(2px); loopopacity: 0; delayin: 2000; transitionout:false; keyframe:true;">
        </div>
        <div data-ls-mobile="left: 1100px;" class="ls-l ls-responsive bg-theme"
           style="
           top: 160px;
           left: 50%;
           height: 500px;
           width: 500px;
           opacity: 0.4;
           border-radius: 50%;
           "
           data-ls="loop: true; loopscalex: 2.5; loopscaley: 2.5; loopduration: 5000; loopcount: -1; loopfilter: blur(2px); loopopacity: 0; delayin: 3500; transitionout:false; keyframe:true;">
        </div>
        <div data-ls-mobile="left: 1100px;" class="ls-l ls-responsive bg-theme"
           style="
           top: 160px;
           left: 50%;
           height: 500px;
           width: 500px;
           opacity: 0.4;
           border-radius: 50%;
           "
           data-ls="loop: true; loopscalex: 2.5; loopscaley: 2.5; loopduration: 5000; loopcount: -1; loopfilter: blur(2px); loopopacity: 0; delayin: 5000; transitionout:false; keyframe:true;">
        </div>
        <div data-ls-mobile="left: 980px;" class="ls-l ls-responsive bg-white"
           style="
           top: 30px;
           left: 50%;
           height: 760px;
           width: 760px;
           border-radius: 50%;
           "
           data-ls="showinfo:1; scalexin: 0.5; scaleyin: 0.5; delayin: 1500; durationin:1400;  showinfo:1; parallax:true; parallaxlevel:3; parallaxaxis: x; transitionout:false; keyframe:true;">
        </div>
        <img data-ls-mobile="left: 850px;" src="{{ asset('asset-about/img/hero/Honey-Cleansing-Gel2.png') }}"
           class="ls-layer ls-responsive" alt="Spa Girl"
           style="
           top: 0;
           left: 50%;
           z-index: auto;
           width: 950px;
           height: 980px;
           "
           data-ls="showinfo:1; delayin: 300; durationin:1400;  showinfo:1; parallax:true; parallaxlevel:3; parallaxaxis: x; transitionout:false; keyframe:true;" />
        <p data-ls-tablet="font-size: 30px; left: 80px; width: 200px;"
           data-ls-laptop="font-size: 30px; left: 80px; width: 200px;"
           style="
           top: 290px;
           left: 160px;
           margin: 0px;
           font-size: 20px;
           width: 163px;
           font-weight: bold;
           "
           class="ls-layer ls-hide-phone ls-responsive"
           data-ls="delalyin: 400; offsetxin:left;durationin:1200;easingin:swing;transitionout:false;keyframe:true; parallax:true; parallaxlevel:3; parallaxaxis: x;">
           Honey
        </p>
        <h1 data-ls-mobile="left: 100px; top: 140px; font-size: 140px; line-height: 180px; width: 800px;"
           data-ls-tablet="left: 80px; font-size: 100px; line-height: 120px; width: 600px; top: 380px;"
           data-ls-laptop="left: 80px; font-size: 100px; line-height: 120px; width: 800px; top: 380px;"
           style="
           top: 330px;
           left: 160px;
           margin: 0px;
           text-transform: capitalize;
           font-size: 72px;
           font-weight: medium;
           line-height: 90px;
           width: 390px;
           white-space: normal;
           "
           class="ls-layer ls-responsive"
           data-ls="delayin: 500;  offsetxin: -200; durationin: 1000; delayin: 600; easingin:easeOutQuint; parallax:true; parallaxlevel:3; parallaxaxis: x; transitionout:false; keyframe:true;">
           Cleansing Gel
        </h1>
        <div data-ls-mobile="left: 80px; top: 580px; width: 850px; height: 250px; line-height: 250px; font-size: 70px;"
           data-ls-tablet="height: 110px; line-height: 110px; width: 370px; font-size: 30px; top: 670px; left: 50px;"
           data-ls-laptop="height: 110px; line-height: 110px; width: 370px; font-size: 30px; top: 670px; left: 50px;"
           class="hero-btn ls-l ls-responsive"
           style="
           top: 528px;
           left: 120px;
           width: 266px;
           height: 80px;
           line-height: 80px;
           font-size: 14px;
           padding: 7px;
           padding-left: 40px;
           overflow: hidden;
           "
           data-ls="delayin: 500; offsetxin:left;durationin:1200;easingin:swing;transitionout:false;keyframe:true; parallax:true; parallaxlevel:3; parallaxaxis: x;">
           <a href="{{ route('shop.index') }}" class="vs-btn wave-style1">Belanja Sekarang<i class="far fa-arrow-right"></i></a>
        </div>
     </div>
     <div class="ls-slide" data-ls="duration: 10000; transition2d: 5;">
        <div data-ls-mobile="left: 1100px;" class="ls-l ls-responsive bg-theme"
           style="
           top: 160px;
           left: 50%;
           height: 500px;
           width: 500px;
           opacity: 0.4;
           border-radius: 50%;
           "
           data-ls="loop: true; loopscalex: 2.5; loopscaley: 2.5; loopduration: 5000; loopcount: -1; loopfilter: blur(2px); loopopacity: 0; delayin: 2000; transitionout:false; keyframe:true;">
        </div>
        <div data-ls-mobile="left: 1100px;" class="ls-l ls-responsive bg-theme"
           style="
           top: 160px;
           left: 50%;
           height: 500px;
           width: 500px;
           opacity: 0.4;
           border-radius: 50%;
           "
           data-ls="loop: true; loopscalex: 2.5; loopscaley: 2.5; loopduration: 5000; loopcount: -1; loopfilter: blur(2px); loopopacity: 0; delayin: 3500; transitionout:false; keyframe:true;">
        </div>
        <div data-ls-mobile="left: 1100px;" class="ls-l ls-responsive bg-theme"
           style="
           top: 160px;
           left: 50%;
           height: 500px;
           width: 500px;
           opacity: 0.4;
           border-radius: 50%;
           "
           data-ls="loop: true; loopscalex: 2.5; loopscaley: 2.5; loopduration: 5000; loopcount: -1; loopfilter: blur(2px); loopopacity: 0; delayin: 5000; transitionout:false; keyframe:true;">
        </div>
        <div data-ls-mobile="left: 980px;" class="ls-l ls-responsive bg-white"
           style="
           top: 30px;
           left: 50%;
           height: 760px;
           width: 760px;
           border-radius: 50%;
           "
           data-ls="showinfo:1; scalexin: 0.5; scaleyin: 0.5; delayin: 1500; durationin:1400;  showinfo:1; parallax:true; parallaxlevel:3; parallaxaxis: x; transitionout:false; keyframe:true;">
        </div>
        <img data-ls-mobile="left: 850px;" src="{{ asset('asset-about/img/hero/Hydro-Restorative-Cream2.png') }}"
           class="ls-layer ls-responsive" alt="Spa Girl"
           style="
           top: 0;
           left: 50%;
           z-index: auto;
           width: 950px;
           height: 980px;
           "
           data-ls="showinfo:1; delayin: 300; durationin:1400;  showinfo:1; parallax:true; parallaxlevel:3; parallaxaxis: x; transitionout:false; keyframe:true;" />
        <p data-ls-tablet="font-size: 30px; left: 80px; width: 200px;"
           data-ls-laptop="font-size: 30px; left: 80px; width: 200px;"
           style="
           top: 290px;
           left: 160px;
           margin: 0px;
           font-size: 20px;
           width: 163px;
           font-weight: bold;
           "
           class="ls-layer ls-hide-phone ls-responsive"
           data-ls="delalyin: 400; offsetxin:left;durationin:1200;easingin:swing;transitionout:false;keyframe:true; parallax:true; parallaxlevel:3; parallaxaxis: x;">
           Hydro
        </p>
        <h1 data-ls-mobile="left: 100px; top: 140px; font-size: 140px; line-height: 180px; width: 800px;"
           data-ls-tablet="left: 80px; font-size: 100px; line-height: 120px; width: 600px; top: 380px;"
           data-ls-laptop="left: 80px; font-size: 100px; line-height: 120px; width: 800px; top: 380px;"
           style="
           top: 330px;
           left: 160px;
           margin: 0px;
           text-transform: capitalize;
           font-size: 72px;
           font-weight: medium;
           line-height: 90px;
           width: 390px;
           white-space: normal;
           "
           class="ls-layer ls-responsive"
           data-ls="delayin: 500;  offsetxin: -200; durationin: 1000; delayin: 600; easingin:easeOutQuint; parallax:true; parallaxlevel:3; parallaxaxis: x; transitionout:false; keyframe:true;">
           Restorative Cream
        </h1>
        <div data-ls-mobile="left: 80px; top: 580px; width: 850px; height: 250px; line-height: 250px; font-size: 70px;"
           data-ls-tablet="height: 110px; line-height: 110px; width: 370px; font-size: 30px; top: 670px; left: 50px;"
           data-ls-laptop="height: 110px; line-height: 110px; width: 370px; font-size: 30px; top: 670px; left: 50px;"
           class="hero-btn ls-l ls-responsive"
           style="
           top: 528px;
           left: 120px;
           width: 266px;
           height: 80px;
           line-height: 80px;
           font-size: 14px;
           padding: 7px;
           padding-left: 40px;
           overflow: hidden;
           "
           data-ls="delayin: 500; offsetxin:left;durationin:1200;easingin:swing;transitionout:false;keyframe:true; parallax:true; parallaxlevel:3; parallaxaxis: x;">
           <a href="{{ route('shop.index') }}" class="vs-btn wave-style1">Belanja Sekarang<i class="far fa-arrow-right"></i></a>
        </div>
     </div>
     <div class="ls-slide" data-ls="duration: 10000; transition2d: 5;">
        <div data-ls-mobile="left: 1100px;" class="ls-l ls-responsive bg-theme"
           style="
           top: 160px;
           left: 50%;
           height: 500px;
           width: 500px;
           opacity: 0.4;
           border-radius: 50%;
           "
           data-ls="loop: true; loopscalex: 2.5; loopscaley: 2.5; loopduration: 5000; loopcount: -1; loopfilter: blur(2px); loopopacity: 0; delayin: 2000; transitionout:false; keyframe:true;">
        </div>
        <div data-ls-mobile="left: 1100px;" class="ls-l ls-responsive bg-theme"
           style="
           top: 160px;
           left: 50%;
           height: 500px;
           width: 500px;
           opacity: 0.4;
           border-radius: 50%;
           "
           data-ls="loop: true; loopscalex: 2.5; loopscaley: 2.5; loopduration: 5000; loopcount: -1; loopfilter: blur(2px); loopopacity: 0; delayin: 3500; transitionout:false; keyframe:true;">
        </div>
        <div data-ls-mobile="left: 1100px;" class="ls-l ls-responsive bg-theme"
           style="
           top: 160px;
           left: 50%;
           height: 500px;
           width: 500px;
           opacity: 0.4;
           border-radius: 50%;
           "
           data-ls="loop: true; loopscalex: 2.5; loopscaley: 2.5; loopduration: 5000; loopcount: -1; loopfilter: blur(2px); loopopacity: 0; delayin: 5000; transitionout:false; keyframe:true;">
        </div>
        <div data-ls-mobile="left: 980px;" class="ls-l ls-responsive bg-white"
           style="
           top: 30px;
           left: 50%;
           height: 760px;
           width: 760px;
           border-radius: 50%;
           "
           data-ls="showinfo:1; scalexin: 0.5; scaleyin: 0.5; delayin: 1500; durationin:1400;  showinfo:1; parallax:true; parallaxlevel:3; parallaxaxis: x; transitionout:false; keyframe:true;">
        </div>
        <img data-ls-mobile="left: 850px;" src="{{ asset('asset-about/img/hero/Prebiotic-Feminine-Mousse-Cleanser-2.png') }}"
           class="ls-layer ls-responsive" alt="Spa Girl"
           style="
           top: 0;
           left: 50%;
           z-index: auto;
           width: 950px;
           height: 980px;
           "
           data-ls="showinfo:1; delayin: 300; durationin:1400;  showinfo:1; parallax:true; parallaxlevel:3; parallaxaxis: x; transitionout:false; keyframe:true;" />
        <p data-ls-tablet="font-size: 30px; left: 80px; width: 200px;"
           data-ls-laptop="font-size: 30px; left: 80px; width: 200px;"
           style="
           top: 290px;
           left: 160px;
           margin: 0px;
           font-size: 20px;
           width: 163px;
           font-weight: bold;
           "
           class="ls-layer ls-hide-phone ls-responsive"
           data-ls="delalyin: 400; offsetxin:left;durationin:1200;easingin:swing;transitionout:false;keyframe:true; parallax:true; parallaxlevel:3; parallaxaxis: x;">
           Prebiotic
        </p>
        <h1 data-ls-mobile="left: 100px; top: 140px; font-size: 140px; line-height: 180px; width: 800px;"
           data-ls-tablet="left: 80px; font-size: 100px; line-height: 120px; width: 600px; top: 380px;"
           data-ls-laptop="left: 80px; font-size: 100px; line-height: 120px; width: 800px; top: 380px;"
           style="
           top: 330px;
           left: 160px;
           margin: 0px;
           text-transform: capitalize;
           font-size: 72px;
           font-weight: medium;
           line-height: 90px;
           width: 390px;
           white-space: normal;
           "
           class="ls-layer ls-responsive"
           data-ls="delayin: 500;  offsetxin: -200; durationin: 1000; delayin: 600; easingin:easeOutQuint; parallax:true; parallaxlevel:3; parallaxaxis: x; transitionout:false; keyframe:true;">
           Feminime Cleanser
        </h1>
        <div data-ls-mobile="left: 80px; top: 580px; width: 850px; height: 250px; line-height: 250px; font-size: 70px;"
           data-ls-tablet="height: 110px; line-height: 110px; width: 370px; font-size: 30px; top: 670px; left: 50px;"
           data-ls-laptop="height: 110px; line-height: 110px; width: 370px; font-size: 30px; top: 670px; left: 50px;"
           class="hero-btn ls-l ls-responsive"
           style="
           top: 528px;
           left: 120px;
           width: 266px;
           height: 80px;
           line-height: 80px;
           font-size: 14px;
           padding: 7px;
           padding-left: 40px;
           overflow: hidden;
           "
           data-ls="delayin: 500; offsetxin:left;durationin:1200;easingin:swing;transitionout:false;keyframe:true; parallax:true; parallaxlevel:3; parallaxaxis: x;">
           <a href="{{ route('shop.index') }}" class="vs-btn wave-style1">Belanja Sekarang<i class="far fa-arrow-right"></i></a>
        </div>
     </div>
     <div class="ls-slide" data-ls="duration: 10000; transition2d: 5;">
        <div data-ls-mobile="left: 1100px;" class="ls-l ls-responsive bg-theme"
           style="
           top: 160px;
           left: 50%;
           height: 500px;
           width: 500px;
           opacity: 0.4;
           border-radius: 50%;
           "
           data-ls="loop: true; loopscalex: 2.5; loopscaley: 2.5; loopduration: 5000; loopcount: -1; loopfilter: blur(2px); loopopacity: 0; delayin: 2000; transitionout:false; keyframe:true;">
        </div>
        <div data-ls-mobile="left: 1100px;" class="ls-l ls-responsive bg-theme"
           style="
           top: 160px;
           left: 50%;
           height: 500px;
           width: 500px;
           opacity: 0.4;
           border-radius: 50%;
           "
           data-ls="loop: true; loopscalex: 2.5; loopscaley: 2.5; loopduration: 5000; loopcount: -1; loopfilter: blur(2px); loopopacity: 0; delayin: 3500; transitionout:false; keyframe:true;">
        </div>
        <div data-ls-mobile="left: 1100px;" class="ls-l ls-responsive bg-theme"
           style="
           top: 160px;
           left: 50%;
           height: 500px;
           width: 500px;
           opacity: 0.4;
           border-radius: 50%;
           "
           data-ls="loop: true; loopscalex: 2.5; loopscaley: 2.5; loopduration: 5000; loopcount: -1; loopfilter: blur(2px); loopopacity: 0; delayin: 5000; transitionout:false; keyframe:true;">
        </div>
        <div data-ls-mobile="left: 980px;" class="ls-l ls-responsive bg-white"
           style="
           top: 30px;
           left: 50%;
           height: 760px;
           width: 760px;
           border-radius: 50%;
           "
           data-ls="showinfo:1; scalexin: 0.5; scaleyin: 0.5; delayin: 1500; durationin:1400;  showinfo:1; parallax:true; parallaxlevel:3; parallaxaxis: x; transitionout:false; keyframe:true;">
        </div>
        <img data-ls-mobile="left: 850px;" src="{{ asset('asset-about/img/hero/Prebiotic-Pore-ex-Facial-Pad2.png') }}"
           class="ls-layer ls-responsive" alt="Spa Girl"
           style="
           top: 0;
           left: 50%;
           z-index: auto;
           width: 950px;
           height: 980px;
           "
           data-ls="showinfo:1; delayin: 300; durationin:1400;  showinfo:1; parallax:true; parallaxlevel:3; parallaxaxis: x; transitionout:false; keyframe:true;" />
        <p data-ls-tablet="font-size: 30px; left: 80px; width: 200px;"
           data-ls-laptop="font-size: 30px; left: 80px; width: 200px;"
           style="
           top: 290px;
           left: 160px;
           margin: 0px;
           font-size: 20px;
           width: 163px;
           font-weight: bold;
           "
           class="ls-layer ls-hide-phone ls-responsive"
           data-ls="delalyin: 400; offsetxin:left;durationin:1200;easingin:swing;transitionout:false;keyframe:true; parallax:true; parallaxlevel:3; parallaxaxis: x;">
           Prebiotic Pore Ex
        </p>
        <h1 data-ls-mobile="left: 100px; top: 140px; font-size: 140px; line-height: 180px; width: 800px;"
           data-ls-tablet="left: 80px; font-size: 100px; line-height: 120px; width: 600px; top: 380px;"
           data-ls-laptop="left: 80px; font-size: 100px; line-height: 120px; width: 800px; top: 380px;"
           style="
           top: 330px;
           left: 160px;
           margin: 0px;
           text-transform: capitalize;
           font-size: 72px;
           font-weight: medium;
           line-height: 90px;
           width: 390px;
           white-space: normal;
           "
           class="ls-layer ls-responsive"
           data-ls="delayin: 500;  offsetxin: -200; durationin: 1000; delayin: 600; easingin:easeOutQuint; parallax:true; parallaxlevel:3; parallaxaxis: x; transitionout:false; keyframe:true;">
            Facial Pad
        </h1>
        <div data-ls-mobile="left: 80px; top: 580px; width: 850px; height: 250px; line-height: 250px; font-size: 70px;"
           data-ls-tablet="height: 110px; line-height: 110px; width: 370px; font-size: 30px; top: 670px; left: 50px;"
           data-ls-laptop="height: 110px; line-height: 110px; width: 370px; font-size: 30px; top: 670px; left: 50px;"
           class="hero-btn ls-l ls-responsive"
           style="
           top: 528px;
           left: 120px;
           width: 266px;
           height: 80px;
           line-height: 80px;
           font-size: 14px;
           padding: 7px;
           padding-left: 40px;
           overflow: hidden;
           "
           data-ls="delayin: 500; offsetxin:left;durationin:1200;easingin:swing;transitionout:false;keyframe:true; parallax:true; parallaxlevel:3; parallaxaxis: x;">
           <a href="{{ route('shop.index') }}" class="vs-btn wave-style1">Belanja Sekarang<i class="far fa-arrow-right"></i></a>
        </div>
     </div>
     <div class="ls-slide" data-ls="duration: 10000; transition2d: 5;">
        <div data-ls-mobile="left: 1100px;" class="ls-l ls-responsive bg-theme"
           style="
           top: 160px;
           left: 50%;
           height: 500px;
           width: 500px;
           opacity: 0.4;
           border-radius: 50%;
           "
           data-ls="loop: true; loopscalex: 2.5; loopscaley: 2.5; loopduration: 5000; loopcount: -1; loopfilter: blur(2px); loopopacity: 0; delayin: 2000; transitionout:false; keyframe:true;">
        </div>
        <div data-ls-mobile="left: 1100px;" class="ls-l ls-responsive bg-theme"
           style="
           top: 160px;
           left: 50%;
           height: 500px;
           width: 500px;
           opacity: 0.4;
           border-radius: 50%;
           "
           data-ls="loop: true; loopscalex: 2.5; loopscaley: 2.5; loopduration: 5000; loopcount: -1; loopfilter: blur(2px); loopopacity: 0; delayin: 3500; transitionout:false; keyframe:true;">
        </div>
        <div data-ls-mobile="left: 1100px;" class="ls-l ls-responsive bg-theme"
           style="
           top: 160px;
           left: 50%;
           height: 500px;
           width: 500px;
           opacity: 0.4;
           border-radius: 50%;
           "
           data-ls="loop: true; loopscalex: 2.5; loopscaley: 2.5; loopduration: 5000; loopcount: -1; loopfilter: blur(2px); loopopacity: 0; delayin: 5000; transitionout:false; keyframe:true;">
        </div>
        <div data-ls-mobile="left: 980px;" class="ls-l ls-responsive bg-white"
           style="
           top: 30px;
           left: 50%;
           height: 760px;
           width: 760px;
           border-radius: 50%;
           "
           data-ls="showinfo:1; scalexin: 0.5; scaleyin: 0.5; delayin: 1500; durationin:1400;  showinfo:1; parallax:true; parallaxlevel:3; parallaxaxis: x; transitionout:false; keyframe:true;">
        </div>
        <img data-ls-mobile="left: 850px;" src="{{ asset('asset-about/img/hero/Skin-Awakening-Glow-Serum-2.png') }}"
           class="ls-layer ls-responsive" alt="Spa Girl"
           style="
           top: 0;
           left: 50%;
           z-index: auto;
           width: 950px;
           height: 980px;
           "
           data-ls="showinfo:1; delayin: 300; durationin:1400;  showinfo:1; parallax:true; parallaxlevel:3; parallaxaxis: x; transitionout:false; keyframe:true;" />
        <p data-ls-tablet="font-size: 30px; left: 80px; width: 200px;"
           data-ls-laptop="font-size: 30px; left: 80px; width: 200px;"
           style="
           top: 290px;
           left: 160px;
           margin: 0px;
           font-size: 20px;
           width: 163px;
           font-weight: bold;
           "
           class="ls-layer ls-hide-phone ls-responsive"
           data-ls="delalyin: 400; offsetxin:left;durationin:1200;easingin:swing;transitionout:false;keyframe:true; parallax:true; parallaxlevel:3; parallaxaxis: x;">
           Skin Awakening
        </p>
        <h1 data-ls-mobile="left: 100px; top: 140px; font-size: 140px; line-height: 180px; width: 800px;"
           data-ls-tablet="left: 80px; font-size: 100px; line-height: 120px; width: 600px; top: 380px;"
           data-ls-laptop="left: 80px; font-size: 100px; line-height: 120px; width: 800px; top: 380px;"
           style="
           top: 330px;
           left: 160px;
           margin: 0px;
           text-transform: capitalize;
           font-size: 72px;
           font-weight: medium;
           line-height: 90px;
           width: 390px;
           white-space: normal;
           "
           class="ls-layer ls-responsive"
           data-ls="delayin: 500;  offsetxin: -200; durationin: 1000; delayin: 600; easingin:easeOutQuint; parallax:true; parallaxlevel:3; parallaxaxis: x; transitionout:false; keyframe:true;">
            Glow Serum
        </h1>
        <div data-ls-mobile="left: 80px; top: 580px; width: 850px; height: 250px; line-height: 250px; font-size: 70px;"
           data-ls-tablet="height: 110px; line-height: 110px; width: 370px; font-size: 30px; top: 670px; left: 50px;"
           data-ls-laptop="height: 110px; line-height: 110px; width: 370px; font-size: 30px; top: 670px; left: 50px;"
           class="hero-btn ls-l ls-responsive"
           style="
           top: 528px;
           left: 120px;
           width: 266px;
           height: 80px;
           line-height: 80px;
           font-size: 14px;
           padding: 7px;
           padding-left: 40px;
           overflow: hidden;
           "
           data-ls="delayin: 500; offsetxin:left;durationin:1200;easingin:swing;transitionout:false;keyframe:true; parallax:true; parallaxlevel:3; parallaxaxis: x;">
           <a href="{{ route('shop.index') }}" class="vs-btn wave-style1">Belanja Sekarang<i class="far fa-arrow-right"></i></a>
        </div>
     </div>
     <div class="ls-slide" data-ls="duration: 10000; transition2d: 5;">
        <div data-ls-mobile="left: 1100px;" class="ls-l ls-responsive bg-theme"
           style="
           top: 160px;
           left: 50%;
           height: 500px;
           width: 500px;
           opacity: 0.4;
           border-radius: 50%;
           "
           data-ls="loop: true; loopscalex: 2.5; loopscaley: 2.5; loopduration: 5000; loopcount: -1; loopfilter: blur(2px); loopopacity: 0; delayin: 2000; transitionout:false; keyframe:true;">
        </div>
        <div data-ls-mobile="left: 1100px;" class="ls-l ls-responsive bg-theme"
           style="
           top: 160px;
           left: 50%;
           height: 500px;
           width: 500px;
           opacity: 0.4;
           border-radius: 50%;
           "
           data-ls="loop: true; loopscalex: 2.5; loopscaley: 2.5; loopduration: 5000; loopcount: -1; loopfilter: blur(2px); loopopacity: 0; delayin: 3500; transitionout:false; keyframe:true;">
        </div>
        <div data-ls-mobile="left: 1100px;" class="ls-l ls-responsive bg-theme"
           style="
           top: 160px;
           left: 50%;
           height: 500px;
           width: 500px;
           opacity: 0.4;
           border-radius: 50%;
           "
           data-ls="loop: true; loopscalex: 2.5; loopscaley: 2.5; loopduration: 5000; loopcount: -1; loopfilter: blur(2px); loopopacity: 0; delayin: 5000; transitionout:false; keyframe:true;">
        </div>
        <div data-ls-mobile="left: 980px;" class="ls-l ls-responsive bg-white"
           style="
           top: 30px;
           left: 50%;
           height: 760px;
           width: 760px;
           border-radius: 50%;
           "
           data-ls="showinfo:1; scalexin: 0.5; scaleyin: 0.5; delayin: 1500; durationin:1400;  showinfo:1; parallax:true; parallaxlevel:3; parallaxaxis: x; transitionout:false; keyframe:true;">
        </div>
        <img data-ls-mobile="left: 850px;" src="{{ asset('asset-about/img/hero/Vit-C-Tone-Up-Day-Cream-SPF502.png') }}"
           class="ls-layer ls-responsive" alt="Spa Girl"
           style="
           top: 0;
           left: 50%;
           z-index: auto;
           width: 950px;
           height: 980px;
           "
           data-ls="showinfo:1; delayin: 300; durationin:1400;  showinfo:1; parallax:true; parallaxlevel:3; parallaxaxis: x; transitionout:false; keyframe:true;" />
        <p data-ls-tablet="font-size: 30px; left: 80px; width: 200px;"
           data-ls-laptop="font-size: 30px; left: 80px; width: 200px;"
           style="
           top: 290px;
           left: 160px;
           margin: 0px;
           font-size: 20px;
           width: 163px;
           font-weight: bold;
           "
           class="ls-layer ls-hide-phone ls-responsive"
           data-ls="delalyin: 400; offsetxin:left;durationin:1200;easingin:swing;transitionout:false;keyframe:true; parallax:true; parallaxlevel:3; parallaxaxis: x;">
           VIT C Tone Up
        </p>
        <h1 data-ls-mobile="left: 100px; top: 140px; font-size: 140px; line-height: 180px; width: 800px;"
           data-ls-tablet="left: 80px; font-size: 100px; line-height: 120px; width: 600px; top: 380px;"
           data-ls-laptop="left: 80px; font-size: 100px; line-height: 120px; width: 800px; top: 380px;"
           style="
           top: 330px;
           left: 160px;
           margin: 0px;
           text-transform: capitalize;
           font-size: 72px;
           font-weight: medium;
           line-height: 90px;
           width: 390px;
           white-space: normal;
           "
           class="ls-layer ls-responsive"
           data-ls="delayin: 500;  offsetxin: -200; durationin: 1000; delayin: 600; easingin:easeOutQuint; parallax:true; parallaxlevel:3; parallaxaxis: x; transitionout:false; keyframe:true;">
            Day Cream
        </h1>
        <div data-ls-mobile="left: 80px; top: 580px; width: 850px; height: 250px; line-height: 250px; font-size: 70px;"
           data-ls-tablet="height: 110px; line-height: 110px; width: 370px; font-size: 30px; top: 670px; left: 50px;"
           data-ls-laptop="height: 110px; line-height: 110px; width: 370px; font-size: 30px; top: 670px; left: 50px;"
           class="hero-btn ls-l ls-responsive"
           style="
           top: 528px;
           left: 120px;
           width: 266px;
           height: 80px;
           line-height: 80px;
           font-size: 14px;
           padding: 7px;
           padding-left: 40px;
           overflow: hidden;
           "
           data-ls="delayin: 500; offsetxin:left;durationin:1200;easingin:swing;transitionout:false;keyframe:true; parallax:true; parallaxlevel:3; parallaxaxis: x;">
           <a href="{{ route('shop.index') }}" class="vs-btn wave-style1">Belanja Sekarang<i class="far fa-arrow-right"></i></a>
        </div>
     </div>
   </div>
</section>
<section class="vs-about-wrapper mt-4 vs-about-layout1 position-relative space" id="about">
   <div class="shape1 position-absolute ani-moving-x d-none d-lg-inline-block">
      <img src="{{ asset('asset-about/img/shape/leaf-icon-1.png') }}" alt="Leaf" />
   </div>
   <div class="container mt-5">
      <div class="row">
         <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="about-image-box1 pt-100 pb-150 position-relative mb-30 mb-lg-0">
               <div class="big-img d-inline-block position-relative">
                  <a href="#"><img src="{{ asset('asset-about/img/about/about-us.jpg') }}"
                     alt="About PE Skinpro" />
                  </a><span class="pattern d-none d-xl-inline-block"><img
                     src="{{ asset('asset-about/img/icons/about-img-pattern-1.png') }}"
                     alt="Pattern" /></span>
               </div>
               <div class="small-img1 d-none d-xl-inline-block">
                  <a href="#"><img width="210" src="{{ asset('asset-about/img/about/lab1-02-scaled.jpg') }}"
                     alt="About PE Skinpro" /></a>
               </div>
               <div class="small-img2 d-none d-xl-inline-block">
                  <a href="#"><img width="210" src="{{ asset('asset-about/img/about/lab2-02-scaled.jpg') }}"
                     alt="About PE Skinpro" /></a>
               </div>
            </div>
         </div>
         <div class="col-lg-6 align-self-center">
            <div class="about-content-box1 pl-50">
               <h2 class="sec-title-style1">
                  Tentang <span class="sec-subtitle-style1">PE Skinpro</span>
               </h2>
               <div class="text-box1">
                  <p class="mb-0">
                    PE Skin Professional didirikan pada satu dekade yang lalu dengan tujuan untuk memproduksi produk perawatan kecantikan pribadi yang terjangkau oleh semua orang. Perusahaan ini diposisikan dengan departemen penjualan dan layanan yang kuat yang telah membangun fondasi untuk pertumbuhan dan ekspansi berdasarkan perdagangan grosir berbagai macam produk perawatan wajah, tubuh, rambut, tangan, dan kaki profesional. Kami menawarkan formulasi perawatan kulit, rambut, dan tubuh yang dibuat dengan perhatian yang cermat terhadap detail dan dengan khasiat yang kuat. Penelitian dan evaluasi dilakukan terhadap para pemasok berdasarkan harga, kualitas, dukungan, ketersediaan, keandalan, kemampuan produksi dan distribusi untuk memberikan produk dengan kualitas terbaik kepada para pelanggan.
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="vs-service-wrapper vs-service-layout1 bg-light-theme space-top space-md-bottom" id="service">
   <div class="container">
      <div class="row text-center justify-content-center">
         <div class="col-lg-8 col-xl-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="section-title">
               <h2 class="sec-title-style1">
                  Semua Manfaat <br> Kandungan <br> Produk PE Skinpro
               </h2>
               <p class="sec-text-style1">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga ipsa aliquam asperiores reprehenderit assumenda dolorum, eos placeat quas ullam libero, officia commodi temporibus possimus debitis quis beatae? Tempora, ipsum id.
               </p>
            </div>
        </div>
        </div>
      <div class="row vs-carousel wow fadeInUp" data-wow-delay="0.3s" data-slidetoshow="4" data-mdslidetoshow="3"
         data-smslidetoshow="2" data-xsslidetoshow="1">
         <div class="col-lg-3">
            <div class="vs-service">
               <div class="service-icon">
                  <span class="icon text-theme bg-white"><img src="https://placehold.co/50x50" alt=""></span>
                  <span class="bg-icon ani-moving icon-6x text-theme"><img src="https://placehold.co/70x70" alt=""></span>
               </div>
               <div class="service-content">
                  <h3 class="service-title h4">
                     <a href="#">Mecnerahkan Kulit</a>
                  </h3>
                  <p>
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, mollitia.
                  </p>
               </div>
            </div>
         </div>
         <div class="col-lg-3">
            <div class="vs-service">
               <div class="service-icon">
                  <span class="icon text-theme bg-white"><i class="fa-3x flaticon-stones-1"></i></span>
                  <span class="bg-icon ani-moving icon-6x text-theme"><i class="flaticon-mortar"></i></span>
               </div>
               <div class="service-content">
                  <h3 class="service-title h4">
                     <a href="#">Menghaluskan Kulit</a>
                  </h3>
                  <p>
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, non!
                  </p>
               </div>
            </div>
         </div>
         <div class="col-lg-3">
            <div class="vs-service">
               <div class="service-icon">
                  <span class="icon text-theme bg-white"><i class="fa-3x flaticon-facial-treatment"></i></span>
                  <span class="bg-icon ani-moving icon-6x text-theme"><i class="flaticon-teapot"></i></span>
               </div>
               <div class="service-content">
                  <h3 class="service-title h4">
                     <a href="#">Melembabkan Kulit</a>
                  </h3>
                  <p>
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, aliquam?
                  </p>
               </div>
            </div>
         </div>
         <div class="col-lg-3">
            <div class="vs-service">
               <div class="service-icon">
                  <span class="icon text-theme bg-white"><i class="fa-3x flaticon-cosmetics"></i></span>
                  <span class="bg-icon ani-moving icon-6x text-theme"><i class="flaticon-lotus"></i></span>
               </div>
               <div class="service-content">
                  <h3 class="service-title h4">
                     <a href="#">Melembutkan Kulit</a>
                  </h3>
                  <p>
                     Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae, natus!
                  </p>
               </div>
            </div>
         </div>
         <div class="col-lg-3">
            <div class="vs-service">
               <div class="service-icon">
                  <span class="icon text-theme bg-white"><i class="fa-3x flaticon-beauty-treatment"></i></span>
                  <span class="bg-icon ani-moving icon-6x text-theme"><i
                     class="flaticon-cosmetics-1"></i></span>
               </div>
               <div class="service-content">
                  <h3 class="service-title h4">
                     <a href="#">Menjaga Kesehatan Kulit</a>
                  </h3>
                  <p>
                     Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo, facere?
                  </p>
               </div>
            </div>
         </div>
      </div>
        <div class="vs-btn-group text-center mt-5">
            <a href="{{ route('about.ListProducts') }}" class="vs-btn wave-style1 mb-3 mb-sm-0 mr-sm-3">Lihat Semua Produk Kami<i
               class="far fa-arrow-right"></i></a>
         </div>
      </div>
</section>
<section class="vs-appointment-wrapper vs-appointment-layout1 position-relative space-top space-md-bottom"
   id="contact">
   <div class="container">
    <div class="row">
        <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="appointment-form-style1 input-white bg-light-theme mb-30">
                <img src="https://placehold.co/600x680" alt="Form Image" class="w-100 h-100 object-fit-cover" />
            </div>
        </div>
        <div class="col-xl-6">
            <div class="row">
                <div class="col-lg-6 col-xl-12 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="offer-banner-style1 mb-30">
                        <div class="banner-image">
                            <img src="https://placehold.co/570x311"
                                alt="PE Skinpro Promo" class="w-100" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-12 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="offer-banner-style2 mb-30">
                        <div class="banner-image">
                            <img src="https://placehold.co/570x311"
                            alt="PE Skinpro Promo" class="w-100" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<div class="divider-style1 wow fadeIn" data-wow-delay="0.3s">
   <div class="container text-center position-relative">
      <span class="divider-icon"><img src="{{ asset('asset-about/img/logo/logo-white.png') }}" width="50" alt="PE Skinpro"></span>
   </div>
</div>
<section class="vs-about-wrapper vs-about-layout2 position-relative space-top space-md-bottom">
   <div class="container">
      <div class="row flex-row-reverse">
         <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="about-image-box2 mb-30">
               <img src="{{ asset('asset-about/img/about/testi.jpg') }}" alt="Testimoni PE Skinpro" />
            </div>
         </div>
         <div class="col-lg-6 align-self-center">
            <div class="about-content-box2 pr-xl-4 mb-30">
               <h2 class="sec-title-style1">
                  Keunggulan
                  <span class="sec-subtitle-style1">Produk Kami</span>
               </h2>
               <div class="text-box1 py-0 d-block d-md-flex align-items-center">
                  <div class="media-body">
                     <p class="mb-0">
                        Untuk memastikan kualitas produk yang aman digunakan, kami menerapkan teknologi Jerman modern dalam pembuatan produk kami. PE Skin Professional telah membangun reputasi pada penggunaan komponen yang optimal dan berkualitas tinggi dalam produk dan lingkungan produksi untuk memastikan produk bermutu tinggi, mutakhir, dan dapat diandalkan yang setara dengan inovasi dan tren saat ini di pasar untuk memenuhi kebutuhan pelanggan. Produk kami bebas dari kekejaman, bersertifikat GMP, telah teruji di laboratorium, dan bebas dari THC.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<div class="vs-brand-wrapper vs-brand-layout1 px-180">
   <div class="container-fluid">
      <div class="row vs-carousel text-center wow fadeInUp" data-wow-delay="0.3s" data-slidetoshow="5"
         data-xlslidetoshow="4" data-mlslidetoshow="4" data-lgslidetoshow="4" data-mdslidetoshow="3"
         data-smslidetoshow="2" data-xsslidetoshow="2">
         <div class="col-xl-3">
            <div class="vs-brand">
               <img width="100" src="{{ asset('asset-about/img/cert/cruelty-cert.png') }}" alt="Brand Image" />
            </div>
         </div>
         <div class="col-xl-3">
            <div class="vs-brand">
               <img width="100" src="{{ asset('asset-about/img/cert/gmp-cert.png') }}" alt="Brand Image" />
            </div>
         </div>
         <div class="col-xl-3">
            <div class="vs-brand">
               <img width="100" src="{{ asset('asset-about/img/cert/halal-cert.png') }}" alt="Brand Image" />
            </div>
         </div>
         <div class="col-xl-3">
            <div class="vs-brand">
               <img width="100" src="{{ asset('asset-about/img/cert/lab-tested.png') }}" alt="Brand Image" />
            </div>
         </div>
         <div class="col-xl-3">
            <div class="vs-brand">
               <img width="100" src="{{ asset('asset-about/img/cert/thc-free.png') }}" alt="Brand Image" />
            </div>
         </div>
      </div>
   </div>
</div>
<section class="vs-pricing-wrapper bg-auto bg-top vs-pricing-layout1 background-image space-top"
   data-vs-img="https://placehold.co/1920x919" id="price">
   <div class="container">
      <div class="row flex-row-reverse">
         <div class="col-md-10 col-lg-7 col-xl-6 wow fadeInUp" data-wow-delay="0.3s">
            <p class="mb-30">
               Dapatkan <span class="inner-label">FREE GIFT</span> Spesial dari PE Skinpro
            </p>
            <h2 class="sec-title-style1 mb-40">
               Diskon Menarik <br> Setiap Saat
            </h2>
            <div class="price-list-style1 bg-white py-60 px-60">
               <div class="vs-price-list media">
                  <div class="media-img mr-30">
                     <a href="{{ route('shop.index') }}"><img width="120" height="120" src="{{ asset('asset-about/img/product/600x750_CICA--B5-REFRESHING-TONER.jpg') }}"
                        alt="PE Skinpro Promo" /></a>
                  </div>
                  <div class="media-body align-self-center">
                     <h3 class="price-title h4 mb-10">
                        <a href="{{ route('shop.index') }}">CICA 85 - Refreshing Toner</a>
                     </h3>
                     <p class="mb-0">
                        <s>Rp. 160.000</s>
                        <span class="inner-label">Rp. 144.000</span>
                     </p>
                  </div>
               </div>
               <div class="vs-price-list media">
                  <div class="media-img mr-30">
                     <a href="{{ route('shop.index') }}"><img width="120" height="120" src="{{ asset('asset-about/img/product/600x750_HONEY-CLEANSING-GEL.jpg') }}"
                        alt="PE Skinpro Promo" /></a>
                  </div>
                  <div class="media-body align-self-center">
                     <h3 class="price-title h4 mb-10">
                        <a href="{{ route('shop.index') }}">Honey Cleansing Gel</a>
                     </h3>
                     <p class="mb-0">
                        <s>Rp. 160.000</s>
                        <span class="inner-label">Rp. 144.000</span>
                     </p>
                  </div>
               </div>
               <div class="vs-price-list media">
                  <div class="media-img mr-30">
                     <a href="{{ route('shop.index') }}"><img width="120" height="120" src="{{ asset('asset-about/img/product/600x750_HYDRO-RESTORATIVE-CREAM.jpg') }}"
                        alt="PE Skinpro Promo" /></a>
                  </div>
                  <div class="media-body align-self-center">
                     <h3 class="price-title h4 mb-10">
                        <a href="{{ route('shop.index') }}">Hydro Restorative Cream</a>
                     </h3>
                     <p class="mb-0">
                        <s>Rp. 160.000</s>
                        <span class="inner-label">Rp. 144.000</span>
                     </p>
                  </div>
               </div>
               <div class="vs-price-list media">
                  <div class="media-img mr-30">
                     <a href="{{ route('shop.index') }}"><img width="120" height="120" src="{{ asset('asset-about/img/product/600x750_PREBIOTIC-PORE-EX.jpg') }}"
                        alt="PE Skinpro Promo" /></a>
                  </div>
                  <div class="media-body align-self-center">
                     <h3 class="price-title h4 mb-10">
                        <a href="{{ route('shop.index') }}">Prebiotic Pore Ex Facial Pad</a>
                     </h3>
                     <p class="mb-0">
                        <s>Rp. 160.000</s>
                        <span class="inner-label">Rp. 144.000</span>
                     </p>
                  </div>
               </div>
               <div class="text-center">
                <div class="header-btn">
                    <a href="{{ route('shop.index') }}" class="vs-btn vs-styleCustom rounded text-lg">Belanja Sekarang</a>
                </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="vs-testimonial-wrapper vs-testimonial-layout1 space-top space-md-bottom">
   <div class="container">
        <h2 class="sec-title-style1 text-center">
            Ikuti Kami
        </h2>
        <!-- Elfsight Instagram Feed | Untitled Instagram Feed -->
        <script src="https://static.elfsight.com/platform/platform.js" async></script>
        <div class="elfsight-app-6508e2be-c0f9-48a7-a36f-1fc8fc6532cd" data-elfsight-app-lazy></div>

        <!-- Elfsight TikTok Feed | Untitled TikTok Feed -->
        <script src="https://static.elfsight.com/platform/platform.js" async></script>
        <div class="elfsight-app-46cfaec0-104b-48fc-85b6-c97c50848e89" data-elfsight-app-lazy></div>
   </div>
</section>
<section class="vs-blog-wrapper vs-blog-layout1 link-inherit bg-light-theme space-top space-md-bottom" id="blog">
   <div class="container">
      <div class="row text-center justify-content-center">
         <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="section-title">
               <h2 class="sec-title-style1">
                  Seputar PE Skinpro
               </h2>
               <p class="sec-text-style1">
                Jangan Lupa Ikuti Berita Terbaru Kami Tentang Skincare Untuk Kulit Cantik dan Sehat Anda!
               </p>
            </div>
         </div>
      </div>
      <div class="row vs-carousel wow fadeInUp" data-wow-delay="0.3s" data-slidetoshow="3" data-mdslidetoshow="2"
         data-smslidetoshow="1" data-xsslidetoshow="1">
         <div class="col-lg-4">
            <div class="vs-blog">
               <div class="blog-image image-scale-hover">
                  <a href="{{ route('about.newsDetail') }}"><img src="{{ asset('asset-about/img/blog/blog-img-1-1.jpg') }}"
                     alt="Blog Image" class="w-100" /></a>
               </div>
               <div class="blog-content bg-white">
                  <div class="blog-meta">
                     <a href="{{ route('about.newsDetail') }}"><i class="fal fa-calendar-alt"></i>14th March 2023</a>
                  </div>
                  <h3 class="blog-title h4 mb-10">
                     <a href="{{ route('about.newsDetail') }}">We also offer outside catering; take-away</a>
                  </h3>
               </div>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="vs-blog">
               <div class="blog-image image-scale-hover">
                  <a href="{{ route('about.newsDetail') }}"><img src="{{ asset('asset-about/img/blog/blog-img-1-2.jpg') }}"
                     alt="Blog Image" class="w-100" /></a>
               </div>
               <div class="blog-content bg-white">
                  <div class="blog-meta">
                     <a href="{{ route('about.newsDetail') }}"><i class="fal fa-calendar-alt"></i>16th March 2023</a>
                  </div>
                  <h3 class="blog-title h4 mb-10">
                     <a href="{{ route('about.newsDetail') }}">We giving special service for vip.</a>
                  </h3>
               </div>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="vs-blog">
               <div class="blog-image image-scale-hover">
                  <a href="{{ route('about.newsDetail') }}"><img src="{{ asset('asset-about/img/blog/blog-img-1-3.jpg') }}"
                     alt="Blog Image" class="w-100" /></a>
               </div>
               <div class="blog-content bg-white">
                  <div class="blog-meta">
                     <a href="{{ route('about.newsDetail') }}"><i class="fal fa-calendar-alt"></i>22th April 2023</a>
                  </div>
                  <h3 class="blog-title h4 mb-10">
                     <a href="{{ route('about.newsDetail') }}">We giving special service for vip.</a>
                  </h3>
               </div>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="vs-blog">
               <div class="blog-image image-scale-hover">
                  <a href="{{ route('about.newsDetail') }}"><img src="{{ asset('asset-about/img/blog/blog-img-1-4.jpg') }}"
                     alt="Blog Image" class="w-100" /></a>
               </div>
               <div class="blog-content bg-white">
                  <div class="blog-meta">
                     <a href="{{ route('about.newsDetail') }}"><i class="fal fa-calendar-alt"></i>05th May 2023</a>
                     <a href="{{ route('about.newsDetail') }}"><i class="fal fa-user"></i>By User</a>
                  </div>
                  <h3 class="blog-title h4 mb-10">
                     <a href="{{ route('about.newsDetail') }}">The house of care famous Spa Service.</a>
                  </h3>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@include('about.components.offer')

@endsection
