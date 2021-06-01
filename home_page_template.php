<?php
    /*
    Template Name: Home
    */
?>

<?php get_header(); /* Tells WordPress to include header.php */ ?>
    <section class="container-fluid index-section-one-bg">
        <section style="text-align:center;">
            <h2 style="padding-top: 20px;"><?php the_field('titlefortoursection'); ?></h2>
            <p><?php the_field('subtitlefortoursection'); ?></p>
        </section>

        <section class="container content-width">
            <div class="row">
                <div class="col-sm-6 remove-padding index-tour-left-one">
                    <h3><u><?php the_field('tourtitleone'); ?></u></h3>
                    
                    <a href="<?php the_field('viewnowbuttonone'); ?>"><button type="button" class="btn">View Now</button></a>
                </div>
                
                <div class="col-sm-6 remove-padding">
                    <img class="index-tour-img" src="<?php the_field('tourimageone'); ?>" alt="Photo of the Whalers Tunnel in Fremantle">
                </div>
            </div>
        </section>
        
        <section class="container content-width">
            <div class="row">
                <div class="col-sm-6 remove-padding index-tour-left-two">
                    <h3><u><?php the_field('tourtitletwo'); ?></u></h3>
                    
                    <a href="<?php the_field('viewnowbuttontwo'); ?>"><button type="button" class="btn">View Now</button></a>
                </div>
                
                <div class="col-sm-6 remove-padding">
                    <img class="index-tour-img" src="<?php the_field('tourimagetwo'); ?>" alt="Photo of the Spice Market in Fremantle">
                </div>
            </div>
        </section>
    </section>

    <section class="container-fluid index-section-two-bg">
        <section class="container index-content-one remove-padding content-width">
            <div class="row">
                <div class="col-sm-4 remove-padding" style="padding-top: 45px">
                    <h2><?php the_field('blogtitleone'); ?></h2>

                    <p><?php the_field('blogsubtitleone'); ?></p>

                    <a href="<?php the_field('viewnowbuttonthree'); ?>"><button type="button" class="btn">View Now</button></a>
                </div>

                <div class="col-sm-8 remove-padding" style="text-align: right">
                    <img class="index-blog-img" src="<?php the_field('blogimageone'); ?>" alt="Photo of the Entrance to the Fremantle Prison">
                </div>
            </div>
        </section>
    </section>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>