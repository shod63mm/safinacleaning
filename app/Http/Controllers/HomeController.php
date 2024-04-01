<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\klient;
use App\Http\Controllers\SmsController;

class HomeController extends Controller
{

    public function welcome()
    {
        return view('safina');
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
    
    $clientName = $request->input('client_name');

    // Получаем ID заказа
    $orderId = $order->id;

    // Формируем сообщение
    $message = "Привет $clientName! Ваш заказ №$orderId получен! Скоро свяжемся с вами";
    $phone = $request->input('client_phone');


    // Вызываем метод smsSender из SmsController
    $smsController = new SmsController();
    $response = $smsController->smsSender($request, $phone, $message);

    $newMessage = "У вас новый заказ";
    $newPhone = "907230333"; // Номер получателя второго SMS

    $response2 = $smsController->smsSender($request, $newPhone, $newMessage);

    return redirect()->route('welcome')->with('success', 'Заказ успешно создан');
}
}
