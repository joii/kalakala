@extends('frontend.layout.master',['pagename' => 'home'])
@section('title', 'Home Page')
@section('bgcolor', '#1e1e1e')
@section('content')
    <div id="fullpage" class="fullpage">
        <div id="section1" class="section section-hp-01 bg-colorful">
            <div class="swiper-container swiper-banner">
                <div class="swiper-wrapper">
                    <div class="swiper-slide banner-1" style="--bg:#921910;">
                        <div class="quote-boxed">
                            <img src="{{ asset('frontend/assets/img/thumb/post-it-1.png')}}" alt="kalakala">
                            <div class="quote">
                                <img class="logo" src="{{ asset('frontend/assets/img/logo.svg')}}" alt="kalakala">
                                <h2>Colourist</h2>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide banner-2" style="--bg:#0C2738;">
                        <div class="quote-boxed">
                            <img src="{{ asset('frontend/assets/img/thumb/post-it-2.png')}}" alt="kalakala">
                            <div class="quote">
                                <h2>
                                    A lifelong guide to your colours, crafted from your own personality.
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide banner-3" style="--bg:#085F66;">
                        <div class="quote-boxed">

                            <img src="{{ asset('frontend/assets/img/thumb/post-it-3.png')}}" alt="kalakala">
                            <div class="quote">
                                <h2>
                                    UK certified colourist under the tutelage of Colour Affects
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide banner-4" style="--bg:#F5B404;">
                        <div class="quote-boxed">
                            <img src="{{ asset('frontend/assets/img/thumb/post-it-4.png')}}" alt="kalakala">
                            <div class="quote">
                                <h2>
                                    Now colour science can be applied to influence human behavior powerfully, accurately,<br/>and predictably.
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--swiper-container-->
        </div><!--section-->

        <div id="section2" class="section section-hp-02 bg-colorful">
            <div class="container">
                <div class="hgroup center pt-0">
                    <div class="textrow">
                        <img class="colour" data-aos="fade-up" data-aos-delay="200" style="width: 152px;" src="{{ asset('frontend/assets/img/thumb/colour--1.png')}}" alt="kalakala">
                    </div>

                    <h2 class="text-special-elite {{  session()->get('language')=='thai'?'th':'' }}" data-aos="fade-in" data-aos-delay="200">
                        {{  session()->get('language')=='thai'?'ทำไม สี จึงสำคัญ?':'Why Colour Matters?' }}
                    </h2>

                </div>

                <div class="article text-center" data-aos="fade-in" data-aos-delay="200">
                    @if(@session()->get('language')=="thai")
                    <ul class="lists text-center">
                        <li>80% ของการตอบสนองต่อสีนั้นเป็นไปโดยไม่รู้ตัว</li>
                        <li>เมื่อเราพิจารณาสิ่งใด สี คือสิ่งแรกที่เรารับรู้</li>
                        <li>สี คือภาษาไร้เสียงอันทรงพลังที่สื่อสารได้ดังกว่าคำพูด</li>
                        <li>ทุกสีมีคุณสมบัติด้านบวกและลบเสมอ</li>
                        <li>แต่ละเฉดสีส่งผลต่อภาวะทางจิตใจที่แตกต่างกัน</li>
                        <li>สีมีอิทธิพลทางจิตวิทยาต่อมนุษย์ทุกคนโดยไม่ขึ้นอยู่กับความหลากหลายทางวัฒนธรรม เพศ และวัย</li>
                        <li>แนวคิดที่ว่าสีส่งผลต่ออารมณ์และพฤติกรรมนั้นเป็นที่ยอมรับ แต่มีน้อยคนที่จะเข้าใจ</li>
                        <li>การใช้สีให้ประสบความสำเร็จนั้น ไม่ได้ขึ้นอยู่กับสีใดสีหนึ่ง เช่นเดียวกับดนตรี ที่เกิดจากความกลมกลืนหรือการประสานกันของโน้ตหลายตัว</li>
                        <li>เราไม่ได้ตอบสนองต่อสีเพียงสีเดียว แต่ตอบสนองต่อ “กลุ่ม” ของสี</li>
                    </ul>
                    @else
                    <ul class="lists text-center">
                        <li>Response to colour is 80% unconscious</li>
                        <li>Colour is the first thing we register when we are assessing anything</li>
                        <li>It is a powerful non-verbal communication which speaks louder than words</li>
                        <li>Every colour, without exception, has inherent positive or negative properties.</li>
                        <li>Each hue affects specific psychological modes</li>
                        <li>We are all universally affected by colour psychologically not by culture, gender or age.</li>
                        <li>The concept that colour affects mood and influences behaviour is recognised, but little understood.</li>
                        <li>The successful use of colour, like music, is not from one particular hue, but from its harmony.</li>
                        <li>We do not respond to just one colour, but to colours in combination</li>
                    </ul>
                    @endif

                </div>
            </div><!--container-->
        </div><!--section-->

        <div id="section3" class="section section-hp-03 bg-colorful">
            <div class="container">
                <div class="article text-center">
                    <h2 class="text-special-elite max-width" data-aos="fade-up" data-aos-delay="100">
                        @if(@session()->get('language')=="thai")
                        <span class="th">
                            Kalakala คือแบรนด์ที่ถือกำเนิดจาก Colour Affects บริษัทที่ปรึกษาด้านจิตวิทยาสีชั้นนำในกรุงลอนดอน ก่อตั้งโดย Angela Wright นักจิตวิทยาสีที่มีชื่อเสียง บริษัทของเรามุ่งเน้นไปที่เรื่องของจิตวิทยาการใช้สี โดยยึดหลัก The Colour Affects System หรือทฤษฎีทางจิตวิทยาสี

                        </span>
                        @else
                        <span>
                        Kalakala derives from Colour Affects, a London-based consultancy founded by renowned
                        colour psychologist, Angela Wright. We specialise in applied colour psychology based on
                        The Colour Affects System.
                        </span>
                        @endif
                    </h2>

                    <h2 class="text-special-elite py-4 my-xl-4 {{  session()->get('language')=='thai'?'th':'' }}" data-aos="fade-up" data-aos-delay="200">
                        {{  session()->get('language')=='thai'?'เป้าหมายของเรา':'Our Mission' }}
                    </h2>
                    <h2 class="text-special-elite pt-2 {{  session()->get('language')=='thai'?'th':'' }}" data-aos="fade-in" data-aos-delay="200">

                    </h2>

                    <p class="m-0 {{  session()->get('language')=='thai'?'th':'' }}" data-aos="fade-up" data-aos-delay="300">
                        @if(@session()->get('language')=="thai")
                        เพื่อสร้างความกลมกลืนของสีสันที่รายล้อมเรา ซึ่งอยู่บนหลักการของเหตุและผลที่เป็นรูปธรรม ทุกคนสามารถเข้าถึงได้ สู่การใช้สีในทุกแง่มุมของชีวิต เปลี่ยนความยุ่งยากในการเลือกสีให้เป็นเรื่องง่าย ช่วยให้คุณประหยัดทั้งเงินและเวลา ลดความไม่แน่นอน เสริมความมั่นใจให้คุณเลือกสีได้เหมาะสมกับทุกโอกาส
                        @else
                        To bring harmony and objective rationale to the use of colour in all aspects of life, easing the pain of colour selection, saving time, money and uncertainty and empowering people to get colours right every time with absolute confidence.

                        @endif
                    </p>
                </div>
            </div><!--container-->
        </div><!--section-->

        <div id="section4" class="section section-hp-04 bg-colorful">
            <div class="container">
                <div class="hgroup center pt-0">
                    <div class="textrow">
                        <img class="colour" data-aos="fade-up" data-aos-delay="200" style="width: 160px;" src="{{ asset('frontend/assets/img/thumb/colour--2.png')}}" alt="kalakala">
                    </div>
                    <h2 class="text-special-elite pt-2 {{  session()->get('language')=='thai'?'th':'' }}" data-aos="fade-in" data-aos-delay="200">
                        {{  session()->get('language')=='thai'?'จิตวิทยาสีคืออะไร?':'What is colour psychology?' }}
                    </h2>
                </div>

                <div class="article text-center max-width" data-aos="fade-in" data-aos-delay="400">

                   <p>
                    @if(@session()->get('language')=="thai")
                    คือ ศาสตร์ที่ศึกษาผลกระทบของสี ต่ออารมณ์และพฤติกรรมของมนุษย์ โดยสีเกิดจากรังสีแม่เหล็กไฟฟ้า ซึ่งส่งผลต่อร่างกายและจิตใจของเรา เป็นปฏิกิริยาร่วมทางกายและจิต (psychophysical reaction) ที่เกิดขึ้นโดยทั่วไป ไม่จำกัดวัฒนธรรม อายุ หรือเพศ ต่างจากความเชื่อเดิมๆที่มองว่าสีขึ้นอยู่กับปัจจัยเหล่านี้
                   @else
                   It is the effects of the electro-magnetic radiation of light on human mood and behaviour - a universal,
                   psychophysical reaction, which is not as heavily influenced by culture, age and gender as is generally thought.
                   @endif



                    </p>

                    <p class="d-flex">
                        <a class="readmore {{  session()->get('language')=='thai'?'th':'' }}" href="#">
                             {{  session()->get('language')=='thai'?'อ่านต่อ':'Read more' }}
                            <img class="icons" src="{{ asset('frontend/assets/img/icons/icon-arrow.svg')}}" alt="kalakala">
                        </a>
                    </p>
                </div>

            </div><!--container-->
        </div><!--section-->

        <div id="section5" class="section section-hp-05 bg-colorful">
            <div class="container">
                <div class="hgroup center pt-0">
                    <h2 class="text-special-elite pt-2 {{  session()->get('language')=='thai'?'th':'' }}" data-aos="fade-in" data-aos-delay="200">
                        {{  session()->get('language')=='thai'?'แองเจล่า ไรท์':'Angela Wright' }}
                    </h2>
                    <div class="textrow mt-sm-3 mt-2 mb-2">
                        <img class="img-width" data-aos="fade-up" data-aos-delay="200" src="{{ asset('frontend/assets/img/thumb/photo-350x526.jpg')}}" alt="kalakala">
                    </div>
                </div>

                <div class="article text-center {{  session()->get('language')=='thai'?'th':'' }}" data-aos="fade-in" data-aos-delay="400">
                   <p>
                    @if(@session()->get('language')=="thai")
                    ในช่วงปี 1970 แองเจล่า ไรท์ ได้เริ่มต้นสำรวจอย่างจริงจังเกี่ยวกับความลับที่ว่าสีมีอิทธิพลต่ออารมณ์และพฤติกรรมอย่างไร ซึ่งโดยทั่วไปแล้วผลกระทบของสีมักถูกมองว่าเป็นเรื่องที่ขึ้นอยู่กับตัวบุคคล และคาดการณ์ไม่ได้

                    @else
                    Angela Wright began to explore seriously the mystery of how colour influences mood and behaviour in the 1970s. <br>
                    Until then, the effects of colour were generally considered to be completely subjective, and therefore impossible to predict.
                    @endif

                   </p>

                    <p class="d-flex">
                        <a class="readmore {{  session()->get('language')=='thai'?'th':'' }}" href="#">
                            {{  session()->get('language')=='thai'?'อ่านต่อ':'Read more' }}
                            <img class="icons" src="{{ asset('frontend/assets/img/icons/icon-arrow.svg')}}" alt="kalakala">
                        </a>
                    </p>
                </div>
            </div><!--container-->
        </div><!--section-->

        <div id="section6" class="section section-hp-06">
            <div class="container">
                <div class="hgroup center pt-0">
                    <div class="textrow">
                        <img class="colour" data-aos="fade-up" data-aos-delay="200" style="width: 140px;" src="{{ asset('frontend/assets/img/thumb/colour--4.png')}}" alt="kalakala">
                    </div>
                </div>

                <div class="article text-center {{  session()->get('language')=='thai'?'th':'' }}" data-aos="fade-in" data-aos-delay="200">
                    <p>
                        @if(@session()->get('language')=="thai")
                        ทฤษฎีทางจิตวิทยาสี (The Colour Affects System) นั้นจำแนกสีนับล้านเป็นสีสี่กลุ่มหลักที่มีความแตกต่างกันได้อย่างชัดเจน สีที่อยู่ภายในกลุ่มสีเดียวกันจะกลมกลืนเข้ากันได้อย่างง่ายดาย ในขณะที่สีจากกลุ่มต่างกันนั้น
                        จะไม่เข้ากัน เช่นเดียวกับบุคลิกภาพที่แบ่งออกเป็นสี่ประเภทหลัก โดยบุคลิกภาพแต่ละกลุ่ม
                        จะสะท้อนกับหนึ่งในสี่กลุ่มสีโดยธรรมชาติ ความสัมพันธ์นี้แสดงให้เห็นว่าลักษณะเฉพาะตัวของเรา
                        มีการเชื่อมโยงอย่างลึกซึ้งกับพาเลตต์สีที่กำหนดแก่นแท้ทางอารมณ์และจิตใจของเรา

                        @else
                        The Colour Affects System categorises millions of colours into four distinct families.<br>
                        Colours within each family effortlessly harmonise, while those from different families do not. <br>
                        Similarly, personalities are classified into four primary groups, each inherently resonating one of the four colour families.<br>
                        This relationship illustrates how our individual traits are intricately linked to the palette that define our emotional and psychological essence.

                        @endif
                     </p>
                </div>

                <div class="boxed max-width" style="--max-width:985px;">
                    <div class="row">
                        <div class="col-md-3 col-6">
                            <div class="colour-group">
                                <h3 class="hgroup text-special-elite">
                                    Group
                                    <div class="number number-1">
                                        <img src="{{ asset('frontend/assets/img/thumb/number-circle-1.svg')}}" alt="kalakala">
                                        <span>1</span>
                                    </div>
                                </h3>
                                <div class="colour-lists row">
                                    <div class="col-4"><span class="item" style="--bg:#FFFD74;"></span></div>
                                    <div class="col-4"><span class="item" style="--bg:#FEAFA2;"></span></div>
                                    <div class="col-4"><span class="item" style="--bg:#A3F7F5;"></span></div>
                                    <div class="col-4"><span class="item" style="--bg:#CFFF73;"></span></div>
                                    <div class="col-4"><span class="item" style="--bg:#E059FE;"></span></div>
                                    <div class="col-4"><span class="item" style="--bg:#FF6370;"></span></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-6">
                            <div class="colour-group">
                                <h3 class="hgroup text-special-elite">
                                    Group
                                    <div class="number number-2">
                                        <img src="{{ asset('frontend/assets/img/thumb/number-circle-2.svg')}}" alt="kalakala">
                                        <span>2</span>
                                    </div>
                                </h3>
                                <div class="colour-lists row">
                                    <div class="col-4"><span class="item" style="--bg:#CCCCCC;"></span></div>
                                    <div class="col-4"><span class="item" style="--bg:#AE95BD;"></span></div>
                                    <div class="col-4"><span class="item" style="--bg:#7A92D5;"></span></div>
                                    <div class="col-4"><span class="item" style="--bg:#D47DB0;"></span></div>
                                    <div class="col-4"><span class="item" style="--bg:#99BFA7;"></span></div>
                                    <div class="col-4"><span class="item" style="--bg:#9D7D8A;"></span></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-6">
                            <div class="colour-group">
                                <h3 class="hgroup text-special-elite">
                                    Group
                                    <div class="number number-3">
                                        <img src="{{ asset('frontend/assets/img/thumb/number-circle-3.svg')}}" alt="kalakala"">
                                        <span>3</span>
                                    </div>
                                </h3>
                                <div class="colour-lists row">
                                    <div class="col-4"><span class="item" style="--bg:#FFD373;"></span></div>
                                    <div class="col-4"><span class="item" style="--bg:#E65C13;"></span></div>
                                    <div class="col-4"><span class="item" style="--bg:#2AA5B5;"></span></div>
                                    <div class="col-4"><span class="item" style="--bg:#781A73;"></span></div>
                                    <div class="col-4"><span class="item" style="--bg:#428F27;"></span></div>
                                    <div class="col-4"><span class="item" style="--bg:#A20B18;"></span></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-6">
                            <div class="colour-group">
                                <h3 class="hgroup text-special-elite">
                                    Group
                                    <div class="number number-4">
                                        <img src="{{ asset('frontend/assets/img/thumb/number-circle-4.svg')}}" alt="kalakala">
                                        <span>4</span>
                                    </div>
                                </h3>
                                <div class="colour-lists row">
                                    <div class="col-4"><span class="item" style="--bg:#000000;"></span></div>
                                    <div class="col-4"><span class="item" style="--bg:#0A09FA;"></span></div>
                                    <div class="col-4"><span class="item" style="--bg:#E7117D;"></span></div>
                                    <div class="col-4"><span class="item" style="--bg:#FCFB08;"></span></div>
                                    <div class="col-4"><span class="item" style="--bg:#26D699;"></span></div>
                                    <div class="col-4"><span class="item" style="--bg:#31007D;"></span></div>
                                </div>
                            </div>
                        </div>
                    </div><!--row-->
                </div><!--boxed-->
                <p class="d-flex">
                    <a class="readmore" href="#">
                        Which group you are?
                        <img class="icons svg-js" src="{{ asset('frontend/assets/img/icons/icon-arrow.svg')}}" alt="kalakala">
                    </a>
                </p>
            </div><!--container-->
        </div>

        <div id="section7" class="section section-hp-07 bg-colorful">
            <div class="container">
                <div class="article text-center" data-aos="fade-in" data-aos-delay="400">
                    <h2 class="text-special-elite pb-2 pb-sm-4 mb-md-1  {{  session()->get('language')=='thai'?'th':'' }}" data-aos="fade-in" data-aos-delay="200">
                        {{  session()->get('language')=='thai'?'บริการของเรา':'Service' }}

                    </h2>

                    <ul class="lists text-center rows pb-4 mb-md-4">
                        @if(@session()->get('language')=="thai")
                        <li>การให้คำปรึกษาส่วนบุคคล</li>
                        <li>การสร้างแบรนด์องค์กร</li>
                        <li>การเลือกใช้สีภายใน</li>
                        <li>การทำงานร่วมกับเรา</li>
                        @else
                        <li>Personal Colour Consultation</li>
                        <li>Corporate Branding</li>
                        <li>Interior</li>
                        <li>Collaboration</li>
                        @endif

                    </ul>

                    <h2 class="text-special-elite pb-2 pb-sm-4 mb-md-1 {{  session()->get('language')=='thai'?'th':'' }}" data-aos="fade-in" data-aos-delay="200">
                        {{  session()->get('language')=='thai'?'สีทำงานอย่างไร':'How it works?' }}
                    </h2>

                    <p>
                        @if(@session()->get('language')=="thai")
                        แน่นอนว่าสีต่างๆ pที่คุณเลือกใส่ส่งผลอย่างมากต่อความรู้สึกของตัวเรา และที่สำคัญยังส่งผลต่อ
                        การตอบสนองของคนรอบข้างด้วย

                        @else
                        Colours can significantly influence your mood and those around you. Palette that complements your unique personality, style, and physical attributes can uplift your spirits and positively impact how others perceive you, boost your energy, enhance your happiness and attractiveness, improve focus, and ultimately leading to being taken more seriously at work.

                        @endif
                                   </p>

                    <p>
                        @if(@session()->get('language')=="thai")
                        การสร้างรูปแบบการแต่งตัว โดยที่สามารถสะท้อนความเป็นตัวตนของคุณอย่างแท้จริงเป็นสิ่งที่ท้าทายอันดับต้นๆ แต่รู้หรือไม่ว่า การรู้จักและเลือกสีที่ใช่ นั้นเป็นก้าวแรกที่สำคัญในการเริ่มต้นหาสิ่งที่เหมาะกับตัวเอง
                        ไม่ต้องวิ่งตามเทรนด์ ไม่ขึ้นอยู่กับเพศหรืออายุ
                        ในทางกลับกัน การเลือกใช้สีที่ไม่เหมาะกับตัวเองนั้นสามารถส่งผลด้านลบทั้งต่ออารมณ์ความรู้สึก
                        และความมั่นใจได้อย่างคาดไม่ถึง

                        @else
                        Building a wardrobe that reflects your personal style can be challenging, but it largely hinges on choosing  the right colours.<br>
                        Conversely, opting for colours that don’t align with your individuality may dampen your mood and hinder your confidence.
                        @endif

                    </p>

                     <p class="d-flex">
                         <a class="readmore {{  session()->get('language')=='thai'?'th':'' }}" href="#">
                            {{  session()->get('language')=='thai'?'อ่านต่อ':'Read more' }}
                             <img class="icons" src="{{ asset('frontend/assets/img/icons/icon-arrow.svg')}}" alt="kalakala">
                         </a>
                     </p>
                </div>
            </div><!--contaienr-->
        </div>
        <div id="section8" class="section section-hp-08 bg-colorful">
            <div class="container">
                <div class="colour-item colour" style="width:250px;">
                    <a class="readmore {{  session()->get('language')=='thai'?'th':'' }}" data-aos="fade-up" data-aos-delay="400"  href="book-a-session.html">
                        Book a session
                        <img class="icons" src="{{ asset('frontend/assets/img/icons/icon-arrow.svg')}}" alt="kalakala">
                    </a>
                    <img class="w-100" data-aos="fade-up" data-aos-delay="200" src="{{ asset('frontend/assets/img/thumb/colour--3.png')}}" alt="kalakala">
                </div>
            </div><!--container-->
        </div>
    </div><!--fullpage-->

    <script src="{{ asset('frontend/assets/js/fullpage.min.js')}}"></script>
    <script type="text/javascript">
        var myFullpage = new fullpage('#fullpage', {
            sectionsColor: ['#921910', '#154666', '#4F1136', '#802618', '#3D4722', '#FFFFF5', '#085F66', '#C93402'],
            licenseKey: '4MYG7-14MZJ-1I3LI-2FNL9-MNPRN',
            credits: {
              enabled: false,
              label: 'Made with fullPage.js',
              position: 'right'
            },
        });

        $(document).on('click', '.navbar-brand', function () {
            fullpage_api.moveTo(1, 0);
        });
    </script>


@endsection
