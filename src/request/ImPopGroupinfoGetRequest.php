<?php  namespace JD\request;
class ImPopGroupinfoGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.im.pop.groupinfo.get";
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
                                    	}





        
 

