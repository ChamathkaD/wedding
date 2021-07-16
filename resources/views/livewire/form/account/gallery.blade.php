<div>

    <form wire:submit.prevent="save">

        <div class="form-group">
            <label for="images" class="col-form-label">Choose Stories</label>
            <input
                type="file"
                id="images"
                wire:model="images"
                class="form-control rounded-0 @error('images') border-danger @enderror"
                multiple
            >
            @error('images.*')
            <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="genric-btn purple">Upload</button>
        </div>

    </form>
</div>
