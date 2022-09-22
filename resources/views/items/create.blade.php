<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 mx-auto">
                    <button class="border p-2" onclick="location.href='{{ route('items.index')}}'">←topに戻る</button>
                    <form  method="POST" action="{{ route('items.store') }}" enctype="multipart/form-data" >
                        @csrf
                        <div class="flex flex-col mx-auto w-96">
                            <label>
                              商品名:
                              <input type="text" name="name">
                            </label>
                            <div class="mt-4">
                                <label>
                                  値段:
                                  <input type="number" name="price">
                                </label>
                            </div>
                            <div class="mt-4">
                                <label>
                                  カテゴリー:
                                  <select name="category_id">
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{$category->name}}</option>
                                    @endforeach
                                  </select>
                                </label>

                            </div>
                            <div class="mt-4">商品詳細
                                <textarea type="text" name="description" placeholder="商品の詳細を記入してください"></textarea>
                                
                            </div><br>
                            <label>
                                画像:
                                <input type="file" name="image">
                            </label>
                            
                            <div class="mt-4">
                                <input type="submit" value="投稿+" class="bg-green-200 p-2 font-bold cursor-pointer">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>