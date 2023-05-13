<?php

?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="img/fav.html">
  <meta name="author" content="codepixer">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta charset="UTF-8">
  <title>Field Visit</title>
  <link href="../../../fonts.googleapis.com/cssff8c.css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
  <link rel="stylesheet" href="css/linearicons.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/nice-select.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="../../../code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
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
          <a href=""><img src="img/image.png" alt="" title="" width="220" /></a>
        </div>
        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li class="menu-active"><a href="" style="color: #feffff !important;">Home</a></li>
            <li><a href="about.html" style="color: #feffff !important;">Destinations</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <section class="model-area section-gap" id="cars">
    <div class="container">
      <div class="row">
        <div class="col-10">
          <img src="img/header.jpg" alt=""  style="width: 100%">
        </div>
      </div>
      <div class="row d-flex justify-content-center pb-40">
        <div class="col-md-8 pb-40 header-text" style="padding-top: 35px !important">
        
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
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script> 
  <script async src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script async src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script async src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
  <script async src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script async src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script async src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script async src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
  <script async src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
  <script>
    $(document).ready(function() {
    $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
  </script>
 </body>
</html>