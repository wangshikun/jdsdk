<?php

	namespace JD\api;
	class InvoiceSubmitRequest
	{

		private $apiParas = array();
		private $version;
		private $supplierOrder;
		private $markId;
		private $settlementId;
		private $settlementNum;
		private $settlementNakedPrice;
		private $settlementTaxPrice;
		private $invoiceType;
		private $invoiceOrg;
		private $bizInvoiceContent;
		private $invoiceDate;
		private $title;
		private $billToParty;
		private $enterpriseTaxpayer;
		private $billToer;
		private $billToContact;
		private $billToProvince;
		private $billToCity;
		private $billToCounty;
		private $billToTown;
		private $billToAddress;
		private $repaymentDate;
		private $invoiceNum;
		private $invoiceNakedPrice;
		private $invoiceTaxPrice;
		private $currentBatch;
		private $totalBatch;
		private $totalBatchInvoiceNakedAmount;
		private $totalBatchInvoiceTaxAmount;
		private $totalBatchInvoiceAmount;
		private $billingType;
		private $invoicePrice;
		private $isMerge;
		private $poNo;
		private $enterpriseRegAddress;
		private $enterpriseRegPhone;
		private $enterpriseBankName;
		private $enterpriseBankAccount;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "biz.invoice.submit";
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

		public function getSupplierOrder()
		{
			return $this->apiParas['supplierOrder'];
		}

		public function setSupplierOrder($supplierOrder)
		{
			$this->apiParas['supplierOrder'] = $supplierOrder;
		}

		public function getMarkId()
		{
			return $this->apiParas['markId'];
		}

		public function setMarkId($markId)
		{
			$this->apiParas['markId'] = $markId;
		}

		public function getSettlementId()
		{
			return $this->apiParas['settlementId'];
		}

		public function setSettlementId($settlementId)
		{
			$this->apiParas['settlementId'] = $settlementId;
		}

		public function getSettlementNum()
		{
			return $this->apiParas['settlementNum'];
		}

		public function setSettlementNum($settlementNum)
		{
			$this->apiParas['settlementNum'] = $settlementNum;
		}

		public function getSettlementNakedPrice()
		{
			return $this->apiParas['settlementNakedPrice'];
		}

		public function setSettlementNakedPrice($settlementNakedPrice)
		{
			$this->apiParas['settlementNakedPrice'] = $settlementNakedPrice;
		}

		public function getSettlementTaxPrice()
		{
			return $this->apiParas['settlementTaxPrice'];
		}

		public function setSettlementTaxPrice($settlementTaxPrice)
		{
			$this->apiParas['settlementTaxPrice'] = $settlementTaxPrice;
		}

		public function getInvoiceType()
		{
			return $this->apiParas['invoiceType'];
		}

		public function setInvoiceType($invoiceType)
		{
			$this->apiParas['invoiceType'] = $invoiceType;
		}

		public function getInvoiceOrg()
		{
			return $this->apiParas['invoiceOrg'];
		}

		public function setInvoiceOrg($invoiceOrg)
		{
			$this->apiParas['invoiceOrg'] = $invoiceOrg;
		}

		public function getBizInvoiceContent()
		{
			return $this->apiParas['bizInvoiceContent'];
		}

		public function setBizInvoiceContent($bizInvoiceContent)
		{
			$this->apiParas['bizInvoiceContent'] = $bizInvoiceContent;
		}

		public function getInvoiceDate()
		{
			return $this->apiParas['invoiceDate'];
		}

		public function setInvoiceDate($invoiceDate)
		{
			$this->apiParas['invoiceDate'] = $invoiceDate;
		}

		public function getTitle()
		{
			return $this->apiParas['title'];
		}

		public function setTitle($title)
		{
			$this->apiParas['title'] = $title;
		}

		public function getBillToParty()
		{
			return $this->apiParas['billToParty'];
		}

		public function setBillToParty($billToParty)
		{
			$this->apiParas['billToParty'] = $billToParty;
		}

		public function getEnterpriseTaxpayer()
		{
			return $this->apiParas['enterpriseTaxpayer'];
		}

		public function setEnterpriseTaxpayer($enterpriseTaxpayer)
		{
			$this->apiParas['enterpriseTaxpayer'] = $enterpriseTaxpayer;
		}

		public function getBillToer()
		{
			return $this->apiParas['billToer'];
		}

		public function setBillToer($billToer)
		{
			$this->apiParas['billToer'] = $billToer;
		}

		public function getBillToContact()
		{
			return $this->apiParas['billToContact'];
		}

		public function setBillToContact($billToContact)
		{
			$this->apiParas['billToContact'] = $billToContact;
		}

		public function getBillToProvince()
		{
			return $this->apiParas['billToProvince'];
		}

		public function setBillToProvince($billToProvince)
		{
			$this->apiParas['billToProvince'] = $billToProvince;
		}

		public function getBillToCity()
		{
			return $this->apiParas['billToCity'];
		}

		public function setBillToCity($billToCity)
		{
			$this->apiParas['billToCity'] = $billToCity;
		}

		public function getBillToCounty()
		{
			return $this->apiParas['billToCounty'];
		}

		public function setBillToCounty($billToCounty)
		{
			$this->apiParas['billToCounty'] = $billToCounty;
		}

		public function getBillToTown()
		{
			return $this->apiParas['billToTown'];
		}

		public function setBillToTown($billToTown)
		{
			$this->apiParas['billToTown'] = $billToTown;
		}

		public function getBillToAddress()
		{
			return $this->apiParas['billToAddress'];
		}

		public function setBillToAddress($billToAddress)
		{
			$this->apiParas['billToAddress'] = $billToAddress;
		}

		public function getRepaymentDate()
		{
			return $this->apiParas['repaymentDate'];
		}

		public function setRepaymentDate($repaymentDate)
		{
			$this->apiParas['repaymentDate'] = $repaymentDate;
		}

		public function getInvoiceNum()
		{
			return $this->apiParas['invoiceNum'];
		}

		public function setInvoiceNum($invoiceNum)
		{
			$this->apiParas['invoiceNum'] = $invoiceNum;
		}

		public function getInvoiceNakedPrice()
		{
			return $this->apiParas['invoiceNakedPrice'];
		}

		public function setInvoiceNakedPrice($invoiceNakedPrice)
		{
			$this->apiParas['invoiceNakedPrice'] = $invoiceNakedPrice;
		}

		public function getInvoiceTaxPrice()
		{
			return $this->apiParas['invoiceTaxPrice'];
		}

		public function setInvoiceTaxPrice($invoiceTaxPrice)
		{
			$this->apiParas['invoiceTaxPrice'] = $invoiceTaxPrice;
		}

		public function getCurrentBatch()
		{
			return $this->apiParas['currentBatch'];
		}

		public function setCurrentBatch($currentBatch)
		{
			$this->apiParas['currentBatch'] = $currentBatch;
		}

		public function getTotalBatch()
		{
			return $this->apiParas['totalBatch'];
		}

		public function setTotalBatch($totalBatch)
		{
			$this->apiParas['totalBatch'] = $totalBatch;
		}

		public function getTotalBatchInvoiceNakedAmount()
		{
			return $this->apiParas['totalBatchInvoiceNakedAmount'];
		}

		public function setTotalBatchInvoiceNakedAmount($totalBatchInvoiceNakedAmount)
		{
			$this->apiParas['totalBatchInvoiceNakedAmount'] = $totalBatchInvoiceNakedAmount;
		}

		public function getTotalBatchInvoiceTaxAmount()
		{
			return $this->apiParas['totalBatchInvoiceTaxAmount'];
		}

		public function setTotalBatchInvoiceTaxAmount($totalBatchInvoiceTaxAmount)
		{
			$this->apiParas['totalBatchInvoiceTaxAmount'] = $totalBatchInvoiceTaxAmount;
		}

		public function getTotalBatchInvoiceAmount()
		{
			return $this->apiParas['totalBatchInvoiceAmount'];
		}

		public function setTotalBatchInvoiceAmount($totalBatchInvoiceAmount)
		{
			$this->apiParas['totalBatchInvoiceAmount'] = $totalBatchInvoiceAmount;
		}

		public function getBillingType()
		{
			return $this->apiParas['billingType'];
		}

		public function setBillingType($billingType)
		{
			$this->apiParas['billingType'] = $billingType;
		}

		public function getInvoicePrice()
		{
			return $this->apiParas['invoicePrice'];
		}

		public function setInvoicePrice($invoicePrice)
		{
			$this->apiParas['invoicePrice'] = $invoicePrice;
		}

		public function getIsMerge()
		{
			return $this->apiParas['isMerge'];
		}

		public function setIsMerge($isMerge)
		{
			$this->apiParas['isMerge'] = $isMerge;
		}

		public function getPoNo()
		{
			return $this->apiParas['poNo'];
		}

		public function setPoNo($poNo)
		{
			$this->apiParas['poNo'] = $poNo;
		}

		public function getEnterpriseRegAddress()
		{
			return $this->apiParas['enterpriseRegAddress'];
		}

		public function setEnterpriseRegAddress($enterpriseRegAddress)
		{
			$this->apiParas['enterpriseRegAddress'] = $enterpriseRegAddress;
		}

		public function getEnterpriseRegPhone()
		{
			return $this->apiParas['enterpriseRegPhone'];
		}

		public function setEnterpriseRegPhone($enterpriseRegPhone)
		{
			$this->apiParas['enterpriseRegPhone'] = $enterpriseRegPhone;
		}

		public function getEnterpriseBankName()
		{
			return $this->apiParas['enterpriseBankName'];
		}

		public function setEnterpriseBankName($enterpriseBankName)
		{
			$this->apiParas['enterpriseBankName'] = $enterpriseBankName;
		}

		public function getEnterpriseBankAccount()
		{
			return $this->apiParas['enterpriseBankAccount'];
		}

		public function setEnterpriseBankAccount($enterpriseBankAccount)
		{
			$this->apiParas['enterpriseBankAccount'] = $enterpriseBankAccount;
		}
	}

	?>