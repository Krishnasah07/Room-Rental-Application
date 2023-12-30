<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Room Renatal ~ Place to find suitable room for you</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- cards  -->


  <!-- Favicons -->
  <link href="{{ asset('frontend/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('frontend/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('frontend/group/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/group/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/group/boxicons/css/boxicons.min.css') }}" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
  <!-- Searchbar CSS Files -->
  <link href="{{ asset('css/search-bar.css') }}">
  
  <style>
    canvas {
            display: block;
            position: absolute;
            top: 0;
            left: 0;
        }

      .p-content {
            color: #fff;
            padding: 0;
            margin: 0;
            text-align: center;
            position: relative;
            height: 500px;
            width: 100%;
        }
      .flex{
              display: flex;
              justify-content: center;
              align-items: center;
              text-align: center;
            }
        .box{            
            top: 50%;
            left: 50%;
            width: 500px;
            transform: translate(-50% -50%);
          }
          input{
            position: relative;
            display: inline-block;
            box-sizing: border-box;
            transition: 0.5s;
          }
          input[type="text"]{
            background: rgba(205,255,240,0.3);
            width: auto;
            height: 50px;
            border: none;
            outline: none;
            padding: 0 25px;
            border-radius: 25px 0 0 25px;
            backdrop-filter: blur(4px) saturate(180%);
          }
          input[type="submit"]
          {
            position: relative;
            left: -5px;
            border-radius:0 25px 25px 0;
            max-width: 140px;
            height: 50px;
            border: none;
            cursor: pointer;
            background: ;
          }
          input[type="submit"]:hover{
            background: cac7ff;
          }
          ::placeholder{
	          color: white;}
  </style>
</head>

<body>
  <!-- ======= Header ======= -->
  @include('frontend.common.header')
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div class="p-content flex">
        <div id="particles-js"></div>  
          <!-- stats - count particles -->
          <div class="count-particles">
            <span class="js-count-particles">
                <div class="carousel-item active">
                  <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Roomie</span></h2>
                    <div class="box">
                       <form>
                        <input type="text" class="control" name="" placeholder="Search Here">
                        <input type="submit" class="control" name="" value="Search ">
                        </form>  
                    </div>

                      <!-- <form class="search">
                        <input type="text" class="form-control" placeholder="Search Here...">
                      </form> -->
                    <!-- <p class="animate__animated fanimate__adeInUp">Krishna Sah</p> -->
                    <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                  </div>
                </div>
            </span>
          </div>
    </div>
  
    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->
  <br/><br/>
  <main id="main">
    <!-- ======= Content Section ======= -->
    <div class="">
    <div class="container mt-5" style="width: 20rem;">
    <div class="card">
      <div class="card-body">
        <div class="card-title-container">
          <h5 class="card-title">Room Title</h5>
          
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://inspirationfeed.com/wp-content/uploads/2019/12/Sadhguru_-_February_2019_-_1_cropped-min-1.jpg" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
              <img src="https://inspirationfeed.com/wp-content/uploads/2019/12/Sadhguru_-_February_2019_-_1_cropped-min-1.jpg" class="d-block w-100" alt="Slide 2">
            </div>
            <!-- Add more carousel items as needed -->
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
       
          </a>
        </div>
        <p class="card-price">Price: 10000</p>
        <p class="card-details">Bedroom:4 </p>
        <p class="card-details">Bathroom:4</p> 
        <p class="card-details">Hall:1</p> 
        <p class="card-details">Kitchen:2</p> 
        <a href="#" class="btn btn-custom">View More</a><p class="card-details"><span class="time-label">Updated: January 1, 2023</span></p>
      </div>
    </div>
  </div>


    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Services</h2>
          <p>What we do offer</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="zoom-in-left">
              <div class="icon"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="100">
              <div class="icon"><i class="bi bi-book" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="">Dolor Sitema</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 ">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="200">
              <div class="icon"><i class="bi bi-card-checklist" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="300">
              <div class="icon"><i class="bi bi-binoculars" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="400">
              <div class="icon"><i class="bi bi-globe" style="color: #d6ff22;"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="500">
              <div class="icon"><i class="bi bi-clock" style="color: #4680ff;"></i></div>
              <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
              <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Powerhouse Chowk , Birgunj</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>roomrental@business.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+977 9824763769</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

            <form action="{{ route('contact.us.submit') }}" method="post" role="form" class="php-email-form">
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('frontend.common.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files --> 
      <script src="{{ asset('frontend/group/aos/aos.js') }}"></script>
      <script src="{{ asset('frontend/group/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('frontend/group/glightbox/js/glightbox.min.js') }}"></script>
      <script src="{{ asset('frontend/group/isotope-layout/isotope.pkgd.min.js') }}"></script>
      <script src="{{ asset('frontend/group/swiper/swiper-bundle.min.js') }}"></script>
      <script src="{{ asset('frontend/group/php-email-form/validate.js') }}"></script>
  <!-- js for particles with cdn -->
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
  <script src="{{ asset('frontend/pat.js') }}"></script>
<!--   Template Main JS File -->
  <script src="{{ asset('frontend/js/main.js') }}"></script>

</body>

</html>