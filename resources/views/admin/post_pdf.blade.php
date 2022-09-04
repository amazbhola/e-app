{{-- @extends('admin.layouts.master') --}}
@vite('resources/css/app.css')
{{-- @section('content') --}}
    <div class="w-full md:w-2/3 mx-auto bg-gray-100 pb-6 shadow-xl px-8">
        <div class="flex flex-col justify-center items-center">
            <h2 class="py-4 font-semibold text-2xl text-center text-gray-700 drop-shadow-xl uppercase">Abdul khakek Memorial Hospital & Diagnostic Center</h2>
            <p>Notun Bazar, Bhola Sadar, Bhola</p>
            <p>phone:- 0101010101 Mobile:01010101</p>
            <p>Email: kdsfjksdfkj@fskdf.com</p>
            <hr>
        </div>
        <div class="my-6 border border-gray-700 rounded">
            <h4 class="text-xl font-bold text-center px-4">Money Receipt</h4>
            <div class="flex items-center justify-between p-4">
                <div> <strong>Invoice no:</strong> sdf12312321</div>
                <div><strong>Invoice Date:</strong>12-12-2022 2:33 PM</div>
            </div>
        </div>
        <div>
            <div>
                <h6>Cons Name: Abdul Mojid(Shakil)</h6>
            </div>
            <div>
                <p>Speciaily:MBBS, BCS(H),FCPS</p>
            </div>
        </div>
        <div class="my-4">
            <table class="w-full text-left ">
                <thead class="uppercase ">
                    <tr class="border border-gray-800 rounded">
                        <th class="py-3 px-6">Code</th>
                        <th class="py-3 px-6">Test Name</th>
                        <th class="py-3 px-6">Delevery Date</th>
                        <th class="py-3 px-6">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border border-gray-800">
                        <td class="py-3 px-6">001</td>
                        <td class="py-3 px-6">CBC</td>
                        <td class="py-3 px-6">21-12-2022</td>
                        <td class="py-3 px-6">500.00</td>
                    </tr>
                    <tr class="border border-gray-800">
                        <td class="py-3 px-6">001</td>
                        <td class="py-3 px-6">CBC</td>
                        <td class="py-3 px-6">21-12-2022</td>
                        <td class="py-3 px-6">500.00</td>
                    </tr>
                    <tr class="border border-gray-800">
                        <td class="py-3 px-6">001</td>
                        <td class="py-3 px-6">CBC</td>
                        <td class="py-3 px-6">21-12-2022</td>
                        <td class="py-3 px-6">500.00</td>
                    </tr>
                    <tr class="border border-gray-800">
                        <td class="py-3 px-6">001</td>
                        <td class="py-3 px-6">CBC</td>
                        <td class="py-3 px-6">21-12-2022</td>
                        <td class="py-3 px-6">500.00</td>
                    </tr>
                    <tr class="border border-gray-800">
                        <td class="py-3 px-6">001</td>
                        <td class="py-3 px-6">CBC</td>
                        <td class="py-3 px-6">21-12-2022</td>
                        <td class="py-3 px-6">500.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="flex justify-between items-center">
            <div>
                <p>Amount of Total Bill in Word</p>
            </div>
            <div>
                <table>
                    <tbody class="space-y-2">
                        <tr class="">
                            <td class="text-right">Total Amount :</td>
                            <td class="text-right">1070.00</td>
                        </tr>
                        <tr>
                            <td class="text-right">Discount :</td>
                            <td class="text-right">1070.00</td>
                        </tr>
                        <tr>
                            <td class="text-right">Total Amount :</td>
                            <td class="text-right">1070.00</td>
                        </tr>
                        <tr>
                            <td class="text-right">Total Amount :</td>
                            <td class="text-right">70.00</td>
                        </tr>
                    </tbody>
                </table>
                <p class="text-xs text-right pt-8"><strong>Posted By :</strong> admin</p>
            </div>

        </div>
        <div>
            <p>Ref. By :0021</p>
        </div>

    </div>

{{-- @endsection --}}
