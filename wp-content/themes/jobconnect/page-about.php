<?php
/**
 * Template Name: About page
 */
get_header();
?>
 <main id="primary" class="site-main">
<body>
<?php
  if( have_rows('slider') ):
    while( have_rows('slider') ): the_row();
      $background_image = get_sub_field('background_image');
      $title = get_sub_field('title');
      $sub_title = get_sub_field('sub_title');
?>
    <section class="section section-bg" id="call-to-action" style="background-image: url(<?php echo $background_image; ?>)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2><?php echo $title; ?></h2>
                        <p><?php echo $sub_title; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
  endwhile;
  endif;
?>
    <!-- ***** Our Classes Start ***** -->
    <section class="section" id="our-classes">
       <!-- <div  style="display:flex; padding:0px;">
               <div class="col-lg-12" style="margin-bottom:20px;">
                  <div class="col-lg-6">
                      <p>Internationljobconnect was created by an young team with the global contacts and exposure. The team also has highly experienced academicians, industrialists, consultants, freelancers, philosophers and influencers. This team believes there is always a need for right talent whatever the situation is. There exist a bridge in getting the right talent with the faster connect. This team endeavor to create the right talent and also connect them with the right job.</p>
                  </div>  
                  <div class="col-lg-6">
                    <p>Internationljobconnect was created by an young team with the global contacts and exposure. The team also has highly experienced academicians, industrialists, consultants, freelancers, philosophers and influencers. This team believes there is always a need for right talent whatever the situation is. There exist a bridge in getting the right talent with the faster connect. This team endeavor to create the right talent and also connect them with the right job.</p>
                  </div>  
                </div>
     </div> -->
        <div class="container" style="margin-top:80px;">

                <div class="col-lg-12" style="margin-bottom:20px;">
                  <h2 style="padding:20px 0px;">Why Internationaljobconnect (IJC)</h2>
                  <p>IJC has the team that believe there exist a need of right talent what ever the economic situation is in the world. The team has both young and older and experienced group of people. We came across both need for job and need for right people. But there are less people in the market to do the right connect with international exposure. IJC team has global connections and networks, we feel why not to use our network to do something useful and inspirable. This is how the germination of IJC begins. We are starting this company to focus identifying right talents and connect with right job.</p>
                </div>

              <div class="col-lg-12" style="margin-bottom:20px;">
              <h2 style="padding:20px 0px;">Where we can connect.</h2>
              <p>IJC team has connection across the globe, right now we are gathering the right jobs from India, Zambia, Malawi, Zimbabwe, Tanzania, Malaysia, Singapore, New Zeland and Italy. We are sure our roots will search for waters from forthcoming years.</p>
              </div>

              <div class="col-lg-12" style="margin-bottom:20px;">
              <h2 style="padding:20px 0px;">How we operate.</h2>
              <p>We find the decent jobs across the globe. We will post the job in our website as and when it comes to our radar. We operate directly with the employer sometimes, such cases we take the responsibility directly. We collect resume and other details from the customers and shortlist the right candidates with carefully review by our high level HR team. We take immense care in selecting the right candidates and share the shortlisted candidates with the employer. Finally employer will decide to connect with the right candidate. We charge the candidate if he/she get the job and worked for and worked for a month time. We will get the money only after any candidate get their first month salary. We commit for the same.</p>
              </div>

        </div>
    </section>
    <!-- ***** Our Classes End ***** -->

    <?php
  if( have_rows('contact_message_section') ):
    while( have_rows('contact_message_section') ): the_row();
      $section_background = get_sub_field('section_background');
      $title = get_sub_field('title');
      $description = get_sub_field('description');
      $button_label = get_sub_field('button_label');
      $button_link = get_sub_field('button_link');
    
?>
<!-- ***** Call to Action Start ***** -->
<section class="section section-bg" id="call-to-action" style="background-image: url(<?php echo $section_background; ?>)">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <h2><?php echo $title; ?></h2>
                    <p><?php echo $description; ?></p>
                    <div class="main-button">
                        <a href="<?php echo $button_link; ?>"><?php echo $button_label; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
  endwhile;
  endif;
?>
<!-- ***** Call to Action End ***** -->
    </body>
</main><!-- #main -->
<?php
get_sidebar();

get_footer();