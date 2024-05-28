@extends('frontend.layout.master',['pagename' => 'contact'])
@section('title', 'Contact')
@section('bgcolor', '#BD962B')
@section('content')

<div class="section section-fullheight bg-colorful">
    <div class="container">
        <div class="article contact-boxed pb-4">
            <h1 class="text-special-elite {{  session()->get('language')=='thai'?'th':'' }}" data-aos="fade-up">{{  session()->get('language')=='thai'?'ติดต่อเรา':'Contact' }}</h1>

            <div class="d-block" data-aos="fade-up" data-aos-delay="200">
                <p><a class="link-underline" href="http://www.kala-kala.co/" target="_blank">www.kala-kala.co</a></p>
                <p><a href="#" target="_blank">IG : kalakala.colourist</a></p>
                <p><a href="#" target="_blank">Line @kalakala</a></p>
                <p>Email : <a class="link-underline" href="mailto:kalakalacolourist@gmail.com" target="_blank">kalakalacolourist@gmail.com</a></p>
            </div>
        </div>
    </div><!--container-->
</div><!--section-->
@endsection
