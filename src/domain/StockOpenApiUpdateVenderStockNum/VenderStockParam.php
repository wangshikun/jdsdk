<?php

	namespace JD\domain\StockOpenApiUpdateVenderStockNum;
	class VenderStockParam
	{

		private $params = array();
		private $companyId;
		private $venderStockDetailParamList;
		private $venderCode;
		private $billId;
		private $extBillId;

		function __construct()
		{
			$this->params["@type"] = "com.jd.stock.bk.export.param.VenderStockParam";
		}

		public function getCompanyId()
		{
			return $this->companyId;
		}

		public function setCompanyId($companyId)
		{
			$this->params['companyId'] = $companyId;
		}

		public function setVenderStockDetailParamList($venderStockDetailParamList)
		{
			$size = count($venderStockDetailParamList);
			for ($i = 0; $i < $size; $i++) {
				$venderStockDetailParamList [$i] = $venderStockDetailParamList [$i]->getInstance();
			}
			$this->params['venderStockDetailParamList'] = $venderStockDetailParamList;
		}

		function getInstance()
		{
			return $this->params;
		}

		public function getVenderCode()
		{
			return $this->venderCode;
		}

		public function setVenderCode($venderCode)
		{
			$this->params['venderCode'] = $venderCode;
		}

		public function getBillId()
		{
			return $this->billId;
		}

		public function setBillId($billId)
		{
			$this->params['billId'] = $billId;
		}

		public function getExtBillId()
		{
			return $this->extBillId;
		}

		public function setExtBillId($extBillId)
		{
			$this->params['extBillId'] = $extBillId;
		}

	}

	?>