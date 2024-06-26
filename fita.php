<?php
/*
* Template Name: Fita Homepage
*/
?>

<?php
the_post();
get_header();

$form_placeholder = get_post_meta(get_the_ID(), "placeholder" , true);
$form_button = get_post_meta(get_the_ID(), "button", true);
$form_hint = get_post_meta(get_the_ID(), "hint", true);
?>

<div class="fh5co-loader"></div>

<aside id="fh5co-aside" role="sidebar" class="text-center hero-bg" >
    <h1 id="fh5co-logo">
        <a href="<?php echo site_url(); ?>">
            <?php bloginfo("name"); ?>
        </a>
    </h1>
</aside>

<div id="fh5co-main-content">
    <div class="dt js-dt">
        <div class="dtc js-dtc">
            <div class="simply-countdown-one animate-box" data-animate-effect="fadeInUp"></div>

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="fh5co-intro animate-box">

                                <!-- Title -->
                                <h2>
                                    <?php the_title(); ?>
                                </h2>

                                <!-- Details -->
                                <p>
                                    <?php the_content(); ?>
                                </p>

                            </div>
                        </div>

                        <div class="col-lg-7 animate-box">
                            <form action="#" id="fh5co-subscribe">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="<?php echo esc_attr($form_placeholder); ?>">
                                    
                                    <input type="submit" value="<?php echo esc_attr($form_button); ?>" class="btn btn-primary">

                                    <p class="tip">
                                        <?php
                                            echo esc_html($form_hint);
                                        ?>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="fh5co-footer">
        <div class="row">
            <div class="col-md-6">
                <?php
                if (is_active_sidebar("fita-footer-left")) {
                    dynamic_sidebar("fita-footer-left");
                }
                ?>
            </div>

            <div class="col-md-6 fh5co-copyright">
                <?php
                if (is_active_sidebar("fita-footer-right")) {
                    dynamic_sidebar("fita-footer-right");
                }
                ?>
            </div>
        </div>
    </div>

</div>


<?php
get_footer();
?>