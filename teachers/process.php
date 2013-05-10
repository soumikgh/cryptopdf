<?php

require '../common/header.php';

$action = !empty( $_REQUEST['action'] ) ? $_REQUEST['action'] : '';

switch ( $action ) {
	case "process":
		/* html2 pdf
		  $pdf = new LettersPortrait();

		  echo $pdf->processClues( $_POST );
		 */

		
		$treasureHuntName = 'Treasure Hunt Name';
		$clueName = 'Clue 1';
// create new PDF document
		$pdf = new CryptoPDF( PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false );

// set document information
//$pdf->SetCreator(PDF_CREATOR);
//$pdf->SetAuthor('Nicola Asuni');
//$pdf->SetTitle('TCPDF Example 011');
//$pdf->SetSubject('TCPDF Tutorial');
//$pdf->SetKeywords('TCPDF, PDF, example, test, guide');
//
// set default header data
		$pdf->SetHeaderData( PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, str_pad( $treasureHuntName, ( 64 - strlen( $clueName ) ), ' ' ) . $pdf->clueNumber );

// set header and footer fonts
		$pdf->setHeaderFont( Array( PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN ) );
		$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
// set default monospaced font
//$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
//
        //set margins
		$pdf->SetMargins( '53.999999999999', '65.999999999999', '53.999999999999' );

		$pdf->SetHeaderMargin( 35 );
		$pdf->SetFooterMargin( 20 );

		//set auto page breaks
		$pdf->SetAutoPageBreak( false );

		//set image scale factor
		$pdf->setImageScale( PDF_IMAGE_SCALE_RATIO );

		//set some language-dependent strings
		$pdf->setLanguageArray( $l );

        if( get_magic_quotes_gpc() || get_magic_quotes_runtime() ) {
            $data = stripslashes_deep( $_POST );
        }
        else {
            $data = $_POST;
        }

        $pdf->LoadData( $data );
        
        // print colored table
		$pdf->ColoredTable();

        $fileName =  session_id() . uniqid();
        
		$pdf->Output( dirname( dirname( __FILE__) ) . '/pdfs/' . $fileName .'.pdf', 'F' );

        echo $fileName;
		break;
	case "download":
		$pdf = new CryptoPDF();

		$pdf->processPdf( $_REQUEST['fileName'] );
        exit;
		break;
}