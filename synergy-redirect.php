// Redirect main site of a multisite to new site. Allow login in and logged in users to browse.
function redirect_to_new_site(){
	if ( !is_main_site() || is_admin() || is_user_logged_in() || $GLOBALS['pagenow'] === 'wp-login.php' ) {
		return;
	} else {
      	exit( wp_redirect( 'http://example.com' . $_SERVER['REQUEST_URI'], 301 ) );
	}
}
add_action( 'init', 'redirect_to_new_site' );

