<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\klient;

class OrderController extends Controller
{
    public function create()
    {
        $title = 'Добавить новый заказ';
        return view('klient.order', compact('title'));
    }
    public function list()
    {
        $orders = Order::orderBy('created_at', 'desc')->get();
        $title = 'Список Заказов';
        return view('klient.orderlist', compact('orders','title'));
    }


public function store(Request $request)
{
    // Валидация данных
    $validatedData = $request->validate([
        'client_name' => 'required|string|max:255',
        'client_phone' => 'required|string|max:255',
        'client_address' => 'required|string|max:255',
        'carpet_quantity' => 'required|integer',
        'carpet_tariff' => 'required|integer',
        'carpet_area' => 'nullable|numeric',
        'price' => 'nullable|numeric',
    ]);

    // Поиск клиента по номеру телефона
    $client = klient::where('phone', $validatedData['client_phone'])->first();

    // Если клиент существует, обновляем его имя и адрес
    if ($client) {
        $client->name = $validatedData['client_name'];
        $client->adress = $validatedData['client_address'];
        $client->save();
    } else {
        // Иначе создаем нового клиента
        $client = klient::create([
            'name' => $validatedData['client_name'],
            'phone' => $validatedData['client_phone'],
            'adress' => $validatedData['client_address'],
        ]);
    }

    // Создание нового заказа
    $order = new Order();
    $order->client_id = $client->id; // Связываем заказ с клиентом
    $order->carpet_quantity = $validatedData['carpet_quantity'];
    $order->carpet_tariff = $validatedData['carpet_tariff'];
    $order->carpet_area = $validatedData['carpet_area'] ?? null;
    $order->price = $validatedData['price'] ?? null;    
    $order->save();

    return redirect()->route('orderlist')->with('success', 'Заказ успешно создан');
}
public function edit($id)
{ 
    $title = 'Обновит заказ';
    $order = Order::findOrFail($id);
    return view('klient.edit', compact('order', 'title'));
}


public function update(Request $request, Order $order)
{
    // Валидация данных
    $validatedData = $request->validate([
        'carpet_area' => 'nullable|numeric',
        'price' => 'nullable|numeric',
        'status' => 'nullable|numeric',
    ]);

    // Проверяем, какая кнопка была нажата
    if ($request->has('action')) {
        if ($request->action === 'complete_order') {
            // Изменяем статус заказа на 'deactive'
            $order->status = 'deactive';
        }
    }

    // Обновляем остальные поля заказа
    $order->carpet_area = $validatedData['carpet_area'] ?? $order->carpet_area;
    $order->price = $validatedData['price'] ?? $order->price;

    // Сохраняем изменения
    $order->save();

    return redirect()->route('orderlist')->with('success', 'Изменения сохранены успешно');
}

}
