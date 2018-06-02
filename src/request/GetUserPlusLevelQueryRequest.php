<?php  namespace JD\request;
class GetUserPlusLevelQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.getUserPlusLevel.query";
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
                                    	                        	                        	                   			private $fields;
    	                        
	public function setFields($fields){
		$this->fields = $fields;
         $this->apiParas["fields"] = $fields;
	}

	public function getFields(){
	  return $this->fields;
	}

}





        
 

