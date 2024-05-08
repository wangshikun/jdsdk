<?php

	namespace JD\domain\UnionOpenPromotionParse;
	class PromotionReq
	{

		private $params = array();
		private $promotionUrl;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.promotion.base.PromotionReq";
		}

		public function getPromotionUrl()
		{
			return $this->promotionUrl;
		}

		public function setPromotionUrl($promotionUrl)
		{
			$this->params['promotionUrl'] = $promotionUrl;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>