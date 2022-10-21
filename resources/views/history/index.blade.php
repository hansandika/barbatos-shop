<x-app-layout title="History">
    <div style="margin-left:500px; margin-right:500px;">
        <div style="margin-top:20px;background:rgb(157, 207, 251); height:40px; font-weight:600; color:rgb(53, 161, 255)"
            class="p-4 d-flex align-items-center">
            Transaction Date {{ '2022-07-05 04:42:02' }}
        </div>
        <div style="background:white; padding:12px;">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Sub Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Asus Zenbook 14 UX425EA</th>
                        <td>{{ 2 }}</td>
                        <td>IDR {{ 30000000 }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Asus Zenbook 14 UX425EA</th>
                        <td>{{ 2 }}</td>
                        <td>IDR {{ 30000000 }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Asus Zenbook 14 UX425EA</th>
                        <td>{{ 2 }}</td>
                        <td>{{ 30000000 }}</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th scope="col">Total</th>
                        <th scope="col">{{ 31 }} item(s)</th>
                        <th scope="col">IDR {{ 95000000 }}</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</x-app-layout>
