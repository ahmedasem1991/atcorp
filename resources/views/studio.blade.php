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
                <h3 style="color:white; text-align: right; font-weight: bold; font-family:sans-serif;"> الأستوديو</h3>
                </h5>

            </div>
        </div>
        <div class="container mt-5"> 
            <div class="row media-library">
                @foreach ($gallery as $image)
                <div class="col-md-6 mb-4">
                    <img src="{{ asset('storage/'.$image->image) }}" class="img-fluid" data-toggle="modal" data-target="#imageModal" data-index="0" alt="{{$image->title}}">
                </div>
                @endforeach
                {{-- <!-- Image 1 -->
                <div class="col-md-6 mb-4">
                    <img src="{{ asset('storage/studio1.jpg') }}" class="img-fluid" data-toggle="modal" data-target="#imageModal" data-index="0" alt="Image 1">
                </div>
                <!-- Image 2 -->
                <div class="col-md-6 mb-4">
                    <img src="{{ asset('storage/studio2.jpg') }}" class="img-fluid" data-toggle="modal" data-target="#imageModal" data-index="1" alt="Image 2">
                </div>
                <!-- Image 3 -->
                <div class="col-md-6 mb-4">
                    <img src="{{ asset('storage/studio3.jpg') }}" class="img-fluid" data-toggle="modal" data-target="#imageModal" data-index="2" alt="Image 3">
                </div>
                <!-- Image 4 -->
                <div class="col-md-6 mb-4">
                    <img src="{{ asset('storage/studio4.png') }}" class="img-fluid" data-toggle="modal" data-target="#imageModal" data-index="3" alt="Image 4">
                </div>
                <div class="col-md-6 mb-4">
                    <img src="{{ asset('storage/studio5.jpg') }}" class="img-fluid" data-toggle="modal" data-target="#imageModal" data-index="3" alt="Image 4">
                </div> 
                <div class="col-md-6 mb-4">
                    <img src="{{ asset('storage/studio6.jpg') }}" class="img-fluid" data-toggle="modal" data-target="#imageModal" data-index="3" alt="Image 4">
                </div> <div class="col-md-6 mb-4">
                    <img src="{{ asset('storage/studio7.png') }}" class="img-fluid" data-toggle="modal" data-target="#imageModal" data-index="3" alt="Image 4">
                </div>
                <div class="col-md-6 mb-4">
                    <img src="{{ asset('storage/studio8.png') }}" class="img-fluid" data-toggle="modal" data-target="#imageModal" data-index="3" alt="Image 4">
                </div> --}}
            </div>
            </div>                             
     

        <!-- Modal -->
        <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <img src="" class="img-fluid" id="modalImage" alt="Modal Image">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="prevImage">Previous</button>
                        <button type="button" class="btn btn-secondary" id="nextImage">Next</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        @include('footer')
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
            const images = [
                "{{ asset('storage/studio1.jpg') }}",
                "{{ asset('storage/studio2.jpg') }}",
                "{{ asset('storage/studio3.jpg') }}",
                "{{ asset('storage/studio4.png') }}",
                "{{ asset('storage/studio5.jpg') }}",
                "{{ asset('storage/studio6.jpg') }}",
                "{{ asset('storage/studio7.png') }}",
                "{{ asset('storage/studio8.png') }}",
              
            ];
            let currentIndex = 0;
        
            // Show the clicked image in the modal
            $('.media-library img').click(function () {
                currentIndex = parseInt($(this).attr('data-index'));
                $('#modalImage').attr('src', images[currentIndex]);
            });
        
            // Navigate to the previous image
            $('#prevImage').click(function () {
                currentIndex = (currentIndex - 1 + images.length) % images.length;
                $('#modalImage').attr('src', images[currentIndex]);
            });
        
            // Navigate to the next image
            $('#nextImage').click(function () {
                currentIndex = (currentIndex + 1) % images.length;
                $('#modalImage').attr('src', images[currentIndex]);
            });
        </script>

    </body>
   @include('scripts')
    
</html>