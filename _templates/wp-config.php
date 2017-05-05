if(strstr($_SERVER['HTTP_HOST'],'.dev') !== false){

    define('DB_NAME', 'wordpress_db');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
	define('DB_HOST', 'localhost');

} else if(strstr($_SERVER['HTTP_HOST'],'.co.nz') !== false){
	
    define('DB_NAME', 'wordpress_db');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
	define('DB_HOST', 'localhost');
	
}