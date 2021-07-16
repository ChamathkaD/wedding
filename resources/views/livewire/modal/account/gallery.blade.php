<div class="ml-4">

    <button type="button" class="genric-btn purple" data-toggle="modal" data-target="#modalGalleryForm">
        Add Photos
    </button>

    <div class="modal fade" id="modalGalleryForm" tabindex="-1" aria-labelledby="galleryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="galleryModalLabel">Upload Your Storyline</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    @livewire('form.account.gallery')

                </div>
            </div>
        </div>
    </div>

</div>
