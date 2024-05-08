<?php

	namespace JD\domain\UnionOpenExchangeMediaOrderSync;
	class MediaOrderContent
	{

		private $params = array();
		private $authorPrice;
		private $authorName;
		private $authorFansNum;
		private $pubTime;
		private $contentId;
		private $authorId;
		private $authorReferencePrice;
		private $pubLink;
		private $contentName;
		private $oldContentId;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.exchange.MediaOrderContent";
		}

		public function getAuthorPrice()
		{
			return $this->authorPrice;
		}

		public function setAuthorPrice($authorPrice)
		{
			$this->params['authorPrice'] = $authorPrice;
		}

		public function getAuthorName()
		{
			return $this->authorName;
		}

		public function setAuthorName($authorName)
		{
			$this->params['authorName'] = $authorName;
		}

		public function getAuthorFansNum()
		{
			return $this->authorFansNum;
		}

		public function setAuthorFansNum($authorFansNum)
		{
			$this->params['authorFansNum'] = $authorFansNum;
		}

		public function getPubTime()
		{
			return $this->pubTime;
		}

		public function setPubTime($pubTime)
		{
			$this->params['pubTime'] = $pubTime;
		}

		public function getContentId()
		{
			return $this->contentId;
		}

		public function setContentId($contentId)
		{
			$this->params['contentId'] = $contentId;
		}

		public function getAuthorId()
		{
			return $this->authorId;
		}

		public function setAuthorId($authorId)
		{
			$this->params['authorId'] = $authorId;
		}

		public function getAuthorReferencePrice()
		{
			return $this->authorReferencePrice;
		}

		public function setAuthorReferencePrice($authorReferencePrice)
		{
			$this->params['authorReferencePrice'] = $authorReferencePrice;
		}

		public function getPubLink()
		{
			return $this->pubLink;
		}

		public function setPubLink($pubLink)
		{
			$this->params['pubLink'] = $pubLink;
		}

		public function getContentName()
		{
			return $this->contentName;
		}

		public function setContentName($contentName)
		{
			$this->params['contentName'] = $contentName;
		}

		public function getOldContentId()
		{
			return $this->oldContentId;
		}

		public function setOldContentId($oldContentId)
		{
			$this->params['oldContentId'] = $oldContentId;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>