<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * @OA\Get(
     *     path="/public/api/v1/user",
     *     tags={"user"},
     *     summary="Halaman utama",
     *     description="Menampilkan data user",
     *     operationId="user",
     *     @OA\Response(
     *         response="default",
     *         description="successful operation"
     *     )
     * )
     */
    public function index(Request $request)
    {
        $data = [
            'message' => 'success',
            'data' => User::all(),
        ];
        return response()->json($data, 200);
    }
    /**
     * @OA\Get(
     *     path="/public/api/v1/user/{id}",
     *     tags={"user"},
     *     summary="Menampilkan data berdasarkan id",
     *     description="Menampilkan data user",
     *     operationId="showUser",
     *     @OA\Parameter(
     *          name="id",
     *          description="Id User",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="number"
     *          )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation"
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="bad request",
     *     )
     * )
     */
    public function show($id)
    {
        try {
            $data = [
                'message' => 'success',
                'data' => User::where('id', $id)->firstOrFail(),
            ];
            return response()->json($data, 200);

        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return response()->json('data tidak ditemukan', 400);
        }

    }
    /**
     * @OA\Get(
     *     path="/public/api/v1/user-cari",
     *     tags={"user"},
     *     summary="Mencari data berdasarkan nama",
     *     description="Menampilkan data user",
     *     operationId="searchUser",
     *     @OA\Parameter(
     *          name="nama",
     *          description="Nama user",
     *          required=false,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation"
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="bad request",
     *     )
     * )
     */

    public function search(Request $request)
    {
        try {
            $nama = $request->input('nama');
            $data = [
                'message' => 'success',
                'data' => User::where('name', 'like', "%$nama%")->get(),
            ];
            return response()->json($data, 200);

        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return response()->json($th->getMessage(), 400);
        }

    }
    /**
     * @OA\Post(
     *     path="/public/api/v1/user",
     *     tags={"user"},
     *     summary="Menambah user",
     *     description="Menambah user",
     *     operationId="storeUser",
     *     @OA\Response(
     *         response=200,
     *         description="successful operation"
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Error Validation",
     *     ),
     *     @OA\RequestBody(
     *         description="Create user object",
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/User")
     *     )
     * )
     */

    public function store(Request $request)
    {
        try {
            $data = [
                'name' => $request->input('name'),
                'password' => Hash::make($request->input('password')),
                'email' => $request->input('email'),
            ];
            User::create($data);
            return response()->json($data, 200);
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return response()->json($th->getMessage(), 400);
        }
    }
    /**
     * @OA\Put(
     *     path="/public/api/v1/user/{id}",
     *     tags={"user"},
     *     summary="Update data user",
     *     description="Update data user",
     *     operationId="updateUser",
     *     @OA\Parameter(
     *          name="id",
     *          description="ID user",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="string"
     *          )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation"
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Error Validation",
     *     ),
     *     @OA\RequestBody(
     *         description="Create user object",
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/User")
     *     )
     * )
     */

    public function update(Request $request, $id)
    {
        try {
            $data = [
                'name' => $request->input('name'),
                'password' => Hash::make($request->input('password')),
                'email' => $request->input('email'),
            ];
            User::where('id', $id)->update($data);
            return response()->json($data, 200);

        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return response()->json($th->getMessage(), 400);
        }
    }
    /**
     * @OA\Delete(
     *     path="/public/api/v1/user/{id}",
     *     tags={"user"},
     *     summary="Hapus data berdasarkan id",
     *     description="Hapus data user",
     *     operationId="deleteUser",
     *     @OA\Parameter(
     *          name="id",
     *          description="Id User",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="number"
     *          )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation"
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="bad request",
     *     )
     * )
     */

    public function delete($id)
    {
        try {
            User::where('id', $id)->delete();
            return response()->json('success', 200);

        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return response()->json($th->getMessage(), 400);
        }

    }
}
