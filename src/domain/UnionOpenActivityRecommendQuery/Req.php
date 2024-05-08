<?php

	namespace JD\domain\UnionOpenActivityRecommendQuery;
	class Req
	{

		private $params = array();
		private $userId;
		private $userIdType;
		private $orderId;
		private $pid;
		private $subUnionId;
		private $siteId;
		private $positionId;
		private $needClickUrl;
		private $imageWidth;
		private $imageHeight;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.activity.recommend.RecommendActivityReq";
		}

		public function getUserId()
		{
			return $this->userId;
		}

		public function setUserId($userId)
		{
			$this->params['userId'] = $userId;
		}

		public function getUserIdType()
		{
			return $this->userIdType;
		}

		public function setUserIdType($userIdType)
		{
			$this->params['userIdType'] = $userIdType;
		}

		public function getOrderId()
		{
			return $this->orderId;
		}

		public function setOrderId($orderId)
		{
			$this->params['orderId'] = $orderId;
		}

		public function getPid()
		{
			return $this->pid;
		}

		public function setPid($pid)
		{
			$this->params['pid'] = $pid;
		}

		public function getSubUnionId()
		{
			return $this->subUnionId;
		}

		public function setSubUnionId($subUnionId)
		{
			$this->params['subUnionId'] = $subUnionId;
		}

		public function getSiteId()
		{
			return $this->siteId;
		}

		public function setSiteId($siteId)
		{
			$this->params['siteId'] = $siteId;
		}

		public function getPositionId()
		{
			return $this->positionId;
		}

		public function setPositionId($positionId)
		{
			$this->params['positionId'] = $positionId;
		}

		public function getNeedClickUrl()
		{
			return $this->needClickUrl;
		}

		public function setNeedClickUrl($needClickUrl)
		{
			$this->params['needClickUrl'] = $needClickUrl;
		}

		public function getImageWidth()
		{
			return $this->imageWidth;
		}

		public function setImageWidth($imageWidth)
		{
			$this->params['imageWidth'] = $imageWidth;
		}

		public function getImageHeight()
		{
			return $this->imageHeight;
		}

		public function setImageHeight($imageHeight)
		{
			$this->params['imageHeight'] = $imageHeight;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>