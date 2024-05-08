<?php

	namespace JD\domain\UnionOpenGoodsBigfieldQuery;
	class GoodsReq
	{

		private $params = array();
		private $skuIds;
		private $fields;
		private $itemIds;
		private $sceneId;
		private $pin;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.goods.bigfield.BigFieldGoodsReq";
		}

		public function getSkuIds()
		{
			return $this->skuIds;
		}

		public function setSkuIds($skuIds)
		{
			$this->params['skuIds'] = $skuIds;
		}

		public function getFields()
		{
			return $this->fields;
		}

		public function setFields($fields)
		{
			$this->params['fields'] = $fields;
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