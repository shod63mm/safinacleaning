
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @livewireStyles

    <title>{{ $title ?? 'Page Title' }}</title>
</head>
<body class="container mx-auto h-[100vh] place-content-center bg-blue-700">

          <main class="w-full max-w-md mx-auto p-6">
            <div class="mt-7 bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 dark:border-gray-700">
              <div class="p-4 sm:p-7">
                <div class="text-center">
                  <img src="{{ asset('images/chistiydom-zayavka.png') }}" alt="" class="w-[70%] mx-auto">
                  <h1 class="mt-4 text-center text-3xl font-bold text-blue-700">Добавить новый заказ</h1>
                </div>
      
                <div class="mt-5">
                    @if(Session::has('success'))
                    <div class="bg-teal-50 border-t-2 border-teal-500 rounded-lg p-4 dark:bg-teal-800/30" role="alert">
                        <div class="flex">
                          <div class="flex-shrink-0">
                            <!-- Icon -->
                            <span class="inline-flex justify-center items-center size-8 rounded-full border-4 border-teal-100 bg-teal-200 text-teal-800 dark:border-teal-900 dark:bg-teal-800 dark:text-teal-400">
                              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"/><path d="m9 12 2 2 4-4"/></svg>
                            </span>
                            <!-- End Icon -->
                          </div>
                          <div class="ms-3">
                            <h3 class="text-gray-800 font-semibold dark:text-white">
                              Successfully updated.
                            </h3>
                            <p class="text-sm text-gray-700 dark:text-gray-400">
                              {{ Session::get('success') }}
                            </p>
                          </div>
                        </div>
                      </div>
                    @endif


                  <!-- Form -->
                  <form action="{{ route('orders.store') }}" method="POST" class="mt-5">
                    @csrf
                    <div class="grid gap-y-4">
                      <!-- Form Group -->
                      <div>
                        <label for="client_name" class="block text-sm mb-1 dark:text-white">Имя клиента:</label>
                        <div class="relative">
                          <input type="text" id="client_name" name="client_name" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" required aria-describedby="name-error">
                      </div>
                      <!-- End Form Group -->
      
                      <!-- Form Group -->
                      <div>
                        <label for="client_phone" class="block text-sm mb-1 dark:text-white">Телефон клиента:</label>
                        <div class="relative">
                          <input type="number" id="client_phone" name="client_phone" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" required aria-describedby="email-error">
                      </div>
                      <!-- End Form Group -->

      
                      <!-- Form Group -->
                      <div>
                        <label for="client_address" class="block text-sm mb-1 dark:text-white">Адрес клиента:</label>
                        <div class="relative">
                          <input type="text" id="client_address" name="client_address" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" required aria-describedby="password-error">
                      </div>
                      <!-- End Form Group -->
      
                      <!-- Form Group -->
                      <div>
                        <label for="carpet_quantity" class="block text-sm mb-1 dark:text-white">Количество ковров:</label>
                        <div class="relative">
                          <input type="number" id="carpet_quantity" name="carpet_quantity" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" required aria-describedby="password-error">
                      </div>
                      <!-- End Form Group -->

                      <div class="">
                        <label for="tariff" class="block text-sm mb-1 dark:text-white">Роль</label>
                        <div class="relative">
                            <select id="carpet_tariff" name="carpet_tariff" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" required aria-describedby="rolle-error">
                                <option value="" disabled selected>Вибирите тариф</option>
                                <option value="10">Стандарт (10 с)</option>
                                <option value="12">Премиум (12 с)</option>
                                <option value="15">Люкс (15 с)</option>
                            </select>
                        </div>
                    </div>

      
      
                      <button class="mt-3 w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">Добавить</button>
                    </div>
                  </form>
                  <!-- End Form -->
                  <div class="w-full mt-2 text-center">
                    <a href="{{ route('orderlist') }}" class="text-blue-700"> Список заказов</a>
                  </div>
                </div>
              </div>
            </div>
          </main>


</body>
</html>