<?php

	namespace JD\domain\UnionOpenPromotionCommonGet;
	class PromotionCodeReq
	{

		private $params = array();
		private $materialId;
		private $siteId;
		private $positionId;
		private $subUnionId;
		private $ext1;
		private $protocol;
		private $pid;
		private $couponUrl;
		private $giftCouponKey;
		private $channelId;
		private $rid;
		private $command;
		private $sceneId;
		private $proType;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.promotion.base.PromotionCodeReq";
		}

		public function getMaterialId()
		{
			return $this->materialId;
		}

		public function setMaterialId($materialId)
		{
			$this->params['materialId'] = $materialId;
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

		public function getSubUnionId()
		{
			return $this->subUnionId;
		}

		public function setSubUnionId($subUnionId)
		{
			$this->params['subUnionId'] = $subUnionId;
		}

		public function getExt1()
		{
			return $this->ext1;
		}

		public function setExt1($ext1)
		{
			$this->params['ext1'] = $ext1;
		}

		public function getProtocol()
		{
			return $this->protocol;
		}

		public function setProtocol($protocol)
		{
			$this->params['protocol'] = $protocol;
		}

		public function getPid()
		{
			return $this->pid;
		}

		public function setPid($pid)
		{
			$this->params['pid'] = $pid;
		}

		public function getCouponUrl()
		{
			return $this->couponUrl;
		}

		public function setCouponUrl($couponUrl)
		{
			$this->params['couponUrl'] = $couponUrl;
		}

		public function getGiftCouponKey()
		{
			return $this->giftCouponKey;
		}

		public function setGiftCouponKey($giftCouponKey)
		{
			$this->params['giftCouponKey'] = $giftCouponKey;
		}

		public function getChannelId()
		{
			return $this->channelId;
		}

		public function setChannelId($channelId)
		{
			$this->params['channelId'] = $channelId;
		}

		public function getRid()
		{
			return $this->rid;
		}

		public function setRid($rid)
		{
			$this->params['rid'] = $rid;
		}

		public function getCommand()
		{
			return $this->command;
		}

		public function setCommand($command)
		{
			$this->params['command'] = $command;
		}

		public function getSceneId()
		{
			return $this->sceneId;
		}

		public function setSceneId($sceneId)
		{
			$this->params['sceneId'] = $sceneId;
		}

		public function getProType()
		{
			return $this->proType;
		}

		public function setProType($proType)
		{
			$this->params['proType'] = $proType;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>