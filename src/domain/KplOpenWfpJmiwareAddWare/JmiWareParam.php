<?php

	namespace JD\domain\KplOpenWfpJmiwareAddWare;
	class JmiWareParam
	{

		private $params = array();
		private $opName;
		private $opIp;
		private $sourceId;
		private $uuid;
		private $port;
		private $jWareId;
		private $catId;
		private $venderId;
		private $shopId;
		private $title;
		private $subTitle;
		private $marketPrice;
		private $price;
		private $outerId;
		private $quantity;
		private $logo;
		private $operateType;
		private $note;
		private $wareImages;
		private $features;
		private $url;
		private $urlWord;
		private $onlineTime;
		private $offlineTime;
		private $appNote;
		private $shopCategory;
		private $wareSettingList;
		private $categorySettingList;
		private $skus;

		function __construct()
		{
			$this->params["@type"] = "com.jd.kpl.JmiWareParam";
		}

		public function getOpName()
		{
			return $this->opName;
		}

		public function setOpName($opName)
		{
			$this->params['opName'] = $opName;
		}

		public function getOpIp()
		{
			return $this->opIp;
		}

		public function setOpIp($opIp)
		{
			$this->params['opIp'] = $opIp;
		}

		public function getSourceId()
		{
			return $this->sourceId;
		}

		public function setSourceId($sourceId)
		{
			$this->params['sourceId'] = $sourceId;
		}

		public function getUuid()
		{
			return $this->uuid;
		}

		public function setUuid($uuid)
		{
			$this->params['uuid'] = $uuid;
		}

		public function getPort()
		{
			return $this->port;
		}

		public function setPort($port)
		{
			$this->params['port'] = $port;
		}

		public function getJWareId()
		{
			return $this->jWareId;
		}

		public function setJWareId($jWareId)
		{
			$this->params['jWareId'] = $jWareId;
		}

		public function getCatId()
		{
			return $this->catId;
		}

		public function setCatId($catId)
		{
			$this->params['catId'] = $catId;
		}

		public function getVenderId()
		{
			return $this->venderId;
		}

		public function setVenderId($venderId)
		{
			$this->params['venderId'] = $venderId;
		}

		public function getShopId()
		{
			return $this->shopId;
		}

		public function setShopId($shopId)
		{
			$this->params['shopId'] = $shopId;
		}

		public function getTitle()
		{
			return $this->title;
		}

		public function setTitle($title)
		{
			$this->params['title'] = $title;
		}

		public function getSubTitle()
		{
			return $this->subTitle;
		}

		public function setSubTitle($subTitle)
		{
			$this->params['subTitle'] = $subTitle;
		}

		public function getMarketPrice()
		{
			return $this->marketPrice;
		}

		public function setMarketPrice($marketPrice)
		{
			$this->params['marketPrice'] = $marketPrice;
		}

		public function getPrice()
		{
			return $this->price;
		}

		public function setPrice($price)
		{
			$this->params['price'] = $price;
		}

		public function getOuterId()
		{
			return $this->outerId;
		}

		public function setOuterId($outerId)
		{
			$this->params['outerId'] = $outerId;
		}

		public function getQuantity()
		{
			return $this->quantity;
		}

		public function setQuantity($quantity)
		{
			$this->params['quantity'] = $quantity;
		}

		public function getLogo()
		{
			return $this->logo;
		}

		public function setLogo($logo)
		{
			$this->params['logo'] = $logo;
		}

		public function getOperateType()
		{
			return $this->operateType;
		}

		public function setOperateType($operateType)
		{
			$this->params['operateType'] = $operateType;
		}

		public function getNote()
		{
			return $this->note;
		}

		public function setNote($note)
		{
			$this->params['note'] = $note;
		}

		public function setWareImages($wareImages)
		{
			$size = count($wareImages);
			for ($i = 0; $i < $size; $i++) {
				$wareImages [$i] = $wareImages [$i]->getInstance();
			}
			$this->params['wareImages'] = $wareImages;
		}

		function getInstance()
		{
			return $this->params;
		}

		public function setFeatures($features)
		{
			$this->params['features'] = $features->getInstance();
		}

		public function getUrl()
		{
			return $this->url;
		}

		public function setUrl($url)
		{
			$this->params['url'] = $url;
		}

		public function getUrlWord()
		{
			return $this->urlWord;
		}

		public function setUrlWord($urlWord)
		{
			$this->params['urlWord'] = $urlWord;
		}

		public function getOnlineTime()
		{
			return $this->onlineTime;
		}

		public function setOnlineTime($onlineTime)
		{
			$this->params['onlineTime'] = $onlineTime;
		}

		public function getOfflineTime()
		{
			return $this->offlineTime;
		}

		public function setOfflineTime($offlineTime)
		{
			$this->params['offlineTime'] = $offlineTime;
		}

		public function getAppNote()
		{
			return $this->appNote;
		}

		public function setAppNote($appNote)
		{
			$this->params['appNote'] = $appNote;
		}

		public function getShopCategory()
		{
			return $this->shopCategory;
		}

		public function setShopCategory($shopCategory)
		{
			$this->params['shopCategory'] = $shopCategory;
		}

		public function setWareSettingList($wareSettingList)
		{
			$size = count($wareSettingList);
			for ($i = 0; $i < $size; $i++) {
				$wareSettingList [$i] = $wareSettingList [$i]->getInstance();
			}
			$this->params['wareSettingList'] = $wareSettingList;
		}

		public function setCategorySettingList($categorySettingList)
		{
			$size = count($categorySettingList);
			for ($i = 0; $i < $size; $i++) {
				$categorySettingList [$i] = $categorySettingList [$i]->getInstance();
			}
			$this->params['categorySettingList'] = $categorySettingList;
		}

		public function setSkus($skus)
		{
			$size = count($skus);
			for ($i = 0; $i < $size; $i++) {
				$skus [$i] = $skus [$i]->getInstance();
			}
			$this->params['skus'] = $skus;
		}

	}

	?>