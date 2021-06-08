<!-- <header class='entry-header'> -->
<div id='content' data-page-type='article-page'>

<main id='main' class='discover'>
    <div class='container'>

        <div class='row'>
            <div id='heroImage'>
                <div class='col-sm-12'>
                    <?php pet_circle_post_thumbnail();
                    ?>
                </div>
            </div>
            
            <div id="article">
                <div class="col-sm-12">
                    <div id="rightPanel">
                        <div class="copy">
                            <?php
                            if (is_singular()) :
                                the_title('<h1 class="entry-title">', '</h1>');
                            else :
                                the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
                            endif;

                            if ('post' === get_post_type()) :
                            ?>
                                <div class='entry-meta'>
                                    <?php
//                                             pet_circle_posted_on();
                                    
                                    echo "Posted on ";
                                    echo the_date();
                                    pet_circle_posted_by();
                                    ?>
                                </div><!-- .entry-meta -->
                            <?php endif;
                            ?>
                        

                        <?php
                        the_content(
                            sprintf(
                                wp_kses(
                                    /* translators: %s: Name of current post. Only visible to screen readers */
                                    __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'pet-circle'),
                                    array(
                                        'span' => array(
                                             'class' => array(),
                                        ),
                                    )
                                ),
                                wp_kses_post(get_the_title())
                            )
                        );

                        wp_link_pages(
                            array(
                                'before' => '<div class="page-links">' . esc_html__('Pages:', 'pet-circle'),
                                'after'  => '</div>',
                            )
                        );
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</div>
<!-- </header> -->
<!-- .entry-header -->




