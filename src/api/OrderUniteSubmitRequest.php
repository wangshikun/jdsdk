<?php

	namespace JD\api;
	class OrderUniteSubmitRequest
	{

		private $apiParas = array();
		private $version;
		private $thirdOrder;
		private $sku;
		private $name;
		private $province;
		private $city;
		private $county;
		private $town;
		private $address;
		private $zip;
		private $phone;
		private $mobile;
		private $email;
		private $remark;
		private $invoiceState;
		private $invoiceType;
		private $selectedInvoiceTitle;
		private $companyName;
		private $invoiceContent;
		private $paymentType;
		private $isUseBalance;
		private $submitState;
		private $invoiceName;
		private $invoicePhone;
		private $invoiceProvice;
		private $invoiceCity;
		private $invoiceCounty;
		private $invoiceAddress;
		private $doOrderPriceMode;
		private $orderPriceSnap;
		private $extContent;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "biz.order.unite.submit";
		}

		public function getApiParas()
		{
			if (empty($this->apiParas)) {
				return "{}";
			}
			return json_encode($this->apiParas);
		}

		public function check()
		{

		}

		public function putOtherTextParam($key, $value)
		{
			$this->apiParas[$key] = $value;
			$this->$key = $value;
		}

		public function getVersion()
		{
			return $this->version;
		}

		public function setVersion($version)
		{
			$this->version = $version;
		}

		public function getThirdOrder()
		{
			return $this->apiParas['thirdOrder'];
		}

		public function setThirdOrder($thirdOrder)
		{
			$this->apiParas['thirdOrder'] = $thirdOrder;
		}

		public function getSku()
		{
			return $this->apiParas['sku'];
		}

		public function setSku($sku)
		{
			$this->apiParas['sku'] = $sku;
		}

		public function getName()
		{
			return $this->apiParas['name'];
		}

		public function setName($name)
		{
			$this->apiParas['name'] = $name;
		}

		public function getProvince()
		{
			return $this->apiParas['province'];
		}

		public function setProvince($province)
		{
			$this->apiParas['province'] = $province;
		}

		public function getCity()
		{
			return $this->apiParas['city'];
		}

		public function setCity($city)
		{
			$this->apiParas['city'] = $city;
		}

		public function getCounty()
		{
			return $this->apiParas['county'];
		}

		public function setCounty($county)
		{
			$this->apiParas['county'] = $county;
		}

		public function getTown()
		{
			return $this->apiParas['town'];
		}

		public function setTown($town)
		{
			$this->apiParas['town'] = $town;
		}

		public function getAddress()
		{
			return $this->apiParas['address'];
		}

		public function setAddress($address)
		{
			$this->apiParas['address'] = $address;
		}

		public function getZip()
		{
			return $this->apiParas['zip'];
		}

		public function setZip($zip)
		{
			$this->apiParas['zip'] = $zip;
		}

		public function getPhone()
		{
			return $this->apiParas['phone'];
		}

		public function setPhone($phone)
		{
			$this->apiParas['phone'] = $phone;
		}

		public function getMobile()
		{
			return $this->apiParas['mobile'];
		}

		public function setMobile($mobile)
		{
			$this->apiParas['mobile'] = $mobile;
		}

		public function getEmail()
		{
			return $this->apiParas['email'];
		}

		public function setEmail($email)
		{
			$this->apiParas['email'] = $email;
		}

		public function getRemark()
		{
			return $this->apiParas['remark'];
		}

		public function setRemark($remark)
		{
			$this->apiParas['remark'] = $remark;
		}

		public function getInvoiceState()
		{
			return $this->apiParas['invoiceState'];
		}

		public function setInvoiceState($invoiceState)
		{
			$this->apiParas['invoiceState'] = $invoiceState;
		}

		public function getInvoiceType()
		{
			return $this->apiParas['invoiceType'];
		}

		public function setInvoiceType($invoiceType)
		{
			$this->apiParas['invoiceType'] = $invoiceType;
		}

		public function getSelectedInvoiceTitle()
		{
			return $this->apiParas['selectedInvoiceTitle'];
		}

		public function setSelectedInvoiceTitle($selectedInvoiceTitle)
		{
			$this->apiParas['selectedInvoiceTitle'] = $selectedInvoiceTitle;
		}

		public function getCompanyName()
		{
			return $this->apiParas['companyName'];
		}

		public function setCompanyName($companyName)
		{
			$this->apiParas['companyName'] = $companyName;
		}

		public function getInvoiceContent()
		{
			return $this->apiParas['invoiceContent'];
		}

		public function setInvoiceContent($invoiceContent)
		{
			$this->apiParas['invoiceContent'] = $invoiceContent;
		}

		public function getPaymentType()
		{
			return $this->apiParas['paymentType'];
		}

		public function setPaymentType($paymentType)
		{
			$this->apiParas['paymentType'] = $paymentType;
		}

		public function getIsUseBalance()
		{
			return $this->apiParas['isUseBalance'];
		}

		public function setIsUseBalance($isUseBalance)
		{
			$this->apiParas['isUseBalance'] = $isUseBalance;
		}

		public function getSubmitState()
		{
			return $this->apiParas['submitState'];
		}

		public function setSubmitState($submitState)
		{
			$this->apiParas['submitState'] = $submitState;
		}

		public function getInvoiceName()
		{
			return $this->apiParas['invoiceName'];
		}

		public function setInvoiceName($invoiceName)
		{
			$this->apiParas['invoiceName'] = $invoiceName;
		}

		public function getInvoicePhone()
		{
			return $this->apiParas['invoicePhone'];
		}

		public function setInvoicePhone($invoicePhone)
		{
			$this->apiParas['invoicePhone'] = $invoicePhone;
		}

		public function getInvoiceProvice()
		{
			return $this->apiParas['invoiceProvice'];
		}

		public function setInvoiceProvice($invoiceProvice)
		{
			$this->apiParas['invoiceProvice'] = $invoiceProvice;
		}

		public function getInvoiceCity()
		{
			return $this->apiParas['invoiceCity'];
		}

		public function setInvoiceCity($invoiceCity)
		{
			$this->apiParas['invoiceCity'] = $invoiceCity;
		}

		public function getInvoiceCounty()
		{
			return $this->apiParas['invoiceCounty'];
		}

		public function setInvoiceCounty($invoiceCounty)
		{
			$this->apiParas['invoiceCounty'] = $invoiceCounty;
		}

		public function getInvoiceAddress()
		{
			return $this->apiParas['invoiceAddress'];
		}

		public function setInvoiceAddress($invoiceAddress)
		{
			$this->apiParas['invoiceAddress'] = $invoiceAddress;
		}

		public function getDoOrderPriceMode()
		{
			return $this->apiParas['doOrderPriceMode'];
		}

		public function setDoOrderPriceMode($doOrderPriceMode)
		{
			$this->apiParas['doOrderPriceMode'] = $doOrderPriceMode;
		}

		public function getOrderPriceSnap()
		{
			return $this->apiParas['orderPriceSnap'];
		}

		public function setOrderPriceSnap($orderPriceSnap)
		{
			$this->apiParas['orderPriceSnap'] = $orderPriceSnap;
		}

		public function getExtContent()
		{
			return $this->apiParas['extContent'];
		}

		public function setExtContent($extContent)
		{
			$this->apiParas['extContent'] = $extContent;
		}
	}

	?>