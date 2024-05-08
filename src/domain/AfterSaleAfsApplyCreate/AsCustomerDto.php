<?php

	namespace JD\domain\AfterSaleAfsApplyCreate;
	class AsCustomerDto
	{

		private $params = array();
		private $customerContactName;
		private $customerTel;
		private $customerMobilePhone;
		private $customerEmail;
		private $customerPostcode;

		function __construct()
		{
			$this->params["@type"] = "com.jd.kpl.AfterSaleCustomerDto";
		}

		public function getCustomerContactName()
		{
			return $this->customerContactName;
		}

		public function setCustomerContactName($customerContactName)
		{
			$this->params['customerContactName'] = $customerContactName;
		}

		public function getCustomerTel()
		{
			return $this->customerTel;
		}

		public function setCustomerTel($customerTel)
		{
			$this->params['customerTel'] = $customerTel;
		}

		public function getCustomerMobilePhone()
		{
			return $this->customerMobilePhone;
		}

		public function setCustomerMobilePhone($customerMobilePhone)
		{
			$this->params['customerMobilePhone'] = $customerMobilePhone;
		}

		public function getCustomerEmail()
		{
			return $this->customerEmail;
		}

		public function setCustomerEmail($customerEmail)
		{
			$this->params['customerEmail'] = $customerEmail;
		}

		public function getCustomerPostcode()
		{
			return $this->customerPostcode;
		}

		public function setCustomerPostcode($customerPostcode)
		{
			$this->params['customerPostcode'] = $customerPostcode;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>