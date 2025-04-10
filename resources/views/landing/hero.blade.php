@extends('layout.app')

@section('content')
    <section class="relative h-screen flex items-center">
        <div class="absolute inset-0 bg-[url('http://127.0.0.1:8000/imgs/bg-hero.webp')] mx-auto px-4 bg-cover"></div>
        <div class="absolute inset-0 bg-black/50 z-10"></div>
        <div class="p-24 mx-auto text-center text-white z-10">
            <h1 class="font-black text-6xl bg-gradient-to-r from-yellow-100  via-blue-200 to-red-200 inline-block text-transparent bg-clip-text">Diseño de moda a tu medida</h1>            
            <p class="mx-58 mt-6 text-lg text-shadow-lg/30">Vestimos tu estilo: remeras, camperas y uniformes únicos. Mayorista de diseño propio e importador de marcas exclusivas.</p>

            <div class="mt-8 grid-cols-2 gap-4">
                <a href="/" class="m-4 bg-white border-white text-black font-bold py-3 px-6 rounded-sm hover:bg-gray-200 transition duration-300">
                    Cotización personalizada
                </a>

                <a href="" class="m-4 bg-transparent border-2 border-white text-white font-bold py-3 px-6 rounded-sm hover:bg-white hover:text-black transition duration-300">
                    Ver Tienda
                </a>
            </div>
        </div>                
    </section>    
@endsection
