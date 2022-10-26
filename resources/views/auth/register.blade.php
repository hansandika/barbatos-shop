<x-app-layout title="Register">
    <div class="d-flex justify-content-center align-items-center">
        <div class="my-5">
            <div class="fw-bold d-flex justify-content-center bg-light align-items-center" style="height:60px;">
                Register
            </div>
            <div class="bg-white p-5">
                <form action="{{ route('register.store') }}" method="POST" style="width:400px;">
                    <div class="mb-3">
                        <label for="name" class="form-label fw-normal">Name</label>
                        <input type="text" id="name" class="form-control" placeholder="Enter Your Name"
                            name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label fw-normal">Email address</label>
                        <input type="email" id="email" class="form-control" placeholder="Enter Your Email"
                            name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label fw-normal">Password</label>
                        <input type="password" id="password" class="form-control" name="password"
                            placeholder="Enter Your Password" required>
                    </div>
                    <div class="mb-3">
                        <label for="confirm-password" class="form-label fw-normal">Confirm Password</label>
                        <input type="password" id="confirm-password" class="form-control" name="confirm-password"
                            placeholder="Re-type Your Password" required>
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label fw-normal">Gender</label>
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
                        <label for="dateOfBirth" class="form-label fw-normal">Date of Birth</label>
                        <input type="date" class="form-control" name="dateOfBirth" placeholder="mm/dd/yy" required
                            id="dateOfBirth">
                    </div>
                    <div class="mb-3">
                        <label for="country" class="form-label fw-normal">Country</label>
                        <select class="form-select" id="country" name="country">
                            <option disabled>select country</option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->country_code }}">{{ $country->country_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-outline-secondary" style="width:160px;">Register</button>
                    </div>
                </form>
                <div class="mt-3">
                    Have an account? <a href="{{ route('login.index') }}"><u>Login Here</u></a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
