<?php

	namespace JD\domain\KplOpenYaoPropertyUpdate;
	class WareListVo
	{

		private $params = array();
		private $venderSku;
		private $validTime;

		function __construct()
		{
			$this->params["@type"] = "com.jd.kpl.WareListVo";
		}

		public function getVenderSku()
		{
			return $this->venderSku;
		}

		public function setVenderSku($venderSku)
		{
			$this->params['venderSku'] = $venderSku;
		}

		public function getValidTime()
		{
			return $this->validTime;
		}

		public function setValidTime($validTime)
		{
			$this->params['validTime'] = $validTime;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>