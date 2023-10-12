@extends('layouts.partials.main')
@section('content')
    <section class="min-w-full bg-gray-500 pt-16">
        <div class="px-5">

            <h1 class="pt-10 font-semibold md:text-3xl text-base text-gray-100 text-center">{{ $post->title }}</h1>
            <h1 class="py-3 text-sm text-gray-300 text-center">{{ $post->created_at->format('Y/m/d') }}</h1>
        </div>
    </section>

    <section class="w-full bg-gray-100 overflow-hidden">
        <div class="grid grid-cols-10 max-w-screen-xl mx-auto lg:space-x-3 lg:px-10 px-3">
            <div class="lg:col-span-7 col-span-10 p-5 shadow-md rounded-md mx-auto bg-white mt-5 lg:mb-10">
                <img class="w-full h-auto rounded-lg bg-cover bg-center overflow-hidden mb-5"
                    src="{{ asset('storage/' . $post->post_image) }}" alt="">
                <div class="text-base font-poppins text-slate-800 leading-7 w-full space-y-3">{!! $post->body !!}</div>
            </div>
            <div class="lg:col-span-3 col-span-10">

                <div
                    class="w-full max-w-md p-4 bg-white border border-gray-200 rounded-md my-3 shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex items-center justify-between mb-4">
                        <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Kategori</h5>
                        <a href="#" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
                        
                        </a>
                    </div>
                    <a href="#">{{ $post->category->name }}</a>
                </div>

            </div>
        </div>
    </section>
@endsection
