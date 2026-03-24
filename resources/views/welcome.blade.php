@extends('layouts.head')
@section('tittle', 'Pagina principal')
@section('content')
            <div class="w-full min-h-[80vh] md:max-h-[60vh] bg-linear-to-br from-orange-400 to-orange-600 flex items-center justify-center mb-5">
                <div class="text-center text-white px-6 max-w-2xl">
                    <h1 class="text-5xl font-bold mb-4 leading-tight">
                        La mejor comida rápida
                    </h1>
                    <p class="text-xl mb-8 opacity-90">
                        Pide desde donde estés. Rápido, fresco y delicioso.
                    </p>
                    <a href="#" class="inline-block bg-white text-orange-500 font-semibold px-8 py-3 rounded-full hover:bg-orange-50 transition-colors shadow-md">
                        Ver menú →
                    </a>
                </div>
            </div>

            <section id="about-us" class="py-16 px-6 bg-white">
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-4">¿Quiénes somos?</h2>
                <p class="text-center text-gray-500 mb-12 max-w-xl mx-auto">
                    Somos un equipo apasionado por llevar sabor y calidad a tu puerta en tiempo récord.
                </p>

                <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">

                    {{-- Tarjeta 1: Misión --}}
                    <div class="bg-orange-50 rounded-2xl p-8 text-center shadow-sm hover:shadow-md transition-shadow">
                        <div class="text-5xl mb-4">🍔</div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Nuestra Misión</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Llevamos sabor y rapidez a cada rincón. Creemos que la buena comida no debe hacerte esperar.
                        </p>
                    </div>

                    {{-- Tarjeta 2: Calidad --}}
                    <div class="bg-orange-50 rounded-2xl p-8 text-center shadow-sm hover:shadow-md transition-shadow">
                        <div class="text-5xl mb-4">⭐</div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Nuestra Calidad</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Ingredientes frescos seleccionados cada día. Sin compromisos en el sabor ni en la presentación.
                        </p>
                    </div>

                    {{-- Tarjeta 3: Promesa --}}
                    <div class="bg-orange-50 rounded-2xl p-8 text-center shadow-sm hover:shadow-md transition-shadow">
                        <div class="text-5xl mb-4">🚀</div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Nuestra Promesa</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Entrega en menos de 30 minutos o tu próximo pedido tiene descuento. Así de seguros estamos.
                        </p>
                    </div>

                </div>

            </section>
           
            <section id="our-services" class="py-15 px-5 bg-white mt-5">
                <h2 class="text-5xl text-center text-sky-500 mb-12 max-w-xl mx-auto">Nuestros Servicios Principales</h2>
                <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">



                        <div class="bg-sky-100 rounded-2xl p-8 text-center shadow-sm hover:shadow-md transition-shadow">
                            <i class="fa-solid fa-truck fa-xl" style="color:lightskyblue"></i>
                            <h3 class="text-xl font-bold text-gray-800 m-3">Envio a Domicilio</h3>
                            <p class="text-gray-600 font-bold text-sm leading-relaxed">Nos especializamos en envios a Domicilios en toda la región de Neiva.</p>
                        </div>

                        
                        <div class="bg-sky-100 rounded-2xl p-8 text-center shadow-sm hover:shadow-md transition-shadow">
                            <i class="fa-solid fa-credit-card fa-xl" style="color:magenta"></i>
                            <h3 class="text-xl font-bold text-gray-800 m-3">Pagos Seguro | Online</h3>
                            <p class="text-gray-600 font-bold text-sm leading-relaxed">Realiza pagos con tu entidad bancaría favorita con confianza.</p>
                        </div>

                        <div class="bg-sky-100 rounded-2xl p-8 text-center shadow-sm hover:shadow-md transition-shadow">
                            <i class="fa-regular fa-user fa-xl"></i>
                            <h3 class="text-xl font-bold text-gray-800 m-3">Atención al Cliente</h3>
                            <p class="text-gray-600 font-bold text-sm leading-relaxed">Atenderemos tus dudas, inquietudes y ayudarte a elegir el mejor producto para ti con nuestro chat en vivo.</p>
                        </div>


                </div>
            </section>


        <a href="https://wa.me/573177261647?text=Hola,%20me%20interesa%20hacer%20un%20pedido%20en%20Fast%C3%ADa%20Food%C3%ADa"
       target="_blank"
       rel="noopener noreferrer"
       aria-label="Contactar por WhatsApp"
       class="fixed bottom-5 right-5 md:bottom-8 md:right-8 z-50 group">

        <!-- Tooltip -->
        <span class="absolute right-full mr-3 top-1/2 -translate-y-1/2 bg-gray-800 text-white text-xs font-medium px-2.5 py-1.5 rounded-lg whitespace-nowrap
                     opacity-0 group-hover:opacity-100 transition-opacity duration-200 pointer-events-none hidden md:block">
            ¡Escríbenos!
        </span>

        <!-- Círculo con ícono -->
        <div class="w-14 h-14 md:w-16 md:h-16 bg-[#ff7b0044] rounded-full shadow-lg shadow-brown-400/40
                    flex items-center justify-center
                    hover:scale-110 hover:shadow-xl hover:shadow-brown-500/50
                    active:scale-95
                    transition-all duration-200">
            <svg class="w-8 h-8 md:w-9 md:h-9 text-white" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                <path d="M12 0C5.373 0 0 5.373 0 12c0 2.127.558 4.126 1.533 5.857L.057 23.215a.75.75 0 00.921.921l5.356-1.476A11.945 11.945 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.907 0-3.692-.51-5.222-1.396l-.374-.217-3.878 1.069 1.07-3.878-.217-.374A9.945 9.945 0 012 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/>
            </svg>
        </div>
    </a>
    @endsection

