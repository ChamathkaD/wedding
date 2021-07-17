<div>

    <button type="button" class="genric-btn purple mb-3" data-toggle="modal" data-target="#modalGalleryForm">
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

    <div class="our-memories-area">
        <div class="row">

            @foreach($photos as $photo)
                <div class="col-sm-3">
                    <div class="memory">
                        <div class="memories-img">
                            <img src="{{ asset('uploads/gallery/' . $photo->photo) }}" alt="">
                            <div class="menorie-icon" href="{{ asset('uploads/gallery/' . $photo->photo) }}">
                                <i class="fal fa-plus-circle"></i>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <!-- Shape Img -->
        <div class="memories-shape d-none d-xl-block">
            <img src="assets/img/memories/left-img.png" class="memories-shape1" alt="">
            <img src="assets/img/memories/right-img.png" class="memories-shape2" alt="">
        </div>
    </div>

</div>
