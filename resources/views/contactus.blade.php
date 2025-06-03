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
        <div class="container-fluid about-header" style=" height: 425px; background: url({{ asset('storage/contact-title.jpg') }}); background-size: cover; background-position: center;">
            <div class="header overlay" >
                <h3 style="color:white; text-align: right; font-weight: bold; font-family:sans-serif;">إتصل بنا</h3>
                <h5 style="color:white; text-align: right; font-weight: bold; font-family:sans-serif;">لا تترددوا في الاتصال بنا
                </h5>

            </div>
        </div>
        <div class="container justify-content-center align-items-center mt-5">
            <iframe style="border:5px solid #f7f7f7;" width="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3710.3620858799736!2d39.19367691494192!3d21.571784985706827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjHCsDM0JzE4LjQiTiAzOcKwMTEnNDUuMSJF!5e0!3m2!1sen!2seg!4v1552479557869" width="600" height="450" frameborder="0" style="border: 0px; pointer-events: none;" allowfullscreen=""></iframe>
        </div>                                         
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h2 class="text-center mb-4">اتصل بنا</h2>
                    <form action="{{ route('contactus') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="ادخل الاسم" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="ادخل الايميل" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="message" name="message" rows="5" placeholder="اكتب الرسالة" required></textarea>
                        </div>
                        <!-- Google reCAPTCHA -->
                        <div class="g-recaptcha mb-3" data-sitekey="6LftiLEqAAAAALg1oU6pg89a4yXe_GviFhQZUxhb"></div>
                        <button type="submit" class="btn btn-default btn-block">إرسال</button>
                    </form>
                </div>

                <div class="col-md-3 text-right">
                    <div>
                        <h5 class="text-black mt-4">العنوان : </h5>
                        <p class="text-black text-opacity-50">ص.ب 2499 جدة 21451 المملكة العربية السعودية</p>
                    </div>
                    <div>
                        <h5 class="text-black mt-4">الهاتف :
                        </h5>
                        <p class="text-black text-opacity-50">2323 697 12 966+
                        </p>
                    </div>
                    <div>
                        <h5 class="text-black mt-4">البريد الإلكتروني :
                        </h5>
                        <p class="text-black text-opacity-50">info@samoum-fc.com
                        </p>
                    </div>
                </div>
            </div>
        </div>


        @include('footer')
               

    </body>
   @include('scripts')
    
</html>