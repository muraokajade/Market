<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-flash-message/>
                    <a href="{{ route('items.create')}}" class="bg-indigo-200 p-2 border">商品を出品する+</a>
                    <h1 class="text-xl mt-6">商品一覧</h1>
                    <div class="flex flex-wrap">
                        @forelse ($recommend_items as $item)
                            <div class="border-2 w-40 h-60 m-2 ml-0">
                                <div class="w-2/3 mx-auto mb-2">
                                    @if ($item->image !== '')
                                        <img class="object-cover w-full h-full" src="{{asset('storage/' .$item->image)}}" >
                                    @else
                                        <img src="{{asset('images/no_img.png')}}">
                                    @endif
                                </div>
                                <p>商品名:{{$item->name}}</p>
                                <p>カテゴリー:{{$item->category->name}}</p>
                                <p>値段:{{$item->price}}</p>
                            </div>
                            @empty
                            <p>おすすめ商品はありません</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>