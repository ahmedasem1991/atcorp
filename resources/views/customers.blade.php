{{-- old slider with only one image --}}
{{-- <div class="full_width">
	<div class="full_width_inner">
		<div class="" style="min-height: 420px;">
			<h1 style="margin-top: 6%;text-align: center; margin-bottom: 5%; font-family:sans-serif;">العملاء</h1>

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner w-100 mx-auto" >
                    <div class="carousel-item   active">
                        <img class="d-block w-80 mx-auto" src="../storage/fakieh.gif" alt="First slide">
                      </div>
                      <div class="carousel-item ">
                        <img class="d-block w-80 mx-auto" src="../storage/halwani.png" alt="Second slide">
                      </div>
                      <div class="carousel-item ">
                        <img class="d-block w-80 mx-auto" src="../storage/indigo.jpg" alt="Third slide">
                      </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                </a>
              </div>
		</div> 
    </div>
</div>
<style>
    /* Custom transition speed for carousel */
    .carousel-item {
        transition: transform 1s ease !important;
    }
</style> --}}



<div class="container full_width">
  <div class="full_width_inner">
      <div style="min-height: 420px;">
          <h1 style="margin-top: 6%; text-align: center; margin-bottom: 5%; font-family: sans-serif;">العملاء</h1>

          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach ($customers->chunk(3) as $chunkIndex => $chunk)
                    <div class="carousel-item @if ($chunkIndex == 0) active @endif">
                        <div class="row text-center">
                            @foreach ($chunk as $customer)
                                <div class="col-sm-12 col-lg-4">
                                    <img class="d-block mx-auto logo-img" src="{{ asset('storage/' . $customer->image) }}" alt="{{ $customer->title }}">
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        
      </div>
  </div>
</div>

<style>
/* Center align items in the carousel */
.carousel-inner {
  display: flex;
  align-items: center;
}

/* Style logos for consistent size and centering */
.logo-img {
  min-height: 90px;
  max-width: 150px;
  max-height: 100px; /* Adjust max height for better proportions */
  object-fit: contain;
}

/* Add spacing between columns */
.carousel-item .col-4 {
  padding: 10px;
}

/* Adjust h1 styling for better spacing */
h1 {
  font-size: 1.8rem;
}
</style>
