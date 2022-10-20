<x-app-layout>
    <div class="bg-gray-100">
    <div class="relative h-contacto bg-center bg-cover w-full object-cover object-center"
        style="background-image: url('{{ asset('imgt/contacto/slide.jpg') }}')">
        <div class="container mx-auto">
            <div class="absolute m-7 lg:mt-36 bg-white text-gray-700 px-5 py-6 rounded-lg">
                <p class="font-semibold text-2xl md:text-4xl tracking-wider">Transforma tu negocio</p>
                <p class="font-semibold text-xxl md:text-2xl tracking-wider mt-1">Diseñamos tu sitio web.</p>
                <p class="font-medium text-lg mt-8 tracking-wide">Deseas contar con una página web, o <br> tienda online
                    que te ayude a incrementar <br> tus ventas. Contáctanos</p>
                <div class="mt-8 w-full ">
                    <a href="https://wa.me/+51998905385"
                        class="inline-block rounded-lg text-center text-white py-2 px-4 bg-red-500 font-bold text-lg hover:bg-red-400 w-full">SOMOS
                        TU MEJOR OPCIÓN</a>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-gray-100">
        <div class="container  my-14 bg-white rounded-xl shadow-xl pb-8">

            <div class="mx-6 pt-6 md:mx-0">
                <p class="my-4 text-3xl text-gray-600 font-semibold">Solicita tu presupuesto:</p>
                <p class="my-2 text-base font-base">Para que podamos darte un presupuesto, necesitamos que nos
                    proporciones la siguiente información. ¡Sólo te llevará un minuto!</p>

                <form action="{{ route('contacto.store') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 ">
                        <div class="mb-4">
                            <x-jet-label class="text-lg">
                                Nombre <span class="text-red-600">*</span>
                            </x-jet-label>
                            <x-jet-input wire:model="name" name="name" type="text" class="w-full mt-1">
                            </x-jet-input>
                            <x-jet-input-error for="name" />
                        </div>
                        <div class="mb-4">
                            <x-jet-label class="text-lg">
                                Email <span class="text-red-600">*</span>
                            </x-jet-label>
                            <x-jet-input wire:model="email" name="correo" type="email" class="w-full mt-1">
                            </x-jet-input>
                            <x-jet-input-error for="email" />
                        </div>
                        <div class="mb-4">
                            <x-jet-label class="text-lg">
                                Empresa <span class="text-red-600">*</span>
                            </x-jet-label>
                            <x-jet-input wire:model="empresa" name="empresa" type="text" class="w-full mt-1">
                            </x-jet-input>
                            <x-jet-input-error for="empresa" />
                        </div>
                        <div class="mb-4">
                            <x-jet-label class="text-lg">
                                Teléfono o celular <span class="text-red-600">*</span>
                            </x-jet-label>
                            <x-jet-input wire:model="celular" name="celular" type="number" class="w-full mt-1">
                            </x-jet-input>
                            <x-jet-input-error for="celular" />
                        </div>
                        <div class="mb-4">
                            <x-jet-label class="text-lg">
                                País <span class="text-red-600">*</span>
                            </x-jet-label>
                            <x-jet-input wire:model="pais" name="pais" type="text" class="w-full mt-1">
                            </x-jet-input>
                            <x-jet-input-error for="pais" />
                        </div>
                        <div class="mb-4">
                            <x-jet-label class="text-lg">
                                ¿Ya existe una web? Indicanos la URL <span class="text-red-600">*</span>
                            </x-jet-label>
                            <x-jet-input wire:model="url" name="url" type="text" class="w-full mt-1">
                            </x-jet-input>
                            <x-jet-input-error for="url" />
                        </div>
                        <div class="mb-4">
                            <x-jet-label class="text-lg">
                                ¿Cual es tu sector comercial? <span class="text-red-600">*</span>
                            </x-jet-label>
                            <p class="">Por ejemplo: venta de electrodomésticos, gestoría administrativa, diseño
                                de interiores, etc.</p>
                            <x-jet-input wire:model="sector" name="sector" type="text" class="w-full mt-1">
                            </x-jet-input>
                            <x-jet-input-error for="sector" />
                        </div>
                        <div class="mb-4">
                            <x-jet-label class="text-lg">
                                ¿Qué tipo de producto o servicio ofreces? <span class="text-red-600">*</span>
                            </x-jet-label>
                            <x-jet-input wire:model="servicio" name="servicio" type="text" class="w-full mt-1">
                            </x-jet-input>
                            <x-jet-input-error for="servicio" />
                        </div>
                        <div class="mb-4">
                            <x-jet-label class="text-lg">
                                Explicanos a detalle lo que necesitas <span class="text-red-600">*</span>
                            </x-jet-label>
                            <textarea name="mensaje" placeholder="Mensaje*"
                                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full h-32"></textarea>
                            @error('mensaje')
                                <p><strong>{{ $message }}</strong></p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <x-jet-label class="text-lg">
                                ¿Cúal es tu presupuesto? <span class="text-red-600">*</span>
                            </x-jet-label>
                            <x-jet-input wire:model="presupuesto" name="presupuesto" type="text" class="w-full mt-1">
                            </x-jet-input>
                            <x-jet-input-error for="presupuesto" />
                        </div>


                    </div>

                    <div class="my-2  text-right">
                        <button type="submit"
                            class="font-medium tracking-wide bg-gray-700 hover:bg-gray-600 text-gray-50 rounded-lg px-4 py-2   
                          focus:outline-none focus:shadow-outline">
                            ENVIAR
                        </button>
                    </div>
                </form>

            </div>


        </div>
        <div class="container">
            <p class="my-4 text-3xl text-gray-600 font-semibold">Escríbenos</p>
            <p class="my-2 text-base font-base">Estaremos dispuestos para ayudarte crecer.</p>
            <div class="pb-8">
                <div class="grid grid-cols-2 text-center ">
                    <div class=" border-r-2 border-gray-500 border-b-2 border-opacity-10 py-4 border-t-2">
                        <div>
                            <i class="far fa-envelope color-icon-footer"></i>
                            <h1 class="font-bold text-sm lg:text-base">Email</h1>
                            <p class="text-xs lg:text-base">atencion@trepstom.com</p>
                        </div>
                    </div>
                    <div class="border-gray-500 border-b-2 border-opacity-10 py-4 border-t-2">
                        <div>
                            <i class="fas fa-mobile-alt color-icon-footer"></i>
                            <h1 class="font-bold text-sm lg:text-base">Celular</h1>
                            <p class="text-xs lg:text-base">902 829 056</p>
                            <p class="text-xs lg:text-base">998 905 385</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    </div>
    @if (session('info'))
        <script>
            alert("{{ session('info') }}")
        </script>
    @endif


</x-app-layout>
