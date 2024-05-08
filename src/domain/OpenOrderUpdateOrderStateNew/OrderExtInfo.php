<?php

	namespace JD\domain\OpenOrderUpdateOrderStateNew;
	class OrderExtInfo
	{

		private $params = array();
		private $orderAmount;
		private $sendTime;
		private $skuList;
		private $orderId;

		function __construct()
		{
			$this->params["@type"] = "com.jd.gongxiao.kepler.domain.OrderExtInfo";
		}

		public function getOrderAmount()
		{
			return $this->orderAmount;
		}

		public function setOrderAmount($orderAmount)
		{
			$this->params['orderAmount'] = $orderAmount;
		}

		public function getSendTime()
		{
			return $this->sendTime;
		}

		public function setSendTime($sendTime)
		{
			$this->params['sendTime'] = $sendTime;
		}

		public function setSkuList($skuList)
		{
			$size = count($skuList);
			for ($i = 0; $i < $size; $i++) {
				$skuList [$i] = $skuList [$i]->getInstance();
			}
			$this->params['skuList'] = $skuList;
		}

		function getInstance()
		{
			return $this->params;
		}

		public function getOrderId()
		{
			return $this->orderId;
		}

		public function setOrderId($orderId)
		{
			$this->params['orderId'] = $orderId;
		}

	}

	?>