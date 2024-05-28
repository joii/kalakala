@extends('frontend.layout.master',['pagename' => 'book'])
@section('title', 'Book a Session')
@section('bgcolor', '#C93402')
@section('content')
<div class="section section-body bg-colorful">
    <div class="container">
        <div class="article text-center-alway max-width" style="--max-width:960px">
            <h1 class="text-special-elite pb-2">Book a session via</h1>

            <p>
                Line ID: @kalakala<br>
                or<br>
                Email: <a href="mailto:kalakalacolourist@gmail.com">kalakalacolourist@gmail.com</a>
            </p>

            <p class="py-1"></p>

            <h2 class="text-special-elite pb-3 {{  session()->get('language')=='thai'?'th':'' }}">
                {{  session()->get('language')=='thai'?'เลือกเวลา':'Schedule your time' }}
            </h2>

            <p class="{{  session()->get('language')=='thai'?'th':'' }}">
                {{  session()->get('language')=='thai'?'วันจันทร์ ถึง วันศุกร์':'Mon to Fri:' }}
            </p>
            <p>
                8.00   to    10.00<br>
                9.00   to    11.00<br>
                10.00   to    12.00<br>
                11.00   to    13.00<br>
                12.00   to    14.00<br>
                13.00   to    15.00<br>
                14.00   to    16.00<br>
                15.00   to    17.00
            </p>

            <p class="py-1"></p>

            <h2 class="text-special-elite pb-sm-3 pb-2 {{  session()->get('language')=='thai'?'th':'' }}">
                {{  session()->get('language')=='thai'?'สถานที่':'Our Main Venue' }}
            </h2>
            <p class="{{  session()->get('language')=='thai'?'th':'' }}">
                @if(@session()->get('language')=="thai")
                แสงธรรมชาติและความเป็นส่วนตัวเป็นหัวใจหลักในการเลือกสถานที่นัดพบของเรากับคุณ เพื่อให้มั่นใจว่าสามารถวิเคราะห์สีต่างๆได้อย่างถูกต้อง และเพื่อให้คุณสามารถเปิดใจพูดคุยกับเราได้อย่างผ่อนคลายเป็นกันเอง แสดงความเป็นตัวคุณได้อย่างเต็มที่

                @else
                Our venue is carefully chosen to incorporate two key elements: natural light and privacy. This ensures precise colour perception, providing an open-minded atmosphere for our one-on-one sessions.</p>

                @endif

            <p class="py-sm-1"></p>

            <p class="mb-1">No Tuesday in Pridi</p>
            <p class="fs-15 {{  session()->get('language')=='thai'?'th':'' }}">
                @if(@session()->get('language')=="thai")
                ที่ตั้ง : ซอยปรีดีพนมยงค์ 31 (ซอยเจริญใจ)

                @else
                Location: Soi Pridi Panomyong 31 (Charoen Chai Alley)
                @endif

            </p>

            <div class="d-block max-width" style="--max-width:880px">
                <div class="row g-2 g-sm-3 py-lg-5 py-sm-4 py-2">
                    <div class="col-sm-4 col-6" data-aos="fade-in" data-aos-delay="100">
                        <a data-fancybox="g1" href="{{  asset('frontend/assets/img/thumb/photo-570x829--1.jpg') }}"><img class="w-100" src="{{  asset('frontend/assets/img/thumb/photo-570x829--1.jpg')}}" alt="kalakala"></a>
                    </div>
                    <div class="col-sm-4 col-6" data-aos="fade-in" data-aos-delay="200">
                        <a data-fancybox="g1" href="{{  asset('frontend/assets/img/thumb/photo-570x829--2.jpg')}}"><img class="w-100" src="{{  asset('frontend/assets/img/thumb/photo-570x829--2.jpg')}}" alt="kalakala"></a>
                    </div>
                    <div class="col-sm-4 col-6" data-aos="fade-in" data-aos-delay="300">
                        <a data-fancybox="g1" href="{{  asset('frontend/assets/img/thumb/photo-570x829--3.jpg')}}"><img class="w-100" src="{{  asset('frontend/assets/img/thumb/photo-570x829--3.jpg')}}" alt="kalakala"></a>
                    </div>
                </div>
            </div>

            <p class="py-1"></p>

            <p class="text-special-elite {{  session()->get('language')=='thai'?'th':'' }}">
                @if(@session()->get('language')=="thai")
                *** ลูกค้าสามารถติดต่อเราโดยตรงเพื่อนัดหมายสถานที่ และเวลานอกเหนือจากที่ระบุไว้ได้ ***

                @else
                * Our scheduling is flexible to accommodate your availability.<br>
                Feel free to reach out to us directly to arrange a meeting time that works best for you.
                @endif
               </p>

           <p class="py-3"></p>
        </div><!--article-->
    </div><!--container-->
</div><!--section-->
@endsection
