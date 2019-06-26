<?php

namespace App\Modules\Cards\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Filesystem\Filesystem;

/**
 * Class GuideDocumentController
 *
 * @package App\Modules\Guides\Controllers
 */
class CardController extends Controller
{
    public function index() {
        $payload = json_decode((new Filesystem())->get(database_path('data.json')));

        return view('modules::Cards.views.listing',
            [
                'payload' => $payload
            ]);
    }



}