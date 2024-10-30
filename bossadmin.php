<?php
/*
Plugin Name: BossAdmin
Plugin URI:  http://wordpress.org/plugins/bossadmin
Description: A dark style color scheme for WordPress admin.
Version:     1.0
Author:      silver530
Author URI:  http://www.pixelwars.org
License:     GPLv2 or later
Text Domain: bossadmin
Domain Path: /langs/
*/


/*
Copyright (c) 2014, silver530.

This program is free software; you can redistribute it and/or 
modify it under the terms of the GNU General Public License 
as published by the Free Software Foundation; either version 2 
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, 
but WITHOUT ANY WARRANTY; without even the implied warranty of 
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the 
GNU General Public License for more details.

You should have received a copy of the GNU General Public License 
along with this program; if not, write to the Free Software 
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/


/* ============================================================================================================================================= */

	function bossadmin_admin_enqueue()
	{
		// Register style
		wp_register_style( 'bossadmin-style', plugins_url( 'bossadmin-style.css' , __FILE__ ), null, null );
		
		// Enqueue style
		wp_enqueue_style( 'bossadmin-style' );
	}
	// end bossadmin_admin_enqueue
	
	add_action( 'admin_enqueue_scripts', 'bossadmin_admin_enqueue' );

/* ============================================================================================================================================= */

?>