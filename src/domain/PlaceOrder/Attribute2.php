<?php

	namespace JD\domain\PlaceOrder;
	class Attribute2
	{

		private $params = array();
		private $goodsNoParam;
		private $skuTotalAmount;
		private $seqNo;
		private $qty;
		private $isbn;
		private $priceType;
		private $salePrimePrice;
		private $serialFlag;
		private $saleDiscount;
		private $saleActualPrice;
		private $type;
		private $goodsNameParam;

		function __construct()
		{
			$this->params["@type"] = "com.jd.jdsmart.open.order.condition.CartGoodsInfo";
		}

		public function getGoodsNoParam()
		{
			return $this->goodsNoParam;
		}

		public function setGoodsNoParam($goodsNoParam)
		{
			$this->params['goodsNoParam'] = $goodsNoParam;
		}

		public function getSkuTotalAmount()
		{
			return $this->skuTotalAmount;
		}

		public function setSkuTotalAmount($skuTotalAmount)
		{
			$this->params['skuTotalAmount'] = $skuTotalAmount;
		}

		public function getSeqNo()
		{
			return $this->seqNo;
		}

		public function setSeqNo($seqNo)
		{
			$this->params['seqNo'] = $seqNo;
		}

		public function getQty()
		{
			return $this->qty;
		}

		public function setQty($qty)
		{
			$this->params['qty'] = $qty;
		}

		public function getIsbn()
		{
			return $this->isbn;
		}

		public function setIsbn($isbn)
		{
			$this->params['isbn'] = $isbn;
		}

		public function getPriceType()
		{
			return $this->priceType;
		}

		public function setPriceType($priceType)
		{
			$this->params['priceType'] = $priceType;
		}

		public function getSalePrimePrice()
		{
			return $this->salePrimePrice;
		}

		public function setSalePrimePrice($salePrimePrice)
		{
			$this->params['salePrimePrice'] = $salePrimePrice;
		}

		public function getSerialFlag()
		{
			return $this->serialFlag;
		}

		public function setSerialFlag($serialFlag)
		{
			$this->params['serialFlag'] = $serialFlag;
		}

		public function getSaleDiscount()
		{
			return $this->saleDiscount;
		}

		public function setSaleDiscount($saleDiscount)
		{
			$this->params['saleDiscount'] = $saleDiscount;
		}

		public function getSaleActualPrice()
		{
			return $this->saleActualPrice;
		}

		public function setSaleActualPrice($saleActualPrice)
		{
			$this->params['saleActualPrice'] = $saleActualPrice;
		}

		public function getType()
		{
			return $this->type;
		}

		public function setType($type)
		{
			$this->params['type'] = $type;
		}

		public function getGoodsNameParam()
		{
			return $this->goodsNameParam;
		}

		public function setGoodsNameParam($goodsNameParam)
		{
			$this->params['goodsNameParam'] = $goodsNameParam;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>