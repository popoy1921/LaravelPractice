<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    /**
     * This method is used for printing a string in practicing for routes 
     * @param string|null $sString1
     * @param string|null $sString2
     * 
     * @return string
     */
    public function showSamplePage(string $sString1 = null, string $sString2 = null) : string
    {
        $sParametersString = '';
        $sParametersString .= is_null($sString1) === true ? '' : $sString1;
        $sParametersString .= is_null($sString2) === true ? '' : '- ' . $sString2;
        return 'This is a sample page. ' . $sParametersString;
    }

    /**
     * @param int|null $iProductId      product id of product to be presented
     * 
     * @return View                     page for Product Form
     */
    public function showProductForm (?int $iProductId = null) : View
    {
        // default is for update
        $aPageDetails = array();
        $sTitle = 'Update Product';
        $sSubmitButtonPage = 'Update Product';

        // create form
        if (is_null($iProductId) === true) {
            $sTitle = 'Create Product';
            $sSubmitButtonPage = 'Add Product';
        }

        $aPageDetails['sTitle'] = $sTitle;
        $aPageDetails['sSubmitButtonPage'] = $sSubmitButtonPage;
        return view('productPage', $aPageDetails);
    }
}
