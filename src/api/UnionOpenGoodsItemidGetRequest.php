<?php

	namespace JD\api;
	class UnionOpenGoodsItemidGetRequest
	{

		private $apiParas = array();
		private $version;
		private $itemIdReq;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.union.open.goods.itemid.get";
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

		public function getItemIdReq()
		{
			return $this->apiParas['itemIdReq'];
		}

		public function setItemIdReq($itemIdReq)
		{
			$this->apiParas['itemIdReq'] = $itemIdReq;
		}
	}

	?>