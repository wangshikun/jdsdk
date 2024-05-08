<?php

	namespace JD\domain\UnionOpenCpActivityGoodsQuery;
	class CpActivityGoodsReq
	{

		private $params = array();
		private $activityId;
		private $pageIndex;
		private $pageSize;
		private $pin;
		private $type;
		private $skuId;
		private $status;
		private $itemId;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.cp.CpActivityGoodsReq";
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

		public function getPin()
		{
			return $this->pin;
		}

		public function setPin($pin)
		{
			$this->params['pin'] = $pin;
		}

		public function getType()
		{
			return $this->type;
		}

		public function setType($type)
		{
			$this->params['type'] = $type;
		}

		public function getSkuId()
		{
			return $this->skuId;
		}

		public function setSkuId($skuId)
		{
			$this->params['skuId'] = $skuId;
		}

		public function getStatus()
		{
			return $this->status;
		}

		public function setStatus($status)
		{
			$this->params['status'] = $status;
		}

		public function getItemId()
		{
			return $this->itemId;
		}

		public function setItemId($itemId)
		{
			$this->params['itemId'] = $itemId;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>