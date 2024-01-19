<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Roomie ~ Place to find suitable room for you</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Bootstrap 4 CDN  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!-- Card Css -->
  <link href="{{ asset('card/style.css') }}" rel="stylesheet">

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
      body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        .product-container {
            max-width: 1000px;
            margin: 20px auto;
            padding: 20px;
            background: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .product-images {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .product-image {
            flex: 1;
            margin: 5px;
        }

        .product-image img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .product-description {
            text-align: justify;
        }

        @media (max-width: 768px) {
            .product-images {
                flex-direction: column;
            }

            .product-image {
                flex: 100%;
            }
        }
    .bg{
        background: linear-gradient( 60deg, rgba(84, 58, 183, 1) 0%, rgba(0, 172, 193, 1) 100% );
    }
  </style>
</head>

<body>
<header id="header" class="fixed-top d-flex align-items-center header-transparent" style="background: linear-gradient( 60deg, rgba(84, 58, 183, 1) 0%, rgba(0, 172, 193, 1) 100% );">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="{{ url('/') }}"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo
        <a href="index.html"><img src="{{ asset('frontend/img/logo.png') }}" alt="kkhkj" class="img-fluid"></a> -->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ url('/') }}">Home</a></li>
          <li><a class="nav-link scrollto" href="#contents">Posts</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto " href="{{ route('login.page') }}">Login / Register</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header>
  <br/>

  <!-- main content starts -->
  <section>
  <div class="product-container">
        <div class="product-images">
            <div class="product-image">
                <img src="{{ asset('Room_Images').'/'.$product->image }}" alt="Product Image 1">
            </div><br>
            <div class="product-image">
                <img src="{{ asset('Room_Images').'/'.$product->image2 }}" alt="Product Image 2">
            </div>
            <div class="product-image">
                <img src="{{ asset('Room_Images').'/'.$product->image3 }}" alt="Product Image 3">
            </div>
        </div>

        <div class="product-description">
           <from action="{{ route('Room.Reserve.Order' , $product->id) }}" method="POST">
            @csrf
           <h2>{{ $product->location}} </h2>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No. of Room</th>
                            <td> {{ $product->room }} </td>                        
                          </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th >No. of Kitchen</th>
                            <td> {{ $product->kitchen }} </td>                        
                          </tr>
                          <tr>
                            <th> No. of Washroom </th>
                            <td> {{ $product->bathroom }} </td>                        
                          </tr>
                          <tr>
                            <th >No. of Location</th>
                            <td> {{ $product->location }} </td>                        
                          </tr>
                          <tr>
                            <th>  Contact Number </th>
                            <td> <u>{{ $product->phone }}</u> </td>                        
                          <tr>
                            <td colspan="2">
                              <p>
                              {{ $product->Description }}
                              </p>
                            </td>
                          </tr>                         
                        </tbody>
                      </table>
                    </div>
          </div> <br/>
        <button class="btn btn-outline-secondary btn-fw"> Rs. {{ $product->price }}  </button>
        
          <button type="submit" class="btn btn-success"> Reserve Now </button>         
          </form>
       </div>
    <section>
</body>
  
  <!-- ======= Footer ======= -->
  
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files --> 
      <script src="{{ asset('frontend/group/aos/aos.js') }}"></script>
      <script src="{{ asset('frontend/group/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('frontend/group/glightbox/js/glightbox.min.js') }}"></script>
      <script src="{{ asset('frontend/group/isotope-layout/isotope.pkgd.min.js') }}"></script>
      <script src="{{ asset('frontend/group/swiper/swiper-bundle.min.js') }}"></script>
      <script src="{{ asset('frontend/group/php-email-form/validate.js') }}"></script>
<!--   Template Main JS File -->
  <script src="{{ asset('frontend/js/main.js') }}"></script>

  <!-- Bootstrap 4 CDN  js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>