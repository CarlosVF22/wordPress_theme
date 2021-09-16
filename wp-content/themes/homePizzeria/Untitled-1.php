<div id="carouselExampleSlidesOnly" class="carousel slide " data-bs-ride="carousel">
    <ol class="carousel-indicators">
		<?php
			$indicator=0;
            $carousel = new WP_Query(array(
                'post_type'     => 'carousel',
                'posts_per_page' => -1,
            ));
            while($carousel->have_posts()){
                $carousel->the_post();
		?>
            <li data-target="#carouselExampleSlidesOnly" data-slide-to="<?php echo $indicator; ?>" class="<?php echo ($indicator == 1) ? 'active':''; ?>"></li>
		<?php $indicator++; } ?>
    </ol>
    <div class="carousel-inner">
		<?php
			$activetor=0;
            $myPost = new WP_Query(array(
                'post_type'     => 'post',
                'posts_per_page' => -1
            ));
            while($myPost->have_posts()){
                $myPost->the_post();
				$activetor++;
		?>
        <div class="carousel-item <?php echo ($activetor == 1) ? 'active':''; ?>">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="d-block w-100" alt="...">
        </div>    
			
        <?php } ?> 	
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>