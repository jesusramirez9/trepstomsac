<x-app-layout>


    @push('link')
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    @endpush
    <div>
        <div class="relative h-contacto bg-center bg-cover w-full object-cover object-center"
            style="background-image: url('{{ asset('imgt/home/slide3.jpg') }}')">
            <div class="container mx-auto">
                <div class="grid grid-cols-2 gap-10 ">
                    <div>
                        <div class="absolute text-white mt-12 lg:mt-36 pl-4 lg:pl-0">
                            <p class="font-semibold text-3xl md:text-5xl tracking-wider">Transforma tu negocio</p>
                            <p class="font-semibold text-3xl md:text-5xl tracking-wider mt-1">En una venta digital.</p>
                            <p class="font-medium text-lg mt-8 tracking-wide">Todo lo que necesitas para brindar un
                                excelente
                                servicio <br> a tus clientes y el software de gestión más eficaz para su <br> negocio.
                            </p>
                            <div class="mt-8">
                                <a href="{{route('conocenos')}}"
                                    class="rounded-lg py-2 px-4 bg-red-500 font-bold text-lg hover:bg-red-600">PLANES</a>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6">
                        {{-- <img src="{{ asset('imgt/home/home2.png') }}" alt=""> --}}
                    </div>
                </div>

            </div>
        </div>

    </div>


<div class="bg-gray-100 py-4 md:py-14">
    <div class="container ">
        <div class="my-10 md:my-14">
            <p class=" text-center text-2xl md:text-3xl font-semibold mt-5">
                “Somos la mejor opción para emprendedores<br>
                que deseen expandir su negocio.”
            </p>
            <p class=" text-center mt-5">Lorem ipsum dolor sit, amet consectetur adipisicing elittur consequuntur
                excepturi error illo eligendi dolor officiis dolorem reprehenderit officia tempora harum deserunt ullam.
            </p>
        </div>

        

    </div>
    <section>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-4 mb-24">
            <div>
                
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">


                    <div class="bg-white rounded shadow px-8 py-12">

                        <div class="flex justify-center mb-6">
                            <img src="{{asset('imgt/crm.png')}}"
                                class="w-24" alt="">
                        </div>

                        <h3 class="text-center font-semibold text-lg">CAPTA MÁS CLIENTES</h3>
                        <p>Gestiona fácilmente el contenido (texto e imágenes) de tu sitio web, con una interfaz
                            super amigable.</p>
                    </div>

                    <div class="bg-white rounded shadow px-8 py-12">
                        <div class="flex justify-center mb-6">
                            <img src="{{asset('imgt/costo.png')}}"
                                class="w-24" alt="">
                        </div>

                        <h3 class="text-center font-semibold text-lg">OPTIMIZA COSTOS</h3>
                        <p>Olvídate de los gastos de impresión y distribución de tu tienda. Llega a más personas sin
                            mucho esfuerzo.</p>
                    </div>

                    <div class="bg-white rounded shadow px-8 py-12">
                        <div class="flex justify-center mb-6">
                            <img src="{{asset('imgt/horas.png')}}"
                                class="w-24" alt="">
                        </div>

                        <h2 class="text-center font-semibold text-lg">CANAL DE VENTAS</h2>
                        <p>Sistema de venta en línea que te permite estar presente las 24 horas del día, los 365
                            días del año.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
<div class="container mt-8 lg:mt-16">
    <p class="text-center text-lg lg:text-4xl">
        ¡Elige tu <span class="font-bold"> PLAN!</span>
    </p>
    <p class="text-center mt-4 font-medium text-xl text-gray-600">
        Y empieza a disfrutar de tu Aplicación WEB
    </p>
    <hr class="bg-gray-200 pb-px mt-8 lg:mt-16">

    
    <div class="space-y-8 lg:grid lg:grid-cols-3 sm:gap-6 xl:gap-10 lg:space-y-0 mb-12 mt-20">
        <!-- Básico-->
        <div>
            <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                <h3 class="mb-4 text-2xl font-semibold">Landing Page</h3>
                <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">PAGO ÚNICO</p>
                <div class="flex justify-center items-baseline my-8">
                    <span class="mr-2 text-3xl lg:text-5xl font-extrabold">130 USD</span>
                </div>
                <!-- List -->
                <ul role="list" class="mb-8 space-y-4 text-left">
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Dominio .COM 1 año</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Hosting de alta disponibilidad por 1 año</span>
                    </li>

                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Certificado SSL</span>
                    </li>

                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>4 Pestañas</span>
                    </li>

                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Optimización</span>
                    </li>

                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Alta en Buscadores</span>
                    </li>

                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Diseño web Responsivo</span>
                    </li>

                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>10 Cuentas de Correo</span>
                    </li>

                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Botón Redes Sociales</span>
                    </li>

                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Mapa Ubicación Google Maps</span>
                    </li>
                </ul>
                <a href="https://api.whatsapp.com/send?phone=51998905385&amp;text=Hola%2Jesus%20necesito%20que%20me%20implementes%20un%20Landing%20page" target="_blank" class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:ring-red-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-red-900"><i class="fab fa-whatsapp"></i> Consulta</a>
            </div>
        </div>

        <!-- Tienda virtual -->
        <div>
            <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                <div class="flex justify-center mb-4">
                    <span class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-800">EMPRESARIAL</span>
                </div>
                <h3 class="mb-4 text-2xl font-semibold">Tienda virtual</h3>
                <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">PAGO ÚNICO</p>
                <div class="flex justify-center items-baseline my-8">
                    
                    <span class="mr-2 text-3xl lg:text-5xl font-extrabold">
                                                            260 USD
                                                    </span>
                </div>
                
                <!-- List -->
                <ul role="list" class="mb-8 space-y-4 text-left">
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Dominio .COM 1 año</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Hosting de alta disponibilidad por 1 año</span>
                    </li>

                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Certificado SSL</span>
                    </li>

                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>5 a 8 Pestañas</span>
                    </li>

                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Sitio web Autoadministrable</span>
                    </li>

                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Carrito de compras</span>
                    </li>

                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Pasarelas de pagos (Izipay)</span>
                    </li>

                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Optimización</span>
                    </li>

                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Alta en Buscadores</span>
                    </li>

                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Diseño Web Responsivo</span>
                    </li>

                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>10 Cuentas de Correo</span>
                    </li>

                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Botón Redes Sociales</span>
                    </li>

                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Mapa Ubicación Google Maps</span>
                    </li>
                </ul>
                <a href="https://api.whatsapp.com/send?phone=51998905385&amp;text=Hola%20Coders%20Free,%20necesito%20una%20tienda%20virtual%20para%20mi%20negocio" target="_blank" class="text-white bg-gray-600 hover:bg-gray-700 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-gray-900"><i class="fab fa-whatsapp"></i> Consulta</a>
            </div>
        </div>

        <!-- Pro -->
        <div>
            <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                <h3 class="mb-4 text-2xl font-semibold">A medida</h3>
                <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">PAGO A EVALUAR SEGUN LOS REQUERIMIENTOS</p>
                <div class="flex justify-center items-baseline my-8">
                    <span class="text-gray-500 dark:text-gray-400">desde</span>
                    <span class="ml-2 text-3xl lg:text-5xl font-extrabold">
                                                            500 USD
                                                        
                    </span>
                </div>
                <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400 mb-8">Ventajas de desarrollo a medida</p>
                <!-- List -->
                <ul role="list" class="mb-8 space-y-4 text-left">
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Valor diferencial</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Documentacion del software</span>
                    </li>

                
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Diseño ajustado a tus necesidades</span>
                    </li>

                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Fácil de administrar</span>
                    </li>

                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Mayor eficiencia</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>10 Cuentas de Correo</span>
                    </li>

                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Optimización</span>
                    </li>

                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Es escalable</span>
                    </li>

                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Facil de mantener</span>
                    </li>

                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Garantiza una solución</span>
                    </li>

                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Soporte técnico</span>
                    </li>

                    
                </ul>
                <a href="https://api.whatsapp.com/send?phone=51998905385&amp;text=Hola%2C%20necesito%20un%20desarrollo%20a%20medida" target="_blank" class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:ring-red-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-red-900"><i class="fab fa-whatsapp"></i> Consulta</a>
            </div>
        </div>
    </div>
    <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4" role="alert">
        <p class="text-center"><b>Las Tarifas</b> NO <b>Incluyen IGV | El Pago Es 50% Al Iniciar Y 50% Al Finalizar El Trabajo</b>
            <br>
            El Contenido De Imágenes / Videos / Textos Son Proporcionados Por El Cliente
            <br>
            <b>Entrega de Landing Page y/o Tienda Virtual Entre 07 y 15 Días | Garantía De Satisfacción </b>
        </p>
    </div>
</div>
    <div class="container">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-6 lg:gap-10 xl:gap-16 xl:my-16 mx-6 md:mx-0">
            <div>
                <div class="h-96 w-full object-center bg-center bg-cover rounded-2xl"
                    style="background-image: url('{{ asset('imgt/home/im2.png') }}')">

                </div>
            </div>
            <div class="text-justify">
                <div class="mb-6">
                    <h1 class="text-lg font-semibold">Ofrece experiencias</h1>
                    <p>Atraerás a más clientes y los fidelizarás, añadiéndole un Plus a tus servicios. Aumenta la eficiencia de tu trabajo.</p>
                </div>
                <div class="mb-6">
                    <h1 class="text-lg font-semibold">Mayor productividad</h1>
                    <p>Aumenta la productividad de tu trabajo, con un mejor manejo de atención y de tu tiempo</p>
                </div>
                <div class="mb-6">
                    <h1 class="text-lg font-semibold">Mejora tus Servicios</h1>
                    <p>Te brindamos la Herramienta necesaria para que empieces a tener control de tus servicios y
                        clientes</p>
                </div>
                <div>
                    <h1 class="text-lg font-semibold">Facilita tu Trabajo</h1>
                    <p>Hacemos tu trabajo más práctico con nuestro Sistema. Tus servicios, clientes, productos y
                        reservas en un sólo lugar</p>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class=" pb-6 lg:pb-14 mt-8">
        <div class="container">
            <div class="py-30">
                <p class="text-center text-2xl tracking-wide font-serif font-medium ">“Nuestro diferencial es la
                    personalización que le puedes dar acorde a tus necesidades”</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center mt-8">
                <div>
                    <div class="flex justify-center">
                        <div>
                            <p class="text-xl">Administrador web</p>
                            <p>Creación de servicios</p>
                            <p>Agrega tus productos</p>
                            <p>Agrega hasta 4 fotos por producto</p>
                            <p>Ten un historial de venta</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <img src="{{ asset('imgt/adm1.JPG') }}" alt="">
                    </div>
                </div>
                <div>
                    <div>
                        <img src="{{ asset('imgt/adm2.JPG') }}" alt="">
                    </div>
                </div>
                <div>
                    <div class="flex justify-center">
                        <div>
                            <p>Gestión de personal</p>
                            <p>Control de estado de envip</p>
                            <p>Resumen de productos solicitados</p>
                            <p>Tipo de envio o recogo del producto</p>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex justify-center">
                        <div>
                            <p>Gestión de personal</p>
                            <p>Control de estado de envip</p>
                            <p>Resumen de productos solicitados</p>
                            <p>Tipo de envio o recogo del producto</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <img src="{{ asset('imgt/admi4.PNG') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="container ">
        <div class="py-14">
            <p class="text-center text-5xl text-gray-700">Beneficios</p>
        </div>
        <div class="grid grid-cols-1  md:grid-cols-3 gap-16 text-center">
            <div>
                <div class="flex justify-center">
                    <img src="{{ asset('imgt/time.svg') }}" class="w-3/4" alt="">

                </div>
                <p>AHORRA TIEMPO</p>
                <p class="mt-6 mb">Haremos tu trabajo más rápido y sencillo. El estrés ya quedó en el pasado.
                    ¡Actualizate!</p>
            </div>
            <div>
                <div class="flex justify-center">
                    <img src="{{ asset('imgt/tool.svg') }}" class="w-3/4" alt="">

                </div>
                <p>FACIL ADMINISTRACION</p>
                <p class="mt-6">Nuestra plataforma intuitiva y amigable, te permitirá tener el control en cualquier momento.</p>
            </div>
            <div>
                <div class="flex justify-center">
                    <img src="{{ asset('imgt/person.svg') }}" class="w-3/4" alt="">

                </div>
                <p>+ CLIENTES PARA TI</p>
                <p class="mt-6">Con nuestras herramientas, tu negocio no solo atraerá nuevos clientes, sino que los fidelizará de manera efectiva</p>
            </div>
        </div>
    </div> --}}



    @push('script')
    @endpush

</x-app-layout>
