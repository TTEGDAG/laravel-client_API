<div class="card">
    <h5 class="card-header">{{$title}}</h5>
    <div class="card-body">
        <form action="{{ $action }}" method="{{ $formMethod ?? 'POST' }}" novalidate>
            <div class="mb-3">
                <label for="email">
                    Email:
                </label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="adam@adameczek.it" value="{{ $emailValue ?? old('email') }} " {{ $disabled ?? ''}}>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="first_name">
                    First Name:
                </label>
                <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" placeholder="Adam" value="{{ $firstNameValue ?? old('firstName') }}" {{ $disabled ?? ''}}>
                @error('first_name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="last_name">
                    Last Name:
                </label>
                <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" placeholder="Adameczek" value="{{ $lastNameValue ?? old('last_name') }}" {{ $disabled ?? ''}}>
                @error('last_name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="avatar">
                    Last Name:
                </label>
                <input type="text" class="form-control @error('avatar') is-invalid @enderror" id="avatar" name="avatar" placeholder="https://gallery/photo.jpg" value="{{ $avatarValue ?? old('avatar') }}" {{ $disabled ?? ''}}>
                @error('avatar')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">
                {{ $submitBtnText }}
            </button>
            @csrf
            @method( $method ?? 'POST' )
        </form>
    </div>
</div>