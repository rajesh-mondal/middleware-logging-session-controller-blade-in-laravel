<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller {
    // Request Verfication
    function RequestVerification(): string {
        return "Hello";
    }

    // Request Redirect
    function Redirect1(): string {
        return "Hello1";
    }

    function Redirect2(): string {
        return "Hello2";
    }

    function Route1(): string {
        return "Hello1";
    }

    function Route2(): string {
        return "Hello2";
    }

    function Route3(): string {
        return "Hello3";
    }

    function Route4(): string {
        return "Hello4";
    }

    // Manipulate request headers
    function ManiRequest( Request $request ): array {
        return $request->header();
    }

    //Rate Limit
    function RateLimit( Request $request ): string {
        return "Hello";
    }

}
