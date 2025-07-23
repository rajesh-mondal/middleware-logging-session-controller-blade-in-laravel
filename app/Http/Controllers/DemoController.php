<?php

namespace App\Http\Controllers;

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
}
