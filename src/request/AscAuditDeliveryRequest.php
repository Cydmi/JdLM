<?php  namespace JD\request;
class AscAuditDeliveryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.asc.audit.delivery";
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
                                    	                        	                        	                                            		                                    	                   			private $buId;
    	                        
	public function setBuId($buId){
		$this->buId = $buId;
         $this->apiParas["buId"] = $buId;
	}

	public function getBuId(){
	  return $this->buId;
	}

                        	                   			private $operatePin;
    	                        
	public function setOperatePin($operatePin){
		$this->operatePin = $operatePin;
         $this->apiParas["operatePin"] = $operatePin;
	}

	public function getOperatePin(){
	  return $this->operatePin;
	}

                        	                   			private $operateNick;
    	                        
	public function setOperateNick($operateNick){
		$this->operateNick = $operateNick;
         $this->apiParas["operateNick"] = $operateNick;
	}

	public function getOperateNick(){
	  return $this->operateNick;
	}

                        	                   			private $serviceId;
    	                        
	public function setServiceId($serviceId){
		$this->serviceId = $serviceId;
         $this->apiParas["serviceId"] = $serviceId;
	}

	public function getServiceId(){
	  return $this->serviceId;
	}

                        	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $approveNotes;
    	                        
	public function setApproveNotes($approveNotes){
		$this->approveNotes = $approveNotes;
         $this->apiParas["approveNotes"] = $approveNotes;
	}

	public function getApproveNotes(){
	  return $this->approveNotes;
	}

                        	                   			private $sysVersion;
    	                        
	public function setSysVersion($sysVersion){
		$this->sysVersion = $sysVersion;
         $this->apiParas["sysVersion"] = $sysVersion;
	}

	public function getSysVersion(){
	  return $this->sysVersion;
	}

                        	                   			private $approveReasonCid1;
    	                        
	public function setApproveReasonCid1($approveReasonCid1){
		$this->approveReasonCid1 = $approveReasonCid1;
         $this->apiParas["approveReasonCid1"] = $approveReasonCid1;
	}

	public function getApproveReasonCid1(){
	  return $this->approveReasonCid1;
	}

                        	                   			private $approveReasonCid2;
    	                        
	public function setApproveReasonCid2($approveReasonCid2){
		$this->approveReasonCid2 = $approveReasonCid2;
         $this->apiParas["approveReasonCid2"] = $approveReasonCid2;
	}

	public function getApproveReasonCid2(){
	  return $this->approveReasonCid2;
	}

                                            		                                    	                   			private $returnContactName;
    	                        
	public function setReturnContactName($returnContactName){
		$this->returnContactName = $returnContactName;
         $this->apiParas["returnContactName"] = $returnContactName;
	}

	public function getReturnContactName(){
	  return $this->returnContactName;
	}

                        	                   			private $returnContactTel;
    	                        
	public function setReturnContactTel($returnContactTel){
		$this->returnContactTel = $returnContactTel;
         $this->apiParas["returnContactTel"] = $returnContactTel;
	}

	public function getReturnContactTel(){
	  return $this->returnContactTel;
	}

                        	                   			private $returnContactMobile;
    	                        
	public function setReturnContactMobile($returnContactMobile){
		$this->returnContactMobile = $returnContactMobile;
         $this->apiParas["returnContactMobile"] = $returnContactMobile;
	}

	public function getReturnContactMobile(){
	  return $this->returnContactMobile;
	}

                        	                   			private $returnZipcode;
    	                        
	public function setReturnZipcode($returnZipcode){
		$this->returnZipcode = $returnZipcode;
         $this->apiParas["returnZipcode"] = $returnZipcode;
	}

	public function getReturnZipcode(){
	  return $this->returnZipcode;
	}

                        	                   			private $returnProvince;
    	                        
	public function setReturnProvince($returnProvince){
		$this->returnProvince = $returnProvince;
         $this->apiParas["returnProvince"] = $returnProvince;
	}

	public function getReturnProvince(){
	  return $this->returnProvince;
	}

                        	                   			private $returnCity;
    	                        
	public function setReturnCity($returnCity){
		$this->returnCity = $returnCity;
         $this->apiParas["returnCity"] = $returnCity;
	}

	public function getReturnCity(){
	  return $this->returnCity;
	}

                        	                   			private $returnCounty;
    	                        
	public function setReturnCounty($returnCounty){
		$this->returnCounty = $returnCounty;
         $this->apiParas["returnCounty"] = $returnCounty;
	}

	public function getReturnCounty(){
	  return $this->returnCounty;
	}

                        	                   			private $returnVillage;
    	                        
	public function setReturnVillage($returnVillage){
		$this->returnVillage = $returnVillage;
         $this->apiParas["returnVillage"] = $returnVillage;
	}

	public function getReturnVillage(){
	  return $this->returnVillage;
	}

                        	                   			private $returnDetailAddress;
    	                        
	public function setReturnDetailAddress($returnDetailAddress){
		$this->returnDetailAddress = $returnDetailAddress;
         $this->apiParas["returnDetailAddress"] = $returnDetailAddress;
	}

	public function getReturnDetailAddress(){
	  return $this->returnDetailAddress;
	}

                                                                        		                                    	                   	                    		private $applyDetailIdList;
    	                        
	public function setApplyDetailIdList($applyDetailIdList){
		$this->applyDetailIdList = $applyDetailIdList;
         $this->apiParas["applyDetailIdList"] = $applyDetailIdList;
	}

	public function getApplyDetailIdList(){
	  return $this->applyDetailIdList;
	}

                        	                   			private $invoiceNo;
    	                        
	public function setInvoiceNo($invoiceNo){
		$this->invoiceNo = $invoiceNo;
         $this->apiParas["invoiceNo"] = $invoiceNo;
	}

	public function getInvoiceNo(){
	  return $this->invoiceNo;
	}

                        	                   			private $invoiceType;
    	                        
	public function setInvoiceType($invoiceType){
		$this->invoiceType = $invoiceType;
         $this->apiParas["invoiceType"] = $invoiceType;
	}

	public function getInvoiceType(){
	  return $this->invoiceType;
	}

                        	                   			private $pickPackage;
    	                        
	public function setPickPackage($pickPackage){
		$this->pickPackage = $pickPackage;
         $this->apiParas["pickPackage"] = $pickPackage;
	}

	public function getPickPackage(){
	  return $this->pickPackage;
	}

                        	                   			private $pickDetctPaper;
    	                        
	public function setPickDetctPaper($pickDetctPaper){
		$this->pickDetctPaper = $pickDetctPaper;
         $this->apiParas["pickDetctPaper"] = $pickDetctPaper;
	}

	public function getPickDetctPaper(){
	  return $this->pickDetctPaper;
	}

                                                    	                   			private $operateRemark;
    	                        
	public function setOperateRemark($operateRemark){
		$this->operateRemark = $operateRemark;
         $this->apiParas["operateRemark"] = $operateRemark;
	}

	public function getOperateRemark(){
	  return $this->operateRemark;
	}

                        	                   			private $extJsonStr;
    	                        
	public function setExtJsonStr($extJsonStr){
		$this->extJsonStr = $extJsonStr;
         $this->apiParas["extJsonStr"] = $extJsonStr;
	}

	public function getExtJsonStr(){
	  return $this->extJsonStr;
	}

                            }





        
 

