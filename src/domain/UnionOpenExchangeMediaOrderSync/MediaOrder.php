<?php

	namespace JD\domain\UnionOpenExchangeMediaOrderSync;
	class MediaOrder
	{

		private $params = array();
		private $orderType;
		private $orderContentList;
		private $orderId;
		private $orderStatus;
		private $orderPrice;
		private $cancelReason;
		private $taskId;
		private $balancePrice;
		private $orderName;
		private $balanceStatus;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.exchange.MediaOrder";
		}

		public function getOrderType()
		{
			return $this->orderType;
		}

		public function setOrderType($orderType)
		{
			$this->params['orderType'] = $orderType;
		}

		public function setOrderContentList($orderContentList)
		{
			$size = count($orderContentList);
			for ($i = 0; $i < $size; $i++) {
				$orderContentList [$i] = $orderContentList [$i]->getInstance();
			}
			$this->params['orderContentList'] = $orderContentList;
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

		public function getOrderStatus()
		{
			return $this->orderStatus;
		}

		public function setOrderStatus($orderStatus)
		{
			$this->params['orderStatus'] = $orderStatus;
		}

		public function getOrderPrice()
		{
			return $this->orderPrice;
		}

		public function setOrderPrice($orderPrice)
		{
			$this->params['orderPrice'] = $orderPrice;
		}

		public function getCancelReason()
		{
			return $this->cancelReason;
		}

		public function setCancelReason($cancelReason)
		{
			$this->params['cancelReason'] = $cancelReason;
		}

		public function getTaskId()
		{
			return $this->taskId;
		}

		public function setTaskId($taskId)
		{
			$this->params['taskId'] = $taskId;
		}

		public function getBalancePrice()
		{
			return $this->balancePrice;
		}

		public function setBalancePrice($balancePrice)
		{
			$this->params['balancePrice'] = $balancePrice;
		}

		public function getOrderName()
		{
			return $this->orderName;
		}

		public function setOrderName($orderName)
		{
			$this->params['orderName'] = $orderName;
		}

		public function getBalanceStatus()
		{
			return $this->balanceStatus;
		}

		public function setBalanceStatus($balanceStatus)
		{
			$this->params['balanceStatus'] = $balanceStatus;
		}

	}

	?>