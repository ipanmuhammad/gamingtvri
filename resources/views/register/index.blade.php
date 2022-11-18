@extends('layout.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <main class="form-registration">
                <form action="/register" method="post">
                    @csrf
                    <img class="img-responsive" src="/img/login.png">
                    <h2 class="d-block text-center ">Register</h2>

                    <div class="form-floating">
                        <input type="text" name="name"
                            class="form-control rounded-top @error('name') is-invalid @enderror" id="name"
                            placeholder="Name" required value={{ old('name') }}>
                        <label for="name">Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="floatingInput" placeholder="name@example.com" required value={{ old('email') }}>
                        <label for="floatingInput">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror""
                            id="floatingPassword" placeholder="Password" required>
                        <label for="floatingPassword">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password_confirmation"
                            class="form-control rounded-bottom @error('password_confirmation') is-invalid @enderror"
                            id="password2" placeholder="Confirm Password" required>
                        <label for="password_confirmation">Confirm Password</label>
                        @error('password_confirmation')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Register</button>

                </form>
                <small class="d-block text-center mt-3">Sudah mempunyai akun? <a href="/login">Login Disini!</a></small>
            </main>

        </div>
    </div>
@endsection
