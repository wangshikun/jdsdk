<?php

	namespace JD\domain\UnionOpenPromotionIntelligenceQuery;
	class Req
	{

		private $params = array();
		private $title;
		private $type;
		private $cid1List;
		private $status;
		private $essence;
		private $pageIndex;
		private $pageSize;
		private $pid;
		private $subUnionId;
		private $siteId;
		private $positionId;
		private $ext1;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.promotion.intelligence.IntelligencePromotionReq";
		}

		public function getTitle()
		{
			return $this->title;
		}

		public function setTitle($title)
		{
			$this->params['title'] = $title;
		}

		public function getType()
		{
			return $this->type;
		}

		public function setType($type)
		{
			$this->params['type'] = $type;
		}

		public function getCid1List()
		{
			return $this->cid1List;
		}

		public function setCid1List($cid1List)
		{
			$this->params['cid1List'] = $cid1List;
		}

		public function getStatus()
		{
			return $this->status;
		}

		public function setStatus($status)
		{
			$this->params['status'] = $status;
		}

		public function getEssence()
		{
			return $this->essence;
		}

		public function setEssence($essence)
		{
			$this->params['essence'] = $essence;
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

		function getInstance()
		{
			return $this->params;
		}

	}

	?>