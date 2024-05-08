<?php

	namespace JD\domain\UnionOpenExchangeMediaEffectDataSync;
	class EffectDataReq
	{

		private $params = array();
		private $mediaEffectDataList;
		private $uuid;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.exchange.SyncEffectDataReq";
		}

		public function setMediaEffectDataList($mediaEffectDataList)
		{
			$size = count($mediaEffectDataList);
			for ($i = 0; $i < $size; $i++) {
				$mediaEffectDataList [$i] = $mediaEffectDataList [$i]->getInstance();
			}
			$this->params['mediaEffectDataList'] = $mediaEffectDataList;
		}

		function getInstance()
		{
			return $this->params;
		}

		public function getUuid()
		{
			return $this->uuid;
		}

		public function setUuid($uuid)
		{
			$this->params['uuid'] = $uuid;
		}

	}

	?>