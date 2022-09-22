<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <button class="border p-2" onclick="location.href='{{ route('items.index')}}'">←topに戻る</button>
                    <div class="w-1/3 mx-auto mb-2">
                        <h1>ユーザー名:{{$user->name}}</h1>
                        @if ($user->image !== '')
                            <img class="object-cover w-full h-full" src="{{asset('storage/' .$user->image)}}" >
                        @else
                            <img src="{{asset('images/no_img.png')}}">
                        @endif
                        <p>出品数:</p>
                        <p>購入履歴:</p>
                        <div class="mt-4 p-2 border">
                            自己紹介:{{$user->profile}}
                        </div>
                        <button class="bg-indigo-100 p-2 mt-2" onclick="location.href='{{ route('users.edit', $user->id) }}'">編集</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
