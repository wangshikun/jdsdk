<?php

	namespace JD\domain\OpenOrderSplitDeliverNew;
	class Attribute1
	{

		private $params = array();
		private $batchList;
		private $commonName;
		private $packageSpec;
		private $manufacturer;
		private $venderSku;
		private $skuName;
		private $skuPlace;
		private $skuCount;
		private $approvalNumber;

		function __construct()
		{
			$this->params["@type"] = "com.jd.gongxiao.kepler.domain.OrderExtSkuInfo";
		}

		public function setBatchList($batchList)
		{
			$size = count($batchList);
			for ($i = 0; $i < $size; $i++) {
				$batchList [$i] = $batchList [$i]->getInstance();
			}
			$this->params['batchList'] = $batchList;
		}

		function getInstance()
		{
			return $this->params;
		}

		public function getCommonName()
		{
			return $this->commonName;
		}

		public function setCommonName($commonName)
		{
			$this->params['commonName'] = $commonName;
		}

		public function getPackageSpec()
		{
			return $this->packageSpec;
		}

		public function setPackageSpec($packageSpec)
		{
			$this->params['packageSpec'] = $packageSpec;
		}

		public function getManufacturer()
		{
			return $this->manufacturer;
		}

		public function setManufacturer($manufacturer)
		{
			$this->params['manufacturer'] = $manufacturer;
		}

		public function getVenderSku()
		{
			return $this->venderSku;
		}

		public function setVenderSku($venderSku)
		{
			$this->params['venderSku'] = $venderSku;
		}

		public function getSkuName()
		{
			return $this->skuName;
		}

		public function setSkuName($skuName)
		{
			$this->params['skuName'] = $skuName;
		}

		public function getSkuPlace()
		{
			return $this->skuPlace;
		}

		public function setSkuPlace($skuPlace)
		{
			$this->params['skuPlace'] = $skuPlace;
		}

		public function getSkuCount()
		{
			return $this->skuCount;
		}

		public function setSkuCount($skuCount)
		{
			$this->params['skuCount'] = $skuCount;
		}

		public function getApprovalNumber()
		{
			return $this->approvalNumber;
		}

		public function setApprovalNumber($approvalNumber)
		{
			$this->params['approvalNumber'] = $approvalNumber;
		}

	}

	?>