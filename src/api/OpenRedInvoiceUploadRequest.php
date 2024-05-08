<?php

	namespace JD\api;
	class OpenRedInvoiceUploadRequest
	{


		private $apiParas = array();
		private $version;
		private $invoiceDate;
		private $invoiceCode;
		private $invoiceAmount;
		private $blueInvoiceCode;
		private $orderId;
		private $invoiceNo;
		private $invoiceTitle;
		private $blueInvoiceNo;
		private $invoiceImgBase64;

		public function getApiMethodName()
		{
			return "jingdong.open.redInvoiceUpload";
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

		public function getInvoiceDate()
		{
			return $this->invoiceDate;
		}

		public function setInvoiceDate($invoiceDate)
		{
			$this->invoiceDate = $invoiceDate;
			$this->apiParas["invoiceDate"] = $invoiceDate;
		}

		public function getInvoiceCode()
		{
			return $this->invoiceCode;
		}

		public function setInvoiceCode($invoiceCode)
		{
			$this->invoiceCode = $invoiceCode;
			$this->apiParas["invoiceCode"] = $invoiceCode;
		}

		public function getInvoiceAmount()
		{
			return $this->invoiceAmount;
		}

		public function setInvoiceAmount($invoiceAmount)
		{
			$this->invoiceAmount = $invoiceAmount;
			$this->apiParas["invoiceAmount"] = $invoiceAmount;
		}

		public function getBlueInvoiceCode()
		{
			return $this->blueInvoiceCode;
		}

		public function setBlueInvoiceCode($blueInvoiceCode)
		{
			$this->blueInvoiceCode = $blueInvoiceCode;
			$this->apiParas["blueInvoiceCode"] = $blueInvoiceCode;
		}

		public function getOrderId()
		{
			return $this->orderId;
		}

		public function setOrderId($orderId)
		{
			$this->orderId = $orderId;
			$this->apiParas["orderId"] = $orderId;
		}

		public function getInvoiceNo()
		{
			return $this->invoiceNo;
		}

		public function setInvoiceNo($invoiceNo)
		{
			$this->invoiceNo = $invoiceNo;
			$this->apiParas["invoiceNo"] = $invoiceNo;
		}

		public function getInvoiceTitle()
		{
			return $this->invoiceTitle;
		}

		public function setInvoiceTitle($invoiceTitle)
		{
			$this->invoiceTitle = $invoiceTitle;
			$this->apiParas["invoiceTitle"] = $invoiceTitle;
		}

		public function getBlueInvoiceNo()
		{
			return $this->blueInvoiceNo;
		}

		public function setBlueInvoiceNo($blueInvoiceNo)
		{
			$this->blueInvoiceNo = $blueInvoiceNo;
			$this->apiParas["blueInvoiceNo"] = $blueInvoiceNo;
		}

		public function getInvoiceImgBase64()
		{
			return $this->invoiceImgBase64;
		}

		public function setInvoiceImgBase64($invoiceImgBase64)
		{
			$this->invoiceImgBase64 = $invoiceImgBase64;
			$this->apiParas["invoiceImgBase64"] = $invoiceImgBase64;
		}

	}





        
 

