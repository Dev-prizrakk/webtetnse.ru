<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * @OA\Schema(
 *     schema="BlogPost",
 *     type="object",
 *     title="BlogPost",
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="title", type="string", example="Пример поста"),
 *     @OA\Property(property="body", type="string", example="Содержимое поста"),
 *     @OA\Property(property="footer", type="string", example="Автор: Алексей"),
 *     @OA\Property(property="views", type="integer", example=15),
 *     @OA\Property(property="created_at", type="string", format="date-time"),
 *     @OA\Property(property="updated_at", type="string", format="date-time")
 * )
 */

class BlogPost extends Model
{
    protected $fillable = [
        'title',
        'body',
        'footer',
        'views',
    ];
}
