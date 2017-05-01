<?php 

/**
* Establishing connection to the DDBB server
*/
class Conn extends mysqli
{
	
	public function __construct()
	{
		#parent::__construct('localhost','hulfn','nilcyd','padrinoDB');
		parent::__construct(DB_HOST,DB_USER,DB_PASS,DB_NAME);
		$this->connect_errno ? die('Error con la conexion') : $x='correcto';
		$this->set_charset("utf8");
		echo $x;
	}

#Count the columns and return 0 if empty
	public function rows($query) {
    	return mysqli_num_rows($query);
  	}

#Release the array that contain the data
  	public function liberar($query) {
    	return mysqli_free_result($query);
  	}

#Fetch into the array
  	public function recorrer($query) {
    	return mysqli_fetch_array($query);
  	}
}

 ?>