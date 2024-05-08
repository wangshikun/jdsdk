<?php

	namespace JD\domain\PlaceOrder;
	class Attribute1
	{

		private $params = array();
		private $goodsNo;
		private $lotAttrMap;
		private $goodsName;
		private $seq;

		function __construct()
		{
			$this->params["@type"] = "com.jd.jdsmart.open.order.condition.GoodsSeq";
		}

		public function getGoodsNo()
		{
			return $this->goodsNo;
		}

		public function setGoodsNo($goodsNo)
		{
			$this->params['goodsNo'] = $goodsNo;
		}

		public function setLotAttrMap($lotAttrMap)
		{
			$this->params['lotAttrMap'] = $lotAttrMap;
		}

		public function getGoodsName()
		{
			return $this->goodsName;
		}

		public function setGoodsName($goodsName)
		{
			$this->params['goodsName'] = $goodsName;
		}

		public function getSeq()
		{
			return $this->seq;
		}

		public function setSeq($seq)
		{
			$this->params['seq'] = $seq;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>