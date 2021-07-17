<div>

    <div class="modal fade" id="modalUniversityForm" tabindex="-1" aria-labelledby="universityModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="galleryModalLabel">Add University / Institute</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    @livewire('form.account.education.higher')

                </div>
            </div>
        </div>
    </div>

    @foreach($universities as $record)

        <div class="d-flex justify-content-start py-1 align-items-center">
            <h1 class="display-3 font-weight-normal">{{ sprintf('%02d', $loop->iteration) }}</h1>
            <div class="ml-3 mt-4">
                <h5>{{ $record->university }}</h5>
                <h6>{{ $record->degree }}</h6>
                <p>{{ $record->field }}</p>
                <p>{{ $record->from }} - {{ $record->to }}</p>
                <small>{{ $record->description }}</small>
            </div>
        </div>

    @endforeach
</div>
