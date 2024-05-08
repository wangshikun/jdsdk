<?php

	namespace JD\domain\UnionOpenCouponGiftStop;
	class CouponReq
	{

		private $params = array();
		private $giftCouponKey;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.coupon.gift.StopGiftCouponReq";
		}

		public function getGiftCouponKey()
		{
			return $this->giftCouponKey;
		}

		public function setGiftCouponKey($giftCouponKey)
		{
			$this->params['giftCouponKey'] = $giftCouponKey;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>