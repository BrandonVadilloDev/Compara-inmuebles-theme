<?php
  get_header();
  while(have_posts(  )):the_post(  );
  set_post_views(get_the_ID());
  get_template_part('template-parts/content','breadcrumb');
  //printf( '<pre>%s</pre>', var_export( get_post_meta( get_the_ID() ), true ) );
  ?>
    <!-- IMAGE SLIDER AREA START (img-slider-3) -->
    <div class="ltn__img-slider-area mb-90" style='margin-top: -120px;'>
        <div class="container-fluid">
            <div class="row ltn__image-slider-5-active slick-arrow-1 slick-arrow-1-inner ltn__no-gutter-all">
            <?php 
                $imagenes = get_post_meta(get_the_ID(),'field_imagenes_slider',true);

                if(! empty( $imagenes ) ) :

                    foreach ($imagenes as $id=>$imagen):
                    ?>

                    <div class="col-lg-12">
                        <div class="ltn__img-slide-item-4">
                            <a href="<?php echo esc_attr(esc_url($imagen)); ?>" data-rel="lightcase:myCollection">
                                <img src="<?php echo esc_attr(esc_url(wp_get_attachment_image_url($id, 'inmueble-slider'))); ?>" alt="Imagen slide">
                            </a>
                        </div>
                    </div>

                    <?php

                    endforeach;

                endif;
            ?>
            </div>
        </div>
    </div>
    <!-- IMAGE SLIDER AREA END -->

    <!-- SHOP DETAILS AREA START -->
    <div class="ltn__shop-details-area pb-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="ltn__shop-details-inner ltn__page-details-inner mb-60">
                        <div class="ltn__blog-meta">
                            <ul>
                                <?php
                                    $estados_de_inmueble = get_the_terms(get_the_ID(), 'estados_de_inmueble');
                                    
                                    if ( $estados_de_inmueble ) :
                                    ?>
                                    <li class="ltn__blog-category">
                                    <?php
                                        $term_1 = array_shift( $estados_de_inmueble );
                                        $print_term_1 = sprintf(
                                                '<a class="bg-orange" href=%s>%s</a>',
                                                esc_attr( esc_url( get_term_link( $term_1->term_id ) ) ),
                                                esc_html( $term_1->name )
                                            );
                                        $term_1_name = $term_1->name;
                                        echo $print_term_1;
                                    ?>
                                    </li>
                                    <?php
                                    endif;
                                    $tipos_inmuebles = get_the_terms(get_the_ID(), 'tipos_inmuebles');
                                
                                    if ( $tipos_inmuebles ) :
                                        $term_2 = array_shift( $tipos_inmuebles );
                                    endif;
                                ?>
                                </li>
                                <li class="ltn__blog-date">
                                    <i class="far fa-calendar-alt"></i><?php echo esc_html(get_the_date("F j, Y", get_the_ID())); ?>
                                </li>
                                <li>
                                    <a href="#"><i class="far fa-comments"></i><?php echo get_comments_number(get_the_ID());?> Comentarios</a>
                                </li>
                            </ul>
                        </div>
                        <h1><?php the_title(); ?></h1>
                        <label><span class="ltn__secondary-color"><i class="flaticon-pin"></i></span> <?php echo esc_html(get_post_meta(get_the_ID(), 'inmueble_direccion', true)); ?></label>
                        <h4 class="title-2">Descripción</h4>
                        <p><?php the_content(); ?></p>

                        <?php get_template_part( 'template-parts/inmuebles/property', 'details' ); ?>

                        <?php get_template_part( 'template-parts/inmuebles/facts', 'features' ); ?>

                        <?php get_template_part( 'template-parts/inmuebles/our', 'gallery' ); ?>

                        <?php get_template_part( 'template-parts/inmuebles/amenities', 'tags' ); ?>

                        <h4 class="title-2">Location</h4>
                        <div class="property-details-google-map mb-60">
                            <?php
                            $ubicacion = get_post_meta(get_the_ID(),'field_location', true);
                            if ($ubicacion):
                                ?>
                                <iframe src="https://maps.google.com/maps?q=<?php echo esc_attr($ubicacion['latitude']); ?>,<?php echo esc_attr($ubicacion['longitude']); ?>&hl=es&z=14&amp;output=embed" width="100%" height="100%" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                <?php
                            else:
                                ?>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9334.271551495209!2d-73.97198251485975!3d40.668170674982946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25b0456b5a2e7%3A0x68bdf865dda0b669!2sBrooklyn%20Botanic%20Garden%20Shop!5e0!3m2!1sen!2sbd!4v1590597267201!5m2!1sen!2sbd" width="100%" height="100%" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                <?php
                            endif;
                            ?>
                        </div>

                        <?php get_template_part( 'template-parts/inmuebles/floor', 'plans' ); ?>

                        <?php get_template_part( 'template-parts/inmuebles/property', 'video' ); ?>

                        <div class="ltn__shop-details-tab-content-inner--- ltn__shop-details-tab-inner-2 ltn__product-details-review-inner mb-60">
                            <h4 class="title-2">Customer Reviews</h4>
                            <div class="product-ratting">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                    <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                </ul>
                            </div>
                            <hr>
                        </div>

                        <h4 class="title-2">Related Properties</h4>
                        <div class="row">
                          <?php
                            //compara_inmuebles_inmuebles(2,array(array('taxonomy' => 'estados_de_inmueble', 'field' => 'slug', 'terms' => $term_1->slug)), array(get_the_ID()));
                          ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <?php get_sidebar( 'inmuebles-single' ); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP DETAILS AREA END -->

  <?php
  endwhile;
  get_footer();