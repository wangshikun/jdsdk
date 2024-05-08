<?php

	namespace JD\domain\UnionOpenGoodsCombinationQuery;
	class GoodsReq
	{

		private $params = array();
		private $batchId;
		private $needClickUrl;
		private $positionId;
		private $pid;
		private $subUnionId;
		private $channelId;
		private $ext;
		private $pageIndex;
		private $pageSize;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.goods.combination.CombinationGoodsReq";
		}

		public function getBatchId()
		{
			return $this->batchId;
		}

		public function setBatchId($batchId)
		{
			$this->params['batchId'] = $batchId;
		}

		public function getNeedClickUrl()
		{
			return $this->needClickUrl;
		}

		public function setNeedClickUrl($needClickUrl)
		{
			$this->params['needClickUrl'] = $needClickUrl;
		}

		public function getPositionId()
		{
			return $this->positionId;
		}

		public function setPositionId($positionId)
		{
			$this->params['positionId'] = $positionId;
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

		public function getChannelId()
		{
			return $this->channelId;
		}

		public function setChannelId($channelId)
		{
			$this->params['channelId'] = $channelId;
		}

		public function getExt()
		{
			return $this->ext;
		}

		public function setExt($ext)
		{
			$this->params['ext'] = $ext;
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

		function getInstance()
		{
			return $this->params;
		}

	}

	?>