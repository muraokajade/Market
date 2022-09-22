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
                    <button class="border p-2" onclick="location.href='{{ route('users.index')}}'">←自己紹介に戻る</button>
                    <div class="w-1/3 mx-auto mb-2">
                        <form method="post" action="{{ route('users.update', $user)}}" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <h1>ユーザー名:{{$user->name}}</h1>
                            <input type="text" name="name" placeholder="新しいユーザー名前">
                            @if ($user->image !== '')
                            <img class="object-cover w-full h-full" src="{{asset('storage/' .$user->image)}}" >
                            @else
                            <img src="{{asset('images/no_img.png')}}">
                            @endif
                            <input type="file" name="image">
                            <div class="mt-4 p-2 border h-56">
                                自己紹介:
                                <textarea row="20" class="resize-none h-2/3" name="profile" placeholder="{{$user->profile}}">{{$user->profile}}</textarea>
                            </div>
                            <button type="submit" class="bg-indigo-100 p-2 mt-2">更新</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
