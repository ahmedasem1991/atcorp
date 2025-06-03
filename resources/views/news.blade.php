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
        <div class="container-fluid about-header" style=" height: 425px; background: url({{ asset('storage/news-title.jpg') }}); background-size: cover; background-position: center;">
            <div class="header overlay" >
                <h1 style="color:white; text-align: right; font-weight: bold; font-family:sans-serif;">الأخبار</h1>
            </div>
        </div>

        <div class="container">

           <div class="row mt-5 mb-5">
            <h2 class="col-md-12" style="text-align: right;">فيديوهات</h2>
                        
            @foreach ($videos as $video)
                <div class="col-md-4 mt-5">
                    <iframe width="100%" height="300" src="{{$video->video_url}}" frameborder="0" allow="accelerometer;  encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            @endforeach

          {{-- <div class="col-md-4 mt-5">
              <iframe width="100%" height="300" src="https://www.youtube.com/embed/AlwV4RXHngU?autoplay=1" frameborder="0" allow="accelerometer;  encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="col-md-4 mt-5">
              <iframe width="100%" height="300" src="https://www.youtube.com/embed/NLUUI_SYURM?autoplay=1" frameborder="0" allow="accelerometer; ; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div> --}}
          </div>
        </div>


        @include('footer')
               

    </body>
   @include('scripts')
    
</html>