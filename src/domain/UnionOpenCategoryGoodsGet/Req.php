<?php

	namespace JD\domain\UnionOpenCategoryGoodsGet;
	class Req
	{

		private $params = array();
		private $parentId;
		private $grade;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.category.base.CategoryReq";
		}

		public function getParentId()
		{
			return $this->parentId;
		}

		public function setParentId($parentId)
		{
			$this->params['parentId'] = $parentId;
		}

		public function getGrade()
		{
			return $this->grade;
		}

		public function setGrade($grade)
		{
			$this->params['grade'] = $grade;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>