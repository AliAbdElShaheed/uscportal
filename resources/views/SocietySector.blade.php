@extends('layouts.frontend.app')

@section('content')

    {{--------------------------Start of section 1 Landing (banners)------------------------------}}
    <section class="landing d-flex justify-content-center align-items-center">
        <div class="image">
            <div class="text-center text-light">
                <h1>قطاع خدمة المجتمع وتنمية البيئة</h1>
                <p class="fs-6 text-white-50 mb-5">يعتبر قطاع خدمة المجتمع وتنمية البيئة هو القطاع المنوط به تفعيل دور الجامعة في حل مشاكل المجتمع والإسهام في قضايا التنمية بالإضافة للعديد من الأهداف ، و هو أحد القطاعات الهامة والأساسية في الهيكل التنظيمي للجامعة وكلياتها المختلفة لما يقوم به هذا القطاع من مهام ومسئوليات .</p>
                <a href="#postgraduate" class="btn rounded-pill main-btn">@lang('site.get_started')</a>
            </div>
        </div>
    </section>
    {{--------------------------End of section 1 Landing (banners)-----  -------------------------}}



    {{--------------------------Start of section 2 (Vice Rector's Word) ------------------------------}}
    <div id="postgraduate" class="president_word text-center pb-5 pt-2">
        <div class="container pb-5 pt-1">
            <img class="mb-4" src="{{asset('uploads/frontend/images/12.png')}}" alt=""/>
            <h2 class="fw-bold main-title">كلمه الأستاذ الدكتور نائب رئيس الجامعة لشئون خدمة المجتمع وتنمية البيئة</h2>

            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <div class="president box bg-white">
                        <img class="img-fluid" src="{{asset('uploads/frontend/images/DrKhaled.jpg')}}" alt=""/>
                        <h4 class="p-3 text-dark border border-primary-subtle">أ.د/ خالد محمود جعفر</h4>

                    </div>
                </div>
                <div class="col-lg-8 col-sm-12">
                    <blockquote class="text-black-50  px-3 text-center justify-content-end">
جامعة مدينة السادات من الجامعات الحكوميه المصريه التي شهدت فى الفتره الماضيه أنطلاقا واسعا فى جميع المجالات حيث اصبحت تتصدر التصنيفات الدوليه للجامعات العربيه والافريقيه والدوليه وفى جميع المجالات واصبح  لها دور واضح وفعال في الارتقاء بالمجتمع المحيط وتنمية البيئة وخاصة مدينة السادات التي تتميز بموقعها الجغرافي المتميز حيث أن بها أحد قلاع الصناعات المصرية المتطورة من خلال العديد من المصانع للصناعات الثقيلة والمتوسطة والغذائية وغيرها علاوة علي تميزها بظهير صحراوي يسمح بالامتداد شرقا وغربا وشمالا وجنوبا ويحيط بها العديد من مزارع الإنتاج الزراعي والحيواني و الداجنى ومصانع الاعلاف التي تحتاج الي الدعم الدائم من كليات ومعاهد الجامعة  وتهدف الجامعة للترابط مع المجتمعات الصناعية والزراعية والسكنية  المحيطة بالجامعة لاستكمال مسيرة خدمة المجتمع وتنمية البيئة من خلال التواصل المستمر مع الكيانات الاستثمارية الكبيره والمتوسطة والصغيره ومتناهية الصغر فى جميع المجالات وقيادات المجتمع الخارجي للتعريف بإمكانيات الجامعة العلمية والبحثية والتطبيقية من خلال التنشيط الكامل لجميع الوحدات ذات الطابع الخاص بكليات ومعاهد الجامعه والمعامل المتميزة والمكاتب الاستشاريه والمعامل المرجعية المعتمدة من الدولة والمختبر كفاءتها من جهات دولية خارج مصر وشرح كيفية الاستفادة من هذه المعامل كذلك المكاتب والمراكز الاستشارية في جميع المجالات الصناعية والزراعية والبيئيه والطبية والقانونية والتجارية وغيرها لتقديم الخدمات للمجتمع بجوده عاليه وسرعه وبأسعار منخفضه مقارنة بالمؤسسات والمعامل الاخرى خارج الجامعه حيث اتضح أهمية هذه المعامل والمراكز من استطلاعات رأى المتعاملين معها خلال الفترة الماضية حيث لمسوا ما يوجد من إمكانيات وخبرات ستعود على أعمالهم بالنفع والتطوير حيث يحرص العاملون بقطاع خدمة المجتمع وتنمية البيئة بالجامعة على تعظيم هذا التواصل لمصلحة الجامعة لتأدية دورها المجتمعي المطلوب فى خدمة أهالي مدينة السادات ومحافظة المنوفية والمحافظات المجاورة مع استمرار القوافل الطبية والعلاجية سواء بشرية أو بيطرية او إرشادية مع تطبيق جميع الإجراءات الاحترازية داخل وخارج الجامعة التي تجوب قرى ونجوع المجتمع المحيط بالجامعة مع الاشتراك بفاعلية مع مبادرات القيادة السياسية مثل حياه كريمة ومائة مليون صحة وصنايعية مصر وغيرها وتطوير العشوائيات ورصد المشكلات المجتمعية للتعامل معها وحلها لذلك تم تحديث الخطة الاستراتيجية لقطاع خدمة المجتمع وتنمية البيئة بحيث يتضمن العديد من المحاولر والأنشطة لتحقيق هذه الأهداف والوصول إلى أفضل خدمة للمجتمع ووضع حلول إبتكارية لحل مشاكل الصناعة القطاعات المختلفة فى الدولة وذلك لتحقيق رؤية مصرللتنمية المستدامة 2030 وربطها برؤية مصر 2050 لرفعة مصرنا الحبيبة داعين الله عز وجل أن يكلل جهودنا بالنجاح والتوفيق الدائم فى إطار من الشفافية وتطبيق اللوائح والقوانين ..
والله ورسوله خبر الشاهدين
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
    {{--------------------------End of section 2 (Vice Rector's Word) --------------------------------}}



    <div class="spikes"></div>


    {{--------------------------Start of section 3 (postgraduate word & council) --------------------------}}
    <div class="university_history" id="university_history">
        <h2 class="main-title">قطاع خدمة المجتمع وتنمية البيئة</h2>

        <div class="container">
            <div class="row justify-content-md-center">

                <div class="col-xs-12 col-lg-10 align-content-center">

<p dir="RTL" style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:8.0pt;font-size:11.0pt;margin:0in;text-align:right;line-height:15.75pt;'><strong><span style="color: rgb(0, 0, 0); font-size: 18px;">يعتبر قطاع خدمة المجتمع وتنمية البيئة هو القطاع المنوط به تفعيل دور الجامعة في حل مشاكل المجتمع والإسهام في قضايا التنمية بالإضافة للعديد من الأهداف ، و هو أحد القطاعات الهامة والأساسية في الهيكل التنظيمي للجامعة وكلياتها المختلفة لما يقوم به هذا القطاع من مهام ومسئوليات</span></strong><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong><span dir="LTR" style="font-family: mtlight, serif;">&nbsp;.</span></strong></span></p>
<p dir="RTL" style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:8.0pt;font-size:11.0pt;margin:0in;text-align:right;line-height:15.75pt;'><span dir="LTR" style="font-family: HacenSaudiArabia, serif; color: rgb(0, 0, 0); font-size: 18px;"><br>&nbsp;</span><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong>فقطاع خدمة المجتمع وتنمية البيئة هو النافذة الوحيدة التي تطل منها الجامعة على المجتمع المحيط للوقوف على المشكلات الحقيقية لهذا المجتمع وصولاً لإيجاد حلولاً علمية لها مما يؤدي في النهاية إلى تنمية المجتمع ليكون قادراً على مواكبة التقدم</strong><strong><span dir="LTR" style="font-family: mtlight, serif;">.</span></strong></span></p>
<p dir="RTL" style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:8.0pt;font-size:11.0pt;text-align:right;'><span style="font-family: Arial, sans-serif; font-size: 18px; color: rgb(0, 0, 0);">ويتكون القطاع من ثلاث إدارات عامة وهي&nbsp;</span></p>
<h3 dir="RTL" style='margin-right:0in;margin-left:0in;font-size:18px;font-family:"Times New Roman",serif;font-weight:bold;margin:0in;text-align:right;'><span style="font-size: 18px; color: rgb(0, 0, 0);">الإدارة العامة للمشروعات البيئية</span></h3>
<p dir="RTL" style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:8.0pt;font-size:11.0pt;text-align:right;'><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong><span style="font-family: Arial, sans-serif; background: white;">الإدارة العامة لشئون خدمة المجتمع وتنمية البيئة</span></strong></span></p>
<p dir="RTL" style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:8.0pt;font-size:11.0pt;text-align:right;'><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong><span style="font-family: Arial, sans-serif; background: white;">الإدارة العامة للمزارع&nbsp;</span></strong></span></p>
<p dir="RTL" style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:8.0pt;font-size:11.0pt;text-align:right;'><span style="font-family: Arial, sans-serif; font-size: 18px; color: rgb(0, 0, 0);">د / محمد عبدالحميد الدناصوري &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;مدير عام الادارة العامة للمزارع&nbsp;</span></p>
<p dir="RTL" style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:8.0pt;font-size:11.0pt;text-align:right;'><span style="font-family: Arial, sans-serif; font-size: 18px; color: rgb(0, 0, 0);">ا / ايمان السيد مسيل &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; مدير ادارة الشئون المالية والادارية&nbsp;</span></p>
<p dir="RTL" style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:8.0pt;font-size:11.0pt;text-align:right;'><span style="font-family: Arial, sans-serif; font-size: 18px; color: rgb(0, 0, 0);">ا/ عماد عبدالله المهدي حشيش &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;مدير ادارة الانتاج النباتي&nbsp;</span></p>
<p><br></p>
                    <br/>


                       
					   
                            
							
                        </div>
                        
                    </div>


                </div>

            </div>


        </div>
    </div>
    {{--------------------------End of section 3 (postgraduate word & council) ----------------------------}}




    {{--------------------------End of section 4 (Vice Rector's Office) -------------------------------}}
    <div class="university_council text-center pb-5 pt-2" id="rector_office">
        <div class="container pb-5 pt-1">
            <img class="mb-4" src="{{asset('uploads/frontend/images/12.png')}}" alt=""/>
            <h2 class="fw-bold main-title">اختصاصات أ.د/ نائب رئيس الجامعة لشئون خدمة المجتمع وتنمية البيئة</h2>
            <p class="text-black-50 mb-5">



<p dir="RTL" style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;font-size:11.0pt;text-align:right;line-height:normal;'><strong><span style='font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'>اختصاصات أ.د/ نائب رئيس الجامعة لشئون خدمة المجتمع وتنمية البيئة</span></strong></p>
<ul type="square" style="margin-bottom:0in;">
    <li dir="RTL" style='margin: 0in 0.5in 8pt 0in; font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0); text-align: right; line-height: normal;'><strong>الإشراف علي إعداد الخطط والبرامج التي تكفل تحقيق دور الجامعة في خدمة المجتمع وتنمية البيئة</strong><strong>&nbsp; .</strong></li>
    <li dir="RTL" style='margin: 0in 0.5in 8pt 0in; font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0); text-align: right; line-height: normal;'><strong>الإشراف علي إدارة شئون الوحدات ذات الطابع الخاص علي تقديم بعض خدماتها لغير الطلاب</strong><strong>&nbsp; .</strong></li>
    <li dir="RTL" style='margin: 0in 0.5in 8pt 0in; font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0); text-align: right; line-height: normal;'><strong>الإشراف علي المنشآت الجامعية التي تقدم خدمات لغير الطلاب</strong><strong>&nbsp;.</strong></li>
    <li dir="RTL" style='margin: 0in 0.5in 8pt 0in; font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0); text-align: right; line-height: normal;'><strong>الإشراف علي تنفيذ برامج التدريب سواء للعاملين بالحكومة والقطاع الخاص</strong><strong>&nbsp;.</strong></li>
    <li dir="RTL" style='margin: 0in 0.5in 8pt 0in; font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0); text-align: right; line-height: normal;'><strong>الإشراف علي التدريب المهني والفني للغير</strong><strong>&nbsp;.</strong></li>
    <li dir="RTL" style='margin: 0in 0.5in 8pt 0in; font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0); text-align: right; line-height: normal;'><strong>الإشراف على المؤتمرات والندوات و ورش العمل التي تتم بالجامعة</strong><strong>&nbsp;.</strong></li>
</ul>
<h3 dir="RTL" style='margin-right:0in;margin-left:0in;font-size:18px;font-family:"Times New Roman",serif;font-weight:bold;margin:0in;text-align:right;'><span style='font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'><strong>الغايات والأهداف الاستراتيجية لخدمة المجتمع</strong></span></h3>
<h2 dir="RTL" style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;font-size:17px;font-family:"Calibri Light",sans-serif;color:#2F5496;font-weight:normal;text-align:right;'><span style='font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'><strong><span style="font-weight: normal;">&nbsp;الغاية</span></strong></span></h2>
<h2 dir="RTL" style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;font-size:17px;font-family:"Calibri Light",sans-serif;color:#2F5496;font-weight:normal;text-align:right;'><span style='font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'><strong><span style="font-weight: normal;">كسـب ثقـة المجتمـع وتعزيز المكانـة الدوليـة للجـامعــة</span></strong></span></h2>
<h2 dir="RTL" style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;font-size:17px;font-family:"Calibri Light",sans-serif;color:#2F5496;font-weight:normal;text-align:right;'><span style='font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'><strong><span style="font-weight: normal;">الأهـداف</span></strong></span></h2>
<h3 dir="RTL" style='margin-right:.25in;margin-left:0in;font-size:18px;font-family:"Times New Roman",serif;font-weight:bold;margin-top:15.0pt;margin-bottom:7.5pt;text-align:right;'><span style='font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'><strong>1 ـ تنويع مجالات التعاون مع مؤسسات المجتمع بما يحقق متطلباتها</strong></span></h3>
<h3 dir="RTL" style='margin-right:.25in;margin-left:0in;font-size:18px;font-family:"Times New Roman",serif;font-weight:bold;margin-top:15.0pt;margin-bottom:7.5pt;text-align:right;'><span style='font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'><strong>2 ـ استحداث وتطوير وحدات خدمة وتنمية المجتمع</strong></span></h3>
<p dir="RTL" style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:13.5pt;font-size:11.0pt;text-align:right;line-height:15.75pt;'><span style='font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'><strong>&nbsp; &nbsp; &nbsp; 3ـ تطوير خطط وبرامج التنمية البيئية وخدمة المجتمع</strong></span></p>
<p dir="RTL" style='margin-right:.25in;margin-left:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:13.5pt;font-size:11.0pt;text-align:right;line-height:15.75pt;'><span style='font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'><strong>4ـ دعم البحوث التطبيقية لخدمة قضايا المجتمع ومشكلاته</strong></span></p>
<p dir="RTL" style='margin-right:.25in;margin-left:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:13.5pt;font-size:11.0pt;text-align:right;line-height:15.75pt;'><span style='font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'><strong>5 ـ دعم وتعزيز الشراكات المحلية والدولية</strong></span></p>
<p dir="RTL" style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:8.0pt;font-size:11.0pt;margin:0in;text-align:right;line-height:15.75pt;'><span style='font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'><strong>&nbsp; &nbsp; &nbsp; 6 ـ إتباع نظم من شأنها دعم متطلبات التصنيفات العالمية&nbsp;</strong></span></p>
<h2 dir="RTL" style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;font-size:17px;font-family:"Calibri Light",sans-serif;color:#2F5496;font-weight:normal;text-align:right;'><span style='font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'>الرؤية</span></h2>
<p dir="RTL" style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:8.0pt;font-size:11.0pt;margin:0in;text-align:right;line-height:15.75pt;'><span style='font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'><strong>الريادة والتميز في تقديم خدمات محتمعية وتنمية البيئة والمحافظة عليها وفق منظور استراتيجي يسعي لتوفير بيئة عمل محفزة لتقديم خدمات مجتمعية راقية ومتكاملة</strong></span></p>
<h2 dir="RTL" style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;font-size:17px;font-family:"Calibri Light",sans-serif;color:#2F5496;font-weight:normal;text-align:right;'><span dir="LTR" style='font-size: 18px; line-height: 107%; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'><br>&nbsp;&nbsp;</span><span style='font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'>الرسالة</span></h2>
<p dir="RTL" style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:13.5pt;font-size:11.0pt;text-align:right;line-height:15.75pt;'><span style='font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'><strong>تقدبم خدمات تعليمية وتدريبية واستشارية وبحثية لخدمة المجتمع المحلي وسد احتياجاتة وتدعيم قنوات التعاون والشراكة مع الجهات ذات الصلة بما يسهم في تحقيق التنمية المحلية المستدامة وتوفير بيئة عمل محفزة باستخدام احدث الاساليب والتقنيات .</strong></span></p>
<p dir="RTL" style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;font-size:11.0pt;text-align:right;'><span style='font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'><strong>الخدمات التي يقدمها قطاع خدمة المجتمع وتنمية البيئة للمجتمع الداخلي والخارجي المحيط بالجامعة</strong></span></p>
<ul type="square" style="margin-bottom:0in;">
    <li dir="RTL" style='margin: 0in 0.5in 8pt 0in; font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0); text-align: right; line-height: normal;'><strong>التوعية والنشرات العلمية</strong></li>
    <li dir="RTL" style='margin: 0in 0.5in 8pt 0in; font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0); text-align: right; line-height: normal;'><strong>&nbsp;</strong><strong>خدمات للمجتمع السكنى مثل</strong><strong>&nbsp;</strong><br> <strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</strong><strong>القوافل الطبية &nbsp;( بيطرية ـ بشرية ـ تحاليل طبية )</strong><strong>&nbsp; &nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</strong><strong>القوافل الاجتماعية والزراعية</strong></li>
    <li dir="RTL" style='margin: 0in 0.5in 8pt 0in; font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0); text-align: right; line-height: normal;'><strong>الاحتفالات والزيارات الميدانية</strong><strong>&nbsp;</strong></li>
    <li dir="RTL" style='margin: 0in 0.5in 8pt 0in; font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0); text-align: right; line-height: normal;'><strong>الدورات التدريبية</strong></li>
    <li dir="RTL" style='margin: 0in 0.5in 8pt 0in; font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0); text-align: right; line-height: normal;'><strong>ورش العمل</strong><strong>&nbsp;</strong></li>
    <li dir="RTL" style='margin: 0in 0.5in 8pt 0in; font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0); text-align: right; line-height: normal;'><strong>الاستشارات &nbsp;للمزارع والمصانع والقطاع الخاص</strong><strong>&nbsp;</strong></li>
    <li dir="RTL" style='margin: 0in 0.5in 8pt 0in; font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0); text-align: right; line-height: normal;'><strong>بروتو كولات التعاون والشراكة مع المؤسسات المحلية والعالمية</strong></li>
    <li dir="RTL" style='margin: 0in 0.5in 8pt 0in; font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0); text-align: right; line-height: normal;'><strong>تقديم الخدمة السلعية للمجتمع المحيط من خلال انشاء وحدات انتاجية ذات طابع خاص لخدمة &nbsp;الجامعة والمجتمع</strong></li>
    <li dir="RTL" style='margin: 0in 0.5in 8pt 0in; font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0); text-align: right; line-height: normal;'><strong>متابعة اعمال الوحدات ذات الطابع الخاص بالكليات والمعاهد والجامعة</strong><strong>&nbsp;</strong></li>
    <li dir="RTL" style='margin: 0in 0.5in 8pt 0in; font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0); text-align: right; line-height: normal;'><strong>وضع الخطط والبرامج التفصيلية للوحدات ذات الطابع الخاص والعمل علي تنفيذها</strong></li>
    <li dir="RTL" style='margin: 0in 0.5in 8pt 0in; font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0); text-align: right; line-height: normal;'><strong>الاشراف علي اعمال الدراسات الدورية لتطوير اداء الوحدات ذات الطابع الخاص بما يرفع &nbsp; من كفاءتها في تقديم خدماتها للبيئة</strong></li>
    <li dir="RTL" style='margin: 0in 0.5in 8pt 0in; font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0); text-align: right; line-height: normal;'><strong>الاشراف علي تحديد المركز المالي للوحدات ذات الطابع الخاص واعداد مشروعات موازنتها وحسابتها الختامية السنوية</strong><strong>&nbsp;</strong></li>
    <li dir="RTL" style='margin: 0in 0.5in 8pt 0in; font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0); text-align: right; line-height: normal;'><strong>المؤتمرات العلمية</strong></li>
    <li dir="RTL" style='margin: 0in 0.5in 8pt 0in; font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0); text-align: right; line-height: normal;'><strong>الندوات العلمية والتثقيفية</strong></li>
    <li dir="RTL" style='margin: 0in 0.5in 8pt 0in; font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0); text-align: right; line-height: normal;'><strong>اعداد الدراسات والبحوث التي من شانها انشاء مشروعات جامعية جديدة لغير الطلاب</strong><strong>&nbsp;</strong></li>
</ul>
<p dir="RTL" style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;font-size:11.0pt;text-align:right;'><span style='font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'><strong>دليل الخدمات والانشطة&nbsp;</strong><strong><u><a href="https://usc.edu.eg/uploads/frontend/files/SocietySectorServices.pdf">اضغط هنا</a></u></strong></span></p>
<p dir="RTL" style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:8.0pt;font-size:11.0pt;text-align:right;'><span style='font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'><strong>فريق العمل&nbsp;</strong></span></p>
<p dir="RTL" style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:8.0pt;font-size:11.0pt;text-align:right;'><span style='font-family: "Times New Roman", Times, serif; font-size: 18px; color: rgb(0, 0, 0);'>مهندس محمد عبدالله محمد داود&nbsp;</span></p>
<p dir="RTL" style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:8.0pt;font-size:11.0pt;text-align:right;'><span style='font-family: "Times New Roman", Times, serif; font-size: 18px; color: rgb(0, 0, 0);'>مدير المكتب&nbsp;</span></p>
<p dir="RTL" style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:8.0pt;font-size:11.0pt;text-align:right;'><span style='font-family: "Times New Roman", Times, serif; font-size: 18px; color: rgb(0, 0, 0);'>أستاذة سحر عبد العظيم سعفان&nbsp;</span></p>
<p dir="RTL" style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:8.0pt;font-size:11.0pt;text-align:right;'><span style='font-family: "Times New Roman", Times, serif; font-size: 18px; color: rgb(0, 0, 0);'>سكرتارية&nbsp;</span></p>
<p dir="RTL" style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:8.0pt;font-size:11.0pt;text-align:right;'><span style='font-family: "Times New Roman", Times, serif; font-size: 18px; color: rgb(0, 0, 0);'>الأستاذة آية صبري عبد الحميد&nbsp;</span></p>
<p dir="RTL" style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:8.0pt;font-size:11.0pt;text-align:right;'><span style='font-family: "Times New Roman", Times, serif; font-size: 18px; color: rgb(0, 0, 0);'>اخصائي اجتماعي &nbsp;</span></p>
<p dir="RTL" style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:8.0pt;font-size:11.0pt;text-align:right;'><span style='font-family: "Times New Roman", Times, serif; font-size: 18px; color: rgb(0, 0, 0);'>السيد / سعد رمضان سعد شلبي&nbsp;</span></p>
<p dir="RTL" style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:8.0pt;font-size:11.0pt;text-align:right;'><span style='font-family: "Times New Roman", Times, serif; font-size: 18px; color: rgb(0, 0, 0);'>عامل خدمات&nbsp;</span></p>
<p dir="RTL" style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:8.0pt;font-size:11.0pt;text-align:right;'><span style='font-family: "Times New Roman", Times, serif; font-size: 18px; color: rgb(0, 0, 0);'>السيد / سيد البنا&nbsp;</span></p>
<p dir="RTL" style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:8.0pt;font-size:11.0pt;text-align:right;'><span style='font-family: "Times New Roman", Times, serif; font-size: 18px; color: rgb(0, 0, 0);'>سائق&nbsp;</span></p>
<p><br></p>


	   </div>


       
    </div>
    {{--------------------------End of section 4 (Vice Rector's Office) -- ----------------------------}}



























    <div class="spikes"></div>



 <div class="university_council text-center pb-5 pt-2" id="rector_office">
        <div class="container pb-5 pt-1">
            <img class="mb-4" src="{{asset('uploads/frontend/images/12.png')}}" alt=""/>
            <h2 class="fw-bold main-title">اختصاصات الادارة العامة لشئون خدمة المجتمع وتنمية البيئة :ـ 

</h2>
            <p class="text-black-50 mb-5">


<p dir="RTL" style='margin: 0in; text-align: center; font-size: 16px; font-family: "Times New Roman", serif;'><strong><u><span style='font-size: 18px; font-family: "Simplified Arabic", serif; color: rgb(0, 0, 0);'>اختصاصات الادارة العامة لشئون خدمة المجتمع وتنمية البيئة :ـ&nbsp;</span></u></strong></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong><span style='font-family: "Simplified Arabic", serif;'>ــ وضع خطة زمنية للقوافل علي مدار السنة ومتابعة تنفيذها والعمل علي تلاقي أوجه القصورومشاكل التنفيذ أولا بأول&nbsp;</span></strong></span></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong><span style='font-family: "Simplified Arabic", serif;'>ــ وضع نظام الايرادات ومصروفات القوافل المتكاملة ومتابعة صرف المكافأت الخاصة بالمشاركين في القوافل&nbsp;</span></strong></span></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong><span style='font-family: "Simplified Arabic", serif;'>ــ إمساك السجلات والنماذج الخاصة بنشاط القوافل المتكاملة &nbsp;</span></strong></span></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong><span style='font-family: "Simplified Arabic", serif;'>ــ وضع الخطط والسياسات التنفيذية لبرامج متابعة الوحدات ذات الطابع الخاص والتعرف علي نتائج أنشطتها&nbsp;</span></strong></span></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong><span style='font-family: "Simplified Arabic", serif;'>ــ وضع الخطط والسياسات التنفيذية التي يقرها مجلس شئون خدمة المجتمع وتنمية البيئة في مجالات التدريب المختلفة التي تعقد بالجامعة لخدمة المجتمع&nbsp;</span></strong></span></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong><span style='font-family: "Simplified Arabic", serif;'>ــ اقتراح السياسات الخاصة بتنمية مصادر تمويل الوحدات ذات الطابع الخاص وكذا العمل علي الاستفادة القصوي من عائدها بما يؤدي إلي مواجهة أوجه نفقاتها&nbsp;</span></strong></span></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong><span style='font-family: "Simplified Arabic", serif;'>ــ التنسيق مع كافة الوحدات ذات الطابع الخاص بهدف الاعلان عن مجالات التدريب التي تعقدها الجامعة وتلقي مقترحاتهم حول تحديد نوعية البرامج اللازمة&nbsp;</span></strong></span></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong><span style='font-family: "Simplified Arabic", serif;'>ــ متابعة شئون التدريب في مجال خدمة المجتمع والعمل علي تطوير برامجه وتحديثها بما يؤدي إلي تنمية مهارات المتدربين بالقدر اللازم لتحقيق أقصي عائد إنتاجي بالتنسيق مع الوحدات المتخصصة&nbsp;</span></strong></span></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong><span style='font-family: "Simplified Arabic", serif;'>ــ متابعة الدراسات الدورية لتطوير أداء الوحدات ذات الطابع الخاص وكذا العمل علي الاستفادة القصوي من عائداتها بما يؤدي إلي مواجهة أوجه نفقاتها&nbsp;</span></strong></span></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong><span style='font-family: "Simplified Arabic", serif;'>ــ متابعة تنفيذ الاجراءات اللازمة لانشاء الوحدات ذات الطابع الخاص التي تقترحها الكليات المختلفة بمجلس الجامعة والمجلس الاعلي للجامعات&nbsp;</span></strong></span></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong><span style='font-family: "Simplified Arabic", serif;'>ويتبع الإدارة العامة لشئون خدمة المجتمع التقسيمات التنظيمية الاتية :ـ</span></strong></span></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong><span style='font-family: "Simplified Arabic", serif;'>&nbsp;</span></strong></span></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong><u><span style='font-family: "Simplified Arabic", serif;'>1- إدارة متابعة وتقييم الوحدات ذات الطابع الخاص وتختص بالاتي :ـ &nbsp;</span></u></strong></span></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong><span style='font-family: "Simplified Arabic", serif;'>ــ تنفيذ برامج متابعة الوحدات ذات الطابع الخاص والتعرف علي نتائج أنشطتها&nbsp;</span></strong></span></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong><span style='font-family: "Simplified Arabic", serif;'>ــ القيام بالدراسات الدورية لتطوير أداء الوحدات ذات الطابع الخاص بما يرفع كفاءتها في تقديم خدماتها داخل الجامعة وخارجها&nbsp;</span></strong></span></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong><span style='font-family: "Simplified Arabic", serif;'>ــ إعداد الاقتراحات الخاصة بسياسات تنمية مصادر وتمويل الوحدات ذات الطابع الخاص وكذا الاستفادة القصوي من عائداتها بما يؤدي إلي مواجهة أوجه نفقاتها&nbsp;</span></strong></span></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong><span style='font-family: "Simplified Arabic", serif;'>ــ اتخاذ الاجراءات اللازمة للعرض علي مجلس شئون خدمة المجتمع وتنمية البيئة &nbsp; ومجلس الجامعة والمجلس الاعلي للجامعات لإنشاء وحدات ذات طابع خاص جديدة&nbsp;</span></strong></span></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong><span style='font-family: "Simplified Arabic", serif;'>ــ المشاركة في إعداد اللوائح الداخلية والمالية للوحدات دات الطابع الخاص بالبنوك والتأكد من إيرادات ومصروفات هذه الوحدة&nbsp;</span></strong></span></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong><span style='font-family: "Simplified Arabic", serif;'>ــ المتابعة الدورية للمركز المالي للوحدات ذات الطابع الخاص والمشاركة في إعداد مشروعات موازنتها وحساباتها الختامية السنوية&nbsp;</span></strong></span></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong><u><span style='font-family: "Simplified Arabic", serif;'>2- إدارة المشروعات الجامعية لغير الطلاب وتختص بالاتي :ـ&nbsp;</span></u></strong></span></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong><span style='font-family: "Simplified Arabic", serif;'>متابعة المشروعات الجامعية لغير الطلاب والتأكد من قيامها علي خير وجه في تحقيق الاغراض التي أنشأت من أجلها&nbsp;</span></strong></span></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong><span style='font-family: "Simplified Arabic", serif;'>ــعرض التطورات والاقتراحات التي تؤدي إلي تنمية المشروعات الجامعية لغير الطلاب بما يؤدي علي رفع كفاءتها وتوسيع رقعة خدماتها وتحديثها&nbsp;</span></strong></span></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong><span style='font-family: "Simplified Arabic", serif;'>ــ اتخاذ إجراءات الدراسات والبحوث التي تهدف علي إنشاء مشروعات جامعية جديدة لغير الطلاب وتهدف علي خدمة المجتمع وتنمية البيئة &nbsp;وذلك بدراسة الاحتياجات البيئية وبما يتواكب مع تطورات العصر</span></strong></span></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong><span style='font-family: "Simplified Arabic", serif;'>&nbsp;</span></strong></span></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong><u><span style='font-family: "Simplified Arabic", serif;'>3- إدارة الاتصالات والمؤتمرات وتختص يالاتي :ـ</span></u></strong></span></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong><span style='font-family: "Simplified Arabic", serif;'>ــ الوقوف علي التطورات العالمية المختلفة التي تخدم المجتمع وذلك بالمشاركة في المؤتمرات والندوات&nbsp;</span></strong></span></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong><span style='font-family: "Simplified Arabic", serif;'>ـوضع الخطة السنوية للندوات والمؤتمرات التي تعقد في مجال خدمة المجتمع واعداد التقارير الخاصة بها</span></strong></span><span style='font-size: 18px; font-family: "Simplified Arabic", serif; color: rgb(0, 0, 0);'>&nbsp; &nbsp;</span></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style='font-size: 18px; font-family: "Simplified Arabic", serif; color: rgb(0, 0, 0);'>ــ تنظيم <strong>عقد الندوات والمؤتمرات</strong> <strong>التي تستهدف</strong> <strong>خدمة المجتمع وتنمية</strong> <strong>البيئة بالاشتراك مع العلاقات العامة&nbsp;</strong></span></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style='font-size: 18px; font-family: "Simplified Arabic", serif; color: rgb(0, 0, 0);'>ـ <strong>عقد الندوات والمؤتمرات</strong> <strong>بالاشتراك مع الجهات الخارجية بشأن القضايا المختلفة لدعم دور الجامعة في تنمية المجتمع&nbsp;</strong></span></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong><span style='font-family: "Simplified Arabic", serif;'>ـ التنسيق بين الكليات والوحدات التابعة للجامعة فيما يتعلق بالندوات والمؤتمرات لتفادي الازدواجية أو التضارب&nbsp;</span></strong></span></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong><span style='font-family: "Simplified Arabic", serif;'>ـ تدوين التوصيات والافكار والاقتراحات التي تصدر عن المؤتمرات والندوات التي تعقد في الجامعة في مجال خدمة المجتمع وتنمية</span></strong></span><span style='font-size: 18px; font-family: "Simplified Arabic", serif; color: rgb(0, 0, 0);'>&nbsp;<strong>البيئة ومتابعة نشرها علي الجهات المعنية ووسائل الاعلام المختلفة&nbsp;</strong></span></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong><span style='font-family: "Simplified Arabic", serif;'>ـ تنفيذ خطط وبرامج الاتصالات مع الجهات الخاصة ومراكز البحوث العالمية والعلماء المختصين في مجال خدمة المجتمع لتنظيم المؤتمرات والندوات مع الكليات المتخصصة&nbsp;</span></strong></span></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong><u><span style='font-family: "Simplified Arabic", serif;'>أعمال تحت التنفيذ&nbsp;</span></u></strong></span></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong><span style='font-family: "Simplified Arabic", serif;'>ــ طبقا للخطة السنوية تحت التنفيذ ( قوافل طبية شاملة قوافل بشرية- قوافل بيطرية&nbsp;</span></strong><strong><span style="font-family: Arial, sans-serif;">&ndash;</span></strong><strong><span style='font-family: "Simplified Arabic", serif;'>قوافل زراعية قوافل اجتماعية- قوافل اقتصاد منزلي</span></strong><strong><u><span style='font-family: "Simplified Arabic", serif;'>)&nbsp;</span></u></strong></span></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong><span style='font-family: "Simplified Arabic", serif;'>عقد ندوات ( ندوات دينية&nbsp;</span></strong><strong>&ndash;</strong><strong><span style='font-family: "Simplified Arabic", serif;'>ثقافية&nbsp;</span></strong><strong>&ndash;</strong><strong><span style='font-family: "Simplified Arabic", serif;'>&nbsp;اجتماعية&nbsp;</span></strong><strong>&ndash;</strong><strong><span style='font-family: "Simplified Arabic", serif;'>&nbsp;طبية- زراعية- توعوية- احتفالات قومية000الخ)</span></strong></span></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong><span style='font-family: "Simplified Arabic", serif;'>عقد المؤتمرات الخاصة بخدمة المجتمع وتنمية البيئة - دورات تدريبية&nbsp;</span></strong><strong>&ndash;</strong><strong><span style='font-family: "Simplified Arabic", serif;'>&nbsp;ورش عمل&nbsp;</span></strong><strong>&ndash;</strong><strong><span style='font-family: "Simplified Arabic", serif;'>&nbsp;زيارات ميدانية &nbsp;</span></strong></span></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;margin-top:0in;margin-right:-.05pt;margin-bottom:.0001pt;margin-left:-7.1pt;text-indent:-7.05pt;'><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong>1- انشاء دار حضانة لخدمة ابناء العاملين والمناطق المجاورة بأسعار رمزية&nbsp;</strong></span></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;margin-top:0in;margin-right:-.05pt;margin-bottom:.0001pt;margin-left:-7.1pt;text-indent:-7.05pt;'><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong>2- انشاء دار ضيافة لخدمة المغتربين من العاملين بالجامعة وبأسعار رمزية</strong></span></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;margin-top:0in;margin-right:-.05pt;margin-bottom:.0001pt;margin-left:-7.1pt;text-indent:-7.05pt;'><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong>3- انشاء نادي اجتماعي وملحق به دار مناسبات لخدمة العاملين وزيادة الترابط الاجتماعي بينهم&nbsp;</strong></span></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;margin-top:0in;margin-right:-.05pt;margin-bottom:.0001pt;margin-left:-7.1pt;text-indent:-7.05pt;'><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong>4- انشاء وحدة معالجة أو فلترة مياه الشرب للعاملين بالجامعة والمناطق المجاورة&nbsp;</strong></span></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;margin-top:0in;margin-right:-.05pt;margin-bottom:.0001pt;margin-left:-7.1pt;text-indent:-7.05pt;'><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong>5- انشاء وحدة اسعافات أولية في كل وحدة من وحدات الجامعة&nbsp;</strong></span></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;margin-top:0in;margin-right:-.05pt;margin-bottom:.0001pt;margin-left:-7.1pt;text-indent:-7.05pt;'><span style="font-size: 18px; color: rgb(0, 0, 0);"><strong>6- الاعداد &nbsp;لمشروع الحماية المدنية ومدي اهمية وتدريب فريق كامل في كل وحدة علي الاسعافات الاولية والاطفاء&nbsp;</strong></span></p>
<p><br></p>

	   </div>


        
    </div>



    <div class="spikes"></div>

















    {{--------------------------Start of section 5 (Vice Rector's History) --------------------------}}
    <div class="university_history" id="university_history">
        <h2 class="main-title">أسماء العاملين بالإدارة العامة لشئون خدمة المجتمع وتنمية البيئة  </h2>

        <div class="container">
            <div class="row justify-content-md-center">

                <div class="col-xs-12 col-lg-10 align-content-center">

                    <p>

</p>


<p dir="RTL" style='margin: 0in; text-align: center; font-size: 16px; font-family: "Times New Roman", serif;'><strong><span style="font-size: 21px; font-family: Arial, sans-serif; color: rgb(0, 0, 0);">أسماء العاملين بالإدارة العامة لشئون خدمة المجتمع وتنمية البيئة &nbsp;</span></strong></p>
<div align="right" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'>
    <table dir="rtl" style="width:516.0pt;margin-left:-54.2pt;border-collapse:collapse;border:none;">
        <tbody>
            <tr>
                <td style="width: 18.7pt;border: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin: 0in; text-align: right; font-size: 16px; font-family: "Times New Roman", serif;'><span style="color: rgb(0, 0, 0);"><strong><span style='font-size:19px;font-family:  "Arial",sans-serif;'>م</span></strong></span></p>
                </td>
                <td style="width: 20.3172%; border-top: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-right: none; padding: 0in 5.4pt; vertical-align: top;">
                    <p dir="RTL" style='margin: 0in; text-align: right; font-size: 16px; font-family: "Times New Roman", serif;'><span style="color: rgb(0, 0, 0);"><strong><span style='font-size:19px;font-family:  "Arial",sans-serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; الاســــــــــــــــــم</span></strong></span></p>
                </td>
                <td style="width: 18.1212%; border-top: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-right: none; padding: 0in 5.4pt; vertical-align: top;">
                    <p dir="RTL" style='margin: 0in; text-align: right; font-size: 16px; font-family: "Times New Roman", serif;'><span style="color: rgb(0, 0, 0);"><strong><span style='font-size:19px;font-family:  "Arial",sans-serif;'>&nbsp;المسمى الوظيفي &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></strong></span></p>
                </td>
                <td style="width: 220.85pt;border-top: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-right: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin: 0in; text-align: right; font-size: 16px; font-family: "Times New Roman", serif;'><span style="color: rgb(0, 0, 0);"><strong><span style='font-size:19px;font-family:  "Arial",sans-serif;'>العمل القائم به&nbsp;</span></strong></span></p>
                </td>
                <td style="width: 1.25in;border-top: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-right: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin: 0in; text-align: right; font-size: 16px; font-family: "Times New Roman", serif;'><span style="color: rgb(0, 0, 0);"><strong><span style='font-size:19px;font-family:  "Arial",sans-serif;'>الوضع الحالي&nbsp;</span></strong></span></p>
                </td>
            </tr>
            <tr>
                <td style="width: 18.7pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin: 0in; text-align: right; font-size: 16px; font-family: "Times New Roman", serif;'><span style="color: rgb(0, 0, 0);"><strong><span style='font-size:19px;font-family:"Arial",sans-serif;'>1</span></strong></span></p>
                </td>
                <td style="width: 20.3172%; border-top: none; border-left: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-right: none; padding: 0in 5.4pt; vertical-align: top;">
                    <p dir="RTL" style='margin: 0in; text-align: right; font-size: 16px; font-family: "Times New Roman", serif;'><span style="color: rgb(0, 0, 0);"><strong><span style='font-size:19px;font-family:  "Simplified Arabic",serif;'>ثروت زكريا عرفة</span></strong></span></p>
                </td>
                <td style="width: 18.1212%; border-top: none; border-left: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-right: none; padding: 0in 5.4pt; vertical-align: top;">
                    <p dir="RTL" style='margin: 0in; text-align: right; font-size: 16px; font-family: "Times New Roman", serif;'><span style="color: rgb(0, 0, 0);"><strong><span style='font-size:19px;font-family:  "Arial",sans-serif;'>مدير عام&nbsp;</span></strong></span></p>
                </td>
                <td style="width: 220.85pt;border-top: none;border-left: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-right: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin: 0in; text-align: right; font-size: 16px; font-family: "Times New Roman", serif;'><span style="color: rgb(0, 0, 0);"><strong><span style='font-size:19px;font-family:  "Arial",sans-serif;'>مدير عام خدمة المجتمع وتنمية البيئة&nbsp;</span></strong></span></p>
                </td>
                <td style="width: 1.25in;border-top: none;border-left: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-right: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin: 0in; text-align: right; font-size: 16px; font-family: "Times New Roman", serif;'><span style="color: rgb(0, 0, 0);"><strong><span style='font-size:19px;font-family:  "Arial",sans-serif;'>علي رأس العمل&nbsp;</span></strong></span></p>
                </td>
            </tr>
            <tr>
                <td style="width: 18.7pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin: 0in; text-align: right; font-size: 16px; font-family: "Times New Roman", serif;'><span style="color: rgb(0, 0, 0);"><strong><span style='font-size:19px;font-family:"Arial",sans-serif;'>2</span></strong></span></p>
                </td>
                <td style="width: 20.3172%; border-top: none; border-left: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-right: none; padding: 0in 5.4pt;">
                    <p dir="RTL" style='margin: 0in; text-align: right; font-size: 16px; font-family: "Times New Roman", serif;'><span style="color: rgb(0, 0, 0);"><strong><span style='font-size:19px;font-family:  "Simplified Arabic",serif;'>محمد مرزوق محمد غزال</span></strong></span></p>
                </td>
                <td style="width: 18.1212%; border-top: none; border-left: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-right: none; padding: 0in 5.4pt;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="color: rgb(0, 0, 0);"><strong><span style='font-size:19px;font-family:"Arial",sans-serif;'>مدير إدارة&nbsp;</span></strong></span></p>
                </td>
                <td style="width:220.85pt;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="color: rgb(0, 0, 0);"><strong><span style='font-size:19px;font-family:"Arial",sans-serif;'>مدير إدارة الوحدات ذات الطابع الخاص</span></strong></span></p>
                </td>
                <td style="width: 1.25in;border-top: none;border-left: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-right: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin: 0in; text-align: right; font-size: 16px; font-family: "Times New Roman", serif;'><span style="color: rgb(0, 0, 0);"><strong><span style='font-size:19px;font-family:  "Arial",sans-serif;'>علي رأس العمل</span></strong></span></p>
                </td>
            </tr>
            <tr>
                <td style="width: 18.7pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin: 0in; text-align: right; font-size: 16px; font-family: "Times New Roman", serif;'><span style="color: rgb(0, 0, 0);"><strong><span style='font-size:19px;font-family:"Arial",sans-serif;'>3</span></strong></span></p>
                </td>
                <td style="width: 20.3172%; border-top: none; border-left: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-right: none; padding: 0in 5.4pt;">
                    <p dir="RTL" style='margin: 0in; text-align: right; font-size: 16px; font-family: "Times New Roman", serif;'><span style="color: rgb(0, 0, 0);"><strong><span style='font-size:19px;font-family:  "Simplified Arabic",serif;'>حسين صابر شعبان</span></strong></span></p>
                </td>
                <td style="width: 18.1212%; border-top: none; border-left: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-right: none; padding: 0in 5.4pt;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="color: rgb(0, 0, 0);"><strong><span style='font-size:19px;font-family:"Arial",sans-serif;'>مدير إدارة&nbsp;</span></strong></span></p>
                </td>
                <td style="width:220.85pt;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="color: rgb(0, 0, 0);"><strong><span style='font-size:19px;font-family:"Arial",sans-serif;'>مدير إدارة الاتصالات والمؤتمرات</span></strong></span></p>
                </td>
                <td style="width: 1.25in;border-top: none;border-left: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-right: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin: 0in; text-align: right; font-size: 16px; font-family: "Times New Roman", serif;'><span style="color: rgb(0, 0, 0);"><strong><span style='font-size:19px;font-family:  "Arial",sans-serif;'>علي رأس العمل</span></strong></span></p>
                </td>
            </tr>
            <tr>
                <td style="width: 18.7pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin: 0in; text-align: right; font-size: 16px; font-family: "Times New Roman", serif;'><span style="color: rgb(0, 0, 0);"><strong><span style='font-size:19px;font-family:"Arial",sans-serif;'>4</span></strong></span></p>
                </td>
                <td style="width: 20.3172%; border-top: none; border-left: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-right: none; padding: 0in 5.4pt;">
                    <p dir="RTL" style='margin: 0in; text-align: right; font-size: 16px; font-family: "Times New Roman", serif;'><span style="color: rgb(0, 0, 0);"><strong><span style='font-size:19px;font-family:  "Simplified Arabic",serif;'>عصام ابراهيم شحاتة</span></strong></span></p>
                </td>
                <td style="width: 18.1212%; border-top: none; border-left: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-right: none; padding: 0in 5.4pt;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="color: rgb(0, 0, 0);"><strong><span style='font-size:19px;font-family:"Arial",sans-serif;'>باحث اول شئون افراد&nbsp;</span></strong></span></p>
                </td>
                <td style="width:220.85pt;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="color: rgb(0, 0, 0);"><strong><span style='font-size:19px;font-family:"Arial",sans-serif;'>باحث أول بخدمة المجتمع وتنمية البيئة&nbsp;</span></strong></span></p>
                </td>
                <td style="width: 1.25in;border-top: none;border-left: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-right: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin: 0in; text-align: right; font-size: 16px; font-family: "Times New Roman", serif;'><span style="color: rgb(0, 0, 0);"><strong><span style='font-size:19px;font-family:  "Arial",sans-serif;'>علي رأس العمل</span></strong></span></p>
                </td>
            </tr>
            <tr>
                <td style="width: 18.7pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin: 0in; text-align: right; font-size: 16px; font-family: "Times New Roman", serif;'><span style="color: rgb(0, 0, 0);"><strong><span style='font-size:19px;font-family:"Arial",sans-serif;'>5</span></strong></span></p>
                </td>
                <td style="width: 20.3172%; border-top: none; border-left: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-right: none; padding: 0in 5.4pt;">
                    <p dir="RTL" style='margin: 0in; text-align: right; font-size: 16px; font-family: "Times New Roman", serif;'><span style="color: rgb(0, 0, 0);"><strong><span style='font-size:19px;font-family:  "Simplified Arabic",serif;'>مجدي خليل محمود خطاب&nbsp;</span></strong></span></p>
                </td>
                <td style="width: 18.1212%; border-top: none; border-left: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-right: none; padding: 0in 5.4pt;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="color: rgb(0, 0, 0);"><strong><span style='font-size:19px;font-family:"Arial",sans-serif;'>مهندس زراعي أول&nbsp;</span></strong></span></p>
                </td>
                <td style="width:220.85pt;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="color: rgb(0, 0, 0);"><strong><span style='font-size:19px;font-family:"Arial",sans-serif;'>تسيير أعمال ادارة المشروعات الجامعية لغير الطلاب لحين تعيين مديراٌ لها &nbsp;</span></strong></span></p>
                </td>
                <td style="width: 1.25in;border-top: none;border-left: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-right: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin: 0in; text-align: right; font-size: 16px; font-family: "Times New Roman", serif;'><span style="color: rgb(0, 0, 0);"><strong><span style='font-size:19px;font-family:  "Arial",sans-serif;'>علي رأس العمل</span></strong></span></p>
                </td>
            </tr>
            <tr>
                <td style="width: 18.7pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin: 0in; text-align: right; font-size: 16px; font-family: "Times New Roman", serif;'><span style="color: rgb(0, 0, 0);"><strong><span style='font-size:19px;font-family:"Arial",sans-serif;'>6</span></strong></span></p>
                </td>
                <td style="width: 20.3172%; border-top: none; border-left: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-right: none; padding: 0in 5.4pt;">
                    <p dir="RTL" style='margin: 0in; text-align: right; font-size: 16px; font-family: "Times New Roman", serif;'><span style="color: rgb(0, 0, 0);"><strong><span style='font-size:19px;font-family:  "Simplified Arabic",serif;'>أمال عبده معوض</span></strong></span></p>
                </td>
                <td style="width: 18.1212%; border-top: none; border-left: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-right: none; padding: 0in 5.4pt;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="color: rgb(0, 0, 0);"><strong><span style='font-size:19px;font-family:"Arial",sans-serif;'>&nbsp;اخصائي متابعة ثالث</span></strong></span></p>
                </td>
                <td style="width:220.85pt;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="color: rgb(0, 0, 0);"><strong><span style='font-size:19px;font-family:"Arial",sans-serif;'>باحث ثالث بخدمة المجتمع وتنمية البيئة</span></strong></span></p>
                </td>
                <td style="width: 1.25in;border-top: none;border-left: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-right: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin: 0in; text-align: right; font-size: 16px; font-family: "Times New Roman", serif;'><span style="color: rgb(0, 0, 0);"><strong><span style='font-size:19px;font-family:  "Arial",sans-serif;'>علي رأس العمل</span></strong></span></p>
                </td>
            </tr>
            <tr>
                <td style="width: 18.7pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin: 0in; text-align: right; font-size: 16px; font-family: "Times New Roman", serif;'><span style="color: rgb(0, 0, 0);"><strong><span style='font-size:19px;font-family:"Arial",sans-serif;'>7</span></strong></span></p>
                </td>
                <td style="width: 20.3172%; border-top: none; border-left: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-right: none; padding: 0in 5.4pt;">
                    <p dir="RTL" style='margin: 0in; text-align: right; font-size: 16px; font-family: "Times New Roman", serif;'><span style="color: rgb(0, 0, 0);"><strong><span style='font-size:19px;font-family:  "Simplified Arabic",serif;'>عبير محمد سالم الجمال</span></strong></span></p>
                </td>
                <td style="width: 18.1212%; border-top: none; border-left: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-right: none; padding: 0in 5.4pt;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="color: rgb(0, 0, 0);"><strong><span style='font-size:19px;font-family:"Arial",sans-serif;'>كاتب شئون إدارية</span></strong></span></p>
                </td>
                <td style="width:220.85pt;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="color: rgb(0, 0, 0);"><strong><span style='font-size:19px;font-family:"Arial",sans-serif;'>العمل بمكتب المدير العام &nbsp;</span></strong></span></p>
                </td>
                <td style="width: 1.25in;border-top: none;border-left: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-right: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin: 0in; text-align: right; font-size: 16px; font-family: "Times New Roman", serif;'><span style="color: rgb(0, 0, 0);"><strong><span style='font-size:19px;font-family:  "Arial",sans-serif;'>علي رأس العمل</span></strong></span></p>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<p style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><span style="color: rgb(0, 0, 0);"><strong><span dir="RTL" style='font-size:19px;font-family:"Arial",sans-serif;'>&nbsp;</span></strong><strong><span dir="RTL" style='font-size:19px;font-family:"Arial",sans-serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></strong></span></p>
<p><br></p>
                </div>

            </div>


        </div>
    </div>
    {{--------------------------End of section 5 (Vice Rector's History) ----------------------------}}





    {{--------------------     Start of section 6 (Sub Department) -----------------------------------}}

    <div class="privacy_policy" id="privacy_policy">
        <h2>@lang('site.sub_departments')</h2>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-lg-10 align-content-center p-0">
                    <div class="box">
                        <div class="d-flex align-items-start justify-content-start">
                            <div class="col-md-3 nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                 aria-orientation="vertical">
                               <button class="nav-link active fw-bold" id="v-pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-home" type="button" role="tab"
                                        aria-controls="v-pills-home"
                                        aria-selected="true">الإدارة العامة للمزارع
                                </button>
								<button class="nav-link  fw-bold" id="v-pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-profile" type="button" role="tab"
                                        aria-controls="v-pills-profile"
                                        aria-selected="false">الإدارة العامة للمشروعات البيئية
                                </button>
								
                               
                             <!--     <button class="nav-link fw-bold" id="v-pills-messages-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-messages" type="button" role="tab"
                                        aria-controls="v-pills-messages"
                                        aria-selected="false">@lang('site.postgraduate_sub_department_3')
                                </button>-->

                            </div>
                            <div class="col-md-9 tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show fw-bold active" id="v-pills-home" role="tabpanel"
                                     aria-labelledby="v-pills-home-tab" tabindex="0">
									 
									 
									     <div class="box">
                        <ul class="s_ul nav nav-tabs pt-3 " id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link fw-bold active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home-tab-pane" type="button" role="tab"
                                        aria-controls="home-tab-pane"
                                        aria-selected="true">الإدارة العامة للمزارع
                                </button>
                            </li>
                        <!--    <li class="nav-item" role="presentation">
                                <button class="nav-link fw-bold" id="mission-tab" data-bs-toggle="tab"
                                        data-bs-target="#mission-tab-pane" type="button" role="tab"
                                        aria-controls="mission-tab-pane"
                                        aria-selected="false">درجة الماجستير
                                </button>
                            </li>
                            <li class="nav-item fw-bold" role="presentation">
                                <button class="nav-link" id="values-tab" data-bs-toggle="tab"
                                        data-bs-target="#values-tab-pane" type="button" role="tab"
                                        aria-controls="values-tab-pane"
                                        aria-selected="false">الدبلومات
                                </button>
                            </li>  -->
                             
                            <!--    <li class="nav-item" role="presentation">
                                <button class="nav-link fw-bold" id="strategic_objectives-tab" data-bs-toggle="tab"
                                        data-bs-target="#strategic_objectives-tab-pane" type="button" role="tab"
                                        aria-controls="strategic_objectives-tab-pane"
                                        aria-selected="false">@lang('site.strategic_objectives'):
                                </button>
                            </li>   -->
                        </ul>
                        <div class="s-tabs py-3 tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                 aria-labelledby="home-tab"
                                 tabindex="0">
								 
							<p dir="RTL" style='margin: 0in; text-align: center; font-size: 16px; font-family: "Times New Roman", serif;'><strong><span style="font-size:19px;">الإدارة العامة للمزارع</span></strong></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">&nbsp;</span></strong></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">تتبع الإدارة العامة للمزارع نائب رئيس الجامعة لشئون خدمة المجتمع &nbsp;وتنمية البيئة &nbsp;وتشمل الإدارة العامة للمزارع أربع إدارات&nbsp;</span></strong></p>
<ol style="list-style-type: undefined;">
    <li style="text-align: right;"><strong><span style="font-size:14.0pt;">إدارة الإنتاج النباتى&nbsp;</span></strong></li>
    <li style="text-align: right;"><strong><span style="font-size:14.0pt;">إدارة الإنتاج الحيوانى&nbsp;</span></strong></li>
    <li style="text-align: right;"><strong><span style="font-size:14.0pt;">إدارة الطب البيطرى&nbsp;</span></strong></li>
    <li style="text-align: right;"><strong><span style="font-size:14.0pt;">إدارة الشئون المالية والإدارية &nbsp;</span></strong></li>
</ol>
<p dir="RTL" style='margin-top:0in;margin-right:.5in;margin-bottom:0in;margin-left:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">وهذه الأربع إدارات ليس &nbsp;مفعل منها الا&nbsp;</span></strong></p>
<p dir="RTL" style='margin-top:0in;margin-right:.5in;margin-bottom:0in;margin-left:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><br></p>
<div style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'>
    <p><strong><span style="font-size:14.0pt;">إدارة الإنتاج النباتى&nbsp;</span></strong></p>
</div>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">&nbsp;<strong><span style="font-size:14.0pt;">إدارة الشئون المالية والإدارية&nbsp;</span></strong></span></strong></p>
<p dir="RTL" style='margin: 0in 0.5in 0in 0in; text-align: center; font-size: 16px; font-family: "Times New Roman", serif;'><strong><span style="font-size:19px;">&nbsp;</span></strong><strong><span style="font-size:19px;">الأنشطة التى تقوم بها الإدارة العامة للمزارع&nbsp;</span></strong></p>
<p dir="RTL" style='margin-top:0in;margin-right:.5in;margin-bottom:0in;margin-left:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">&nbsp;</span></strong></p>
<div style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'>
    <ol style="margin-bottom:0in;list-style-type: undefined;">
        <li style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:14.0pt;">زراعة المحاصيل الحقلية والخضر ( القمح &ndash; الفول البلدى &ndash; الفاصوليا البيضاء &ndash; البصل &ndash; الثوم &ndash; الفاصوليا الخضراء &ndash; البامية &ndash; الفلفل &ndash; الباذنجان&nbsp;</span></strong></li>
    </ol>
</div>
<p dir="RTL" style='margin-top:0in;margin-right:.5in;margin-bottom:0in;margin-left:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">&nbsp;</span></strong></p>
<div style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'>
    <ol style="margin-bottom:0in;list-style-type: undefined;">
        <li style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:14.0pt;">عمل دورات تسمين دواجن&nbsp;</span></strong></li>
    </ol>
</div>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">&nbsp;</span></strong></p>
<p dir="RTL" style='margin-top:0in;margin-right:.5in;margin-bottom:0in;margin-left:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">&nbsp;جميع منتجات الإدارة العامة للمزارع يتم بيعها للعاملين بالجامعة&nbsp;</span></strong></p>
<p dir="RTL" style='margin-top:0in;margin-right:.5in;margin-bottom:0in;margin-left:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">&nbsp;</span></strong></p>
<p dir="RTL" style='margin-top:0in;margin-right:.5in;margin-bottom:0in;margin-left:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">&nbsp;أهداف الإدارة العامة للمزارع&nbsp;</span></strong></p>
<p dir="RTL" style='margin-top:0in;margin-right:.5in;margin-bottom:0in;margin-left:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span dir="LTR" style="font-size:19px;">&nbsp;</span></strong></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">تتلخص أهداف الإدارة العامة للمزارع فى ما يلى :-</span></strong></p>
<ol style="list-style-type: undefined;">
    <li style="text-align: right;"><strong><span style="font-size:14.0pt;">إستكمال باقى المساحة من أرض 100 فدان&nbsp;</span></strong></li>
    <li style="text-align: right;"><strong><span style="font-size:14.0pt;">إنشاء وحدة من الصوب الزراعية للإنتاج الخضر المحمية&nbsp;</span></strong></li>
    <li style="text-align: right;"><strong><span style="font-size:14.0pt;">إنشاء بساتين دائمة من الأشجار المثمرة&nbsp;</span></strong></li>
    <li style="text-align: right;"><strong><span style="font-size:14.0pt;">عمل منفذ بيع دائم للإدارة العامة للمزارع&nbsp;</span></strong></li>
</ol>
<p dir="RTL" style='text-align: right; font-size: 16px; font-family: "Times New Roman", serif; margin: 0in 0.5in 10pt 0in; line-height: 115%;'><strong><span style="font-size:19px;line-height:115%;">&nbsp;</span></strong></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;margin-right:.5in;line-height:115%;'><strong><span style="font-size:19px;line-height:115%;">إنجازات الإدارة العامة للمزارع عن العام المالى 2022 &ndash; 2023&nbsp;</span></strong></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;margin-right:.5in;line-height:115%;'><strong><span style="font-size:19px;line-height:115%;">&nbsp;</span></strong></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;margin-right:.5in;line-height:115%;'><strong><span style="font-size:19px;line-height:115%;">المساحة &nbsp; المنزرعة :25 فدان&nbsp;</span></strong></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;margin-right:.5in;line-height:115%;'><strong><span style="font-size:19px;line-height:115%;">طريقة الرى : الرى بالتنقيط</span></strong></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;margin-right:.5in;line-height:115%;'><strong><span style="font-size:19px;line-height:115%;">سعة البئر :- تكفى لزراعة 40 فدان مع الاستعانة بالمولد الكهربائى فى فصل الشتاء حيث أن عدد ساعات الاضاءة تكون غير كافيىة لعملية الرى&nbsp;</span></strong></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;margin-right:.5in;line-height:115%;'><strong><span style="font-size:19px;line-height:115%;">أنواع المحاصيل المزروعة :-</span></strong></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;margin-right:.5in;line-height:115%;'><strong><span style="font-size:19px;line-height:115%;">&nbsp;</span></strong></p>
<div align="right" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'>
    <table dir="rtl" style="margin-left:.5in;border-collapse:collapse;border:none;">
        <tbody>
            <tr>
                <td style="width: 54.4pt;border: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">م&nbsp;</span></strong></p>
                </td>
                <td style="width: 163pt;border-top: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-right: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">المحصول&nbsp;</span></strong></p>
                </td>
                <td style="width: 118.35pt;border-top: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-right: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">المساحة بالفدان&nbsp;</span></strong></p>
                </td>
                <td style="width: 120.95pt;border-top: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-right: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">&nbsp;</span></strong></p>
                </td>
            </tr>
            <tr>
                <td style="width: 54.4pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">1</span></strong></p>
                </td>
                <td style="width: 163pt;border-top: none;border-left: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-right: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">الفول البلدى&nbsp;</span></strong></p>
                </td>
                <td style="width: 118.35pt;border-top: none;border-left: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-right: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">5</span></strong></p>
                </td>
                <td style="width: 120.95pt;border-top: none;border-left: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-right: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">&nbsp;</span></strong></p>
                </td>
            </tr>
            <tr>
                <td style="width: 54.4pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">2</span></strong></p>
                </td>
                <td style="width: 163pt;border-top: none;border-left: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-right: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">القمح&nbsp;</span></strong></p>
                </td>
                <td style="width: 118.35pt;border-top: none;border-left: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-right: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">3</span></strong></p>
                </td>
                <td style="width: 120.95pt;border-top: none;border-left: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-right: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">&nbsp;</span></strong></p>
                </td>
            </tr>
            <tr>
                <td style="width: 54.4pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">3</span></strong></p>
                </td>
                <td style="width: 163pt;border-top: none;border-left: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-right: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">البصل</span></strong></p>
                </td>
                <td style="width: 118.35pt;border-top: none;border-left: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-right: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">4</span></strong></p>
                </td>
                <td style="width: 120.95pt;border-top: none;border-left: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-right: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">&nbsp;</span></strong></p>
                </td>
            </tr>
            <tr>
                <td style="width: 54.4pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">4</span></strong></p>
                </td>
                <td style="width: 163pt;border-top: none;border-left: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-right: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">الثوم&nbsp;</span></strong></p>
                </td>
                <td style="width: 118.35pt;border-top: none;border-left: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-right: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">2</span></strong></p>
                </td>
                <td style="width: 120.95pt;border-top: none;border-left: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-right: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">&nbsp;</span></strong></p>
                </td>
            </tr>
            <tr>
                <td style="width: 54.4pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">5</span></strong></p>
                </td>
                <td style="width: 163pt;border-top: none;border-left: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-right: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">الفاصوليا البيضاء &nbsp; &nbsp;&nbsp;</span></strong></p>
                </td>
                <td style="width: 118.35pt;border-top: none;border-left: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-right: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">5</span></strong></p>
                </td>
                <td style="width: 120.95pt;border-top: none;border-left: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-right: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">كعروة شتوية</span></strong></p>
                </td>
            </tr>
            <tr>
                <td style="width: 54.4pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">6</span></strong></p>
                </td>
                <td style="width: 163pt;border-top: none;border-left: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-right: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">الفاصولياء البيضاء&nbsp;</span></strong></p>
                </td>
                <td style="width: 118.35pt;border-top: none;border-left: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-right: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">5</span></strong></p>
                </td>
                <td style="width: 120.95pt;border-top: none;border-left: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-right: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">كعروة صيفية</span></strong></p>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;margin-right:.5in;line-height:115%;'><strong><span style="font-size:19px;line-height:115%;">&nbsp;</span></strong></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;margin-right:.5in;line-height:115%;'><strong><span dir="LTR" style="font-size:19px;line-height:115%;">&nbsp;</span></strong></p>
<div align="right" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'>
    <table dir="rtl" style="width:486.75pt;margin-left:.5in;border-collapse:collapse;border:none;">
        <tbody>
            <tr>
                <td style="width: 54.4pt;border: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">م</span></strong></p>
                </td>
                <td style="width: 250.05pt;border-top: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-right: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">المصروفات بالجنيه&nbsp;</span></strong></p>
                </td>
                <td style="width: 182.3pt;border-top: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-right: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">الإيردات &nbsp; &nbsp; بالجنيه</span></strong></p>
                </td>
            </tr>
            <tr>
                <td style="width: 54.4pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">1</span></strong></p>
                </td>
                <td style="width: 250.05pt;border-top: none;border-left: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-right: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">سلفة بمبلغ 27550 مستلزمات انتاج نباتى&nbsp;</span></strong></p>
                </td>
                <td style="width: 182.3pt;border-top: none;border-left: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-right: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">توريد مبلغ 20000إنتاج نباتى</span></strong></p>
                </td>
            </tr>
            <tr>
                <td style="width: 54.4pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">2</span></strong></p>
                </td>
                <td style="width: 250.05pt;border-top: none;border-left: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-right: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">سلفة بمبلغ 40000تربية دواجن&nbsp;</span></strong></p>
                </td>
                <td style="width: 182.3pt;border-top: none;border-left: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-right: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">توريد مبلغ 48276 مبيعات دواجن</span></strong></p>
                </td>
            </tr>
            <tr>
                <td style="width: 54.4pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">3</span></strong></p>
                </td>
                <td style="width: 250.05pt;border-top: none;border-left: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-right: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">&nbsp;</span></strong></p>
                </td>
                <td style="width: 182.3pt;border-top: none;border-left: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-right: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">توريد مبلغ &nbsp; &nbsp; إنتاج نباتى 30000</span></strong></p>
                </td>
            </tr>
            <tr>
                <td style="width: 54.4pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">4</span></strong></p>
                </td>
                <td style="width: 250.05pt;border-top: none;border-left: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-right: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">&nbsp;</span></strong></p>
                </td>
                <td style="width: 182.3pt;border-top: none;border-left: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-right: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">توريد مبلغ 178500 إنتاج نباتى&nbsp;</span></strong></p>
                </td>
            </tr>
            <tr>
                <td style="width: 54.4pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">5</span></strong></p>
                </td>
                <td style="width: 250.05pt;border-top: none;border-left: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-right: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">&nbsp;</span></strong></p>
                </td>
                <td style="width: 182.3pt;border-top: none;border-left: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-right: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style="font-size:19px;">توريد مبلغ 200000 إنتاج نباتى</span></strong></p>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;margin-right:.5in;line-height:115%;'><strong><span dir="LTR" style="font-size:19px;line-height:115%;">&nbsp;</span></strong></p>
<p dir="RTL" style='margin: 0in 0.5in 0in 0in; text-align: right; font-size: 16px; font-family: "Times New Roman", serif; line-height: 115%;'><strong><span style="font-size:19px;line-height:115%;">وبذلك يصل إجمالى الإيرادات 476776 فقط أربعمائة وست وسبعون ألفا وسبعمائة وست وسبعون جنيها لاغير فى نهاية الموسم&nbsp;</span></strong></p>
<p dir="RTL" style='margin: 0in 0.5in 0in 0in; text-align: right; font-size: 16px; font-family: "Times New Roman", serif; line-height: 115%;'><strong><span style="font-size:19px;line-height:115%;">المساحة المتبقية : 75 فدان&nbsp;</span></strong></p>
<p dir="RTL" style='margin: 0in 0.5in 0in 0in; text-align: right; font-size: 16px; font-family: "Times New Roman", serif; line-height: 115%;'><strong><span style="font-size:19px;line-height:115%;">مقترح الإستغلا ل :</span></strong></p>
<p dir="RTL" style='margin: 0in 0in 10pt; text-align: right; font-size: 16px; font-family: "Times New Roman", serif; line-height: 115%;'><strong><span style="font-size:19px;line-height:115%;">بداية من العام القادم سوف يتم زيادة المساحة من محصول القمح الى 10 فدان &nbsp;وزراعة 5أفدنة فول بلدى و5أفدنة فاصوليا بيضاء&nbsp;</span></strong></p>
<p dir="RTL" style='margin: 0in 0in 10pt; text-align: right; font-size: 16px; font-family: "Times New Roman", serif; line-height: 115%;'><strong><span style="font-size:19px;line-height:115%;">زراعة محاصيل حقلية صيفية مثل الذرة الشامية &nbsp;- الفول الصويا &ndash; السمسم - &nbsp;عباد الشمس&nbsp;</span></strong></p>
<p dir="RTL" style='margin: 0in 0in 10pt; text-align: right; font-size: 16px; font-family: "Times New Roman", serif; line-height: 115%;'><strong><span style="font-size:19px;line-height:115%;">أهم المشاكل التى تواجه الإدارة العامة للمزارع&nbsp;</span></strong></p>
<p dir="RTL" style='margin: 0in 0in 10pt; text-align: right; font-size: 16px; font-family: "Times New Roman", serif; line-height: 115%;'><strong><span style="font-size:19px;line-height:115%;">قلة الأيدى العاملة حيث أن عدد العمال الزراعين أربع عمال فقط &nbsp;وهى لا تكفى لزراعة خمسة أفدنة فقط&nbsp;</span></strong></p>
<p dir="RTL" style='margin: 0in 0.5in 0in 0in; text-align: right; font-size: 16px; font-family: "Times New Roman", serif; line-height: 115%;'><br></p>
<p dir="RTL" style='margin: 0in 0in 10pt; text-align: center; font-size: 16px; font-family: "Times New Roman", serif; line-height: 115%;'><strong><span style="font-size:19px;line-height:115%;">خطة عمل الإدارة العامة للمزارع خلال العام المالى &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;2023-2024</span></strong></p>
<p dir="RTL" style='margin: 0in 0in 10pt; text-align: right; font-size: 16px; font-family: "Times New Roman", serif; line-height: 115%;'><strong><span style="font-size:19px;line-height:115%;">أولا :- إدارة الإنتاج النباتى :</span></strong></p>
<p dir="RTL" style='margin: 0in 0in 10pt; text-align: right; font-size: 16px; font-family: "Times New Roman", serif; line-height: 115%;'><strong><span style="font-size:19px;line-height:115%;">حيث أن الإدارة العامة للمزارع ستقوم بزرعة بعض المحاصيل الحقلية&nbsp;</span></strong></p>
<p dir="RTL" style='margin: 0in 0in 10pt; text-align: right; font-size: 16px; font-family: "Times New Roman", serif; line-height: 115%;'><strong><span style="font-size:19px;line-height:115%;">كما يلى :-</span></strong></p>
<p dir="RTL" style='margin: 0in 0in 10pt; text-align: right; font-size: 16px; font-family: "Times New Roman", serif; line-height: 115%;'><strong><span style="font-size:19px;line-height:115%;">&nbsp;</span></strong></p>
<p dir="RTL" style='margin: 0in 0in 10pt; text-align: right; font-size: 16px; font-family: "Times New Roman", serif; line-height: 115%;'><strong><span style="font-size:19px;line-height:115%;">القمح :- نظرا لنجاح تجربة زراعة القمح فى الموسم الماضى وتحقيق إنتاجية &nbsp;ذات جودة عالية فإن الإدارة العامة للمزارع سوف تتوسع فى المساحة المزروعة من القمح لتكون 10 أفدنة هذا الموسم بزيادة عن الموسم الماضى حيث كانت المساحة المنزرع 2.5 فدان فقط</span></strong></p>
<p dir="RTL" style='margin: 0in 0in 10pt; text-align: right; font-size: 16px; font-family: "Times New Roman", serif; line-height: 115%;'><strong><span style="font-size:19px;line-height:115%;">&nbsp;</span></strong></p>
<p dir="RTL" style='margin: 0in 0in 10pt; text-align: right; font-size: 16px; font-family: "Times New Roman", serif; line-height: 115%;'><strong><span style="font-size:19px;line-height:115%;">محصول الفاصوليا البيضاء : ستقوم الإدارة العامة للمزارع بزراعة مساحة 10 فدان فاصوليا بيضاء مقسمة (5 فدان فى الموسم الشتوى و5 فدان فى الموسم الصيفى )</span></strong></p>
<p dir="RTL" style='margin: 0in 0in 10pt; text-align: right; font-size: 16px; font-family: "Times New Roman", serif; line-height: 115%;'><strong><span style="font-size:19px;line-height:115%;">&nbsp;</span></strong></p>
<p dir="RTL" style='margin: 0in 0in 10pt; text-align: right; font-size: 16px; font-family: "Times New Roman", serif; line-height: 115%;'><strong><span style="font-size:19px;line-height:115%;">محصول الفول البلدى : ستقوم الإدارة العامة للمزارع بزراعة 5 فدان فول بلدى حبث بتم حصاد المحصول بعد تمام نضجه ودرسه وبيعه للسادة العاملين بالجامعة وما يتبقى يتم بيعه للتاجر جمله&nbsp;</span></strong></p>
<p dir="RTL" style='margin: 0in 0in 10pt; text-align: right; font-size: 16px; font-family: "Times New Roman", serif; line-height: 115%;'><strong><span style="font-size:19px;line-height:115%;">&nbsp;</span></strong></p>
<p dir="RTL" style='margin: 0in 0in 10pt; text-align: right; font-size: 16px; font-family: "Times New Roman", serif; line-height: 115%;'><strong><span style="font-size:19px;line-height:115%;">محاصيل الخضر : سوف يتم زراعة 3 أفدنه مقسمه كالتالى (1 فدان ثوم و 1 فدان فول أخضر و1 فدان فلفل وباذنجان وكوسه وفاصوليا خضراء )&nbsp;</span></strong></p>
<p dir="RTL" style='margin: 0in 0in 10pt; text-align: right; font-size: 16px; font-family: "Times New Roman", serif; line-height: 115%;'><strong><span style="font-size:19px;line-height:115%;">&nbsp;</span></strong></p>
<p dir="RTL" style='margin: 0in 0in 10pt; text-align: right; font-size: 16px; font-family: "Times New Roman", serif; line-height: 115%;'><strong><span style="font-size:19px;line-height:115%;">ثانيا :- إدارة الإنتاج الحيوانى&nbsp;</span></strong></p>
<p dir="RTL" style='margin: 0in 0in 10pt; text-align: right; font-size: 16px; font-family: "Times New Roman", serif; line-height: 115%;'><strong><span style="font-size:19px;line-height:115%;">سوف تقوم إدارة الإنتاج الحيوانى بعمل دورة تسمين دواجن هذا الشهر حيث قام&nbsp;</span></strong><strong><span style="font-size:19px;line-height:115%;">&nbsp;العاملون بالإدارة العامة للمزارع بغسل وتطهير عنبر الدواجن وجميع مستلزماته &nbsp;استعدادا لعمل دورة تسمين دواجن ( فراخ بيضاء )</span></strong><strong><span style="font-size:19px;line-height:115%;">وبعد الإنتهاء من هذا الدورة سوف يتم عمل دورات متتالية خلال الموسم واتباع الإجراءات اللازمة لذلك&nbsp;</span></strong></p>
<p dir="RTL" style='margin:0in;text-align:right;font-size:16px;font-family:"Times New Roman",serif;margin-bottom:10.0pt;line-height:115%;'><strong><span style="font-size:19px;line-height:115%;">&nbsp;</span></strong></p>
<p><br></p>	 
								 
								 
                            </div>
                            <div class="tab-pane fade" id="mission-tab-pane" role="tabpanel"
                                 aria-labelledby="mission-tab"
                                 tabindex="0">
								 
								 <h3 style="text-align: center; color: rgb(28, 120, 133); font-size: 24px;"><span style="color: rgb(87, 87, 87);font-size: 1em;">درجة الماجستير</span></h3>
<div style="text-align: right; color: rgb(51, 51, 51); font-size: 16px;"><br></div>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong><span style="color: rgb(87, 87, 87);font-size: 18px;"><span style="color: rgb(0, 128, 128);font-size: 1em;"><span dir="RTL" style="color: rgb(87, 87, 87);font-size: 1em;">أولا :- كلية الطب البيطري</span></span></span></strong></strong></p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="rtl" style="list-style-type: square; text-align: right;"><strong><strong>درجة الماجستير في العلوم الطبية البيطرية</strong></strong><br><br>وتشمل التخصصات الآتية (التشريح و الأجنة&nbsp;- &nbsp;الهستولوجيا - الكيمياء الحيوية و كيمياء التغذية - الفسيولوجيا -سلوكيات الحيوان و رعايته - الباثولوجي - التغذية و التغذية الإكلينيكية &ndash; الطفيليات - الفيروسات - البكتريا و الفطريات و المناعة &ndash; الأدوية - الباثولوجيا الإكلينيكية - الرقابة الصحية على الألبان و منتجاتها - الرقابة الصحية على اللحوم و منتجاتها و المخلفات الحيوانية - الطب الشرعي - صحة الحيوان و البيئة - الأمراض المشتركة - الأمراض الباطنة - الأمراض المعدية - طب و رعاية الأحياء المائية - التوليد و التناسل و التلقيح الاصطناعي - الجراحة البيطرية - أمراض الدواجن و الأرانب - الوراثة البيطرية و الهندسة الوراثية - رعاية و إنتاج الحيوان و الدواجن - الاقتصاد البيطري و إدارة المزارع الحيوان).<br>&nbsp;</li>
</ul>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong><span style="color: rgb(87, 87, 87);font-size: 18px;"><span style="color: rgb(0, 128, 128);font-size: 1em;"><span dir="RTL" style="color: rgb(87, 87, 87);font-size: 1em;">ثانيا:- معهد الدراسات والبحوث البيئية</span></span></span></strong></strong></p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="RTL" style="list-style-type: square; text-align: right;"><strong><strong>درجة الماجستير في العلوم البيئية</strong></strong><br><br>( العلوم الكيميائية &ndash; العلوم الزراعية &ndash; العلوم البيولوجية &ndash; العلوم التكنولوجية &ndash; العلوم الجيولوجية &ndash; العلوم الصحية والصيدلة &ndash; العلوم الفيزيقية &ndash; علوم المواد &ndash; الدراسات التجارية والإدارية &ndash; الدراسات التربوية والإنسانية) وذلك بكل من أقسام المعهد الثلاث.<br>&nbsp;</li>
</ul>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong><span style="color: rgb(87, 87, 87);font-size: 18px;"><span style="color: rgb(0, 128, 128);font-size: 1em;"><span dir="RTL" style="color: rgb(87, 87, 87);font-size: 1em;">ثالثا:- كلية التربية</span></span></span></strong></strong></p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="RTL" style="list-style-type: square; text-align: right;"><strong><strong>درجة الماجستير في التربية:-</strong></strong><br><br>وتشمل التخصصات الآتية ( أصول التربية &ndash; التربية المقارنة والإدارة التعليمية &ndash; طرق تدريس مادة التخصص &ndash; تخطيط وتطوير المناهج &ndash; تكنولوجيا التعليم &ndash; علم النفس التربوي &ndash; الصحة النفسية &ndash; تربية الطفل ).<br>&nbsp;</li>
</ul>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong><span style="color: rgb(87, 87, 87);font-size: 18px;"><span style="color: rgb(0, 128, 128);font-size: 1em;"><span dir="RTL" style="color: rgb(87, 87, 87);font-size: 1em;">رابعا:- كلية السياحة والفنادق</span></span></span></strong></strong></p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="RTL" style="list-style-type: square; text-align: right;"><strong><strong>درجة الماجستير في</strong></strong></li>
</ul>
<ol style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="RTL" style="list-style-type: square; text-align: right;">الإرشاد السياحي</li>
    <li dir="RTL" style="list-style-type: square; text-align: right;">الدراسات السياحية</li>
    <li dir="RTL" style="list-style-type: square; text-align: right;">الدراسات الفندقية<br>&nbsp;</li>
</ol>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong><span style="color: rgb(87, 87, 87);font-size: 18px;"><span style="color: rgb(0, 128, 128);font-size: 1em;"><span dir="RTL" style="color: rgb(87, 87, 87);font-size: 1em;">خامسا:- كلية التربية الرياضية</span></span></span></strong></strong></p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="RTL" style="list-style-type: square; text-align: right;"><strong><strong>درجة الماجستير في التربية الرياضية</strong></strong><br>&nbsp;</li>
</ul>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong><span style="color: rgb(87, 87, 87);font-size: 18px;"><span style="color: rgb(0, 128, 128);font-size: 1em;"><span dir="RTL" style="color: rgb(87, 87, 87);font-size: 1em;">سادسا:- كلية الحقوق</span></span></span></strong></strong></p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="RTL" style="list-style-type: square; text-align: right;"><strong><strong>درجة الماجستير في ( القانون العام &ndash; القانون الخاص )</strong></strong><br>&nbsp;</li>
</ul>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong><span style="color: rgb(87, 87, 87);font-size: 18px;"><span style="color: rgb(0, 128, 128);font-size: 1em;">سابعا:- كلية التجارة</span></span></strong></strong></p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="RTL" style="list-style-type: square; text-align: right;"><strong><strong>درجة الماجستير في العلوم التجارية</strong></strong><br>وتشمل التخصصات الآتية (المحاسبة - إدارة الأعمال - اقتصاد &ndash; تامين - إحصاء)<br>&nbsp;</li>
</ul>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong><span style="color: rgb(0, 128, 128);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 18px;"><span dir="RTL" style="color: rgb(87, 87, 87);font-size: 1em;">ثامنا:- معهد بحوث الهندسة الوراثية والتكنولوجيا الحيوية</span></span></span></strong></strong></p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;">يمنح معهد بحوث الهندسة الوراثية والتكنولوجيا الحيوية درجة الماجستير &nbsp;في الأقسام العلمية بالتخصصات التي تتبعها الآتية :-</p>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong>قسم البيولوجيا الجزيئية</strong></strong><strong><strong>:</strong></strong></p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;">ويضم التخصصات الفرعية التالية :</p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="rtl" style="list-style-type: square; text-align: right;">الميكروبيولوجيا الجزيئية- الطفيليات ا لجزيئية &ndash; المناعة ا لجزيئية &ndash; الباثولوجيا الجزيئية &ndash; البيولوجيا الجزيئية للخلية &ndash; الوراثة والوراثة الخلوية الجزيئية &ndash; التقسيم الجزيئي &nbsp;&ndash; التطور الجزيئي &nbsp;&ndash; الحشرات الجزيئية &ndash; بيولوجيا السرطان الجزيئية &ndash; الهندسة النسيجية &ndash; الوراثة البشرية الجزيئية &ndash; الجينومات .</li>
</ul>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong>قسم البيوتكنولوجيا الميكروبية :</strong></strong></p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="RTL" style="list-style-type: square; text-align: right;">ويضم التخصصات الفرعية التي تخدم في مجال عزل وتصنيف وحفظ وتحوير الميكروبات وراثيا وطرق استخدامها صناعيا وإعدادها للتطبيق .</li>
</ul>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong>قسم البيوتكنولوجيا النباتية :</strong></strong></p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;">ويضم التخصصات الفرعية التالية :</p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="rtl" style="list-style-type: square; text-align: right;">زراعة الخلايا والأنسجة والأعضاء النباتية- النباتات المحورة وراثيا- بيوتكنولوجيا المحاصيل البستانية - بيوتكنولوجيا محاصيل الحقل- بيوتكنولوجيا البذور.</li>
</ul>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong>قسم البيوتكنولوجيا الحيوانية :</strong></strong></p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;">ويضم التخصصات الفرعية التالية :</p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="rtl" style="list-style-type: square; text-align: right;">الحيوانات المولفة وراثيا- زراعة الخلايا والأنسجة الحيوانية- تقنيات التكاثر ( التلقيح الصناعي - الإخصاب المعملي - نقل الأجنة - الاستنساخ)- بيوتكنولوجيا الأحياء المائية .</li>
</ul>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong>قسم البيوتكنولوجيا الصناعية :</strong></strong></p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;">ويضم التخصصات الفرعية التالية:</p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="rtl" style="list-style-type: square; text-align: right;">التخمرات- الصناعات الدوائية- بيوتكنولوجيا الأغذية والألبان .</li>
</ul>
								 
                            </div>
                            <div class="tab-pane fade" id="values-tab-pane" role="tabpanel" aria-labelledby="values-tab"
                                 tabindex="0">
								 
								 
								 <h3 style="text-align: center; color: rgb(28, 120, 133); font-size: 24px;"><span style="color: rgb(87, 87, 87);font-size: 1em;">الدبلومات</span></h3>
<div style="text-align: right; color: rgb(51, 51, 51); font-size: 16px;"><br></div>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong><span style="color: rgb(87, 87, 87);font-size: 18px;"><span style="color: rgb(0, 128, 128);font-size: 1em;">أولا :- كلية الطب البيطري</span></span></strong></strong></p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="RTL" style="list-style-type: square; text-align: right;"><strong><strong>الدبلومات</strong></strong></li>
</ul>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;">وتشمل التخصصات الآتية ( التشريح والأجنة - الخلية والأنسجة - الكيمياء الحيوية وكيمياء التغذية &ndash; الفسيولوجيا &ndash; الباثولوجيا &ndash; الطفيليات &ndash; الفيروسات - البكتريا والفطريات والمناعة &ndash; الأدوية - التغذية والتغذية الإكلينيكية - الصحة والأمراض المشتركة - الرعاية وتنمية الثروة الحيوانية - الرقابة الصحية على الأغذية - الطب الشرعي والسموم والإجراءات البيطرية - الأمراض الباطنة والمعدية - طب الأحياء المائية ورعايتها - &nbsp;التوليد والتناسل والتلقيح الاصطناعي - الجراحة والتخدير والأشعة - طب الطيور والأرانب &ndash; الباثولوجيا الإكلينيكية )</p>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong><span style="color: rgb(0, 128, 128);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 18px;"><span dir="RTL" style="color: rgb(87, 87, 87);font-size: 1em;">ثانيا:- معهد الدراسات والبحوث البيئية</span></span></span></strong></strong></p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="RTL" style="list-style-type: square; text-align: right;"><strong><strong>الدبلومات</strong></strong><br>- مسوح الموارد الطبيعية في النظم البيئية<br>- تقويم الموارد الطبيعية والتخطيط لتنميتها<br>- التنمية المستديمة للبيئة وإدارة مشروعاتها<br>- الدبلومة المهنية (دبلوم السلامة والصحة المهنية)</li>
</ul>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong><span style="color: rgb(87, 87, 87);font-size: 18px;"><span style="color: rgb(0, 128, 128);font-size: 1em;">ثالثا:- كلية التربية</span></span></strong></strong></p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="RTL" style="list-style-type: square; text-align: right;"><strong><strong>الدبلومات</strong></strong><br>- الدبلوم العام في التربية<br>- الدبلوم المهنية في التربية وتشمل التخصصات الآتية (الإدارة التعليمية &ndash; الإدارة المدرسية &ndash; سياسة التعليم والتخطيط &ndash; تعليم الكبار &ndash; إدارة الفصل &ndash; التربية التعويضية &ndash; تربية الطفل &ndash; الإرشاد النفسي والتوجه التربوي &ndash; الأخصائي النفسي المدرسي &ndash; القياس النفسي والتربوي &ndash; الإشراف التربوي &ndash; تكنولوجيا التعليم &ndash; صعوبات التعلم &ndash; طرق تدريس مادة التخصص &ndash; تخطيط وتطوير التعليم &ndash; التربية الخاصة &ndash; إعداد معلم العلوم/ الرياضيات باللغة الإنجليزية &ndash; اضطرابات النطق والكلام &ndash; إعاقات عقلية وتدخلات علاجية&nbsp;<br>- الدبلوم الخاص في التربية</li>
</ul>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong><span style="color: rgb(87, 87, 87);font-size: 18px;"><span style="color: rgb(0, 128, 128);font-size: 1em;">رابعا:- كلية السياحة والفنادق</span></span></strong></strong></p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="RTL" style="list-style-type: square; text-align: right;"><strong><strong>الدبلومات</strong></strong><br>- الإرشاد السياحي<br>- الدراسات السياحية<br>- الدراسات الفندقية</li>
</ul>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong><span style="color: rgb(87, 87, 87);font-size: 18px;"><span style="color: rgb(0, 128, 128);font-size: 1em;">خامسا:- كلية التربية الرياضية</span></span></strong></strong></p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="RTL" style="list-style-type: square; text-align: right;"><strong><strong>الدبلومات</strong></strong></li>
</ul>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><span style="color: rgb(87, 87, 87);font-size: 18px;"><strong><strong><span style="color: rgb(0, 128, 128);font-size: 1em;">سادسا:- كلية الحقوق</span></strong></strong></span></p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="RTL" style="list-style-type: square; text-align: right;"><strong><strong>الدبلومات وتشمل ( القانون العام &ndash; القانون الخاص )</strong></strong></li>
</ul>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong><span style="color: rgb(87, 87, 87);font-size: 18px;"><span style="color: rgb(0, 128, 128);font-size: 1em;">سابعا:- كلية التجارة</span></span></strong></strong></p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="RTL" style="list-style-type: square; text-align: right;"><strong><strong>دبلومات الدراسات العليا</strong></strong></li>
</ul>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong>أولا:-</strong></strong>الدبلومات التطبيقية لقسم المحاسبة وتشمل (المحاسبة والمراجعة - محاسبة التكاليف &nbsp;- المحاسبة الضريبية - المحاسبة الحكومية - نظم المعلومات المحاسبية - محاسبة المؤسسات المالية ).</p>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong>ثانيا:-</strong></strong>الدبلومات التطبيقية لقسم إدارة الأعمال المحاسبة وتشمل (الإدارة العامة والمحليات &nbsp;- إدارة المستشفيات &ndash; التسويق - التنمية الإدارية - المنشات الزراعية - نظم المعلومات الإدارية - الاقتصاد الإداري - إدارة المشروعات الصغيرة).</p>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong>&nbsp;ثالثا:-</strong></strong>الدبلومات التطبيقية لقسم الاقتصاد وتشمل (الدراسات المصرفية والأسواق المالية - اقتصاديات المشروعات ودراسات الجدوى - التنمية والتخطيط الإقليمي - الاقتصاد الدولي - الاقتصاد العام - الدراسات الضريبية ).</p>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong>رابعا:-</strong></strong>الدبلومات التطبيقية في التامين وتشمل (تأمينات اجتماعية - تأمينات الحياة &ndash; تأمينات عامة ). &nbsp;</p>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong>خامسا:-</strong></strong>الدبلومات التطبيقية في الإحصاء.</p>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong><span style="color: rgb(87, 87, 87);font-size: 18px;"><span style="color: rgb(0, 128, 128);font-size: 1em;">ثامنا:- معهد بحوث الهندسة الوراثية والتكنولوجيا الحيوية</span></span></strong></strong></p>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;">يمنح معهد بحوث الهندسة الوراثية والتكنولوجيا الحيوية الدبلوم في الأقسام العلمية بالتخصصات التي تتبعها الآتية :-</p>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong>قسم البيولوجيا الجزيئية</strong></strong><strong><strong>:</strong></strong></p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;">ويضم التخصصات الفرعية التالية :</p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="rtl" style="list-style-type: square; text-align: right;">الميكروبيولوجيا الجزيئية- الطفيليات ا لجزيئية &ndash; المناعة ا لجزيئية &ndash; الباثولوجيا الجزيئية &ndash; البيولوجيا الجزيئية للخلية &ndash; الوراثة والوراثة الخلوية الجزيئية &ndash; التقسيم الجزيئي &nbsp;&ndash; التطور الجزيئي &nbsp;&ndash; الحشرات الجزيئية &ndash; بيولوجيا السرطان الجزيئية &ndash; الهندسة النسيجية &ndash; الوراثة البشرية الجزيئية &ndash; الجينومات .</li>
</ul>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong>قسم البيوتكنولوجيا الميكروبية :</strong></strong></p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;">ويضم التخصصات الفرعية التي تخدم في مجال عزل وتصنيف وحفظ وتحوير الميكروبات وراثيا وطرق استخدامها صناعيا وإعدادها للتطبيق .</p>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong>قسم البيوتكنولوجيا النباتية :</strong></strong></p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;">ويضم التخصصات الفرعية التالية :</p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="rtl" style="list-style-type: square; text-align: right;">زراعة الخلايا والأنسجة والأعضاء النباتية- النباتات المحورة وراثيا- بيوتكنولوجيا المحاصيل البستانية - بيوتكنولوجيا محاصيل الحقل- بيوتكنولوجيا البذور.</li>
</ul>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong>قسم البيوتكنولوجيا الحيوانية :</strong></strong></p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;">ويضم التخصصات الفرعية التالية :</p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="rtl" style="list-style-type: square; text-align: right;">الحيوانات المولفة وراثيا- زراعة الخلايا والأنسجة الحيوانية- تقنيات التكاثر ( التلقيح الصناعي - الإخصاب المعملي - نقل الأجنة - الاستنساخ)- بيوتكنولوجيا الأحياء المائية .</li>
</ul>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong>قسم البيوتكنولوجيا الصناعية :</strong></strong></p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;">ويضم التخصصات الفرعية التالية:</p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="rtl" style="list-style-type: square; text-align: right;">التخمرات- الصناعات الدوائية- بيوتكنولوجيا الأغذية والألبان .</li>
</ul>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;">&nbsp;</p>
								 
								 
								 


                            </div>
                            <div class="tab-pane fade" id="objectives-tab-pane" role="tabpanel"
                                 aria-labelledby="objectives-tab"
                                 tabindex="0">


                                <ul>
                                    <p dir="RTL" style="text-align: center;color: rgb(87, 87, 87);font-size: 16px;">
                                        <span style="color: rgb(255, 0, 0);font-size: 1em;"><strong><strong><span
                                                        style="color: rgb(87, 87, 87);font-size: 18px;"><span
                                                            style="color: rgb(87, 87, 87);background-color: rgb(255, 255, 255);font-size: 1em;">الغايات و الاهداف</span></span></strong></strong></span><br>&nbsp;
                                    </p>
                                    <p dir="RTL" style="text-align: justify;color: rgb(87, 87, 87);font-size: 16px;">
                                        <span style="color: rgb(255, 0, 0);font-size: 1em;"><strong><strong><span
                                                        style="color: rgb(87, 87, 87);background-color: rgb(255, 255, 255);font-size: 1em;">الغاية الأولي : منشآت جامعية تحقق القياسات المرجعية القومية</span></strong></strong><br><br><strong><strong><span
                                                        style="color: rgb(87, 87, 87);background-color: rgb(255, 255, 255);font-size: 1em;">الأهداف :</span></strong></strong></span>
                                    </p>
                                    <p dir="RTL" style="text-align: justify;color: rgb(87, 87, 87);font-size: 16px;">
                                        <strong><strong>- استكمال منشآت الجامعة و كلياتها
                                                المختلفة</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>-
                                                تطوير البني التحتية و منشآت الجامعة و كلياتها المختلفة</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>-
                                                إنشاء المستشفي الجامعي و كليات المجموعة الطبية و الكليات الغير نمطية
                                                (العلوم الصحية التطبيقية &nbsp;الهندسة التقنية و العلوم
                                                المتقدمة).</strong></strong><br><strong><strong>- استكمال الأجهزة و
                                                المعدات للقاعات و المعامل المختلفة بكليات و معاهد
                                                الجامعة</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong>
                                    </p>
                                    <p dir="RTL" style="text-align: justify;color: rgb(87, 87, 87);font-size: 16px;">
                                        &nbsp;</p>
                                    <p dir="RTL" style="text-align: justify;color: rgb(87, 87, 87);font-size: 16px;">
                                        <span style="color: rgb(255, 0, 0);font-size: 1em;"><strong><strong>الغاية الثانية : أداء متميز للموارد البشرية</strong></strong></span><br>&nbsp;
                                    </p>
                                    <p dir="RTL" style="text-align: justify;color: rgb(87, 87, 87);font-size: 16px;">
                                        <span
                                            style="color: rgb(255, 0, 0);font-size: 1em;"><strong><strong>الأهداف :</strong></strong></span>
                                    </p>
                                    <p dir="RTL" style="text-align: justify;color: rgb(87, 87, 87);font-size: 16px;">
                                        <strong><strong>- تطوير كفاءة القيادات
                                                الجامعية</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>-
                                                توفير نظم فعالة لاختيار و تعين و متابعة و تقيم القيادات الأكاديمية و
                                                الإدارية</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>-
                                                تدريب و تأهيل أعضاء هيئة التدريس و معاونيهم و
                                                الإداريين</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>-
                                                توفير بيئة محفزة و فعالة تحقق رضا القائمين علي العملية التعليمية و
                                                البحثية و الخدمية.</strong></strong></p>
                                    <p dir="RTL" style="text-align: justify;color: rgb(87, 87, 87);font-size: 16px;">
                                        &nbsp;</p>
                                    <p dir="RTL" style="text-align: justify;color: rgb(87, 87, 87);font-size: 16px;">
                                        <span style="color: rgb(255, 0, 0);font-size: 1em;"><strong><strong>الغاية الثالثة : التميز الفكري و المهني و البحثي</strong></strong></span>
                                    </p>
                                    <p dir="RTL" style="text-align: justify;color: rgb(87, 87, 87);font-size: 16px;">
                                        <br><span
                                            style="color: rgb(255, 0, 0);"><strong><strong>الأهداف :</strong></strong></span>
                                    </p>
                                    <p dir="RTL" style="text-align: justify;color: rgb(87, 87, 87);font-size: 16px;">
                                        <br><strong><strong>&nbsp;- استحداث برامج جديدة تحقق ميزة تنافسية
                                                للخريج</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>&nbsp;-
                                                التطوير المستمر للبرامج التعليمية الأكاديمية بما يواكب سوق
                                                العمل</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>&nbsp;-
                                                دعم الخدمات و الأنشطة الطلابية</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>&nbsp;-
                                                المراجعة وتحديث استراتيجيات التعليم و التعلم وأساليب
                                                التطوير</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>&nbsp;-
                                                تطوير البحث العلمي للجامعة للمساهمة في حل مشكلات
                                                المجتمع</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>-
                                                توفير بيئة محفزة للبحث العلمي</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.<br>&nbsp;</span></strong></strong><strong><strong>&nbsp;-
                                                استحداث و تطوير الدوريات العلمية لتتلائم مع التصنيف
                                                العالمي</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong>
                                    </p>
                                    <p dir="RTL" style="text-align: justify;color: rgb(87, 87, 87);font-size: 16px;">
                                        &nbsp;</p>
                                    <p dir="RTL" style="text-align: justify;color: rgb(87, 87, 87);font-size: 16px;">
                                        <span style="color: rgb(255, 0, 0);font-size: 1em;"><strong><strong>الغاية الرابعة : كسب ثقة المجتمع و تعزيز المكانة الدولية للجامعة</strong></strong><br><br><strong><strong>الأهداف :</strong></strong></span><br><br><strong><strong>&nbsp;-
                                                تنويع مجالات التعاون مع مؤسسات المجتمع بما يحقق
                                                متطلباتها</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>&nbsp;-
                                                استحداث و تطوير وحدات خدمة وتنمية
                                                المجتمع</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>&nbsp;-&nbsp;</strong></strong>
                                        <strong><strong>تطوير خطط وبرامج التنمية البيئية و خدمة
                                                المجتمع</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>&nbsp;-
                                                دعم البحوث التطبيقية لخدمة قضايا المجتمع و
                                                مشكلاته</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>&nbsp;-
                                                دعم و تعزيز الشراكات المحلية و الدولية</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>&nbsp;-&nbsp;</strong></strong>
                                        <strong><strong>إتباع نظم من شانها دعم متطلبات التصنيفات
                                                العالمية</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong>
                                    </p>
                                    <p dir="RTL" style="text-align: justify;color: rgb(87, 87, 87);font-size: 16px;">
                                        &nbsp;</p>
                                    <p dir="RTL" style="text-align: justify;color: rgb(87, 87, 87);font-size: 16px;">
                                        <span style="color: rgb(255, 0, 0);font-size: 1em;"><strong><strong>الغاية الخامسة : جامعة رقمية</strong></strong><br><br><strong><strong>الأهداف :</strong></strong></span>
                                    </p>
                                    <p dir="RTL" style="text-align: justify;color: rgb(87, 87, 87);font-size: 16px;">
                                        <strong><strong>- تطوير البوابة
                                                الإلكترونية</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>-&nbsp;</strong></strong>
                                        <strong><strong>تطوير الشبكة الإلكترونية البيئية و الداخلية لإدارة الجامعة و
                                                الكليات و المعاهد</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>-&nbsp;</strong></strong>
                                        <strong><strong>التوسع في التعليم الإلكتروني و التعلم عن
                                                بعد</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>-
                                                تفعيل نظام إدارة المعلومات</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">&nbsp;MIS.</span></strong></strong><br><strong><strong>-
                                                تفعيل استخدام المكتبة الرقمية</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>-
                                                التدريب علي تكنولوجيا المعلومات</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong>
                                    </p>
                                    <p dir="RTL" style="text-align: justify;color: rgb(87, 87, 87);font-size: 16px;">
                                        &nbsp;</p>
                                    <p dir="RTL" style="text-align: justify;color: rgb(87, 87, 87);font-size: 16px;">
                                        <span style="color: rgb(255, 0, 0);font-size: 1em;"><strong><strong>الغاية السادسة : أعلاء القيم و الأخلاقيات بالجامعة</strong></strong><br><br><strong><strong>الأهداف :</strong></strong></span>
                                    </p>
                                    <p dir="RTL" style="text-align: justify;color: rgb(87, 87, 87);font-size: 16px;">
                                        <strong><strong>&nbsp;- تأصيل وإتباع حماية حقوق الملكية
                                                الفكرية</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>&nbsp;-
                                                &nbsp;الالتزام بأخلاقيات المهنة و القيم
                                                الجامعية</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>-
                                                تفعيل القوانين ووضع قواعد المساءلة و
                                                المحاسبة</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>-
                                                حماية و تعزيز الحرية الأكاديمية في إطار القيم والأعراف
                                                الاجتماعية</strong></strong></p>

                                </ul>
                            </div>
                            <!--           <div class="tab-pane fade" id="strategic_objectives-tab-pane" role="tabpanel"
                                            aria-labelledby="strategic_objectives-tab"
                                            tabindex="0">




                                           <ul>
                                               <li>1 - aaa</li>
                                               <li>1 - aaa</li>
                                               <li>1 - aaa</li>

                                           </ul>
                                       </div>     -->
                        </div>
                    </div>


								   
                                </div>
                                <div class="tab-pane fade fw-bold" id="v-pills-profile" role="tabpanel"
                                     aria-labelledby="v-pills-profile-tab" tabindex="0">
									 
									 
									 <p dir="RTL" style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;text-align:center;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'><strong><u><span style='font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'>الإدارة العامة للمشروعات البيئية</span></u></strong></p>
<p dir="RTL" style="margin: 0in 0in 8pt; text-align: center; line-height: 115%; font-size: 15px; font-family: Calibri, sans-serif;"><span style='font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'>هي إدارة عامة تتبع السيد الأستاذ الدكتور/ نائب رئيس الجامعة لشئون خدمة المجتمع وتنمية البيئة وتقوم الإدارة بدور حيوي وهام لخدمة المجتمع وتنمية البيئة حيث تقوم بتنفيذ خطة القطاع وتطبيق رسالته التي أنشئ من أجلها.</span></p>
<p dir="RTL" style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;text-align:right;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif;'><strong><u>أولا: الهيكل التنظيمي للادارة:&nbsp;</u></strong></span></p>
<p dir="RTL" style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;text-align:right;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif;'><br></span></p>
<table style="width: 100%">
    <tbody>
        <tr>
            <td>
                <div style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;text-align:right;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>
                    <p dir="RTL" style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;text-align:center;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif;'><strong><span style="line-height: 115%;">نائب رئيس الجامعة لشئون خدمة المجتمع وتنمية البيئة الالبيئة</span></strong></span></p>
                </div>
            </td>
        </tr>
    </tbody>
</table>
<table style="width: 100%">
    <tbody>
        <tr>
            <td>
                <div style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;text-align:right;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>
                    <p dir="RTL" style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;text-align:center;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif;'><strong><span style="line-height: 115%;">إدارة تخطيط البرامج وتنفيذ المشروعات البيئية &nbsp; &nbsp; &nbsp; &nbsp;المشروعات البيئية &nbsp;&nbsp;</span></strong></span></p>
                </div>
            </td>
        </tr>
    </tbody>
</table>
<table style="width: 100%">
    <tbody>
        <tr>
            <td>
                <div style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;text-align:right;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>
                    <p dir="RTL" style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;text-align:center;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif;'><strong><span style="line-height: 115%;">إدارة متابعة تنفيذ المشروعات البيئية</span></strong></span></p>
                </div>
            </td>
        </tr>
    </tbody>
</table>
<table style="width: 100%">
    <tbody>
        <tr>
            <td>
                <div style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;text-align:right;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>
                    <p dir="RTL" style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;text-align:center;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif;'><strong><span style="line-height: 115%;">الإدارة العامة للمشروعات البيئية</span></strong></span></p>
                </div>
            </td>
        </tr>
    </tbody>
</table>
<p style="text-align: right;"><span style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif;'>&nbsp;</span><span style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif;'><strong><u>ثانيا: التعريف بالادارة:&nbsp;</u></strong></span></p>
<p dir="RTL" style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;text-align:right;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif;'><strong><u>مهام وظيفة الإدارة العامة للمشروعات البيئية&nbsp;</u></strong></span></p>
<p dir="RTL" style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;text-align:right;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'>&nbsp; &nbsp; - &nbsp;تخضع للتوجيه العام لنائب رئيس الجامعة لشئون خدمة المجتمع</span><span style='font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0); font-size: 18px;'>&nbsp;</span><span style='font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'>وتنمية البيئة.</span></p>
<p dir="RTL" style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;text-align:right;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'>-&nbsp;الأشراف على وضع المعايير والقواعد التي تتبع في أعداد خطط وبرامج المساهمة في تنمية وتحديد وأولوياتها&nbsp;- --&nbsp;الأشراف على تنسيق العمل مع الوحدات المختصة والعاملة بالجامعة في هذا المجال بهدف تنظيم قوعد البيانات والمعلومات الازمة لجراء الدراسات التحليلية لتحديد مشاكل البيئة الاقتصادية والاجتماعية وتحديد دور الجامعة في حلها</span></p>
<p dir="RTL" style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;text-align:right;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'>- الأشراف على تنسيق العمل مع الكليات بشأن وضع الخطط الازمة لمعالجة مشاكل البيئة الصناعية والزراعية والخدمية والبشرية والاجتماعية وغيرها من المشاكل البيئية&nbsp;</span></p>
<p dir="RTL" style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;text-align:right;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'>- الأشراف على وضع الخطط البيئية في المجالات المختلفة في ضوء السياسات القومية للدولة&nbsp;</span></p>
<p dir="RTL" style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;text-align:right;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'>- الأشراف على وضع البرامج التنفيذية اللازمة لتطبيق خطط الجامعة في تنمية البيئة وتحديد الأساليب العلمية والعملية لتنفيذها</span></p>
<p dir="RTL" style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;text-align:right;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'>- متابعة أداء تنفيذ البرامج التنفيذية البيئية بالتنسيق مع كليات الجامعة ومع المنظمات المستفيدة في البيئة وتوجيه الاقتراحات الخاصة بحل العوائق والمشاكل التي تعترض تنفيذها وفقا للخطط الموضوعة&nbsp;</span></p>
<p dir="RTL" style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;text-align:right;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'>- تنظيم عمل الاتصال بالهيئات والمراكز العلمية سواء الدولية أو المحلية العاملة في مجال &nbsp; مشروعات البيئة</span></p>
<p dir="RTL" style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;text-align:right;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'>- الأشراف على تدعيم علاقة الجامعة بالهيئات والمراكز المتخصصة باقتراح خطط مشاركة الجامعة ووحداتها في المؤتمرات والندوات التي تنظمها المنظمات الدولية والمحلية&nbsp;</span></p>
<p dir="RTL" style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;text-align:right;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'>&nbsp;</span></p>
<p dir="RTL" style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;text-align:right;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'>- المساهمة في اقتراح التشريعات المنظمة للبيئة&nbsp;</span></p>
<p dir="RTL" style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;text-align:right;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'>10-المساهمةفي اقتراح السبل التي من شأنها الاهتمام بتنمية البيئة سواء كان ذلك ممثلا في الأعياد والبرامج الإعلامية والمسابقات&nbsp;</span><span style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif;'><strong><u>وتنقسم الإدارة العامة للمشروعات البيئية إلى إدارتين همـا :</u></strong></span><span style='font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'>&nbsp;</span></p>
<div style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;text-align:right;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>
    <ol style="margin-bottom:0in;list-style-type: undefined;">
        <li style='margin: 0in 0in 10pt; text-align: right; line-height: 115%; font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'><strong><u><span style="line-height: 107%;">إدارة تخطيط البرامج وتنفيذ المشروعات البيئية&nbsp;</span></u></strong><strong><u><span style="line-height: 107%;">:</span></u></strong></li>
    </ol>
</div>
<p dir="RTL" style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;text-align:right;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'>&nbsp;<strong>مهام وظيفة إدارة تخطيط البرامج وتنفيذ المشروعات البيئية</strong></span></p>
<ul style="list-style-type: undefined;margin-left:-0.5in;">
    <li style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif; text-align: right;'><span style="line-height: 107%;">تخضع لتوجيه المدير العام للمشروعات البيئية.. وتقوم بالأعمال الآتية:</span></li>
    <li style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif; text-align: right;'><span style="line-height: 107%;">الإشراف على وضع الخطط المتعلقة بالمشروعات البيئية المختلفة وكذا البرامج التنفيذية اللازمة لتنفيذ تلك &nbsp; &nbsp; الخطط من جانب الجامعة لتنمية البيئة في المجالات المختلفة.</span></li>
    <li style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif; text-align: right;'><span style="line-height: 107%;">الاشتراك مع الأجهزة المحلية لتنمية الإنتاج الصناعي والزراعي وتطوير الأنشطة التجارية والخدمية وتنمية&nbsp;</span></li>
    <li style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif; text-align: right;'><span style="line-height: 107%;">القوى البشرية في الجهات الحكومية وغير الحكومية في إقليم الجامعة وذلك في ضوء خطة الجامعة لتنمية البيئة.</span></li>
    <li style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif; text-align: right;'><span style="line-height: 107%;">العمل على توفير المعلومات الكافية من مصادر البيئة الخارجية التي يمكن الاستفادة بها في إجراء الدراسات &nbsp; &nbsp; والبحوث البيئية المختلفة.</span></li>
    <li style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif; text-align: right;'><span style="line-height: 107%;">&nbsp;بحث مشاركة أعضاء هيئة التدريس في أنشطة المشاريع البيئية وتوفير التسهيلات والإمكانيات اللازمة لضمان تلك المشاركة.</span></li>
    <li style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif; text-align: right;'><span style="line-height: 107%;">التعاون مع كافة الجهات المعنية بشئون تنمية البيئة وحمايتها.</span></li>
</ul>
<ol style="list-style-type: undefined;">
    <li style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif; text-align: right;'><strong><u><span style="line-height: 107%;">إدارة متابعة تنفيذ المشروعات البيئية:</span></u></strong></li>
</ol>
<p dir="RTL" style='margin-top:0in;margin-right:.25in;margin-bottom:8.0pt;margin-left:0in;text-align:right;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif;'><strong>مهام وظيفة إدارة متابعة تنفيذ المشروعات البيئية</strong></span></p>
<ul style="list-style-type: undefined;margin-left:-0.5in;">
    <li style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif; text-align: right;'><span style="line-height: 107%;">وتخضع لتوجيه المدير العام للمشروعات البيئية.. وتقوم بالأعمال الآتية:</span></li>
    <li style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif; text-align: right;'><span style="line-height: 107%;">الإشراف على إعداد القرارات والتعليمات اللازمة لتنفيذ خطط الجامعة الخاصة بالمشروعات البيئية بما يحقق التنفيذ السليم لتلك الخطط وكذا وضع القواعد والأسس اللازمة لمتابعة التنفيذ.</span></li>
    <li style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif; text-align: right;'><span style="line-height: 107%;">الإشراف على تنظيم وإجراء المتابعة الميدانية للمشروعات البيئية وتسجيل نتائج التنفيذ في مراحله المختلفة ومقارنتها بالمعايير المقررة لتحديد درجات الانحراف في التنفيذ ومدى سلامة الإجراءات ومعالجة هذا الانحراف&nbsp;</span></li>
    <li style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif; text-align: right;'><span style="line-height: 107%;">تحري مشاكل وصعوبات تنفيذ المشروعات البيئية والعمل على مواجهتها مباشرة بتقديم المقترحات والتوجيهات اللازمة لحلها.</span></li>
    <li style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif; text-align: right;'><span style="line-height: 107%;">متابعة الاتفاق المالي والاستثماري المقرر للمشروعات البيئية مع وضع التنظيم اللازم لذلك&nbsp;</span></li>
    <li style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif; text-align: right;'><span style="line-height: 107%;">تلقي التقارير الفنية من أجهزة الجامعة المختلفة في شأن المشروعات البيئية وتحليل نتائج المتابعة وإعداد التقارير اللازمة بشأنها وإبلاغها للجهات المعنية.</span></li>
    <li style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif; text-align: right;'><span style="line-height: 107%;">الإشراف على أعمال تصميم واستيفاء استمارات متابعة المشروعات البيئية وإمساك السجلات اللازمة لذلك وإعداد التقارير اللازمة من واقعها.</span></li>
    <li style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif; text-align: right;'><span style="line-height: 107%;">تقييم المشروعات البيئية التي تتولاها الجامعة وإعداد التقارير الدورية عن مدى النجاح في تنفيذها.</span></li>
</ul>
<p dir="RTL" style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;text-align:right;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'>&nbsp;</span></p>
<p dir="RTL" style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;text-align:right;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'>.</span><span style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif;'><strong><u>ثانيا : بعض أنشطة الإدارة العامة للمشروعات:</u></strong></span></p>
<div style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;text-align:right;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>
    <ol style="margin-bottom:0in;list-style-type: undefined;">
        <li style='margin: 0in 0in 10pt; text-align: right; line-height: 115%; font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'><strong><u><span style="line-height: 107%;">محو الأمية وتعليم الكبار:</span></u></strong></li>
    </ol>
</div>
<p dir="RTL" style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;text-align:right;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'>يهدف مشروع محو أمية العمال بالجامعة لتحقيق رؤية مصر 2030م بلا أمية بالتعاون مع الهيئة العامة لمحو الأمية وبعض الجمعيات الأهلية</span></p>
<div style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;text-align:right;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>
    <ol style="margin-bottom:0in;list-style-type: undefined;">
        <li style='margin: 0in 0in 10pt; text-align: right; line-height: 115%; font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'><strong><u><span style="line-height: 107%;">مشروعات تنموية للتنمية الشاملة وخدمة المجتمع:</span></u></strong></li>
    </ol>
</div>
<p dir="RTL" style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;text-align:right;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'>حيث تقوم الادارة العامة للمشروعات البيئية بتنظيم وتنفيذ العديد من المشروعات التنموية البيئية المتكاملة في قري محافظتي المنوفية والبحيرة والتي تقع في نطاق الجامعة بالتعاون مع العديد من الجهات والهيئات الحكومية المختلفة ووحدات الجامعة المختلفة ومنها مؤسسة حياة كريمة والمجلس القومي للمرأة والمجلس القومي للسكان ووزارة&nbsp;</span></p>
<p dir="RTL" style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;text-align:right;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'>الاوقاف ومديرية الطب البيطري ووزارة التموين وصندوق مكافحة وعلاج الإدمان التابع لمجلس الوزراء والاستعانة بأستاذة متخصصين من كليات الجامعة (كلية التجارة لعمل ندوات عن الاقتصاد وكيفية تنميته وكذلك من كلية التربية لزيادة الوعي والتثقيف النفسي والاجتماعي وغيرها من الجهات.</span></p>
<ul style="list-style-type: undefined;">
    <li style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif; text-align: right;'><strong><u><span style="line-height: 107%;">وتهدف هذه المشروعات التنموية البيئية الي</span></u></strong></li>
    <li style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif; text-align: right;'><span style="line-height: 107%;">تنمية الوعي الصحي والوصول بالخدمات للفئات المحرومة وكذلك المساهمة في بدأ مشروعات صغيرة تعمل على تنمية دخل الاسر الفقيرة والتمكين الاقتصادي للمرأة</span></li>
    <li style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif; text-align: right;'><span style="line-height: 107%;">حيث يشتمل المشروع التنموي على جانبين (جانب توعوي &ndash; جانب صحي)</span></li>
    <li style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif; text-align: right;'><strong><u><span style="line-height: 107%;">الجانب التوعوي</span></u></strong><span style="line-height: 107%;">&nbsp;ويشمل القاء العديد من الندوات في المجالات المختلفة منها&nbsp;</span></li>
    <li style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif; text-align: right;'><span style="line-height: 107%;">الصحة العامة مثل التغذية السليمة (التغذية والمناعة &ndash; تغذية الاطفال &ndash; تغذية الام الحامل&ndash; &nbsp; تغذية أطفال المدارس &ndash; التغذية وصحة العظام &ndash; التغذية وصحة الجهاز الهضمي)&nbsp;</span></li>
    <li style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif; text-align: right;'><span style="line-height: 107%;">كذلك تتضمن الندوات القاء محاضرات عن صحة الاسرة النفسية والاجتماعية مثل</span></li>
    <li style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif; text-align: right;'><span style="line-height: 107%;">القضية السكانية &nbsp; &ndash; تعليم الكبار</span></li>
    <li style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif; text-align: right;'><span style="line-height: 107%;">مكافحة العنف ضد المرأة&nbsp;</span></li>
    <li style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif; text-align: right;'><span style="line-height: 107%;">كيفية التعامل مع الطفل&nbsp;</span></li>
    <li style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif; text-align: right;'><span style="line-height: 107%;">الانتماء &ndash; الارهاب وتأثيره على المجتمع&nbsp;</span></li>
    <li style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif; text-align: right;'><span style="line-height: 107%;">التلوث والمحافظة على البيئة&nbsp;</span></li>
    <li style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif; text-align: right;'><span style="line-height: 107%;">المبادرات الرئاسية التي تهتم بالبيئة&nbsp;</span></li>
    <li style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif; text-align: right;'><span style="line-height: 107%;">التوعية بأضرار المخدرات ومكافحتها&nbsp;</span></li>
    <li style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif; text-align: right;'><span style="line-height: 107%;">غرس القيم والاخلاق الحميدة في نفوس الابناء - الاخلاق الكريمة وبناء الاسرة المصرية&nbsp;</span></li>
    <li style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif; text-align: right;'><span style="line-height: 107%;">أهمية العمل للفرد والمجتمع - محو الامية الالكترونية - ترشيد الاستهلاك (طاقة &ndash; مياه)</span></li>
    <li style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif; text-align: right;'><span style="line-height: 107%;">ندوات توعية عن كل ما يستجد على الساحة القومية من قضايا تخص الجانب الاجتماعي والنفسي.</span></li>
</ul>
<p dir="RTL" style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;text-align:right;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif;'><strong><u>- الجانب الصحي</u></strong></span><span style='font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'>&nbsp;ويشمل الكشف الطبي في مختلف التخصصات (باطنة &ndash; عظام &ndash; جلدية &ndash; نساء وتوليد &ndash; رمد &ndash; &nbsp;&nbsp;</span></p>
<p dir="RTL" style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;text-align:right;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; أطفال &ndash; أنف وأذن) &nbsp;</span></p>
<div style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;text-align:right;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>
    <ol style="margin-bottom:0in;list-style-type: undefined;">
        <li style='margin: 0in 0in 10pt; text-align: right; line-height: 115%; font-size: 18px; font-family: "Times New Roman", Times, serif; color: rgb(0, 0, 0);'><strong><span style="line-height: 107%;">كما تقوم الإدارة ب</span></strong><strong><span style="line-height: 107%;">تنظيم وتنفيذ</span></strong><strong><span style="line-height: 107%;">&nbsp;دورات تدريبية في الاسعافات الأولية</span></strong></li>
    </ol>
</div>
<p dir="RTL" style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;text-align:right;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif;'><strong>&nbsp;</strong></span></p>
<ol style="list-style-type: undefined;">
    <li style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif; text-align: right;'><strong><span style="line-height: 115%;">كما تقوم الإدارة بتنظيم وتنفيذ دورات تدريبية بالتعاون مع وحدات الجامعة المختلفة وذلك لتنمية مهارات الطلاب والمجتمع الخارجي لمواكبة سوق العمل مثل</span></strong> <strong><span style="line-height: 115%;">&quot;استخلاص وتقطير الزيوت من النباتات الطبية والعطرية&quot; &ndash; ريادة الاعمال &ndash; تربية الدواجن وغيرها</span></strong></li>
    <li style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif; text-align: right;'><strong><span style="line-height: 107%;">كما تقوم الإدارة ب</span></strong><strong><span style="line-height: 107%;">تنظيم وتنفيذ</span></strong><strong><span style="line-height: 107%;">&nbsp;</span></strong><strong><span style="line-height: 107%;">ندوات بوحدات الجامعة في المجالات المختلفة منها&nbsp;</span></strong><strong><span style="line-height: 107%;">الجوانب الاقتصادية مثل -&nbsp;</span></strong><span style="line-height: 107%;">تمكين المرأة اقتصاديا<strong>&nbsp;</strong>والارشاد الزراعي والزراعة العضوية وتأثيرها على صحة الانسان.</span></li>
    <li style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif; text-align: right;'><span style="line-height: 107%;">&nbsp;الاستعانة ببعض المتخصصين لتعليم حرفة أو مهنة لزيادة دخل الاسرة&nbsp;</span></li>
    <li style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif; text-align: right;'><span style="line-height: 107%;">كذلك كيفية عمل دراسة جدوى لبدأ مشروع انتاج حيواني أو داجني او تربية الارانب</span></li>
    <li style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif; text-align: right;'><strong><span style="line-height: 107%;">كما تقوم الإدارة ب</span></strong><strong><span style="line-height: 107%;">تنظيم وتنفيذ&nbsp;</span></strong><strong><span style="line-height: 107%;">مشاريع بيئية مثل مشروع تدوير المخلفات لإعادة استخدامها والحفاظ على البيئة</span></strong></li>
    <li style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif; text-align: right;'><strong><span style="line-height: 107%;">كما تقوم الإدارة با</span></strong><strong><span style="line-height: 107%;">لاتصال بالشركات وقطاع الأعمال والمستثمرين والبنوك بالجامعة من أجل تقديم بعض الخدمات وفرص العمل المناسبة للطلاب.</span></strong><span style='color: rgb(0, 0, 0); font-size: 18px; font-family: "Times New Roman", Times, serif;'><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</strong></span></li>
</ol>
<p><strong><span style="line-height: 107%;">الاشتراك في تنفيذ المبادرات البيئية المختلفة التي تتبناها الدولة والجامعة مثل مبادرة اتحضر للأخضر -مبادرة مليون شجرة &ndash; صنايعية مصر- مبادرة حياة كريمة &nbsp;وغيرها</span></strong></p>
<p><strong><span style="line-height: 107%;">المساهمة في معالجة ونشر الوعي بأهمية بعض القضايا المجتمعية مثل المشكلة السكانية &ndash; ختان الاناث .......... الخ &nbsp;</span></strong></p>
<p><br></p>
									 
									 
									 
<p></p>
									 
									 
									 
									 
									 
                                </div>
                                <div class="tab-pane fade fw-bold" id="v-pills-messages" role="tabpanel"
                                     aria-labelledby="v-pills-messages-tab" tabindex="0">تنظم أحكام هذة اللائحة "
                                    اللائحة الداخلية للمكتبات " التصرفات المالية ولإدارية للمكتبات الجامعية بجامعة مدنية
                                    السادات

                                    والمنشأة طبقا للمادة / (10) من اللائحة التنفيذية لقانون تنظيم الجامعات رقم 49 لسنة
                                    1972 الصادر بقرار رئيس الجمهورية رقم 809 بسنة 1975 وموافقة كل لجنة المكتبات بجلستها
                                    رقم (1) بتاريخ 22/9/2013 ومجلس الجامعة بجلستة رقم (1) المنعقدة بتاريخ 25/9/2013
									
									
									
									
									    <div class="box">
                        <ul class="s_ul nav nav-tabs pt-3 " id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link fw-bold active" id="home-tab1" data-bs-toggle="tab"
                                        data-bs-target="#home-tab-pane1" type="button" role="tab"
                                        aria-controls="home-tab-pane"
                                        aria-selected="true">كلمة السيد / مدير عام مكتبات جامعة مدينة السادات 
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link fw-bold" id="mission-tab1" data-bs-toggle="tab"
                                        data-bs-target="#mission-tab-pane1" type="button" role="tab"
                                        aria-controls="mission-tab-pane1"
                                        aria-selected="false">المكتبة المركزية
                                </button>
                            </li>
                            <li class="nav-item fw-bold" role="presentation">
                                <button class="nav-link" id="values-tab" data-bs-toggle="tab"
                                        data-bs-target="#values-tab-pane1" type="button" role="tab"
                                        aria-controls="values-tab-pane"
                                        aria-selected="false">أهداف المكتبات الجامعية

                                </button>
                            </li>
                            <li class="nav-item fw-bold" role="presentation">
                                <button class="nav-link" id="objectives-tab1" data-bs-toggle="tab"
                                        data-bs-target="#objectives-tab-pane1" type="button" role="tab"
                                        aria-controls="objectives-tab-pane1"
                                        aria-selected="false">اختصاصات لجنة المكتبات
                                </button>
                            </li>
                            <!--    <li class="nav-item" role="presentation">
                                <button class="nav-link fw-bold" id="strategic_objectives-tab" data-bs-toggle="tab"
                                        data-bs-target="#strategic_objectives-tab-pane" type="button" role="tab"
                                        aria-controls="strategic_objectives-tab-pane"
                                        aria-selected="false">@lang('site.strategic_objectives'):
                                </button>
                            </li>   -->
                        </ul>
                        <div class="s-tabs py-3 tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home-tab-pane1" role="tabpanel"
                                 aria-labelledby="home-tab1"
                                 tabindex="0">
								 
								 <p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;">جامعة مدينة السادات جامعة حديثة تهدف إلي تطوير خدمات البحث العلمي من خلال تقديم أبحاث متطورة حيث تلعب الجامعات المصرية دوراً عظيماً في تطوير الابحاث العلمية والمساعدة علي أحدث الاكتشافات والاختراعات الحديثة .</p>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;">ومكتبات جامعة مدينة السادات تلعب دوراً أساسياً وهاماً في تقديم الخدمات البحثية المتطورة لمجتمع المستفيدين بالجامعة من خلال تزويد محتوياتها بأحدث الكتب والمراجع والإصدارات الحديثة من الدوريات العلمية والاشتراك في أحدث قواعد البيانات العالمية وتبادل المطبوعات بين مكتبات الجامعة والجامعات الاخري بالداخل والخارج والاهداءات الواردة إلي مكتبات الجامعة من كافة المؤسسات العلمية بالداخل والخارج من أجل تقديم خدمات متميزة للسادة الباحثين بهدف تطوير البحث العلمي والمساعدة علي تخريج شباب متميز ومؤهل لشغل الوظائف القيادية بالبلاد من أجل خدمة الوطن ورفعة شأنه .</p>
<p><a href="http://usc.edu.eg/ar/pgras/4737.aspx" style="text-align: start;color: rgb(255, 255, 255);background-color: rgb(255, 255, 255);font-size: 16px;"></a></p>
<div style="color: rgb(244, 243, 248); background-color: rgb(244, 243, 248); text-align: right;"><a href="http://usc.edu.eg/ar/pgras/4737.aspx" style="text-align: start;color: rgb(255, 255, 255);background-color: rgb(255, 255, 255);font-size: 16px;"><br></a></div>
<p></p>
								 
                            </div>
                            <div class="tab-pane fade" id="mission-tab-pane1" role="tabpanel"
                                 aria-labelledby="mission-tab1"
                                 tabindex="0">
								 
								 <h3 style="text-align: center; color: rgb(28, 120, 133); font-size: 24px;"><span style="color: rgb(87, 87, 87);font-size: 1em;">المكتبة المركزية</span></h3>
<div style="text-align: right; color: rgb(51, 51, 51); font-size: 16px;"><br></div>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><img width="300px" height="300px" alt="" src="http://images.usc.edu.eg/uploads2/images/Aya/mrkz2.jpg"><img width="300px" height="300px" alt="" src="http://images.usc.edu.eg/uploads2/images/Aya/mrkz3.jpg"></p>
<table border="1" cellpadding="1" cellspacing="1" style="text-align: start;color: transparent;font-size: 16px;">
    <tbody>
        <tr>
            <td rowspan="2" style="text-align: center;">
                <div style="text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 16px;"><span style="color: rgb(165, 42, 42);font-size: 1em;"><strong><strong><span style="color: rgb(87, 87, 87);font-size: 1em;">مقتنيات المكتبة</span></strong></strong></span></span></div>
            </td>
            <td style="text-align: center;">
                <div style="text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 16px;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><strong><strong><span style="color: rgb(165, 42, 42);font-size: 1em;"><span dir="RTL" style="color: rgb(87, 87, 87);font-size: 1em;">الكتب العربي</span></span></strong></strong></span></span></div>
            </td>
            <td style="text-align: center;">
                <div style="text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 16px;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><strong><strong><span style="color: rgb(165, 42, 42);font-size: 1em;"><span dir="RTL" style="color: rgb(87, 87, 87);font-size: 1em;">الكتب الاجنبى</span></span></strong></strong></span></span></div>
            </td>
            <td colspan="2">
                <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><br><span style="font-size: 16px;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><strong><strong><span style="color: rgb(165, 42, 42);font-size: 1em;"><span dir="RTL" style="color: rgb(87, 87, 87);font-size: 1em;">رسائل ماجستير و الدكتوراه</span></span></strong></strong></span></span></p>
                <div style="text-align: right;">&nbsp;</div>
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">
                <div style="text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 14px;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><strong><strong><span dir="RTL" style="color: rgb(87, 87, 87);font-size: 1em;">6142</span></strong></strong></span></span></div>
            </td>
            <td style="text-align: center;">
                <div style="text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 14px;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><strong><strong><span dir="RTL" style="color: rgb(87, 87, 87);font-size: 1em;">510</span></strong></strong></span></span></div>
            </td>
            <td colspan="2" style="text-align: center;">
                <div style="text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 14px;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><strong><strong><span dir="RTL" style="color: rgb(87, 87, 87);font-size: 1em;">9438</span></strong></strong></span></span></div>
            </td>
        </tr>
        <tr>
            <td rowspan="2" style="text-align: center;">
                <div style="text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 16px;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><strong><strong><span style="color: rgb(165, 42, 42);font-size: 1em;"><span dir="RTL" style="color: rgb(87, 87, 87);font-size: 1em;">الأجهزة</span></span></strong></strong></span></span></div>
            </td>
            <td style="text-align: center;">
                <div style="text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 16px;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><strong><strong><span style="color: rgb(165, 42, 42);font-size: 1em;"><span dir="RTL" style="color: rgb(87, 87, 87);font-size: 1em;">حاسب آلي</span></span></strong></strong></span></span></div>
            </td>
            <td style="text-align: center;">
                <div style="text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 16px;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><strong><strong><span style="color: rgb(165, 42, 42);font-size: 1em;"><span dir="RTL" style="color: rgb(87, 87, 87);font-size: 1em;">ماكينة تصوير</span></span></strong></strong></span></span></div>
            </td>
            <td style="text-align: center;">
                <div style="text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 16px;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><strong><strong><span style="color: rgb(165, 42, 42);font-size: 1em;"><span dir="RTL" style="color: rgb(87, 87, 87);font-size: 1em;">طابعة</span></span></strong></strong></span></span></div>
            </td>
            <td style="text-align: center;">
                <div style="text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 16px;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><strong><strong><span style="color: rgb(165, 42, 42);font-size: 1em;"><span dir="RTL" style="color: rgb(87, 87, 87);font-size: 1em;">أجهزة باركود</span></span></strong></strong></span></span></div>
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">
                <div style="text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 14px;"><strong><strong><span style="color: rgb(87, 87, 87);font-size: 1em;">7</span></strong></strong></span></div>
            </td>
            <td style="text-align: center;">
                <div style="text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 14px;"><strong><strong><span style="color: rgb(87, 87, 87);font-size: 1em;">2</span></strong></strong></span></div>
            </td>
            <td style="text-align: center;">
                <div style="text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 14px;"><strong><strong><span style="color: rgb(87, 87, 87);font-size: 1em;">3</span></strong></strong></span></div>
            </td>
            <td style="text-align: center;">
                <div style="text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 14px;"><strong><strong><span style="color: rgb(87, 87, 87);font-size: 1em;">6</span></strong></strong></span></div>
            </td>
        </tr>
    </tbody>
</table>
<p style="text-align: right;"><a href="http://usc.edu.eg/ar/pgras/4737.aspx" style="text-align: start;color: rgb(255, 255, 255);background-color: rgb(255, 255, 255);font-size: 16px;"></a></p>
<p><br></p>



                            </div>
                            <div class="tab-pane fade" id="values-tab-pane1" role="tabpanel" aria-labelledby="values-tab1"
                                 tabindex="0">
								 
								 
								 <h3 style="text-align: center; color: rgb(28, 120, 133); font-size: 24px;"><span style="color: rgb(87, 87, 87);font-size: 1em;">أهداف المكتبات الجامعية</span></h3>
<div style="text-align: right; color: rgb(51, 51, 51); font-size: 16px;"><br></div>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><span style="color: rgb(87, 87, 87);font-size: 1em;">- &nbsp; &nbsp;تقديم الخدمات المكتبية والمعلوماتية للسادة اعضاء هيئة التدريس والهيئية المعاونة وطلاب مرحلتي الدراسات العليا والبكالوريوس والليسانس والعاملين بهدف دعم العملية التعليمية والبحثية ونشر العلم والمعرفة.</span></p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><br>- &nbsp; &nbsp;توكيد أواصر الصلة العلمية والعملية مع الجامعات والهيئات العلمية والبحثية داخل وخارج مصر</p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><br>- &nbsp; &nbsp;اقتناء الكتب والمراجع والدوريات العلمية والرسائل الجامعية وتوفير قواعد بيانات علمية عالمية للباحثين وأوعية المعلومات التى تفيد الباحثين والطلاب</p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><br>- &nbsp; &nbsp; إعداد الفهارس اللازمة لتيسير الوصول إلى المقتنيات وخاصة الفهارس الإلكترونية</p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><br>- &nbsp; &nbsp;إصدار القوائم الببليوجرافية والكشافات لمحتويات المكتية</p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><br>- &nbsp; &nbsp;تيسير الحصول على المقالات والبحوث من المراجع والدوريات والكتب وغيرها من مصادر المعرفة</p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><br>- &nbsp; &nbsp;تقديم خدمات معلوماتية الاعتماد على المصادر السمعية والبصرية</p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><br>- &nbsp; &nbsp;توفير وتقديم المعلومات والمصادر الإلكترونية أو الرقمية</p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><br>- &nbsp; &nbsp;تبادل كافة أوعية المعلومات والبيانات بينهما وبين الجامعات والمراكز البحثية والمكتبات داخل وخارج الوطن بما يحقق أعلى استفادة ممكنة لجمهور المستفيدين منها</p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><br>- &nbsp; &nbsp;تقوم المكتبة المركزية باقتناء الرسائل العلمية الممنوحة لدجتى الماجستير والدكتوراة من الجامعة فى شكل ورقى وإلكترونى كما تقوم مكتبات الكليات بتجميع الرسائل العلمية المجازة فى كلياتها</p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><br>- &nbsp; &nbsp;تتولى إدارة مكتبات الكليات التوجية الفنى وإعداد البرامج التربية للعاملين بمكتبات الجامعة</p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><br><strong><strong><span style="color: rgb(0, 128, 128);font-size: 1em;">- &nbsp; &nbsp;تتولى الإدارة العامة للمكتبات الجامعية عمليات إنشاء وتحديث:-</span></strong></strong><br><br>- &nbsp; &nbsp; توصيل شبكة ربط بين مكتبات كليات ومعاهد الجامعة المنفعة العلمية المتبادلة فى التخصصات المناظرة</p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><br>- &nbsp; &nbsp; شبكة معلومات ألية تربط مكتبات الجامعة فيما بينها للاءفادة من مقتنياتها وخدماتها وذلك تيسراً على الباحثين كما تعمل ربط تلك &nbsp;الشبكة بشبكات المكتبات ومعلومات المثليلة</p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><br>- فهرس الكترونى موحد لمقتنيات جميع مكتبات الجامعة وكليتها ومعاهدها ومراكزها العلمية ...الخ , لتيسيرالإفادة من هذة المقتنيات، وترشيد سياسة الاختيار وشراء الأوعية الجديدة ، كما ييسر التعاون بين المكتبات فى مجار الإعارة للاستفادة من المقتينات بصورة أكثر فاعلية إنشاء مكتبة سمعية وبصرية لذوى الاحتياجات الخاصة</p>


                            </div>
                            <div class="tab-pane fade" id="objectives-tab-pane1" role="tabpanel"
                                 aria-labelledby="objectives-tab1"
                                 tabindex="0">


                                <p style="text-align: center;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><strong>اختصاصات لجنة المكتبات</strong></span></p>
<p><br></p>
<p dir="RTL" style="box-sizing: border-box; margin: 0px 0.5in 18px 0px; font-size: 16px; line-height: 21px; color: rgb(87, 87, 87); text-align: right; font-family: HacenSaudiArabia; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;"><span style="box-sizing: border-box; color: rgb(87, 87, 87); font-size: 1em; font-weight: 600; display: initial; margin: 10px 0px; font-family: mtlight;"><span style="box-sizing: border-box; color: rgb(0, 128, 128); font-size: 1em; font-weight: 600; display: initial; margin: 10px 0px;"><strong style="box-sizing: border-box; font-weight: bold; display: block;">تختص لجنة المكتبات الجامعية بالآتى</strong>:-</span></span></p>
<ul style="box-sizing: border-box; margin: 0px; list-style: none; padding: 0px 35px 0px 0px; color: rgb(51, 51, 51); font-family: HacenSaudiArabia; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">
    <li dir="RTL" style="box-sizing: border-box; list-style-type: square; text-align: right;"><span style="box-sizing: border-box; color: rgb(87, 87, 87); font-size: 1em; font-weight: 600; display: initial; margin: 10px 0px; font-family: mtlight;">وضع سياسة لتدعيم مكتبات الجامعة بالكتب والمراجع والدوريات اللازمة وتنسيق الاستفادة منها.</span></li>
    <li dir="RTL" style="box-sizing: border-box; list-style-type: square; text-align: right;"><span style="box-sizing: border-box; color: rgb(87, 87, 87); font-size: 1em; font-weight: 600; display: initial; margin: 10px 0px; font-family: mtlight;">اقتراح الموازنة الخاصة بمكتبات الجامعة</span></li>
    <li dir="RTL" style="box-sizing: border-box; list-style-type: square; text-align: right;"><span style="box-sizing: border-box; color: rgb(87, 87, 87); font-size: 1em; font-weight: 600; display: initial; margin: 10px 0px; font-family: mtlight;">بحث احتياجات المكتبات الجامعية والتنسيق فيما بينهما بما تساعد على النهوض بالأداء ومواكبة التطورات الحديثة</span></li>
    <li dir="RTL" style="box-sizing: border-box; list-style-type: square; text-align: right;"><span style="box-sizing: border-box; color: rgb(87, 87, 87); font-size: 1em; font-weight: 600; display: initial; margin: 10px 0px; font-family: mtlight;">اعتماد نتائج جرد الإلكترونى للمكتبات والموافقة على خصم العجز فى حدود النسبة اللائحية المقرر</span></li>
    <li dir="RTL" style="box-sizing: border-box; list-style-type: square; text-align: right;"><span style="box-sizing: border-box; color: rgb(87, 87, 87); font-size: 1em; font-weight: 600; display: initial; margin: 10px 0px; font-family: mtlight;">الموافقة على استبعاد الكتب والمطبوعات التى ليس هناك حاجة لها</span></li>
    <li dir="RTL" style="box-sizing: border-box; list-style-type: square; text-align: right;"><span style="box-sizing: border-box; color: rgb(87, 87, 87); font-size: 1em; font-weight: 600; display: initial; margin: 10px 0px; font-family: mtlight;">النظر فى قبول الهدايا التى تقدم إلى المكتبات والإهداء والتبادل بينها وبين المكتبات</span></li>
    <li dir="RTL" style="box-sizing: border-box; list-style-type: square; text-align: right;"><span style="box-sizing: border-box; color: rgb(87, 87, 87); font-size: 1em; font-weight: 600; display: initial; margin: 10px 0px; font-family: mtlight;">الإشراف على ما تصدرة الجامعات من مؤلفات أو بحوث أو نشرات او مطبوعات علمية أخرى يتفق عليها من اعتمادات المكتبة</span></li>
    <li dir="RTL" style="box-sizing: border-box; list-style-type: square; text-align: right;"><span style="box-sizing: border-box; color: rgb(87, 87, 87); font-size: 1em; font-weight: 600; display: initial; margin: 10px 0px; font-family: mtlight;">إقرار النظم الإدارية والأساليب الفنية للعمل بالكتبات</span></li>
    <li dir="RTL" style="box-sizing: border-box; list-style-type: square; text-align: right;"><span style="box-sizing: border-box; color: rgb(87, 87, 87); font-size: 1em; font-weight: 600; display: initial; margin: 10px 0px; font-family: mtlight;">وضع شروط للأعلان عن الوظائف الشاغرة بالكتبات الجامعية</span></li>
    <li dir="RTL" style="box-sizing: border-box; list-style-type: square; text-align: right;"><span style="box-sizing: border-box; color: rgb(87, 87, 87); font-size: 1em; font-weight: 600; display: initial; margin: 10px 0px; font-family: mtlight;">إقرار مقترحات تنظيم معارض وندوات فى مجال المكتبات والمعلومات</span></li>
    <li dir="RTL" style="box-sizing: border-box; list-style-type: square; text-align: right;"><span style="box-sizing: border-box; color: rgb(87, 87, 87); font-size: 1em; font-weight: 600; display: initial; margin: 10px 0px; font-family: mtlight;">تحديد الآوعية الإلكترونية والأجهزة والوسائل المطلوب اقتنائها لمكتبات الجامعة</span></li>
    <li dir="RTL" style="box-sizing: border-box; list-style-type: square; text-align: right;"><span style="box-sizing: border-box; color: rgb(87, 87, 87); font-size: 1em; font-weight: 600; display: initial; margin: 10px 0px; font-family: mtlight;">الإشراف على &nbsp;تطوير مكتبات الجامعة ورفع مستوى الأداء &nbsp;بها إلكترونيا وبما يخدم التعليم المفتوح</span></li>
    <li dir="RTL" style="box-sizing: border-box; list-style-type: square; text-align: right;"><span style="box-sizing: border-box; color: rgb(87, 87, 87); font-size: 1em; font-weight: 600; display: initial; margin: 10px 0px; font-family: mtlight;">اقتراح البرامج والنظم الإلكترونية للمكتبات والإشراف على تنفيذها &nbsp;وتطويرها</span></li>
    <li dir="RTL" style="box-sizing: border-box; list-style-type: square; text-align: right;"><span style="box-sizing: border-box; color: rgb(87, 87, 87); font-size: 1em; font-weight: 600; display: initial; margin: 10px 0px; font-family: mtlight;">تقديم تقرير سنوى عن أعمال اللجنة ومقترحاتها</span></li>
    <li dir="RTL" style="box-sizing: border-box; list-style-type: square; text-align: right;"><span style="box-sizing: border-box; color: rgb(87, 87, 87); font-size: 1em; font-weight: 600; display: initial; margin: 10px 0px; font-family: mtlight;">أى أعمال أخرى تتعلق بأهداف للجنة</span></li>
</ul>



                            </div>
                            <!--           <div class="tab-pane fade" id="strategic_objectives-tab-pane" role="tabpanel"
                                            aria-labelledby="strategic_objectives-tab"
                                            tabindex="0">




                                           <ul>
                                               <li>1 - aaa</li>
                                               <li>1 - aaa</li>
                                               <li>1 - aaa</li>

                                           </ul>
                                       </div>     -->
                        </div>
                    </div>

									
									
									
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    {{--------------------     End of section 6 (Sub Department) -----------------------------------}}

@endsection


@push('scripts')


@endpush
