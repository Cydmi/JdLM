<?php  namespace JD\request;
class ImgzoneCategoryUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.imgzone.category.update";
	}
	
	public function getApiParas(){
		return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
	public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
                                    	                        	                   			private $cateId;
    	                                                            
	public function setCateId($cateId){
		$this->cateId = $cateId;
         $this->apiParas["cate_id"] = $cateId;
	}

	public function getCateId(){
	  return $this->cateId;
	}

                        	                   			private $cateName;
    	                                                            
	public function setCateName($cateName){
		$this->cateName = $cateName;
         $this->apiParas["cate_name"] = $cateName;
	}

	public function getCateName(){
	  return $this->cateName;
	}

                        	                   			private $parentCateId;
    	                                                                        
	public function setParentCateId($parentCateId){
		$this->parentCateId = $parentCateId;
         $this->apiParas["parent_cate_id"] = $parentCateId;
	}

	public function getParentCateId(){
	  return $this->parentCateId;
	}

}





        
 

