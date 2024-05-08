<?php

	namespace JD\domain\KplOpenWfpVscQueryCertList;
	class QueryData
	{

		private $params = array();
		private $merchantCardId;
		private $queryMerchantCode;
		private $queryBusinessType;
		private $queryCardNum;
		private $cardNumList;
		private $erpOrderId;
		private $skuId;
		private $providedTime;
		private $effectiveTime;
		private $lastVerifiedTime;
		private $expiredTime;
		private $modified;
		private $providedTimeMax;
		private $effectiveTimeMax;
		private $lastVerifiedTimeMax;
		private $expiredTimeMax;
		private $modifiedMax;
		private $batchNum;

		function __construct()
		{
			$this->params["@type"] = "com.jd.kpl.CertQuery";
		}

		public function getMerchantCardId()
		{
			return $this->merchantCardId;
		}

		public function setMerchantCardId($merchantCardId)
		{
			$this->params['merchantCardId'] = $merchantCardId;
		}

		public function getQueryMerchantCode()
		{
			return $this->queryMerchantCode;
		}

		public function setQueryMerchantCode($queryMerchantCode)
		{
			$this->params['queryMerchantCode'] = $queryMerchantCode;
		}

		public function getQueryBusinessType()
		{
			return $this->queryBusinessType;
		}

		public function setQueryBusinessType($queryBusinessType)
		{
			$this->params['queryBusinessType'] = $queryBusinessType;
		}

		public function getQueryCardNum()
		{
			return $this->queryCardNum;
		}

		public function setQueryCardNum($queryCardNum)
		{
			$this->params['queryCardNum'] = $queryCardNum;
		}

		public function setCardNumList($cardNumList)
		{
			$this->params['cardNumList'] = $cardNumList;
		}

		public function getErpOrderId()
		{
			return $this->erpOrderId;
		}

		public function setErpOrderId($erpOrderId)
		{
			$this->params['erpOrderId'] = $erpOrderId;
		}

		public function getSkuId()
		{
			return $this->skuId;
		}

		public function setSkuId($skuId)
		{
			$this->params['skuId'] = $skuId;
		}

		public function getProvidedTime()
		{
			return $this->providedTime;
		}

		public function setProvidedTime($providedTime)
		{
			$this->params['providedTime'] = $providedTime;
		}

		public function getEffectiveTime()
		{
			return $this->effectiveTime;
		}

		public function setEffectiveTime($effectiveTime)
		{
			$this->params['effectiveTime'] = $effectiveTime;
		}

		public function getLastVerifiedTime()
		{
			return $this->lastVerifiedTime;
		}

		public function setLastVerifiedTime($lastVerifiedTime)
		{
			$this->params['lastVerifiedTime'] = $lastVerifiedTime;
		}

		public function getExpiredTime()
		{
			return $this->expiredTime;
		}

		public function setExpiredTime($expiredTime)
		{
			$this->params['expiredTime'] = $expiredTime;
		}

		public function getModified()
		{
			return $this->modified;
		}

		public function setModified($modified)
		{
			$this->params['modified'] = $modified;
		}

		public function getProvidedTimeMax()
		{
			return $this->providedTimeMax;
		}

		public function setProvidedTimeMax($providedTimeMax)
		{
			$this->params['providedTimeMax'] = $providedTimeMax;
		}

		public function getEffectiveTimeMax()
		{
			return $this->effectiveTimeMax;
		}

		public function setEffectiveTimeMax($effectiveTimeMax)
		{
			$this->params['effectiveTimeMax'] = $effectiveTimeMax;
		}

		public function getLastVerifiedTimeMax()
		{
			return $this->lastVerifiedTimeMax;
		}

		public function setLastVerifiedTimeMax($lastVerifiedTimeMax)
		{
			$this->params['lastVerifiedTimeMax'] = $lastVerifiedTimeMax;
		}

		public function getExpiredTimeMax()
		{
			return $this->expiredTimeMax;
		}

		public function setExpiredTimeMax($expiredTimeMax)
		{
			$this->params['expiredTimeMax'] = $expiredTimeMax;
		}

		public function getModifiedMax()
		{
			return $this->modifiedMax;
		}

		public function setModifiedMax($modifiedMax)
		{
			$this->params['modifiedMax'] = $modifiedMax;
		}

		public function getBatchNum()
		{
			return $this->batchNum;
		}

		public function setBatchNum($batchNum)
		{
			$this->params['batchNum'] = $batchNum;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>