
<?php include ("../../db_connect.php");
//$session_id=$_SESSION['id'];
//$session_level=$_SESSION['level_Id'];
//$session_role=$_SESSION['role_Id'];
//$session_work_distr_Id=$_SESSION['work_distr_Id'];



ob_start();
require('fpdf16/fpdf.php');
Header('Pragma: public');

// It will be called downloaded.pdf
//print watermark
class PDF_Rotate
        extends FPDF {

    var $angle = 0;

    function Rotate($angle, $x = -1, $y = -1) {
        if ($x == -1)
            $x = $this->x;
        if ($y == -1)
            $y = $this->y;
        if ($this->angle != 0)
            $this->_out('Q');
        $this->angle = $angle;
        if ($angle != 0)
            {
            $angle*=M_PI / 180;
            $c = cos($angle);
            $s = sin($angle);
            $cx = $x * $this->k;
            $cy = ($this->h - $y) * $this->k;
            $this->_out(sprintf('q %.5F %.5F %.5F %.5F %.2F %.2F cm 1 0 0 1 %.2F %.2F cm', $c, $s, -$s, $c, $cx, $cy, -$cx, -$cy));
            }
    }

    function _endpage() {
        if ($this->angle != 0)
            {
            $this->angle = 0;
            $this->_out('Q');
            }
        parent::_endpage();
    }

}

//inherits watermark to pdf
class PDF
        extends PDF_Rotate {

//barcode generation
    function Code39($xpos, $ypos, $code, $baseline = 0.5, $height = 5) {
        $wide = $baseline;
        $narrow = $baseline / 3;
        $gap = $narrow;
        $barChar['0'] = 'nnnwwnwnn';
        $barChar['1'] = 'wnnwnnnnw';
        $barChar['2'] = 'nnwwnnnnw';
        $barChar['3'] = 'wnwwnnnnn';
        $barChar['4'] = 'nnnwwnnnw';
        $barChar['5'] = 'wnnwwnnnn';
        $barChar['6'] = 'nnwwwnnnn';
        $barChar['7'] = 'nnnwnnwnw';
        $barChar['8'] = 'wnnwnnwnn';
        $barChar['9'] = 'nnwwnnwnn';
        $barChar['A'] = 'wnnnnwnnw';
        $barChar['B'] = 'nnwnnwnnw';
        $barChar['C'] = 'wnwnnwnnn';
        $barChar['D'] = 'nnnnwwnnw';
        $barChar['E'] = 'wnnnwwnnn';
        $barChar['F'] = 'nnwnwwnnn';
        $barChar['G'] = 'nnnnnwwnw';
        $barChar['H'] = 'wnnnnwwnn';
        $barChar['I'] = 'nnwnnwwnn';
        $barChar['J'] = 'nnnnwwwnn';
        $barChar['K'] = 'wnnnnnnww';
        $barChar['L'] = 'nnwnnnnww';
        $barChar['M'] = 'wnwnnnnwn';
        $barChar['N'] = 'nnnnwnnww';
        $barChar['O'] = 'wnnnwnnwn';
        $barChar['P'] = 'nnwnwnnwn';
        $barChar['Q'] = 'nnnnnnwww';
        $barChar['R'] = 'wnnnnnwwn';
        $barChar['S'] = 'nnwnnnwwn';
        $barChar['T'] = 'nnnnwnwwn';
        $barChar['U'] = 'wwnnnnnnw';
        $barChar['V'] = 'nwwnnnnnw';
        $barChar['W'] = 'wwwnnnnnn';
        $barChar['X'] = 'nwnnwnnnw';
        $barChar['Y'] = 'wwnnwnnnn';
        $barChar['Z'] = 'nwwnwnnnn';
        $barChar['-'] = 'nwnnnnwnw';
        $barChar['.'] = 'wwnnnnwnn';
        $barChar[' '] = 'nwwnnnwnn';
        $barChar['*'] = 'nwnnwnwnn';
        $barChar['$'] = 'nwnwnwnnn';
        $barChar['/'] = 'nwnwnnnwn';
        $barChar['+'] = 'nwnnnwnwn';
        $barChar['%'] = 'nnnwnwnwn';
        $this->SetFont('Times', '', 10);
        $this->Text($xpos, $ypos + $height + 4, $code);
        $this->SetFillColor(0);
        $code = '*' . strtoupper($code) . '*';
        for ($i = 0; $i < strlen($code); $i++) {
            $char = $code[$i];
            if (!isset($barChar[$char]))
                {
                $this->Error('Invalid character in barcode: ' . $char);
                }
            $seq = $barChar[$char];
            for ($bar = 0; $bar < 9; $bar++) {
                if ($seq[$bar] == 'n')
                    {
                    $lineWidth = $narrow;
                    }
                else
                    {
                    $lineWidth = $wide;
                    }
                if ($bar % 2 == 0)
                    {
                    $this->Rect($xpos, $ypos, $lineWidth, $height, 'F');
                    }
                $xpos += $lineWidth;
            }
            $xpos += $gap;
        }
    }

//Page header
    function Header() {

        $this->SetY(20); //Logo
        //$this->Image('../images/reb_logo.jpg', 10, 10, 63);
        //Times bold 15
        $this->SetFont('Times', 'B', 15);
        //Move to the right
        $this->SetTextColor(0, 0, 0);
        $this->Cell(60);
        //Title
        //$this->Cell(75, -12, 'OUR RECEIPT', 0, 0, 'C');
		
		$this->SetTextColor(0, 0, 0);
        //$this->SetY(-30);
        $this->SetFont('Times', '', 10);
        //Position at 1.5 cm from bottom
        //$this->Cell(-188, 0, 'P.O Box 3817 KIGALI', 0, 0, 'C');
		//$this->Cell(198, 9, 'Telephone :(+250) 255121482', 0, 0, 'C');
		//$this->Cell(-210, 20, 'E-mail: info@reb.rw', 0, 0, 'C');
		//$this->Cell(211, 30, 'Website: www.reb.rw', 0, 0, 'C');
		
		//$this->setLineWidth(0.5);
		//$this->SetTextColor(100,100,0);
		//$this->line(15,40,190,40);
		
        $this->SetFont('Times', 'BU', 13);
        $this->SetTextColor(0, 0, 0);
        //$this->Cell(-250, 60, 'SECONDARY SCHOOL TEACHERS', 0, 0, 'C');

        //Line break
        $this->Cell(60);
		
        //Put the watermark
        $this->SetFont('Times', 'B', 27);
        $this->SetTextColor(255, 192, 203);
        $this->RotatedText(30, 220, 'Finencial Management System', 45);
    }

    function RotatedText($x, $y, $txt, $angle) {
        //Text rotated around its origin
        $this->Rotate($angle, $x, $y);
        $this->Text($x, $y, $txt);
        $this->Rotate(0);
    }

//Page footer
    function Footer() {
        //$this->Image('fpdf16/regsign.gif', 15, 230, 50);
        //$this->SetTextColor(0, 128, 0);
		$this->SetTextColor(0, 0, 0);
        $this->SetY(-30);
        $this->SetFont('Times', '', 9);
        //Position at 1.5 cm from bottom
		
		$this->setLineWidth(0.6);
		//$this->SetTextColor(100,100,0);
		$this->line(15,291,195,291);
		
		$this->setLineWidth(0.2);
		//$this->SetTextColor(100,100,0);
		$this->line(15,292,195,292);
        $this->Cell(0, 37, ' @ FMS Software CopyRight  ', 0, 0, 'C');
        
		
		$this->SetTextColor(0, 0, 0);
        $this->SetY(-15);
        //Times italic 8
        $this->SetFont('Times', 'I', 8);
        //Page number
        //$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }

    var $B;
    var $I;
    var $U;
    var $HREF;

    function PDF($orientation = 'P', $unit = 'mm', $format = 'A4') {
        //Call parent constructor
        $this->FPDF($orientation, $unit, $format);
        //Initialization
        $this->B = 0;
        $this->I = 0;
        $this->U = 0;
        $this->HREF = '';
    }

    function WriteHTML($html) {
        //HTML parser
        $html = str_replace("\n", ' ', $html);
        $a = preg_split('/<(.*)>/U', $html, -1, PREG_SPLIT_DELIM_CAPTURE);
        foreach ($a as $i => $e) {
            if ($i % 2 == 0)
                {
                //Text
                if ($this->HREF)
                    $this->PutLink($this->HREF, $e);
                else
                    $this->Write(5, $e);
                }
            else
                {
                //Tag
                if ($e[0] == '/')
                    $this->CloseTag(strtoupper(substr($e, 1)));
                else
                    {
                    //Extract attributes
                    $a2 = explode(' ', $e);
                    $tag = strtoupper(array_shift($a2));
                    $attr = array();
                    foreach ($a2 as $v) {
                        if (preg_match('/([^=]*)=["\']?([^"\']*)/', $v, $a3))
                            $attr[strtoupper($a3[1])] = $a3[2];
                    }
                    $this->OpenTag($tag, $attr);
                    }
                }
        }
    }

    function OpenTag($tag, $attr) {
        //Opening tag
        if ($tag == 'B' || $tag == 'I' || $tag == 'U')
            $this->SetStyle($tag, true);
        if ($tag == 'A')
            $this->HREF = $attr['HREF'];
        if ($tag == 'BR')
            $this->Ln(5);
    }

    function CloseTag($tag) {
        //Closing tag
        if ($tag == 'B' || $tag == 'I' || $tag == 'U')
            $this->SetStyle($tag, false);
        if ($tag == 'A')
            $this->HREF = '';
    }

    function SetStyle($tag, $enable) {
        //Modify style and select corresponding font
        $this->$tag+=($enable ? 1 : -1);
        $style = '';
        foreach (array('B', 'I', 'U') as $s) {
            if ($this->$s > 0)
                $style.=$s;
        }
        $this->SetFont('', $style);
    }

    function PutLink($URL, $txt) {
        //Put a hyperlink
        $this->SetTextColor(0, 0, 255);
        $this->SetStyle('U', true);
        $this->Write(5, $txt, $URL);
        $this->SetStyle('U', false);
        $this->SetTextColor(0);
    }

}

//Instanciation of inherited class
$pdf=new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times', '', 12);

if(!empty($_REQUEST['bonDeComndId']) AND !empty($_REQUEST['CustomId'])  )
			{
$bonDeComndId = $_REQUEST['bonDeComndId'];
$CustomId = $_REQUEST['CustomId'];
//$Supp_Nme = $_REQUEST['Supp_Nme'];
$Today_date = date('Y-m-d H:i:sa');
}// End first if
else
{
$BdeRcptnID="NO";
$Sup_ID="NO";
}






$date = date('Y-m-d');


$x=0;
$y=20;
$xx=49;
$yy=78;



		
		
		$x=25;
		$y=20;
		
		$xx=29;
		$yy=58;

//BUDGES

	
      $pdf->setDrawColor(0,0,0);// Set color for all lines
		$pdf->setLineWidth(0.2);
		
		$pdf->line($x-6,$y+50,$x-6,$y+250);// vertical left
		$pdf->line($x+160,$y+50,$x+160,$y+250);// vertical right 
				$pdf->line($x+4,$y+60,$x+4,$y+210);// vertical left 1
				//$pdf->line($x+24,$y+75,$x+24,$y+175);// vertical left 2
				$pdf->line($x+60,$y+60,$x+60,$y+210);// vertical left 3
				$pdf->line($x+99,$y+60,$x+99,$y+210);// vertical left 4
				$pdf->line($x+125,$y+60,$x+125,$y+210);// vertical left 5
				
		$pdf->line($x-6,$y+50,$x+160,$y+50);// horizontal top 1
		$pdf->line($x-6,$y+60,$x+160,$y+60);// horizontal top 2
		$pdf->line($x-6,$y+70,$x+160,$y+70);// horizontal top 3
		$pdf->line($x-6,$y+210,$x+160,$y+210);// horizontal top 4
		$pdf->line($x-6,$y+250,$x+160,$y+250);// hrizontal line 5
		
		 $pdf->Image('../../img/ururabologo.jpg',$x+140,$y,25);
	    $pdf->Image('../../img/krplogo.jpg',$x,$y,25);
	       $pdf->SetFont('Arial','',12);
		//$pdf->Text($x+5,$y+32,"Kuri: ".$CompName);
		$pdf->SetFont('Arial','B',11);
	$pdf->SetTextColor(0,0,0);
		$pdf->Text($x+25,$y+5,"REPUBLIC OF RWANDA");
		$pdf->Text($x+25,$y+10,"EASTERN PROVINCE");
		$pdf->Text($x+25,$y+15,"KAYONZA DISTRICT");
		$pdf->Text($x+25,$y+20,"MUKARANGE SECTOR");
		$pdf->Text($x+25,$y+25,"KAYONZA RICE PRODUCT LTD");
		$pdf->Text($x+25,$y+30,"Email: kayonzarice@yahoo.com");
		$pdf->Text($x+25,$y+35,"Tel: 0788 852 771 / 0788 308 103 / 0788 313 267");
		
		//$pdf->Text($x+110,$y+10,"mwisoko2016@gmail.com");
		//$pdf->Text($x+110,$y+15,"www.mwisoko.com");
		$pdf->SetFont('Arial','B',13);
	$pdf->SetTextColor(0,0,0);
		//$pdf->Text($x,$y+23,'Account no: 00059-07719840-24 BK, Mobile Money Account: 0780442256');
		
$date2=date('d-m-Y H:i:s');
            $pdf->SetFont('Arial','',11);
			$pdf->Text($x+115,$y+40,"Date: ".$date2);
		
		
		
		//$pdf->setLineWidth(1);
		$pdf->SetFont('Arial','B',20);
		$pdf->Text($x+15,$y+58,'BON DE COMMANDE No: ...'.$bonDeComndId);
		
		
		
		//Static Titles
		$pdf->SetFont('Arial','B',11);
		$pdf->Text($x-5,$y+67,'No');
		$pdf->Text($x+25,$y+67,'Product');
		$pdf->Text($x+70,$y+67,'Quantity (Kg)');
		$pdf->Text($x+100,$y+67,'Unit Price ');
		
		$pdf->Text($x+126,$y+67,'Price (FRW)');
		
		
	
		
		// Load the products
		
		 $stms_requested = $conn->query("SELECT tbl_sales.salesID,tbl_sales.numberOfPackagesRequested,tbl_sales.discountID,
					tbl_productsfinal.productName,tbl_productpackage.packageQuantity,tbl_units.unityName,tbl_discount.discountName,
					tbl_discount.discountRate,
					tbl_sales.finalStoreID,
					tbl_sales.packageID,
					tbl_sales.productFinalID,
					tbl_sales.vehicleNo,
					tbl_vehicles.vehiclePlateNo,
					tbl_sales.driverName,
					tbl_sales.destinationSector,
				tbl_employees.empFamilyName,tbl_employees.empGivenName,tbl_productpackageprice.sellingPrice,
				tbl_currency.currencyCode ,tbl_customer.customerFamilyName, 
				tbl_customer.customerSecondName,tbl_customer.customerPhone1,tbl_customer.customerPhone2
 
					FROM tbl_sales 
					INNER JOIN tbl_bondecommande ON tbl_sales.bonDeCommandeID=tbl_bondecommande.bonDeCommandeID 
					INNER JOIN tbl_finalstore ON tbl_sales.finalStoreID=tbl_finalstore.finalStoreID 
					INNER JOIN tbl_productsfinal ON tbl_sales.productFinalID=tbl_productsfinal.productFinalID 
					INNER JOIN tbl_units ON tbl_productsfinal.unitID=tbl_units.unityID 
					INNER JOIN tbl_productpackage ON tbl_sales.packageID=tbl_productpackage.packageID 
					INNER JOIN tbl_employment ON tbl_sales.requestedBy=tbl_employment.empID 
					INNER JOIN tbl_employees ON tbl_employment.empID=tbl_employees.empID 
					INNER JOIN tbl_productpackageprice ON tbl_sales.packageID=tbl_productpackageprice.packageID AND tbl_productpackageprice.productID=tbl_productsfinal.productFinalID
					INNER JOIN tbl_currency ON tbl_productpackageprice.currencyID=tbl_currency.currencyID 
					INNER JOIN tbl_discount ON tbl_sales.discountID=tbl_discount.discountID 
					INNER JOIN tbl_customer ON tbl_sales.customerID=tbl_customer.customerID
					INNER JOIN tbl_vehicles ON tbl_sales.vehicleNo=tbl_vehicles.vehicleID
					WHERE tbl_sales.status=1 AND tbl_sales.bonDeCommandeID='$bonDeComndId' AND tbl_bondecommande.bonDeCommandeID='$bonDeComndId' 
					AND tbl_bondecommande.status=1 AND tbl_productpackageprice.status=1 AND tbl_discount.status=1 ");

                        $row_count_requested = $stms_requested->num_rows;
                        if ($row_count_requested > 0)
                            {							
							$i=1;
	$xx=10;
	$yy=75;
	$yy2=70;
							$totQuant=0;
							$totPrice=0;
                            while ($rows = $stms_requested->fetch_assoc()) {
								$salesID = $rows['salesID'];
								$numberOfPackagesRequested = $rows['numberOfPackagesRequested'];								
								$productName = $rows['productName'];
								$packageQuantity = $rows['packageQuantity'];
								$unityName = $rows['unityName'];
								$empFamilyName = $rows['empFamilyName'];
								$empGivenName = $rows['empGivenName'];
								$sellingPrice = $rows['sellingPrice'];
								$currencyCode = $rows['currencyCode'];
								$discountID = $rows['discountID'];
								$discountName = $rows['discountName'];
								$discountRate = $rows['discountRate'];
								
								$finalStoreID = $rows['finalStoreID'];
								$packageID = $rows['packageID'];
								$productFinalID = $rows['productFinalID'];
								$customerFn=$rows['customerFamilyName'];
								$customerSn=$rows['customerSecondName'];
								$customerPhone1=$rows['customerPhone1'];
								$customerPhone2=$rows['customerPhone2'];
								$plateNo=$rows['vehiclePlateNo'];
								$driver=$rows['driverName'];
								$destination=$rows['destinationSector'];

								
								$Quant = $packageQuantity * $numberOfPackagesRequested;
								$totQuant = $totQuant + $Quant;
								$priceTotalPackages = $sellingPrice * $numberOfPackagesRequested;
															
								$priceTopay1 = $sellingPrice * $numberOfPackagesRequested;
								$AmountDiscount=($priceTotalPackages * $discountRate);
								
								
								$priceTopay = $priceTotalPackages - $AmountDiscount;
								
								
								$totPrice= $totPrice + $priceTopay;
								
	$pdf->SetFont('Arial','',11);
	$pdf->Text($x,$y+$yy,$i);// Display the order
	$pdf->Text($x+$xx,$y+$yy,$productName);// Display the product list
	$pdf->Text($x+51+$xx,$y+$yy,$numberOfPackagesRequested.' Packages of '.$packageQuantity.'Kg');// Display quantity
	$pdf->Text($x+95+$xx,$y+$yy,$sellingPrice);// Display Buying price
	
	$pdf->SetFont('Arial','B',8);
	$pdf->SetTextColor(255,0,0);
	$pdf->Text($x+125+$xx,$y+$yy+4,'Discount:'.$AmountDiscount);// Discount
	$pdf->SetFont('Arial','',11);
	$pdf->SetTextColor(0,0,0);
	$pdf->Text($x+120+$xx,$y+$yy,$priceTopay1.' Frw');// Display price
	
	$xx=$xx+0;
	$yy=$yy+9;
	$yy2=$yy2+10;
	$i++;
	
	$pdf->line($x-6,$y+$yy2,$x+160,$y+$yy2);// horizontal line separating the products

}
$pdf->Text($x-3,$y+47,'Customer : ');// Supplier Name
$pdf->SetFont('Arial','B',12);

$pdf->Text($x+15,$y+47,' '.$customerFn.' '.$customerSn.': '.$customerPhone1.'/'.$customerPhone2);// Supplier Name

$pdf->Text($x+90+$xx,$y+$yy+4,'Total Price');// Display Total Prices
$pdf->Text($x+118+$xx,$y+$yy+4,$totPrice.' Frw');// Display total Price


}else {
    echo "File not found!<br>".$bonDeComndId;
}

	$pdf->SetFont('Arial','',11);
		//$pdf->Text($x+2,$y+215,"Names and Signature of Producer");// Singanture of Producer
		//$pdf->Text($x+5,$y+220,"..................................");// Singanture of Producer
		
		$pdf->Text($x+85,$y+215,"Names and Signature of Sales Officer");// Singanture of Sales
		$pdf->SetFont('Arial','B',11);
		$pdf->Text($x+93,$y+220,$empFamilyName." ".$empGivenName);// Singanture of sales
		$pdf->SetFont('Arial','B',11);
			$pdf->Text($x+2,$y+240,"Driver: ");// DRIVER label
		$pdf->Text($x+2,$y+248,'Vehicle: ');// VEHICLE label
			$pdf->Text($x+60,$y+248,'Destination: ');// Destination label
			
			$pdf->SetFont('Arial','',11);
			$pdf->Text($x+20,$y+240,$driver);// DRIVER values
		$pdf->Text($x+20,$y+248,$plateNo);// VEHICLE values
			$pdf->Text($x+85,$y+248,$destination);// Destination values
		
		$dat2=date('d-m-Y');
			
//$pdf->Output('BonDeCommande_'.$bonDeComndId.'_'.$customerFn.$customerSn.'_'.$dat2.'.pdf','D');
$pdf->Output();
ob_end_flush();

?>