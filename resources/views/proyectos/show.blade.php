<x-app-layout>
    <div class="container mx-auto mt-4 px-4 py-2">

        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="flex items-center justify-between py-2 px-6">
                <div>
                    <span class="text-lg font-bold text-gray-800">AUTOR: </span>
                    <span class="ml-1 text-lg text-gray-600 font-normal">{{$proyecto->user->name}}</span>
                </div>
                <div class="border rounded-lg px-1" style="padding-top: 2px;">
                    <button onclick="exportTableToExcel('table','{{$proyecto->name}}')" type="button" class="text-blue-700 px-1 leading-none rounded-lg transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 items-center">
                        EXCEL
                    </button>
                </div>
            </div>
        </div>

        <table id="table" class="border-collapse w-full my-4">
            <thead>
 
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
    </x-app-layout>