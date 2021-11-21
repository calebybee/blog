@extends('layouts.app')

@section('content')
<div class="bg-gradient-to-r from-blue-400 via-purple-600 to-blue-700 grid gird-cols-1 m-auto h-screen">
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
            <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                Do you want to become a developer?
            </h1>
            <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                Read More
            </a>
        </div>
    </div>
</div>
<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <img src="https://pixabay.com/get/gae1b722f74eef6acb77119c22f5648caeb09e3824001d946a31fc53cac4df4720307514399d3368d120fe3bafefc4ae5be97da688ec3c015fddc649c1b5c55e2a4aeece1ea9f29a9f8d571682b474c6e_1920.jpg" width="700px" alt="">
    </div>

    <div class="m-auto sm:m-auto text-left w-4/5 block">
        <h2 class="text-4xl font-extrabold text-gray-600">
            Struggling to be a better web developer?
        </h2>
        <p class="py-8 text-gray-500 text-xl">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur velit et totam natus, labore dolorum dolorem voluptatem exercitationem reiciendis neque cupiditate tempore aperiam, praesentium, ratione quis? Et eos dignissimos corrupti.
        </p>
        <p class="font-extrabold text-gray-600 text-xl pb-9">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto quas facilis nobis dolorum nam?
        </p>

        <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
            Find Out More
        </a>
    </div>
</div>
<div class="text-center p-15 bg-black text-white">
    <h2 class="text-2xl pb-5 text-l">
        I'm an expert in...
    </h2>
    <span class="font-extrabold block text-4xl py-1">
        Ux Design
    </span>
    <span class="font-extrabold block text-4xl py-1">
        Project Management
    </span>
    <span class="font-extrabold block text-4xl py-1">
        Digital Strategy
    </span>
    <span class="font-extrabold block text-4xl py-1">
        Backend Development
    </span>
</div>

<div class="text-center py-15">
    <span class="uppercase text-s text-gray-400">
        Blog
    </span>
    <h2 class="text-4xl font-bold py-10">
        Recent posts
    </h2>
    <p class="m-auto w-4/5 text-gray-500">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis repellat sint rerum cupiditate recusandae.
    </p>
</div>

<div class="sm:grid grid-cols-2 w-4/5 m-auto">
    <div class="flex bg-yellow-700 text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
            <span class="uppercase text-xs">
                PHP
            </span>
            <h3 class="text-xl font-bold py-10">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam, culpa impedit, dolor dicta pariatur vitae earum optio accusantium provident eligendi cumque cum, sunt laudantium ipsa officiis omnis. Est, dolorum quas!
            </h3>
            <a href="" class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>
    <div>
        <img src="https://pixabay.com/get/gae1b722f74eef6acb77119c22f5648caeb09e3824001d946a31fc53cac4df4720307514399d3368d120fe3bafefc4ae5be97da688ec3c015fddc649c1b5c55e2a4aeece1ea9f29a9f8d571682b474c6e_1920.jpg" width="700px" alt="">
    </div>
</div>
@endsection