<?php  namespace JD\request;
class VcLibraryGetUploadTokenRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.library.getUploadToken";
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





        
 
