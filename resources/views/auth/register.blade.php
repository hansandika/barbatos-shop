<x-app>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div>
            <div class="fw-bold d-flex justify-content-center bg-secondary align-items-center" style="height:60px;">
                Register
            </div>
            <div style=" background:white;" class="p-5">
                <form class="" style="width:400px;">

                    {{-- Name --}}
                    <div class="mb-3">
                        <label class="form-label fw-normal">Name</label>
                        <input type="email" class="form-control" aria-describedby="emailHelp"
                            placeholder="Enter Your Name" name="name" required>
                    </div>

                    {{-- Email --}}
                    <div class="mb-3">
                        <label class="form-label fw-normal">Email address</label>
                        <input type="email" class="form-control" aria-describedby="emailHelp"
                            placeholder="Enter Your Email" name="email" required>
                    </div>

                    {{-- Password --}}
                    <div class="mb-3">
                        <label class="form-label fw-normal">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter Your Password"
                            required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-normal">Confirm Password</label>
                        <input type="password" class="form-control" name="confirmPassword"
                            placeholder="Re-type Your Password" required>
                    </div>

                    {{-- Gender --}}
                    <div class="mb-3">
                        <label class="form-label fw-normal">Gender</label>
                        {{-- <input type="password" class="form-control" placeholder="Re-type Your Password" required> --}}
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="male" id="male">
                            <label class="form-check-label fw-light">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="female" id="female" checked>
                            <label class="form-check-label fw-light">
                                Female
                            </label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-normal">Confirm Password</label>
                        <input type="password" class="form-control" name="confirmPassword"
                            placeholder="Re-type Your Password" required>
                    </div>

                    {{-- Date of birth --}}
                    <div class="mb-3">
                        <label class="form-label fw-normal">Date of Birth</label>
                        <input type="date" class="form-control" name="dateOfBirth" placeholder="mm/dd/yy" required>
                    </div>

                    {{-- country --}}
                    <div class="mb-3">
                        <label class="form-label fw-normal">Date of Birth</label>
                        <x-country />
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-outline-secondary" style="width:160px;">Register</button>
                    </div>
                </form>
                <div class="mt-3">
                    Have an account? <a href="{{ route('login.show') }}"><u>Login Here</u></a>
                </div>
            </div>
        </div>
    </div>
</x-app>
