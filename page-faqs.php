<?php get_header();?>

<?php
 $faqs = new WP_Query(array(
        'post_type' => 'faqs', // this can be 'post', 'page', 'custom post type'
        'posts_per_page' => -1 // limit of post to be showed. -1 to show all post
    )) ?>

        <!-- FAQS -->
<div class="faqs">
      <div class="container">
        <div class="faqs__wrapper">
          <h1>Frequently Asked Questions</h1>
          <div class="faqs__info">
            <ul>
              <li id="faqs-1" class="faqs__link active">
                <a href="javascript:void(0)">About Our School</a>
              </li>
              <li id="faqs-2" class="faqs__link">
                <a href="javascript:void(0)"
                  >Excellent Learning and Facilities</a
                >
              </li>
              <li id="faqs-3" class="faqs__link">
                <a href="javascript:void(0)">Job Opportunities</a>
              </li>
            </ul>
            <div class="faqs__content">   
               
              <div id="faqs-1-content" class="faqs__question active"> 
                <h5>About Our School</h5>
                <?php if( $faqs ->have_posts()) : while( $faqs ->have_posts()) :  $faqs ->the_post(); ?>
                <div class="faqs__tab__content">
                  <h4>
                    <span>Q:</span><?php the_title();?>
                    <i class="fa-solid fa-chevron-down"></i>
                  </h4>
                    <p> <?php echo get_the_content(); ?></p>
                </div>

              <?php endwhile; 
        else :
            echo "no more post";
        endif
        ?>
        
                    
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>

        <script>

            const faqs = document.querySelectorAll(".faqs__tab__content h4");
            console.log(faqs);

            faqs.forEach((faq) => {
            faq.addEventListener("click", () => {
                faq.nextElementSibling.classList.toggle("open");
                faq.querySelector("i").classList.toggle("open");
            });
            });


            const tabsNav = document.querySelectorAll(".faqs__link");
const tabsContent = document.querySelectorAll(".faqs__question");
tabsNav.forEach((tab) => {
  tab.addEventListener("click", () => {
    removeActiveTab();
    tab.classList.add("active");
    const activeContent = document.querySelector(`#${tab.id}-content`);
    removeActiveContent();
    activeContent.classList.add("active");
  });
});

function removeActiveTab() {
  tabsNav.forEach((tab) => {
    tab.classList.remove("active");
  });
}

function removeActiveContent() {
  tabsContent.forEach((tab) => {
    tab.classList.remove("active");
  });
}


        </script>

        <?php get_footer(); ?>