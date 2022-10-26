<x-app-layout title="Login">
    <div class="d-flex justify-content-center align-items-center">
        <div class="my-5">
            <div class="fw-bold d-flex justify-content-center bg-light align-items-center" style="height:60px;">
                Login
            </div>
            <div class="bg-white p-5">
                <form class="" style="width:400px;" action="{{ route('login.validate') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label fw-normal">Email address</label>
                        <input type="email" id="email" class="form-control" name="email"
                            placeholder="Enter Your Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label fw-normal">Password</label>
                        <input type="password" id="password" class="form-control" name="password"
                            placeholder="Enter Your Password" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" id="remember" class="form-check-input" name="remember">
                        <label class="form-check-label" for="remember">Remember Me</label>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-outline-secondary" style="width:160px;">Login</button>
                    </div>
                </form>
                <div class="mt-3">
                    Don't have an account? <a href="{{ route('register.show') }}"><u>Register Here</u></a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
