<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UnitController extends Controller
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
     *     path="/public/api/v1/unit",
     *     tags={"unit"},
     *     summary="Halaman utama",
     *     description="Menampilkan data unit",
     *     operationId="unit",
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
            'data' => Unit::all(),
        ];
        return response()->json($data, 200);
    }
    /**
     * @OA\Post(
     *     path="/public/api/v1/unit",
     *     tags={"unit"},
     *     summary="Menambah unit",
     *     description="Menambah unit",
     *     operationId="storeUnit",
     *     @OA\Response(
     *         response=200,
     *         description="Success"
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Error Validation",
     *     ),
     *     @OA\RequestBody(
     *         description="Create unit object",
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/Unit")
     *     )
     * )
     */

    public function store(Request $request)
    {
        try {
            $data = [
                'unit' => $request->input('unit'),
                'keterangan' => $request->input('keterangan'),
            ];
            Unit::create($data);
            return response()->json($data, 200);
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return response()->json($th->getMessage(), 400);
        }
    }
}
