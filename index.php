<!DOCTYPE html>
<html lang="en">
  <?php
include("connection/connect.php");  
error_reporting(0);  
session_start(); 

?>
  <head>
    <meta charset="utf-8" />
    <title>Worldwide Agro Store</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Poppins:wght@200;600;700&display=swap"
      rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
    <style>
      #logo {
        /* position: absolute; */
        /* left: 0px; */
        max-height: 60px;
        max-width: 100%;
        /* margin-top: 30px; */
      }
      #halad {
        color: #ffd014;
        padding: 10px;
      }
    </style>
  </head>

  <body>
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div
        class="spinner-grow text-primary"
        style="width: 3rem; height: 3rem"
        role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
          <a href="index.php" class="navbar-brand">
            <!-- <h2 class="text-white">Worldwide Agro</h2> -->
            <img src="./img/logo.png" alt="Logo" id="logo" />
          </a>
          <button
            type="button"
            class="navbar-toggler ms-auto me-0"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
              <li class="nav-item"><a href="index.php" class="nav-item nav-link active">Home</a></li>
              <li class="nav-item"><a href="about.html" class="nav-item nav-link">About</a></li>
              <li class="nav-item"><a href="product.php" class="nav-item nav-link">Products</a></li>
              <div class="nav-item dropdown">
                <a
                  href="#"
                  class="nav-link dropdown-toggle"
                  data-bs-toggle="dropdown"
                  >Know More</a
                >
                <div class="dropdown-menu bg-light mt-2">
                  <a href="feature.html" class="dropdown-item">Features</a>
                  <!-- <a href="how-to-use.html" class="dropdown-item">How To Use</a> -->
                  <a href="testimonial.html" class="dropdown-item"
                    >Testimonial</a
                  >
                  <!-- <a href="blog.html" class="dropdown-item">Blog Articles</a>
                  <a href="404.html" class="dropdown-item">404 Page</a> -->
                </div>
              </div>
              <a href="contact.php" class="nav-item nav-link">Contact</a>
              <?php
						if(empty($_SESSION["user_id"])) // if user is not login
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link active">Register</a> </li>';
							}
						else
							{

									
									echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">My Orders</a> </li>';
									echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">Logout</a> </li>';
							}

						?>
              <a href="./admin/index.php" class="nav-item nav-link">Admin Login</a>

            </div>
            <!-- <a href="" class="btn btn-dark py-2 px-4 d-none d-lg-inline-block">Shop Now</a> -->
          </div>
        </nav>
      </div>
    </div>
    <!-- Navbar End -->

    <!-- Hero Start -->
    <div class="container-fluid bg-primary hero-header mb-5">
      <div class="container">
        <div class="row g-5 align-items-center">
          <div class="col-lg-6 text-center text-lg-start">
            <h3 class="fw-light text-white animated slideInRight">
              Natural & Organic
            </h3>
            <h1 class="display-4 text-white animated slideInRight">
              आदर्श<span id="halad"> हळद </span> पावडर
            </h1>
            <p class="text-white mb-4 animated slideInRight">
              <b>थेट शेतकरी ते ग्राहकांपर्यंत</b>
            </p>
            <a
              href="product.php"
              class="btn btn-dark py-2 px-4 me-3 animated slideInRight"
              >Shop Now</a
            >
            <a
              href="contact.php"
              class="btn btn-outline-dark py-2 px-4 animated slideInRight"
              >Contact Us</a
            >
          </div>
          <div class="col-lg-6">
            <img
              class="img-fluid animated pulse infinite"
              src="./img/turmeric-powder.png"
              alt="" />
          </div>
        </div>
      </div>
    </div>
    <!-- Hero End -->

    <!-- Feature Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div class="row g-4">
          <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
            <div
              class="feature-item position-relative bg-primary text-center p-3">
              <div class="border py-5 px-3">
                <i class="fa fa-leaf fa-3x text-dark mb-4"></i>
                <h5 class="text-white mb-0">100% Natural</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
            <div
              class="feature-item position-relative bg-primary text-center p-3">
              <div class="border py-5 px-3">
                <i class="fa fa-tint-slash fa-3x text-dark mb-4"></i>
                <h5 class="text-white mb-0">Free of Chemicals</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
            <div
              class="feature-item position-relative bg-primary text-center p-3">
              <div class="border py-5 px-3">
                <!-- <i class="fa fa-times fa-3x text-dark mb-4"></i> -->
                <i class="fa fa-heart fa-3x text-dark mb-4"></i>
                <h5 class="text-white mb-0">Low Fat</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Feature End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div class="row g-5 align-items-center">
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
            <img
              class="img-fluid animated pulse infinite"
              src="./img/tumeric-img.png"
              style="height: 500px" />
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
            <h1 class="text-primary mb-4">
              Worldwide Agro
              <span class="fw-light text-dark"
                >The Promise of Flavour & Health</span
              >
            </h1>
            <p class="mb-4">
              भारतात हळदीचा वापर तिच्या वैविध्यपूर्ण औषधीय गुणधर्मामुळे प्राचीन
              काळापासून केला जातो.
            </p>
            <p class="mb-4">
              हळद ही विटामीन सी, कॅल्शिअम, पोटॅशियम,कॉपर, झिंक, फॉस्परस, प्रोटीन
              इ. पोषक घटकांनी परिपूर्ण आहे.
            </p>
            <p class="mb-4">
              हळदीमध्ये करक्यूमिन नावाचे अँटी-बॅक्टेरिअल, अँटी-फंगल,
              अँटी-इप्लेमेंटरी, अँटी-ऑक्सिडेंट हे विविध गुणधर्म असल्यामुळे कफ,
              वात, पित्त या प्रकृति दोषांवर उपयुक्त आहे.
            </p>
            <p class="mb-4">
              शिवाय हळदीला रक्तशुद्धिकारक, आम्लपित्तहारक, पोटदुखी निवारक,
              त्वचादोष, सौंदर्यप्रसाधने तसेच रोगप्रतिकारक शक्ती वाढविणे यांसाठी
              आयुर्वेदात अनन्यसाधारण महत्व आहे.
            </p>
            <a class="btn btn-primary py-2 px-4" href="/product.php"
              >Shop Now</a
            >
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->
    <br />
    <br />
    <!-- Deal Start -->
    <!-- <div class="container-fluid deal bg-primary my-5 py-5">
      <div class="container py-5">
        <div class="row g-5 align-items-center">
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
            <img
              class="img-fluid animated pulse infinite"
              src="img/shampoo-2.png" />
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
            <div class="bg-white text-center p-4">
              <div class="border p-4">
                <p class="mb-2">Natural & Organic Shampoo</p>
                <h2 class="fw-bold text-uppercase mb-4">Deals of the Day</h2>
                <h1 class="display-4 text-primary mb-4">$99.99</h1>
                <h5>Fresh Organic Shampoo</h5>
                <p class="mb-4">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                  feugiat rutrum lectus sed auctor.
                </p>
                <div class="row g-0 cdt mb-4">
                  <div class="col-3">
                    <h1 class="display-6" id="cdt-days"></h1>
                  </div>
                  <div class="col-3">
                    <h1 class="display-6" id="cdt-hours"></h1>
                  </div>
                  <div class="col-3">
                    <h1 class="display-6" id="cdt-minutes"></h1>
                  </div>
                  <div class="col-3">
                    <h1 class="display-6" id="cdt-seconds"></h1>
                  </div>
                </div>
                <a class="btn btn-primary py-2 px-4" href="">Shop Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Deal End -->

    <!-- Feature Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div
          class="mx-auto text-center wow fadeIn"
          data-wow-delay="0.1s"
          style="max-width: 600px">
          <h1 class="text-primary mb-3">
            <span class="fw-light text-dark">Best Benefits Of Our</span> आदर्श
            <span style="color: #ffd014">हळद</span> पावडर (सेलम)
          </h1>
          <p class="mb-5">
            भेसळ विरहीत चमकदार (केशरी-पिवळा) रंग आणि उत्कृष्ठ चव हेच ह्या हळदीचे
            मुख्य वैशिष्ट्य आहे.
          </p>
        </div>
        <div class="row g-4 align-items-center">
          <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
            <div class="row g-5">
              <div class="col-12 d-flex">
                <div
                  class="btn-square rounded-circle border flex-shrink-0"
                  style="width: 80px; height: 80px">
                  <i class="fa fa-check fa-2x text-primary"></i>
                </div>
                <div class="ps-3">
                  <h5>Natural & Organic</h5>
                  <hr class="w-25 bg-primary my-2" />
                  <span
                    >"Explore the exceptional qualities of our आदर्श हळद पावडर
                    (सेलम)"
                  </span>
                </div>
              </div>
              <div class="col-12 d-flex">
                <div
                  class="btn-square rounded-circle border flex-shrink-0"
                  style="width: 80px; height: 80px">
                  <i class="fa fa-check fa-2x text-primary"></i>
                </div>
                <div class="ps-3">
                  <h5>Free of Chemicals</h5>
                  <hr class="w-25 bg-primary my-2" />
                  <span
                    >"Discover the outstanding attributes of our आदर्श हळद पावडर
                    (सेलम)"
                  </span>
                </div>
              </div>
              <div class="col-12 d-flex">
                <div
                  class="btn-square rounded-circle border flex-shrink-0"
                  style="width: 80px; height: 80px">
                  <i class="fa fa-check fa-2x text-primary"></i>
                </div>
                <div class="ps-3">
                  <h5>Low Fat</h5>
                  <hr class="w-25 bg-primary my-2" />
                  <span
                    >"Unveil the remarkable qualities of our आदर्श हळद पावडर
                    (सेलम)"</span
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
            <img
              class="img-fluid animated pulse infinite"
              src="./img/turmeric-powder.png" />
          </div>
          <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
            <div class="row g-5">
              <div class="col-12 d-flex">
                <div
                  class="btn-square rounded-circle border flex-shrink-0"
                  style="width: 80px; height: 80px">
                  <i class="fa fa-check fa-2x text-primary"></i>
                </div>
                <div class="ps-3">
                  <h5>No Artificial Colors</h5>
                  <hr class="w-25 bg-primary my-2" />
                  <span
                    >"Delve into the exceptional qualities of our 'आदर्श हळद
                    पावडर (सेलम)' crafted with a commitment to No Artificial
                    Colors."</span
                  >
                </div>
              </div>
              <div class="col-12 d-flex">
                <div
                  class="btn-square rounded-circle border flex-shrink-0"
                  style="width: 80px; height: 80px">
                  <i class="fa fa-check fa-2x text-primary"></i>
                </div>
                <div class="ps-3">
                  <h5>No Preservatives</h5>
                  <hr class="w-25 bg-primary my-2" />
                  <span
                    >"Celebrate the remarkable qualities of our आदर्श हळद पावडर
                    (सेलम)"</span
                  >
                </div>
              </div>
              <div class="col-12 d-flex">
                <div
                  class="btn-square rounded-circle border flex-shrink-0"
                  style="width: 80px; height: 80px">
                  <i class="fa fa-check fa-2x text-primary"></i>
                </div>
                <div class="ps-3">
                  <h5>No Spice Extract</h5>
                  <hr class="w-25 bg-primary my-2" />
                  <span
                    >"Explore the distinctive qualities of our आदर्श हळद पावडर
                    (सेलम)"
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Feature End -->

    <!-- How To Use Start -->
    <!-- <div class="container-fluid how-to-use bg-primary my-5 py-5">
      <div class="container text-white py-5">
        <div
          class="mx-auto text-center wow fadeIn"
          data-wow-delay="0.1s"
          style="max-width: 600px">
          <h1 class="text-white mb-3">
            <span class="fw-light text-dark">How To Use Our</span> Natural &
            Organic <span class="fw-light text-dark">Hair Shampoo</span>
          </h1>
          <p class="mb-5">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
            aliquet, erat non malesuada consequat, nibh erat tempus risus.
          </p>
        </div>
        <div class="row g-5">
          <div class="col-lg-4 text-center wow fadeIn" data-wow-delay="0.1s">
            <div
              class="btn-square rounded-circle border mx-auto mb-4"
              style="width: 120px; height: 120px">
              <i class="fa fa-home fa-3x text-dark"></i>
            </div>
            <h5 class="text-white">Wash Hair With Water</h5>
            <hr class="w-25 bg-light my-2 mx-auto" />
            <span
              >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
              aliquet, erat non malesuada consequat.</span
            >
          </div>
          <div class="col-lg-4 text-center wow fadeIn" data-wow-delay="0.3s">
            <div
              class="btn-square rounded-circle border mx-auto mb-4"
              style="width: 120px; height: 120px">
              <i class="fa fa-home fa-3x text-dark"></i>
            </div>
            <h5 class="text-white">Apply Shampoo On Hair</h5>
            <hr class="w-25 bg-light my-2 mx-auto" />
            <span
              >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
              aliquet, erat non malesuada consequat.</span
            >
          </div>
          <div class="col-lg-4 text-center wow fadeIn" data-wow-delay="0.5s">
            <div
              class="btn-square rounded-circle border mx-auto mb-4"
              style="width: 120px; height: 120px">
              <i class="fa fa-home fa-3x text-dark"></i>
            </div>
            <h5 class="text-white">Wait 5 Mins And Wash</h5>
            <hr class="w-25 bg-light my-2 mx-auto" />
            <span
              >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
              aliquet, erat non malesuada consequat.</span
            >
          </div>
        </div>
      </div>
    </div> -->
    <!-- How To Use End -->

    <!-- Product Start -->

    <!-- Product End -->

    <!-- Testimonial Start -->
    <div class="container-fluid testimonial bg-primary my-5 py-5">
      <div class="container text-white py-5">
        <div
          class="mx-auto text-center wow fadeIn"
          data-wow-delay="0.1s"
          style="max-width: 600px">
          <h1 class="text-white mb-3">
            Our Customer Said
            <span class="fw-light text-dark"
              >About Our Natural Turmeric Powder</span
            >
          </h1>
          <!-- <p class="mb-5">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
            aliquet, erat non malesuada consequat, nibh erat tempus risus.
          </p> -->
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div
              class="owl-carousel testimonial-carousel wow fadeIn"
              data-wow-delay="0.1s">
              <div class="testimonial-item text-center" data-dot="1">
                <img
                  class="img-fluid border p-2"
                  src="img/customer-1.png"
                  alt="" />
                <h5 class="fw-light lh-base text-white">
                  "This आदर्श हळद पावडर (सेलम) is a game-changer! It's not just
                  flavorful but also incredibly fresh. Thank you, Worldwide
                  Agro, for bringing this to our kitchens."
                </h5>
                <h5 class="mb-1">Parth Bujawadekar</h5>
                <h6 class="fw-light text-white fst-italic mb-0">
                  Software Developer
                </h6>
              </div>
              <div class="testimonial-item text-center" data-dot="2">
                <img
                  class="img-fluid border p-2"
                  src="img/customer-2.png"
                  alt="" />
                <h5 class="fw-light lh-base text-white">
                  "As a young entrepreneur, I appreciate products that offer
                  both quality and convenience. आदर्श हळद पावडर (सेलम) is the
                  perfect fit for my busy lifestyle – it's top-notch and
                  incredibly versatile"
                </h5>
                <h5 class="mb-1">Vipul Ghorpade</h5>
                <h6 class="fw-light text-white fst-italic mb-0">
                  Agricultural Entrepreneur
                </h6>
              </div>
              <div class="testimonial-item text-center" data-dot="3">
                <img
                  class="img-fluid border p-2"
                  src="img/customer-3.png"
                  alt="" />
                <h5 class="fw-light lh-base text-white">
                  "As a catering professional, I rely on exceptional ingredients
                  to make memorable dishes. आदर्श हळद पावडर (सेलम) has
                  consistently delivered quality and flavor that impresses my
                  clients."
                </h5>
                <h5 class="mb-1">Akshay Pawar</h5>
                <h6 class="fw-light text-white fst-italic mb-0">
                  Catering Entrepreneur
                </h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Testimonial End -->

    <!-- Blog Start -->
    <!-- <div class="container-fluid py-5">
      <div class="container">
        <div
          class="mx-auto text-center wow fadeIn"
          data-wow-delay="0.1s"
          style="max-width: 600px">
          <h1 class="text-primary mb-3">
            <span class="fw-light text-dark">From Our</span> Blog Articles
          </h1>
          <p class="mb-5">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
            aliquet, erat non malesuada consequat, nibh erat tempus risus.
          </p>
        </div>
        <div class="row g-4">
          <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
            <div class="blog-item border h-100 p-4">
              <img class="img-fluid mb-4" src="img/blog-1.jpg" alt="" />
              <a href="" class="h5 lh-base d-inline-block"
                >Foods that are good for your hair growing</a
              >
              <div class="d-flex text-black-50 mb-2">
                <div class="pe-3">
                  <small class="fa fa-eye me-1"></small>
                  <small>9999 Views</small>
                </div>
                <div class="pe-3">
                  <small class="fa fa-comments me-1"></small>
                  <small>9999 Comments</small>
                </div>
              </div>
              <p class="mb-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                aliquet, erat non malesuada consequat.
              </p>
              <a href="" class="btn btn-outline-primary px-3">Read More</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
            <div class="blog-item border h-100 p-4">
              <img class="img-fluid mb-4" src="img/blog-2.jpg" alt="" />
              <a href="" class="h5 lh-base d-inline-block"
                >How to take care of hair naturally</a
              >
              <div class="d-flex text-black-50 mb-2">
                <div class="pe-3">
                  <small class="fa fa-eye me-1"></small>
                  <small>9999 Views</small>
                </div>
                <div class="pe-3">
                  <small class="fa fa-comments me-1"></small>
                  <small>9999 Comments</small>
                </div>
              </div>
              <p class="mb-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                aliquet, erat non malesuada consequat.
              </p>
              <a href="" class="btn btn-outline-primary px-3">Read More</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
            <div class="blog-item border h-100 p-4">
              <img class="img-fluid mb-4" src="img/blog-3.jpg" alt="" />
              <a href="" class="h5 lh-base d-inline-block"
                >How to use our natural & organic shampoo</a
              >
              <div class="d-flex text-black-50 mb-2">
                <div class="pe-3">
                  <small class="fa fa-eye me-1"></small>
                  <small>9999 Views</small>
                </div>
                <div class="pe-3">
                  <small class="fa fa-comments me-1"></small>
                  <small>9999 Comments</small>
                </div>
              </div>
              <p class="mb-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                aliquet, erat non malesuada consequat.
              </p>
              <a href="" class="btn btn-outline-primary px-3">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Blog End -->

    <!-- Newsletter Start -->
    <!-- <div class="container-fluid newsletter bg-primary py-5 my-5">
      <div class="container py-5">
        <div
          class="mx-auto text-center wow fadeIn"
          data-wow-delay="0.1s"
          style="max-width: 600px">
          <h1 class="text-white mb-3">
            <span class="fw-light text-dark">Let's Subscribe</span> The
            Newsletter
          </h1>
          <p class="text-white mb-4">
            Subscribe now to get 30% discount on any of our products
          </p>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7 wow fadeIn" data-wow-delay="0.5s">
            <div class="position-relative w-100 mt-3 mb-2">
              <input
                class="form-control w-100 py-4 ps-4 pe-5"
                type="text"
                placeholder="Enter Your Email"
                style="height: 48px" />
              <button
                type="button"
                class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2">
                <i class="fa fa-paper-plane text-white fs-4"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Newsletter End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-white footer">
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.php" class="d-inline-block mb-3">
              <!-- <h1 class="text-primary">Hairnic</h1> -->
              <img src="./img/logo.png" alt="Logo" id="logo" />
            </a>
            <p class="mb-0">
              हा उडतरे,वाई येथील भेसळ विरहीत चमकदार (केशरी-पिवळा) रंग आणि
              उत्कृष्ठ चव असणाऱ्या हळद पावडर आणि इतर ऍग्रो प्रॉडक्ट्स चे उत्पादन
              घेत असून, <b>थेट शेतकरी ते ग्राहकांपर्यंत</b> आपले उत्पादन
              पोहोचवित आहोत.
            </p>
          </div>
          <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
            <h5 class="mb-4">Get In Touch</h5>
            <p>
              <i class="fa fa-map-marker-alt me-3"></i>At. Po.
              Udtare,Wai,Satara.
            </p>
            <p><i class="fa fa-phone-alt me-3"></i>+91 8788459811</p>
            <p style="font-size: 15px">
              <i class="fa fa-envelope me-3"></i>worldwideexim97@gmail.com
            </p>
            <div class="d-flex pt-2">
              <!-- <a class="btn btn-square btn-outline-primary me-1" href=""
                ><i class="fab fa-twitter"></i
              ></a> -->
              <a
                class="btn btn-square btn-outline-primary me-1"
                target="_blank"
                href="https://www.facebook.com/profile.php?id=100094770774529&mibextid=LQQJ4d"
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a
                class="btn btn-square btn-outline-primary me-1"
                target="_blank"
                href="https://instagram.com/worldwideagro_?igshid=OGQ5ZDc2ODk2ZA=="
                ><i class="fab fa-instagram"></i
              ></a>
              <a
                class="btn btn-square btn-outline-primary me-1"
                target="_blank"
                href="https://wa.me/+918788459811"
                ><i class="fab fa-whatsapp"></i
              ></a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
            <h5 class="mb-4">Our Products</h5>
            <a class="btn btn-link" href="">आदर्श हळद पावडर (सेलम)</a>
            <a class="btn btn-link" href="">आदर्श वर्ल्डटॉम टोमेटो पावडर</a>
            <a class="btn btn-link" href="">आदर्श वर्ल्डऑनियन पावडर</a>
            <a class="btn btn-link" href="">आदर्श वर्ल्डमधुर गुळ पावडर</a>
            <a class="btn btn-link" href="">आदर्श वर्ल्ड मिरची पावडर</a>
            <a class="btn btn-link" href="">आदर्श आले पावडर</a>
          </div>
          <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
            <h5 class="mb-4">Popular Link</h5>
            <a class="btn btn-link" href="about.html">About Us</a>
            <a class="btn btn-link" href="contact.php">Contact Us</a>
            <!-- <a class="btn btn-link" href="">Privacy Policy</a>
            <a class="btn btn-link" href="">Terms & Condition</a>
            <a class="btn btn-link" href="">Career</a> -->
          </div>
        </div>
      </div>
      <div class="container wow fadeIn" data-wow-delay="0.1s">
        <div class="copyright">
          <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
              &copy; <a class="border-bottom" href="#">Worldwide Agro Store</a>,
              All Right Reserved.

              <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
              <br />Designed By
              <a
                class="border-bottom"
                target="_blank"
                href="https://www.linkedin.com/in/parth-bujawadekar/"
                >Parth Bujawadekar,CodeGen Technologies,Satara</a
              >
            </div>
            <!-- <div class="col-md-6 text-center text-md-end">
              <div class="footer-menu">
                <a href="">Home</a>
                <a href="">Cookies</a>
                <a href="">Help</a>
                <a href="">FAQs</a>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>