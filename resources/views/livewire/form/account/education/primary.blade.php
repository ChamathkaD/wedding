<div>
    <form wire:submit.prevent="save" class="py-3">

        <div class="form-group">
            <label for="school" class="form-label">School</label>
            <input
                wire:model="school"
                type="text"
                placeholder="Enter School"
                onfocus="this.placeholder = ''"
                onblur="this.placeholder = 'Enter School'"
                class="single-input-secondary @error('school') border-danger @enderror"
            >
            @error('school')
            <small class="text-danger">
                {{ $message }}
            </small>
            @enderror
        </div>

        <div class="form-group">
            <label for="from" class="form-label">From</label>
            <input
                wire:model="from"
                type="text"
                placeholder="From"
                onfocus="this.placeholder = ''"
                onblur="this.placeholder = 'Enter From'"
                class="single-input-secondary @error('from') border-danger @enderror"
            >
            @error('from')
            <small class="text-danger">
                {{ $message }}
            </small>
            @enderror
        </div>

        <div class="form-group">
            <label for="to" class="form-label">To</label>
            <input
                wire:model="to"
                type="text"
                placeholder="To"
                onfocus="this.placeholder = ''"
                onblur="this.placeholder = 'Enter To'"
                class="single-input-secondary @error('to') border-danger @enderror"
            >
            @error('to')
            <small class="text-danger">
                {{ $message }}
            </small>
            @enderror
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="genric-btn purple">Add School</button>
        </div>

    </form>
</div>
