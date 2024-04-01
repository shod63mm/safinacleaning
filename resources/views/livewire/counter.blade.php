<div class="container mx-auto">
    <div class="mt-5 flex mx-auto">
        <button wire:loading.attr="disabled" wire:click="up" class="inline-flex justify-center py-2 px-4 border border-transparent
            shadow-sm text-sm font-medium rounded-md text-white bg-green-600
            hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            + {{ $plus }}
        </button>

        <button wire:loading.attr="disabled" wire:click="down" class="ml-2 inline-flex justify-center py-2 px-4 border
            border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600
            hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            - {{ $minus }}
        </button>
    </div>
</div>
