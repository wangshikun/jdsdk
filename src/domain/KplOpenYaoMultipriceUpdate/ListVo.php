<?php

	namespace JD\domain\KplOpenYaoMultipriceUpdate;
	class ListVo
	{

		private $params = array();
		private $venderSku;
		private $priceNames;

		function __construct()
		{
			$this->params["@type"] = "com.jd.kpl.ListVo";
		}

		public function getVenderSku()
		{
			return $this->venderSku;
		}

		public function setVenderSku($venderSku)
		{
			$this->params['venderSku'] = $venderSku;
		}

		public function setPriceNames($priceNames)
		{
			$size = count($priceNames);
			for ($i = 0; $i < $size; $i++) {
				$priceNames [$i] = $priceNames [$i]->getInstance();
			}
			$this->params['priceNames'] = $priceNames;
		}


		function getInstance()
		{
			return $this->params;
		}

	}

	?>