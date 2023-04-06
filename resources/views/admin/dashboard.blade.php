<x-app-layout title="Dashboard">
    <x-top-card title="Good afternoon, {{ auth()->user()->name }} 👋" subtitle="Here is what’s happening with your projects today:">
    </x-top-card>
    <div class="grid grid-cols-12 gap-6">
        <div class="flex flex-col col-span-full sm:col-span-6 md:col-span-4 bg-white shadow-md rounded-sm border border-ash-200">
            <div class="px-5 pt-5">
                <header class="flex justify-between items-start mb-2">
                    <h2 class="text-lg font-semibold text-ash-800 mb-2">Simulations</h2>
                    <div class="relative inline-flex"><button class="text-ash-400 hover:text-ash-500 rounded-full false" aria-haspopup="true" aria-expanded="false" style="outline: currentcolor none medium;"><span class="sr-only">Menu</span><svg class="w-8 h-8 fill-current" viewBox="0 0 32 32">
                                <circle cx="16" cy="16" r="2"></circle>
                                <circle cx="10" cy="16" r="2"></circle>
                                <circle cx="22" cy="16" r="2"></circle>
                            </svg></button>
                        <div class="origin-top-right z-10 absolute top-full right-0 min-w-36 bg-white border border-ash-200 py-1.5 rounded shadow-lg overflow-hidden mt-1" style="display: none;">
                            <ul>
                                <li><a class="font-medium text-sm text-ash-600 hover:text-ash-800 flex py-1 px-3" href="/#0" style="outline: currentcolor none medium;">Option 1</a></li>
                                <li><a class="font-medium text-sm text-ash-600 hover:text-ash-800 flex py-1 px-3" href="/#0" style="outline: currentcolor none medium;">Option 2</a></li>
                                <li><a class="font-medium text-sm text-red-500 hover:text-red-600 flex py-1 px-3" href="/#0" style="outline: currentcolor none medium;">Remove</a></li>
                            </ul>
                        </div>
                    </div>
                </header>
                <div class="flex justify-between">
                    @foreach($simulations as $key => $count)
                    <div class="flex flex-col items-center">
                        <div class="text-xs font-semibold text-ash-400 uppercase mb-1">{{$key}}</div>
                        <div class="flex items-start mb-3">
                            <div class="text-3xl font-bold text-ash-800 mr-2">{{$count}}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="flex flex-col col-span-full sm:col-span-6 md:col-span-4 bg-white shadow-md rounded-sm border border-ash-200">
            <div class="px-5 pt-5">
                <header class="flex justify-between items-start mb-2">
                    <h2 class="text-lg font-semibold text-ash-800 mb-2">Income</h2>
                    <div class="relative inline-flex">
                        <button class="text-ash-400 hover:text-ash-500 rounded-full false" aria-haspopup="true" aria-expanded="false" style="outline: currentcolor none medium;">
                            <span class="sr-only">Menu</span>
                            <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32">
                                <circle cx="16" cy="16" r="2"></circle>
                                <circle cx="10" cy="16" r="2"></circle>
                                <circle cx="22" cy="16" r="2"></circle>
                            </svg>
                        </button>
                        <div class="origin-top-right z-10 absolute top-full right-0 min-w-36 bg-white border border-ash-200 py-1.5 rounded shadow-lg overflow-hidden mt-1" style="display: none;">
                            <ul>
                                <li><a class="font-medium text-sm text-ash-600 hover:text-ash-800 flex py-1 px-3" href="/#0" style="outline: currentcolor none medium;">Option 1</a></li>
                                <li><a class="font-medium text-sm text-ash-600 hover:text-ash-800 flex py-1 px-3" href="/#0" style="outline: currentcolor none medium;">Option 2</a></li>
                                <li><a class="font-medium text-sm text-red-500 hover:text-red-600 flex py-1 px-3" href="/#0" style="outline: currentcolor none medium;">Remove</a></li>
                            </ul>
                        </div>
                    </div>
                </header>
                <div class="text-xs font-semibold text-ash-400 uppercase mb-1">Funding</div>
                <div class="flex items-start mb-3">
                    <div class="text-3xl font-bold text-ash-800 mr-2">$10,280</div>
                    <div class="text-sm font-semibold text-white px-1.5 bg-orange-500 rounded-full">+49%</div>
                </div>
            </div>
        </div>
        <div class="flex flex-col col-span-full sm:col-span-6 md:col-span-4 bg-white shadow-md rounded-sm border border-ash-200">
            <div class="px-5 pt-5">
                <header class="flex justify-between items-start mb-2">
                    <h2 class="text-lg font-semibold text-ash-800 mb-2">Expenses</h2>
                    <div class="relative inline-flex">
                        <button class="text-ash-400 hover:text-ash-500 rounded-full false" aria-haspopup="true" aria-expanded="false" style="outline: currentcolor none medium;">
                            <span class="sr-only">Menu</span>
                            <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32">
                                <circle cx="16" cy="16" r="2"></circle>
                                <circle cx="10" cy="16" r="2"></circle>
                                <circle cx="22" cy="16" r="2"></circle>
                            </svg>
                        </button>
                        <div class="origin-top-right z-10 absolute top-full right-0 min-w-36 bg-white border border-ash-200 py-1.5 rounded shadow-lg overflow-hidden mt-1" style="display: none;">
                            <ul>
                                <li><a class="font-medium text-sm text-ash-600 hover:text-ash-800 flex py-1 px-3" href="/#0" style="outline: currentcolor none medium;">Option 1</a></li>
                                <li><a class="font-medium text-sm text-ash-600 hover:text-ash-800 flex py-1 px-3" href="/#0" style="outline: currentcolor none medium;">Option 2</a></li>
                                <li><a class="font-medium text-sm text-red-500 hover:text-red-600 flex py-1 px-3" href="/#0" style="outline: currentcolor none medium;">Remove</a></li>
                            </ul>
                        </div>
                    </div>
                </header>
                <div class="text-xs font-semibold text-ash-400 uppercase mb-1">Funding</div>
                <div class="flex items-start mb-3">
                    <div class="text-3xl font-bold text-ash-800 mr-2">$2,780</div>
                    <div class="text-sm font-semibold text-white px-1.5 bg-orange-500 rounded-full">+49%</div>
                </div>
            </div>
        </div>
        <div class="col-span-full xl:col-span-6 bg-white shadow-lg rounded-sm border border-ash-200">
            <header class="px-5 py-4 border-b border-ash-100">
                <h2 class="font-semibold text-ash-800">Customers</h2>
            </header>
            <div class="p-3">
                <div class="overflow-x-auto">
                    <table class="table-auto w-full">
                        <thead class="text-xs font-semibold uppercase text-ash-400 bg-ash-50">
                            <tr>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Name</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Email</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Spent</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Country</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-sm divide-y divide-ash-100">
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wCEAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDIBERISGBUYLxoaL2NCOEJjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY//CABEIAEgASAMBIgACEQEDEQH/xAAbAAADAQEBAQEAAAAAAAAAAAAEBQYHAwIAAf/aAAgBAQAAAADXvX0/Es7sE7sGvwtTTG7B28JIvOdJ0nPaY5jNZYg3RJx6U/5D5013Dp4g6oWHlBNoIjgdPRLRWTIXOae/mKSrI4T8yQymrw5j7AimfX//xAAXAQADAQAAAAAAAAAAAAAAAAAAAQID/9oACgICEAMQAAAAYgYmRqiLuG1ARtebzUu0wIaphFk//8QALBAAAgEEAQIGAgICAwAAAAAAAQIDAAQFESEGEgcTIjFBURRhUnEyoRCB0f/aAAgBAQABPwD/AJ6k6rxnT1ru6uFErD0RryzVZ+Kjmby4sUzJ9tLomsZ4s4y6uPKvbSa1H8we8CluorqyFxayrLE67R0OwRVuKTZ9I/kCaEkf8xU+RWKXsGiKyfUUFhYTXMpGkUms1c3GUv5MhdsWnkPpT3CL8CklPmhFJeT4WMbNHpjKZXFvfx2U0V5Dye5decv/ALXQvV9xhrp7K6L/AIzHUkTe6H7FWxDIrIQVI2D91JcJEjxknuY0gQw7HI177q5kgRyASa6ruBMYLZSewku/9CstkxJI8UB49mcfP6rw86bgt8fHfSxhriTnZHtSAqmipFeI+BiFqmbtodTQHUxQf5JXQ18b/pu2LHbRkxGsowEzDu1tPf69zuom3bbI0de1ZCdhO21CgV1pmzJO8FudcdruK6UxQzPUVtbONxBu56vRDiccAtpcyxgaVLYHf+qxf5Ut0lzBaXlqHAby5pGPG9c7NdbyZFoJLYwzPB5bFgj9oavCS6L4S6jbkpIOKy+3u3hXhmVUDf3xUl7PDCD5yHj6rIXtzM0xkkIZt/8AQrM+qQsB6fv7roO+tosvFGFZJ+dt8GrTJxoRHIQQRV1kbG0ILSRwxkEs7cCnymOuQ0vejQkepiOBXhhewvms1BbKWgkmMkbD2C7NdUvJD58sQYuE2Avv7AD/AG1PhrUqoE++329VZmQiG7ZTyWVN/QNXDfls6shOh6OKxUb2OVg7u6ORjxsVhrqO/tu2TQnj4ZaurfKwdxtWhlgb4MXcyV4gZK7ssRBYTTFrq7DEqFCiOKvCa4Fv1T5JJCzW7VnFkWUuhG2OuaSUg1e9O29/cPIs0kYk/wA4wNgmpPDi+JHlSL2k7UMNFatPCe5mlWS8vgg2D6E9QrMdGZCzYXOMlMjJ7dh7XFWt71FHZSrL5S3KbCCaMqSfjeqzVvmJOoBcZ3kzcB15VV+hXhnhy3Ukt+0ifj2ymOH7es1IUVWUjlz6vo8cChJxWFxssLpc3Cab3jj+f7NQgxgdwUMfgUqGQbOz+hxUtvo8W6n991Za0l7JJFRT2Hvb71V9iYc7HHZSyNGjSBmK/IHxUSpjboNbWxW3WTyvLRBwvyay0SrjGljY+W8/eF19irW5a1nSdApZDsBhsVYzq1jFdsD3SKCoP3VsTIxY81HJunAZeDU8fq79bHsR9ioYfxs95O+EcgUZEtr8rIB2Oe4Vm1LYtVjAIMg/Wq//xAAbEQACAgMBAAAAAAAAAAAAAAAAEQECEBIxQf/aAAgBAgEBPwBm0DjN+FRlMWPBlSRCNRoZGZ4I/8QAHREAAgIDAQEBAAAAAAAAAAAAAAECERASMQNBUf/aAAgBAwEBPwBRb4atCTxR5dJu2JE0RaoifSif5hM2Y5uiK2JqmLPn0l0//9k=" alt="Alex Shatov" width="40" height="40"></div>
                                        <div class="font-medium text-ash-800">Alex Shatov</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">alexshatov@gmail.com</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left font-medium text-green-500">$2,890.66</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">🇺🇸</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wCEAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDIBERISGBUYLxoaL2NCOEJjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY//CABEIAEgASAMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAAGBwMEBQIBCP/aAAgBAQAAAABr6vecprLSvUuLVNBDRwYNXjPE0vUob5U9uKsCpV9qJlOCegIqMW1x93tifGERtH2Kn02c2cTEVwDikTKPNWfHWi25NWKR4mrl+VYJe5tX/8QAFwEBAQEBAAAAAAAAAAAAAAAAAgEAA//aAAoCAhADEAAAALtikbDYg+nJQMqxjTIJgLn07cZZttv/xAAyEAABAwMCBQIEBAcAAAAAAAABAgMEAAURBiESEzFBUQciFCRhcSMyQ4EzQnKRodHx/9oACAEBAAE/AIqelJOwoVeb/atPQ/i7tOaitdis7qPgDqau/r/DD7jNus5eY6Bx9zhJrSmt9HaglhmTFFvmvH9TdCj/AFVDsVvQchlFG2Qj7Qyn+1Xy0Q3bS6gspPtpLfCRig62kbqFXW+QrPaZVwkugNR2y4aLi9YTn9QamK3T0jxUnCGkeBUphhExRabRyuLZJGdqtmndIX62MtuxnbfcE9JEdWM/cHY16c3u4224ztI3WSH3ogC4jp/Uapj8oJ61PQXIbg+lFPtNXeHIPOcTcHG/AHarpPu1znm2yZrz0YvgLBOxSner1MWgEEvNsg7IG1B9Ko4dOVY3zVh1S81wR34Lb7A3SsbOIpT3D6i6XnsgnnHklQ6qT/wmmlgJFOuFaVp7YpKc7VIsMJ9C1OjiKhvk16hswLK9bokNltvmIedUpA+wqdPZlS8uJSgDHGat8uxhp5pboAeRwha+ys1arcw5cij4tHLSSnIJG3mtNWwTdW2JAd5jUFt6QSf2AplJ80kZChTb2+K1BqeVAmLjoTkYzXqBdJ04Q57jJDbPE1nGMhVWduHOujy5XMUweoQkFQP70/YrUXOfCmIWpPuDbjK0K/xkUxLUuc88SpKQc77HNejjL01d0u7oVyglEVg9j3XTVNfmWKSFA5FXdrN5W4W+L2Cr9DYu1nfjPpDTfXi8EdDSFLts5xCwoHpkUm7SGkqU3JVxEYHY1GZflvoabSpaiegr06n2636Wi2ptQS4wMOnys7k1HcSvdKgRTX8VX2p1wpkpx0NaqbMSIqSw0688vACG05JrX89dss7cR10JlSN1sA5UhH1q4hudFadCRxcA3oxSCKsEJUdfOJAUdt60HDdfuMgqJ+HCMLUfPagufbnUlt0Fs9OKm75ISkq4EFWPNTghhlLpO/anp63AcqNeoOmH59vbkwWlvLaUS6gZUtef5qhIU2lbCgfw1Y3FG13K5P8AyUV9wdBy0GrJpG9Ij4nPR0k9G+HiUPuascQWuGGBjOcqPk0w62+zy3cKSdiFVcrVPiLLsErfY68APvT/ALq/S/neQDshIoKpTh7U8hvdRQ2VeSgZolR+30prCaLxFMzuAjJqNcQdirav/8QAHhEBAAICAQUAAAAAAAAAAAAAAQARAhAgEiEiMVH/2gAIAQIBAT8A1fB0ayag2QIfNJZKo7TFD3M/JsnVny//xAAcEQEAAgMAAwAAAAAAAAAAAAABAAIQERIgIVH/2gAIAQMBAT8AxzhwRjgNy1eYscDpg9PuJ8lXRqFavl//2Q==" alt="Philip Harbach" width="40" height="40"></div>
                                        <div class="font-medium text-ash-800">Philip Harbach</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">philip.h@gmail.com</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left font-medium text-green-500">$2,767.04</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">🇩🇪</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full" src="data:image/jpeg;base64,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" alt="Mirko Fisuk" width="40" height="40"></div>
                                        <div class="font-medium text-ash-800">Mirko Fisuk</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">mirkofisuk@gmail.com</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left font-medium text-green-500">$2,996.00</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">🇫🇷</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wCEAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDIBERISGBUYLxoaL2NCOEJjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY//CABEIAEgASAMBIgACEQEDEQH/xAAbAAACAgMBAAAAAAAAAAAAAAAEBQEGAgMHAP/aAAgBAQAAAADqnpHDN3RGcDVmrubxuifVZY9qVsebMfctLTV7qzNtnq49Zk6/oumwEY8OapjujL3raeUnUC/WutP7AvAHVmwNmVsOwD3qVB//xAAUAQEAAAAAAAAAAAAAAAAAAAAA/9oACgICEAMQAAAAAAAAAAAAP//EADIQAAIBAwIFAgMGBwAAAAAAAAECAwAEEQUSBiEiMVETQRAykRQgI2FxwVJTcoKSoeH/2gAIAQEAAT8ArHwuryGzQmRhnGcUNXYjcbZinkGra6huo90TZxyIPcVij2+5f3i2Vq0pwW7KPJrUbc6ikUiOXlkByc1KvE+iFnt4BPAnSisSdq1w5xZFq1y0QQwalEu54iuA4qC4SeMMv08fd4tu4oomDliETkq+TXD12JbQTFh6I6UYnkRU11CYwPUU1c21vBxVZXkO1Xk3I+335Vp10BGg37mxgnzioZN6g/Dc38tq3nGdhriK+F/qeqWMpIjmBjU+CBV/o1zqHDlumjzxRbYwNjxhtwxWmcO6zpelXlxPPtMcZdI89z+1aW+rpxdaNqZdkJYrh+kZU1pY32/L58nAqxu5M7GRRjy9K7kfKv8Al8J2K2khXJIViKtWWfiFxcAKg5nJ7VdXd1psCxWcfT2XHM4/IVqmuy29k9pb3lvIJ1xKLkFHBPetMmj1HXLZT1RWqh3dfI7GraOP8G4i5B8OQPPvS3G3UX9gWyKglygPwYZgYec1xVutLjUsDHqyrGD4BzWma3cQ6VZ3M8ZmzErN5z2NcUcRaHeRM8cLJP7gE9X6iuB0fYjzR7RdozL+1WS+nZov8DEfUVeNiWKQf0tWnzb4hzoZocovrXEulDWLwxjlGZQz474FabpipGbaRcxou3+2tW4clbVZ4HQDY31FcM2SNpdsjEhrZxgj9RUyoFkKkhSPbyKjWSW7mE2FT51ZT2NacxiIjY9QozKq7j2/UVd35ZRGvJT9TT20RQdA75p7cI+9MgitX01J7yCUjk4CvVrafYrL0o+r3yPIP/a1HUXs7BpEQu0RQlR7qe9PcwPbOIG7Q70P5Ubz7LEkzNkKcHB9jVjGLLT9xBWR+bGo5mmeM5+YZo/J37UwTp3YyewJ71d3tpFdW9pJKBNNyjTaeqkkjQMpYZx1Ant4Na20TWfqwtkzKEBA3A9yD/urC2ubdLhJjuVYeR8FhkipIBeaHKjH5lXB8Gv/xAAUEQEAAAAAAAAAAAAAAAAAAABA/9oACAECAQE/AE//xAAUEQEAAAAAAAAAAAAAAAAAAABA/9oACAEDAQE/AE//2Q==" alt="Olga Semklo" width="40" height="40"></div>
                                        <div class="font-medium text-ash-800">Olga Semklo</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">olga.s@cool.design</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left font-medium text-green-500">$1,220.66</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">🇮🇹</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full" src="data:image/jpeg;base64,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" alt="Burak Long" width="40" height="40"></div>
                                        <div class="font-medium text-ash-800">Burak Long</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">longburak@gmail.com</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left font-medium text-green-500">$1,890.66</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">🇬🇧</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-span-full xl:col-span-6 bg-white shadow-lg rounded-sm border border-ash-200">
            <header class="px-5 py-4 border-b border-ash-100">
                <h2 class="font-semibold text-ash-800">Recent Activity</h2>
            </header>
            <div class="p-3">
                <div>
                    <header class="text-xs uppercase text-ash-400 bg-ash-50 rounded-sm font-semibold p-2">Today</header>
                    <ul class="my-1">
                        <li class="flex px-2">
                            <div class="w-9 h-9 rounded-full flex-shrink-0 bg-orange-500 my-2 mr-3"><svg class="w-9 h-9 fill-current text-orange-50" viewBox="0 0 36 36">
                                    <path d="M18 10c-4.4 0-8 3.1-8 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L18.9 22H18c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                                </svg></div>
                            <div class="flex-grow flex items-center border-b border-ash-100 text-sm py-2">
                                <div class="flex-grow flex justify-between">
                                    <div class="self-center"><a class="font-medium text-ash-800 hover:text-ash-900" href="#0" style="outline: currentcolor none medium;">Nick Mark</a> mentioned <a class="font-medium text-ash-800" href="#0" style="outline: currentcolor none medium;">Sara Smith</a> in a new post</div>
                                    <div class="flex-shrink-0 self-end ml-2"><a class="font-medium text-orange-500 hover:text-orange-600" href="#0" style="outline: currentcolor none medium;">View<span class="hidden sm:inline"> -&gt;</span></a></div>
                                </div>
                            </div>
                        </li>
                        <li class="flex px-2">
                            <div class="w-9 h-9 rounded-full flex-shrink-0 bg-red-500 my-2 mr-3"><svg class="w-9 h-9 fill-current text-red-50" viewBox="0 0 36 36">
                                    <path d="M25 24H11a1 1 0 01-1-1v-5h2v4h12v-4h2v5a1 1 0 01-1 1zM14 13h8v2h-8z"></path>
                                </svg></div>
                            <div class="flex-grow flex items-center border-b border-ash-100 text-sm py-2">
                                <div class="flex-grow flex justify-between">
                                    <div class="self-center">The post <a class="font-medium text-ash-800" href="#0" style="outline: currentcolor none medium;">Post Name</a> was removed by <a class="font-medium text-ash-800 hover:text-ash-900" href="#0" style="outline: currentcolor none medium;">Nick Mark</a></div>
                                    <div class="flex-shrink-0 self-end ml-2"><a class="font-medium text-orange-500 hover:text-orange-600" href="#0" style="outline: currentcolor none medium;">View<span class="hidden sm:inline"> -&gt;</span></a></div>
                                </div>
                            </div>
                        </li>
                        <li class="flex px-2">
                            <div class="w-9 h-9 rounded-full flex-shrink-0 bg-green-500 my-2 mr-3"><svg class="w-9 h-9 fill-current text-green-50" viewBox="0 0 36 36">
                                    <path d="M15 13v-3l-5 4 5 4v-3h8a1 1 0 000-2h-8zM21 21h-8a1 1 0 000 2h8v3l5-4-5-4v3z"></path>
                                </svg></div>
                            <div class="flex-grow flex items-center text-sm py-2">
                                <div class="flex-grow flex justify-between">
                                    <div class="self-center"><a class="font-medium text-ash-800 hover:text-ash-900" href="#0" style="outline: currentcolor none medium;">Patrick Sullivan</a> published a new <a class="font-medium text-ash-800" href="#0" style="outline: currentcolor none medium;">post</a></div>
                                    <div class="flex-shrink-0 self-end ml-2"><a class="font-medium text-orange-500 hover:text-orange-600" href="#0" style="outline: currentcolor none medium;">View<span class="hidden sm:inline"> -&gt;</span></a></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div>
                    <header class="text-xs uppercase text-ash-400 bg-ash-50 rounded-sm font-semibold p-2">Yesterday</header>
                    <ul class="my-1">
                        <li class="flex px-2">
                            <div class="w-9 h-9 rounded-full flex-shrink-0 bg-light-blue-500 my-2 mr-3"><svg class="w-9 h-9 fill-current text-light-blue-50" viewBox="0 0 36 36">
                                    <path d="M23 11v2.085c-2.841.401-4.41 2.462-5.8 4.315-1.449 1.932-2.7 3.6-5.2 3.6h-1v2h1c3.5 0 5.253-2.338 6.8-4.4 1.449-1.932 2.7-3.6 5.2-3.6h3l-4-4zM15.406 16.455c.066-.087.125-.162.194-.254.314-.419.656-.872 1.033-1.33C15.475 13.802 14.038 13 12 13h-1v2h1c1.471 0 2.505.586 3.406 1.455zM24 21c-1.471 0-2.505-.586-3.406-1.455-.066.087-.125.162-.194.254-.316.422-.656.873-1.028 1.328.959.878 2.108 1.573 3.628 1.788V25l4-4h-3z"></path>
                                </svg></div>
                            <div class="flex-grow flex items-center border-b border-ash-100 text-sm py-2">
                                <div class="flex-grow flex justify-between">
                                    <div class="self-center"><a class="font-medium text-ash-800 hover:text-ash-900" href="#0" style="outline: currentcolor none medium;">240+</a> users have subscribed to <a class="font-medium text-ash-800" href="#0" style="outline: currentcolor none medium;">Newsletter #1</a></div>
                                    <div class="flex-shrink-0 self-end ml-2"><a class="font-medium text-orange-500 hover:text-orange-600" href="#0" style="outline: currentcolor none medium;">View<span class="hidden sm:inline"> -&gt;</span></a></div>
                                </div>
                            </div>
                        </li>
                        <li class="flex px-2">
                            <div class="w-9 h-9 rounded-full flex-shrink-0 bg-orange-500 my-2 mr-3"><svg class="w-9 h-9 fill-current text-orange-50" viewBox="0 0 36 36">
                                    <path d="M18 10c-4.4 0-8 3.1-8 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L18.9 22H18c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                                </svg></div>
                            <div class="flex-grow flex items-center text-sm py-2">
                                <div class="flex-grow flex justify-between">
                                    <div class="self-center">The post <a class="font-medium text-ash-800" href="#0" style="outline: currentcolor none medium;">Post Name</a> was suspended by <a class="font-medium text-ash-800 hover:text-ash-900" href="#0" style="outline: currentcolor none medium;">Nick Mark</a></div>
                                    <div class="flex-shrink-0 self-end ml-2"><a class="font-medium text-orange-500 hover:text-orange-600" href="#0" style="outline: currentcolor none medium;">View<span class="hidden sm:inline"> -&gt;</span></a></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>