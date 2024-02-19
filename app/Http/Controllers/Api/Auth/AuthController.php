<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->get()->first();
        if ($user != null) {
            if (Hash::check($request->password, $user->password)) {
                return response()->json([
                    'user' => $user,
                    'token' => $user->createToken('API TOKEN')->plainTextToken,
                ], 200);
            } else {
                return response()->json([
                    'warning' => 'parolda xatolik bor',
                ]);
            }
        } else {
            return response()->json([
                'warning' => 'Emailda xatolik bor',
            ]);
        }
    }

    public function logout()
    {
        $user = auth()->user();
        $user->tokens()->delete();

        return response()->json([
            'success' => 'siz profildan chiqdingiz',
        ]);
    }
}
