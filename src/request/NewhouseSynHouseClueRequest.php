<?php  namespace JD\request;
class NewhouseSynHouseClueRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.newhouse.synHouseClue";
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
                                                        		                                    	                        	                   			private $clueId;
    	                        
	public function setClueId($clueId){
		$this->clueId = $clueId;
         $this->apiParas["clueId"] = $clueId;
	}

	public function getClueId(){
	  return $this->clueId;
	}

                        	                   			private $channelId;
    	                        
	public function setChannelId($channelId){
		$this->channelId = $channelId;
         $this->apiParas["channelId"] = $channelId;
	}

	public function getChannelId(){
	  return $this->channelId;
	}

                            }





        
 

