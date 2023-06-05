<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/price_rangs.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/handsfree@8.5.1/build/lib/assets/handsfree.css" />
     <script src="https://unpkg.com/handsfree@8.5.1/build/lib/handsfree.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

     <style>
        
@media (min-width: 1024px) {
  .dropdown-submenu:hover > .dropdown-menu {
    display: block;
  }
}

 .dropdown-toggle::after {
  display: none;
}

@media (min-width: 1024px) {
  .hover-dropdown > .dropdown:hover > .dropdown-menu {
    display: block;
    margin-top: 0px;
  }
}

.header2 .btn-dark {
  color: #fff;
  background-color: #343a40;
  border-color: #343a40;
}

.btn-dark:hover {
  color: #fff;
  background-color: #23272b;
  border-color: #1d2124;
}


.dropdown-submenu > .dropdown-menu {
  top: 0;
  left: 100%;
  margin-left: 0;
  border-radius: 0.25rem;
  display: none;
}
        </style>
</head>

<body>

    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="header-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-1 col-md-1">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.php"><img src="assets/img/logo/logo.png" alt="" width="50"></a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="menu-wrapper">
                                <!-- Main-menu -->
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block ml-20">
                                        <ul id="navigation">
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="findjobs.php">Find a Jobs </a></li>
                                            <li><a href="about.php">About</a></li>
                                            <li><a href="contact.php">Contact</a></li>
                                        </ul>

                                    </nav>
                                </div>
                                <!-- Header-btn -->
                                <div class="header-btn d-none f-right d-lg-block">
                                    <a href="seeker.login.php" class="btn head-btn1 m-4">Job Seeker</a>
                                    <a href="employer_login.php" class="btn head-btn2 m-2">Employer</a>
                                </div>
                               


                                <div class="dropdown ml-3">
                                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Disability
                                    </button>
                                         <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#" onclick="return responsiveVoice.clickEvent();" >Dyslexia</a></li>
                                        <li><a class="dropdown-item" href="#" onclick="return handsfree.start();">Motor Disabilities</a></li>
                                        <li><a class="dropdown-item" href="#" onclick="return magnify();">Low Vision</a></li>
                                        <li class="divider" role="separator"></li>
                                                <li class="dropdown-submenu position-relative"> <a class="dropdown-toggle dropdown-item" href="#" data-toggle="dropdown">Color Blindness <i class="fa fa-long-arrow-right float-right mt-1"></i></a>
                                                  <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#" onclick="colorG()">Deuteranopia</a></li>
                                                    <li><a class="dropdown-item" href="#" onclick="colorR()">Protanopia</a></li>
                                                    <li class="divider" role="separator"></li>
                                                    <li><a class="dropdown-item" href="#"onclick="colorB()">Tritanopia</a></li>
                                                    <li class="divider" role="separator"></li>
                                                    <li><a class="dropdown-item" href="#" onclick="colorA()">Monochromacy</a></li>
                                                  </ul>
                                                </li>
                                              </ul>
                                        </li>
                                        </ul>

                              <!--      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#" onclick="return magnify();">Low Vision</a>
                                        <a class="dropdown-item" href="#"
                                            onclick="return responsiveVoice.clickEvent();">Dyslexia</a>
                                        <a class="dropdown-item" href="#"
                                            onclick="return responsiveVoice.clickEvent();">Hard Hearing</a>
                                        <a class="dropdown-item" href="#" onclick="return handsfree.start();">Motor
                                            Disabilities</a>
                                        <a class="dropdown-item" href="#" onclick="colorblind()">Color Blindness</a>  
                                    </div>-->
                                </div>

    <!--                            <div class="dropdown ml-3" id="colors" style="display : none;">
                                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Types 
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"  onclick="colorG()">Deuteranopia</a>
                                        <a class="dropdown-item" href="#"
                                        onclick="colorR()">Protanopia</a>
                                        <a class="dropdown-item" href="#"
                                        onclick="colorB()">Tritanopia</a>
                                        <a class="dropdown-item" href="#" onclick="colorA()">Monochromacy</a>

                                    </div>
                                </div>-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   

    </header>
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=95SUIrBf"></script>
    <script>
        function colorblind() {
            document.getElementById('colors').style.display= "block";
        };
        function colorG() {
            document.body.classList.toggle('nogreen');
            
        };
        function colorB() {
            document.body.classList.toggle('noblue');
        
        };
        function colorR() {
            document.body.classList.toggle('nored');
          
        };
        function colorA() {
            document.body.classList.toggle('dark');
            
        };

        const handsfree = new Handsfree({
    weboji: true
})
handsfree.enablePlugins('browser')
    </script>
    <!-- Start of ChatBot (www.chatbot.com) code -->
<script type="text/javascript">
    window.__be = window.__be || {};
    window.__be.id = "6372050d44eb4900077c6d7f";
    (function() {
        var be = document.createElement('script'); be.type = 'text/javascript'; be.async = true;
        be.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.chatbot.com/widget/plugin.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(be, s);
    })();
</script>
<!-- End of ChatBot code -->
<script>
    $(document).on('click', '.dropdown-menu', function (e) {
  e.stopPropagation();
});

// make it as accordion for smaller screens
if ($(window).width() < 992) {
  $('.dropdown-menu a').click(function(e){
    e.preventDefault();
      if($(this).next('.submenu').length){
        $(this).next('.submenu').toggle();
      }
      $('.dropdown').on('hide.bs.dropdown', function () {
     $(this).find('.submenu').hide();
  })
  });
}
    </script>

</body>

</html>