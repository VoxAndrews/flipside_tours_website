<?php
    /*
    Template Name: Tours
    */
?>

<?php include (TEMPLATEPATH . '/small_header.php');  /* Tells WordPress to include the smaller header header.php */ ?>
    <section class="container-fluid services-section-one-bg">
        <section class="container content-width remove-padding">
            <h1 style="text-align: center"><u style="text-decoration-thickness: 1px;"> <?php the_field('tourspagetitleone'); ?> </u></h1>
            
            <div class="row">
                <div class="col-sm-4 remove-padding services-tour-left-one">
                    <h3><u> <?php the_field('tourtitleone'); ?> </u></h3>

                    <container>
                        <p> <?php the_field('tourstarttimeone'); ?> </p>
                        <p> <?php the_field('tourdurationone'); ?> </p>
                        <p> <?php the_field('tourpriceone'); ?> </p>
                    </container>

                    <a href="<?php the_field('tourbuttonone'); ?>"><button type="button" class="btn">Book Now</button></a>
                </div>

                <div class="col-sm-4 remove-padding">
                    <img class="services-img" src="<?php the_field('tourimageone'); ?>" alt="Photo of the Whalers Tunnel in Fremantle">

                    <p> <?php the_field('tournoticeone'); ?> </p>
                </div>

                <div class="col-sm-4 remove-padding services-tour-right-one">
                    <p> <?php the_field('tourdetailsone'); ?> </p>
                </div>
            </div>
        </section>

        <section class="container content-width remove-padding">
            <div class="row">
                <div class="col-sm-4 remove-padding services-tour-left-two">
                    <h3><u> <?php the_field('tourtitletwo'); ?> </u></h3>
                    
                    <container>
                        <p> <?php the_field('tourstarttimetwo'); ?> </p>
                        <p> <?php the_field('tourdurationtwo'); ?> </p>
                        <p> <?php the_field('tourpricetwo'); ?> </p>
                    </container>

                    <a href="<?php the_field('tourbuttontwo'); ?>"><button type="button" class="btn">Book Now</button></a>
                </div>

                <div class="col-sm-4 remove-padding">
                    <img class="services-img" src="<?php the_field('tourimagetwo'); ?>" alt="Photo of the Spice Market in Fremantle">
                    
                    <p> <?php the_field('tournoticetwo'); ?> </p>
                </div>

                <div class="col-sm-4 remove-padding services-tour-right-two">
                    <p> <?php the_field('tourdetailstwo'); ?> </p>
                </div>
            </div>
        </section>
    </section>
<?php get_footer(); ?>