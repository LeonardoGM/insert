<?php 
	/**
	 * 
	 */
	class construccion 
	{
		private $ancho, $largo, $precioLote;
		public function __construct()
		{
			$this->ancho = 1;
			$this->largo = 1;
		}
		public function __destruct()
		{
			
		}
		public function getancho()
		{
			return $this->ancho;
		}
		public function setancho($value)
		{
			$this->ancho = $value;
		}
		public function getlargo()
		{
			return $this->largo;
		}
		public function setlargo($value)
		{
			$this->largo = $value;
		}
		public function getprecioLote()
		{
			return $this->precioLote;
		}
		public function setprecioLote($value)
		{
			$this->$precioLote = $value;
		}
		public function obtenerarea()
		{
			return $this->ancho * $this->largo;
		}
	}
 ?>