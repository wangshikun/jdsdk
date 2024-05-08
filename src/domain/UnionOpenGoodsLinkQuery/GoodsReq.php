<?php

	namespace JD\domain\UnionOpenGoodsLinkQuery;
	class GoodsReq
	{

		private $params = array();
		private $url;
		private $subUnionId;
		private $pid;
		private $sceneId;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.goods.link.LinkGoodsReq";
		}

		public function getUrl()
		{
			return $this->url;
		}

		public function setUrl($url)
		{
			$this->params['url'] = $url;
		}

		public function getSubUnionId()
		{
			return $this->subUnionId;
		}

		public function setSubUnionId($subUnionId)
		{
			$this->params['subUnionId'] = $subUnionId;
		}

		public function getPid()
		{
			return $this->pid;
		}

		public function setPid($pid)
		{
			$this->params['pid'] = $pid;
		}

		public function getSceneId()
		{
			return $this->sceneId;
		}

		public function setSceneId($sceneId)
		{
			$this->params['sceneId'] = $sceneId;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>