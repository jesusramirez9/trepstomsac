<div>
    <x-jet-danger-button wire:click="$set('open', true)">
        Crear nuevo post
    </x-jet-danger-button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            Crear nuevo post
        </x-slot>

        <x-slot name="content">

            <div wire:loading wire:target="image" class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                <strong class="font-bold">
                   Imagen Cargando
                </strong>
                <span class="block sm:inline">Espere un momento hasta que la imagen se haya procesado..</span>
            </div>

            @if ($image)
                <img src="{{$image->temporaryUrl()}}" alt="">

         
            @endif

            <div class="mb-4 mt-4">
                <x-jet-label value="Título del post" />
                <x-jet-input type="text" class="w-full" wire:model="title" />
                <x-jet-input-error for="title" />

            </div>
            <div class="mb-4">
                <x-jet-label value="Contenido del post" />
                <textarea wire:model.defer="content" class="form-control w-full" rows="6"></textarea>

                <x-jet-input-error for="content" />
            </div>
            <div class="mb-4">
                <input  type="file" wire:model="image" id="{{$identificador}}" accept="image/*">
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open', false)" class="mr-4">
                Cancelar
            </x-jet-secondary-button>

            <x-jet-danger-button wire:click="save" wire:loading.attr="disabled" wire:target="save, image" class="disabled:opacity-25">
                Crear Post
            </x-jet-danger-button>

            {{-- <span wire:loading wire:target="save">Cargando..</span> --}}
        </x-slot>

    </x-jet-dialog-modal>

</div>
