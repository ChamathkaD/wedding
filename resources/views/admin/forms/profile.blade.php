<form class="form-horizontal" action="#" method="POST" enctype="multipart/form-data">

    @csrf

    <div class="form-group row">
        <label for="name" class="col-sm-3 text-end control-label col-form-label">
            Name
        </label>
        <div class="col-sm-9">
            <input
                type="text"
                class="form-control"
                id="name"
                placeholder="First Name Here"
            >
        </div>
    </div>

    <div class="form-group row">
        <label for="email" class="col-sm-3 text-end control-label col-form-label">
            Email
        </label>
        <div class="col-sm-9">
            <input
                type="text"
                class="form-control"
                id="email"
                placeholder="Email Here"
                disabled
            >
        </div>
    </div>

    <div class="form-group row">
        <label for="image" class="col-sm-3 text-end control-label col-form-label">
            Image
        </label>
        <div class="col-sm-9">
            <input
                type="file"
                class="form-control"
                id="image"
            >
        </div>
    </div>

    <div class="form-group row">
        <label for="phone" class="col-sm-3 text-end control-label col-form-label">
            Phone
        </label>
        <div class="col-sm-9">
            <input
                type="text"
                class="form-control"
                id="phone"
                placeholder="Phone Here"
            >
        </div>
    </div>

    <div class="form-group row">
        <label for="address" class="col-sm-3 text-end control-label col-form-label">
            Address
        </label>
        <div class="col-sm-9">
            <input
                type="text"
                class="form-control"
                id="address"
                placeholder="Address Here"
            >
        </div>
    </div>

    <div class="form-group row">
        <label for="city" class="col-sm-3 text-end control-label col-form-label">
            City
        </label>
        <div class="col-sm-9">
            <input
                type="text"
                class="form-control"
                id="city"
                placeholder="City Here"
            >
        </div>
    </div>

    <div class="form-group row">
        <label for="state" class="col-sm-3 text-end control-label col-form-label">
            State
        </label>
        <div class="col-sm-9">
            <input
                type="text"
                class="form-control"
                id="state"
                placeholder="State Here"
            >
        </div>
    </div>

    <div class="form-group row">
        <label for="zip" class="col-sm-3 text-end control-label col-form-label">
            Zip
        </label>
        <div class="col-sm-9">
            <input
                type="text"
                class="form-control"
                id="zip"
                placeholder="Zip Here"
            >
        </div>
    </div>

    <div class="form-group row">
        <label for="notes" class="col-sm-3 text-end control-label col-form-label">
            Note
        </label>
        <div class="col-sm-9">
            <textarea
                id="notes"
                class="form-control"
                placeholder="Type something here"
            ></textarea>
        </div>
    </div>

    {{--<x-SubmitButton :btnText="$btnText" :cancelBtnRoute="$cancelBtnRoute"></x-SubmitButton>--}}

</form>
