<?php

	namespace JD\api;
	class ImgzonePictureUploadRequest
	{


		private $apiParas = array();
		private $version;
		private $imageData;
		private $pictureCateId;
		private $pictureName;

		public function getApiMethodName()
		{
			return "jingdong.imgzone.picture.upload";
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

		public function getImageData()
		{
			return $this->imageData;
		}

		public function setImageData($imageData)
		{
			$this->imageData = $imageData;
			$this->apiParas["image_data"] = $imageData;
		}

		public function getPictureCateId()
		{
			return $this->pictureCateId;
		}

		public function setPictureCateId($pictureCateId)
		{
			$this->pictureCateId = $pictureCateId;
			$this->apiParas["picture_cate_id"] = $pictureCateId;
		}

		public function getPictureName()
		{
			return $this->pictureName;
		}

		public function setPictureName($pictureName)
		{
			$this->pictureName = $pictureName;
			$this->apiParas["picture_name"] = $pictureName;
		}

	}





        
 

