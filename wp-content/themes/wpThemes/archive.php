
<?php get_header(); ?>

<div class="container content">
	<div class="main block">

        <h1 class="page-header">
            <?php
                        if(is_category()){
                            single_cat_title();
                        }else if(is_author()){
                            the_post();
                            echo 'Archives By Author: ' .get_the_author();
                            rewind_posts();
                        }else if(is_tag()){
                            single_tag_title();
                        }else if(is_day()){
                            echo 'Archives By Day: ' .get_the_date();
                        }else if(is_month()){
                            echo 'Archives By Month: ' .get_the_date('F Y');
                        }else if(is_year()){
                            echo 'Archives By Year: ' .get_the_date('Y');
                        }else{
                            echo 'Archives';
                        }
            ?>
        </h1>

        <?php while(have_posts()) :
            the_post(); ?>
            <div class="archive-post">
                <h4>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h4>
                <p>Posted On: <?php the_time('F j, Y g:i a'); ?></p>
            </div>
        <?php endwhile; ?>

       
    </div>

    <div class="side">
                <div class="block">
                    <h3>Sidebar Head</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Nam vel diam hendrerit erat fermentum aliquet sed eget arcu.</p>
                    <a class="button">More</a>
                </div>
    </div> <!-- .side -->
</div>

<?php get_footer(); ?>