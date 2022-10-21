<x-app-layout title="Register">
    <div class="d-flex justify-content-center align-items-center  min-vh-100">
        <div class="my-5">
            <div class="fw-bold d-flex justify-content-center bg-secondary align-items-center" style="height:60px;">
                Register
            </div>
            <div class="bg-white p-5">
                <form action="{{ route('register.store') }}" method="POST" style="width:400px;">
                    <div class="mb-3">
                        <label class="form-label fw-normal">Name</label>
                        <input type="email" class="form-control" placeholder="Enter Your Name" name="name"
                            required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-normal">Email address</label>
                        <input type="email" class="form-control" placeholder="Enter Your Email" name="email"
                            required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-normal">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter Your Password"
                            required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-normal">Confirm Password</label>
                        <input type="password" class="form-control" name="confirm-password"
                            placeholder="Re-type Your Password" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-normal">Gender</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male"
                                checked>
                            <label for="male" class="form-check-label fw-light">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                            <label for="female" class="form-check-label fw-light">
                                Female
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-normal">Date of Birth</label>
                        <input type="date" class="form-control" name="dateOfBirth" placeholder="mm/dd/yy" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-normal">Country</label>
                        <select class="form-select" id="country" name="country">
                            @foreach ($countries as $country)
                                <option disabled>select country</option>
                                <option value="{{ $country->country_code }}">{{ $country->country_name }}</option>
                            @endforeach
                        </select>
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
</x-app-layout>
