<?php

	 class Punto
	{

		private $_x;
		private $_y;

		//public function __construct(){}
		public function __construct($x,$y)
		{
			this.$_x=$x;
			this.$_y=$y;
		}

		public function GetX()
		{
			return this.$_x;
		}

		public function GetY()
		{
			return this.$_y;
		}

	}
	class Rectangulo
	{


		private $vertice1;
		private $vertice2;
		private $vertice3;
		private $vertice4;
		private $area;
		private $ladoDos;
		private $ladoUno;
		private $perimetro;

		//public function _construct(){}
		public function _construct($punt1,$punt2)
		{
			this.$vertice1 = $punt1;
			this.$vertice2 = new Punto($punt1.GetX(),$punt2.GetY());
			this.$vertice3 = $punt2;
			this.$vertice4 = new Punto($punt2.GetX(),$punt1.GetY());

			// Ancho
			this.$ladoUno=this.$vertice3.GetX()-this.$vertice2.GetX();

			// Alto
			this.$ladoDos=this.$vertice1.GetY()-this.$vertice2.GetY();
		}

		public function Dibujar()
		{
		
			echo "funcion dibujar";
		
		}

	}



?>