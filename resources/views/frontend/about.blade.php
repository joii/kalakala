@extends('frontend.layout.master',['pagename' => 'about'])
@section('title', 'Book a Session')
@section('bgcolor', '#8B1C13')
@section('content')

<div class="section section-body bg-colorful">
    <div class="container">
        <div class="article text-center">

            <div class="d-block" data-aos="fade-in">
                <div class="hgroup center">
                    <div class="textrow">
                        <img class="colour mb-2" data-aos="fade-up" data-aos-delay="200" style="width: 160px;" src="{{ asset('frontend/assets/img/thumb/colour--2.png') }}" alt="kalakala">
                    </div>
                    <h2 class="text-special-elite {{  session()->get('language')=='thai'?'th':'' }}">

                        {{  session()->get('language')=='thai'?'จิตวิทยาสีคืออะไร?':'What is colour psychology?' }}

                    </h2>
                </div>

                <p class="{{  session()->get('language')=='thai'?'th':'' }}">
                    @if(@session()->get('language')=="thai")
                    คือ ศาสตร์ที่ศึกษาผลกระทบของสีต่ออารมณ์และพฤติกรรมของมนุษย์ โดยสีนั้นเกิดจากรังสีแม่เหล็กไฟฟ้า ซึ่งส่งผลต่อร่างกายและจิตใจของเรา เป็นปฏิกิริยาร่วมทางกายและจิต (psychophysical reaction) ที่เกิดขึ้นโดยทั่วไป ไม่จำกัดวัฒนธรรม อายุ หรือเพศ ต่างจากความเชื่อเดิมที่มองว่าสีขึ้นอยู่กับปัจจัยเหล่านี้

                    @else
                    It is the effects of the electro-magnetic radiation of light on human mood and behaviour - a universal,<br>
                    psychophysical reaction, which is not as heavily influenced by culture, age and gender as is generally thought.
                    @endif

                    </p>

                <p class="py-md-2 py-1"></p>

                <h1 class="text-special-elite pb-md-2 pb-3 {{  session()->get('language')=='thai'?'th':'' }}">

                    {{  session()->get('language')=='thai'?'โดยธรรมชาติทุกคนต่างมีสีเป็นของตัวเอง':'A lifelong guide to your colours, crafted from your own personality.' }}
                </h1>

                <p>
                    @if(@session()->get('language')=="thai")
                    ค้นพบตัวตนและกลุ่มสีเฉพาะของคุณ เรียนรู้ความมหัศจรรย์และอิทธิพลของสีที่มีต่อมนุษย์ทั้งด้านร่างกาย จิตใจ และอารมณ์ เป็นหลักการที่นำไปใช้ได้ตลอดชีวิต ไม่เปลี่ยนแปลงไปตามกาลเวลา
                    kalakala รวบรวมสีจากตัวตนและบุคลิกภาพของคุณ ไม่ใช่เพียงภาพลักษณ์ภายนอก ช่วยดึงเอกลักษณ์เฉพาะตัวที่ไม่เหมือนใคร ให้อิสระ ความมั่นใจในการเลือกใช้สีที่เหมาะกับคุณ ช่วยให้คุณแสดงความเป็นตัวเองออกมาได้อย่างเต็มที่

                    @else
                    Take a mindblowing journey through yourself with us. Discover the power and influence of colours.<br>
                    We are committed to helping you expressing yourself uniquely and individually.
                    @endif

                </p>
            </div>

            <div class="d-block pt-sm-4" data-aos="fade-in">
                <div class="hgroup center">
                    <div class="textrow">
                        <img class="colour" data-aos="fade-up" data-aos-delay="200" style="width: 150px;" src="{{ asset('frontend/assets/img/thumb/colour--5.png')}}" alt="kalakala">
                    </div>
                    <h2 class="text-special-elite {{  session()->get('language')=='thai'?'th':'' }}">
                        {{  session()->get('language')=='thai'?'เป้าหมายของเรา':'Our Mission' }}
                    </h2>
                </div>

                <p>
                    @if(@session()->get('language')=="thai")
                    เพื่อสร้างความกลมกลืนของสีสันที่รายล้อมเรา ซึ่งอยู่บนหลักการของเหตุและผลที่เป็นรูปธรรม ทุกคนสามารถเข้าถึงได้ สู่การใช้สีในทุกแง่มุมของชีวิต เปลี่ยนความยุ่งยากในการเลือกสีให้เป็นเรื่องง่าย ช่วยให้คุณประหยัดทั้งเงินและเวลา ลดความไม่แน่นอน เสริมความมั่นใจให้คุณเลือกสีได้เหมาะสมกับทุกโอกาส

                    @else
                    To bring harmony and objective rationale to the use of colour in all aspects of life, easing the pain of colour selection, saving time, money and uncertainty and empowering people to get colours right every time with absolute confidence.

                    @endif
                </p>


                <p>
                    @if(@session()->get('language')=="thai")
                    บริการให้คำปรึกษาของเราพร้อมช่วยเหลือทั้งบุคคล นักออกแบบ และองค์กรต่าง ๆ ให้บรรลุเป้าหมายทางด้านจิตวิทยา และช่วยสร้างความกลมกลืนของสีสัน ที่มีอิทธิพลต่ออารมณ์และพฤติกรรมของมนุษย์ ซึ่งครอบคลุมในทุกมิติ ทั้งการใช้สีเพื่อพัฒนาตนเอง การออกแบบภายในที่พักอาศัย และสำหรับองค์กร เราช่วยเหลือในทุก ๆ ด้านของการสร้างแบรนด์ บรรจุภัณฑ์ เว็บไซต์ ออกแบบพื้นที่ภายในองค์กร เช่น ร้านค้า โรงแรม สำนักงาน รวมถึงการออกแบบผลิตภัณฑ์

                    @else
                    Our consultant service allows individuals, designers and organisations to achieve the desired psychological impact and objective colour harmony to help manage the powerful psychological influence of colour on human response and behaviour. We advise clients on colour usage for personal growth, residential interiors and corporate clients on all aspects of branding, packaging, web, corporate interior such as retail, hospitality, workplaces and products design.

                    @endif

                </p>
            </div>

            <div class="d-block pt-sm-4" data-aos="fade-in">
                <div class="hgroup center">
                    <div class="textrow">
                        <img class="colour" data-aos="fade-up" data-aos-delay="200" style="width: 152px;" src="{{ asset('frontend/assets/img/thumb/colour--1.png')}}" alt="kalakala">
                    </div>
                    <h2 class="text-special-elite {{  session()->get('language')=='thai'?'th':'' }}">
                        {{  session()->get('language')=='thai'?'ทำไมสีจึงสำคัญ?':'Why Colour Matters?' }}
                    </h2>
                </div>

                <ul class="lists text-center pb-sm-5 pb-4">
                    @if(@session()->get('language')=="thai")
                    <li>80% ของการตอบสนองต่อสีนั้นเป็นไปโดยไม่รู้ตัว</li>
                    <li>เมื่อเราพิจารณาสิ่งใด สีคือสิ่งแรกที่เรารับรู้</li>
                    <li>สีคือภาษาไร้เสียงอันทรงพลังที่สื่อสารได้ดังกว่าคำพูด</li>
                    <li>ทุกสีมีคุณสมบัติด้านบวกและลบเสมอ</li>
                    <li>แต่ละเฉดสีส่งผลต่อภาวะทางจิตใจที่แตกต่าง</li>
                    <li>ผลกระทบของสีไม่ได้ขึ้นอยู่กับวัฒนธรรม เพศ หรืออายุ</li>
                    <li>สีสันส่งผลต่ออารมณ์และพฤติกรรม แต่ยังมีหลายแง่มุมที่ยังไม่ถูกค้นพบ</li>
                    <li>การใช้สีให้ประสบความสำเร็จนั้น เปรียบได้กับการสรรค์สร้างดนตรี ไม่ได้เกิดจากสีเพียงแค่สีเดียว แต่เกิดจาก ความกลมกลืนของสีต่าง ๆ ที่ผสมผสานกันอย่างลงตัว</li>
                    @else
                    <li>Response to colour is 80% unconscious</li>
                    <li>Colour is the first thing we register when we are assessing anything</li>
                    <li>It is a powerful non-verbal communication which speaks louder than words</li>
                    <li>Every colour, without exception, has inherent positive or negative properties.</li>
                    <li>Each hue affects specific psychological modes</li>
                    <li>We are all universally affected by colour psychologically not by culture, gender or age.</li>
                    <li>The concept that colour affects mood and influences behaviour is recognised, but little understood.</li>
                    <li>The successful use of colour, like music, is not from one particular hue, but from its harmony.</li>
                    <li>We do not respond to just one colour, but to colours in combination</li>
                    @endif

                </ul>
            </div>

            <div class="d-block" data-aos="fade-in">
                <div class="hgroup center">
                    <div class="textrow">
                        <img class="colour" data-aos="fade-up" data-aos-delay="200" style="width: 152px;" src="{{ asset('frontend/assets/img/thumb/colour--6.png')}}" alt="kalakala">
                    </div>
                    <h2 class="text-special-elite {{  session()->get('language')=='thai'?'th':'' }}">
                        {{  session()->get('language')=='thai'?'ทำไม kalakala จึงแตกต่าง?':'Why are we different?' }}
                    </h2>
                </div>

                <div class="row gx-5 gy-md-4 justify-content-md-evenly">
                    <div class="col-lg-4 col-md-6 pb-md-2">
                        <ul class="lists text-center">
                            <li>
                                {{  session()->get('language')=='thai'?'เราวิเคราะห์สีอย่างลึกซึ้งจากตัวตน บุคลิกที่แท้จริงของคุณ ไม่ใช่แค่รูปลักษณ์ภายนอก':'Discover your INHERENT colour palette and personality type with us.' }}

                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 pb-md-2">
                        <ul class="lists text-center">
                            <li>

                                {{  session()->get('language')=='thai'?'กลุ่มสีที่เป็นของคุณไม่สามารถเปลี่ยนแปลงได้ เป็นเหมือนสิ่งที่ติดตัวมากับคุณโดยกำเนิด':'Colour palette customised from your own personality.' }}
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 pb-md-2">
                        <ul class="lists text-center">
                            <li>

                                {{  session()->get('language')=='thai'?'แสดงให้คุณเห็นถึงพลังแห่งการใช้สีที่มีผลต่ออารมณ์ ความรู้สึก การตอบสนองจากคนรอบข้างที่มีต่อคุณ':'Show you how colours powerfully influence your mood and behaviour as well as others towards you.' }}

                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 pb-md-2">
                        <ul class="lists text-center">
                            <li>

                                {{  session()->get('language')=='thai'?'ให้คำแนะนำด้านสีที่เปรียบเสมือนเครื่องมือที่ใช้งานได้ตลอดชีวิต ทำให้คุณมีอิสระในการ   เลือกและใช้สีด้วยความมั่นใจ':'Giving you LIFELONG tools with freedom of choosing and using colours with confidence.' }}

                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 pb-md-2">
                        <ul class="lists text-center">
                            <li>
                                {{  session()->get('language')=='thai'?'ช่วยให้ทุกคนสามารถแสดงออกถึงตัวตนที่ไม่ซ้ำใครผ่านการใช้สี':'Bring out your unique self and express it through colours.' }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="benefit-boxed" data-aos="fade-in">
                <div class="hgroup center">
                    <div class="textrow">
                        <img class="colour mb-lg-4" data-aos="fade-up" data-aos-delay="200" style="width: 160px;" src="{{ asset('frontend/assets/img/thumb/colour--7.png')}}" alt="kalakala">
                    </div>
                    <h2 class="text-special-elite {{  session()->get('language')=='thai'?'th':'' }}">
                        @if(@session()->get('language')=="thai")
                        บริการของ kalakala <br class="d-none d-md-block">เป็นประโยชน์กับใคร/ด้านใดบ้าง?
                        @else
                        Who would benefit<br class="d-none d-md-block">
                        from this system?
                    </h2>
                        @endif




                </div>

                <div class="row">
                    <div class="col-sm-4 col-6">
                        <ul class="benefit-lists group-1">
                            <li>{{  session()->get('language')=='thai'?'แฟชั่นดีไซน์เนอร์':'Fashion Design' }}</li>
                            <li>{{  session()->get('language')=='thai'?'สไตลิสต์':'Personal Styling' }}</li>
                            <li>{{  session()->get('language')=='thai'?'นักออกแบบสิ่งทอ':'Textile Design' }}</li>
                        </ul>
                    </div>

                    <div class="col-sm-4 col-6">
                        <ul class="benefit-lists group-2">
                            <li>{{  session()->get('language')=='thai'?'นักออกแบบตกแต่งภายใน':'Interior Design' }}</li>
                            <li>{{  session()->get('language')=='thai'?'กราฟฟิคดีไซน์เนอร์':'Graphic Design' }}</li>
                            <li>{{  session()->get('language')=='thai'?'สถาปนิก':'Architecture' }}</li>
                        </ul>
                    </div>

                    <div class="col-sm-4 col-6">
                        <ul class="benefit-lists group-3">
                            <li>{{  session()->get('language')=='thai'?'ผู้ทำธุรกิจเกี่ยวกับแฟชั่น':'Fashion Retailing' }}</li>
                            <li>{{  session()->get('language')=='thai'?'แการสื่อสารด้านจิตวิทยาผ่านสี':'Psychology' }}</li>
                            <li>{{  session()->get('language')=='thai'?'การตลาดสำหรับแบรนด์ต่างๆ':'Marketing' }}</li>
                            <li class="d-none d-md-block">{{  session()->get('language')=='thai'?'ผู้สนใจทั่วไป':'General user' }}</li>
                        </ul>
                    </div>
                </div><!--row-->
            </div>
        </div><!--article-->
    </div><!--container-->
</div><!--section-->
@endsection
