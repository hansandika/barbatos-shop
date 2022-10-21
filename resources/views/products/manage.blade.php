<x-app-layout title="Manage Product">
    <div style="margin-left:360px; margin-right:360px; margin-top:40px;">
        {{-- Search bar & add button --}}
        <div class="d-flex justify-content-between">
            <div class="input-group mb-3" style="width:200px;">
                <input type="text" class="form-control" placeholder="Search">
                <a href="#" class="input-group-prepend">
                    <span class="input-group-text">
                        <svg width="14" height="32" viewBox="0 0 40 40" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M36.1837 33.8167L30.0003 27.6833C32.4005 24.6907 33.5628 20.8922 33.2483 17.0688C32.9339 13.2455 31.1664 9.68797 28.3095 7.12774C25.4526 4.56751 21.7233 3.19918 17.8885 3.30412C14.0537 3.40905 10.4049 4.97927 7.69223 7.6919C4.9796 10.4045 3.40938 14.0534 3.30445 17.8882C3.19951 21.723 4.56784 25.4523 7.12807 28.3092C9.6883 31.1661 13.2458 32.9335 17.0692 33.248C20.8925 33.5625 24.691 32.4002 27.6837 30L33.817 36.1333C33.9719 36.2895 34.1563 36.4135 34.3594 36.4981C34.5625 36.5828 34.7803 36.6263 35.0003 36.6263C35.2203 36.6263 35.4382 36.5828 35.6413 36.4981C35.8444 36.4135 36.0287 36.2895 36.1837 36.1333C36.4841 35.8226 36.652 35.4072 36.652 34.975C36.652 34.5428 36.4841 34.1274 36.1837 33.8167ZM18.3337 30C16.0262 30 13.7706 29.3158 11.852 28.0338C9.93344 26.7519 8.43809 24.9298 7.55507 22.798C6.67204 20.6662 6.44101 18.3204 6.89117 16.0573C7.34133 13.7942 8.45247 11.7154 10.0841 10.0838C11.7157 8.45214 13.7945 7.341 16.0576 6.89084C18.3207 6.44068 20.6665 6.67172 22.7983 7.55474C24.9301 8.43776 26.7522 9.93311 28.0341 11.8517C29.3161 13.7703 30.0003 16.0259 30.0003 18.3333C30.0003 21.4275 28.7712 24.395 26.5832 26.5829C24.3953 28.7708 21.4279 30 18.3337 30Z"
                                fill="#000000" />
                        </svg>

                    </span>
                </a>
            </div>
            <div>
                <button class="btn btn-secondary">
                    Add Product
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-plus" viewBox="0 0 16 16">
                            <path
                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                        </svg>
                    </span>
                </button>
            </div>
        </div>

        {{-- Content --}}
        <div>
            @for ($i = 0; $i <= 5; $i++)
                <div class="d-flex" style="background:rgb(255, 255, 255); width:100%; margin-bottom: 12px;">
                    <img style="width:180px" src="{{ asset('image/laptop.jpg') }}" alt="Card image cap">
                    <div class="d-flex justify-content-between" style=" padding:10px; width:100%;">
                        <div style="font-weight: 600;  font-size: 28px;">
                            Asus Zenbook 14 UX425EA
                        </div>
                        <div>
                            <button type="button" class="btn btn-outline-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z">
                                    </path>
                                </svg>
                            </button>
                            <button type="button" class="btn btn-outline-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                    <path
                                        d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            @endfor
        </div>

    </div>

    </x-app>
