<?php 
/*
* Template Name: Home
*/
get_header(); ?>
<div id="primary" class="content">
  <div class="hero-image" style="background-image:url('<?php the_field('backgrundsbild'); ?>')"></div>
  <div class="hero-text-container">
    <div class="hero-title">
      <h1>WE ENABLE SUSTAINABLE GROWTH IN AFRICA</h1>
    </div>
    <!-- <div class="arrow-scroll"><i class="fa fa-angle-down"></i></div> -->
  </div>
  <div class="section-start">
    <section class="first-section">
      <!-- <h2 class="text-center pt-5"><b>Our Mission</b></h2> -->
      <div class="arrow-scroll"><i class="fa fa-angle-down"></i></div>

      <div class="section-wrapper row">

        <?php if( have_rows('sektion_1') ):
							while ( have_rows('sektion_1') ) : the_row(); ?>
        <div class="col-sm-12 col-lg-6 fade-y" data-delighter="start:0.90;">
          <div>
            <? the_sub_field('sektion_1_text_vanster');?>
          </div>
        </div>
        <div class="col-sm-12 col-lg-6 fade-y" data-delighter="start:0.85;">
          <div>
            <? the_sub_field('sektion_1_text_hoger');?>
          </div>
        </div>
        <?php endwhile;	else :endif; ?>
      </div>
    </section>
    <section class="second-section">
      <div class="section-wrapper row fade-y" style=" display: flex;
    justify-content: center;" data-delighter="start:0.85;">
        <? the_field('sektion_2_videoblock');?>
      </div>
    </section>
    <section class="third-section">
      <div class="section-wrapper">
        <h2 class="fade-y" data-delighter="start:0.96;"><strong>Making a real impact</strong></h2>
        <div class="d-flex third-section-content  pt-5">
          <?php if( have_rows('sektion_3') ):
							while ( have_rows('sektion_3') ) : the_row(); ?>
          <div class="col-sm-12 col-lg-4 fade-y" data-delighter="start:0.95;">
            <div>
              <? the_sub_field('text_column_1');?>
            </div>
          </div>
          <div class="col-sm-12 col-lg-4 fade-y" data-delighter="start:0.90;">
            <div>
              <? the_sub_field('text_column_2');?>
            </div>
          </div>
          <div class="col-sm-12 col-lg-4">
            <div>
              <h4 class="fade-y text-center" data-delighter="start:0.89;">Direct Impact</h4>
              <div class="d-flex pt-2" style="flex-flow: wrap;">
                <?php if( have_rows('direct_impact') ):
							while ( have_rows('direct_impact') ) : the_row(); ?>
                <div class="col col-lg-6 fade-y pr-0" style="" data-delighter="start:0.92;">
                  <img class="mt-3 d-flex" style="margin: 0 auto;" src="<? the_sub_field('direct_impact_bild');?>" />
                </div>
                <?php endwhile;	else :endif; ?>
              </div>
            </div>
            <div class="pt-5">
              <h4 class="fade-y text-center" data-delighter="start:0.95;">Indirect Impact</h4>
              <div class="d-flex pt-2">
                <?php if( have_rows('indirect_impact') ):
							while ( have_rows('indirect_impact') ) : the_row(); ?>
                <div class="col fade-y" data-delighter="start:0.92;">
                  <img class="" src="<? the_sub_field('indirect_impact_bild');?>" />
                </div>
                <?php endwhile;	else :endif; ?>
              </div>
            </div>
          </div>
          <?php endwhile;	else :endif; ?>
        </div>
      </div>
  </div>
  </section>
  <section class="fourth-section">
    <div class="section-wrapper row">
      <h2><strong>Our team</strong></h2>
      <?php if( have_rows('sektion_4') ):
							while ( have_rows('sektion_4') ) : the_row(); ?>
      <div class="row" data-delighter="start:0.90;">
        <div class="col-sm-12 col-lg-6 fade-y">
          <div class="our-team-img-info">
            <div class="col-xs-12 col-sm-6 fade-y personbild pt-5"
              style="background-image:url('<?php the_sub_field('personbild'); ?>')"></div>
            <div class="col-xs-12 col-sm-6 fade-y pt-4" style="max-width: max-content;
    margin: 0 auto;">
              <p><?php the_sub_field('personinfo');?>
            </div>
            </p>
          </div>
        </div>
        <div class="col-md-12 col-lg-6 col-sm-12 fade-y">
          <div class="pt-5"><?php the_sub_field('personbeskrivning')?></div>
        </div>
      </div>
      <div class="container mt-5">
        <div class="row">
          <div class="col-lg-6 col-sm-12" style="justify-content: center;align-items: center; display: flex;">
            <img class="teambild pt-3" src="<? the_sub_field('teambild');?>" />
          </div>
          <div class="col-lg-6 col-sm-12 mt-4">
            <p><?php the_sub_field('teambeskrivning')?></p>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile;	else :endif; ?>
</div>
</div>
</section>
</div><!-- #primary -->

<?php get_footer();