<?php

	namespace JD\domain\AfterSaleAfsApplyCreate;
	class Param
	{

		private $params = array();
		private $jdOrderId;
		private $customerExpect;
		private $questionDesc;
		private $isNeedDetectionReport;
		private $questionPic;
		private $asCustomerDto;
		private $asPickwareDto;
		private $asReturnwareDto;
		private $asDetailDto;
		private $isHasPackage;
		private $packageDesc;

		function __construct()
		{
			$this->params["@type"] = "com.jd.afs.apply.CreateParamReqVo";
		}

		public function getJdOrderId()
		{
			return $this->jdOrderId;
		}

		public function setJdOrderId($jdOrderId)
		{
			$this->params['jdOrderId'] = $jdOrderId;
		}

		public function getCustomerExpect()
		{
			return $this->customerExpect;
		}

		public function setCustomerExpect($customerExpect)
		{
			$this->params['customerExpect'] = $customerExpect;
		}

		public function getQuestionDesc()
		{
			return $this->questionDesc;
		}

		public function setQuestionDesc($questionDesc)
		{
			$this->params['questionDesc'] = $questionDesc;
		}

		public function getIsNeedDetectionReport()
		{
			return $this->isNeedDetectionReport;
		}

		public function setIsNeedDetectionReport($isNeedDetectionReport)
		{
			$this->params['isNeedDetectionReport'] = $isNeedDetectionReport;
		}

		public function getQuestionPic()
		{
			return $this->questionPic;
		}

		public function setQuestionPic($questionPic)
		{
			$this->params['questionPic'] = $questionPic;
		}

		public function setAsCustomerDto($asCustomerDto)
		{
			$this->params['asCustomerDto'] = $asCustomerDto->getInstance();
		}

		function getInstance()
		{
			return $this->params;
		}

		public function setAsPickwareDto($asPickwareDto)
		{
			$this->params['asPickwareDto'] = $asPickwareDto->getInstance();
		}

		public function setAsReturnwareDto($asReturnwareDto)
		{
			$this->params['asReturnwareDto'] = $asReturnwareDto->getInstance();
		}

		public function setAsDetailDto($asDetailDto)
		{
			$this->params['asDetailDto'] = $asDetailDto->getInstance();
		}

		public function getIsHasPackage()
		{
			return $this->isHasPackage;
		}

		public function setIsHasPackage($isHasPackage)
		{
			$this->params['isHasPackage'] = $isHasPackage;
		}

		public function getPackageDesc()
		{
			return $this->packageDesc;
		}

		public function setPackageDesc($packageDesc)
		{
			$this->params['packageDesc'] = $packageDesc;
		}

	}

	?>