<div>

    <div class="modal fade" id="modalSchoolForm" tabindex="-1" aria-labelledby="schoolModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="galleryModalLabel">Add School</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    @livewire('form.account.education.primary')

                </div>
            </div>
        </div>
    </div>

    @foreach($schools as $record)

        <div class="d-flex justify-content-start py-1">
            <h1 class="display-3 font-weight-normal">{{ sprintf('%02d', $loop->iteration) }}</h1>
            <div class="ml-3 mt-4">
                <h5>{{ $record->school }}</h5>
                <p>{{ $record->from }} - {{ $record->to }}</p>
            </div>
        </div>

    @endforeach

</div>
