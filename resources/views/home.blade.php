<x-layout :title="$title">
    <!-- Your content -->
    <p>WHAHAHAHAHA</p>

    <div class="flex mt-3">
        @for ($index = 0; $index < 10; $index++)
            @if ($index % 2 == 0)
                <div class="w-8 h-8 bg-teal-500 text-white p-2 me-1 text-xs grid place-items-center rounded">
                    {{ $index }}
                </div>
            @endif
        @endfor
    </div>
</x-layout>
