<?php

	namespace JD\domain\UnionOpenExchangeDeviceSupply;
	class DeviceInfo
	{

		private $params = array();
		private $deviceType;
		private $orderId;
		private $requestId;
		private $eventTime;
		private $contentId;
		private $eventType;
		private $deviceId;
		private $taskId;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.exchange.DeviceInfo";
		}

		public function getDeviceType()
		{
			return $this->deviceType;
		}

		public function setDeviceType($deviceType)
		{
			$this->params['deviceType'] = $deviceType;
		}

		public function getOrderId()
		{
			return $this->orderId;
		}

		public function setOrderId($orderId)
		{
			$this->params['orderId'] = $orderId;
		}

		public function getRequestId()
		{
			return $this->requestId;
		}

		public function setRequestId($requestId)
		{
			$this->params['requestId'] = $requestId;
		}

		public function getEventTime()
		{
			return $this->eventTime;
		}

		public function setEventTime($eventTime)
		{
			$this->params['eventTime'] = $eventTime;
		}

		public function getContentId()
		{
			return $this->contentId;
		}

		public function setContentId($contentId)
		{
			$this->params['contentId'] = $contentId;
		}

		public function getEventType()
		{
			return $this->eventType;
		}

		public function setEventType($eventType)
		{
			$this->params['eventType'] = $eventType;
		}

		public function getDeviceId()
		{
			return $this->deviceId;
		}

		public function setDeviceId($deviceId)
		{
			$this->params['deviceId'] = $deviceId;
		}

		public function getTaskId()
		{
			return $this->taskId;
		}

		public function setTaskId($taskId)
		{
			$this->params['taskId'] = $taskId;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>