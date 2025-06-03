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
        <div class="container-fluid about-header" style=" height: 425px; background: url({{ asset('storage/about-title.jpg') }}); background-size: cover; background-position: center;">
            <div class="header overlay" >
                <h1 style="color:white; text-align: right; font-weight: bold; font-family:sans-serif;">من نحن</h1>
            </div>
        </div>

        <div class="container">

            <div class="row">
                <div class="col-md-8 text-right" style="font-family: sans-serif;">
                    {!! $about->description !!}
                </div>
                <div class="col-md-4">

                    <div class="container mt-5">
                        <div class="row">
                          @foreach ($licenses as $license)
                          <div class="col-md-12">
                            <img src="{{ asset('storage/'.$license->image) }}" class="img-fluid" alt="{{$license->title}}" data-toggle="modal" data-target="#imageModal" data-img-src="{{ asset('storage/'.$license->image) }}">
                          </div>
                          @endforeach
                         
                        </div>
                      </div>
                </div>

            </div>
            <div class="container">
              @foreach ($quotes as $quote)
              <div class="row mt-5">
                <h3 class="col-md-12"style="text-align: right; font-family:sans-serif; font-weight:200;">{{$quote->title}}</h3>
              
            </br>  <h5 class="blockquote-text text-right" style="font-family:sans-serif; font-weight:200; color:#817f7f;"><i class="fa fa-quote-right" style=""></i>  {{$quote->description}}</h5>
            </div>
              @endforeach
            </div>
          
          <br><br>
        </div>

<!-- Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img id="modalImage" src="" class="img-fluid" alt="Image Preview">
        </div>
      </div>
    </div>
  </div>
  
  <script>
    // When an image is clicked, update the modal with the selected image
    $('#imageModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget); // Image clicked
      var imgSrc = button.data('img-src'); // Get image source
      var modalImage = $('#modalImage');
      modalImage.attr('src', imgSrc); // Set the image source in the modal
    });
  </script>
        @include('footer')
               

    </body>
   @include('scripts')
    
</html>