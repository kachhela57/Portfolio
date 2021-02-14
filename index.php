<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="style.css">

        <!-- Latest compiled and minified CSS -->
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">





        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Nikhil Portfolio</title>
    </head>
    <body onload="MyFunction()">
                <!----preloader-->
    
        <div id="loading">
         </div>
    
        <!---preloader end--->
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo" style="font-size: 23px;">Portfo<span class="home__title-color">lio.</span></a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#services-section" class="nav__link">Services</a></li>
                        <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                        <li class="nav__item"><a href="#work" class="nav__link">Work</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title">Hi,<br>I'am <span class="home__title-color">Nikhil</span><br><span class="typed-words"></span></h1>

                    <a href="#" class="button" name="sssss" data-target="#mymodals" data-toggle="modal">Contact</a>
                </div>

               <div class="modal" id="mymodals">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="text-center">Feel Free To Contact on this Number: +91-9970360362</h3>
                                    <button type="button" class="close" data-dismiss="modal"> &times;</button>
                                </div>
                            </div>
                        </div>
                    </div>
            

                <div class="home__social">
                    <a href="http://linkedin.com/in/nikhil-kachhela/" class="home__social-icon"><i class='bx bxl-linkedin'></i></a>
                    <a href="https://www.instagram.com/nik_kachhela/" class="home__social-icon"><i class='bx bxl-instagram' ></i></a>
                    <a href="https://github.com/kachhela57" class="home__social-icon"><i class='bx bxl-github' ></i></a>
                </div>

                <div class="home__img">    
                    <img src="images/Picture8.jpg" alt="">
                </div>
            </section>

            <!--===== ABOUT =====-->
            <section class="about section " id="about">
                <h2 class="section-title">About</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="images/myimg6.jpg" alt="">
                    </div>
                    
                    <div>
                        <h2 class="about__subtitle">I'am Nikhil Kachhela</h2>
                        <p class="about__text">An aspiring software engineer, I have Completed my Bachelors of Engineering in Information Technology, From Thadomal shahani engineering college. And I'am AWS certified Cloud Practitioner. I love to create software that addresses today’s problems and promotes ease & simplicity.<br>

                        Through my academics, my focus has been on Cloud engineering and Web development. I’m fascinated by AWS,Web Development and other emerging technologies and how they have created room for engineers to innovate.<br>
                        </p> 
                        <a href="About.html" class="button">About Me</a>
                        <a href="download.php?file=Nikhil_kachhela" class="button">Download CV</a>
                        <button type="button" class="btn btn-outline-primary" data-target="#mymodal" data-toggle="modal" style="border-radius: .5rem;padding: .67rem 2.8rem;">Hire Me</button>          
                    </div>

                    <div class="modal" id="mymodal">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="text-center">Hire Me</h3>
                                    <button type="button" class="close" data-dismiss="modal"> &times;</button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                        <label>
                                            <i class="fa fa-envelope"></i>Email:
                                        </label>
                                        <input type="text" name="" placeholder="Your Email" class="form-control">
                                        </div>

                                        <div class="form-group">

                                         <label>
                                            <i class="fa fa-phone"></i>Phone:
                                        </label>
                                        <input type="text" name="" placeholder="Your Contact" class="form-control">
                                        </div>

                                        <div class="form-group">

                                        <textarea name="YourMessage" id="" placeholder="Your Message" class="form-control"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer justify-content-center">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                        
                    </div> 
                    
                                  
                </div>
            </section>

            <!--===== Services =====-->








                <section class="site-section border-bottom" id="services-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center" data-aos="fade-up">
            <h2 class="section-title">Services</h2>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary bx bx-laptop" style="font-size: 35px;"></span></div>
              <div class="align-content-center">
                <h4>Web Designing</h4>
                <p>We very well realize that a phenomenal web design blends in the right colors, the right layout and an unquestionable code to maximize leads and conversions.</p>
                <p><a href="pricing.html">Pricing</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary bx bxs-cart" style="font-size: 35px;"></span></div>
              <div class="align-content-center">
                <h4>eCommerce</h4>
                <p>Responsive web design ensures your customers are delighted whatever device they shop on. We plan design and Develop your market.</p>
                <p><a href="pricing.html">Pricing</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary bx bx-desktop" style="font-size: 35px;"></span></div>
              <div class="align-content-center">
                <h4>Web Development</h4>
                <p>A website is the face of your business and its appearance lays the first impression of it on your clients. We understand the significance of website.</p>
                <p><a href="pricing.html">Pricing</a></p>
              </div>
            </div>
          </div>


          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary bx bxs-server" style="font-size: 35px;"></span></div>
              <div class="align-content-center">
                <h4>Hosting Service</h4>
                <p>Our hosting solutions range from web hosting to fast dedicated servers. Find it all right here. we use different services and platform to host your application.</p>
                <p><a href="pricingh.html">Pricing</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="400">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary bx bx-line-chart" style="font-size: 35px;"></span></div>
              <div class="align-content-center">
                <h4>Digital Marketing</h4>
                <p>If you are a company looking for the right kind of exposure on the internet, We are there to help you out. If you want people to multitude up to your website.</p>
                <p><a href="pricingd.html">Pricing</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="500">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary bx bx-tab" style="font-size: 35px;"></span></div>
              <div class="align-content-center">
                <h4>Mobile Applications</h4>
                <p>Android has become one of the emerging technologies,we have the best app developers who convert your ideas into a full-fledged Android Application.</p>
                <p><a href="pricinga.html">Pricing</a></p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>






                    










            <!--===== Services =====-->

            <!--===== SKILLS =====-->
            <section class="skills section" id="skills">
                <h2 class="section-title">Skills</h2>

                <div class="skills__container bd-grid">          
                    <div>
                        <h2 class="skills__subtitle">Profesional Skills</h2>
                        
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-html5 skills__icon'></i>
                                <span class="skills__name">HTML5</span>
                            </div>
                            <div class="skills__bar skills__html progress-bar progress-bar-striped progress-bar-animated">

                            </div>
                            <div>
                                <span class="skills__percentage">95%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-css3 skills__icon'></i>
                                <span class="skills__name">CSS3</span>
                            </div>
                            <div class="skills__bar skills__css progress-bar progress-bar-striped progress-bar-animated">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">85%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-javascript skills__icon' ></i>
                                <span class="skills__name">JAVASCRIPT</span>
                            </div>
                            <div class="skills__bar skills__js progress-bar progress-bar-striped progress-bar-animated">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">65%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-amazon skills__icon'></i>
                                <span class="skills__name">AWS</span>
                            </div>
                            <div class="skills__bar skills__ux progress-bar progress-bar-striped progress-bar-animated">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">85%</span>
                            </div>
                        </div>
                    </div>
                    
                    <div>              
                        <img src="images/work3.jpg" alt="" class="skills__img">
                    </div>
                </div>
            </section>

            <!--===== WORK =====-->
            <section class="work section" id="work">
                <h2 class="section-title">Internships And Certifications</h2>

                <div class="work__container bd-grid">
                    <div class="work__img">
                        <img src="images/AWS Certified Cloud Practitioner certificate_page-0001.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="images/Nikhil kachhela simmi foundation internship certificate.png" alt="">
                    </div>
                    <div class="work__img">
                        <img src="images/udemy certifi.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="images/cert1.jpeg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="images/Ferm Internship Letter _page-0001.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="images/cert3.jpeg" alt="">
                    </div>
                </div>
            </section>

            <!--===== CONTACT =====-->
            <section class="contact section" id="contact">
                <h2 class="section-title">Contact</h2>

                <div class="contact__container bd-grid">
                    <form action="connect.php" class="contact__form" method="POST" id="myform">
                        <input type="text" placeholder="Name" class="contact__input" name="FirstName" id="name" >
                        <input type="mail" placeholder="Email" class="contact__input" name="Email" id="email">
                        <textarea name="YourMessage" id="message" cols="0" rows="10" class="contact__input" placeholder="Your Message"></textarea>
                        <input type="submit" name="send" class="contact__button button" value="send" id="send">
                    </form>
                </div>
            </section>
        </main>

        <!--===== FOOTER =====-->
        <footer class="footer">
            <p class="footer__title">Nikhil</p>
            <div class="footer__social">
                <a href="https://www.facebook.com/" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
                <a href="https://www.instagram.com/nik_kachhela/" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
                <a href="#" class="footer__icon"><i class='bx bxl-twitter' ></i></a>
            </div>
            <p>&#169; 2020 copyright all right reserved by Nikhil</p>
        </footer>


        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="js/main.js"></script>


     
        <!--===== typed JS =====-->
        <script src="js/typed.js"></script>
            <script>
            var typed = new Typed('.typed-words', {
            strings: ["Web Developer","And Cloud Engineer"],
            typeSpeed: 100,
            backSpeed: 100,
            backDelay: 2000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
            </script>

  <script src="js/main.js"></script>


   <!-- preloader-->    
<script>
    var preloader = document.getElementById('loading');
    function MyFunction(){
        preloader.style.display = 'none';
    }
</script>
    
     <!-- preloader-->

  
    </body>
</html>

