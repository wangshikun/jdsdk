<?php

	namespace JD\domain\UnionOpenCpActivityCancelQuery;
	class CpCancelActivityQueryReq
	{

		private $params = array();
		private $activityId;
		private $pageIndex;
		private $pageSize;
		private $shopName;
		private $pin;
		private $examineStatus;
		private $skuId;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.cp.CpCancelActivityQueryReq";
		}

		public function getActivityId()
		{
			return $this->activityId;
		}

		public function setActivityId($activityId)
		{
			$this->params['activityId'] = $activityId;
		}

		public function getPageIndex()
		{
			return $this->pageIndex;
		}

		public function setPageIndex($pageIndex)
		{
			$this->params['pageIndex'] = $pageIndex;
		}

		public function getPageSize()
		{
			return $this->pageSize;
		}

		public function setPageSize($pageSize)
		{
			$this->params['pageSize'] = $pageSize;
		}

		public function getShopName()
		{
			return $this->shopName;
		}

		public function setShopName($shopName)
		{
			$this->params['shopName'] = $shopName;
		}

		public function getPin()
		{
			return $this->pin;
		}

		public function setPin($pin)
		{
			$this->params['pin'] = $pin;
		}

		public function getExamineStatus()
		{
			return $this->examineStatus;
		}

		public function setExamineStatus($examineStatus)
		{
			$this->params['examineStatus'] = $examineStatus;
		}

		public function getSkuId()
		{
			return $this->skuId;
		}

		public function setSkuId($skuId)
		{
			$this->params['skuId'] = $skuId;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>