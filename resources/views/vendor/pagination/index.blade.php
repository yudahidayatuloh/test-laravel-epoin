@if ($paginator->hasPages())
    <div class="flex justify-end my-4">
        <div class="join">
            @if ($paginator->onFirstPage())
                <button class="join-item btn btn-square btn-disabled bg-white border ">«</button>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="join-item btn btn-square bg-white  border  hover:bg-blue-100">«</a>
            @endif
            @foreach ($elements as $element)
                @if (is_string($element))
                    <button class="join-item btn btn-square btn-disabled bg-white ">{{ $element }}</button>
                @endif
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <button class="join-item btn btn-square btn-primary btn-active">{{ $page }}</button>
                        @else
                            <a href="{{ $url }}" class="join-item btn btn-square bg-white   hover:bg-blue-100">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Tombol Next --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="join-item btn btn-square bg-white border  hover:bg-blue-100">»</a>
            @else
                <button class="join-item btn btn-square btn-disabled bg-white border ">»</button>
            @endif
        </div>
    </div>
@endif