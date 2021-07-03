<form id="contact-form" action="{{ route('user.update') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="col-lg-6">
        <div class="story-caption">
            <h4>Family Information</h4>

        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="select-itms">
                <select name="brother" id="brother" class="form-control @error('brother') is-invalid @enderror">
                    <option selected disabled value="{{ Auth::user()->brother }}">Number of brothers</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>

                </select>
                @error('brother')
                <small class="invalid-feedback">
                    {{ $message }}
                </small>
                @enderror
            </div>
        </div>

        <div class="col-lg-6">
            <div class="select-itms">
                <select name="sister" id="sister" class="form-control  @error('sister') is-invalid @enderror">
                    <option selected disabled value="{{ Auth::user()->sister }}">Number of sisters</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>

                @error('sister')
                <small class="invalid-feedback">
                    {{ $message }}
                </small>
                @enderror
            </div>
        </div>
    </div>

    <div class="row mt-4">

        <div class="col-lg-6">
            <div class="form-box mb-30">
                <input
                    type="text"
                    name="fatherName"
                    placeholder="Father's Name"
                    class="form-control @error('fatherName') is-invalid @enderror"
                    id="fatherName"
                    value="{{ Auth::user()->fatherName }}"
                >
                @error('fatherName')
                <small class="invalid-feedback">
                    {{ $message }}
                </small>
                @enderror
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-box mb-30">
                <input
                    type="text"
                    name="motherName"
                    placeholder="Mother's Name"
                    class="form-control @error('motherName') is-invalid @enderror"
                    id="motherName"
                    value="{{ Auth::user()->motherName }}"
                >
                @error('motherName')
                <small class="invalid-feedback">
                    {{ $message }}
                </small>
                @enderror
            </div>
        </div>
    </div>

    <div class="row">


        <div class="col-lg-12">
            <div class="form-box message-icon mb-30">
                            <textarea
                                name="otherDetails"
                                id="message"
                                placeholder="Other Details"
                                class="form-control  @error('otherDetails') is-invalid @enderror" >{{Auth::user()->otherDetails }}</textarea>
            </div>
            @error('otherDetails')
            <small class="invalid-feedback">
                {{ $message }}
            </small>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="submit-info">
                <button class="btn2" type="submit" class="form-control">Create</button>
            </div>
        </div>
    </div>


</form>
