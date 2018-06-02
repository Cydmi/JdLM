<?php  namespace JD\request;
class LdopAlphaProviderSyncBranchRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ldop.alpha.provider.sync.branch";
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
                                    	                   			private $content;
    	                        
	public function setContent($content){
		$this->content = $content;
         $this->apiParas["content"] = $content;
	}

	public function getContent(){
	  return $this->content;
	}

}





        
 

