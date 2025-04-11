<section class="h-auto pt-12 pb-12 bg-gradient-to-r from-red-50 via-blue-50 to-yellow-50">
    <div class="container mx-auto px-4  pt-24">
        <div class="pb-24">
            <h2 class="text-3xl font-black mb-6 text-center">
                Nuestro Trabajo
            </h2>
            <p class="font-gray-800 text-center">Algunos ejemplos de nuestras creaciones personalizadas para clientes.</p>
        </div>

        <div class="px-16 grid grid-cols-1 md:grid-cols-3 gap-10 pb-16">            
            <div class="relative h-[400px] rounded-lg overflow-hidden group transition duration-300 hover:shadow-xl">                
                <div class="absolute z-10 inset-0 transition duration-300 group-hover:bg-gradient-to-b group-hover:from-white/10  group-hover:to-black/50"></div>
                <img class="transition duration-300 group-hover:scale-110" src="{{ asset('imgs/uniforme.webp') }}" alt="">      
                <div class="absolute z-20 inset-0 opacity-0 transition duration-300 group-hover:opacity-100 -bottom-58 flex flex-col items-center justify-center text-white text-center px-4">
                    <h3 class="text-xl font-bold mb-2">Uniformes para Colegios</h3>
                    <p class="text-gray-200">Diseñamos el uniforme del colegio [Nombre del colegio].</p>
                    
                </div>          
            </div>

            <div class="relative h-[400px] rounded-lg overflow-hidden group transition duration-300 hover:shadow-xl">                
                <div class="absolute z-10 inset-0 transition duration-300 group-hover:bg-gradient-to-b group-hover:from-white/10  group-hover:to-black/50"></div>
                <img class="object-cover h-[400px] transition duration-300 group-hover:scale-110" src="{{ asset('imgs/equipo.webp') }}" alt="">      
                <div class="absolute z-20 inset-0 opacity-0 transition duration-300 group-hover:opacity-100 -bottom-58 flex flex-col items-center justify-center text-white text-center px-4">
                    <h3 class="text-xl font-bold mb-2">Equipación de futbol</h3>
                    <p class="text-gray-200">Diseñamos el uniforme del colegio [Nombre del colegio].</p>
                    
                </div>          
            </div>

            <div class="relative h-[400px] rounded-lg overflow-hidden group transition duration-300 hover:shadow-xl">                
                <div class="absolute z-10 inset-0 transition duration-300 group-hover:bg-gradient-to-b group-hover:from-white/10  group-hover:to-black/50"></div>
                <img class="transition duration-300 group-hover:scale-110" src="{{ asset('imgs/uniMecanico.webp') }}" alt="">      
                <div class="absolute z-20 inset-0 opacity-0 transition duration-300 group-hover:opacity-100 -bottom-58 flex flex-col items-center justify-center text-white text-center px-4">
                    <h3 class="text-xl font-bold mb-2">Uniformes de taller</h3>
                    <p class="text-gray-200">Diseñamos el uniforme del taller [Nombre del taller].</p>
                    
                </div>          
            </div>
        </div>
    </div>

</section>