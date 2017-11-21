<?php

if( ! function_exists( 'onlinemag_inline_style' ) ) :

    /**
     * onlinemag wp_head hook
     *
     * @since  onlinemag 1.0.0
     */
    function onlinemag_inline_style(){
      
        global $onlinemag_customizer_all_values;
        global $onlinemag_google_fonts;

        $onlinemag_background_color = get_background_color();
        $onlinemag_primary_color_option = $onlinemag_customizer_all_values['onlinemag-primary-color'];
        $onlinemag_site_identity_color_option = $onlinemag_customizer_all_values['onlinemag-site-identity-color'];

        /*font settings*/
        $onlinemag_font_family_primary_option = $onlinemag_google_fonts[$onlinemag_customizer_all_values['onlinemag-font-family-Primary']];
        $onlinemag_font_family_site_identity_option = $onlinemag_google_fonts[$onlinemag_customizer_all_values['onlinemag-font-family-site-identity']];
        $onlinemag_font_family_title_option = $onlinemag_google_fonts[$onlinemag_customizer_all_values['onlinemag-font-family-title']];
        /*end of about section*/
        ?>
        <style type="text/css">
        /*=====COLOR OPTION=====*/

        /*Color*/
        /*----------------------------------*/
        /*background color*/ 
        <?php 
        if( !empty($onlinemag_background_color) ){
        ?>
          .top-header,
          .site-header{
            background-color: #<?php echo esc_html( $onlinemag_background_color );?>;
          }
        <?php
        } 
        /*Primary*/
        if( !empty($onlinemag_primary_color_option) ){
        ?>
            section.wrapper-slider .slide-pager .cycle-pager-active,
            section.wrapper-slider .slide-pager .cycle-pager-active:visited,
            section.wrapper-slider .slide-pager .cycle-pager-active:hover,
            section.wrapper-slider .slide-pager .cycle-pager-active:focus,
            section.wrapper-slider .slide-pager .cycle-pager-active:active,
            .title-divider,
            .title-divider:visited,
            .block-overlay-hover,
            .block-overlay-hover:visited,
            #gmaptoggle,
            #gmaptoggle:visited,
            .evision-back-to-top,
            .evision-back-to-top:visited,
            .search-form .search-submit,
            .search-form .search-submit:visited,
            .widget_calendar tbody a,
            .widget_calendar tbody a:visited,
            .wrap-portfolio .button.is-checked,
            .button.button-outline:hover, 
            .button.button-outline:focus, 
            .button.button-outline:active,
            .radius-thumb-holder,
            .radius-thumb-holder:before,
            .radius-thumb-holder:hover:before, 
            .radius-thumb-holder:focus:before, 
            .radius-thumb-holder:active:before,
            #pbCloseBtn:hover:before,
            .slide-pager .cycle-pager-active, 
            .slick-dots .slick-active button,
            .slide-pager span:hover,
            .featurepost .latestpost-footer .moredetail a,
            .featurepost .latestpost-footer .moredetail a:visited,
            #load-wrap,
            .back-tonav,
            .back-tonav:visited,
            .wrap-service .box-container .box-inner:hover .box-content, 
            .wrap-service .box-container .box-inner:focus .box-content,
            .top-header .noticebar .notice-title,
            .top-header .timer,
            .nav-buttons,
            .widget .widgettitle:after,
            .widget .widget-title:after,
            .main-navigation.sec-main-navigation ul li.current_page_item:before,
            .comments-area input[type="submit"],
            a.category-more:hover,
            a.category-more.odd-cat:hover,
            .button.button-outline:hover,
            .button.button-outline:focus,
            .button.button-outline:active,
            .button.button-outline:visited:hover,
            .button.button-outline:visited:focus,
            .button.button-outline:visited:active,
            .tabs-menu li.current{
              background-color: <?php echo esc_html( $onlinemag_primary_color_option );?>;
            }

            .widget-title,
            .widgettitle,
            .wrapper-slider,
            .flip-container .front,
            .flip-container .back,
            a.category-more.odd-cat:hover, a.category-more:hover,
            a.category-more{
              border-color: <?php echo esc_html( $onlinemag_primary_color_option );?>; /*#2e5077*/
            }

            @media screen and (min-width: 768px){
            .main-navigation .current_page_item > a:after,
            .main-navigation .current-menu-item > a:after,
            .main-navigation .current_page_ancestor > a:after,
            .main-navigation li.active > a:after,
            .main-navigation li.active > a:after,
            .main-navigation li.active > a:after,
            .main-navigation li.current_page_parent a:after {
                background-color: <?php echo esc_html( $onlinemag_primary_color_option );?>;
              }
            }

            .latestpost-footer .moredetail a,
            .latestpost-footer .moredetail a:visited,
            span.i1,
            p.card-title::first-letter,
            span.i4,
            .tagcloud a:hover,
            .tagcloud a:focus,
            .tagcloud a:before,
            .posted-on a:hover,
            .date a:hover,
            .cat-links a:hover,
            .tags-links a:hover,
            .author a:hover,
            .comments-link a:hover,
            .edit-link a:hover,
            .edit-link a:focus,
            h1 a:hover,
            h2 a:hover,
            h3 a:hover,
            h4 a:hover,
            h5 a:hover,
            h6 a:hover,
            a:active,
            a:hover,
            .card:hover .card-title,
            .site-header .wrapper-site-identity .site-title a:hover,
            .search-holder .button-search:hover, .search-holder .button-search:hover i,
            a.category-more{
              color: <?php echo esc_html( $onlinemag_primary_color_option ); ?> !important;
            }
        <?php
        } 
        if( !empty($onlinemag_site_identity_color_option) ){
        ?>
            /*Site identity / logo & tagline*/
            .site-header .wrapper-site-identity .site-branding .site-title a,
            .site-header .wrapper-site-identity .site-title a:visited,
            .site-header .wrapper-site-identity .site-branding .site-description,
            .page-inner-title .entry-header time {
              color: <?php echo esc_html( $onlinemag_site_identity_color_option );?>; /*#545C68*/
            }
        <?php
        } 
        if( !empty($onlinemag_font_family_primary_option) ){
        /*=====FONT FAMILY OPTION=====*/
        ?> 
        /*Primary*/
          html, body, p, button, input, select, textarea, pre, code, kbd, tt, var, samp , .main-navigation a, search-input-holder .search-field,
          .widget .widgettitle, .widget .widget-title,.par{
          font-family: '<?php echo esc_attr( $onlinemag_font_family_primary_option ); ?>'; /*Lato*/
          }
        <?php
        } 

        if( !empty($onlinemag_font_family_site_identity_option) ){
        ?> 
          /*Site identity / logo & tagline*/
          .site-header .wrapper-site-identity .site-title a, .site-header .wrapper-site-identity .site-description {
          font-family: '<?php echo esc_attr( $onlinemag_font_family_site_identity_option ); ?>'; /*Lato*/
          }
        <?php
        } 
        if( !empty($onlinemag_font_family_title_option) ){
        ?> 
          /*Title*/
          h1, h1 a,
          h2, h2 a,
          h3, h3 a,
          h4, h4 a,
          h5, h5 a,
          h6, h6 a,
          .card p.card-title{
            font-family: '<?php echo esc_attr( $onlinemag_font_family_title_option ); ?>'; /*Lato*/
          }
        <?php
        } 
        ?>
        </style>
    <?php
    }
endif;
