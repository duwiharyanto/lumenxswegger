<?php

/**
 * @license Apache 2.0
 */

/**
 * @OA\RequestBody(
 *     request="UserArray",
 *     description="List of user object",
 *     required=true,
 *     @OA\JsonContent(
 *         type="array",
 *         @OA\Items(ref="#/components/schemas/User")
 *     )
 * ),
 * @OA\RequestBody(
 *     request="UnitArray",
 *     description="List of user object",
 *     required=true,
 *     @OA\JsonContent(
 *         type="array",
 *         @OA\Items(ref="#/components/schemas/Unit")
 *     )
 * )
 */
