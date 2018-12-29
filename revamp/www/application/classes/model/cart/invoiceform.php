<?php
class Model_Cart_InvoiceForm extends Model_Invoice {
	public $session_id;
	public $country_area;
	public $total_weight;
	public $paypal_charge;
	public $is_agree;
	
	public function populate($post) {
		parent::values($post);
		
		$this->session_id = $post['session_id'];
		$this->country_area = $post['country_area'];
		$this->is_agree = isset($post['is_agree']) ? $post['is_agree'] : 'N';
	}
	
	public function getCountryCode() {
		$str = explode(',', $this->country_area);
		return $str[0];
	}
}