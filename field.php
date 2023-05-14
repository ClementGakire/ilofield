<?php
include_once("function.php");
$insertTrip = new DB_con();

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $trip = $_POST['trip']; // this is the name o the person paying ?
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $hotel = $_POST['hotel'];
    $profession = $_POST['profession'];
    $sql = $insertTrip->insert($trip, $name, $email, $phone_number, $hotel, $profession);
    if($sql)
    {
        echo "<script>alert('Slot Booked');</script>";
    }
    else
    {
        echo "<script>alert('Slot not Booked');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="">
  <meta name="author" content="codepixer">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta charset="UTF-8">
  <title>Field Visit</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <!-- other CSS files -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700" rel="stylesheet">
  <link rel="stylesheet" href="css/linearicons.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-fxSeDGAKxPXjX2c5g5Ri3EAhVG/5Hn6vKd8Swp1IPMxG6nRH9XUv4DjdtB6+jZn6iGh3/lOo3p8xatx6zO1I5Q==" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/nice-select.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/main.css">
  <script nonce="2b08652c-5a00-46de-b293-4fb0d7c3a425">
    (function(w, d) {
      ! function(dk, dl, dm, dn) {
        dk[dm] = dk[dm] || {};
        dk[dm].executed = [];
        dk.zaraz = {
          deferred: [],
          listeners: []
        };
        dk.zaraz.q = [];
        dk.zaraz._f = function(dp) {
          return function() {
            var dq = Array.prototype.slice.call(arguments);
            dk.zaraz.q.push({
              m: dp,
              a: dq
            })
          }
        };
        for (const dr of ["track", "set", "debug"]) dk.zaraz[dr] = dk.zaraz._f(dr);
        dk.zaraz.init = () => {
          var ds = dl.getElementsByTagName(dn)[0],
            dt = dl.createElement(dn),
            du = dl.getElementsByTagName("title")[0];
          du && (dk[dm].t = dl.getElementsByTagName("title")[0].text);
          dk[dm].x = Math.random();
          dk[dm].w = dk.screen.width;
          dk[dm].h = dk.screen.height;
          dk[dm].j = dk.innerHeight;
          dk[dm].e = dk.innerWidth;
          dk[dm].l = dk.location.href;
          dk[dm].r = dl.referrer;
          dk[dm].k = dk.screen.colorDepth;
          dk[dm].n = dl.characterSet;
          dk[dm].o = (new Date).getTimezoneOffset();
          if (dk.dataLayer)
            for (const dy of Object.entries(Object.entries(dataLayer).reduce(((dz, dA) => ({
                ...dz[1],
                ...dA[1]
              }))))) zaraz.set(dy[0], dy[1], {
              scope: "page"
            });
          dk[dm].q = [];
          for (; dk.zaraz.q.length;) {
            const dB = dk.zaraz.q.shift();
            dk[dm].q.push(dB)
          }
          dt.defer = !0;
          for (const dC of [localStorage, sessionStorage]) Object.keys(dC || {}).filter((dE => dE.startsWith("_zaraz_"))).forEach((dD => {
            try {
              dk[dm]["z_" + dD.slice(7)] = JSON.parse(dC.getItem(dD))
            } catch {
              dk[dm]["z_" + dD.slice(7)] = dC.getItem(dD)
            }
          }));
          dt.referrerPolicy = "origin";
          dt.src = "../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(dk[dm])));
          ds.parentNode.insertBefore(dt, ds)
        };
        ["complete", "interactive"].includes(dl.readyState) ? zaraz.init() : dk.addEventListener("DOMContentLoaded", zaraz.init)
      }(w, d, "zarazData", "script");
    })(window, document);
  </script>
</head>
<body>
  <header id="header" id="home">
    <div class="container">
      <div class="row align-items-center justify-content-between d-flex">
        <div id="logo">
          <a href="index.php"><img src="img/image.png" alt="" title="" width="220" /></a>
        </div>
        <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="field.php" style="color: #feffff !important;">Field Trip</a></li>
          <li><a href="side-event.php" style="color: #feffff !important;">Side Event</a></li>
        </ul>
        </nav>
      </div>
    </div>
  </header>
  <section class="model-area section-gap" id="cars" style="background:url(img/5234064.jpg)">

    <div class="container">
      <div class="row">
        <div class="col-10">
          <img src="img/header.jpg" alt=""  style="width: 100%">
        </div>
      </div>
      <div class="row d-flex justify-content-center pb-40">
        <div class="col-md-8 pb-40 header-text" style="padding-top: 35px !important">
          <h1 class="text-center pb-10">Select field trip location.</h1>
        </div>
      </div>
      <div class="active-model-carusel">
        <div class="row align-items-center single-model item">
          <div class="col-lg-6 model-left">
            <div class="title justify-content-between d-flex">
              <h4 class="mt-20">Pink Mango</h4>
              <h2>20<span>Slots Left</span></h2>
            </div>
            <p>
              -Location: Kigali/Free Zone<br>
              -Skills and Labour market matching : Skills development through workplace learning <br>
              -The employed youth are trained at workplace (garment) and get employed after acquiring necessary skills<br>
              -Labour intensive: Around 4,000 people employed 
              Most of the employed people are women
              Easy to access the site and site can receive a big number of people 
            </p>
            <p>
              
            </p>
            <a class="text-uppercase primary-btn" onclick="pickchoice('Pink Mango')" href="#home">Book a Slot Now</a>
          </div>
          <div class="col-lg-6 model-right">
            <img class="img-fluid" src="img/pinkmango.png" alt="">
          </div>
        </div>
        <div class="row align-items-center single-model item">
          <div class="col-lg-6 model-left">
            <div class="title justify-content-between d-flex">
              <h4 class="mt-20">Muhanga ICPC</h4>
              <h2>100<span>Slots Left</span></h2>
            </div>
            <p>
            -Location: Muhanga  District<br>
            -Skills and labour market: Youth Employment Promotion; Promotion of Made in Rwanda Products, Entrepreneurship development (carpentry and welding sectors)<br>
            -Estimated number of beneficiaries on ground: 550 people<br>
            -Number of people the area can receive: 200 (divided into 4 groups of  50 people)<br>
            -Accessibility: easy to access the site

            </p>
            <p>
              
            </p>
            <a class="text-uppercase primary-btn" onclick="pickchoice('Muhanga ICPC')" href="#home">Book a Slot Now</a>
          </div>
          <div class="col-lg-6 model-right">
            <img class="img-fluid" src="img/icpcmuhanga.png" alt="">
          </div>
        </div>
        <div class="row align-items-center single-model item">
          <div class="col-lg-6 model-left">
            <div class="title justify-content-between d-flex">
              <h4 class="mt-20">Center of Excellence: Rwanda Coding Academy</h4>
              <h2>200<span>Slots Left</span></h2>
            </div>
            <p>
              -Location: Nyabihu  District<br>
              -Innovative Skills and labour market: Digitalization of services, Acquired skills needed at labour market , Scaling up the program,<br>
              - Entrepreneurship development  for creating sustainable  jobs<br>
              -Digitalization of systems for environmental protection <br>
              -Availability of 240 beneficiaries/students<br>
              -Able to receive 450 people ( 9 rooms where each room with 50 people),<br>
              -The school has a conference room with capacity of receiving 240 people 
            </p>
            <p>
              
            </p>
            <a class="text-uppercase primary-btn" href="#home">Book a Slot Now</a>
          </div>
          <div class="col-lg-6 model-right">
            <img class="img-fluid" src="img/rwandacodingacademy.png" alt="">
          </div>
        </div>
        <div class="row align-items-center single-model item">
          <div class="col-lg-6 model-left">
            <div class="title justify-content-between d-flex">
              <h4 class="mt-20">IPRC Tumba</h4>
              <h2>150<span>Slots Left</span></h2>
            </div>
            <p>
            The IPRC TUMBA is a higher education institution and training center in Rwanda that was established in 2007 and officially inaugurated in 2008 by the Minister of Education and the President of Japan International Cooperation Agency. Its purpose is to produce higher technicians to benefit Rwanda and the region's economy.
            </p>
            <p>
              
            </p>
            <a class="text-uppercase primary-btn" onclick="pickchoice('IPRC Tumba')" href="#home">Book a Slot Now</a>
          </div>
          <div class="col-lg-6 model-right">
            <img class="img-fluid" src="img/iprc.png" alt="">
          </div>
        </div>
        <div class="row align-items-center single-model item">
          <div class="col-lg-6 model-left">
            <div class="title justify-content-between d-flex">
              <h4 class="mt-20">Ampersand in Kigali</h4>
              <h2>30<span>Slots Left</span></h2>
            </div>
            <p>
              -Location: Kicukiro District<br>
              -The beneficiary receives an onboarding session introducing them to the basics of how the e-moto works;<br>
              -The technical training equips the driver with technical skills: the features of e-motos versus petrol moto with insights on the return on investment for the drivers, e-moto driving skills, list of warranty parts for the driver’s information, map of the charging station network.<br>
              -Project  is scaling up the project to build affordable electric vehicles and charging systems for the five
              million motorcycle taxi drivers in East Africa<br>
              -Environment protection: Reducing air pollution and greenhouse gas emissions by replacing petrol motorcycles with zero emissions electric motorcycles that are powered by clean energy.<br>
              -The area is able to receive 100 people <br>
              -Accessibility of the site: Easy (it is located near NAEB Offices<br>

            </p>
           
            <a class="text-uppercase primary-btn" onclick="pickchoice('Ampersand in Kigali')" href="#home">Book a Slot Now</a>
          </div>
          <div class="col-lg-6 model-right">
            <img class="img-fluid" src="img/ampersand.png" alt="">
          </div>
        </div>
        <div class="row align-items-center single-model item">
          <div class="col-lg-6 model-left">
            <div class="title justify-content-between d-flex">
              <h4 class="mt-20">Kinigi IDP Model Village</h4>
              <h2>200<span>Slots Left</span></h2>
            </div>
            <p>
            -Location: Musanze  District<br>
            -Socio-economic infrastructure facilities: Accommodation of 144 families (680 households) <br>
            -Labour intensive: Agribusiness activities like livestock (Cows, poultry,..),Agakiriro<br>
            -Environmental protection: Rwanda’s efforts in community development and welfare and relocation of population from high-risk zones<br>
            -Number of people the area can receive: 300<br>
            -Accessibility: Easy (Only 6 Km from Musanze city)
            </p>
            <a class="text-uppercase primary-btn" onclick="pickchoice('Kinigi IDP Model Village')" href="#home">Book a Slot Now</a>
          </div>
          <div class="col-lg-6 model-right">
            <img class="img-fluid" src="img/idp.png" alt="">
          </div>
        </div>
        <div class="row align-items-center single-model item">
          <div class="col-lg-6 model-left">
            <div class="title justify-content-between d-flex">
              <h4 class="mt-20">Green Gicumbi</h4>
              <h2>60<span>Slots Left</span></h2>
            </div>
            <p>
            -Location: Gicumbi District<br>
            -Skills and Labour market matching : Knowledge transfer<br>
            -Labour intensive: 21,734 green jobs created (Target: 84,555)<br>
            -Environmental protection: Watershed protection, climate resilient and sustainable forest management, construction of radical terracing <br>
            -Estimated number of beneficiaries on ground: 200 people<br>
            -Number of people the area can receive: 50<br>
            -Accessibility: Complicated somehow

            </p>
            <a class="text-uppercase primary-btn" onclick="pickchoice('Green Gicumbi')" href="#home">Book a Slot Now</a>
          </div>
          <div class="col-lg-6 model-right">
            <img class="img-fluid" src="img/greengicumbi.png" alt="">
          </div>
        </div>
        <div class="row align-items-center single-model item">
          <div class="col-lg-6 model-left">
            <div class="title justify-content-between d-flex">
              <h4 class="mt-20">Gisozi Genocide Museum</h4>
              <h2>20<span>Slots Left</span></h2>
            </div>
            <p>
            The Kigali Genocide Memorial commemorates the 1994 Rwandan genocide. The remains of over 250,000 people are interred there. There is a visitor centre for students and others wishing to understand the events leading up to the genocide that occurred in Rwanda in 1994.
            </p>
            <p>
              
            </p>
            <a class="text-uppercase primary-btn" onclick="pickchoice('Gisozi Genocide Museum')" href="#home">Book a Slot Now</a>
          </div>
          <div class="col-lg-6 model-right">
            <img class="img-fluid" src="img/gisozigenocidememorial.png" alt="">
          </div>
        </div>
        <div class="row align-items-center single-model item">
          <div class="col-lg-6 model-left">
            <div class="title justify-content-between d-flex">
              <h4 class="mt-20">Kigali City Tour</h4>
              <h2>20<span>Slots Left</span></h2>
            </div>
            <p>
            Kigali is the capital city of Rwanda, roughly in the center of the country. It sprawls across numerous hills, ridges and valleys, and has a vibrant restaurant and nightlife scene. 
            </p>
            <p>
              
            </p>
            <a class="text-uppercase primary-btn" href="#home">Book a Slot Now</a>
          </div>
          <div class="col-lg-6 model-right">
            <img class="img-fluid" src="img/kigali.jpeg" alt="">
          </div>
        </div>
        <div class="row align-items-center single-model item">
          <div class="col-lg-6 model-left">
            <div class="title justify-content-between d-flex">
              <h4 class="mt-20">Nyandungu Urban Waterland Eco-tourism park</h4>
              <h2>20<span>Slots Left</span></h2>
            </div>
            <p>
            Nyandungu Urban Wetland Ecotourism park is a 120 hectares of surface area, Rwandan tourism park located between Gasabo and Kicukiro Districts which allows sustainable travel of people to enjoy natural areas and wild animals in Nyandungu Valley.
            </p>
            <p>
              
            </p>
            <a class="text-uppercase primary-btn"  href="#home">Book a Slot Now</a>
          </div>
          <div class="col-lg-6 model-right">
            <img class="img-fluid" src="img/nyandungu.png" alt="">
          </div>
        </div>
        <div class="row align-items-center single-model item">
          <div class="col-lg-6 model-left">
            <div class="title justify-content-between d-flex">
              <h4 class="mt-20">Conference Infrastructure (KCC & BK Arena)</h4>
              <h2>20<span>Slots Left</span></h2>
            </div>
            <p>
            Kigali, the capital city of Rwanda, is home to several conference and exhibition infrastructures that host a variety of events and conferences throughout the year.
            </p>
            <p>
              
            </p>
            <a id="book-now" class="text-uppercase primary-btn" data-value="Conference Infrastructure (KCC & BK Arena)" href="#home">Book a Slot Now</a>
          </div>
          <div class="col-lg-6 model-right">
            <img class="img-fluid" src="img/kcc.png" alt="">
          </div>
        </div>
        
      </div>
    </div>
  </section>
  <section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
      <div class="row fullscreen d-flex align-items-center justify-content-center">
        <div class="col-lg-12 col-md-12 header-right">
          <h4 class="text-white pb-30">Book Your Spot Today!</h4>
          <form class="form" role="form" autocomplete="off" method="POST" action="" name="insert">
            <div class="form-group row">
              <div class="col-md-12 wrap-left">
                <div class="default-select" id="default-select">
                  <select name="trip" required id="select-element">
                    <option value="" disabled selected hidden>Field Visit Location</option>
                    <option value="Pink Mango">Pink Mango</option>
                    <option value="Muhanga ICPC">Muhanga ICPC</option>
                    <option value="Center of Excellence: Rwanda Coding Academy">Center of Excellence: Rwanda Coding Academy</option>
                    <option value="IPRC Tumba">IPRC Tumba</option>
                    <option value="Ampersand in Kigali">Ampersand in Kigali</option>
                    <option value="Kinigi IDP Model Village">Kinigi IDP Model Village</option>
                    <option value="Gisozi Genocide Museum">Gisozi Genocide Museum</option>
                    <option value="Kigali City Tour">Kigali City Tour</option>
                    <option value="Nyandungu Urban Waterland Eco-tourism park">Nyandungu Urban Waterland Eco-tourism park</option>
                    <option value="Conference Infrastructure (KCC & BK Arena)">Conference Infrastructure (KCC & BK Arena)</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="from-group">
              <input class="form-control txt-field" type="email" id="email-filter" name="email" placeholder="Email address" required>
              <button id="email-filter-exist" class="btn btn-default btn-lg btn-block text-center text-uppercase">Verify</button>
              <div class="disabled" id="rest-of-form">
                  <input class="form-control txt-field" type="text" id="fullname" name="name" placeholder="Your name" required disabled>              
                  <input class="form-control txt-field" type="tel" id="phone_number" name="phone_number" placeholder="Phone number(Include Country Code)" disabled>
                  <input class="form-control txt-field" type="text" id="hotle" name="hotel" placeholder="Hotel(Where are you staying?)" required>
                  <input class="form-control txt-field" type="text" id="nationality" name="profession" placeholder="Nationality" required disabled>
                  <div class="form-group row">
                    <div class="col-md-12">
                      <input type="submit" class="btn btn-default btn-lg btn-block text-center text-uppercase" value="Confirm Your Spot Booking" name="submit">
                    </div>
                  </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  
  <footer class="footer-area">
    <div class="container">
      <div class="row">
        <p class="mt-50 mx-auto footer-text col-lg-12">
          Copyright &copy;<script>
            document.write(new Date().getFullYear());
          </script> All rights reserved | Events Factory
        </p>
      </div>
    </div>
  </footer>
  <script src="js/vendor/jquery-2.2.4.min.js"></script>
  <script src="js/easing.min.js"></script>
  <script src="js/hoverIntent.js"></script>
  <script src="js/superfish.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/parallax.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/main.js"></script>
  <script>
    function pickchoice(choice) {
      $('#select-element').val(choice);
      $('#select-element').niceSelect('update');
    }

    $('#email-filter-exist').on('click', function() {
      var email = $('#email-filter').val();
      if (email !== '') {
        var xhr = new XMLHttpRequest();
        xhr.addEventListener("readystatechange", function() {
          if(this.readyState === 4) {
            let res = JSON.parse(this.responseText);
            if(res.data) {
              // respinho2014@gmail.com
              $('#email-filter-exist').addClass('disabled');
              $('#fullname').val(res.data.firstName + ' ' + res.data.lastName);
              $('#phone_number').val(res.data.phone);
              $('#nationality').val(res.data.nationality)
              $('#rest-of-form').removeClass('disabled');
            }else{
              alert("Your email is not registered in our system. Please register first.")
            }
          }
        });

        xhr.open("GET", "https://app-ilorwanda2023.rw/api/application-by-email/"+email);
        xhr.setRequestHeader("Authorization", "Bearer eyJhbGciOiJIUzI1NiJ9.aWxvcndhbmRhMjAyMw.oUkLbDEWPkT96OeUu5W4mtIYXZBTeIgcvVaXGn4elBU");
        xhr.send();
      }
      });
  </script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7c61f86589599cb4","version":"2023.4.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>
</body>
</html>