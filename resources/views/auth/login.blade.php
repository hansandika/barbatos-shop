<x-app>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div>
            <div class="fw-bold d-flex justify-content-center bg-secondary align-items-center" style="height:60px;">
                Login
            </div>
            <div style=" background:white;" class="p-5">
                <form class="" style="width:400px;" action="{{ route('login.validate') }}" method="post">
                    @csrf
                    <div class="mb-3 ">
                        <label class="form-label fw-normal">Email address</label>
                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp"
                            placeholder="Enter Your Email" required>
                    </div>
                    <div class="mb-3 ">
                        <label class="form-label fw-normal">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter Your Password"
                            required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" name="rememberMe">
                        <label class="form-check-label">Remember Me</label>
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
</x-app>
