<?php 
// Template Name: Contact New ?>

<?php 
    get_header('inner');
    the_post(); ?>

<div class="contact-wrapper">
        <div class="container">
            <div class="row flex">
                <div class="col-30" data-aos="fade-up">
                    <h3>Let’s Start The Journey.</h3>
                    <p>Our hours are from 8 am to 6 pm Monday to Friday. Feel free to call us within these hours, we’d love to speak with you!</p>
                    <a href="tel:(312) 428 9365" class="btn"> <i class="fa fa-phone" aria-hidden="true"></i>Give a Call</a>
                    <div class="contact__detail" data-aos="fade-up">
                        <h4>Email</h4>
                        <a href="mailto:ozevac@gmail.com">ozevac@gmail.com</a>
                        <h4>Phone Number</h4>
                        <ul>
                            <li>Office: <a href="tel:+61 409 537 333">+61 409 537 333</a> <b>(Outside Australia)</b></li>
                            <li> Cell: <a href="tel:0409 537 333">0409 537 333</a> <b>(Within Australia)</b></li>
                        </ul>
                        <h4>We Are Open</h4>
                        <ul>
                            <li>Monday – Friday <br> <b>8 AM – 6 PM</b></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- footer vstart here -->

<footer>
      <div class="logo">
        <a href="./homepage.html">
          <h1>Ozevac <span>Aeromedical Retrieval Specialists</span></h1>
        </a>
      </div>
      <div class="copy-right">
        <div class="container">
          <ul class="flex justify-content align-center">
            <li>© Copyright ozevac. All rights reserved</li>
            <li class="socila icon">
              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
  </body>
</html>