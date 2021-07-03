<form action="{{ route('admin.change.password') }}" method="POST" class="p-4">

    @csrf

    <div class="form-group row">
        <label for="current_password" class="col-sm-3 text-end control-label col-form-label">Current Password</label>
        <div class="col-sm-9">
            <input
            type="password"
            class="form-control @error('current_password') is-invalid @enderror"
            id="current_password"
            name="current_password"
            placeholder="Enter Current Password"
        >
        @error('current_password')
        <span class="invalid-feedback" role="alert">
                                <i class="far fa-exclamation-circle me-1"></i>
                                {{ $message }}
                            </span>
        @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-sm-3 text-end control-label col-form-label">New Password</label>
        <div class="col-sm-9">
            <input
            type="password"
            class="form-control @error('password') is-invalid @enderror"
            id="password"
            name="password"
            placeholder="Enter New Password"
        >
        @error('password')
        <span class="invalid-feedback" role="alert">
                                <i class="far fa-exclamation-circle me-1"></i>
                                {{ $message }}
                            </span>
        @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="password_confirmation" class="col-sm-3 text-end control-label col-form-label">Confirm Password</label>
        <div class="col-sm-9">
            <input
            type="password"
            class="form-control"
            id="password_confirmation"
            name="password_confirmation"
            placeholder="Re-Enter New Password"
        >
        </div>
    </div>

    <div class="col-sm-12 text-end">
        <button type="submit" class="btn btn-primary">
            Change Password
        </button>
    </div>

</form>
