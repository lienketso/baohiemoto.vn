<?php 
if( class_exists( 'ReduxFrameworkPlugin' ) ) { 
// Output Customize CSS
function earna_customize_css() { 
    global $earna_options; if ($earna_options['main_color_earna'] == 7) {
?>
	<style>

    :root {
  --default-color: <?php echo esc_html($earna_options['colorcode']); ?>;
}

.post-pagi-area a {
    color: var(--default-color);
}

.post-pagi-area a:hover{
    color: var(--default-color);
    background-color: var(--default-color);
}

.comments-form button {
    background-color: var(--default-color);
}
/*
** Boostnav Styles
*/

nav.navbar .quote-btn a {
  border: 2px solid var(--default-color);
}

.attr-nav ul.cart-list li.total a {
  background: var(--default-color) none repeat scroll 0 0;
}

.attr-nav ul.cart-list li.total a:hover {
  background: var(--default-color) none repeat scroll 0 0 !important;
  color: #ffffff !important;
}

nav.navbar.bootsnav li.dropdown ul.dropdown-menu > li > a .badge {
  background: var(--default-color);
}

.navbar .attr-nav .call i {
  background: linear-gradient(to right, var(--default-color), #4ac4f3, var(--default-color));
  -webkit-background-clip: text;
  -moz-background-clip: text;
  background-clip: text;
  -webkit-text-fill-color: transparent;
  position: relative;
  top: 5px;
}

.attr-nav > ul > li > a span.badge {
  background-color: var(--default-color);
}

.navbar .side .widget li a:hover {
  color: var(--default-color);
}


.side .widget.address ul li i {
  color: var(--default-color);
}

.side .widget.newsletter form span.input-group-addon button {
  color: var(--default-color);
}

.side .widget ul.link li a {
  color: var(--default-color);
}

@media (min-width: 1024px) {

  nav.navbar.bootsnav .share.dark ul > li > a {
    background-color: var(--default-color);
    color: #ffffff;
  }

  nav.navbar.bootsnav .share ul > li > a:hover {
    color: var(--default-color);
  }

  nav.navbar.bootsnav ul.nav > li > a.active {
    color: var(--default-color);
  }


    nav.navbar.bootsnav.active-bg ul.nav > li > a.active {
    background: var(--default-color) !important;
  }

  nav.navbar.bootsnav.active-border ul.nav > li > a.active::before {
    border-bottom: 3px solid var(--default-color);
  }

  nav.navbar.bootsnav ul.nav > li.active > a {
    color: var(--default-color);
  }

  nav.bootsnav.navbar-sidebar ul.nav > li.active > a i {
    background: var(--default-color);
    color: #ffffff;
  }

  nav.navbar.bootsnav.active-full ul.nav > li > a.active,
  nav.navbar.bootsnav.active-full ul.nav > li > a:hover {
    background: var(--default-color) none repeat scroll 0 0 !important;
    color: #ffffff;
  }

   nav.navbar.bootsnav ul.nav > li > a:hover {
    color: var(--default-color);
  }

  nav.navbar.bootsnav ul.navbar-right li.dropdown ul.dropdown-menu li a:hover {
    color: var(--default-color);
  }

  nav.navbar.bootsnav ul.navbar-left li.dropdown ul.dropdown-menu li a:hover {
    color: var(--default-color);
  }

  nav.navbar.bootsnav ul.dropdown-menu.megamenu-content .content
    ul.menu-col
    li
    a:hover {
    color: var(--default-color);
  }

  nav.bootsnav.navbar-sidebar ul.nav > li > a:hover {
    color: var(--default-color);
  }

}

@media (max-width: 1023px) {

  .navbar .attr-nav .call i {
      background: linear-gradient(to right, var(--default-color), #4ac4f3, var(--default-color)) !important;
      -webkit-background-clip: text !important;
      -moz-background-clip: text !important;
      background-clip: text !important;
      -webkit-text-fill-color: transparent !important;
  }

  nav.navbar.bootsnav ul.nav li.dropdown > ul.dropdown-menu li:hover > a {
      background-color: transparent !important;
      color: var(--default-color) !important;
    }

  .attr-nav > ul > li.contact i {
    color: var(--default-color);

  }

  .attr-nav > ul.link > li > a {
    color: var(--default-color);
  }

  .attr-nav.menu li:last-child a {
    background: var(--default-color) none repeat scroll 0 0;
  }

}

/*
** Responsive
*/

@media only screen and (min-width: 768px) and (max-width: 991px) {
  .features-area .single-item .item > i{
    color: var(--default-color);
  }

  .features-area .single-item .item > i{
      color: var(--default-color);
  }

}

/*
** Style.css
*/

.bg-theme {
  background-color: var(--default-color);
}

.gradient-bg {
  background-color: var(--default-color);
}

.shadow.theme::after {
  background: var(--default-color) none repeat scroll 0 0;
}

.shadow.theme-hard::after {
  background: var(--default-color) none repeat scroll 0 0;
}

.btn.btn-gradient::after {
  background-color: var(--default-color);
}

.btn.btn-theme.effect::before {
  background: var(--default-color);
}

.btn.btn-theme.effect:hover {
  border: 2px solid var(--default-color);
}

.torch-red .btn.btn-theme.effect::before {
  background: var(--default-color);
}

.torch-red .btn.btn-theme.effect:hover {
  border: 2px solid var(--default-color);
}

.btn-theme-border {
  border: 2px solid var(--default-color);
}

.btn-theme-border::after {
  background: var(--default-color);
}

.btn-theme-effect {
  border: 2px solid var(--default-color);
}

.btn-theme-effect::after {
  background: var(--default-color);
}


.site-heading h4 {
  color: var(--default-color);
}

.site-heading .devider {
  background: var(--default-color);
}

.site-heading .devider:before {
  background: var(--default-color);
}

.carousel-control.light-bg {
    color: var(--default-color);
}


.banner-area .carousel-indicators.theme li.active {
  border: 2px solid var(--default-color);
}

.banner-area .carousel-indicators.theme li::after {
  background: var(--default-color);
}

.banner-area.text-default h4 {
  color: var(--default-color);
}

.video-play-button {
  color: var(--default-color);
}

.video-play-button.theme:before,
.video-play-button.theme:after {
  background: var(--default-color) repeat scroll 0 0;
}

.video-play-button i {
  color: var(--default-color);
}

.about-items .thumb .successr-ate {
  background: var(--default-color);
}

.about-area .info > h4 {
  color: var(--default-color);
}

.about-area .info li::after {
  color: var(--default-color);
}

.about-us-area .about-items .thumb h2 strong {
  color: var(--default-color);
}

.about-us-area .about-items .thumb::after {
  background: var(--default-color);
}

.about-us-area .about-items .info ul li::after {
  color: var(--default-color);
}

.about-content-area .thumb-box .experience {
  background: var(--default-color);
  }

.about-content-area .content-box .info ul li i {
  color: var(--default-color);
}

.about-content-area .content-box .info .call i {
  background: var(--default-color);
}


.about-content-area .content-box .info .call i::after {
  background: var(--default-color);
}

.features-area .features-content .top span {
  color: var(--default-color);
}

.features-area .item:hover a::before {
  border-top-color: var(--default-color);
  border-right-color: var(--default-color);
  border-bottom-color: var(--default-color);
}

.features-area .item:hover  a::after {
  border-top: 2px solid var(--default-color);
}

.features-area .single-item .item:hover > i,
.features-area .single-item:nth-child(2n) .item > i {
    color: var(--default-color);
}

.services-area .services-items .item .info > i::after {
    background: var(--default-color);
}

.services-area .services-items .single-item .item::after {
  background: linear-gradient(to top, var(--default-color) 0%, var(--default-color) 50%, #18ebeb 100%);
}

.services-area .services-items .single-item .item:hover i {
  color: var(--default-color);
}

.services-area .services-heading h4 {
  color: var(--default-color);
}

.thumb-services-area .services-items .item .info > i::after {
  background: var(--default-color);
}

.thumb-services-area .services-items .single-item:first-child .item .info > i,
.thumb-services-area .services-items .single-item .item:hover .info > i {
  color: var(--default-color);
}

.default-services-area .item .info i {
  color: var(--default-color);
}

.thumbs-services-area .item:hover .info > a {
  border: 2px solid var(--default-color);
}

.thumbs-services-area .item .info > a::after {
  background: var(--default-color);
}

.thumbs-services-area .thumb-services-carousel.owl-carousel .owl-dots .owl-dot.active span::after {
  background: var(--default-color);
}

.services-details-items .services-sidebar .widget-title::after {
  border-bottom: 2px solid var(--default-color);
}


.services-details-items .services-sidebar .services-list a::after {
  border: 3px solid var(--default-color);
}

.services-details-items .services-sidebar .services-list a::before {
  background: var(--default-color);
}



.services-details-items .services-sidebar .single-widget.quick-contact .content i {
  background: var(--default-color);
}

.services-details-items .services-sidebar .single-widget.quick-contact .content i::after {
  background: var(--default-color);
}

.services-details-items .services-sidebar .single-widget.brochure a i {
    color: var(--default-color);
}

.services-details-items .services-sidebar .single-widget.brochure a:hover {
  color: var(--default-color);
}

.services-details-area .features i {
    color: var(--default-color);
}

.fun-factor-area .fun-fact-items::after {
  background: var(--default-color);
}

.business-groth-area .info h4 {
  color: var(--default-color);
}


.choose-us-area .thumb .transform-text h2 {
    color: var(--default-color);
}

.choose-us-area .info h4 {
  color: var(--default-color);
}


.partner-area .item-box::after {
  background: var(--default-color);
}


.team-area .team-items .thumb {
    border-bottom: 3px solid var(--default-color);
}

.team-area .team-items .thumb .share {
  background: var(--default-color);
}


.team-single-area .team-content-top .right-info span {
  color: var(--default-color);
}

.team-single-area .right-info ul li a:hover {
    color: var(--default-color);
}

.team-single-area .right-info .social .share-link > i {
  color: var(--default-color);
}

.testimonials-area .row > .info h4 {
    color: var(--default-color);
}

.testimonials-area .item .provider span {
    color: var(--default-color);
}


.expertise-area .info h4 {
  color: var(--default-color);
}


.expertise-content .content i {
  color: var(--default-color);
}


.faq-content-area .ask-question a {
  color: var(--default-color);
}

.faq-area .faq-items::after {
  background: var(--default-color);
}

.accordion .card-header h4:after {
   color: var(--default-color);
}

.faq-area .faq-content .card .card-header h4 strong {
  background: var(--default-color);
}


.faq-area .faq-content .card .card-header h4 strong::after {
  background: var(--default-color);
}

.gallery-area .pf-item .item .content .button a {
  background: var(--default-color);
}

.projects-area .single-item a {
  background: var(--default-color);
}

.project-details-area .project-info {
  border-bottom: 2px solid var(--default-color);
}

.terms-policy-area ul li span {
  background: var(--default-color);
}

.earna-career .job-lists .item .info .top i {
  color: var(--default-color);
}


.blog-area .blog-items h2 a:hover,
.blog-area .blog-items h3 a:hover,
.blog-area .blog-items h4 a:hover,
.blog-area .blog-items h5 a:hover,
.blog-area .blog-items .meta a:hover {
  color: var(--default-color);
}

.blog-area .meta ul li a:hover {
  color: var(--default-color);
}

.pagi-area .pagination li.active a {
  background: var(--default-color);
  border-color: var(--default-color);
}

.blog-area .sidebar .title h4::after {
  border-bottom: 2px solid var(--default-color);
}

.blog-area .sidebar input[type="submit"]:hover {
  background: var(--default-color) none repeat scroll 0 0;
}


.blog-area .sidebar .sidebar-item li a:hover {
  color: var(--default-color);
}

.sidebar-item.recent-post li a:hover {
  color: var(--default-color);
}


.sidebar-item.tags ul li a:hover {
  color: var(--default-color);
}

.blog-area .sidebar .sidebar-item.add-banner .sidebar-info::after {
  background: var(--default-color);
}

.blog-area.single .item .content-box span {
  background: var(--default-color) none repeat scroll 0 0;
}

.blog-area .item blockquote::before {
  background: var(--default-color);
}


.blog-area .blog-content .share li a {
  color: var(--default-color);
}


.blog-area.single .post-pagi-area h5:hover {
  color: var(--default-color);
}

.comments-list .commen-item .content .reply a:hover {
    background: var(--default-color);
}

.comments-list .commen-item .content .title span {
    color: var(--default-color);
}

.comments-info a:hover {
  color: var(--default-color);
}


.comments-form button,
.comments-form button:focus {
  border: 2px solid var(--default-color);
}

.comments-form button::after {
  background: var(--default-color);
}

.pagination li a {
  color: var(--default-color);
}

.pagination li.page-item.active a {
  background: var(--default-color);
  border-color: var(--default-color);
}

.contact-area .form-box button {
  color: var(--default-color);
}


.contact-us-area form button::after {
  background-image: linear-gradient(to right, var(--default-color),  #18ebeb, var(--default-color));
  background-color: var(--default-color);
}

form.white-popup-block button[type="submit"] {
    background: var(--default-color) none repeat scroll 0 0;
}

footer .f-items .f-item form button {
  color: var(--default-color);
}


footer .f-items .f-item .address li i {
  color: var(--default-color);
}

.earna-preloader .animation-preloader .spinner {
  border-top-color: var(--default-color);
}

.demo-area.demo-conten .single-item a span {
  background: var(--default-color);
}

.color-customizer a.opener {
  background: var(--default-color);
}

.color-customizer .text-theme {
  color: var(--default-color);
}

/*
** Gradients
*/

.bg-gradient {
  background: linear-gradient(90deg, <?php echo esc_html($earna_options['color-gra']['from']); ?> 57%, <?php echo esc_html($earna_options['color-gra']['to']); ?> 100%);
}

.gradient-bg {
  background-image: linear-gradient(90deg, <?php echo esc_html($earna_options['color-gra']['from']); ?> 23%, <?php echo esc_html($earna_options['color-gra']['to']); ?> 100%);
}

.banner-area.inc-shape::after {
    background: linear-gradient(90deg, <?php echo esc_html($earna_options['color-gra']['from']); ?> 57%, <?php echo esc_html($earna_options['color-gra']['to']); ?> 100%);
}

.services-area .services-items .item .info > i {
    background: linear-gradient(90deg, <?php echo esc_html($earna_options['color-gra']['from']); ?> 57%, <?php echo esc_html($earna_options['color-gra']['to']); ?> 100%);
}

.services-area .services-items .single-item .item::after {
  background: linear-gradient(to top, var(--default-color) 0%, var(--default-color) 50%, #18ebeb 100%);
}

.thumb-services-area .services-items .item .info > i {
    background: linear-gradient(90deg, <?php echo esc_html($earna_options['color-gra']['from']); ?> 57%, <?php echo esc_html($earna_options['color-gra']['to']); ?> 100%);
}

.skill-items .progress-box .progress .progress-bar {
  background: linear-gradient(90deg, <?php echo esc_html($earna_options['color-gra']['from']); ?> 30%, <?php echo esc_html($earna_options['color-gra']['to']); ?> 100%);
}

.expertise-area .expertise-content::after {
  background: rgba(0, 0, 0, 0) linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 1) 130%) repeat scroll 0 0;
}


.faq-area::after {
    background: linear-gradient(90deg, <?php echo esc_html($earna_options['color-gra']['from']); ?> 0%, <?php echo esc_html($earna_options['color-gra']['to']); ?> 100%);
}

.contact-area .info ul li i {
  background: linear-gradient(90deg, <?php echo esc_html($earna_options['color-gra']['from']); ?> 57%, <?php echo esc_html($earna_options['color-gra']['to']); ?> 100%);
}

.contact-us-area form button::after {
  background-image: linear-gradient(to right, var(--default-color),  #18ebeb, var(--default-color));
}

.btn.btn-gradient::after{
    background-image: linear-gradient(to right, var(--default-color),  #18ebeb, var(--default-color));
}

 	</style>

<?php }
}

  
add_action('wp_head', 'earna_customize_css');
}
?>