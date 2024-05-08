<?php

	namespace JD\domain\UnionOpenUserPidGet;
	class PidReq
	{

		private $params = array();
		private $unionId;
		private $childUnionId;
		private $promotionType;
		private $positionName;
		private $mediaName;
		private $pin;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.user.PidReq";
		}

		public function getUnionId()
		{
			return $this->unionId;
		}

		public function setUnionId($unionId)
		{
			$this->params['unionId'] = $unionId;
		}

		public function getChildUnionId()
		{
			return $this->childUnionId;
		}

		public function setChildUnionId($childUnionId)
		{
			$this->params['childUnionId'] = $childUnionId;
		}

		public function getPromotionType()
		{
			return $this->promotionType;
		}

		public function setPromotionType($promotionType)
		{
			$this->params['promotionType'] = $promotionType;
		}

		public function getPositionName()
		{
			return $this->positionName;
		}

		public function setPositionName($positionName)
		{
			$this->params['positionName'] = $positionName;
		}

		public function getMediaName()
		{
			return $this->mediaName;
		}

		public function setMediaName($mediaName)
		{
			$this->params['mediaName'] = $mediaName;
		}

		public function getPin()
		{
			return $this->pin;
		}

		public function setPin($pin)
		{
			$this->params['pin'] = $pin;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>