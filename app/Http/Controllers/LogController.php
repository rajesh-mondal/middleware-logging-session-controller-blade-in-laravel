<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LogController extends Controller {
    function LogAction( Request $request ): int {
        $num1 = $request->num1;
        $num2 = $request->num2;
        $sum = $num1 + $num2;

        Log::info( $sum );
        Log::emergency( $sum );
        Log::alert( $sum );
        Log::critical( $sum );
        Log::error( $sum );
        Log::warning( $sum );
        Log::notice( $sum );
        Log::debug( $sum );

        return $sum;
    }
}
