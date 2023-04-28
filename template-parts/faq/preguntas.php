<?php
/**
 * Template part for displaying faq in faq template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Compara_inmuebles
 * @since 1.0.0
 */
$preguntas = get_post_meta(get_the_ID(), 'grupo_preguntas',true);
if (!empty($preguntas)):?>
 <!-- FAQ AREA START (faq-2) (ID > accordion_2) -->
<div class="ltn__faq-area mb-100">
  <div class="container">
      <div class="row">
          <div class="col-lg-8">
              <div class="ltn__faq-inner ltn__faq-inner-2">
                  <div id="accordion_2">
                      <!-- card -->
                      <?php
                      $i_pregunta = 1;
                      foreach($preguntas as $pregunta):
                      ?>
                      <div class="card">
                          <h6 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq-item-2-<?php echo esc_attr($i_pregunta); ?>" aria-expanded="false">
                              <?php echo esc_html($pregunta['pregunta']); ?>
                          </h6>
                          <div id="faq-item-2-<?php echo esc_attr($i_pregunta); ?>" class="collapse" data-parent="#accordion_2">
                              <div class="card-body">
                                  <p><?php echo esc_html($pregunta['respuesta']); ?></p>
                              </div>
                          </div>
                      </div>
                      <?php
                      $i_pregunta++;
                      endforeach;
                      ?>
                  </div>
                  <div class="need-support text-center mt-100">
                      <h2>¿Necesitas ayuda? Llama a soporte:</h2>
                      <div class="btn-wrapper mb-30">
                          <a href="" class="theme-btn-1 btn">Contáctanos</a>
                      </div>
                      <h3><i class="fas fa-phone"></i> +0123-456-789</h3>
                  </div>
              </div>
          </div>
          <div class="col-lg-4">
              <aside class="sidebar-area ltn__right-sidebar">
                  <!-- Newsletter Widget -->
                  <div class="widget ltn__search-widget ltn__newsletter-widget">                            
                      <h6 class="ltn__widget-sub-title">// subscribe</h6>
                      <h4 class="ltn__widget-title">Get Newsletter</h4>
                      <?php get_search_form(); ?>
                      <div class="ltn__newsletter-bg-icon">
                          <i class="fas fa-envelope-open-text"></i>
                      </div>
                  </div>
                  <!-- Banner Widget -->
                  <div class="widget ltn__banner-widget">
                      <a href=""><img src="" alt="Banner Image"></a>
                  </div>

              </aside>
          </div>
      </div>
  </div>
</div>
<!-- FAQ AREA START -->
<?php
endif;