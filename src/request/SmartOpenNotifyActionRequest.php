<?php  namespace JD\request;
class SmartOpenNotifyActionRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.smart.open.notifyAction";
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
                                    	                   			private $feedId;
    	                                                            
	public function setFeedId($feedId){
		$this->feedId = $feedId;
         $this->apiParas["feed_id"] = $feedId;
	}

	public function getFeedId(){
	  return $this->feedId;
	}

                        	                   			private $accessKey;
    	                                                            
	public function setAccessKey($accessKey){
		$this->accessKey = $accessKey;
         $this->apiParas["access_key"] = $accessKey;
	}

	public function getAccessKey(){
	  return $this->accessKey;
	}

                        	                   			private $action;
    	                        
	public function setAction($action){
		$this->action = $action;
         $this->apiParas["action"] = $action;
	}

	public function getAction(){
	  return $this->action;
	}

                        	}





        
 

