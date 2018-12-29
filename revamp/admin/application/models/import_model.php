<?php
class Import_model extends CI_Model {
	function Import_model() {
		parent::__construct();
	}
	
	function import($file) {
		$this->load->library('excel');
		$objPHPExcel = $this->excel;
		$objReader = new PHPExcel_Reader_Excel2007();
		$objPHPExcel = $objReader->load($file);
		
		$products = array();
		$worksheet = $objPHPExcel->getActiveSheet();
		foreach ($worksheet->getRowIterator() as $row) {
			$rowNo = $row->getRowIndex();
			 
			if ($rowNo == 1) {
				// Skip 1st row (i.e. header)
				continue;
			}
			
			$i = 1;
			$product = array(
					'product_id' => $this->getRowValue($worksheet, $i++, $rowNo),
					'company_id' => $this->getRowValue($worksheet, $i++, $rowNo),
					'make_name' => $this->getRowValue($worksheet, $i++, $rowNo),
					'model' => $this->getRowValue($worksheet, $i++, $rowNo),
					'remark' => $this->getRowValue($worksheet, $i++, $rowNo),
					'remark_tc' => $this->getRowValue($worksheet, $i++, $rowNo),
					'name' => $this->getRowValue($worksheet, $i++, $rowNo),
					'name_tc' => $this->getRowValue($worksheet, $i++, $rowNo),
					'pcs' => $this->getRowValue($worksheet, $i++, $rowNo),
					'price' => $this->getRowValue($worksheet, $i++, $rowNo),
					'sup' => $this->getRowValue($worksheet, $i++, $rowNo),
					'colour' => $this->getRowValue($worksheet, $i++, $rowNo),
					'location' => $this->getRowValue($worksheet, $i++, $rowNo),
					'model_no' => $this->getRowValue($worksheet, $i++, $rowNo),
					'year' => $this->getRowValue($worksheet, $i++, $rowNo),
					'cat_id' => $this->getRowValue($worksheet, $i++, $rowNo),
					'cat_name' => $this->getRowValue($worksheet, $i++, $rowNo),
					'sub_cat_id' => $this->getRowValue($worksheet, $i++, $rowNo),
					'desc' => $this->getRowValue($worksheet, $i++, $rowNo),
					'desc_tc' => $this->getRowValue($worksheet, $i++, $rowNo),
					'stock' => $this->getRowValue($worksheet, $i++, $rowNo),
					'material' => $this->getRowValue($worksheet, $i++, $rowNo),
					'display_seq' => $this->getRowValue($worksheet, $i++, $rowNo),
					'sts' => $this->getRowValue($worksheet, $i++, $rowNo),
					'photo_cnt' => $this->getRowValue($worksheet, $i++, $rowNo),
					'gross_weight' => $this->getRowValue($worksheet, $i++, $rowNo),
					'net_weight' => $this->getRowValue($worksheet, $i++, $rowNo),
					'special_price' => $this->getRowValue($worksheet, $i++, $rowNo),
					'discount' => $this->getRowValue($worksheet, $i++, $rowNo),
					'youtube1' => $this->getRowValue($worksheet, $i++, $rowNo),
					'youtube2' => $this->getRowValue($worksheet, $i++, $rowNo),
					'youtube3' => $this->getRowValue($worksheet, $i++, $rowNo),
					'gen_news' => $this->getRowValue($worksheet, $i++, $rowNo),
			);
			
			$products[] = $product;
		}
		
		// Delete all existing records
		$this->db->truncate('product');
		
		// Add back new imported records
		$this->db->insert_batch('product', $products);
	}
	
	private function getRowValue($worksheet, $colNo, $rowNo) {
		$value = $worksheet->getCellByColumnAndRow($colNo, $rowNo)->getValue();
		return $value === 'NULL' ? NULL : $value;
	}
}