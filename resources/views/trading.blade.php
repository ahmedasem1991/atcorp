<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Alawadilah Group</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
   section[id] {
      scroll-margin-top: 85px; /* Navbar height (70px) + 15px offset */
      }
    body {
      font-family: 'Georgia', serif;
      font-size: 1.1rem;
      margin: 0;
      background-color: #f8f9fa;
      padding-top: 70px; /* added to offset fixed navbar height */
    }

    .main-container {
      max-width: 1140px;
      margin: 0 auto;
      padding: 0 1rem;
    }

    /* General section spacing */
    section.main-container {
      margin-top: 3rem; /* Add consistent top margin for sections */
      margin-bottom: 3rem; /* Add consistent bottom margin for sections */
    }

    .navbar-brand img {
      height: 40px;
    }

    h4 {
      font-weight: bold;
      color: #4e7da2 !important; /* Kept original for existing h4 outside contact/footer */
    }

    .section-title {
      font-weight: bold;
      color: #4e7da2;
    }

    .logo-img {
      max-height: 150px;
    }

    .ceo-img, .team-img {
      width: 65%;
      /* height: 100px; */
      border-radius: 50%;
      object-fit: cover;
    }

    /* Custom style for the Contact Us title to match screenshot */
    .contact-title {
        font-family: 'Georgia', serif;
        font-size: 2.2rem;
        font-weight: normal;
        color: #5d5c5a;
        margin-bottom: 2.5rem;
    }

    /* Custom button color to match the screenshot's button */
    .btn-custom-blue {
        background-color: #6c8a9e;
        border-color: #6c8a9e;
        color: white;
    }
    .btn-custom-blue:hover {
        background-color: #5a7587;
        border-color: #5a7587;
    }

    /* --- Footer Specific Styles (from Screenshot 2025-05-30 at 1.05.27 PM.png) --- */
    footer {
        background-color: #f8f8f8; /* Light gray background */
        color: #333; /* Default text color */
        padding: 40px 0; /* Padding top/bottom */
        font-size: 0.9rem;
        border-top: 1px solid #e0e0e0; /* Subtle border at the top */
    }

    .footer-logo-text {
        display: flex;
        align-items: center; /* Vertically align logo and text */
        margin-bottom: 15px;
    }
    .footer-logo-text img {
        height: 45px; /* Adjusted logo height for footer to match image */
        margin-right: 10px; /* Space between logo and text */
        max-width: none;
    }
    .footer-logo-text .logo-text {
        font-size: 1.05rem; /* Size for "AL AWADILAH" text */
        font-weight: normal; /* Normal weight as in screenshot */
        color: #333;
        white-space: nowrap; /* Prevent text wrapping */
    }

    .footer-copyright {
        font-size: 0.9rem;
        color: #666; /* Slightly lighter grey for copyright text */
        line-height: 1.4; /* For multi-line copyright */
        margin-bottom: 20px; /* Space above social icons */
    }

    .footer-social-icons .btn { /* Using Bootstrap buttons for social icons */
        width: 38px;
        height: 38px;
        display: flex;
        justify-content: center;
        align-items: center;
        border: 1px solid #ccc; /* Light grey border */
        color: #666; /* Icon color */
        background-color: transparent; /* Transparent background */
        border-radius: 0; /* Square corners */
        text-decoration: none;
        transition: background-color 0.3s, color 0.3s, border-color 0.3s;
    }
    .footer-social-icons .btn:hover {
        background-color: #e0e0e0; /* Light background on hover */
        color: #333; /* Darker icon on hover */
        border-color: #b0b0b0;
    }
    .footer-social-icons .btn i {
        font-size: 1.1em;
    }

    .footer-column h5 {
        font-size: 1em;
        font-weight: bold;
        color: #333; /* Dark heading for columns */
        margin-bottom: 15px; /* Space below heading */
    }

    .footer-column ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-column ul li {
        margin-bottom: 8px; /* Space between list items */
    }

    .footer-column ul li a {
        text-decoration: none;
        color: #666; /* Grey for links */
        transition: color 0.3s;
    }
    .footer-column ul li a:hover {
        color: #333; /* Darker on hover */
    }

    /* Responsive adjustments for footer */
    @media (max-width: 767.98px) {
        .footer-logo-text,
        .footer-copyright,
        .footer-social-icons,
        .footer-column {
            text-align: center; /* Center content on small screens */
            align-items: center; /* Center flex items too */
            justify-content: center; /* Center flex items horizontally */
        }
        .footer-column h5 {
            margin-top: 20px; /* Add space above column titles when stacked */
        }
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom shadow-sm fixed-top">
  <div class="container main-container">
    <a class="navbar-brand" href="#">
      <img src="logo.png" alt="Alawadilah Logo"/>
    </a>
    <ul class="navbar-nav ms-auto">
      <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
      <li class="nav-item"><a class="nav-link" href="#about_us">About Us</a></li>
      <li class="nav-item"><a class="nav-link" href="#our_group">Our Group</a></li>
      <li class="nav-item"><a class="nav-link" href="#team">The Team</a></li>
      <li class="nav-item"><a class="nav-link" href="#contact_us">Contact Us</a></li>
    </ul>
  </div>
</nav>

<section id="about_us"class="main-container py-5">
  <div class="row align-items-center ">
  
    {{-- <div class="col-md-5 text-center">
      <img src="logo.png" alt="Alawadilah Logo" class="logo-img" style="width: 100%;"/>
    </div> --}}
  </div>

  <div class="col-12 text-center">
    <h2 class="section-title sw-font-size-5xl sw-text-color-4e7da2 sw-font-family-default sw-font-weight-default sw-padding-top-none sw-padding-bottom-4xs sw-letter-spacing-normal sw-line-height-normal " style="    font-weight: 600;
    color: #4e7da2;
    font-size: -webkit-xxx-large;">
      {{$trading->title}}</h2>
    <p class="about-description" style="margin-bottom: 1rem;
    padding: 10px;
    line-height: 1.9;
    text-align: center;
    font-size: 20px;
    color: rgb(98, 98, 114);">
      {!! $trading->description !!}
    </p>
  </div>
</section>

<section>
  <div class="main-container">
    @foreach ($visions as $vision)
        <div class="row mb-5">
          <div class="col-md-4">
            <h2 class="section-title">{{ $vision->title }}</h2>
            <p style="color: red;
    text-align: justify;
    line-height: 2;    font-family: Poppins;
    font-size: 21px;">{{ $vision->description }}</p>
          </div>
          <div class="col-md-4 offset-4">
            @if ($vision->image)
            <img stye="height: 100%;"src="{{ asset('storage/' . $vision->image) }}" class="card-img-top" alt="{{ $vision->title }}">
        @endif
          </div>
        </div>
    @endforeach
</div>
</section>
<section  style="
    background: #ffffff;
">
<h1 class="section-title text-center py-5"> Our Services</h1>
  <div class="main-container">
    @foreach ($services as $service)
        <div class="row mb-5">
          <div class="col-md-4">
            <h2 class="section-title">{{ $service->title }}</h2>
            <p style="color:rgb(98, 98, 114);;
    text-align: justify;
    line-height: 2;    font-family: Poppins;
    font-size: 21px;">{{ $service->description }}</p>
          </div>
          <div class="col-md-4 offset-4">
            @if ($service->image)
            <img stye="height: 100%;"src="{{ asset('storage/' . $service->image) }}" class="card-img-top" alt="{{ $service->title }}">
        @endif
          </div>
        </div>
    @endforeach
</div>
</section>



<section id="team"class="main-container text-center py-5">
  <h2 class="section-title">The Team</h2>
  <p>Meet our small team that make these great products.</p>
  <div class="row justify-content-center">
   @foreach ($members as $member)
   <div class="col-6 col-sm-4 col-md-3 mb-4">
      <img src="{{ Storage::url($member->image) }}" class="team-img" alt="Team 1"/>
      <p class="mt-2">{{ $member->name }}<br/><small>{{ $member->title }}</small></p>
    </div>
   @endforeach
       </div>
  </div>
</section>
<section style="
    background: #ffffff; padding:30px;"id="partner1" class="partner1- sw-background-color-ffffff sw-padding-top-2xl sw-padding-bottom-2xl sw-border-top-style-none sw-border-top-width-xs sw-border-top-color-000000 sw-border-bottom-style-none sw-border-bottom-width-xs sw-border-bottom-color-000000 ">
  <div class="main-container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2 class="section-title">Our Partners</h2>
      </div>
    </div>
    <div class="row d-flex align-items-center text-center">
      @foreach ($partners as $partner)
      <div class="col-md-4 text-center">
        <!-- picture -->
        <a href="{{ Storage::url($partner->image) }}" target="" class=" " rel="nofollow noreferrer noopener">
          <img src="{{ Storage::url($partner->image)}}" style="height: 60%; width: 60%;" class="full-width">
        </a>
      </div>
      @endforeach
    </div>
    </div>
    </section>

<footer>
  <div class="container main-container">
    <div class="row justify-content-between align-items-start">

      <div class="col-12 col-md-auto text-center text-md-start mb-4 mb-md-0">
        <div class="footer-logo-text">
          <img src="logo.png" alt="AL AWADILAH Logo"/>
          <span class="logo-text">AL AWADILAH</span>
        </div>
        <p class="footer-copyright mb-2">&copy; Copyright 2021 ATCorp</p>
        <p class="footer-copyright mb-3">All rights reserved.</p>
        <div class="d-flex justify-content-center justify-content-md-start gap-2 footer-social-icons">
          <a href="#" class="btn"><i class="fab fa-twitter"></i></a>
          <a href="#" class="btn"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="btn"><i class="fab fa-instagram"></i></a>
          <a href="#" class="btn"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>

      <div class="col-6 col-md-3 footer-column">
        <h5>About</h5>
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="#about_us">About Us</a></li>
          <li><a href="#our_group">Our Group</a></li>
          <li><a href="#team">The Team</a></li>
          <li><a href="#contact_us">Contact Us</a></li>
        </ul>
      </div>

      <div class="col-6 col-md-3 footer-column">
        <h5>Our Group</h5>
        <ul>
          <li><a href="{{route('trading')}}">Trading</a></li>
          <li><a href="{{route('technology')}}">Technology</a></li>
          <li><a href="https://pointgroup.biz/">Point</a></li>
        </ul>
      </div>

    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
