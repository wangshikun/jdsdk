<?php

	namespace JD\domain\UnionOpenStatisticsPromotionQuery;
	class PromotionEffectDataReq
	{

		private $params = array();
		private $skuId;
		private $activityUrl;
		private $timeType;
		private $dataType;
		private $fields;
		private $itemId;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.statistics.PromotionEffectDataReq";
		}

		public function getSkuId()
		{
			return $this->skuId;
		}

		public function setSkuId($skuId)
		{
			$this->params['skuId'] = $skuId;
		}

		public function getActivityUrl()
		{
			return $this->activityUrl;
		}

		public function setActivityUrl($activityUrl)
		{
			$this->params['activityUrl'] = $activityUrl;
		}

		public function getTimeType()
		{
			return $this->timeType;
		}

		public function setTimeType($timeType)
		{
			$this->params['timeType'] = $timeType;
		}

		public function getDataType()
		{
			return $this->dataType;
		}

		public function setDataType($dataType)
		{
			$this->params['dataType'] = $dataType;
		}

		public function getFields()
		{
			return $this->fields;
		}

		public function setFields($fields)
		{
			$this->params['fields'] = $fields;
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