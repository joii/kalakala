@extends('frontend.layout.master',['pagename' => 'service'])
@section('title', 'Service')
@section('bgcolor', '#085F66')
@section('content')

<div class="section section-body bg-colorful">
    <div class="container">
        <div class="article text-center" data-aos="fade-in">
            <h1 class="text-special-elite pb-4 {{  session()->get('language')=='thai'?'th':'' }}">
                {{  session()->get('language')=='thai'?'บริการของเรา':'Service' }}
            </h1>

            <div class="d-block max-width" style="--max-width:1065px">
                <ul class="lists text-center rows pb-4 mb-md-4 {{  session()->get('language')=='thai'?'th':'' }}">
                    <li>{{  session()->get('language')=='thai'?'การให้คำปรึกษาส่วนบุคคล':'Personal Colour Consultation' }}</li>
                    <li>{{  session()->get('language')=='thai'?'การสร้างแบรนด์องค์กร':'Corporate Branding' }}</li>
                    <li>{{  session()->get('language')=='thai'?'การเลือกใช้สีภายใน':'Interior' }}</li>
                    <li>{{  session()->get('language')=='thai'?'การทำงานร่วมกับเรา':'Collaboration' }}</li>
                </ul>
            </div>

            <h2 class="text-special-elite has-line mt-sm-5 mt-2 mb-3 {{  session()->get('language')=='thai'?'th':'' }}">
                <span>
                    {{  session()->get('language')=='thai'?'การให้คำปรึกษาด้านสีส่วนบุคคล':'Personal Colour Consultation' }}
                    <img class="line" src="{{  asset('frontend/assets/img/thumb/line-1.svg') }}" alt="kalakala">
                </span>
            </h2>


            @if(@session()->get('language')=="thai")
                <p>แน่นอนว่าสีต่าง ๆ ที่คุณเลือกใส่ส่งผลอย่างมากต่อความรู้สึกของตัวเรา และที่สำคัญยังส่งผลต่อการตอบสนองของคนรอบข้างด้วย</p>

                <p>การสวมใส่สีที่ไม่เข้ากับบุคลิกภาพ สไตล์ และสีผิวของตัวเราเอง นอกจากอาจทำให้คุณรู้สึกไม่ดีแล้ว ยังส่งผลลบต่อคนรอบข้าง ในทางกลับกัน หากคุณเลือกสีที่เหมาะสม สีนั้นจะช่วยเพิ่มความมั่นใจให้คุณ ทำให้รู้สึกมีความสุขและมีเสน่ห์ ทั้งยังช่วยให้คุณรู้สึกมีสมาธิและมุ่งมั่นในการทำงานมากขึ้นอีกด้วย</p>

                <p>ไม่ว่าคุณจะเป็นเพศไหน การสร้างสไตล์การแต่งตัวของตัวเอง นับเป็นความท้าทายอันดับต้นๆ ในการเลือกสรรเสื้อผ้า เพราะนอกจากจะต้องมีสไตล์เป็นตัวของตัวเองแล้ว ยังต้องตามเทรนด์ให้เข้ากับแฟชั่นปัจจุบันด้วย น่าเสียดายที่หลายคนมักเลือกที่จะตามเทรนด์อย่างเดียว โดยไม่เคยค้นพบสไตล์ที่เป็นเอกลักษณ์ของตัวเองเลย ซึ่งการจะแต่งตัวให้ดูทันสมัยแต่ก็มีความมั่นใจและสบายใจด้วยนั้น ส่วนใหญ่นั้นขึ้นอยู่กับการเลือกสี </p>

                <p>จากการพูดคุยเราจะทำความรู้จักบุคลิก รสนิยมของคุณ สีที่ทำให้คุณรู้สึกดี รวมถึงสิ่งที่ชอบและไม่ชอบในสถานการณ์ทางสังคมต่างๆ จากข้อมูลเหล่านี้ จะช่วยให้เราสามารถสร้าง palette สีที่จะช่วยส่งเสริมคุณในทุกด้าน</p>

                <p>จะไม่มีใครได้รับอนุญาตให้ 'นั่งฟัง' การปรึกษาด้วยเด็ดขาด เพราะการปรึกษาแบบนี้ไม่ใช่กิจกรรมกลุ่ม <br class="d-none d-md-block"/>เราต้องการให้คุณรู้สึกผ่อนคลายและเปิดใจกับเราได้อย่างเต็มที่!</p>

                <p>คุณจะได้รับ palette สีเฉพาะตัว พร้อมคำแนะนำเกี่ยวกับสีผม เครื่องประดับ เครื่องสำอาง รวมถึงคำตอบสำหรับคำถามคาใจอย่าง ควรใส่สีอะไรตอนไหน สีเหล่านี้จะถูกจัดทำเป็นคู่มือกระทัดรัด สามารถพกติดตัวไปใช้งานได้สะดวกทุกที่ทุกเวลา</p>

            @else
            <h2 class="text-special-elite my-md-2">How it works?</h2>
            <p>There is no doubt that the colours you wear will have a powerful effect<br>
                on how you feel and crucially - how others respond to you. Wear colours that don’t suit your unique personality, style and physical colouring, and it could have a very negative effect on your mood and those around you. Choose the right colours for you and they can give you more energy, help you feel happy and attractive and help you to be more focused, which in turn will mean you are taken more seriously at work.

                </p>

           <p>The biggest challenge for any man or woman building his/her wardrobe is to establish his/her own personal style. Ideally, that can be adapted to current fashions, but sadly, many opt simply to follow fashion slavishly and never really find out about their own unique personality and style. Reconciling the desire to be fashionable with the need to feel comfortable and confident is more often than not a question of colours.</p>
           <p>During a personal consultation we will explore your personality, your colour preferences and your likes and dislikes in a variety of social situations; from this we can draw up your personal palette of colours that will best support you for every eventuality.</p>
            <p>*Absolutely no-one will be allowed to ‘sit in’ on your consultation; We simply do not see this kind of consultation as a group activity. We need you to relax, and open up!
            </p>
            <p>You will receive a unique, personal palette, together with advice about hair, jewellery and make-up, and such knotty questions as what colours to wear when. The chart folds into a handy booklet which can easily be carried around and consulted whenever necessary.
            </p>
            @endif


        <h1 class="text-special-elite py-md-5 py-4 {{  session()->get('language')=='thai'?'th':'' }}">
            {{  session()->get('language')=='thai'?'ระยะเวลา : ประมาณ 2-2.5 ชั่วโมง':'Consultation Duration: Approximately 2-2.5 hours ' }}
        </h1>


            <div class="meet-up-boxed">
                <h2 class="text-special-elite {{  session()->get('language')=='thai'?'th':'' }}">
                    {{  session()->get('language')=='thai'?'ปรึกษาเรื่องสีกับ kalakala':'Let’s Meet Up' }}
                </h2>

                <div class="row gy-md-4 gy-2 justify-content-evenly">
                    <div class="col-lg-4 col-md-6">
                        <div class="card-meet-up card-1">
                            @if(@session()->get('language')=="thai")
                            <h3 class="text-special-elite {{  session()->get('language')=='thai'?'th':'' }}">เราอยากให้คุยผ่อนคลาย</h3>
                            <p>
                                และเปิดใจเล่าเรื่องราวของคุณให้เราฟัง <br class="d-none d-md-block"/>ในขณะเดียวกันก็ฟังเรื่องราวของเรา
                            </p>
                            <span class="icons icon-arrow" data-aos="fade-right"></span>
                            @else
                            <h3 class="text-special-elite {{  session()->get('language')=='thai'?'th':'' }}">RELAX, OPEN UP</h3>
                            <p>Tell us more about you<br>
                                while we tell you more about us.</p>
                            <span class="icons icon-arrow" data-aos="fade-right"></span>
                            @endif
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card-meet-up card-2">
                            @if(@session()->get('language')=="thai")
                            <p>
                                การพูดคุยกันจะทำให้ kalakala สามารถรวบรวม<br class="d-none d-md-block"/>บุคลิกภาพ สไตล์ ความชอบต่างๆ<br class="d-none d-md-block"/>ที่เป็นตัวคุณเข้าด้วยกันเหมือนกับการต่อ

                            </p>
                            <h3 class="text-special-elite {{  session()->get('language')=='thai'?'th':'' }}">Jigsaw</h3>
                            <span class="icons icon-arrow" data-aos="fade-right"></span>
                            @else
                            <p>Capturing your personalities,<br>
                                we put them together like</p>
                            <h3 class="text-special-elite {{  session()->get('language')=='thai'?'th':'' }}">JIGSAW PUZZLES</h3>

                            <span class="icons icon-arrow" data-aos="fade-right"></span>
                            @endif

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card-meet-up card-3">
                            @if(@session()->get('language')=="thai")
                            <p>ในขั้นตอนนี้ตัวตนของคุณ<br class="d-none d-md-block"/>จะแสดงออกมาอย่างชัดเจน รวมถึง</p>
                            <h3 class="text-special-elite {{  session()->get('language')=='thai'?'th':'' }}">สีต่างๆที่เหมาะกับคุณ</h3>
                            <span class="icons icon-arrow" data-aos="fade-right"></span>
                            @else
                            <p>Go through the process of knowing yourself, your personality type, and of course!</p>
                            <h3 class="text-special-elite {{  session()->get('language')=='thai'?'th':'' }}">YOUR COLOUR.</h3>
                            <span class="icons icon-arrow" data-aos="fade-right"></span>
                            @endif

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card-meet-up card-4">
                            @if(@session()->get('language')=="thai")
                            <p>kalakala จะแจ้งให้ทราบถึงข้อมูลทั้งหมดเกี่ยวกับ </p>
                            <h3 class="text-special-elite {{  session()->get('language')=='thai'?'th':'' }}">personality type ของคุณ</h3>
                            <p> คุณจะได้ทราบว่าคุณอยู่ในกลุ่มใด, <br class="d-none d-md-block"/>palette สีเป็นอย่างไร และจะนำมาใช้ในโอกาสที่เหมาะสมอย่างไรบ้าง
                            </p>

                            <span class="icons icon-arrow" data-aos="fade-right"></span>
                            @else
                            <h3 class="text-special-elite {{  session()->get('language')=='thai'?'th':'' }}">ESTABLISH</h3>
                            <p>your group of personality types and<br/> subordinate influences which shape your very own colour palette</p>

                            <span class="icons icon-arrow" data-aos="fade-right"></span>
                            @endif

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card-meet-up card-5">
                            @if(@session()->get('language')=="thai")
                            <p>คุณจะได้รับคู่มือขนาดพกพาที่ประกอบด้วย <br class="d-none d-md-block"/>colour palette รวมถึงคำแนะนำในการใช้สี<br class="d-none d-md-block"/>ในโอกาสต่างๆ ซึ่งคุณสามารถนำไปได้ทุกที่
                            </p>
                        <h3 class="text-special-elite {{  session()->get('language')=='thai'?'th':'' }}">ENJOY!</h3>

                        <span class="icons icon-arrow" data-aos="fade-right"></span>
                            @else
                            <p>Kalakala customised booklet of <br/>colours and tips from us will be delivered to your doorsteps.
                            </p>
                        <h3 class="text-special-elite {{  session()->get('language')=='thai'?'th':'' }}">ENJOY!</h3>

                        <span class="icons icon-arrow" data-aos="fade-right"></span>
                            @endif

                        </div>
                    </div>
                </div><!--row-->
            </div>


            <h2 class="text-special-elite has-line mt-sm-5 mt-4  {{  session()->get('language')=='thai'?'th':'' }}">
                <span>
                    {{  session()->get('language')=='thai'?'การสร้างแบรนด์องค์กร':'Corporate Branding' }}
                    <img class="line" src="{{  asset('frontend/assets/img/thumb/line-2.svg')}}" alt="kalakala">
                </span>
            </h2>

            <p>
                @if(@session()->get('language')=="thai")
                แบรนด์ทุกแบรนด์ล้วนมีบุคลิกของตัวเองเช่นเดียวกับมนุษย์ การสะท้อนคุณค่าของแบรนด์ การสร้างแบรนด์ที่โดดเด่นและน่าจดจำคือโจทย์ที่ท้าทาย สีต่างๆ เป็นเหมือนกลยุทธ์การสร้างแบรนด์ที่จะช่วยสื่อสารความเป็นแบรนด์ของคุณให้มีเอกลักษณ์และบรรลุผลที่ต้องการได้ ไม่ว่าวัตถุประสงค์ของการออกแบบจะเป็นอย่างไร

                @else
                Every brand, like human, has its own personality. It is challenging to reflect the brand's value and increase its popularity. Colours can do just that and have power to achieve the desired psychological impact, whatever the design objectives.

                @endif
            </p>

            <h2 class="text-special-elite has-line mt-sm-5 mt-4  {{  session()->get('language')=='thai'?'th':'' }}">
                <span>
                    {{  session()->get('language')=='thai'?'การเลือกใช้สีภายใน':'Interior' }}
                    <img class="line" src="{{  asset('frontend/assets/img/thumb/line-3.svg')}}" alt="kalakala">
                </span>
            </h2>

            <p>
                @if(@session()->get('language')=="thai")
                ไม่ว่าจะเป็นการออกแบบภายในที่อยู่อาศัย หรือภายในเชิงพาณิชย์ อย่างร้านค้า โรงแรม หรือสำนักงาน การเลือกใช้สีอย่างเหมาะสมส่งผลต่ออารมณ์และพฤติกรรมของผู้ใช้งานได้อย่างชัดเจน สีต่างๆสามารถสนับสนุน กระตุ้น ส่งเสริมและสร้างแรงจูงใจ ช่วยผ่อนคลายจิตใจและลดความเครียด ทั้งยังช่วยเพิ่มสมาธิ นอกจากนี้ยังส่งผลต่อความน่าสนใจและช่วยกระตุ้นให้เกิดการตัดสินใจซื้อหรือใช้บริการได้อีกด้วย

                @else
                Whether it is residential or corporate interior such as shop, cafe, restaurant, hospitality or workplace, choosing and using colours can effect the mood and behaviour of their users. Colours can support, motivate, encourage, soothe the mind, ease stress or increase the concentration. It can even effect the saleability and turn sightseers into purchasers.

                @endif
             </p>

            <h2 class="text-special-elite has-line mt-sm-5 mt-4  {{  session()->get('language')=='thai'?'th':'' }}">
                <span>

                    {{  session()->get('language')=='thai'?'การทำงานร่วมกับเรา':'Collaboration' }}
                    <img class="line" src="{{  asset('frontend/assets/img/thumb/line-4.svg')}}" alt="kalakala">
                </span>
            </h2>

            <p>
                @if(@session()->get('language')=="thai")
                มาร่วมสร้างสรรค์ผลงานด้านสีกัน

                @else
                Team up with us for endless colour-filled creations.
                @endif

            </p>

            <p class="py-4"></p>
        </div><!--article-->
    </div><!--container-->
</div><!--section-->
@endsection
