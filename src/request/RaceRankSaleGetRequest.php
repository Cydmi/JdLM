<?php  namespace JD\request;
class RaceRankSaleGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.race.rank.sale.get";
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





        
 

