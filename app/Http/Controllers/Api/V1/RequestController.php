<?php


namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\RequestModel;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/v1/requests",
     *     summary="Получить список всех заявок",
     *     tags={"Requests"},
     *     @OA\Response(
     *         response=200,
     *         description="Список заявок",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Request"))
     *     )
     * )
     */

    public function index()
    {
        return response()->json(RequestModel::latest()->get());
    }

    /**
     * @OA\Get(
     *     path="/api/v1/requests/{id}",
     *     summary="Получить заявку по ID",
     *     tags={"Requests"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID заявки",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Информация о заявке",
     *         @OA\JsonContent(ref="#/components/schemas/Request")
     *     ),
     *     @OA\Response(response=404, description="Заявка не найдена")
     * )
     */

    public function show($id)
    {
        return response()->json(RequestModel::findOrFail($id));
    }

    /**
     * @OA\Post(
     *     path="/api/v1/requests",
     *     summary="Создать новую заявку",
     *     tags={"Requests"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"category","name","phone"},
     *             @OA\Property(property="category", type="string", enum={"estimate","development","callback"}, example="estimate"),
     *             @OA\Property(property="name", type="string", example="Александр"),
     *             @OA\Property(property="phone", type="string", example="+79995553322"),
     *             @OA\Property(property="description", type="string", example="Описание запроса")
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Заявка успешно создана",
     *         @OA\JsonContent(ref="#/components/schemas/Request")
     *     ),
     *     @OA\Response(response=400, description="Ошибка валидации")
     * )
     */

    public function store(Request $request)
    {
        $data = $request->validate([
            'category' => 'required|in:estimate,development,callback',
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:50',
            'description' => 'nullable|string',
        ]);

        $model = RequestModel::create($data);
        return response()->json($model, 201);
    }
    /**
     * @OA\Patch(
     *     path="/api/v1/requests/{id}/status",
     *     summary="Обновить статус заявки",
     *     tags={"Requests"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID заявки",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"status"},
     *             @OA\Property(property="status", type="string", enum={"new","in_progress","review","done"}, example="done")
     *         )
     *     ),
     *     @OA\Response(response=200, description="Статус обновлён"),
     *     @OA\Response(response=404, description="Заявка не найдена")
     * )
     */


    public function updateStatus(Request $request, $id)
    {
        $data = $request->validate([
            'status' => 'required|in:new,in_progress,review,done',
        ]);

        $req = RequestModel::findOrFail($id);
        $req->update(['status' => $data['status']]);

        return response()->json(['message' => 'Статус обновлён', 'request' => $req]);
    }


    /**
     * @OA\Delete(
     *     path="/api/v1/requests/{id}",
     *     summary="Удалить заявку",
     *     tags={"Requests"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID заявки",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=200, description="Заявка удалена"),
     *     @OA\Response(response=404, description="Заявка не найдена")
     * )
     */

    public function destroy($id)
    {
        RequestModel::findOrFail($id)->delete();
        return response()->json(['message' => 'Заявка удалена']);
    }
}
