<?php

	namespace JD\api;
	class OpenBlueInvoiceUploadRequest
	{


		private $apiParas = array();
		private $version;
		private $orderId;
		private $invoiceCode;
		private $invoiceNo;
		private $invoiceTitle;
		private $invoiceAmount;
		private $invoiceDate;
		private $invoiceImgBase64;

		public function getApiMethodName()
		{
			return "jingdong.open.blueInvoiceUpload";
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

		public function getOrderId()
		{
			return $this->orderId;
		}

		public function setOrderId($orderId)
		{
			$this->orderId = $orderId;
			$this->apiParas["orderId"] = $orderId;
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

		public function getInvoiceAmount()
		{
			return $this->invoiceAmount;
		}

		public function setInvoiceAmount($invoiceAmount)
		{
			$this->invoiceAmount = $invoiceAmount;
			$this->apiParas["invoiceAmount"] = $invoiceAmount;
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





        
 

