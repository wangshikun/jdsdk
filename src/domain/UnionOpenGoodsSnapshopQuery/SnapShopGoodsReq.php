<?php

	namespace JD\domain\UnionOpenGoodsSnapshopQuery;
	class SnapShopGoodsReq
	{

		private $params = array();
		private $imageData;
		private $imageId;
		private $pageIndex;
		private $pageSize;
		private $sortName;
		private $sort;
		private $userIdType;
		private $userId;
		private $channelId;
		private $ip;
		private $provinceId;
		private $cityId;
		private $countryId;
		private $townId;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.goods.snapshop.SnapShopGoodsReq";
		}

		public function getImageData()
		{
			return $this->imageData;
		}

		public function setImageData($imageData)
		{
			$this->params['imageData'] = $imageData;
		}

		public function getImageId()
		{
			return $this->imageId;
		}

		public function setImageId($imageId)
		{
			$this->params['imageId'] = $imageId;
		}

		public function getPageIndex()
		{
			return $this->pageIndex;
		}

		public function setPageIndex($pageIndex)
		{
			$this->params['pageIndex'] = $pageIndex;
		}

		public function getPageSize()
		{
			return $this->pageSize;
		}

		public function setPageSize($pageSize)
		{
			$this->params['pageSize'] = $pageSize;
		}

		public function getSortName()
		{
			return $this->sortName;
		}

		public function setSortName($sortName)
		{
			$this->params['sortName'] = $sortName;
		}

		public function getSort()
		{
			return $this->sort;
		}

		public function setSort($sort)
		{
			$this->params['sort'] = $sort;
		}

		public function getUserIdType()
		{
			return $this->userIdType;
		}

		public function setUserIdType($userIdType)
		{
			$this->params['userIdType'] = $userIdType;
		}

		public function getUserId()
		{
			return $this->userId;
		}

		public function setUserId($userId)
		{
			$this->params['userId'] = $userId;
		}

		public function getChannelId()
		{
			return $this->channelId;
		}

		public function setChannelId($channelId)
		{
			$this->params['channelId'] = $channelId;
		}

		public function getIp()
		{
			return $this->ip;
		}

		public function setIp($ip)
		{
			$this->params['ip'] = $ip;
		}

		public function getProvinceId()
		{
			return $this->provinceId;
		}

		public function setProvinceId($provinceId)
		{
			$this->params['provinceId'] = $provinceId;
		}

		public function getCityId()
		{
			return $this->cityId;
		}

		public function setCityId($cityId)
		{
			$this->params['cityId'] = $cityId;
		}

		public function getCountryId()
		{
			return $this->countryId;
		}

		public function setCountryId($countryId)
		{
			$this->params['countryId'] = $countryId;
		}

		public function getTownId()
		{
			return $this->townId;
		}

		public function setTownId($townId)
		{
			$this->params['townId'] = $townId;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>