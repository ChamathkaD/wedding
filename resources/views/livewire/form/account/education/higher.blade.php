<div>
    <form wire:submit.prevent="save" class="py-3">

        <div class="form-group">
            <label for="university" class="form-label">University / Institute</label>
            <input
                wire:model="university"
                type="text"
                placeholder="Enter University / Institute"
                onfocus="this.placeholder = ''"
                onblur="this.placeholder = 'Enter University / Institute'"
                class="single-input-secondary @error('university') border-danger @enderror"
            >
            @error('university')
            <small class="text-danger">
                {{ $message }}
            </small>
            @enderror
        </div>

        <div class="form-group">
            <label for="degree" class="form-label">Degree</label>
            <input
                wire:model="degree"
                type="text"
                placeholder="Enter Degree"
                onfocus="this.placeholder = ''"
                onblur="this.placeholder = 'Enter Degree'"
                class="single-input-secondary @error('degree') border-danger @enderror"
            >
            @error('degree')
            <small class="text-danger">
                {{ $message }}
            </small>
            @enderror
        </div>

        <div class="form-group">
            <label for="field" class="form-label">Field of Study</label>
            <input
                wire:model="field"
                type="text"
                placeholder="Enter Field of Study"
                onfocus="this.placeholder = ''"
                onblur="this.placeholder = 'Enter Field of Study'"
                class="single-input-secondary @error('field') border-danger @enderror"
            >
            @error('field')
            <small class="text-danger">
                {{ $message }}
            </small>
            @enderror
        </div>

        <div class="form-group form-row">
            <div class="col-sm">
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

            <div class="col-sm">
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
        </div>

        <div class="form-group">
            <label for="description" class="form-label">Description</label>
            <textarea
                wire:model="description"
                placeholder="Type Description"
                class="single-input-secondary @error('description') border-danger @enderror"
            ></textarea>
            @error('description')
            <small class="text-danger">
                {{ $message }}
            </small>
            @enderror
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="genric-btn purple">Add University / Institute</button>
        </div>

    </form>
</div>
