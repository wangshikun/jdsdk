<?php

	namespace JD\api;
	class WareProductsortGetRequest
	{


		private $apiParas = array();
		private $version;
		private $productSortIds;

		public function getApiMethodName()
		{
			return "jingdong.ware.productsort.get";
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

		public function getProductSortIds()
		{
			return $this->productSortIds;
		}

		public function setProductSortIds($productSortIds)
		{
			$this->productSortIds = $productSortIds;
			$this->apiParas["product_sort_ids"] = $productSortIds;
		}
	}





        
 

