<?php

class CryptoPDF extends TCPDF {

    public $charsPerLine = 26;
    public $numsPerLine = 57;
    public $clueNumber;
    public $currentClues;
    public $currentClue;
    public $currentPage;
    public $piece;
    public $cluesPerPage;
    public $pdfTitle;

    //Page header

    public function Header()
    {
        $this->setCellMargins( 0 );

        $this->setCellPaddings( 40, 0, 0, 0 );
        $this->Image( '../images/logo_crypto.gif', $this->GetX(), $this->GetY() - 14, 38.4, 27.6 );
        $this->MultiCell( 305, 4, 'Treasure Hunt', 'B', 'L', false, 0, '', '', true );

        $this->setCellPaddings( 0, 0, 0, 0 );
        $this->MultiCell( 0, 4, $this->displayCurrentClues() . $this->displayCurrentPages(), 'B', 'R', false, 1, '', '', true );
    }

    public function Footer()
    {
        $cur_y = $this->y;
        $this->SetTextColor( 0, 0, 0 );
        //set style for cell border
        $line_width = 0.85 / $this->k;
        $this->SetLineStyle( array( 'width' => 1, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array( 0, 0, 0 ) ) );
        //print document barcode
        $barcode = $this->getBarcode();
        if ( !empty( $barcode ) ) {
            $this->Ln( $line_width );
            $barcode_width = round( ($this->w - $this->original_lMargin - $this->original_rMargin) / 3 );
            $style = array(
                'position' => $this->rtl ? 'R' : 'L',
                'align' => $this->rtl ? 'R' : 'L',
                'stretch' => false,
                'fitwidth' => true,
                'cellfitalign' => '',
                'border' => false,
                'padding' => 0,
                'fgcolor' => array( 0, 0, 0 ),
                'bgcolor' => false,
                'text' => false
            );
            $this->write1DBarcode( $barcode, 'C128', '', $cur_y + $line_width, '', (($this->footer_margin / 3) - $line_width ), 0.3, $style, '' );
        }
        if ( empty( $this->pagegroups ) ) {
            $pagenumtxt = $this->l['w_page'] . ' ' . $this->getAliasNumPage() . ' / ' . $this->getAliasNbPages();
        }
        else {
            $pagenumtxt = $this->l['w_page'] . ' ' . $this->getPageNumGroupAlias() . ' / ' . $this->getPageGroupAlias();
        }
        $this->SetY( $cur_y );
        //Print page number
        if ( $this->getRTL() ) {
            $this->SetX( $this->original_rMargin );
            $this->Cell( 0, 0, $pagenumtxt, '0', 0, 'L' );
        }
        else {
            $this->SetX( $this->original_lMargin );
            $this->Cell( 0, 0, $this->getAliasRightShift() . $pagenumtxt, '0', 0, 'R' );
        }
    }

    /*
     * clue[0] - location
     * clue[1] - plaintext and cipher text
     * clue[2] - cipher type
     * clue[3] - key 1
     * clue[4] - key 2
     * clue[5] - keys_show
     */

    public function LoadData( $data )
    {
        if( !empty( $data['pdfTitle'] ) ) {
            $this->pdfTitle = $data['pdfTitle'];
        }
        
        if ( !empty( $data['clues'] ) && is_array( $data['clues'] ) ) {

            $this->data = $data;

            foreach ( $this->data['clues'] as $key => $clue ) {

                if ( $this->isCipherNumeric( $clue['2'] ) ) {
                    $this->data['clues'][$key]['cipher_type'] = 'number';
                }
                else {
                    $this->data['clues'][$key]['cipher_type'] = 'letter';
                }

                $method = 'format_' . $this->data['clues'][$key]['cipher_type'] . '_string';

                $this->data['clues'][$key]['clue_parts'] = array( );

                $strings = array( );
                $strings = preg_split( '/<br \/>/i', $clue['1'], -1, PREG_SPLIT_NO_EMPTY );
                
                if ( is_array( $strings ) && count( $strings ) > 0 ) {
                    $i = 0;
                    foreach ( $strings as $stringPiece ) {
                        if ( count( $strings ) > 0 ) {
                            $i++;
                        }
                        
                        // make sure it's not blank
                        if ( isset( $strings[$i] ) && strlen( $strings[$i] ) > 0 ) {
                            $this->data['clues'][$key]['clue_parts'] = array_merge( $this->data['clues'][$key]['clue_parts'], $this->$method( $strings[$i] ) );
                        }

                        $i++;
                    }
                }
                $this->data['clues'][$key]['clue_number'] = $key + 1;
            }
        }
    }

    // TODO: ombine methods together
    private function format_letter_string( $string, $charsPerLine = null )
    {
        $string = $this->processKeyString( $string, 'letter' );
        
        if ( empty( $charsPerLine ) ) {
            $charsPerLine = $this->charsPerLine;
        }

        if ( strlen( $string ) > $charsPerLine ) {

            $numCharacters = strlen( $string );

            $numLoops = round( $numCharacters / $this->charsPerLine );

            $data = array( );

            for ( $i = 0; $i < $numLoops; $i++ ) {
                $tmp_string = substr( trim( $string, "\n\r\t" ), ( $i * $this->charsPerLine ), $this->charsPerLine );
                $tmp_string = preg_replace( "/\n/", " ", $tmp_string );

                $data[] = $tmp_string;
            }
        }
        else if ( strlen( $string ) < $charsPerLine ) {
            $data[] = $string;
        }
        else {
            exit( 'Line: ' . __LINE__ );
        }

        return $data;
    }

    // TODO: fix it so that this doesn't break number sets in half
    private function format_number_string( $string, $numsPerLine = null )
    {
        $string = $this->processKeyString( $string, 'number' );
        
        if ( empty( $numsPerLine ) ) {
            $numsPerLine = $this->numsPerLine;
        }

        if ( strlen( $string ) > $numsPerLine ) {

            $numCharacters = strlen( $string );

            $numLoops = round( $numCharacters / $this->numsPerLine );

            $data = array( );

            for ( $i = 0; $i < $numLoops; $i++ ) {
                $tmp_string = substr( trim( $string, "\n\r\t" ), ( $i * $this->numsPerLine ), $this->numsPerLine );
                $data[] = $tmp_string;
            }
        }
        else if ( $string < $numsPerLine ) {
            $data[] = $string;
        }
        else {
            exit;
        }

        return $data;
    }

    private function processKeyString( $str, $keyType )
    {
        switch( $keyType ) {
            case "number":
                $length = 3;
                break;
            case "letter":
                $length = 1;
                break;
        }
        
        $str = preg_replace( "/&#0160;&#0160;/", str_pad("", $length, " "), $str );
        $str = preg_replace( "/&#0160;/", " ", $str );
        
        return $str;
    }

    // Colored table
    public function ColoredTable()
    {
        // start cover page
        $this->setPrintHeader(false);
        $this->setPrintFooter(false);
        
        $this->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        // set font
        $this->SetFont( 'times', '', 12 );
        
        $this->addPage( 'P', 'LETTER' );
        $html = $this->summaryPage( array( 'clues' => $this->data['clues'] ) );

        $this->writeHTML( $html, true, false, true, false, '' );
        $this->SetAutoPageBreak(FALSE, PDF_MARGIN_BOTTOM);
        
        $this->setPrintHeader(true);
        $this->setPrintFooter(true);
        
        
        // start clues
        $hasRotated = false;
        
        // set font
        $this->SetFont( 'courier', '', 18 );
        //$this->SetFontSpacing( '8.5' );

        // Colors, line width and bold font
        $this->SetFillColor( 255, 0, 0 );
        $this->SetTextColor( 255 );
        $this->SetLineWidth( 0.3 );
        $this->SetFont( '', 'B' );

        // Header
        $w = array( 0 );

        // Color and font restoration
        $this->SetFillColor( 224, 235, 255 );
        $this->SetTextColor( 0 );

        // Data
        $currentNumberOfClueParts = 1;
        $clueNumber = 1;
        $margin = 0;
        $orientation = 'P';
        $previousOrientation = '';
        $pageType = 'LETTER';
        $this->currentClues = array( );
        $this->currentPage = 1;

        for ( $i = 0; $i < count( $this->data['clues'] ); $i++ ) {
            $this->currentCluesPosition = $i;
            $this->currentClue = $this->data['clues'][$i];
            $currentLineOfClue = 1;
            $this->clueNumber = $this->currentClue['clue_number'];
            $vigenereTotalCharCount = 0;
            $remainderKeyword = '';
            $clueType = $this->currentClue['2'];

            // determine orientation of page`
            if ( $this->isCipherNumeric( $clueType ) ) {
                $orientation = 'L';
                $labelCellWidth = 338;
                $cellHeight = 280;
                $landscapePerPage = 3;
            }
            else {
                $orientation = 'P';
                $labelCellWidth = 255;
                $cellHeight = 215;

                if ( $clueType == 'Vigenere' ) {
                    $portraitPerPage = 4;
                }
                else {
                    $portraitPerPage = 5;
                }
            }

            // set number of clues per page
            $this->cluesPerPage = $orientation == 'P' ? $portraitPerPage : $landscapePerPage;

            if ( !empty( $this->currentClues ) && count( $this->currentClues ) > 0 ) {
                $this->cluesPerPage = $this->cluesPerPage - ( count( $this->currentClues ) - 1 );
            }

            // see if the next clue will fit on the same page without splitting up the clue
            if ( $currentNumberOfClueParts == 1 || ( $currentNumberOfClueParts + count( $this->currentClue['clue_parts'] ) ) > $this->cluesPerPage || ( strlen( $previousOrientation ) > 0 && $previousOrientation != $orientation ) ) {
                $currentNumberOfClueParts = 1;
                $totalParts = 1;

                // we don't set current clues through the first time
                if ( $i > 0 ) {
                    // reset clues header
                    $this->currentClues = array( );
                    $this->currentClues[$this->clueNumber] = $this->clueNumber;
                }

                // set clue on this page
                $this->AddPage( $orientation, $pageType );
            }

            // we're putting multiple clues together
            else {
                $topBorder = array( );
                $topBorder['T'] = array( 'width' => 3, 'dash' => 0 );
                $topBorder['B'] = array( 'width' => 3, 'dash' => 0 );

                $this->currentClues[$this->clueNumber] = $this->clueNumber;
                $this->setCellMargins( 0, 30, 0, 0 );
                $this->SetCellPadding( 0 );
                $this->Cell( 0, 1, 'Clue ' . $this->currentClue['clue_number'], $topBorder, 1, 'C', false, null, 1, false, 'C', 'B' );
            }
            
            foreach ( $this->currentClue['clue_parts'] as $this->piece => $string ) {
                $string = trim( $string );
                // cipher
                $this->SetFont( 'courier', '', 15 );
                $this->SetFontSpacing( 0 );
                $this->SetCellPadding( 0 );

                $this->setCellMargins( 0, $margin );
                $this->MultiCell( 295, 4, $clueType . ' Cipher' . $this->displayKeys( $this->currentClue ), 0, 'L', false, 0, '', '', true );
                $this->MultiCell( 0, 4, 'Clue ' . $this->clueNumber . ', Line ' . $currentLineOfClue, 0, 'R', false, 1, '', '', true );

                // Key cell
                $this->setCellPaddings( 1, 275, 1, 1 );
                $this->SetFont( 'courier', '', 18 );
                //$this->SetFontSpacing( '8.5' );

                // Vigenere formatting
                if ( $clueType == 'Vigenere' ) {
                    $this->setCellPaddings( 1, 135, 1, 1 );

                    if ( $currentLineOfClue > 1 ) {
                        if ( $vigenereTotalCharCount > 0 ) {
                            $mod = $vigenereTotalCharCount % strlen( $remainderKeyword . $this->currentClue['3'] );
                            $remainderKeyword = substr( $this->currentClue['3'], $keywordCount - $mod );

                            // if the remainder keyword is exactly as the keyword the dont prepend it
                            if ( $remainderKeyword == $this->currentClue['3'] ) {
                                $remainderKeyword = '';
                            }
                        }
                    }

                    // keep track of characters
                    $vigenereTotalCharCount = $vigenereTotalCharCount + strlen( str_replace( " ", '', $string ) );

                    $this->Cell( 0, 100, $this->displayVigenereKeyword( $remainderKeyword . $this->currentClue['3'], $string, $remainderKeyword ), 0, 1, 'B', false, null, 1, false, 'C', 'B' );
                }

                if ( $currentNumberOfClueParts >= $this->cluesPerPage && $totalParts < count( $this->currentClue['clue_parts'] ) ) {
                    $currentNumberOfClueParts = 1;
                    $this->setCellPaddings( 1, 1, 1, 30 );
                    
                    $this->Cell( 0, $cellHeight, $string, 0, 1, 'B', false, null, 0, false, 'C', 'B' );

                    $this->AddPage( $orientation, $pageType );
                    $margin = 0;
                }
                else {
                    if ( $clueType == 'Vigenere' ) {
                        if ( $currentNumberOfClueParts == 1 ) {
                            $cellHeight = 100;
                        }
                        else {
                            $cellHeight = 80;
                        }
                    }

                    // create cut line
                    $this->setCellPaddings( 1, 1, 1, 30 );
                    $this->Cell( 0, $cellHeight, $string, array( 'B' => array( 'dash' => 1, 'width' => 1 ) ), 1, 'B', false, null, 1, false, 'C', 'B' );
                    $this->Image( '../images/icon-scissors.jpg', $this->GetX() - 20, $this->GetY() - 9, 20, 20 );
                    $currentNumberOfClueParts++;
                    $margin = 10;
                }

                $totalParts++;
                $currentLineOfClue++;
                // reset it so that the top cell doesn't have any border
                $topBorder = 0;
                $previousOrientation = $orientation;
            }
        }
    }

    private function isCipherNumeric( $cipher )
    {
        switch ( $cipher ) {

            case "Additive":
            case "Letter-&gt;Number":
                //case "Affine":
                return true;
                break;
            case "Vigenere":
            default:
                return false;
                break;
        }
    }

    private function displayKeys( $clue )
    {
        return displayKeys( $clue );
    }

    private function displayVigenereKeyword( $keyword, $sentence )
    {

        $keywordLength = strlen( $keyword );
        $keyword = str_split( $keyword );
        $sentence = str_split( $sentence );
        $keywordTmp = '';

        if ( count( $sentence ) > 0 ) {
            $i = 0;
            foreach ( $sentence as $letter ) {
                //if ( $letter != " " ) {
                if ( preg_match( '/[a-z0-9]/i', $letter ) ) {
                    $keywordTmp .= $keyword[$i];
                    $i++;
                }
                else {
                    $keywordTmp .= " ";
                }
            }
        }

        return $keywordTmp;
    }

    private function getSubString( $string, $length )
    {
        if ( $length >= strlen( $string ) ) {
            return $string;
        }

        $tmpString = str_replace( " ", "", substr( $string, 0, $length ) );

        if ( strlen( $tmpString ) < $length ) {
            return $this->getSubString( $string, ( $length + 1 ) );
        }
        else {
            return substr( $string, 0, $length );
        }
    }

    public function processPdf( $fileName )
    {

        // We'll be outputting a PDF
        header( 'Content-type: application/pdf' );

        // It will be called downloaded.pdf
        header( 'Content-Disposition: attachment; filename="clues.pdf"' );

        // The PDF source is in original.pdf
        readfile( '../pdfs/' . $fileName . '.pdf' );
    }

    private function calculateVignereKeyword( $keyword, $totalLength )
    {
        $keyLength = strlen( $keyword );
    }

    function displayKeyword( $keyword, $sentence )
    {
        $keywordLength = strlen( $keyword );
        $keyword = str_split( $keyword );
        $sentence = str_split( $sentence );
        $keywordTmp = '';
        if ( count( $sentence ) > 0 ) {
            $i = 0;
            foreach ( $sentence as $letter ) {
                if ( $letter != " " ) {
                    $keywordTmp .= $keyword[$i];
                    $i++;
                }
                else {
                    $keywordTmp .= " ";
                }
            }
        }

        return $keywordTmp;
    }

    function displayCurrentClues()
    {
        $lastOrientation = '';
        $counter = 0;
        $remainderSpaces = 1;
        $numberOfClueParts = 0;

        if ( !empty( $this->currentCluesPosition ) && is_numeric( $this->currentCluesPosition ) ) {
            
            // if there is room, lets seeif next clue fits
            for ( $i = $this->currentCluesPosition; $remainderSpaces > 0; $i++ ) {
                // if there arent anymore clues break out
                if ( empty( $this->data['clues'][$i]['clue_parts'] ) ) {
                    break;
                }

                $clueType = $this->data['clues'][$i]['2'];
                $orientation = $this->isCipherNumeric( $clueType ) ? 'L' : 'P';

                // first time through set last orientation to the same as orientation
                if ( $counter == 0 ) {
                    $lastOrientation = $orientation;
                }

                $numberOfClueParts += count( $this->data['clues'][$i]['clue_parts'] );
                $clueNumber = $this->data['clues'][$i]['clue_number'];

                if ( ( $numberOfClueParts ) <= $this->cluesPerPage && ( strlen( $lastOrientation ) > 0 && $lastOrientation == $orientation ) ) {
                    $currentClues[$clueNumber] = $clueNumber;

                    $maxPages = $this->calcMaxPages( $numberOfClueParts );
                    $remainderSpaces = $this->cluesPerPage - ( $numberOfClueParts % $maxPages );
                 
                    if ( !empty( $currentClues ) && count( $currentClues ) > 0 ) {
                        $remainderSpaces = $remainderSpaces - ( count( $currentClues ) - 1 );
                    }
                }
                else {
                    break;
                }

                $lastOrientation = $orientation;
                $counter++;
            }
        }

        if ( !empty( $currentClues ) ) {
            $string = 'Clue ' . implode( ', ', $currentClues );
        }
        else {
            $string = '';
        }

        return $string;
    }

    function displayCurrentPages()
    {
        // if we are in the middle of the document
        if ( isset( $this->currentClueNumber ) && isset( $this->data['clues'][$this->currentClueNumber] ) ) {
            $maxPages = $this->calcMaxPages( $this->data['clues'][$this->currentClueNumber]['clue_parts'] );

            $string = ' (Page 1 of ' . $maxPages . ')';
        }
        // setup for the first page
        else {
            if ( isset( $this->data['clues'][0]['clue_parts'] ) && count( $this->data['clues'][0]['clue_parts'] ) < $this->cluesPerPage ) {
                $string = ' (Page 1 of 1)';
            }
            else if ( isset( $this->data['clues'][0]['clue_parts'] ) && count( $this->data['clues'][0]['clue_parts'] ) > $this->cluesPerPage ) {
                $maxPages = $this->calcMaxPages( $this->data['clues'][0]['clue_parts'] );

                $string = ' (Page 1 of ' . $maxPages . ')';
            }
        }


        return $string;
    }

    function calcMaxPages( $clueParts )
    {
        if( !empty( $clueParts ) && is_array( $clueParts ) && $this->cluesPerPage > 0   ) {
            return ceil( count( $clueParts ) / $this->cluesPerPage );
        }
        else {
            return 1;
        }
    }

    function summaryPage( $clues )
    {
        return load_view( 'cover', $clues );
    }

}