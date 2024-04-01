<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Order;
use App\Models\klient;
use Illuminate\Http\Request;

class DahboardController extends Controller
{
    public function dashboard ()
    {
        // Получить количество активных заказов
        $activeCount = Order::where('status', 'active')->count();
        $clientCount = klient::count();
        

        $completedSum = Order::where('status', 'deactive')->sum('price');
        $carpet_area = Order::where('status', 'deactive')->sum('carpet_area');

        // Получить количество завершенных заказов
        $completedCount = Order::where('status', 'deactive')->count();

        // Общее количество заказов
        $totalCount = $activeCount + $completedCount;

        $title = 'Панел управления';
        return view('dashboard', compact('title','activeCount','completedCount','totalCount','clientCount','completedSum','carpet_area'));
    }

    public function userlist ()
    {
        
        $users = User::all();
        $title = 'Список работников';

        return view('dashboard.userlist', compact('title', 'users'));
    }

        public function userdelete($id)
    {
        // Находим пользователя по его идентификатору
        $user = User::find($id);

        // Проверяем, найден ли пользователь
        if ($user) {
            // Если пользователь найден, удаляем его из базы данных
            $user->delete();
            return redirect()->route('userlist')->with('success', 'Пользователь успешно удален');
        } else {
            // Если пользователь не найден, возвращаем ошибку
            return redirect()->route('userslist')->with('error', 'Пользователь не найден');
        }
    }


}
