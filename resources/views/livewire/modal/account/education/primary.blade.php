<div>
    <a href="#" class="genric-btn purple small" data-toggle="modal" data-target="#modalSchoolForm">Add School</a>

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
</div>
