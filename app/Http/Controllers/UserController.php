<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{

    public function index(): JsonResponse
    {

        $users = User::all();

        return response()->json($users->toArray(), Response::HTTP_OK);

    }

    public function show(User $user): JsonResponse
    {

        //return User::query()->find($user);
        //return User::query()->findOrFail($user);
        return response()->json($user->toArray(), Response::HTTP_OK);
    }

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

    public function update(User $user, Request $request): JsonResponse
    {
        $request->validate(
            [
                'first_name' => ['nullable', 'string', 'max:255'],
                'last_name' => ['nullable', 'string', 'max:255'],
                'document_cpf' => ['nullable', 'string', 'size:11', 'unique:users'],
                'email' => ['nullable', 'string', 'email:rfc,filter', 'max:255', 'unique:users'],
                'password' => ['nullable', 'string', 'min:8'],
            ]
        );

        $user->update($request->all());

        return response()->json($user->refresh()->toArray(), Response::HTTP_OK);
    }

    public function delete(User $user): \Illuminate\Http\Response
    {
        $user->delete();

        return response()->noContent();
    }
}
