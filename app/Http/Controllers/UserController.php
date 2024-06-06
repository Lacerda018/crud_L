<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $request->validate(
            [
                'first_name' => ['required', 'string', 'max:255'],
                'last_name' => ['required', 'string', 'max:255'],
                'document_cpf' => ['required', 'string', 'size:11', 'unique:users'],
                'email' => ['required', 'string', 'email:rfc,filter', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8'],
            ]
        );

       $user = User::query()->create($request->all());

       return response()->json($user->toArray(), Response::HTTP_CREATED);
    }
}
