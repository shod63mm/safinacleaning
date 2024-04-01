<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\klient;

class KlientController extends Controller
{
    public function register()
    {
        $title = 'Регистрация клиентов'; // замените => на =
        return view('klient.register', compact('title')); // уберите $ перед 'title'
    }
    
    public function registerPost(Request $request)
    {
        $klient = Klient::where('phone', $request->phone)->first();
    
        if ($klient) {
            // Если клиент с таким номером телефона уже существует, обновляем его имя и адрес
            $klient->name = $request->name;
            $klient->adress = $request->adress;
            $klient->save();
            $message = 'Информация о клиенте успешно обновлена!';
        } else {
            // Если клиент с таким номером телефона не существует, создаем нового клиента
            $klient = new Klient();
            $klient->name = $request->name;
            $klient->phone = $request->phone;
            $klient->adress = $request->adress;
            $klient->save();
            $message = 'Клиент успешно зарегистрирован!';
        }
    
        return back()->with('success', $message);
    }

    public function klientlist ()
    {
        
        $klients = klient::all();
        $title = 'Список клиентов';

        return view('klient.list', compact('title', 'klients'));
    }

    public function klientlistdelete($id)
{
    // Находим пользователя по его идентификатору
    $klient = klient::find($id);

    // Проверяем, найден ли пользователь
    if ($klient) {
        // Если пользователь найден, удаляем его из базы данных
        $klient->delete();
        return redirect()->route('klientlist')->with('success', 'Пользователь успешно удален');
    } else {
        // Если пользователь не найден, возвращаем ошибку
        return redirect()->route('klientlist')->with('error', 'Пользователь не найден');
    }
}
}
