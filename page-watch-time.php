<?php
// Header ADD
get_header();
?>
<div class="container">
    <div class="page_title">
        <h2>WATCH TIME</h2>
    </div>
</div>
<div class="container">
    <div class="row">
            <?php
              $args = array( 'post_type' => 'product', 'posts_per_page' => 4, 'product_cat' => 'Watch Time', 'orderby' => 'date','order' => 'asc' );
              $loop = new WP_Query( $args );
              while ( $loop->have_posts() ) { $loop->the_post(); global $product;
                $id           = get_the_ID();
                $brand        = get_field('silver');
                $content1     = get_field('content1');
                $content2     = get_field('content2');
                $content3     = get_field('content3');
                $content4     = get_field('content4');
                $content5     = get_field('content5');
                $popular      = get_field('popular');
                $popular_text = get_field('popular_text')
               ?>

        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-5">
            <div class="card card_subscriber mr-2 <?php echo $popular ?>">
                <div class="green_box">
                     <div class="popular_text">
                      <h5><?php echo $popular_text ?></h5>
                    </div>
                    <h2 class="mb-2"><?php echo the_title(); ?></h2>
                    <p><?php echo $brand ?></p>
                </div>
                <div class="card-body watch_time_body">
                    <ul>
                        <li><i class="fas fa-check"></i><?php echo $content1 ?></li>
                        <li><i class="fas fa-check"></i><?php echo $content2 ?></li>
                        <li><i class="fas fa-check"></i><?php echo $content3 ?></li>
                        <li><i class="fas fa-check"></i><?php echo $content4 ?></li>
                        <li><i class="fas fa-check"></i><?php echo $content5 ?></li>
                    </ul>
                    <div class="doller_box">
                        <h3><span>$</span><?php echo $product->get_price(); ?></h3>
                    </div>
                    
                     <a href="https://www.bestyoutubepromotion.org/checkout/?add-to-cart=<?php echo $id; ?>" class="btn">Buy Now</a>   
                </div>
            </div>
        </div>

        <?php } ?>

    </div>
</div>
<?php
// Footer Add
get_footer();
?>