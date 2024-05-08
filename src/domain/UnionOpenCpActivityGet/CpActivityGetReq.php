<?php

	namespace JD\domain\UnionOpenCpActivityGet;
	class CpActivityGetReq
	{

		private $params = array();
		private $serviceRateMin;
		private $priceMax;
		private $weeklySales;
		private $title;
		private $type;
		private $dongdong;
		private $priceMin;
		private $jdGoodShop;
		private $batchCommissionRateMin;
		private $activityId;
		private $evaluationCnt;
		private $shipping;
		private $jdLogistics;
		private $startTime;
		private $freightInsurance;
		private $qq;
		private $coupon;
		private $estimateSales;
		private $purchase;
		private $favorableRate;
		private $goodsType;
		private $endTime;
		private $pin;
		private $popServiceRateMin;
		private $status;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.cp.CpActivityReq";
		}

		public function getServiceRateMin()
		{
			return $this->serviceRateMin;
		}

		public function setServiceRateMin($serviceRateMin)
		{
			$this->params['serviceRateMin'] = $serviceRateMin;
		}

		public function getPriceMax()
		{
			return $this->priceMax;
		}

		public function setPriceMax($priceMax)
		{
			$this->params['priceMax'] = $priceMax;
		}

		public function getWeeklySales()
		{
			return $this->weeklySales;
		}

		public function setWeeklySales($weeklySales)
		{
			$this->params['weeklySales'] = $weeklySales;
		}

		public function getTitle()
		{
			return $this->title;
		}

		public function setTitle($title)
		{
			$this->params['title'] = $title;
		}

		public function getType()
		{
			return $this->type;
		}

		public function setType($type)
		{
			$this->params['type'] = $type;
		}

		public function getDongdong()
		{
			return $this->dongdong;
		}

		public function setDongdong($dongdong)
		{
			$this->params['dongdong'] = $dongdong;
		}

		public function getPriceMin()
		{
			return $this->priceMin;
		}

		public function setPriceMin($priceMin)
		{
			$this->params['priceMin'] = $priceMin;
		}

		public function getJdGoodShop()
		{
			return $this->jdGoodShop;
		}

		public function setJdGoodShop($jdGoodShop)
		{
			$this->params['jdGoodShop'] = $jdGoodShop;
		}

		public function getBatchCommissionRateMin()
		{
			return $this->batchCommissionRateMin;
		}

		public function setBatchCommissionRateMin($batchCommissionRateMin)
		{
			$this->params['batchCommissionRateMin'] = $batchCommissionRateMin;
		}

		public function getActivityId()
		{
			return $this->activityId;
		}

		public function setActivityId($activityId)
		{
			$this->params['activityId'] = $activityId;
		}

		public function getEvaluationCnt()
		{
			return $this->evaluationCnt;
		}

		public function setEvaluationCnt($evaluationCnt)
		{
			$this->params['evaluationCnt'] = $evaluationCnt;
		}

		public function getShipping()
		{
			return $this->shipping;
		}

		public function setShipping($shipping)
		{
			$this->params['shipping'] = $shipping;
		}

		public function getJdLogistics()
		{
			return $this->jdLogistics;
		}

		public function setJdLogistics($jdLogistics)
		{
			$this->params['jdLogistics'] = $jdLogistics;
		}

		public function getStartTime()
		{
			return $this->startTime;
		}

		public function setStartTime($startTime)
		{
			$this->params['startTime'] = $startTime;
		}

		public function getFreightInsurance()
		{
			return $this->freightInsurance;
		}

		public function setFreightInsurance($freightInsurance)
		{
			$this->params['freightInsurance'] = $freightInsurance;
		}

		public function getQq()
		{
			return $this->qq;
		}

		public function setQq($qq)
		{
			$this->params['qq'] = $qq;
		}

		public function getCoupon()
		{
			return $this->coupon;
		}

		public function setCoupon($coupon)
		{
			$this->params['coupon'] = $coupon;
		}

		public function getEstimateSales()
		{
			return $this->estimateSales;
		}

		public function setEstimateSales($estimateSales)
		{
			$this->params['estimateSales'] = $estimateSales;
		}

		public function getPurchase()
		{
			return $this->purchase;
		}

		public function setPurchase($purchase)
		{
			$this->params['purchase'] = $purchase;
		}

		public function getFavorableRate()
		{
			return $this->favorableRate;
		}

		public function setFavorableRate($favorableRate)
		{
			$this->params['favorableRate'] = $favorableRate;
		}

		public function getGoodsType()
		{
			return $this->goodsType;
		}

		public function setGoodsType($goodsType)
		{
			$this->params['goodsType'] = $goodsType;
		}

		public function getEndTime()
		{
			return $this->endTime;
		}

		public function setEndTime($endTime)
		{
			$this->params['endTime'] = $endTime;
		}

		public function getPin()
		{
			return $this->pin;
		}

		public function setPin($pin)
		{
			$this->params['pin'] = $pin;
		}

		public function getPopServiceRateMin()
		{
			return $this->popServiceRateMin;
		}

		public function setPopServiceRateMin($popServiceRateMin)
		{
			$this->params['popServiceRateMin'] = $popServiceRateMin;
		}

		public function getStatus()
		{
			return $this->status;
		}

		public function setStatus($status)
		{
			$this->params['status'] = $status;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>