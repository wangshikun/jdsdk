<?php

	namespace JD\domain\PlaceOrder;
	class OrderParam
	{

		private $params = array();
		private $orderType;
		private $customRemark;
		private $saleId;
		private $jdOrderNo;
		private $totalPrice;
		private $sellerNo;
		private $discountAmount;
		private $saleName;
		private $goodsSeqsList;
		private $jdStatus;
		private $projectNo;
		private $siteNo;
		private $pinParam;
		private $totalPriceValue;
		private $offLineOrder;
		private $orderSource;
		private $customTel;
		private $actualAmount;
		private $customName;
		private $cashPayWay;
		private $cartGoodsInfoList;
		private $totalDiscount;
		private $payStatus;
		private $open_id_seller;
		private $xid_seller;

		function __construct()
		{
			$this->params["@type"] = "com.jd.jdsmart.open.order.condition.OrderParam";
		}

		public function getOrderType()
		{
			return $this->orderType;
		}

		public function setOrderType($orderType)
		{
			$this->params['orderType'] = $orderType;
		}

		public function getCustomRemark()
		{
			return $this->customRemark;
		}

		public function setCustomRemark($customRemark)
		{
			$this->params['customRemark'] = $customRemark;
		}

		public function getSaleId()
		{
			return $this->saleId;
		}

		public function setSaleId($saleId)
		{
			$this->params['saleId'] = $saleId;
		}

		public function getJdOrderNo()
		{
			return $this->jdOrderNo;
		}

		public function setJdOrderNo($jdOrderNo)
		{
			$this->params['jdOrderNo'] = $jdOrderNo;
		}

		public function getTotalPrice()
		{
			return $this->totalPrice;
		}

		public function setTotalPrice($totalPrice)
		{
			$this->params['totalPrice'] = $totalPrice;
		}

		public function getSellerNo()
		{
			return $this->sellerNo;
		}

		public function setSellerNo($sellerNo)
		{
			$this->params['sellerNo'] = $sellerNo;
		}

		public function getDiscountAmount()
		{
			return $this->discountAmount;
		}

		public function setDiscountAmount($discountAmount)
		{
			$this->params['discountAmount'] = $discountAmount;
		}

		public function getSaleName()
		{
			return $this->saleName;
		}

		public function setSaleName($saleName)
		{
			$this->params['saleName'] = $saleName;
		}

		public function setGoodsSeqsList($goodsSeqsList)
		{
			$size = count($goodsSeqsList);
			for ($i = 0; $i < $size; $i++) {
				$goodsSeqsList [$i] = $goodsSeqsList [$i]->getInstance();
			}
			$this->params['goodsSeqsList'] = $goodsSeqsList;
		}

		function getInstance()
		{
			return $this->params;
		}

		public function getJdStatus()
		{
			return $this->jdStatus;
		}

		public function setJdStatus($jdStatus)
		{
			$this->params['jdStatus'] = $jdStatus;
		}

		public function getProjectNo()
		{
			return $this->projectNo;
		}

		public function setProjectNo($projectNo)
		{
			$this->params['projectNo'] = $projectNo;
		}

		public function getSiteNo()
		{
			return $this->siteNo;
		}

		public function setSiteNo($siteNo)
		{
			$this->params['siteNo'] = $siteNo;
		}

		public function getPinParam()
		{
			return $this->pinParam;
		}

		public function setPinParam($pinParam)
		{
			$this->params['pinParam'] = $pinParam;
		}

		public function getTotalPriceValue()
		{
			return $this->totalPriceValue;
		}

		public function setTotalPriceValue($totalPriceValue)
		{
			$this->params['totalPriceValue'] = $totalPriceValue;
		}

		public function getOffLineOrder()
		{
			return $this->offLineOrder;
		}

		public function setOffLineOrder($offLineOrder)
		{
			$this->params['offLineOrder'] = $offLineOrder;
		}

		public function getOrderSource()
		{
			return $this->orderSource;
		}

		public function setOrderSource($orderSource)
		{
			$this->params['orderSource'] = $orderSource;
		}

		public function getCustomTel()
		{
			return $this->customTel;
		}

		public function setCustomTel($customTel)
		{
			$this->params['customTel'] = $customTel;
		}

		public function getActualAmount()
		{
			return $this->actualAmount;
		}

		public function setActualAmount($actualAmount)
		{
			$this->params['actualAmount'] = $actualAmount;
		}

		public function getCustomName()
		{
			return $this->customName;
		}

		public function setCustomName($customName)
		{
			$this->params['customName'] = $customName;
		}

		public function getCashPayWay()
		{
			return $this->cashPayWay;
		}

		public function setCashPayWay($cashPayWay)
		{
			$this->params['cashPayWay'] = $cashPayWay;
		}

		public function setCartGoodsInfoList($cartGoodsInfoList)
		{
			$size = count($cartGoodsInfoList);
			for ($i = 0; $i < $size; $i++) {
				$cartGoodsInfoList [$i] = $cartGoodsInfoList [$i]->getInstance();
			}
			$this->params['cartGoodsInfoList'] = $cartGoodsInfoList;
		}

		public function getTotalDiscount()
		{
			return $this->totalDiscount;
		}

		public function setTotalDiscount($totalDiscount)
		{
			$this->params['totalDiscount'] = $totalDiscount;
		}

		public function getPayStatus()
		{
			return $this->payStatus;
		}

		public function setPayStatus($payStatus)
		{
			$this->params['payStatus'] = $payStatus;
		}

		public function getOpen_id_seller()
		{
			return $this->open_id_seller;
		}

		public function setOpen_id_seller($open_id_seller)
		{
			$this->params['open_id_seller'] = $open_id_seller;
		}

		public function getXid_seller()
		{
			return $this->xid_seller;
		}

		public function setXid_seller($xid_seller)
		{
			$this->params['xid_seller'] = $xid_seller;
		}

	}

	?>