<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RemoveSessionController extends Controller
{
    public function deleteSessionData()
    {
        // Session::forget('todoData');
        // php artisan session:clear
        // return response()->json(['message' => 'Session data has been deleted.']);

        $sessionId = session()->getId();
        $sessionFilePath = storage_path('framework/sessions/') . 'sess_' . $sessionId;
        if (file_exists($sessionFilePath)) {
            unlink($sessionFilePath);
            return response()->json(['message' => 'Session file deleted.']);
        }
        return response()->json(['message' => 'Session file not found.']);
    }

    public function deleteData()
    {
        Todo::truncate();
    }
}
