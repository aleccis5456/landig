@extends('layout.app')

@section('content')
<section class="relative h-screen flex items-center">
    <div class="absolute inset-0 bg-[url('http://127.0.0.1:8000/imgs/bg-hero.webp')] bg-cover bg-center"></div>
    <div class="absolute inset-0 bg-black/50 z-10"></div>

    <div class="relative z-10 w-full text-white text-center px-4 md:px-12 lg:px-24 py-12">
        <h1 class="font-black text-3xl sm:text-4xl md:text-5xl lg:text-6xl bg-gradient-to-r from-yellow-100 via-blue-200 to-red-200 inline-block text-transparent bg-clip-text">
            Diseño de moda a tu medida
        </h1>

        <p class="mt-4 text-base sm:text-lg md:text-xl max-w-3xl mx-auto">
            Vestimos tu estilo: remeras, camperas y uniformes únicos. Mayorista de diseño propio e importador de marcas exclusivas.
        </p>

        <div class="mt-8 flex flex-col sm:flex-row justify-center items-center gap-4">
            <a href="/" class="bg-white border-2 border-white text-black font-bold py-3 px-6 rounded-sm hover:bg-gray-200 transition duration-300">
                Cotización personalizada
            </a>

            <a href="#" class="bg-transparent border-2 border-white text-white font-bold py-3 px-6 rounded-sm hover:bg-white hover:text-black transition duration-300">
                Ver Tienda
            </a>
        </div>
    </div>
</section>
  
@endsection
