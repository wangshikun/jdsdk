<?php

	namespace JD\domain\StockStateAreaStockStateExport;
	class AreaStockStateSpuGlobalParam
	{

		private $params = array();
		private $skuNumList;
		private $channelId;
		private $areaParam;
		private $coordnateParam;
		private $AreaStockStateSpuGlobalParamextMap;

		function __construct()
		{
			$this->params["@type"] = "com.jd.stock.state.export.vo.param.AreaStockStateGlobalParam";
		}

		public function setSkuNumList($skuNumList)
		{
			$size = count($skuNumList);
			for ($i = 0; $i < $size; $i++) {
				$skuNumList [$i] = $skuNumList [$i]->getInstance();
			}
			$this->params['skuNumList'] = $skuNumList;
		}

		function getInstance()
		{
			return $this->params;
		}

		public function getChannelId()
		{
			return $this->channelId;
		}

		public function setChannelId($channelId)
		{
			$this->params['channelId'] = $channelId;
		}

		public function setAreaParam($areaParam)
		{
			$this->params['areaParam'] = $areaParam->getInstance();
		}

		public function setCoordnateParam($coordnateParam)
		{
			$this->params['coordnateParam'] = $coordnateParam->getInstance();
		}

		public function setAreaStockStateSpuGlobalParamextMap($AreaStockStateSpuGlobalParamextMap)
		{
			$this->params['AreaStockStateSpuGlobalParamextMap'] = $AreaStockStateSpuGlobalParamextMap->getInstance();
		}

	}

	?>