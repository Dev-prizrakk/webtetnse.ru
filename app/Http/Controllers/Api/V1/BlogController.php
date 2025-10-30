<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/v1/blog",
     *     summary="Получить список всех постов блога",
     *     tags={"Blog"},
     *     @OA\Response(
     *         response=200,
     *         description="Список постов",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/BlogPost"))
     *     )
     * )
     */

    public function index()
    {
        return response()->json(BlogPost::latest()->get());
    }
    /**
     * @OA\Get(
     *     path="/api/v1/blog/{id}",
     *     summary="Получить пост по ID и увеличить просмотры",
     *     tags={"Blog"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID поста",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Информация о посте",
     *         @OA\JsonContent(ref="#/components/schemas/BlogPost")
     *     ),
     *     @OA\Response(response=404, description="Пост не найден")
     * )
     */

    public function show($id)
    {
        $post = BlogPost::findOrFail($id);
        $post->increment('views');
        return response()->json($post);
    }
    /**
     * @OA\Post(
     *     path="/api/v1/blog",
     *     summary="Создать новый пост",
     *     tags={"Blog"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"title","body"},
     *             @OA\Property(property="title", type="string", example="Новый пост"),
     *             @OA\Property(property="body", type="string", example="Контент поста"),
     *             @OA\Property(property="footer", type="string", example="Автор: Алексей")
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Пост успешно создан",
     *         @OA\JsonContent(ref="#/components/schemas/BlogPost")
     *     ),
     *     @OA\Response(response=400, description="Ошибка валидации")
     * )
     */

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'footer' => 'nullable|string|max:255',
        ]);

        $post = BlogPost::create($data);
        return response()->json($post, 201);
    }

    /**
     * @OA\Delete(
     *     path="/api/v1/blog/{id}",
     *     summary="Удалить пост",
     *     tags={"Blog"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID поста",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=200, description="Пост удалён"),
     *     @OA\Response(response=404, description="Пост не найден")
     * )
     */

    public function destroy($id)
    {
        BlogPost::findOrFail($id)->delete();
        return response()->json(['message' => 'Пост удалён']);
    }

}
