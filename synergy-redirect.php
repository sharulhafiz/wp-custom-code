function redirect_to_new_site(){
	if ( !is_main_site() || is_admin() || is_user_logged_in() || $GLOBALS['pagenow'] === 'wp-login.php' ) {
		return;
	} else {
      	exit( wp_redirect( 'http://razak.utm.my/', 301 ) );
	}
}
add_action( 'init', 'redirect_to_new_site' );
