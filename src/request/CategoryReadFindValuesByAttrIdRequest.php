<?php  namespace JD\request;
class CategoryReadFindValuesByAttrIdRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.category.read.findValuesByAttrId";
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
                                                        		                                    	                        	                        	                                                    	                        	                   			private $categoryAttrId;
    	                        
	public function setCategoryAttrId($categoryAttrId){
		$this->categoryAttrId = $categoryAttrId;
         $this->apiParas["categoryAttrId"] = $categoryAttrId;
	}

	public function getCategoryAttrId(){
	  return $this->categoryAttrId;
	}

                        	                   	                    		private $field;
    	                        
	public function setField($field){
		$this->field = $field;
         $this->apiParas["field"] = $field;
	}

	public function getField(){
	  return $this->field;
	}

}





        
 

