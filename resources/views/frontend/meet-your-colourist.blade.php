@extends('frontend.layout.master',['pagename' => 'meet'])
@section('title', 'Meet Your Colorist')
@section('bgcolor', '#3D4722')
@section('content')
<div class="section section-body bg-colorful">
    <div class="container">
        <div class="article text-center">
            <h1 class="text-special-elite pb-md-2 pb-0 {{  session()->get('language')=='thai'?'th':'' }}">
                Colour Affects,
                <br class="d-none d-md-block">
                London
            </h1>

            <h2 class="text-special-elite mt-4 {{  session()->get('language')=='thai'?'th':'' }}">
                {{  session()->get('language')=='thai'?'บริษัท':'The Company' }}</h2>

            <p>
                @if(@session()->get('language')=="thai")
                Colour Effects ก่อตั้งขึ้นในปี พ.ศ. 2528 โดย แองเจลา ไรท์, FRSA.* นักจิตวิทยาสี เพื่อช่วยเพิ่มความสามารถให้บุคคลและองค์กรสามารถควบคุมทิศทางของการใช้สี ต่อการตอบสนองด้านอารมณ์ ความรู้สึกและพฤติกรรมของมนุษย์ได้ บริษัทให้คําแนะนําแก่ลูกค้าองค์กรในเรื่องสีในการสร้างแบรนด์ บรรจุภัณฑ์ เว็บไซต์ การตกแต่งภายในและการออกแบบผลิตภัณฑ์ และบุคคลทั่วไปในเรื่องสีเพื่อการพัฒนาตนเอง แฟชั่น การแต่งหน้า การทําสีผมและการตกแต่งภายในที่อยู่อาศัย

                @else
                Colour Affects was founded in 1985 by Angela Wright, FRSA*., to help individuals and organisations to harness the profound psychological influence of colour on human response and behaviour. The company advises corporate clients on colours for branding, packaging, web, interiors and product design, and individuals on colours for personal growth, fashion, make-up, hair colouring and residential interiors.

                @endif

            </p>

            <p class="py-md-2 py-0"></p>

            <h2 class="text-special-elite mt-4 {{  session()->get('language')=='thai'?'th':'' }}">
                {{  session()->get('language')=='thai'?'ที่ปรึกษา':'Consultants' }}
            </h2>
            <p>
                @if(@session()->get('language')=="thai")
                เครือข่ายที่ปรึกษาของ Colour Effects ดําเนินงานในสหราชอาณาจักร ไอร์แลนด์ ออสเตรเลีย แอฟริกาใต้ อเมริกาใต้ สหรัฐอเมริกา สวีเดนและยุโรปตะวันออก โดยให้คําปรึกษาในเรื่องต่อไปนี้
                @else
                The Colour Affects Network of consultants operates in UK, Ireland, Australia, South Africa, South America, USA, Sweden and Eastern Europe, providing consulting on the following:

                @endif
            </p>

            <div class="block max-width" style="--max-width:850px">
                <div class="row">
                    <div class="col-sm-4">
                        <p>1.{{  session()->get('language')=='thai'?'เรื่องส่วนบุคคล':'Personal' }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>2.{{  session()->get('language')=='thai'?'การตกแต่งภายใน':'Interiors' }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>3.{{  session()->get('language')=='thai'?'เรื่องขององค์กร':'Corporate' }}</p>

                    </div>
                </div>
            </div>

            <p class="py-md-2 py-0 mt-3"></p>

            <h2 class="text-special-elite mt-4 {{  session()->get('language')=='thai'?'th':'' }}">
                {{  session()->get('language')=='thai'?'การสอนของ Colour Affects':'Colour Affects Teaching' }}
            </h2>
            <p>
                @if(@session()->get('language')=="thai")
                นับตั้งแต่ปี พ.ศ. 2528 เรื่อยมา ผู้คนหลายร้อยคนทั่วโลกได้ศึกษาหลักการพื้นฐานของระบบของ
                Colour Affects โดยมีการจัดโปรแกรมการสอนหลากหลายตามที่ผู้เรียนต้องการ ตั้งแต่หลักสูตรสัมมนาเบื้องต้น
                1 ชั่วโมงไปจนถึงการสําเร็จหลักสูตรวุฒิการศึกษาทางวิชาชีพ ทุกหลักสูตรเป็นการเรียนการสอนแบบตอบโต้สองทางหากไม่รวมหลักสูตรสัมมนา 1 ชั่วโมงผู้เรียนทุกคนจะมีส่วนร่วมในการทดลองเชิงปฏิบัติด้วยสีจริง
                <br/>
                Colour Effects มีความเกี่ยวข้องกับองค์กรต่าง ๆ และผู้นําด้านวิชาการในโลกของสี อันรวมถึง

                @else
                Since 1985, hundreds of people around the world have studied the fundamental principles of the Colour Affects System. The teaching program provides as little or as much as you need - from a one-hour introductory seminar to complete professional qualification. All courses are interactive and, apart from one-hour seminars, involve students in practical experiments with colour. Colour Affects is associated with various organisations and academic leaders in the world of colour. These include:

                @endif
            </p>

            <div class="block max-width ps-lg-5 py-2" style="--max-width:800px">
                <ol class="text-start">
                    @if(@session()->get('language')=="thai")
                    <li>Department of Colour Science, University of Leeds</li>
                    <li>The Society of Dyers and Colourists</li>
                    <li>The Colour Group of Great Britain (แองเจลา ไรท์ สมาชิกคณะกรรมการ พ.ศ.2549-2551)</li>

                    @else
                    <li>Department of Colour Science, University of Leeds</li>
                    <li>The Society of Dyers and Colourists</li>
                    <li>The Colour Group of Great Britain (Angela Wright a committee member 2006 - 2008)</li>
                    @endif
                </ol>
                *Fellow of the Royal Society of Arts
            </div>

            <h2 class="text-special-elite mt-5 text-center-alway {{  session()->get('language')=='thai'?'th':'' }}">
                {{  session()->get('language')=='thai'?'ประวัติของแองเจลา ไรท์, FRSA':'Biography of Angela Wright' }}
            </h2>

            <div class="textrow mt-2 mb-4 pb-sm-2">
                <img class="max-width text-center-alway aos-init" style="--max-width:180px" data-aos="fade-up" data-aos-delay="200" src="{{ asset('frontend/assets/img/thumb/photo-350x526.jpg') }}" alt="kalakala">
            </div>

            @if(@session()->get('language')=="thai")
            <p>ศึกษาจิตบำบัดจิตวิเคราะห์ (psychoanalytical psychotherapy) ที่โรงพยาบาลควีนแมรี <br/>
            โรแฮมป์ตัน ประเทศอังกฤษ ก่อนที่จะศึกษาพลวัตของสี (dynamics of colour) ในเมืองคาร์เมล แคลิฟอร์เนีย สหรัฐอเมริกา จากการศึกษาครั้งนี้เอง เธอค้นพบความเชื่อมโยงระหว่างรูปแบบ(pattern)ของสี กับรูปแบบ(pattern)พฤติกรรมของมนุษย์ ด้วยการผสมผสานความรู้ด้านจิตวิทยาและการสังเกต เธอได้สร้างสมมติฐานที่ชัดเจน จนกลายเป็นรากฐานของ The Colour Affects System ทฤษฎีนี้ได้รับการยอมรับทางวิชาการและสามารถพิสูจน์ได้ ก้าวข้ามขอบเขตทางวัฒนธรรม และเป็นครั้งแรกที่ทำให้การใช้สีในทางจิตวิทยามีความเป็นกลาง มีเหตุผล และแม่นยำอย่างน่าทึ่ง
            </p>
            <p>
            ในช่วงปี 1970 แองเจล่า ไรท์ ได้เริ่มต้นสำรวจอย่างจริงจังเกี่ยวกับความลับที่ว่าสีมีอิทธิพลต่ออารมณ์และพฤติกรรมอย่างไร ซึ่งโดยทั่วไปแล้วอิทธิพลของสีมักถูกมองว่าเป็นนามธรรม และคาดการณ์ไม่ได้
            </p>
            <p>
            ในช่วงปี 1990 และต้นปี 2000 ทฤษฎีนี้ได้รับการทดสอบทางวิทยาศาสตร์อย่างเข้มงวดในสถาบันวิชาการระดับโลก และพบว่าทฤษฎีของเธอนั้นเป็นจริง
            </p>
            <p>
            แองเจลา ไรท์ (Angela Wright) ได้สร้างความก้าวหน้าครั้งสำคัญต่อความเข้าใจของเราเกี่ยวกับจิตวิทยาสีด้วยการค้นพบของเธอเกี่ยวกับวิธีการทำงานของสีในช่วงปลายปี1970/ ต้นปี1980 เธอไม่เชื่อว่าบางสิ่งบางอย่างที่เป็นพื้นฐานของชีวิต เช่น แสง และความสัมพันธ์กับมนุษยชาตินั้นจะเป็นเรื่องบังเอิญได้ ดังนั้นเธอจึงเริ่มมองหารูปแบบที่ซ่อนอยู่หลังจากการสำรวจ รวมถึงการศึกษาจิตวิทยาของฟรอยด์ (Sigmund Freud) และพลวัตของสีอยู่นานหลายปี เธอได้ค้นพบ
            รูปแบบที่เธอกำลังมองหา ด้วยการระบุความเชื่อมโยงระหว่างรูปแบบของสี กับรูปแบบของพฤติกรรมของมนุษย์ เธอเขียน The Wright Theory ขึ้นในปี 1984 และเปิดบริษัทที่ปรึกษาด้านสีในปี 1985 เพื่อวัตถุประสงค์เดียวคือการทดสอบเชิงประจักษ์ ในช่วงต้นทศวรรษ 1990 มีการค้นพบความสัมพันธ์เชิงคณิตศาสตร์ระหว่างสีภายในกลุ่มเดียวกัน จำแนกตามทฤษฎี The Wright Theory ซึ่งความสัมพันธ์นี้จะไม่พบระหว่างสีต่างกลุ่มกัน การค้นพบนี้ยืนยันว่าความกลมกลืนของสีนั้นเป็นหลักการทางวิทยาศาสตร์อย่างแท้จริง และด้วยหลักการของทฤษฎีสีของไรท์ (The Wright Theory) ที่พิสูจน์ว่าเป็นจริงได้ทุกครั้ง ทำให้แองเจลา ไรท์ (Angela Wright) สามารถพัฒนา The Colour Affects System ขึ้นได้จากหลักการเหล่านั้น
            </p>
            <p>
            นอกจากการยอมรับในแวดวงวิชาการแล้ว ยังได้รับการพิสูจน์จริงในทางธุรกิจ ผ่านบริษัทที่ปรึกษา Colour Affects ของเธอที่กรุงลอนดอนตั้งแต่ปี 1985 เธอประยุกต์ใช้ทฤษฎีนี้กับทุก
            แง่มุมในธุรกิจ ไม่ว่าจะเป็นการสื่อสารขององค์กร การออกแบบร้านค้าและสถานที่ทำงาน รวมถึงการออกแบบเว็บไซต์และผลิตภัณฑ์ ผลงานของเธอนอกจะเป็นที่ยอมรับอย่างมากจากบุคคลทั่วไปแล้ว บริษัทต่างชาติ สถาบันภาครัฐ และบริษัทออกแบบจำนวนมาก ต่างยืนยันถึงพลังและประสิทธิภาพของทฤษฎีนี้ ในปี 1998 เธอได้รับเกียรติให้เป็นสมาชิกของ Royal Society of Arts และได้รับการยอมรับว่าเป็นผู้เชี่ยวชาญระดับโลกด้านอิทธิพลของสีต่อจิตใต้สำนึก
            </p>
            <p>
            หนังสือ 'The Beginner's Guide to Colour Psychology' ในปี 1995 ของเธอ ขายดีและประสบความสำเร็จอย่างต่อเนื่องทั่วโลก ปัจจุบันเธอกำลังเขียนหนังสือเล่มที่สองที่ชื่อ
             'The Colour of Money'
            </p>

            @else
            <p>
                Angela Wright began to explore seriously the mystery of how colour influences mood and behaviour in the 1970s. Until then, the effects of colour were generally considered to be completely subjective, and therefore impossible to predict.
            </p>

            <p>
                She studied psychoanalytical psychotherapy at Queen Mary's Hospital, Roehampton, England, before studying the dynamics of colour in Carmel, California, USA, and identified links between patterns of colour and patterns of human behaviour. She formulated a clear hypothesis, which became the basis of the Colour Affects System, an academically sound and demonstrably effective system that crossed cultural boundaries and, for the first time, enabled colour psychology to be applied objectively, rationally and with remarkable accuracy.
            </p>

            <p>
                Angela Wright made a major breakthrough in our understanding of colour psychology with her discoveries about how colour really works, in the late 1970s/early 1980s. She did not believe that something as fundamental to life as light, and its relationship with humanity, could possibly be random, so she set about looking for the underlying patterns.
            </p>

           <p>
            After many years of exploration, which included studying Freudian psychology and the dynamics of colour, she found the patterns she was seeking. Having identified links between patterns of colour and patterns of human behaviour, she wrote her theory in 1984, and opened a colour consultancy in 1985, with the sole objective of testing it empirically.
           </p>

           <p>
            In the early 1990s, it was discovered that there are mathematical correlations between colours within each group, when classified in line with the theory, that do not exist between colours from different groups. This established that objective colour harmony is a scientific reality. Since the Wright Theory held true every time, she was able to develop the Colour Affects System from its tenets

          </p>
          <p>
            During the 1990s and early 2000s, the system was subjected to stringent scientific scrutiny at world class academic levels and found to hold true consistently.

          </p>
          <p>
            However, it had already been empirically tested in business since 1985, through her London-based consultancy, Colour Affects. She has applied the system to every aspect of business - corporate communication, retail and workplace design, as well as web design and product design. Apart from the many individuals who claim that it has hugely helped them personally, there are many major international companies, government institutions and design consultancies who attest to its power and effectiveness. Ms. Wright was invited to become a Fellow of the Royal Society of Arts in 1998 and she is recognised as a world expert on the unconscious effects of colour.

          </p>

           <p>
            Her 1995 book, 'The Beginner's Guide to Colour Psychology' continues to sell steadily across the world and she is working on her second book, specifically for the business community, provisionally entitled 'The Colour of Money'.

           </p>
            @endif

            <p class="py-md-2 py-0"></p>
            <h2 class="text-special-elite mt-5 text-center-alway {{  session()->get('language')=='thai'?'th':'' }}">

                 @if(@session()->get('language')=="thai")
                 รู้จักกับผู้เชี่ยวชาญด้านสีของคุณ <br/>
                 Toeyngam Maccormac <br/>(เตยงาม แมคคอร์แมค ; คุณบีน)
                 @else
                 Meet your colourist: Toeyngam MacCormac
                 @endif
            </h2>

            <div class="textrow mt-2 mb-4 pb-sm-2">
                <img class="max-width text-center-alway aos-init" style="--max-width:180px" data-aos="fade-up" data-aos-delay="200" src="{{ asset('frontend/assets/img/thumb/photo-350x526.jpg') }}" alt="kalakala">
            </div>
            @if(@session()->get('language')=="thai")
            <p>
            เริ่มจากความหลงใหลในศาสตร์แห่งสีสันมาโดยตลอด แต่เมื่อถึงเวลาต้องเลือกสี ก็มักจะมีคำถามที่เกิดจากความไม่มั่นใจขึ้นมาว่า "ทำไมเราถึงใช้สีนี้" หรือ "นี่คือสีที่ถูกต้องหรือเปล่า"
            </p>
            <p>
หลังจากจบการศึกษาสาขาสถาปัตยกรรมภายใน จุฬาลงกรณ์มหาวิทยาลัย คุณบีนก็ได้ศึกษาต่อด้านจิตวิทยาสีกับ Angela Wright,FRSA. (แองเจลา ไรท์, FRSA) ผู้ก่อตั้ง Colour Aﬀects ซึ่งเป็นบริษัทที่ปรึกษาเรื่องจิตวิทยาสีในลอนดอน ทำให้อยากนำหลักการของ Colour Affects System มาใช้เพื่อให้ทุกคนได้เห็นว่าสีสามารถนำไปใช้อย่างเป็นกลางได้ คาดเดาได้ และไม่ใช่แค่เรื่องของรสนิยมที่ดีของใครคนใดคนหนึ่ง
            </p>
            <p>
เป็นความมหัศจรรย์ที่สีส่งผลต่ออารมณ์และพฤติกรรมของมนุษย์ได้โดยไม่รู้ตัว หลาย ๆ คนคงไม่เคยรู้มาก่อนด้วยซ้ำว่าเราทุกคนมี "Colour Palette" ประจำตัวซ่อนอยู่ สิ่งนี้จึงเป็นแรงบันดาลใจให้คุณบีนเริ่มทำ Kalakala โดยมีความตั้งใจที่จะช่วยให้ทุกคนได้ค้นหาสีที่ใช่ของตัวเอง ไม่ว่าคุณจะเป็นใคร ทั้งบุคคล องค์กร หรือธุรกิจ
            </p>
            <p>
ลืมภาพจำและความไม่มั่นใจในการเลือกสีแบบเดิม ๆ ไปได้เลย
            </p>

            @else
            <p>I have always been passionate about colours. when it comes to making colour choice, there can be underlying doubts “why I am choosing this?”, or “Is it the right colour?”.  </p>

            <p>
                After graduating in Interior Architecture from Chulalongkorn University. I studied Colour Psychology with Colour Affects, a London-based consultancy founded by Angela Wright, FRSA. and qualified as Colourist by SDC (The Society of Dyers and Colourists) <a class="text-underline" href="https://sdc.org.uk" target="_blank">https://sdc.org.uk</a></p>

            <p>I wanted to take her principle forward to show how colours can be objectively applied, are predictable and not just one's good taste.  </p>

            <p>It is eye-opening to acknowledge how colour unconsciously influences human mood and behaviour. Most of us are unaware we have an inherent colour palette</p>

            <p>This inspired me to set up Kalakala.</p>

            <p>I am determined to help you discovering your colours, whether you are individuals, organisations, or businesses. </p>

            <p>Now colour selection is no longer a myth.</p>
            @endif


            <p class="py-4"></p>
        </div><!--article-->
    </div><!--container-->
</div><!--section-->

<div class="section bg-light">
    <div class="container py-md-5">
        <div class="article text-start">
            <div class="hgroup center">
                <div class="textrow">
                    <img class="colour mb-2" data-aos="fade-up" data-aos-delay="200" style="width: 140px;" src="img/thumb/colour--8.png" alt="">
                </div>
                <h2 class="text-special-elite {{  session()->get('language')=='thai'?'th':'' }}">
                    {{  session()->get('language')=='thai'?'The Wright Theory และ The Colour Affect System':'The Wright Theory and The Colour Affect System' }}
                </h2>
            </div>

            <p class="text-center max-width" style="--max-width:1100px">
                @if(@session()->get('language')=="thai")
                เป็นการศึกษาจิตวิทยาของสีอย่างเป็นระบบโดยมีพื้นฐานมาจากทฤษฎีของ Angela Wright ทำให้จิตวิทยาสี หรือ Colour Psychology สามารถถูกนำมาใช้อย่างเป็นรูปธรรม สมเหตุสมผล และมีความแม่นยำ พิสูจน์ได้จนเป็นที่ยอมรับในระดับสากล
                @else
                A systematic approach to colour psychology, based on the theory. It enables colour psychology to be applied objectively,
                rationally and with remarkable accuracy, on a global basis.
                @endif

            </p>

            <p class="py-md-1 py-0 pt-1"></p>

            <h2 class="text-special-elite pb-2 {{  session()->get('language')=='thai'?'th':'' }}">The Wright Theory</h2>
            <ul>
                @if(@session()->get('language')=="thai")
                <li>เฉดสีแต่ละเฉดส่งผลต่อภาวะทางจิตใจที่แตกต่างกัน</li>
                <li>ปรากฎการณ์ทางจิตวิทยาของสีนั้นเป็นสากล</li>
                <li>ทุกเฉดสีสามารถจัดอยู่ใน 4 กลุ่มสี และสีภายในกลุ่มเดียวกันจะผสมผสานเข้ากันได้อย่างลงตัว  (harmonise) ทั้งหมด </li>
                <li>มนุษย์ทุกคนสามารถจัดอยู่ใน 1 ใน 4 กลุ่มบุคลิกภาพ (personality type) และโดยธรรมชาติแต่ละกลุ่มบุคลิกภาพจะถูกดึงดูดด้วยสีในกลุ่มของตนเอง</li>
                <li>การตอบสนองโทนสีต่างๆเป็นอิทธิพลจากกลุ่มบุคลิกภาพ (personality type) ของแต่ละบุคคล</li>

                @else
                <li>Each hue, affects distinct psychological modes</li>
                <li>The psychological effects of colour are universal</li>
                <li>Every shade tone or tint can be classified as one of four colour groups</li>
                <li>Every colour will harmonise with every other colour in the same group</li>
                <li>All humanity can be classified into one of four personality types</li>
                <li>Each personality type has a natural affinity with one colour group</li>
                <li>Response to colour schemes is influenced by personality type</li>
                @endif

            </ul>

            <p class="py-md-1 py-0 pt-1"></p>

            <h2 class="text-special-elite pb-2 {{  session()->get('language')=='thai'?'th':'' }}">
                @if(@session()->get('language')=="thai")
                The Colour Affects System <br/>(ได้รับการพัฒนาต่อจาก The Wright Theory)
                @else
                The Colour Affect System
                @endif

            </h2>
            <ul>
                @if(@session()->get('language')=="thai")
                <li>มีสี 4 กลุ่ม(colour family) ที่โดยธรรมชาติสีทุกสีภายในกลุ่มเดียวกันจะผสมผสานเข้ากันได้อย่างลงตัว และสีจากต่างกลุ่มกันจะไม่กลมกลืนกันอย่างแท้จริง</li>
                <li>นอกจากนี้ยังมีกลุ่มบุคลิกภาพพื้นฐาน (basic personality type) อีก 4 กลุ่ม </li>
                <li>กลุ่มบุคลิกภาพ (personality type) แต่ละแบบมีความสัมพันธ์โดยธรรมชาติกับ 1 กลุ่มสี </li>
                <li>สีแต่ละกลุ่มจะแสดงให้เห็นถึงกลุ่มบุคลิกภาพ (personality type) อย่างชัดเจน</li>

                @else
                <li>There are four colour families within which every colour naturally harmonises with every other colour in the family, colours from different families do not truly harmonise</li>
                <li>There are also four basic personality types</li>
                <li>Each personality type has a natural affinity with one colour family</li>
                <li>Each colour family expresses a personality type</li>
                @endif

            </ul>
        </div><!--article-->

        <p class="py-md-4 py-0"></p>

        <div class="article text-start">
            <div class="hgroup text-center">
                <h2 class="text-special-elite mb-3 {{  session()->get('language')=='thai'?'th':'' }}">
                    {{  session()->get('language')=='thai'?'กลุ่มสีทั้งสี่':'The Four Tonal Families' }}
                </h2>
                <h3 class="text-special-elite number-group {{  session()->get('language')=='thai'?'th':'' }}">
                    {{  session()->get('language')=='thai'?'กลุ่มที่':'Group' }}
                    <div class="number">
                        <img src="{{ asset('frontend/assets/img/thumb/number-circle-1.svg') }}" alt="kalakala">
                        <span>01</span>
                    </div>
                    {{  session()->get('language')=='thai'?'Morninglight':'Morninglight' }}
                </h3>
            </div>

            <ul>
                @if(@session()->get('language')=="thai")
                <li>กลุ่มสีโทนอุ่น (มีส่วนผสมของสีเหลือง) ค่าความสว่างสูง ความสดน้อยกว่ากลุ่มที่ 3 </li>
                <li>มีสีสันสดใส เป็นสีโทน warm ที่ไม่มีส่วนผสมของสีดำ</li>
                <li>บุคลิกภาพที่สอดคล้องกับสีกลุ่มนี้นี้ คือ ความสดใส อบอุ่น เป็นมิตร อ่อนเยาว์ มีชีวิตชีวา สดชื่น ไร้เดียงสา และมองโลกในแง่ดี</li>
                <li>ในทางลบอาจถูกมองว่า ดูไม่น่าเชื่อถือ ไร้สาระ และไม่มีความเป็นผู้ใหญ่</li>


                @else
                <li>Yellow-based hues, higher value, lower chroma</li>
                <li>Clear, delicate warm colours containing no black</li>
                <li>Personal characteristics associated with this tonal family are light, warm, friendly, young, lively, fresh, clean and optimistic</li>
                <li>Negatively, they may be percieved as insubstantial, frivolous and immature.</li>
                @endif

            </ul>

            <div class="colour-lists lg row">
                <div class="col"><span class="item" style="--bg:#FFFD74;"></span></div>
                <div class="col"><span class="item" style="--bg:#FEAFA2;"></span></div>
                <div class="col"><span class="item" style="--bg:#A3F7F5;"></span></div>
                <div class="col"><span class="item" style="--bg:#CFFF73;"></span></div>
                <div class="col"><span class="item" style="--bg:#E059FE;"></span></div>
                <div class="col"><span class="item" style="--bg:#FF6370;"></span></div>
            </div>

        </div><!--article-->

        <p class="py-md-4 py-0"></p>

        <div class="article text-start">
            <div class="hgroup text-center">
                <h3 class="text-special-elite number-group {{  session()->get('language')=='thai'?'th':'' }}">
                    {{  session()->get('language')=='thai'?'กลุ่มที่':'Group' }}
                    <div class="number">
                        <img src="{{ asset('frontend/assets/img/thumb/number-circle-1.svg')}}" alt="kalakala">
                        <span>02</span>
                    </div>
                    {{  session()->get('language')=='thai'?'Dreamlight':'Dreamlight' }}
                </h3>
            </div>

            <ul>
                @if(@session()->get('language')=="thai")
                <li>กลุ่มสีโทนเย็น (มีส่วนผสมของสีน้ำเงิน) ค่าความสว่างปานกลาง ความสดของสีค่อนข้างต่ำ</li>
                <li>มีส่วนผสมของสีเทายังคงความละเอียดอ่อน แต่ไม่ได้สว่างโดดเด่น เป็นกลุ่มสีที่นุ่มนวลและอ่อนโยน</li>
                <li>บุคลิกภาพที่สอดคล้องกับตระกูลสีนี้ คือ ความสง่างามที่เรียบง่ายไม่หวือหวา เยือกเย็น สงบ สุขุม งดงาม หรูหรา ไร้กาลเวลา ผ่อนคลาย มีปณิธาน</li>
                <li>ในทางลบอาจตีความได้ว่าเป็นคนเอาแต่ใจ ไม่เป็นมิตร ห่างเหิน เป็นพวกหัวสูง และอ่อนแอ</li>

                @else
                <li>Blue-based hues, mid-value, lower chroma</li>
                <li>These tones are cool, contain more grey and, whilst also delicate, are not necessarily light. They are soft and subtle.</li>
                <li>Personal characteristics are understated elegance, cool, calm, poise, graceful, upmarket, timeless, soothing, aspirational</li>
                <li>Negatively they may be interpreted as draining, unfriendly, aloof, elitist and weak.</li>
                @endif


            </ul>

            <div class="colour-lists lg row">
                <div class="col"><span class="item" style="--bg:#CCCCCC;"></span></div>
                <div class="col"><span class="item" style="--bg:#AE95BD;"></span></div>
                <div class="col"><span class="item" style="--bg:#7A92D5;"></span></div>
                <div class="col"><span class="item" style="--bg:#D47DB0;"></span></div>
                <div class="col"><span class="item" style="--bg:#99BFA7;"></span></div>
                <div class="col"><span class="item" style="--bg:#9D7D8A;"></span></div>
            </div>

        </div><!--article-->

        <p class="py-md-4 py-0"></p>

        <div class="article text-start">
            <div class="hgroup text-center">
                <h3 class="text-special-elite number-group {{  session()->get('language')=='thai'?'th':'' }}">
                    {{  session()->get('language')=='thai'?'กลุ่มที่':'Group' }}
                    <div class="number">
                        <img src="{{ asset('frontend/assets/img/thumb/number-circle-1.svg')}}" alt="kalakala">
                        <span>03</span>
                    </div>

                    {{  session()->get('language')=='thai'?'Firelight':'Firelight' }}
                </h3>
            </div>

            <ul>
                @if(@session()->get('language')=="thai")
                <li>กลุ่มสีโทน warm (เฉดสีที่มีสีเหลืองผสม) ค่าความสว่างสามารถเป็นได้ทั้งอ่อน กลาง และเข้ม, หรือเป็นสีที่สดมาก โทนสีเหล่านี้เป็นสีโทน warm ที่เข้มข้นและร้อนแรงมากขึ้นกว่ากลุ่มที่ 1 อาจมีสีดำผสมด้วย แต่สีดำเองไม่อยู่ในกลุ่มสีนี้</li>
                <li>ลักษณะของกลุ่มนี้คือ อบอุ่นและเป็นมิตร อนุรักษ์นิยม มั่นคง อดทน น่าเชื่อถือ ติดดิน มีจิตสำนึกต่อสิ่งแวดล้อม นอกจากนี้ยังสามารถแสดงถึงความโดดเด่นแหวกแนวและความหรูหราแบบจัดจ้าน</li>
                <li>โทนสีกลุ่มที่ 3 หากใช้ในทางที่ผิดอาจสื่อถึงความหนักหน่วง ล้าสมัย น่าเบื่อ ซ้ำซากจำเจ และความเจ้ากี้เจ้าการ</li>

                @else
                <li>Yellow-based hues can be high, mid, or low value, can be high chroma</li>
                <li>These tones are again warm, but much more intense and fiery. They contain black in their mix but black itself does not belong in this group.</li>
                <li>The characteristics are warm and friendly, traditional, solid, substantial, reliable, earthy, and environmentally aware, They can also express iconoclasm and a certain flamboyance.</li>
                <li>Misused, group 3 tones can convey heavy, old-fashioned, boring predictability and bossiness.</li>
                @endif


            </ul>

            <div class="colour-lists lg row">
                <div class="col"><span class="item" style="--bg:#FFD373;"></span></div>
                <div class="col"><span class="item" style="--bg:#E65C13;"></span></div>
                <div class="col"><span class="item" style="--bg:#2AA5B5;"></span></div>
                <div class="col"><span class="item" style="--bg:#781A73;"></span></div>
                <div class="col"><span class="item" style="--bg:#428F27;"></span></div>
                <div class="col"><span class="item" style="--bg:#A20B18;"></span></div>
            </div>

        </div><!--article-->

        <p class="py-md-4 py-0"></p>

        <div class="article text-start">
            <div class="hgroup text-center">
                <h3 class="text-special-elite number-group {{  session()->get('language')=='thai'?'th':'' }}">
                    {{  session()->get('language')=='thai'?'กลุ่มที่':'Group' }}
                    <div class="number">
                        <img src="{{ asset('frontend/assets/img/thumb/number-circle-1.svg')}}" alt="kalakala">
                        <span>04</span>
                    </div>
                    {{  session()->get('language')=='thai'?'Starlight':'Starlight' }}
                </h3>
            </div>

            <ul>
                @if(@session()->get('language')=="thai")
                <li>เป็นกลุ่มสีโทน cool หรือเฉดสีที่มีสีน้ำเงินผสม ค่าความสว่างสูงมากหรือต่ำมาก มีความเข้มสีที่สูงมาก สีตระกูลนี้มีความสดและชัดเจนมาก ไม่มีความซับซ้อน สามารถเป็นได้ทั้งสีเข้มมาก สีสว่างมาก หรือสีที่มีความสดมาก สีในกลุ่มนี้ยังรวมถึง สีดำและสีขาว</li>
                <li>สีกลุ่มนี้สื่อถึงความเป็นเลิศ มุ่งมั่นในความสมบูรณ์แบบ ความปรารถนาในวัตถุนิยม ความแม่นยำ มีสีสันและน่าตื่นเต้น ทันสมัยและก้าวหน้า</li>
                <li>ในแง่ลบอาจมองได้ว่า เย็นชา ไม่แยแส ไม่เป็นมิตร แสดงถึงวัตถุนิยมและมีราคาแพง</li>

                @else
                <li>Blue-based hues, very  high or very low value, very high chroma</li>
                <li>These colours are very clear and strong, with no subtleties. They are either very dark, very light or very intense. The group includes black and white</li>
                <li>They communicate characteristics of uncompromising excellence, material aspiration, efficiency, drama, sophistication, modernity, and high-tech</li>
                <li>Negativelpercieved as cold uncaring, unfriendly, materialist, and expensive</li>
                @endif


            </ul>

            <div class="colour-lists lg row">
                <div class="col"><span class="item" style="--bg:#000000;"></span></div>
                <div class="col"><span class="item" style="--bg:#0A09FA;"></span></div>
                <div class="col"><span class="item" style="--bg:#E7117D;"></span></div>
                <div class="col"><span class="item" style="--bg:#FCFB08;"></span></div>
                <div class="col"><span class="item" style="--bg:#26D699;"></span></div>
                <div class="col"><span class="item" style="--bg:#31007D;"></span></div>
            </div>

        </div><!--article-->

    </div><!--container-->
</div><!--section-->
@endsection
