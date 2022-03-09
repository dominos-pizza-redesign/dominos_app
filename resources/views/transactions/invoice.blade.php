<x-app-layout>
    <div class="flex items-center justify-between gap-16 bg-sky-600 px-12 py-10">
        <h1 id="title" class="text-3xl font-medium text-white">Invoice</h1>
        <div id="detail" class="flex flex-col text-right text-white">
            <h1 id="company_name" class="pb-3 text-2xl font-medium">Domino's Pizza</h1>
            <p class="text-sm font-light">Cibinong City Center</p>
            <p class="text-sm font-light">Bogor, Jawa Barat 16911</p>
        </div>
    </div>

    <div class="flex w-full justify-between p-12">
        <div>
            <p class="text-sm font-light uppercase">BILL TO:</p>
            <h1 class="text-base">{{ auth()->user()->first_name . ' ' . auth()->user()->last_name }}</h1>
            <p class="text-sm font-light">
                {{ auth()->user()->address .', ' .auth()->user()->city .', ' .auth()->user()->province .' ' .auth()->user()->postal_code }}
            </p>
        </div>
        <div>
            <p class="text-sm font-light">Date:</p>
            <h1 class="text-base">{{ now()->format('d/m/y') }}</h1>
        </div>
    </div>

    <div class="mx-12 border-t border-gray-400"></div>

    <div class="flex flex-col px-12 py-8">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden sm:rounded-lg">
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="py-3 px-6 text-left text-xs font-medium uppercase tracking-wider text-gray-700">
                                    #
                                </th>
                                <th scope="col"
                                    class="py-3 px-6 text-left text-xs font-medium uppercase tracking-wider text-gray-700">
                                    Name
                                </th>
                                <th scope="col"
                                    class="py-3 px-6 text-right text-xs font-medium uppercase tracking-wider text-gray-700">
                                    Category
                                </th>
                                <th scope="col"
                                    class="py-3 px-6 text-right text-xs font-medium uppercase tracking-wider text-gray-700">
                                    Quantity
                                </th>
                                <th scope="col"
                                    class="py-3 px-6 text-right text-xs font-medium uppercase tracking-wider text-gray-700">
                                    Price
                                </th>
                                <th scope="col"
                                    class="py-3 px-6 text-right text-xs font-medium uppercase tracking-wider text-gray-700">
                                    Amout
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $key => $product)
                                <tr class="border-b bg-white">
                                    <td class="whitespace-nowrap py-4 px-6 text-sm text-gray-900">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="whitespace-nowrap py-4 px-6 text-sm text-gray-900">
                                        {{ $product->name }}
                                    </td>
                                    <td class="whitespace-nowrap py-4 px-6 text-right text-sm text-gray-500">
                                        {{ $product->category_name }}
                                    </td>
                                    <td class="whitespace-nowrap py-4 px-6 text-right text-sm text-gray-500">
                                        {{ $product->quantity }}
                                    </td>
                                    <td class="whitespace-nowrap py-4 px-6 text-right text-sm text-gray-500">
                                        ${{ $product->price }}
                                    </td>
                                    <td class="whitespace-nowrap py-4 px-6 text-right text-sm text-gray-500">
                                        ${{ $product->total_price }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="flex w-full items-center justify-between bg-sky-600 px-12 py-8 print:justify-end">
        <button class="btn btn-secondary hocus:bg-sky-100 hocus:shadow hocus:text-sky-600 w-fit px-5 print:hidden"
            onclick="window.print()">Print</button>
        <div class="text-white">
            <p class="text-right text-sm uppercase">TOTAL</p>
            <h1 class="text-4xl font-semibold">${{ $products->sum('total_price') }}</h1>
        </div>
    </div>
</x-app-layout>
