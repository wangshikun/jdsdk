<?php

	namespace JD\domain\UnionOpenPositionCreate;
	class PositionReq
	{

		private $params = array();
		private $unionId;
		private $key;
		private $unionType;
		private $type;
		private $spaceNameList;
		private $siteId;
		private $pin;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.position.base.PositionReq";
		}

		public function getUnionId()
		{
			return $this->unionId;
		}

		public function setUnionId($unionId)
		{
			$this->params['unionId'] = $unionId;
		}

		public function getKey()
		{
			return $this->key;
		}

		public function setKey($key)
		{
			$this->params['key'] = $key;
		}

		public function getUnionType()
		{
			return $this->unionType;
		}

		public function setUnionType($unionType)
		{
			$this->params['unionType'] = $unionType;
		}

		public function getType()
		{
			return $this->type;
		}

		public function setType($type)
		{
			$this->params['type'] = $type;
		}

		public function getSpaceNameList()
		{
			return $this->spaceNameList;
		}

		public function setSpaceNameList($spaceNameList)
		{
			$this->params['spaceNameList'] = $spaceNameList;
		}

		public function getSiteId()
		{
			return $this->siteId;
		}

		public function setSiteId($siteId)
		{
			$this->params['siteId'] = $siteId;
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