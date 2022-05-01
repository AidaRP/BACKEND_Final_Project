<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function allUsers()
    {
        Log::info('allUsers()');

        try {

            $users = User::all();
            Log::info('Tasks done');
            return response()->json($users, 200);
        } catch (\Exception $e) {

            Log::error($e->getMessage());
            return response()->json(['message' => 'Something went wrong'], 500);
        }
    }
    public function userByID($id)
    {
        Log::info('userByID()');

        try {

            $user = User::find($id);
            Log::info('Tasks done');
            return response()->json($user, 200);
        } catch (\Exception $e) {

            Log::error($e->getMessage());
            return response()->json(['message' => 'Something went wrong'], 500);
        }
    }
}
