<x-app-layout title="Profile">
    <div class="container pt-5 d-flex justify-content-center align-items-center min-vh-90">
        <div class="bg-white" style="width:500px">
            <div style="background-color:rgb(247, 247, 247); height:40px;"
                class="p-4 d-flex align-items-center fw-semibold justify-content-center">
                Profile
            </div>
            <div class="bg-white p-3">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}"
                        disabled>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}"
                        disabled>
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label fw-normal">Gender</label>
                    <input type="text" class="form-control" id="gender" name="gender"
                        value="{{ $user->gender }}"disabled>
                </div>
                <div class="mb-3">
                    <label for="dateOfBirth" class="form-label fw-normal">Date of Birth</label>
                    <input type="text" class="form-control" id="dateOfBirth" name="dateOfBirth"
                        value="{{ $user->date_of_birth }}"disabled>
                </div>
                <div class="mb-3">
                    <label for="country" class="form-label fw-normal">Country</label>
                    <input type="text" class="form-control" id="country" name="country"
                        value="{{ $user->country->country_name }}"disabled>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
