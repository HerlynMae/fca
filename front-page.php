<?php get_header();?>

    <!-- BANNER -->
    <section class="banner">
      <div class="container">
        <div class="banner__wrapper">
          <iframe
            width="1000"
            height="2500"
            src="https://www.youtube.com/embed/IfZIR11Zdn4?autoplay=1&amp;rel=0&amp;showinfo=0&amp;controls=0&amp;"
          >
          </iframe>
        </div>
      </div>
    </section>

       <!-- FRONT PAGE CONTENT -->

       <section class="frontpage__content">
      <div class="container">
        <div class="frontpage__content__wrapper">
          <img src="<?php echo get_template_directory_uri() . '/img/FCA-Banner.png'?>" alt="" />

          <ul>
            <li><i class="fa-solid fa-check"></i> Flexible Learning Options</li>
            <li><i class="fa-solid fa-check"></i> Social Emotional Learning</li>
            <li><i class="fa-solid fa-check"></i> Holistic Development</li>
            <li>
              <i class="fa-solid fa-check"></i> Highly Skilled and Caring
              Faculty
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- front page application -->
    <section class="application">
      <div class="container">
        <div class="application__wrapper">
          <h2>Apply for a Scholarship</h2>
          <div class="application__content">
              <p>
            FCA's scholarship programs provide funding for qualified students.
            There are two programs: the Academic Scholarship and the Indigent
            Scholarship. Message us or visit us to find out more.
          </p>

          </div>
        
          <div class="application__buttons">
            <button>Academic Scholarship</button>
            <button>Indigent Scholarship</button>
          </div>
        </div>
      </div>
    </section>

    <!-- partners -->

    <section class="partner">
      <div class="container">
        <div class="partner__wrapper">
          <ul>
            <li><a href=""><img src="<?php echo get_template_directory_uri() . '/img/logo-fbs.png'?>" alt=""></a></li>
            <li><a href=""><img src="<?php echo get_template_directory_uri() . '/img/logo-pfm.jpg'?>" alt=""></a></li>
            <li><a href=""><img src="<?php echo get_template_directory_uri() . '/img/threadworks-logo-blck.svg'?>" alt=""></a></li>
            <li><a href=""><img src="<?php echo get_template_directory_uri() . '/img/ftc.jpg'?>" alt=""></a></li>
            <li><a href=""><img src="<?php echo get_template_directory_uri() . '/img/fwc.png'?>" alt=""></a></li>
            <li><a href=""><img src="<?php echo get_template_directory_uri() . '/img/growingleaders.png'?>" alt=""></a></li>
            <li><a href=""><img src="<?php echo get_template_directory_uri() . '/img/abeka.svg'?>" alt=""></a></li>
            <li><a href=""><img src="<?php echo get_template_directory_uri() . '/img/liberty.webp'?>" alt=""></a></li>
          </ul>
        </div>
      </div>
    </section>

<?php get_footer();?>