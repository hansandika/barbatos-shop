<x-app>
    <div class="container">

        {{-- search bar --}}
        <div style="margin-top:32px;">
            <nav class="navbar navbar-light ">
                <form class="d-flex w-100">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
            </nav>
        </div>

        @for ($i = 0; $i <= 5; $i++)
            <div style="margin-top:32px; width:full; background:white">
                {{-- Category --}}
                <div style="background:rgb(228, 228, 228); height:40px; font-weight:600;"
                    class="p-4 d-flex align-items-center">
                    Beauty &nbsp;<a href="/products" style="text-decoration:none; ">View All</a>
                </div>

                <div class="d-flex overflow-auto gap-2 ">
                    @for ($i = 0; $i <= 5; $i++)
                        <a href="/productdetail/{{ 123 }}" style="text-decoration: none; color:black;">
                            <div class="p-3">
                                <div class="border border-1" style="width: 18rem; width: 220px;">
                                    <img style="width:220px" src="{{ asset('image/laptop.jpg') }}" alt="Card image cap">
                                    <div class="p-2">
                                        <div style="font-weight: 400">
                                            Asus Zenbook 14 UX425EA
                                        </div>
                                        <div style="font-weight: 500">
                                            IDR 14.000.000
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endfor
                </div>
            </div>
            <div style="margin-top:32px; width:full; background:white">
                {{-- Category --}}
                <div style="background:rgb(228, 228, 228); height:40px; font-weight:600;"
                    class="p-4 d-flex align-items-center">
                    Beauty &nbsp;<a href="/products" style="text-decoration:none; ">View All</a>
                </div>

                <div class="d-flex overflow-auto gap-2 ">
                    @for ($i = 0; $i <= 5; $i++)
                        <a href="/productdetail/{{ 123 }}" style="text-decoration: none; color:black;">
                            <div class="p-3">
                                <div class="border border-1" style="width: 18rem; width: 220px;">
                                    <img style="width:220px" src="{{ asset('image/laptop.jpg') }}" alt="Card image cap">
                                    <div class="p-2">
                                        <div style="font-weight: 400">
                                            Asus Zenbook 14 UX425EA
                                        </div>
                                        <div style="font-weight: 500">
                                            IDR 14.000.000
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endfor
                </div>
            </div>
        @endfor

    </div>
</x-app>
