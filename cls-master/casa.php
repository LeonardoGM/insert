<?php 
	/**
	 * Clase Casa
	 * Diana
	 */
	include 'construccion.php';
	class casa extends construccion
	{
		private $numCuartos, $direccion, $color, $tipoVivienda;
		function __construct()
		{
			parent::__construct();
			$this->numCuartos = "0";
			$this->direccion = "";
			$this->color = "";
			$this->tipoVivienda = "";
		}

		function __destruct()
		{
			parent::__destruct();
		}

		public function getnumCuartos()
		{
			return $this->numCuartos;
		}
		public function setnumCuartos($value)
		{
			$this->numCuartos = $value;
		}
		public function getdireccion()
		{
			return $this->direccion;
		}
		public function setdireccion($value)
		{
			$this->direccion = $value;
		}
		public function getcolor()
		{
			return $this->color;
		}
		public function setcolor($value)
		{
			$this->color = $value;
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