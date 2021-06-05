<?php
    /*
    Template Name: News
    */
?>

<?php include (TEMPLATEPATH . '/small_header.php');  /* Tells WordPress to include the smaller header header.php */ ?>
<section class="container-fluid blog-section-one-bg">
    <div class="container content-width remove-padding">
        <h1><u style="text-decoration-thickness: 1px;"> <?php the_field('newstitle'); ?> </u></h1>
        <div class="row section-padding-top">
            <?php $post_id = 441;$queried_post = get_post($post_id);?>
            
            <div class="col-sm-4 remove-padding">
                <?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'blog-content-img')); ?>
            </div>

            <div class="col-sm-8 remove-padding blog-content-padding">
                <div class="row">
                    <div class="col-xs-1 remove-padding">
                        <img src="<?php the_field('newsprofileimageone'); ?>" class="blog-profile-img" alt="Jane Bree - Profile Image">
                    </div>

                    <div class="col-xs-11" style="text-align: left; padding-left: 40px;">
                        <h3><?php echo $queried_post->post_title; ?></h3>
                        <p class="p-subtitle"> <?php the_field('newspostauthorone'); ?> - <?php the_field('newspostdateone'); ?> </p>
                    </div>
                </div>

                <p style="line-height: 140%;"><?php echo $queried_post->post_excerpt; ?></p>

                <a href="<?php the_field('newspostlinkone'); ?>"><button type="button" class="btn">Read More</button></a>
            </div>
        </div>

        <div class="row section-padding-top">
            <?php $post_id = 457;$queried_post = get_post($post_id);?>
            
            <div class="col-sm-4 remove-padding">
                <?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'blog-content-img')); ?>
            </div>

            <div class="col-sm-8 remove-padding blog-content-padding">
                <div class="row">
                    <div class="col-xs-1 remove-padding">
                        <img src="<?php the_field('newsprofileimagetwo'); ?>" class="blog-profile-img" alt="Jane Bree - Profile Image">
                    </div>

                    <div class="col-xs-11" style="text-align: left; padding-left: 40px;">
                        <h3><?php echo $queried_post->post_title; ?></h3>
                        <p class="p-subtitle"> <?php the_field('newspostauthortwo'); ?> - <?php the_field('newspostdatetwo'); ?> </p>
                    </div>
                </div>

                <p style="line-height: 140%;"><?php echo $queried_post->post_excerpt; ?></p>

                <a href="<?php the_field('newspostlinktwo'); ?>"><button type="button" class="btn">Read More</button></a>
            </div>
        </div>

        <div class="row section-padding-top">
            <?php $post_id = 462;$queried_post = get_post($post_id);?>
            
            <div class="col-sm-4 remove-padding">
                <?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'blog-content-img')); ?>
            </div>

            <div class="col-sm-8 remove-padding blog-content-padding">
                <div class="row">
                    <div class="col-xs-1 remove-padding">
                        <img src="<?php the_field('newsprofileimagethree'); ?>" class="blog-profile-img" alt="Jane Bree - Profile Image">
                    </div>

                    <div class="col-xs-11" style="text-align: left; padding-left: 40px;">
                        <h3><?php echo $queried_post->post_title; ?></h3>
                        <p class="p-subtitle"> <?php the_field('newspostauthorthree'); ?> - <?php the_field('newspostdatethree'); ?> </p>
                    </div>
                </div>

                <p style="line-height: 140%;"><?php echo $queried_post->post_excerpt; ?></p>

                <a href="<?php the_field('newspostlinkthree'); ?>"><button type="button" class="btn">Read More</button></a>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
