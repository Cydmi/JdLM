<?php  namespace JD\request;
class VcLibraryGetLimitPictureUploadTokenRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.library.getLimitPictureUploadToken";
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





        
 

