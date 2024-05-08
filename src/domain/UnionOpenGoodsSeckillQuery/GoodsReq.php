<?php

	namespace JD\domain\UnionOpenGoodsSeckillQuery;
	class GoodsReq
	{

		private $params = array();
		private $skuIds;
		private $pageIndex;
		private $pageSize;
		private $isBeginSecKill;
		private $secKillPriceFrom;
		private $secKillPriceTo;
		private $cid1;
		private $cid2;
		private $cid3;
		private $owner;
		private $commissionShareFrom;
		private $commissionShareTo;
		private $sortName;
		private $sort;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.goods.seckill.SecKillGoodsReq";
		}

		public function getSkuIds()
		{
			return $this->skuIds;
		}

		public function setSkuIds($skuIds)
		{
			$this->params['skuIds'] = $skuIds;
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

		public function getIsBeginSecKill()
		{
			return $this->isBeginSecKill;
		}

		public function setIsBeginSecKill($isBeginSecKill)
		{
			$this->params['isBeginSecKill'] = $isBeginSecKill;
		}

		public function getSecKillPriceFrom()
		{
			return $this->secKillPriceFrom;
		}

		public function setSecKillPriceFrom($secKillPriceFrom)
		{
			$this->params['secKillPriceFrom'] = $secKillPriceFrom;
		}

		public function getSecKillPriceTo()
		{
			return $this->secKillPriceTo;
		}

		public function setSecKillPriceTo($secKillPriceTo)
		{
			$this->params['secKillPriceTo'] = $secKillPriceTo;
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

		public function getOwner()
		{
			return $this->owner;
		}

		public function setOwner($owner)
		{
			$this->params['owner'] = $owner;
		}

		public function getCommissionShareFrom()
		{
			return $this->commissionShareFrom;
		}

		public function setCommissionShareFrom($commissionShareFrom)
		{
			$this->params['commissionShareFrom'] = $commissionShareFrom;
		}

		public function getCommissionShareTo()
		{
			return $this->commissionShareTo;
		}

		public function setCommissionShareTo($commissionShareTo)
		{
			$this->params['commissionShareTo'] = $commissionShareTo;
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

		function getInstance()
		{
			return $this->params;
		}

	}

	?>