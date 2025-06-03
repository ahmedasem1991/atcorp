<style>
    .text-opacity-50 {
    opacity: 0.5;
}
.mail-input{
    border: 2px solid white;
    background: transparent;
    border-radius: 0px;
    height: 45px;
}
#subscribe_submit {
   border-radius: 0px;
   height: 45px;
    }
#subscribe_submit:hover{
    background-color: #22d279;
    color: white;
    }
</style>
<style>
    .twitter-icon {
        margin-right: 50%;
        display: inline-block;
        text-decoration: none;
        color: black; /* Black icon color */
        font-size: 24px; /* Adjust icon size */
        width: 50px; /* Set width for the circular shape */
        height: 50px; /* Set height for the circular shape */
        border-radius: 50%; /* Make the background circular */
        background-color: white; /* White background */
        display: flex;
        align-items: center;
        justify-content: center;
        border: 2px solid black; /* Optional: Add a black border */
        transition: background-color 0.3s ease, color 0.3s ease; /* Smooth hover effect */
    }

    .twitter-icon:hover {
        color: white; /* Change icon color to white on hover */
        background-color: #22d279; /* Change background to green on hover */
        text-decoration: none;

    }
</style>
<footer>
    <div  style="text-align:right; min-height: 450px; background: url({{ asset('storage/footer-image.jpg') }})">
        <div class="container">
            <div class="row" style="font-family: sans-serif;">
                <div class="col-md-6"> 
                    <h4 class="text-white mt-5 mb-4 ">النشرة الإخبارية
                    </h4>
                    <form action="{{ route('newsletter') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="أدخل البريد الإلكتروني" required>
                        </div>
                        <div class="form-group text-center">
                            <div class="g-recaptcha" data-sitekey="6LftiLEqAAAAALg1oU6pg89a4yXe_GviFhQZUxhb"></div>
                        </div>
                        <button id="subscribe_submit" type="submit" class="btn btn-default btn-block">ارسال</button>
                    </form>
                </div>
                <div class="col-md-6"> 
                    <h4 class="text-white mt-5">عن الشركة</h4>
                    <div>
                        <h5 class="text-white mt-4">العنوان : </h5>
                        <p class="text-white text-opacity-50">ص.ب 2499 جدة 21451 المملكة العربية السعودية</p>
                    </div>
                    <div>
                        <h5 class="text-white mt-4">الهاتف :
                        </h5>
                        <p class="text-white text-opacity-50">2323 697 12 966+
                        </p>
                    </div>
                    <div>
                        <h5 class="text-white mt-4">البريد الإلكتروني :
                        </h5>
                        <p class="text-white text-opacity-50">info@samoum-fc.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
    <div class="container-fluid">
        <div class="row" style="background:black; height: 50px;">
            <div class="col-md-4">
                <a href="https://twitter.com/aasamoum" target="_blank" class="twitter-icon">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
            <div class="col-md-8">
            </div>
        </div>
    </div>
   
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6LftiLEqAAAAALg1oU6pg89a4yXe_GviFhQZUxhb"></script>

</footer>