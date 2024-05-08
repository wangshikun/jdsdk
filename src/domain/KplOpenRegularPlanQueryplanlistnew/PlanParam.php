<?php

	namespace JD\domain\KplOpenRegularPlanQueryplanlistnew;
	class PlanParam
	{

		private $params = array();
		private $startRow;
		private $pageSize;
		private $venderId;
		private $planNumber;
		private $payMode;
		private $skuId;
		private $planStartTime;
		private $planEndTime;

		function __construct()
		{
			$this->params["@type"] = "com.jd.purchase.regular.api.domain.plan.PlanParam";
		}

		public function getStartRow()
		{
			return $this->startRow;
		}

		public function setStartRow($startRow)
		{
			$this->params['startRow'] = $startRow;
		}

		public function getPageSize()
		{
			return $this->pageSize;
		}

		public function setPageSize($pageSize)
		{
			$this->params['pageSize'] = $pageSize;
		}

		public function getVenderId()
		{
			return $this->venderId;
		}

		public function setVenderId($venderId)
		{
			$this->params['venderId'] = $venderId;
		}

		public function getPlanNumber()
		{
			return $this->planNumber;
		}

		public function setPlanNumber($planNumber)
		{
			$this->params['planNumber'] = $planNumber;
		}

		public function getPayMode()
		{
			return $this->payMode;
		}

		public function setPayMode($payMode)
		{
			$this->params['payMode'] = $payMode;
		}

		public function getSkuId()
		{
			return $this->skuId;
		}

		public function setSkuId($skuId)
		{
			$this->params['skuId'] = $skuId;
		}

		public function getPlanStartTime()
		{
			return $this->planStartTime;
		}

		public function setPlanStartTime($planStartTime)
		{
			$this->params['planStartTime'] = $planStartTime;
		}

		public function getPlanEndTime()
		{
			return $this->planEndTime;
		}

		public function setPlanEndTime($planEndTime)
		{
			$this->params['planEndTime'] = $planEndTime;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>