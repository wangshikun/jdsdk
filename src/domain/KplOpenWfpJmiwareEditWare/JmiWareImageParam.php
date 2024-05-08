<?php

	namespace JD\domain\KplOpenWfpJmiwareEditWare;
	class JmiWareImageParam
	{

		private $params = array();
		private $wareId;
		private $imgPath;
		private $zone;
		private $indexId;

		function __construct()
		{
			$this->params["@type"] = "com.jd.kpl.JmiWareImageParam";
		}

		public function getWareId()
		{
			return $this->wareId;
		}

		public function setWareId($wareId)
		{
			$this->params['wareId'] = $wareId;
		}

		public function getImgPath()
		{
			return $this->imgPath;
		}

		public function setImgPath($imgPath)
		{
			$this->params['imgPath'] = $imgPath;
		}

		public function getZone()
		{
			return $this->zone;
		}

		public function setZone($zone)
		{
			$this->params['zone'] = $zone;
		}

		public function getIndexId()
		{
			return $this->indexId;
		}

		public function setIndexId($indexId)
		{
			$this->params['indexId'] = $indexId;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>