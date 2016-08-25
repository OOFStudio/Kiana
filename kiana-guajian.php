<?php
/*
Plugin Name: 琪亚娜小挂件
Plugin URI: https://baidu-853.rhcloud.com/Kiana-guajian
Description: 在博客添加个萌萌的琪亚娜~
Author: Sonic853
Author URI: https://baidu-853.rhcloud.com/
Version: 1.0.0
Text Domain: Kiana-handing-tool
*/
function kiana_scripts(){
	wp_register_script('kiana-script', plugins_url('kiana-guajian/js/bga.min.js'), array('jquery'));
	if(!is_admin())/*除了后台界面在其他地方都会启用*/{
		wp_enqueue_script('kiana-script');
	}
}
add_action('init','kiana_scripts');
?>