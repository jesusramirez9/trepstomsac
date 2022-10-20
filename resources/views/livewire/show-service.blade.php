<div>
    <div class="container ">
        <div class="text-center mb-16 ">
            <p class="font-semibold text-2xl text-gray-700">Tenemos la solución ideal para ti</p>
            <p class="my-3">Cada día, juntos, aprendemos, hacemos, crecemos, nos desarrollamos y realizamos. <br>
                En TREPSTOM compartimos una filosofía empresarial enfocada en aprovechar <br>
                nuestras potencialidades y ponerlas al servicio del cliente.</p>
        </div>
       
    </div>
<div class=" py-10 bg-gray-100">
    <div class="container">
       
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            @foreach ($services as $service)
            <div class="bg-white rounded  px-8 py-12 border-t-2 border-red-700 shadow-xl">

                <div class="flex justify-center mb-6">
                    <img src="{{ Storage::url($service->image) }}"
                        class="w-full" alt="">
                </div>

                <h3 class="text-center font-semibold text-lg">{{ $service->title }}</h3>
                <p class="pt-4">{{ $service->description }}</p>
            </div>
            @endforeach
        </div>

        {{-- <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-6 lg:gap-10 items-center bg-gray-50 p-8 rounded-lg mb-8">
            
                <div class="col-span-1">
                    <div>
                        <img src="{{ Storage::url($service->image) }}" class="w-full object-center object-cover rounded-sm" alt="">
                    </div>
                </div>

                <div class="col-span-2">
                    <div>
                        <h1
                            class="text-lg lg:text-2xl font-semibold text-gray-700 tracking-wide uppercase text-center mb-4">
                            {{ $service->title }}</h1>
                    </div>
                    <div>
                        <p class="text-base font-medium text-gray-500 text-justify ">{{ $service->description }}</p>
                    </div>
                </div>
            
        </div> --}}
        
        <div class="">
            {{$services->links()}}
        </div>
    </div>
</div>
    
</div>
