@extends('dashboard.admin')

@section('content')
<!-- Card Section -->
<h1 class="max-w-[85rem] px-4 py-2 sm:px-6 lg:px-8 lg:py-3 mx-auto text-2xl font-bold text-center">
    Добро пожаловать <br><span class="text-blue-500 text-3xl uppercase">{{ Auth::user()->name  }}</span> 
</h1>

<div class="max-w-[85rem] px-4 py-3 sm:px-6 lg:px-8 lg:py-4 mx-auto">
    <!-- Grid -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
      <!-- Card -->
      <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
        <div class="p-4 md:p-5">
          <div class="flex items-center gap-x-2">
            <p class="text-xs uppercase tracking-wide text-gray-500">
              Все заказы
            </p>
          </div>
          <div class="mt-1 flex items-center gap-x-2">
            <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-gray-200">
              {{ $totalCount }}
            </h3>
          </div>
        </div>
      </div>
      <!-- End Card -->
      <!-- Card -->
      <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
        <div class="p-4 md:p-5">
          <div class="flex items-center gap-x-2">
            <p class="text-xs uppercase tracking-wide text-gray-500">
              Активные заказы
            </p>
          </div>
          <div class="mt-1 flex items-center gap-x-2">
            <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-gray-200">
              {{ $activeCount }}
            </h3>
          </div>
        </div>
      </div>
      <!-- End Card -->
      <!-- Card -->
      <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
        <div class="p-4 md:p-5">
          <div class="flex items-center gap-x-2">
            <p class="text-xs uppercase tracking-wide text-gray-500">
              Завершенные заказы
            </p>
          </div>
          <div class="mt-1 flex items-center gap-x-2">
            <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-gray-200">
              {{ $completedCount }}
            </h3>
          </div>
        </div>
      </div>
      <!-- End Card -->
      <!-- Card -->
      <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
        <div class="p-4 md:p-5">
          <div class="flex items-center gap-x-2">
            <p class="text-xs uppercase tracking-wide text-gray-500">
              Все клиенты
            </p>
          </div>
          <div class="mt-1 flex items-center gap-x-2">
            <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-gray-200">
              {{ $clientCount }}
            </h3>
          </div>
        </div>
      </div>
      <!-- End Card -->
      <!-- Card -->
      <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
        <div class="p-4 md:p-5">
          <div class="flex items-center gap-x-2">
            <p class="text-xs uppercase tracking-wide text-gray-500">
              Сумма завершенних заказов
            </p>
          </div>
          <div class="mt-1 flex items-center gap-x-2">
            <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-gray-200">
              {{ $completedSum }}с
            </h3>
          </div>
        </div>
      </div>
      <!-- End Card -->
      <!-- Card -->
      <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
        <div class="p-4 md:p-5">
          <div class="flex items-center gap-x-2">
            <p class="text-xs uppercase tracking-wide text-gray-500">
              Плошад стиранные ковров
            </p>
          </div>
          <div class="mt-1 flex items-center gap-x-2">
            <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-gray-200">
              {{ $carpet_area }} кв\м
            </h3>
          </div>
        </div>
      </div>
      <!-- End Card -->
  
    </div>
    <!-- End Grid -->
  </div>
  <!-- End Card Section -->
@endsection