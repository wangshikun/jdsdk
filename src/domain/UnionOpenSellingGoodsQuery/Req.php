<?php

	namespace JD\domain\UnionOpenSellingGoodsQuery;
	class Req
	{

		private $params = array();
		private $skuIds;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.goods.selling.SellingGoodsReq";
		}

		public function getSkuIds()
		{
			return $this->skuIds;
		}

		public function setSkuIds($skuIds)
		{
			$this->params['skuIds'] = $skuIds;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>