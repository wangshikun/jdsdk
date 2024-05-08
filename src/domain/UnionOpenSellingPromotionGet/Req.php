<?php

	namespace JD\domain\UnionOpenSellingPromotionGet;
	class Req
	{

		private $params = array();
		private $materialId;
		private $siteId;
		private $chainType;
		private $couponUrl;
		private $positionId;
		private $subUnionId;
		private $ext1;
		private $pid;
		private $unionId;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.promotion.base.PromotionCodeReq";
		}

		public function getMaterialId()
		{
			return $this->materialId;
		}

		public function setMaterialId($materialId)
		{
			$this->params['materialId'] = $materialId;
		}

		public function getSiteId()
		{
			return $this->siteId;
		}

		public function setSiteId($siteId)
		{
			$this->params['siteId'] = $siteId;
		}

		public function getChainType()
		{
			return $this->chainType;
		}

		public function setChainType($chainType)
		{
			$this->params['chainType'] = $chainType;
		}

		public function getCouponUrl()
		{
			return $this->couponUrl;
		}

		public function setCouponUrl($couponUrl)
		{
			$this->params['couponUrl'] = $couponUrl;
		}

		public function getPositionId()
		{
			return $this->positionId;
		}

		public function setPositionId($positionId)
		{
			$this->params['positionId'] = $positionId;
		}

		public function getSubUnionId()
		{
			return $this->subUnionId;
		}

		public function setSubUnionId($subUnionId)
		{
			$this->params['subUnionId'] = $subUnionId;
		}

		public function getExt1()
		{
			return $this->ext1;
		}

		public function setExt1($ext1)
		{
			$this->params['ext1'] = $ext1;
		}

		public function getPid()
		{
			return $this->pid;
		}

		public function setPid($pid)
		{
			$this->params['pid'] = $pid;
		}

		public function getUnionId()
		{
			return $this->unionId;
		}

		public function setUnionId($unionId)
		{
			$this->params['unionId'] = $unionId;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>