<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleActionController extends Controller {
    /**
     * Handle the incoming request.
     */
    public function __invoke( Request $request ): string {
        return "I am single action controller";
    }
}
