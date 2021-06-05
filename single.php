<?php include (TEMPLATEPATH . '/small_header.php');  /* Tells WordPress to include the smaller header header.php */ ?>
<div class="container-fluid postbg">
    <div class="container">
        <div class="row">
            <section class="col-sm-7 maintext">
                <h2 class="posttitle" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>

                <article class="excerpts">
                    <!--we can reuse the css on the old article to restyle the new dynamic posts-->
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <div <?php post_class(); ?>>
                        <div class="postcontent">
                            <?php /*?><?php the_post_thumbnail(array(150,150), array ('class' => 'alignright')); ?><?php */?>
                            <?php the_content(); ?>
                        </div>
                        <!--postcomtet-->
                    </div>

                    <?php endwhile; ?>
                    <?php else: ?>
                    <div class="post">
                        <p>Sorry, no posts found.</p>
                    </div>
                    <!--post-->
                    <?php endif; ?>
                </article>
            </section>
        </div>
    </div>
</div>
<?php get_footer(); ?>