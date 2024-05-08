<?php

	namespace JD\domain\UnionOpenStatisticsGiftcouponQuery;
	class EffectDataReq
	{

		private $params = array();
		private $skuId;
		private $giftCouponKey;
		private $createTime;
		private $startTime;
		private $key;
		private $targetType;
		private $pin;
		private $itemId;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.statistics.GiftCouponEffectDataReq";
		}

		public function getSkuId()
		{
			return $this->skuId;
		}

		public function setSkuId($skuId)
		{
			$this->params['skuId'] = $skuId;
		}

		public function getGiftCouponKey()
		{
			return $this->giftCouponKey;
		}

		public function setGiftCouponKey($giftCouponKey)
		{
			$this->params['giftCouponKey'] = $giftCouponKey;
		}

		public function getCreateTime()
		{
			return $this->createTime;
		}

		public function setCreateTime($createTime)
		{
			$this->params['createTime'] = $createTime;
		}

		public function getStartTime()
		{
			return $this->startTime;
		}

		public function setStartTime($startTime)
		{
			$this->params['startTime'] = $startTime;
		}

		public function getKey()
		{
			return $this->key;
		}

		public function setKey($key)
		{
			$this->params['key'] = $key;
		}

		public function getTargetType()
		{
			return $this->targetType;
		}

		public function setTargetType($targetType)
		{
			$this->params['targetType'] = $targetType;
		}

		public function getPin()
		{
			return $this->pin;
		}

		public function setPin($pin)
		{
			$this->params['pin'] = $pin;
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