<?php  namespace JD\request;
class JcloudWmsMasterCategoryInfoInsertRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jcloud.wms.master.categoryInfo.insert";
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
                                    	                        	                                            		                                    	                   			private $tenantId;
    	                        
	public function setTenantId($tenantId){
		$this->tenantId = $tenantId;
         $this->apiParas["tenantId"] = $tenantId;
	}

	public function getTenantId(){
	  return $this->tenantId;
	}

                        	                   			private $categoryNo;
    	                        
	public function setCategoryNo($categoryNo){
		$this->categoryNo = $categoryNo;
         $this->apiParas["categoryNo"] = $categoryNo;
	}

	public function getCategoryNo(){
	  return $this->categoryNo;
	}

                        	                   			private $categoryName;
    	                        
	public function setCategoryName($categoryName){
		$this->categoryName = $categoryName;
         $this->apiParas["categoryName"] = $categoryName;
	}

	public function getCategoryName(){
	  return $this->categoryName;
	}

                        	                   			private $superior;
    	                        
	public function setSuperior($superior){
		$this->superior = $superior;
         $this->apiParas["superior"] = $superior;
	}

	public function getSuperior(){
	  return $this->superior;
	}

                        	                   			private $operateUser;
    	                        
	public function setOperateUser($operateUser){
		$this->operateUser = $operateUser;
         $this->apiParas["operateUser"] = $operateUser;
	}

	public function getOperateUser(){
	  return $this->operateUser;
	}

                        	                   			private $operateTime;
    	                        
	public function setOperateTime($operateTime){
		$this->operateTime = $operateTime;
         $this->apiParas["operateTime"] = $operateTime;
	}

	public function getOperateTime(){
	  return $this->operateTime;
	}

                        	                   			private $sortNo;
    	                        
	public function setSortNo($sortNo){
		$this->sortNo = $sortNo;
         $this->apiParas["sortNo"] = $sortNo;
	}

	public function getSortNo(){
	  return $this->sortNo;
	}

                        	                   			private $memo;
    	                        
	public function setMemo($memo){
		$this->memo = $memo;
         $this->apiParas["memo"] = $memo;
	}

	public function getMemo(){
	  return $this->memo;
	}

                            }





        
 

