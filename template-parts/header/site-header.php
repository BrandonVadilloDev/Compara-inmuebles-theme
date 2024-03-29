<?php
/**
 * Template part for displaying the site header
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Compara_inmuebles
 * @since 1.0.0
 */
$correo = cmb2_get_option('compara_inmuebles_theme_options', 'correo_contacto');
$direccion = cmb2_get_option('compara_inmuebles_theme_options', 'short_address');
?>
<!-- Body main wrapper start -->
<div id="page" class="site body-wrapper">

	<!-- HEADER AREA START (header-5) -->
	<header class="ltn__header-area ltn__header-5 ltn__header-transparent--- gradient-color-4---">
        <!-- ltn__header-top-area start -->
        <div class="ltn__header-top-area section-bg-6 top-area-color-white---">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="ltn__top-bar-menu">
                            <ul>
                                <?php if($correo): ?><li><a href="mailto:<?php echo esc_attr($correo); ?>?Subject=Flower%20greetings%20to%20you"><i class="icon-mail"></i> <?php echo esc_html( $correo ); ?></a></li><?php endif; ?>
                                <?php if($direccion): ?><li><a href=""><i class="icon-placeholder"></i> <?php echo esc_html($direccion); ?></a></li><?php endif; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="top-bar-right text-right">
                            <div class="ltn__top-bar-menu">
                                <ul>
                                    <li class="d-none">
                                        <!-- ltn__language-menu -->
                                        <div class="ltn__drop-menu ltn__currency-menu ltn__language-menu">
                                            <ul>
                                                <li><a href="#" class="dropdown-toggle"><span class="active-currency">English</span></a>
                                                    <ul>
                                                        <li><a href="#">Arabic</a></li>
                                                        <li><a href="#">Bengali</a></li>
                                                        <li><a href="#">Chinese</a></li>
                                                        <li><a href="#">English</a></li>
                                                        <li><a href="#">French</a></li>
                                                        <li><a href="#">Hindi</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <!-- ltn__social-media -->
                                        <div class="ltn__social-media">
                                            <ul>
                                                <?php if (cmb2_get_option('compara_inmuebles_theme_options', 'facebook')):?><li><a href="<?php echo esc_attr(esc_url(cmb2_get_option('compara_inmuebles_theme_options', 'facebook'))); ?>"><i class="fab fa-facebook-f"></i></a></li><?php endif; ?>
                                                <?php if (cmb2_get_option('compara_inmuebles_theme_options', 'twitter')):?><li><a href="<?php echo esc_attr(esc_url(cmb2_get_option('compara_inmuebles_theme_options', 'twitter'))); ?>" ><i class="fab fa-twitter"></i></a></li><?php endif; ?>
                                                <?php if (cmb2_get_option('compara_inmuebles_theme_options', 'instagram')):?><li><a href="<?php echo esc_attr(esc_url(cmb2_get_option('compara_inmuebles_theme_options', 'instagram'))); ?>" ><i class="fab fa-instagram"></i></a></li><?php endif; ?>
                                                <?php if (cmb2_get_option('compara_inmuebles_theme_options', 'tiktok')):?><li><a href="<?php echo esc_attr(esc_url(cmb2_get_option('compara_inmuebles_theme_options', 'tiktok'))); ?>" ><i class="fab fa-tiktok"></i></a></li><?php endif; ?>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <!-- header-top-btn -->
                                        <?php  
                                        $custom_pages = get_pages(array(
                                            'meta_key' => '_wp_page_template',
                                            'meta_value' => 'page-agregar-inmueble.php'
                                        ));
                                        $link_agregar = $custom_pages ? get_permalink($custom_pages[0]->ID) : '#' ;
                                        ?>
                                        <div class="header-top-btn">
                                            <a href="<?php echo esc_attr( esc_url($link_agregar)); ?>">Agregar inmueble</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__header-top-area end -->
        
        <!-- ltn__header-middle-area start -->
        <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-white">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="site-logo-wrap">
                            <div class="site-logo">
                                <a href="<?php echo esc_attr( esc_url( home_url( '/' ) ) ); ?>"><img src="<?php echo esc_attr(esc_url(cmb2_get_option('compara_inmuebles_theme_options', 'logo_header'))); ?>" alt="Logo"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col header-menu-column">
                        <div class="header-menu d-none d-xl-block">
                            <nav>
                                <?php 
                                    wp_nav_menu( array(
                                        'container_class' => 'ltn__main-menu',
                                        'theme_location' => 'menu-1',
                                        'container_id' => 'primary-menu',
                                        'add_li_class' => 'menu-icon',
                                        'add_ul_submenu_class' =>'menu-pages-img-show',
                                    ) )
                                ?>
                            </nav>
                        </div>
                    </div>
                    <div class="ltn__header-options ltn__header-options-2 mb-sm-20">
                        <!-- header-search-1 -->
                        <div class="header-search-wrap">
                            <div class="header-search-1">
                                <div class="search-icon">
                                    <i class="icon-search for-search-show"></i>
                                    <i class="icon-cancel  for-search-close"></i>
                                </div>
                            </div>
                            <div class="header-search-1-form">
                                <?php get_search_form( ); ?>
                            </div>
                        </div>
                        <!-- user-menu -->
                        <div class="ltn__drop-menu user-menu">
                            <ul>
                                <li>
                                    <a href="#"><i class="icon-user"></i></a>
                                    <ul>
                                        <li><a href="">Sign in</a></li>
                                        <li><a href="">Register</a></li>
                                        <li><a href="">My Account</a></li>
                                        <li><a href="">Wishlist</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- Mobile Menu Button -->
                        <div class="mobile-menu-toggle d-xl-none">
                            <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__header-middle-area end -->
    </header>
    <!-- HEADER AREA END -->

    <!-- Utilize Mobile Menu Start -->
    <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <div class="site-logo">
                    <a href="<?php echo esc_url( home_url('/')); ?>"><img src="<?php echo esc_attr(esc_url(cmb2_get_option('compara_inmuebles_theme_options', 'logo_header'))); ?>" alt="Logo"></a>
                </div>
                <button class="ltn__utilize-close">×</button>
            </div>
            <div class="ltn__utilize-menu-search-form">
                <form action="#">
                    <input type="text" placeholder="Search...">
                    <button><i class="fas fa-search"></i></button>
                </form>
            </div>
            <?php 
                wp_nav_menu( array(
                    'container_class' => 'ltn__utilize-menu',
                    'theme_location' => 'menu-1',
                    'container_id' => 'primary-menu',
                    'add_ul_submenu_class' =>'menu-pages-img-show',
                    ) )
            ?>
            <div class="ltn__utilize-buttons ltn__utilize-buttons-2">
                <ul>
                    <li>
                        <a href="" title="My Account">
                            <span class="utilize-btn-icon">
                                <i class="far fa-user"></i>
                            </span>
                            My Account
                        </a>
                    </li>
                    <li>
                        <a href="" title="Wishlist">
                            <span class="utilize-btn-icon">
                                <i class="far fa-heart"></i>
                                <sup>3</sup>
                            </span>
                            Wishlist
                        </a>
                    </li>
                </ul>
            </div>
            <div class="ltn__social-media-2">
                <ul>
                    <?php if (cmb2_get_option('compara_inmuebles_theme_options', 'facebook')):?><li><a href="<?php echo esc_attr(esc_url(cmb2_get_option('compara_inmuebles_theme_options', 'facebook'))); ?>"><i class="fab fa-facebook-f"></i></a></li><?php endif; ?>
                    <?php if (cmb2_get_option('compara_inmuebles_theme_options', 'twitter')):?><li><a href="<?php echo esc_attr(esc_url(cmb2_get_option('compara_inmuebles_theme_options', 'twitter'))); ?>"><i class="fab fa-twitter"></i></a></li><?php endif; ?>
                    <?php if (cmb2_get_option('compara_inmuebles_theme_options', 'linkedin')):?><li><a href="<?php echo esc_attr(esc_url(cmb2_get_option('compara_inmuebles_theme_options', 'linkedin'))); ?>"><i class="fab fa-linkedin"></i></a></li><?php endif; ?>
                    <?php if (cmb2_get_option('compara_inmuebles_theme_options', 'instagram')):?><li><a href="<?php echo esc_attr(esc_url(cmb2_get_option('compara_inmuebles_theme_options', 'instagram'))); ?>"><i class="fab fa-instagram"></i></a></li><?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
    <!-- Utilize Mobile Menu End -->

    <div class="ltn__utilize-overlay"></div>
