<div class="col-lg-6 p-4">

    <div class="form-group">
        <label for="title">Título Principal</label>
        <input type="text" name="title" class="form-control" wire:model="title">
        @error('title') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div class="form-group">
        <label for="subtitle">Subtitulo</label>
        <input type="text" name="subtitle" class="form-control" wire:model="subtitle">
        @error('subtitle') <span class="error">{{ $message }}</span> @enderror
    </div>

    <br>
    <hr>
    <br>

    <div class="form-group">
        <label for="cover">Foto de Portada</label>
        <input type="file" name="cover" class="form-control" wire:model="cover">
        @error('cover') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div class="form-group">
        <label for="logo">Logotipo</label>
        <input type="file" name="logo" class="form-control" wire:model="logo">
        @error('logo') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div class="mt-4 form-group">
        <button wire:click="store" class="btn btn-success rounded-0">Guardar</button>
    </div>
</div>
