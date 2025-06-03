<html>
    <style>
        .overlay {
            margin-top: 120px;
            padding: 15%;
           max-height: 450px;
            background:url({{ asset('storage/pattern.png') }}); /* Semi-transparent overlay with black color */
            }
            .about-header {
                height: 100vh; /* Full height */
                background-size: cover;
                background-position: center;
                background-attachment: fixed !important;
                }
                @media (max-width: 575.98px) {
                  .about-header {
                    max-height: 200px !important;
                  }
                }
    </style>
   @include('head')
    <body dir="rtl">
       
        @include('menu')
        <div class="container-fluid about-header" style=" height: 425px; background: url({{ asset('storage/service-header.jpg') }}); background-size: cover; background-position: center;">
            <div class="header overlay" >
                <h1 style="color:white; text-align: right; font-weight: bold; font-family:sans-serif;">الخدمات</h1>
            </div>
        </div>

        <div class="container">
            <div class="row mt-5">
                <div id="BankingConsultancy" class="col-md-12">
                    <h1 style="text-align: right; font-weight: bold; font-family:sans-serif;">الاستشارات  المصرفية</h1>
                </div>
                
                <div class="col-md-9 text-right">
                    <ul>
                        <li>تعقب أي تناقض أو غموض أو التباس لتوضيحه وتصفيته.</li>
                        <li>حماية عميلنا من النزاعات وسوء التفسيرات والإهمال وتباين وجهات النظر.</li>
                        <li>مراجعة المستندات والوثائق التجارية لتأكيد سلامتها ومطابقتها للأنظمة والإجراءات المعمول بها والمعايير الدولية.</li>
                        <li>فحص أحكام وشروط وسريان مفعول وثبوت صحة وقانونية المستندات المالية مثل خطابات الاعتماد وخطابات الضمان ووثائق الشحن.</li>
                        <li>مراجعة وتدقيق اتفاقيات الاقتراض والمعاملات والوثائق التجارية الأخرى قبل اعتمادها وتوقيعها للتأكد من نظاميتها لحماية حقوق الطرفين.</li>
                        <li>فحص وتقييم دراسات الجدوى الاقتصادية قبل تقديمها للمصرف الممول لتأكيد سلامة إعدادها واستيفائها لجميع المعلومات المطلوبة والتوصية بإجراء أي تعديلات أو تحسينات ضرورية.</li>
                        <li>توجيه وإرشاد أصحاب المشاريع لأفضل وأقصر الوسائل للحصول على تمويلات لمشاريعهم.</li>
                        <li>البحث عن مصادر التمويل محليًا وعالميًا والتفاوض نيابة عن صاحب المشروع إذا ما رغب في ذلك.</li>
                        <li>تقديم الرأي المحايد الذي يرضي الطرفين في حالة حدوث نزاعات بين المنشآت أو الأفراد وبين المصارف التي يتعاملون معها.</li>
                        <li>تقديم استشارات مالية للمنشآت والأفراد حول إدارة وتوزيع تدفقاتهم النقدية بالطرق السليمة التي تدعم إيراداتهم وتقلل من حاجتهم للاقتراض.</li>
                    </ul>
                </div>
                <div class="col-md-3 text-center">
                    <img  height="300" width="300" src="{{ asset('storage/service1.png') }}" class="vc_single_image-img attachment-full" alt="" loading="lazy" srcset="{{ asset('storage/service1.png') }}" >
                </div>

            </div>
           
            <div class="row mt-5">
                <div id="BankServices" class="col-md-12">
                    <h1 style="text-align: right; font-weight: bold; font-family:sans-serif;">الخدمـات المـصرفية
                    </h1>
                </div>
               
                <div class="col-md-3 text-center">
                    <img  height="300" width="300" src="{{ asset('storage/service2.png') }}" class="vc_single_image-img attachment-full" alt="" loading="lazy" srcset="{{ asset('storage/service2.png') }}" >
                </div>
 
                <div class="col-md-9 text-right">
                    <ul>
                        <li>مراجعة وتقييم دراسات الجدوى الاقتصادية المقدمة للمصارف من عملائهم وإعطاء رأي محايد بشأنها في وقت وجيز نسبيا مما يوفر جهد ووقت المصارف وعملائهم.</li>
                        <li>التوسط والفصل في حالات النزاع والاختلاف بين المصارف وعملائهم بتقديم رأي محايد يقبل به الطرفان بدون اللجوء والإحالة للإجراءات القضائية.</li>
                        <li>تقديم خدمات إشراف ومتابعة للمشاريع التي يتم تمويلها من المصارف وإعداد تقارير عن أوضاع المشاريع ومراحل تنفيذها, وسلامة استخدام الأموال المخصصة لها حسب الخطط والاتفاقيات.</li>
                        <li>تقديم استشارات للمصارف المحلية والعالمية في كل الشؤون والمسائل المصرفية المرتبطة والمتعلقة بالسوق السعودي.</li>
                    </ul>
                </div>
            </div>
            <div class="row mt-5">
                <div id="FinancialServices" class="col-md-12">
                    <h1 style="text-align: right; font-weight: bold; font-family:sans-serif;">الخدمات المالية المتخصصة
                    </h1>
                </div>
                
                <div class="col-md-9 text-right">
                    <ul>
                        <li>فحص وتحليل وتقييم القوائم المالية وفقا للأسس والمعايير والأصول المتعارف عليها محليا ودوليا, وإظهار نقاط القوة لدعمها ونقاط الضعف لمعالجتها وإصدار توصيات لتحسين المركز المالي.</li>
                        <li>تطوير نظم مالية, ودراسة وإعادة تصميم عمليات تسيير العمل, وإعداد أدلة الأنظمة والإجراءات.</li>
                        <li>دراسة وتقييم الأنظمة المالية اليدوية والآلية المتبعة والتوصية بتحسينها وتعديلها أو اقتراح التحول إلى أنظمة آلية حديثة.</li>
                        <li>تدريب المستخدمين على الأنظمة الآلية الجديدة لتأكيد استيعابهم لكل وظائف وخصائص النظام وتشغيله بالطريقة الصحيحة.</li>
                        <li>المساعدة في تغيير الوضع القانوني للمنشآت وفقا للحجم والبنية المعتمدة في دراسة الجدوى الاقتصادية.</li>
                        <li>ترتيب وتنفيذ كل التجهيزات والمتطلبات القانونية والإدارية والدعم الفني حتى إكمال عملية التغيير المطلوبة وتسليمها.</li>
                        <li>تقديم استشارات تأمين بالتضامن مع كبرى شركات التأمين العالمية لضمان تقديم أفضل غطاء تأميني, مع إعطاء الرأي والمشورة في بوالص التأمين وأي خلاف ينشأ بين المؤمن وشركات التأمين.</li>
                    </ul>
                
                </div>
                <div class="col-md-3 text-center">
                    <img  height="300" width="300" src="{{ asset('storage/service3.png') }}" class="vc_single_image-img attachment-full" alt="" loading="lazy" srcset="{{ asset('storage/service3.png') }}" >
                </div>

            </div>

            <div class="row mt-5">
                <div id="InvestmentFinancial" class="col-md-12">
                    <h1 style="text-align: right; font-weight: bold; font-family:sans-serif;">الاستشارات الاستثمارية والمالية

                    </h1>
                </div>
               
                <div class="col-md-3 text-center">
                    <img  height="300" width="300" src="{{ asset('storage/service4.png') }}" class="vc_single_image-img attachment-full" alt="" loading="lazy" srcset="{{ asset('storage/service4.png') }}" >
                </div>
 
                <div class="col-md-9 text-right pr-5">
                   
                    <p class="paragraph-text">
                        <strong>الاستشارات الاستثمارية</strong><br>
                        تقديم خدمات استشارات استثمارية محلية ودولية ذات مستوى عالي وغير مسبوقة بتكلفة مناسبة ومنافسة.
                    </p>

                    <p class="paragraph-text">
                        <strong>خدمات المكاتب الاستشارية</strong><br>
                        تقديم الرأي الفنى واستشارات مصرفية للمكاتب الاستشارية المختلفة داخل وخارج المملكة فى المسائل والأمور المصرفية, وتمثيل تلك المكاتب أو عملائهم في تنفيذ أي مهام خاصة تتعلق بالمصارف.
                    </p>

                    <p class="paragraph-text">
                        <strong>خدمات الجهات الحكومية</strong><br>
                        تنفيذ مهام تصفية الأعمال التجارية للمؤسسات والشركات وفقا لقرارات الجهات الرسمية والاشراف عليها خلال فترة التصفية.
                    </p>

                    <p class="paragraph-text">
                        <strong>الرأي الفني للجهات الحكومية</strong><br>
                        تقديم الرأي الفني فيما يختص بالمسائل والأمور المصرفية للجهات الرسمية الحكومية.
                    </p>
                </div>
            </div>
            <div class="row mt-5 mb-5">
                <div id="TrainingDevelopment" class="col-md-12">
                    <h1 style="text-align: right; font-weight: bold; font-family:sans-serif;">خدمـات التدريب والتنمية
                    </h1>
                </div>
                
                <div class="col-md-9 text-right">
                    <p class="paragraph-text">
                        انطلاقا من ادراكنا لأهمية تنمية الموارد البشرية وتطوير قدراتها باعتبارها الأصول التى تحقق القيمة الاقتصادية الأعلى والاستثمار الحقيقى الذى تنعقد على فعاليته وكفاءته مفاتيح نجاح العمل التجارى، وتلبية لرغبات المنشآت الوطنية وحاجتها لتدريب مالي متخصص يتناسب مع تطلعاتها في التطور وإدارة أنشطتها التجارية بما يحقق مراميها وأهدافها، فقد عقدنا العزم على تقديم برامج تدريب متخصصة في الشؤون المالية والمصرفية بالمملكة العربية السعودية وخارجها بالتضامن مع كبرى الجهات المعتمدة للتدريب المالي والمصرفي المتخصص.
                    </p>
                
                    <p class="paragraph-text">
                        وتشتمل برامجنا على الآتي:
                    </p>
                
                    <ul class="list-items">
                        <li>دورات تدريبية مكثفة لا تتجاوز ثلاثة أيام.</li>
                        <li>دورات تدريبية طويلة الأمد تستغرق من ثلاثة شهور لعام كامل في مجالي الدراسات المالية والمصرفية ينال فيها الدارسون دبلومات وشهادات مهنية معتمدة.</li>
                        <li>برامج تدريبية مصممة خصيصا للمنشآت لتفي باحتياجاتها التدريبية وفقا لطلباتها وحسب مقتضياتها التنظيمية والإدارية وطبيعة أعمالها.</li>
                    </ul>
                
                </div>
                <div class="col-md-3 text-center">
                    <img  height="300" width="300" src="{{ asset('storage/service5.png') }}" class="vc_single_image-img attachment-full" alt="" loading="lazy" srcset="{{ asset('storage/service5.png') }}" >
                </div>

            </div>
        </div>


        @include('footer')
               

    </body>
   @include('scripts')
    
</html>