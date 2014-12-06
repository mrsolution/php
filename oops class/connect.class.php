<?php
class Db
{
	protected $db_host="localhost";
		
	protected $db_user="root";
	
	protected $db_pwd="";
	
	protected $db_db="oops";
		
	public $connect="";
	function connect()
	{
		$connect=mysqli_connect($this->db_host,$this->db_user,$this->db_pwd,$this->db_db);
		
		if (mysqli_connect_error())
		{
			die("Error In connection");
		}
		return $connect;
		 
	}
	function qry($sql)
	{
		$array=mysqli_query($this->connect(),$sql);

		return $array;
	}
}