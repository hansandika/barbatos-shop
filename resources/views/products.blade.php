<x-app>
    <div style="margin-top:32px; margin-left: 100px; margin-right:100px; width:full; background:white">
        {{-- Category --}}
        <div style="background:rgb(228, 228, 228); height:40px; font-weight:600;" class="p-4 d-flex align-items-center">
            Beauty &nbsp;<a href="" style="text-decoration:none;">View All</a>
        </div>

        <div class="d-flex gap-2 flex-wrap">
            @for ($i = 0; $i <= 9; $i++)
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
            @endfor
        </div>
    </div>
    <div class="mt-5" style="text-align:right">
        Pagination
    </div>
</x-app>
