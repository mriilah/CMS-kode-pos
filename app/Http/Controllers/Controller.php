<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    private function getView($viewName)
{
    if (request()->segment(1) == 'amp') {
        if (view()->exists($viewName . '-amp')) {
            $viewName .= '-amp';
        } else {
            abort(404);
        }
    }
    return $viewName;
}
}

