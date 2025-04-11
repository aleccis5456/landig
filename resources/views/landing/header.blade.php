<header class=" fixed top-0 w-full z-50 h-auto transition-all duration-300 ease-in-out border-b border-transparent">
    <div class="container mx-auto flex justify-between items-center p-4 ">
        <a href="/" class="text-2xl font-bold text-white">Tu Logo</a>
        <nav class="flex space-x-4">
            <a href="/" class="text-white font-semibold hover:text-blue-500">Inicio</a>
            <a href="/tienda" class="text-white font-semibold hover:text-blue-500">Tienda</a>
            <a href="/contacto" class="text-white font-semibold hover:text-blue-500">Contacto</a>
        </nav>
    </div>
</header>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const header = document.querySelector('header');
        const sticky = header.offsetTop;

        window.onscroll = function() {
            if (window.pageYOffset > sticky) {
                header.classList.add('bg-black/30', 'backdrop-blur-md', 'border-white', 'border-b');
            } else {
                header.classList.remove('bg-black/30', 'backdrop-blur-md', 'border-b', 'border-white');
            }
        };
    });
</script>