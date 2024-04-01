<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Contracts\Support\Renderable;
use App\Models\klient;
class SmsController extends Controller

{
    public function smsSender(Request $request, $phone, $message)
    {
        $config = [
            'login' => 'safinashop',
            'hash' => '66ec5ab12bc8fb392591548c8b82bd13',
            'sender' => 'SafinaClean',
            'server' => 'https://api.osonsms.com/sendsms_v1.php',
        ];

        $dlm = ";";
        $txn_id = uniqid();
        $str_hash = hash('sha256', $txn_id.$dlm.$config['login'].$dlm.$config['sender'].$dlm.$phone.$dlm.$config['hash']);

        $params = [
            "from" => $config['sender'],
            "phone_number" => $phone,
            "msg" => $message,
            "str_hash" => $str_hash,
            "txn_id" => $txn_id,
            "login" => $config['login'],
        ];

        $response = Http::get($config['server'], $params);

        if ($response->successful()) {
            $data = $response->json();
            return "SMS успешно отправлено. ID сообщения: " . $data['msg_id'];
        } else {
            return "Произошла ошибка при отправке SMS. Подробности: " . $response->body();
        }
    }
    public function index()
    {
        $clients = klient::all();
    
        // Массивы для хранения номеров телефонов и имен клиентов
        $phones = [];
        $clientNames = [];
    
        // Извлекаем номера телефонов и имена из каждого клиента
        foreach ($clients as $client) {
            $phones[] = $client->phone; // Предположим, что у каждого клиента есть атрибут 'phone' с номером телефона
            $clientNames[] = $client->name; // Предположим, что у каждого клиента есть атрибут 'name' с именем
        }
    
        // Преобразуем массивы в JSON
        $phonesJson = json_encode($phones);
        $clientNamesJson = json_encode($clientNames);
    
        // Передаем JSON на фронтенд
        return view('klient.sms')->with('phonesJson', $phonesJson)->with('clientNamesJson', $clientNamesJson)->with('clients', $clients);
    }
    

    public function sendSms(Request $request)
    {
        $config = [
            'login' => 'safinashop',
            'hash' => '66ec5ab12bc8fb392591548c8b82bd13',
            'sender' => 'SafinaClean',
            'server' => 'https://api.osonsms.com/sendsms_v1.php',
        ];

        $dlm = ";";
        $phone_number = $request->input('phone');
        $message = $request->input('message');
        $txn_id = uniqid();
        $str_hash = hash('sha256', $txn_id.$dlm.$config['login'].$dlm.$config['sender'].$dlm.$phone_number.$dlm.$config['hash']);

        $params = [
            "from" => $config['sender'],
            "phone_number" => $phone_number,
            "msg" => $message,
            "str_hash" => $str_hash,
            "txn_id" => $txn_id,
            "login" => $config['login'],
        ];

        $response = Http::get($config['server'], $params);

        if ($response->successful()) {
            $data = $response->json();
            return "SMS успешно отправлено. ID сообщения: " . $data['msg_id'];
        } else {
            return "Произошла ошибка при отправке SMS. Подробности: " . $response->body();
        }
    }

    public function sendSMSToClients(Request $request)
    {
        $config = [
            'login' => 'safinashop',
            'hash' => '66ec5ab12bc8fb392591548c8b82bd13',
            'sender' => 'SafinaClean',
            'server' => 'https://api.osonsms.com/sendsms_v1.php',
        ];
    
        $dlm = ";";
        $message = $request->input('message');
    
        // Получаем все номера телефонов клиентов
        $phones = klient::get()->pluck('phone');
    
        // Отправляем сообщение на каждый номер
        foreach ($phones as $phone) {
            $txn_id = uniqid();
            $str_hash = hash('sha256', $txn_id.$dlm.$config['login'].$dlm.$config['sender'].$dlm.$config['hash']);
    
            $params = [
                "from" => $config['sender'],
                "phone_number" => $phone,
                "msg" => $message,
                "str_hash" => $str_hash,
                "txn_id" => $txn_id,
                "login" => $config['login'],
            ];
    
            $response = Http::get($config['server'], $params);
    
            if ($response->successful()) {
                $data = $response->json();
                // Здесь можно что-то делать с ID сообщения, если это нужно
            } else {
                // Обработка ошибок
                return "Произошла ошибка при отправке SMS на номер $phone. Подробности: " . $response->body();
            }
        }
    
        return "SMS успешно отправлены на всех клиентов";
    }

}
