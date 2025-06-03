
<style>
    .transition-item {
  height: 100vh; /* Full height */
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
}
@media (max-width: 575.98px) {
    .carousel-inner {
      max-height: 300px !important;
    }
    .carousel-indicators-wrapper{
        position: absolute;
    }
    .titlestable {
        top: 40px;
    position: absolute;
    }
    .carouseltitles{
        font-size: 14px;
    }
    
  }</style>
<div class="slider" style="margin-top: 100px;">
    <div id="carouselExampleIndicators" class="carousel  carousel-fade" data-ride="carousel">
        <div class="carousel-inner" style="height:690px;">
            @foreach ($slides as $i=>$slide)
            <div class="carousel-item  transition-item {{ $i == 2 ? 'active' : '' }}" style="background-image: url('{{ asset('storage/'.$slide->image) }}');">
                <div class="carousel-item-content" >
                </div>
            </div>
            @endforeach
            
            {{-- <div class="carousel-item transition-item" style="background-image: url('../storage/slider-2.jpg');">
                <div class="carousel-item-content">
                </div>
            </div>
            <div class="carousel-item transition-item" style="background-image: url('../storage/slider-3.png');">
                <div class="carousel-item-content" >
                </div>
            </div>
            <div class="carousel-item transition-item" style="background-image: url('../storage/slider-4.png');">
                <div class="carousel-item-content" >
                </div>
            </div>
            <div class="carousel-item transition-item" style="background-image: url('../storage/slider-5.png');">
                <div class="carousel-item-content"   >
                </div>
            </div> --}}
        </div>

        <div class="carousel-indicators-wrapper ">
            <table class="titlestable indic " >
                <ol class="carousel-indicators vertical-indicators">
                    @foreach ($slides as $i=>$slide)
                    <tr data-target="#carouselExampleIndicators" data-slide-to="{{$i}}" class="{{ $i == 2 ? 'active' : '' }}">
                        <td>
                            <div class="carouseltitles">{{$slide->title}}</div>
                        </td>
                    </tr>
                    @endforeach
                  
                    {{-- <tr data-target="#carouselExampleIndicators" data-slide-to="1">
                        <td>
                            <div class="carouseltitles">الخدمات المصرفية</div>
                        </td>
                    </tr>
                    <tr data-target="#carouselExampleIndicators" data-slide-to="2">
                        <td>
                            <div class="carouseltitles">الخدمات المالية المتخصصة</div>
                        </td>
                    </tr>
                    <tr data-target="#carouselExampleIndicators" data-slide-to="3">
                        <td>
                            <div class="carouseltitles">الاستشارات الاستثمارية والمالية</div>
                        </td>
                    </tr>
                    <tr data-target="#carouselExampleIndicators" data-slide-to="4">
                        <td>
                            <div class="carouseltitles">خدمات التدريب والتنمية</div>
                        </td>
                    </tr> --}}
                </ol>
            </table>
        </div>
    </div>
</div>
<script>
    // Get all carousel indicators
     document.addEventListener('DOMContentLoaded', function () {
    // Get all carousel indicators
    const indicators = document.querySelectorAll('.indic tr');
    // Add event listener for carousel's slide event
    const carousel = document.getElementById('carouselExampleIndicators');
    if (carousel) {
        $('#carouselExampleIndicators').on('slide.bs.carousel', function (e) {

                // Remove 'active' class from all indicators
                indicators.forEach((indicator) => {
                    indicator.classList.remove('active');
                });

                // Add 'active' class to the corresponding indicator
                const activeIndex = e.to;

                if (indicators[activeIndex]) {
                    indicators[activeIndex].classList.add('active');
                }
            });

    }
});
</script>
