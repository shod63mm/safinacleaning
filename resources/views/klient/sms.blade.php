@extends('dashboard.admin')

@section('content')

<div class="max-w-[85rem] w-full mx-auto px-4 lg:px-8 mt-5">

    <div class="p-5 bg-blue-100 rounded-xl w-full ">
        <div class="text-center ">
            <h1 class="font-semibold text-xl text-blue-700 mb-4 "> Массовый отправка смс client_name</h1>
        </div>
        <div class="">
            <textarea type="text" id="message" name="message" required value=""
                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                rows="3" placeholder="Напишите смс здес"></textarea>
            <button onclick="sendSMS()"
                class="mt-3 w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                Начать отправку SMS
            </button>
        </div>
      @if(Session::has('success'))
      <div class="bg-teal-50 border-t-2 border-teal-500 rounded-lg p-4 dark:bg-teal-800/30 mt-3" role="alert">
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

      @if(Session::has('error'))
      <div class="bg-red-50 border-s-4 border-red-500 p-4 dark:bg-red-800/30 mt-3" role="alert">
          <div class="flex">
            <div class="flex-shrink-0">
              <!-- Icon -->
              <span class="inline-flex justify-center items-center size-8 rounded-full border-4 border-red-100 bg-red-200 text-red-800 dark:border-red-900 dark:bg-red-800 dark:text-red-400">
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
              </span>
              <!-- End Icon -->
            </div>
            <div class="ms-3">
              <h3 class="text-gray-800 font-semibold dark:text-white">
                Error!
              </h3>
              <p class="text-sm text-gray-700 dark:text-gray-400">
                  {{ Session::get('error') }}
              </p>
            </div>
          </div>
        </div>
      @endif
      <div class="text-center ">
        <h1 class="font-semibold text-xl text-blue-700 mt-4 "> СМС будет оправлена на эти номера</h1>
    </div>
      <div class="-m-1.5 overflow-auto mt-1">
        <div class="p-1.5 min-w-full inline-block align-middle ">
          <div class="overflow-hidden rounded-xl">
            <div class="table border-collapse table-auto w-full divide-y divide-gray-200 dark:divide-gray-700 bg-blue-500">
              <div class="table-header-group">
                <div class="table-row">
                  <div class="table-cell px-6 py-3 text-start text-xs font-medium text-white uppercase">Имя</div>
                  <div class="table-cell px-6 py-3 text-start text-xs font-medium text-white uppercase">Телефон</div>
                </div>
              </div>
              @foreach ($clients as $user)
              <div class="table-row-group divide-y divide-gray-200 bg-white dark:divide-gray-700 dark:bg-slate-800">
                <div class="table-row">
                  <div class="table-cell px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">{{ $user->name }}</div>
                  <div class="table-cell px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{ $user->phone }}</div>

                
                </div>
              </div>
              @endforeach

            </div>
          </div>
        </div>
      </div>
  
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        function sendSMS() {
            var phones = {!! $phonesJson !!}; // Преобразуем JSON обратно в массив JavaScript
            var messageTemplate = document.getElementById("message").value; // Получаем шаблон сообщения из textarea
            var clientNames = {!! $clientNamesJson !!};

            console.log(phones);
    
            var index = 0;
            var interval = setInterval(function() {
                if (index < phones.length) {
                    var phone = phones[index];
    

                    var message = messageTemplate.replace(/\{\{\s*client_name\s*\}\}/g, clientNames[index]);
    
                    axios.post('{{ route('send.sms') }}', {
                        phone: phone,
                        message: message
                    })
                    .then(function (response) {
                        console.log("SMS успешно отправлено на номер " + phone);
                    })
                    .catch(function (error) {
                        console.error("Произошла ошибка при отправке SMS на номер " + phone);
                    });
    
                    index++;
                } else {
                    clearInterval(interval);
                    alert("Отправка SMS завершена");
                }
            }, 1000); // Отправлять SMS каждые 2 секунды
        }
    </script>
    
    
  @endsection

