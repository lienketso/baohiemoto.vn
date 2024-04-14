<?php

/*
Plugin Name: Earna Extensions
Plugin URI: https://wordpressriverthemes.tech/earna
Description: Earna Extensions For earna WordPress Theme
Author: WordPressRiver
Version: 1.3
Author URI: https://creativedigital.tech/earna
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
     die ('Silly human what are you doing here');
}

// Before VC Init

add_action( 'vc_before_init', 'earna_vc_before_init_actions' );

function earna_vc_before_init_actions() {

	// Home 1

		// Hero

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/hero/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/hero/indicator.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/hero/indicator-end.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/hero/hero.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/hero/end.php');

		// Features 

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/features/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/features/title.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/features/features.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/features/end.php');

		// About 

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/about/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/about/about.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/about/end.php');

		// Services 

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/services/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/services/services.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/services/end.php');

		// Choose 

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/choose.php');

		// Clients 

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/client/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/client/client.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/client/end.php');

		// Team 

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/team/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/team/title.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/team/notitle.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/team/team.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/team/end.php');

		// Testimonial 

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/testimonial/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/testimonial/testimonial.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/testimonial/end.php');

		// Projects 

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/project/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/project/project.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/project/end.php');
		
		// Blog
		
		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/blog.php');

	// Pages About

		// About Section 

		include( plugin_dir_path( __FILE__ ) . '/widgets/about/about.php');

		// Faq Section 

		include( plugin_dir_path( __FILE__ ) . '/widgets/about/faq/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/about/faq/faq.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/about/faq/end.php');

		// Growth Section 

		include( plugin_dir_path( __FILE__ ) . '/widgets/about/growth.php');

		// Contact Section 

		include( plugin_dir_path( __FILE__ ) . '/widgets/about/contact/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/about/contact/contact.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/about/contact/form-start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/about/contact/end.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/about/contact/map.php');

	// Pages Projects 

	include( plugin_dir_path( __FILE__ ) . '/widgets/gallery/start.php');
	
	include( plugin_dir_path( __FILE__ ) . '/widgets/gallery/title.php');

	include( plugin_dir_path( __FILE__ ) . '/widgets/gallery/gallery.php');

	include( plugin_dir_path( __FILE__ ) . '/widgets/gallery/end.php');

	// Services  

		// Services One 

		include( plugin_dir_path( __FILE__ ) . '/widgets/services/services1/expertise-start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/services/services1/skill.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/services/services1/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/services/services1/services.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/services/services1/end.php');

		// Services Two 

		include( plugin_dir_path( __FILE__ ) . '/widgets/services/services2/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/services/services2/services2.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/services/services2/end.php');

		// Services Three 

		include( plugin_dir_path( __FILE__ ) . '/widgets/services/services3/start.php');
		
		include( plugin_dir_path( __FILE__ ) . '/widgets/services/services3/title.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/services/services3/services3.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/services/services3/end.php');

	// Team Single

		include( plugin_dir_path( __FILE__ ) . '/widgets/team/single/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/team/single/end.php');

	// Case Single

		include( plugin_dir_path( __FILE__ ) . '/widgets/case/single/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/case/single/end.php');

	// Service Single

		include( plugin_dir_path( __FILE__ ) . '/widgets/services/single/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/services/single/single.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/services/single/end.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/services/single/sidebar-start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/services/single/list-start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/services/single/list.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/services/single/list-end.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/services/single/help.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/services/single/brochure.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/services/single/sidebar-end.php');

	// Home 2 

		// Hero

		include( plugin_dir_path( __FILE__ ) . '/widgets/home2/hero/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home2/hero/indicator.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home2/hero/indicator-end.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home2/hero/hero.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home2/hero/end.php');

		// Faq

		include( plugin_dir_path( __FILE__ ) . '/widgets/home2/faq/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home2/faq/faq.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home2/faq/end.php');
		
	// Home 3

		// Hero

		include( plugin_dir_path( __FILE__ ) . '/widgets/home3/hero/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home3/hero/hero.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home3/hero/end.php');
		
		// Services 

		include( plugin_dir_path( __FILE__ ) . '/widgets/home3/service/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home3/service/service.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home3/service/end.php');
		
	// Home 4

		// Hero

		include( plugin_dir_path( __FILE__ ) . '/widgets/home4/hero/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home4/hero/hero.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home4/hero/end.php');
		
	// About
	
	    include( plugin_dir_path( __FILE__ ) . '/widgets/home4/about.php');
	    
    // Home 5

		// Hero

		include( plugin_dir_path( __FILE__ ) . '/widgets/home5/hero/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home5/hero/hero.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home5/hero/end.php');
		
		// Services 

		include( plugin_dir_path( __FILE__ ) . '/widgets/home5/service/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home5/service/service.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home5/service/end.php');
		
	// Home 6

		// Hero

		include( plugin_dir_path( __FILE__ ) . '/widgets/home6/hero/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home6/hero/hero.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home6/hero/end.php');
		
		// About

		include( plugin_dir_path( __FILE__ ) . '/widgets/home6/about/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home6/about/about.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home6/about/end.php');
		
		// Service

		include( plugin_dir_path( __FILE__ ) . '/widgets/home6/service/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home6/service/service.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home6/service/end.php');
		
		// Testimonial

		include( plugin_dir_path( __FILE__ ) . '/widgets/home6/testimonial/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home6/testimonial/testimonial.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home6/testimonial/end.php');
	
	// Home 7

		// Hero

		include( plugin_dir_path( __FILE__ ) . '/widgets/home7/hero/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home7/hero/indicator.php');
		
		include( plugin_dir_path( __FILE__ ) . '/widgets/home7/hero/indicator-end.php');
		
		include( plugin_dir_path( __FILE__ ) . '/widgets/home7/hero/hero.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home7/hero/end.php');
		
		// Services 

		include( plugin_dir_path( __FILE__ ) . '/widgets/home7/services/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home7/services/services.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home7/services/end.php');
		
		// About 

		include( plugin_dir_path( __FILE__ ) . '/widgets/home7/about/start.php');
		
		include( plugin_dir_path( __FILE__ ) . '/widgets/home7/about/about.php');
		
		include( plugin_dir_path( __FILE__ ) . '/widgets/home7/about/end.php');
		
		// Work 

		include( plugin_dir_path( __FILE__ ) . '/widgets/home7/work/start.php');
		
		include( plugin_dir_path( __FILE__ ) . '/widgets/home7/work/work.php');
		
		include( plugin_dir_path( __FILE__ ) . '/widgets/home7/work/end.php');
		

}
