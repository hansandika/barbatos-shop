<x-app>
    <div class="d-flex justify-content-center align-items-center container vh-100">
        <div class="d-flex" style="width:800px; height:400px; background:white">
            <img style="width:200px; height:200px;" src="{{ asset('image/laptop.jpg') }}" alt="Card image cap">

            <form action="" class="p-1">
                @csrf
                <div style="font-size: 24px; font-weight:800; color:black;">
                    Asus Zenbook 14 UX425EA
                </div>
                <div>
                    <div class="d-flex">
                        <div style="width:120px; opacity: 0.8; ">
                            Detail
                        </div>
                        <div style="width:100%;">
                            Speksifikasi:
                            - AMD RYZEN 3 3250U Processor 2.6 GHz(4M Cache,up to 3.5 GHz, 2 cores)
                            - 8GB RAM DDR4
                            - 512GB M.2 NVMe™ PCIe® 3.0 SSD
                            - VGA AMD Radeon VEGA-3
                            - Windows 11 Home 64bit
                            - 14.0-inch (16:9) LED-backlit FULL HD (1920x1080) 60Hz Anti-Glare display with 45% NTSC
                            Brightness 250nits / FULL HD IPS
                            - ASUS SonicMaster stereo audio system with surround-sound
                            - Full-size backlit (optional), with 1.4mm key travel
                            - Dual-band 802.11ac Wi-Fi with advanced Wi-Fi Master technology & Bluetooth V4.2
                            - VGA Webcam, Card Reader, HDMI x 1
                        </div>
                    </div>
                    <div class="d-flex">
                        <div style="width:120px; opacity: 0.8; ">
                            Price
                        </div>
                        <div style="width:100%;">
                            IDR 14.000.000
                        </div>
                    </div>
                    @auth
                        <div class="d-flex mt-2">
                            <div style="width:120px; opacity: 0.8; ">
                                Qty
                            </div>
                            <input class="form-control" type="text" required>
                        </div>
                    @endauth
                </div>
                @auth
                    <button class="btn btn btn-outline-secondary mt-2" type="submit">
                        Purchase
                    </button>
                @endauth
            </form>


        </div>
    </div>
</x-app>
