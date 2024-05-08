<?php

	namespace JD\domain\UnionOpenGoodsQuery;
	class GoodsReqDTO
	{

		private $params = array();
		private $cid1;
		private $cid2;
		private $cid3;
		private $pageIndex;
		private $pageSize;
		private $skuIds;
		private $keyword;
		private $pricefrom;
		private $priceto;
		private $commissionShareStart;
		private $commissionShareEnd;
		private $owner;
		private $sortName;
		private $sort;
		private $isCoupon;
		private $isPG;
		private $pingouPriceStart;
		private $pingouPriceEnd;
		private $isHot;
		private $brandCode;
		private $shopId;
		private $hasContent;
		private $hasBestCoupon;
		private $pid;
		private $fields;
		private $forbidTypes;
		private $jxFlags;
		private $shopLevelFrom;
		private $isbn;
		private $spuId;
		private $couponUrl;
		private $deliveryType;
		private $eliteType;
		private $isSeckill;
		private $isPresale;
		private $isReserve;
		private $bonusId;
		private $area;
		private $isOversea;
		private $userIdType;
		private $userId;
		private $channelId;
		private $ip;
		private $provinceId;
		private $cityId;
		private $countryId;
		private $townId;
		private $itemIds;
		private $sceneId;
		private $pin;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.goods.base.GoodsReq";
		}

		public function getCid1()
		{
			return $this->cid1;
		}

		public function setCid1($cid1)
		{
			$this->params['cid1'] = $cid1;
		}

		public function getCid2()
		{
			return $this->cid2;
		}

		public function setCid2($cid2)
		{
			$this->params['cid2'] = $cid2;
		}

		public function getCid3()
		{
			return $this->cid3;
		}

		public function setCid3($cid3)
		{
			$this->params['cid3'] = $cid3;
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

		public function getSkuIds()
		{
			return $this->skuIds;
		}

		public function setSkuIds($skuIds)
		{
			$this->params['skuIds'] = $skuIds;
		}

		public function getKeyword()
		{
			return $this->keyword;
		}

		public function setKeyword($keyword)
		{
			$this->params['keyword'] = $keyword;
		}

		public function getPricefrom()
		{
			return $this->pricefrom;
		}

		public function setPricefrom($pricefrom)
		{
			$this->params['pricefrom'] = $pricefrom;
		}

		public function getPriceto()
		{
			return $this->priceto;
		}

		public function setPriceto($priceto)
		{
			$this->params['priceto'] = $priceto;
		}

		public function getCommissionShareStart()
		{
			return $this->commissionShareStart;
		}

		public function setCommissionShareStart($commissionShareStart)
		{
			$this->params['commissionShareStart'] = $commissionShareStart;
		}

		public function getCommissionShareEnd()
		{
			return $this->commissionShareEnd;
		}

		public function setCommissionShareEnd($commissionShareEnd)
		{
			$this->params['commissionShareEnd'] = $commissionShareEnd;
		}

		public function getOwner()
		{
			return $this->owner;
		}

		public function setOwner($owner)
		{
			$this->params['owner'] = $owner;
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

		public function getIsCoupon()
		{
			return $this->isCoupon;
		}

		public function setIsCoupon($isCoupon)
		{
			$this->params['isCoupon'] = $isCoupon;
		}

		public function getIsPG()
		{
			return $this->isPG;
		}

		public function setIsPG($isPG)
		{
			$this->params['isPG'] = $isPG;
		}

		public function getPingouPriceStart()
		{
			return $this->pingouPriceStart;
		}

		public function setPingouPriceStart($pingouPriceStart)
		{
			$this->params['pingouPriceStart'] = $pingouPriceStart;
		}

		public function getPingouPriceEnd()
		{
			return $this->pingouPriceEnd;
		}

		public function setPingouPriceEnd($pingouPriceEnd)
		{
			$this->params['pingouPriceEnd'] = $pingouPriceEnd;
		}

		public function getIsHot()
		{
			return $this->isHot;
		}

		public function setIsHot($isHot)
		{
			$this->params['isHot'] = $isHot;
		}

		public function getBrandCode()
		{
			return $this->brandCode;
		}

		public function setBrandCode($brandCode)
		{
			$this->params['brandCode'] = $brandCode;
		}

		public function getShopId()
		{
			return $this->shopId;
		}

		public function setShopId($shopId)
		{
			$this->params['shopId'] = $shopId;
		}

		public function getHasContent()
		{
			return $this->hasContent;
		}

		public function setHasContent($hasContent)
		{
			$this->params['hasContent'] = $hasContent;
		}

		public function getHasBestCoupon()
		{
			return $this->hasBestCoupon;
		}

		public function setHasBestCoupon($hasBestCoupon)
		{
			$this->params['hasBestCoupon'] = $hasBestCoupon;
		}

		public function getPid()
		{
			return $this->pid;
		}

		public function setPid($pid)
		{
			$this->params['pid'] = $pid;
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

		public function getJxFlags()
		{
			return $this->jxFlags;
		}

		public function setJxFlags($jxFlags)
		{
			$this->params['jxFlags'] = $jxFlags;
		}

		public function getShopLevelFrom()
		{
			return $this->shopLevelFrom;
		}

		public function setShopLevelFrom($shopLevelFrom)
		{
			$this->params['shopLevelFrom'] = $shopLevelFrom;
		}

		public function getIsbn()
		{
			return $this->isbn;
		}

		public function setIsbn($isbn)
		{
			$this->params['isbn'] = $isbn;
		}

		public function getSpuId()
		{
			return $this->spuId;
		}

		public function setSpuId($spuId)
		{
			$this->params['spuId'] = $spuId;
		}

		public function getCouponUrl()
		{
			return $this->couponUrl;
		}

		public function setCouponUrl($couponUrl)
		{
			$this->params['couponUrl'] = $couponUrl;
		}

		public function getDeliveryType()
		{
			return $this->deliveryType;
		}

		public function setDeliveryType($deliveryType)
		{
			$this->params['deliveryType'] = $deliveryType;
		}

		public function getEliteType()
		{
			return $this->eliteType;
		}

		public function setEliteType($eliteType)
		{
			$this->params['eliteType'] = $eliteType;
		}

		public function getIsSeckill()
		{
			return $this->isSeckill;
		}

		public function setIsSeckill($isSeckill)
		{
			$this->params['isSeckill'] = $isSeckill;
		}

		public function getIsPresale()
		{
			return $this->isPresale;
		}

		public function setIsPresale($isPresale)
		{
			$this->params['isPresale'] = $isPresale;
		}

		public function getIsReserve()
		{
			return $this->isReserve;
		}

		public function setIsReserve($isReserve)
		{
			$this->params['isReserve'] = $isReserve;
		}

		public function getBonusId()
		{
			return $this->bonusId;
		}

		public function setBonusId($bonusId)
		{
			$this->params['bonusId'] = $bonusId;
		}

		public function getArea()
		{
			return $this->area;
		}

		public function setArea($area)
		{
			$this->params['area'] = $area;
		}

		public function getIsOversea()
		{
			return $this->isOversea;
		}

		public function setIsOversea($isOversea)
		{
			$this->params['isOversea'] = $isOversea;
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

		public function getItemIds()
		{
			return $this->itemIds;
		}

		public function setItemIds($itemIds)
		{
			$this->params['itemIds'] = $itemIds;
		}

		public function getSceneId()
		{
			return $this->sceneId;
		}

		public function setSceneId($sceneId)
		{
			$this->params['sceneId'] = $sceneId;
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