<?php 
date_default_timezone_set('America/New_York');
tcpdf();
ob_start();

class generate_pdf_receipt extends CI_Model {

   	public function createPdf($billingInfo, $transInfo, $subjects, $quoteCharges, $email) {
		$this->load->helper('pdf_helper');

		$billEmail = $billingInfo['billEmail'];
		$streetAddress = $billingInfo['streetAddress'];
		$zipCode = $billingInfo['zipCode'];
		$city = $billingInfo['city'];
		$country = $billingInfo['country'];
		$transId = $billingInfo['transId'];

		$accountNumber = $transInfo['accountNumber'];
		$accountType = $transInfo['accountType'];
		$amount = $transInfo['amount'];
		$TranDate = $transInfo['TranDate'];
		$firstname = $transInfo['firstname'];
		$lastname = $transInfo['lastname'];

	    $obj_pdf = new MYPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
		$obj_pdf->SetCreator(PDF_CREATOR);
		$title = "PDF Report";
		$obj_pdf->SetTitle($title);
		$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
		$obj_pdf->SetDefaultMonospacedFont('helvetica');
		$obj_pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
		$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
		$obj_pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
		$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
		$obj_pdf->SetFont('helvetica', '', 9);
		$obj_pdf->setFontSubsetting(false);
		$obj_pdf->AddPage();

		$items = '';
		foreach ($subjects as $key => $value) {
		    $items = $items."<tr class='item-row'>
		            <td>".$value."</td>
		            <td class='description'></td>
		            <td>".$quoteCharges[$key]."</td>
		            <td>1</td>
		            <td>".$quoteCharges[$key]."</td>
		        </tr>";
		};

		$html = "
		<!DOCTYPE html>
		<html>
		    
		<head>
		    <style>
		        * { margin: 0; padding: 0; }
		        body { font: 16px/1.4 Georgia, serif; }
		        h5 {
		            font-size: 16pt;
		        }
		        table { border-collapse: collapse; }
		        table td, table th { padding: 10px; }
		        td {
		            font-size: 12pt;
		        }
		        th {
		            font-size: 12pt;
		            color: #fff;
		            background-color: #363636;
		        }
		        .border-top {
		             border-top: 2px solid #363636;
		        }
		        .border-right {
		            border-right: 2px solid #363636;
		        }
		        .border-bottom {
		            border-bottom: 2px solid #363636;
		        }
		        .border-left {
		            border-left: 2px solid #363636;
		        }
		        .customer-title {
		            font-size: 16px;
		        }
		        .highlight {
		            background-color: #cccccc;
		        }
		    </style>
		</head>

		<body>
		    <div id='page-wrap'>

		        <textarea id='header'>INVOICE</textarea>

		        <table id='identity'>
		            
		            <div style='height: 10px; background-color: #fff;'></div>
		            <div style='height: 1px; background-color: #363636;'></div>
		            <div style='height: 10px; background-color: #fff;'></div>

		            <tr id='address'>
		                <td class='col-left' width='260'>".$firstname.$lastname. "</td>
		                <td align='right' width='110'>Invoice #:</td>
		                <td width='140'>".$transId."</td>
		            </tr>
		            <tr>
		                <td class='col-left'>105 Haynes Circle</td>
		                <td align='right'>Date:</td>
		                <td><div id='date'>".$TranDate."</div></td>
		            </tr>
		            <tr>
		                <td class='col-left'>Nicholasville, KY, 40356</td>
		                <td align='right' class='border-bottom'></td>
		                <td class='border-bottom'></td>
		            </tr>
		            <tr>
		                <td class='col-left'></td>
		                <td></td>
		                <td></td>
		            </tr>
		            <tr>
		                <td class='col-left'>Phone: (904)521-2357</td>
		                <td></td>
		                <td></td>
		            </tr>

		        </table>

		        <div style='clear:both'></div>

		        <div id='customer'>

		            <div class='customer-title'><br />
		                                     ".$firstname."  ".$lastname."
		            </div>

		        </div>

		        <table id='items'>

		          <tr>
		              <th width='100'>Item</th>
		              <th width='160'></th>
		              <th width='80'>Unit Cost</th>
		              <th width='90'>Quantity</th>
		              <th width='80'>Price</th>
		          </tr>
		         ".$items."
		          <tr>
		              <td class='border-top'></td>
		              <td class='border-top'></td>
		              <td class='border-top'></td>
		              <td class='border-top'></td>
		              <td class='border-top'></td>
		          </tr>
		          <tr>
		              <td></td>
		              <td></td>
		              <td></td>
		              <td align='right' class='border-top border-left'>Subtotal:</td>
		              <td class='border-top border-right'>".$amount."</td>
		          </tr>
		          <tr>
		              <td></td>
		              <td></td>
		              <td></td>
		              <td align='right' class='border-left'>Total:</td>
		              <td class='border-right'>".$amount."</td>
		          </tr>
		          <tr>
		              <td></td>
		              <td></td>
		              <td></td>
		              <td align='right' class='border-left'>Amount Paid:</td>
		              <td class='border-right'>".$amount."</td>
		          </tr>
		          <tr>
		              <td></td>
		              <td></td>
		              <td></td>
		              <td align='right' class='border-top border-bottom border-left highlight'>Balance Due:</td>
		              <td class='border-top border-right border-bottom highlight'>$0.00</td>
		          </tr>

		        </table>

		        <div id='terms'>
		          <h5>Terms</h5>
		          <p>Services will not be completed until balance due is paid in full.</p>
		        </div>

		    </div>
		</body>
		    
		</html>
		";

		// we can have any view part here like HTML, PHP etc
		$content = ob_get_contents();
		ob_end_clean();
		$obj_pdf->writeHTML($html, true, false, true, false, '');
    	$dir = 'receipt/'.$email;
    	echo $dir;
		if (!is_dir($dir)) {
		   mkdir($dir, 0777);
		} 
		// $dir = 'tmp/'.$email;
		// if (!is_dir($dir)) {
		//    mkdir($dir, 0777);
		// } 

		$obj_pdf->Output('/Users/zhaohe/htdocs/localhost/Codeigniter/'.$dir.'/output.pdf', 'F');
		//$obj_pdf->Output('/var/www/html/Codeigniter/tmp/output.pdf', 'F');
	 }
}

	class MYPDF extends TCPDF {
	    //Page header
	    public function Header() {
	        // Log
	        // $image_file = base_url('assets/images/cyto_logo_orgdark_sharp_noalpha.png');
	        $image_file = $_SERVER['DOCUMENT_ROOT'].'/Codeigniter/assets/images/cyto_logo_orgdark_sharp_noalpha.png';
	        $this->Image($image_file, 10, 10, 25, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
	        // Set font
	        $this->SetFont('helvetica', 'B', 20);
	        // Title
	        $this->Cell(0, 40, 'CytoInformatics', 0, false, 'C', 0, '', 0, false, 'T', 'C');
	    }

	    // Page footer
	    public function Footer() {
	        // Position at 15 mm from bottom
	        $this->SetY(-15);
	        // Set font
	        $this->SetFont('helvetica', 'I', 8);
	        // Page number
	        $this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
	    }
	}
?>