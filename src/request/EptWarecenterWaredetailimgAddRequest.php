<?php  namespace JD\request;
class EptWarecenterWaredetailimgAddRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ept.warecenter.waredetailimg.add";
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
                                    	                        	                   			private $wareId;
    	                        
	public function setWareId($wareId){
		$this->wareId = $wareId;
         $this->apiParas["wareId"] = $wareId;
	}

	public function getWareId(){
	  return $this->wareId;
	}

                        	                   			private $slot;
    	                        
	public function setSlot($slot){
		$this->slot = $slot;
         $this->apiParas["slot"] = $slot;
	}

	public function getSlot(){
	  return $this->slot;
	}

                        	                   			private $img;
    	                        
	public function setImg($img){
		$this->img = $img;
         $this->apiParas["img"] = $img;
	}

	public function getImg(){
	  return $this->img;
	}

}





        
 

