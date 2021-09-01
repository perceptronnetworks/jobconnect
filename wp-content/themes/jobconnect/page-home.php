<?php
/**
 * Template Name: Home page
 */
get_header();
?>
<main id="primary" class="site-main">
<body>
<!-- ***** Header Area Start ***** -->

<!-- ***** Header Area End ***** -->

<!-- ***** Main Banner Area Start ***** -->
<?php
  if( have_rows('slider') ):
    while( have_rows('slider') ): the_row();
      $background_video = get_sub_field('background_video');
      $title = get_sub_field('title');
      $sub_title = get_sub_field('sub_title');
      $contact_button_label = get_sub_field('contact_button_label');
      $contact_button_link = get_sub_field('contact_button_link');
?>
<div class="main-banner" id="top">
    <video autoplay muted loop id="bg-video">
        <source src="<?php echo $background_video; ?>" type="video/mp4" />
    </video>

    <div class="video-overlay header-text">
        <div class="caption">
            <h6><?php echo $title; ?></h6>
            <h2><?php echo $sub_title; ?></h2>
            <div class="main-button">
                <a href="<?php echo $contact_button_link; ?>"><?php echo $contact_button_label; ?></a>
            </div>
        </div>
    </div>
</div>
<?php
  endwhile;
  endif;
?>
<!-- ***** Main Banner Area End ***** -->

<!-- ***** Cars Starts ***** -->
<?php
  if( have_rows('featured_jobs') ):
    while( have_rows('featured_jobs') ): the_row();
      $title = get_sub_field('title');
      $separator_image = get_sub_field('separator_image');
      $description = get_sub_field('description');
      $job_image_1 = get_sub_field('job_image_1');
      $job_department_1 = get_sub_field('job_department_1');
      $job_title_1 = get_sub_field('job_title_1');
      $job_qualification_1 = get_sub_field('job_qualification_1');
      $job_content_1 = get_sub_field('job_content_1');
      $job_image_2 = get_sub_field('job_image_2');
      $job_company_2 = get_sub_field('job_company_2');
      $job_title_2 = get_sub_field('job_title_2');
      $job_qualification_2 = get_sub_field('job_qualification_2');
      $job_content_2 = get_sub_field('job_content_2');
  
     
      
?>
<section class="section" id="trainers">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2><?php echo $title; ?></h2>
                    <img src="<?php echo $separator_image; ?>" alt="">
                    <p><?php echo $description; ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="trainer-item">
                    <div class="image-thumb">
                        <img src="<?php echo $job_image_1; ?>" alt="">
                    </div>
                    <div class="down-content">
                     <span></span>
                     <h4><?php echo $job_department_1; ?></h4>
                        <h6 style="margin-bottom: 10px;"><?php echo $job_title_1; ?></h6>
                        <p><?php echo $job_qualification_1 ?></p>
                        <p><?php echo $job_content_1 ?></p>

                        <!-- <ul class="social-icons">
                            <li><a href="job-details.html">+ View More</a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="trainer-item">
                    <div class="image-thumb">
                        <img src="<?php echo $job_image_2; ?>" alt="">
                    </div>
                    <div class="down-content">
                        <span></span>
                        <h4><?php echo $job_company_2; ?></h4>
                        <h6 style="margin-bottom: 10px;"><?php echo $job_title_2; ?></h6>
                        <p><?php echo $job_qualification_2 ?></p>
                        <p><?php echo $job_content_2 ?></p>

                        <!-- <ul class="social-icons">
                            <li><a href="job-details.html">+ View More</a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="main-button text-center">
            <!-- <a href="jobs.html">View Jobs</a> -->
        </div>
    </div>
</section>
<?php
  endwhile;
  endif;
?>
<!-- ***** Cars Ends ***** -->

<?php
  if( have_rows('about_us_section') ):
    while( have_rows('about_us_section') ): the_row();
      $section_background = get_sub_field('section_background');
      $title = get_sub_field('title');
      $separator_image = get_sub_field('separator_image');
      $paragraph_text = get_sub_field('paragraph_text');
      $about_text = get_sub_field('about_text');
    
?>
<section class="section section-bg" id="schedule" style="background-image: url('<?php echo $section_background; ?>')">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading dark-bg">
                    <h2><?php echo $title; ?></h2>
                    <img src="<?php echo $separator_image; ?>" alt="">
                    <p><?php echo $paragraph_text; ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="cta-content text-center">
                    <p><?php echo $about_text; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
  endwhile;
  endif;
?>

<!-- ***** Blog Start ***** -->
<?php
  if( have_rows('mission_and_vision_section') ):
    while( have_rows('mission_and_vision_section') ): the_row();
      $title = get_sub_field('title');
      $separator_image = get_sub_field('separator_image');
      $mission_image = get_sub_field('mission_image');
      $mission_title = get_sub_field('mission_title');
      $mission_content = get_sub_field('mission_content');
      $vision_image = get_sub_field('vision_image');
      $vision_title = get_sub_field('vision_title');
      $vision_content = get_sub_field('vision_content');
?>
<section class="section" id="our-classes">
    <div class="container">
    <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                <h2><?php echo $title; ?></h2>
                <img src="<?php echo $separator_image; ?>" alt="">
                </div>
            </div>
        </div>
    
        <div class="row">
            <div class="col-lg-6 featured_section" style="display:grid;">
                <div class="content" style="display:flex;">
                    <div class="left-icon" style="margin-right:30px;">
                        <img width="70px" src="<?php echo $mission_image; ?>" alt="fourth muscle">
                    </div>
                    <div class="right-content">
                        <h2><?php echo $mission_title; ?></h2>
                        <p><?php echo $mission_content; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 featured_section" style="display:grid;">
                <div class="content" style="display:flex;">
                  <div class="left-icon" style="margin-right:30px;">          
                        <img width="70px" src="<?php echo $vision_image; ?>" alt="fourth muscle">
                    </div>
                    <div class="right-content">
                        <h2><?php echo $vision_title; ?></h2>
                        <p><?php echo $vision_content; ?></p>
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

<!-- ***** Blog End ***** -->

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