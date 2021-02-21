<div>
    <h5>Imagen de Portada</h5>
    <input type="file" class="form-control w-25" wire:model="featuredImage">
    @error('photo') <span class="error">{{ $message }}</span> @enderror

    <div class="mt-4 form-group">
        <button wire:click="store" class="btn btn-success rounded-0">Guardar imagen</button>
    </div>
</div>