<?php

	namespace JD\api;
	class WareProductimageGetRequest
	{


		private $apiParas = array();
		private $version;
		private $skuId;

		public function getApiMethodName()
		{
			return "jingdong.ware.productimage.get";
		}

		public function getApiParas()
		{
			if (empty($this->apiParas)) {
				return "{}";
			}
			return json_encode($this->apiParas);
		}

		public function check()
		{

		}

		public function putOtherTextParam($key, $value)
		{
			$this->apiParas[$key] = $value;
			$this->$key = $value;
		}

		public function getVersion()
		{
			return $this->version;
		}

		public function setVersion($version)
		{
			$this->version = $version;
		}

		public function getSkuId()
		{
			return $this->skuId;
		}

		public function setSkuId($skuId)
		{
			$this->skuId = $skuId;
			$this->apiParas["sku_id"] = $skuId;
		}
	}





        
 

