
<?php get_header(); ?>

<div class="container">
    <div class='row'>
        <div class="col-12 mt-5">        
            <div class="jumbotron">
                <?php the_post(); ?>

                <h1 class="display-4 mb-4"><?php the_title(); ?></h1>
                <?php echo str_replace('&nbsp;', ' ', get_the_content()); ?>
                <hr class="my-4">
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>