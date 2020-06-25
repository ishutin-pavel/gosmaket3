<?php
/*
Template Name: о мастерской
*/
get_header(); ?> 
<div class="page__row page__row--cover" style="background-image: url(<?php the_field('stati_image'); ?>);">
    <div class="page__cell">
        <div class="cover">
            <h1 class="cover__headline headline headline--h3"><?php the_field('stati_title'); ?></h1>
        </div>
    </div>
</div>
<div class="page__row">
    <div class="page__cell">
        <div class="page__block">
            <?php while ( have_posts() ) : the_post(); ?>
              <?php the_content(); ?>
            <? endwhile;?>
            <div style="margin-bottom:60px" class="works__title">LAYOUT STUDIO - A PLACE WHERE THE PROFESSIONALS OF VARIOUS PROFILE COMBINE TO SOLVE THE SPECIFIC DELIVERED MARKETING PROBLEM</div>

            <div class="article">
                <div class="row">			
                    <div class="col-12 col-lg-6">
                        <div class="article__block">
                            <div class="title title--mr">FOR A BIG UNDERSTANDING, DISCUSSING EXAMPLES</div>
                            <p>There is a customer - the owner of certain assets, financial support and the idea of creating a complex for the processing and storage of grain crops. Simply put elevator complex. But for a full-fledged launch of the project, there is not enough funding and then it attracts investors by participating in various investment forums and agricultural exhibitions. He is looking for interested investors in a well-thought-out business idea with completely transparent and clear prospects for earning on certain conditions. So in this case, one cannot come up with a more effective tool for visualizing and presenting an idea than a tangible, real layout of this elevator complex. The model in this case is a reduced copy of the territory with elevators, office buildings, a fleet of maintenance equipment and border territory. The layout gives so much clarity that it is no longer possible to imagine, not a single picture and visualization will give a more understandable idea of the volume of this industrial territory and its appearance.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="article__block">
                            <img src="<?php echo get_template_directory_uri(); ?>/pic/works1.jpg" alt="макетная студия" class="article__picture img-responsive">
                        </div>
                    </div>	
                </div><!-- .row -->

                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="article__block">
                            <img src="<?php echo get_template_directory_uri(); ?>/pic/works2.jpg" alt="застройщик" class="article__picture img-responsive">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="article__block">
                            <div class="title title--mr">NEXT EXAMPLE</div>
                            <p>There is a developer, he is engaged in the purchase of land and hired contractors or self-development of this territory. There he can build absolutely any structure, limited only by design standards and architectural legislation. It can be an office building or a residential complex. So at the middle stage of development, marketers and managers are selling future apartments or finding tenants for future offices. In this particular case, the layout is a very convenient tool for attracting customers for the developer. Take a look at the layout through the eyes of the future owner of the apartment or tenant. Let's say the layout is in the mall, in its brightest place. A person passing by, in any case, will pay attention to the layout itself, it is so wound up that such toys are interesting to everyone "from small to large." Paying attention - he will read the printing information about the special offer from the developer and will begin to examine the object itself. Due to its scale, he will be able to evaluate the infrastructure, the convenience of the entrance and recreation area, will be able to appreciate the aesthetic qualities of the complex. He will definitely be able to see everything that he wants to see in the real complex, and in this case - his call will not only be targeted, but decisive.</p>
                        </div>
                    </div>
                </div>												
            </div><!-- .article -->

            <div class="works__title">THE LAYOUT OF YOUR CONSTRUCTION IS THE FACE OF YOUR COMPANY FOR THE WHOLE MARKETING ACTION. SO LETTER IN THIS CASE YOU REPRESENT A QUALITATIVE BEAUTIFUL LAYOUT FILLED WITH LIGHTING AND DYNAMIC OBJECTS, MAKE THAT YOUR OBJECT BECOMES EXTREME.</div>
    </div>
</div>
</div>
<?php get_footer(); ?>
