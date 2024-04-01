@extends('dashboard.admin')

@section('content')

<div class="max-w-[85rem] w-full mx-auto px-4 lg:px-8 mt-5">
    <div class="p-5 bg-blue-100 rounded-xl w-full">
      <div class="flex justify-between">
      <h1 class="font-semibold text-xl text-blue-700"> Список клиентов</h1>
      <a href="{{ route('userregister') }}" class="bg-blue-700 text-white pb-1 px-3 rounded-full"> Добавить</a>
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
      <div class="-m-1.5 overflow-auto mt-5">
        <div class="p-1.5 min-w-full inline-block align-middle ">
          <div class="overflow-hidden rounded-xl">
            <div class="table border-collapse table-auto w-full divide-y divide-gray-200 dark:divide-gray-700 bg-blue-500">
              <div class="table-header-group">
                <div class="table-row">
                  <div class="table-cell px-6 py-3 text-start text-xs font-medium text-white uppercase">Имя</div>
                  <div class="table-cell px-6 py-3 text-start text-xs font-medium text-white uppercase">Телефон</div>
                  <div class="table-cell px-6 py-3 text-start text-xs font-medium text-white uppercase">Адрес</div>
                  <div class="table-cell px-6 py-3 text-end text-xs font-medium text-white uppercase">Удалить</div>
                </div>
              </div>
              @foreach ($klients as $user)
              <div class="table-row-group divide-y divide-gray-200 bg-white dark:divide-gray-700 dark:bg-slate-800">
                <div class="table-row">
                  <div class="table-cell px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">{{ $user->name }}</div>
                  <div class="table-cell px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{ $user->phone }}</div>
                  <div class="table-cell px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{ $user->adress }}</div>
                  <div class="table-cell px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                    
                    <form id="deleteForm{{ $user->id }}" action="{{ route('klientlist.delete', $user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                            <button 
                            type="button"
                            onclick="deleteUser({{ $user->id }})"
                            class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border
                            border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50
                            disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400
                            dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                            @if(Auth::user()->rolle == 'admin')
                            enabled
                            @else
                            disabled
                            @endif
                            >Delete
                            </button>

                    </form>
                    
                    <script>
                        function deleteUser(userId) {
                            if (confirm('Вы уверены, что хотите удалить этого пользователя?')) {
                                document.getElementById('deleteForm' + userId).submit();
                            }
                        }
                    </script>
                    
                </div>
                </div>
              </div>
              @endforeach

            </div>
          </div>
        </div>
      </div>
  
    </div>
  </div>
  @endsection