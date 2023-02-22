<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RemoveSessionController extends Controller
{
    public function deleteSessionData()
    {
        Session::forget('todoData');
        return response()->json(['message' => 'Session data has been deleted.']);
    }
}
