<?php

	namespace JD\domain\UnionOpenGoodsMaterialQuery;
	class GoodsReq
	{

		private $params = array();
		private $eliteId;
		private $pageIndex;
		private $pageSize;
		private $sortName;
		private $sort;
		private $pid;
		private $subUnionId;
		private $siteId;
		private $positionId;
		private $ext1;
		private $skuId;
		private $hasCoupon;
		private $userIdType;
		private $userId;
		private $fields;
		private $forbidTypes;
		private $orderId;
		private $groupId;
		private $ownerUnionId;
		private $benefitType;
		private $channelId;
		private $ip;
		private $provinceId;
		private $cityId;
		private $countryId;
		private $townId;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.goods.material.MaterialGoodsReq";
		}

		public function getEliteId()
		{
			return $this->eliteId;
		}

		public function setEliteId($eliteId)
		{
			$this->params['eliteId'] = $eliteId;
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

		public function getExt1()
		{
			return $this->ext1;
		}

		public function setExt1($ext1)
		{
			$this->params['ext1'] = $ext1;
		}

		public function getSkuId()
		{
			return $this->skuId;
		}

		public function setSkuId($skuId)
		{
			$this->params['skuId'] = $skuId;
		}

		public function getHasCoupon()
		{
			return $this->hasCoupon;
		}

		public function setHasCoupon($hasCoupon)
		{
			$this->params['hasCoupon'] = $hasCoupon;
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

		public function getFields()
		{
			return $this->fields;
		}

		public function setFields($fields)
		{
			$this->params['fields'] = $fields;
		}

		public function getForbidTypes()
		{
			return $this->forbidTypes;
		}

		public function setForbidTypes($forbidTypes)
		{
			$this->params['forbidTypes'] = $forbidTypes;
		}

		public function getOrderId()
		{
			return $this->orderId;
		}

		public function setOrderId($orderId)
		{
			$this->params['orderId'] = $orderId;
		}

		public function getGroupId()
		{
			return $this->groupId;
		}

		public function setGroupId($groupId)
		{
			$this->params['groupId'] = $groupId;
		}

		public function getOwnerUnionId()
		{
			return $this->ownerUnionId;
		}

		public function setOwnerUnionId($ownerUnionId)
		{
			$this->params['ownerUnionId'] = $ownerUnionId;
		}

		public function getBenefitType()
		{
			return $this->benefitType;
		}

		public function setBenefitType($benefitType)
		{
			$this->params['benefitType'] = $benefitType;
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