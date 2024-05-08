<?php

	namespace JD\domain\UnionOpenCouponGiftGet;
	class CouponReq
	{

		private $params = array();
		private $skuMaterialId;
		private $discount;
		private $amount;
		private $receiveStartTime;
		private $receiveEndTime;
		private $effectiveDays;
		private $isSpu;
		private $expireType;
		private $useStartTime;
		private $useEndTime;
		private $share;
		private $contentMatch;
		private $couponTitle;
		private $contentMatchMedias;
		private $showInMedias;
		private $targetType;
		private $childPromoters;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.coupon.gift.CreateGiftCouponReq";
		}

		public function getSkuMaterialId()
		{
			return $this->skuMaterialId;
		}

		public function setSkuMaterialId($skuMaterialId)
		{
			$this->params['skuMaterialId'] = $skuMaterialId;
		}

		public function getDiscount()
		{
			return $this->discount;
		}

		public function setDiscount($discount)
		{
			$this->params['discount'] = $discount;
		}

		public function getAmount()
		{
			return $this->amount;
		}

		public function setAmount($amount)
		{
			$this->params['amount'] = $amount;
		}

		public function getReceiveStartTime()
		{
			return $this->receiveStartTime;
		}

		public function setReceiveStartTime($receiveStartTime)
		{
			$this->params['receiveStartTime'] = $receiveStartTime;
		}

		public function getReceiveEndTime()
		{
			return $this->receiveEndTime;
		}

		public function setReceiveEndTime($receiveEndTime)
		{
			$this->params['receiveEndTime'] = $receiveEndTime;
		}

		public function getEffectiveDays()
		{
			return $this->effectiveDays;
		}

		public function setEffectiveDays($effectiveDays)
		{
			$this->params['effectiveDays'] = $effectiveDays;
		}

		public function getIsSpu()
		{
			return $this->isSpu;
		}

		public function setIsSpu($isSpu)
		{
			$this->params['isSpu'] = $isSpu;
		}

		public function getExpireType()
		{
			return $this->expireType;
		}

		public function setExpireType($expireType)
		{
			$this->params['expireType'] = $expireType;
		}

		public function getUseStartTime()
		{
			return $this->useStartTime;
		}

		public function setUseStartTime($useStartTime)
		{
			$this->params['useStartTime'] = $useStartTime;
		}

		public function getUseEndTime()
		{
			return $this->useEndTime;
		}

		public function setUseEndTime($useEndTime)
		{
			$this->params['useEndTime'] = $useEndTime;
		}

		public function getShare()
		{
			return $this->share;
		}

		public function setShare($share)
		{
			$this->params['share'] = $share;
		}

		public function getContentMatch()
		{
			return $this->contentMatch;
		}

		public function setContentMatch($contentMatch)
		{
			$this->params['contentMatch'] = $contentMatch;
		}

		public function getCouponTitle()
		{
			return $this->couponTitle;
		}

		public function setCouponTitle($couponTitle)
		{
			$this->params['couponTitle'] = $couponTitle;
		}

		public function getContentMatchMedias()
		{
			return $this->contentMatchMedias;
		}

		public function setContentMatchMedias($contentMatchMedias)
		{
			$this->params['contentMatchMedias'] = $contentMatchMedias;
		}

		public function getShowInMedias()
		{
			return $this->showInMedias;
		}

		public function setShowInMedias($showInMedias)
		{
			$this->params['showInMedias'] = $showInMedias;
		}

		public function getTargetType()
		{
			return $this->targetType;
		}

		public function setTargetType($targetType)
		{
			$this->params['targetType'] = $targetType;
		}

		public function getChildPromoters()
		{
			return $this->childPromoters;
		}

		public function setChildPromoters($childPromoters)
		{
			$this->params['childPromoters'] = $childPromoters;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>