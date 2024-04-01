<!-- Hire Us -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Grid -->
    <div class="grid md:grid-cols-2 items-center gap-12">
      <div>
        <h1 class="text-3xl font-bold text-gray-800 sm:text-4xl lg:text-5xl lg:leading-tight dark:text-white">
          Заказ #: 00{{ $order->id }}
        </h1>
        <p class="mt-1 md:text-lg text-gray-800 dark:text-gray-200">
            При нажатии на кнопку "Завершить заказ" будет отправлено SMS-сообщение клиенту о площади и цене заказа. Пожалуйста, будьте осторожны.
        </p>
  
        <div class="mt-8">
          <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
            Информация о заказе
          </h2>
  
          <ul class="mt-2 space-y-2">
            <li class="flex space-x-3">
              <svg class="flex-shrink-0 mt-0.5 size-5 text-gray-600 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              <span class="text-gray-600 dark:text-gray-400 text-xl">
                Имя клиента <span class="text-red-500 font-bold"> {{ $order->client->name }} </span>
              </span>
            </li>
            <li class="flex space-x-3">
              <svg class="flex-shrink-0 mt-0.5 size-5 text-gray-600 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              <span class="text-gray-600 dark:text-gray-400 text-xl">
                Телефон клиента <span class="text-red-500 font-bold"> {{ $order->client->phone }} </span>
              </span>
            </li>
            <li class="flex space-x-3">
              <svg class="flex-shrink-0 mt-0.5 size-5 text-gray-600 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              <span class="text-gray-600 dark:text-gray-400 text-xl">
                Адрес клиента <span class="text-red-500 font-bold"> {{ $order->client->adress }} </span>
              </span>
            </li>
            <li class="flex space-x-3">
              <svg class="flex-shrink-0 mt-0.5 size-5 text-gray-600 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              <span class="text-gray-600 dark:text-gray-400 text-xl">
                Количество ковров <span class="text-red-500 font-bold"> {{ $order->carpet_quantity}} </span>
              </span>
            </li>
            <li class="flex space-x-3">
              <svg class="flex-shrink-0 mt-0.5 size-5 text-gray-600 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              <span class="text-gray-600 dark:text-gray-400 text-xl">
                Тариф <span class="text-red-500 font-bold"> {{ $order->carpet_tariff}}с </span>
              </span>
            </li>
  

          </ul>
        </div>
  

  

      </div>
      <!-- End Col -->
  
      <div class="relative">
        <!-- Card -->
        <div class="flex flex-col border rounded-xl p-4 sm:p-6 lg:p-10 dark:border-gray-700">
          <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
            Обновить данные о заказе
          </h2>
  
          <form id="smsForm" action="{{ route('orders.update', $order) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mt-6 ">
              <!-- Grid -->
              <div class="">
                <div>
                  <label for="carpet_area" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Площадь ковра: в квадратном метре</label>
                  <input value="{{ old('carpet_area', $order->carpet_area) }}" type="text" name="carpet_area" id="carpet_area" class="mb-3 py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                  @if( $order->status=='deactive')
                  disabled
              @endif
                  >
                </div>
  
                <div>
                  <label for="price" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Цена: в сомони</label>
                  <input 
                  @if( $order->status=='deactive')
                  disabled
              @endif
                  value="{{ old('price', $order->price) }}" type="number" name="price" id="price" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                </div>
              </div>
              <!-- End Grid -->

  
            <div class="mt-6 grid">
              <button 
              @if( $order->status=='deactive')
              disabled
          @endif
              type="submit" name="action" value="save_changes" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">Сохранить изменения</button>
              <button 
              @if( $order->status=='deactive')
              disabled
              @endif
              id="completeOrderButton" type="submit" name="action" value="complete_order" class="mt-2 w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-600 text-white hover:bg-red-400 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
              onclick="sendSMS()">Завершить заказ</button>
              </div>
          </form>
  

        </div>
        <!-- End Card -->
      </div>
      <!-- End Col -->
    </div>
    <!-- End Grid -->
  </div>
  <!-- End Hire Us -->


  <script>
function sendSMS() {
    var phone = "{{ $order->client->phone }}";
    var message = "Привет {{ $order->client->name }}.\nВаш заказ №{{ $order->id }} завершён.\nПлощадь: {{ $order->carpet_area }}кв/м\nЦена: {{ $order->price }}c \nСпасибо что заказали у нас!";

    axios.post('{{ route('send.sms') }}', {
        phone: phone,
        message: message
    })
    .then(function (response) {
        alert("Ответ сервера: " + response.data);
        // Отправляем форму после отправки SMS
        document.getElementById('smsForm').submit();
    })
    .catch(function (error) {
        console.error(error);
    });
}

</script>