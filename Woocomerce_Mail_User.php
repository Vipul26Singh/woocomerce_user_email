<?php 

/*

Plugin Name: Minbazaar Email Id

Plugin URI: http://github.com/Vipul26Singh/Woocomerce_mail_user

Description: Plugin for modifying the from line on all emails coming from WordPress.

Version: 1.0

Author: VIpul Singh 

Author URI: http://github.com/Vipul26Singh/ 

License: GPL2

*/


if(!class_exists('Woocommerce_Mail_User')){

	class Woocommerce_Mail_User{






		public function __construct(){
			add_filter('wp_mail_from', array(&$this, 'Mail_from_address'));

                        add_filter('wp_mail_from_name', array(&$this, 'Mail_from_name'));


		} 

		public function Mail_from_address(){

			return $this->Send_From_Options['<Email id>'];

		} 



		public function Mail_from_name(){

			return $this->Send_From_Options['<Name>'];

		} 
	}
} 



if(class_exists('Woocommerce_Mail_User')){

	$woocommerce_mail_user = new Woocommerce_Mail_User();

}
