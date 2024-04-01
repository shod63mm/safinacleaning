<form action="{{ route('logout') }}" method="POST" class="m-0">
    @csrf
    @method('DELETE')
    <button type="submit" class="flex items-center gap-x-2 font-medium text-white/[.8] hover:text-white sm:border-s sm:border-white/[.3] sm:my-6 sm:ps-6" >
       Выход из аккаунта
    </button>
</form>
