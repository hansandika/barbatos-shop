<x-app>
    <div style="margin-right:300px; margin-left:300px;">
        <div style="margin-top:40px; padding-bottom:100px;">
            @for ($i = 0; $i <= 5; $i++)
                <div class="d-flex" style="background:rgb(255, 255, 255); width:100%; margin-bottom: 12px;">
                    <img style="width:180px" src="{{ asset('image/laptop.jpg') }}" alt="Card image cap">
                    <div class="d-flex justify-content-between" style=" padding:10px; width:100%;">
                        <div>
                            <div style="font-weight: 600;  font-size: 24px;">
                                {{ Str::limit('Asus Zenbook 14 UX425EA', 16) }}
                            </div>
                            <div class="mt-2">
                                Quantity: {{ 4 }}
                            </div>
                            <div class="mt-3">
                                Total Price: IDR {{ 15000000 }}
                            </div>
                        </div>
                        <div>
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
<div class="d-flex align-items-center shadow-lg"
    style="bottom:0; background:white; height:60px; position: fixed; width:100vw; ">
    <div class="d-flex justify-content-center align-items-center"
        style="margin-right:300px; margin-left:300px; width:100vw;">
        <div style="padding-right: 50px;">
            Total Price: IDR {{ 12384734 }}
        </div>
        <div>
            <button class="btn btn-outline-success">
                Purchase
            </button>
        </div>
    </div>
</div>
