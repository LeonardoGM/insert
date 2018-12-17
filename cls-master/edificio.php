<?php 
	/**
	 * Clase edificio
	 */
	include 'construccion.php';
	class edificio extends construccion
	{
		private $numPisos, $direccion, $nombre, $tipoVivienda;
		function __construct()
		{
			parent::__construct();
			$this->numPisos = "0";
			$this->direccion = "";
			$this->nombre = "";
			$this->tipoVivienda = "";
		}
		function __destruct()
		{
			parent::__destruct();
		}
		public function getnumPisos()
		{
			return $this->numPisos;
		}
		public function setnumPisos($value)
		{
			$this->numPisos = $value;
		}
		public function getdireccion()
		{
			return $this->direccion;
		}
		public function setdireccion($value)
		{
			$this->direccion = $value;
		}
		public function getnombre()
		{
			return $this->nombre;
		}
		public function setnombre($value)
		{
			$this->nombre = $value;
		}
		public function gettipoVivienda()
		{
			return $this->tipoVivienda;
		}
		public function settipoVivienda($value)
		{
			$this->tipoVivienda = $value;
		}
	}
 ?>