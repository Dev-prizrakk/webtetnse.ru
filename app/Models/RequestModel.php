<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * @OA\Schema(
 *     schema="Request",
 *     type="object",
 *     title="Request",
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="category", type="string", enum={"estimate","development","callback"}),
 *     @OA\Property(property="name", type="string", example="Иван"),
 *     @OA\Property(property="phone", type="string", example="+79995553322"),
 *     @OA\Property(property="description", type="string", example="Описание заявки"),
 *     @OA\Property(property="status", type="string", enum={"new","in_progress","review","done"}),
 *     @OA\Property(property="created_at", type="string", format="date-time"),
 *     @OA\Property(property="updated_at", type="string", format="date-time")
 * )
 */


class RequestModel extends Model
{
    protected $table = 'requests';

    protected $fillable = [
        'category',
        'name',
        'phone',
        'description',
        'status',
    ];
}
