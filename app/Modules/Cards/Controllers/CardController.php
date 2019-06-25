<?php

namespace App\Modules\Cards\Controllers;

use App\Http\Controllers\Controller;

/**
 * Class GuideDocumentController
 *
 * @package App\Modules\Guides\Controllers
 */
class CardController extends Controller
{
    public function index() {
        return view('modules::Cards.views.listing');
    }



}