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
		
        <div class="bg-white rounded-lg shadow overflow-hidden mt-4">
			<div class="items-center justify-between py-2 px-6 mt-4">
                <div class="grid grid-cols-6 bg-white px-2">
                    <div class="col-span-3">
                        <label class="text-gray-800 text-sm font-bold"> PROYECTO</label>
                        <p>{{$proyecto->name}}</p>
                    </div>
                    <div class="col-span-2">
                        <label class="text-gray-800 text-sm font-bold"> UBICACION</label>
                        <p>{{$proyecto->ubicacion}}</p>
                    </div>
                    <div class="col-span-1">
                        <label class="text-gray-800 text-sm font-bold"> DISTANCIA</label>
                        <p>{{$proyecto->distancia}}</p>
                    </div>
                </div>
                <div class="grid grid-cols-6 bg-white px-2">
                    <div class="col-span-3">
                        <label class="text-gray-800 text-sm font-bold"> CONTRATANTE</label>
                        <p>{{$proyecto->contratante}}</p>
                    </div>
                    <div class="col-span-1">
                        <label class="text-gray-800 text-sm font-bold"> PRESENTACION</label>
                        <p>{{$proyecto->entrega}}</p>
                    </div>
                    <div class="col-span-1">
                        <label class="text-gray-800 text-sm font-bold"> FORMA</label>
                        <p>{{$proyecto->formato}}</p>
                    </div>
                    <div class="col-span-1">
                        <label class="text-gray-800 text-sm font-bold"> DECIMALES</label>
                        <p>{{$proyecto->precision}}</p>
                    </div>
                </div>
                <div class="grid grid-cols-6 bg-white px-2">
                    <div class="col-span-2">
                        <label class="text-gray-800 text-sm font-bold"> OFERENTE</label>
                        <p>{{$proyecto->oferente}}</p>
                    </div>
                    <div class="col-span-1">
                        <label class="text-gray-800 text-sm font-bold"> REPRESENTANTE</label>
                        <p>{{$proyecto->representante}}</p>
                    </div>
                    <div class="col-span-1">
                        <label class="text-gray-800 text-sm font-bold"> REFERENCIAL</label>
                        <p>{{$proyecto->referencial}}</p>
                    </div>
                    <div class="col-span-1">
                        <label class="text-gray-800 text-sm font-bold"> COSTO</label>
                        <p>{{$proyecto->gran_total}}</p>
                    </div>
                    <div class="col-span-1">
                        <label class="text-gray-800 text-sm font-bold">I.V.A.</label>
                        <p>{{$proyecto->impuesto}}</p>
                    </div>
                </div>
            </div>
            <table id="table" class="border-collapse w-full my-4">
                <thead>
                    <tr>
                        <th class='mt-3 px-4 py-1'  colspan="7">
                            <p class="text-gray-600 text-lg uppercase tracking-wide font-bold text-center mb-3">TABLA DE DESCRIPCION DE RUBROS, UNIDADES, CANTIDADES Y PRECIOS</p>
                        </th>
                    </tr>
                    <tr>
                        <th class="bg-gray-200 text-gray-600 border border-gray-300 text-sm font-bold lg:table-cell" style=" width:10%;">ID</th>
                        <th class="bg-gray-200 text-gray-600 border border-gray-300 text-sm font-bold lg:table-cell" style=" width:10%;">RUBRO Nº</th>
                        <th class="bg-gray-200 text-gray-600 border border-gray-300 text-sm font-bold lg:table-cell">DESCRIPCION</th>
                        <th class="bg-gray-200 text-gray-600 border border-gray-300 text-sm font-bold lg:table-cell" style=" width:10%;">UNIDAD</th>
                        <th class="bg-gray-200 text-gray-600 border border-gray-300 text-sm font-bold lg:table-cell" style=" width:10%;">CANTIDAD</th>
                        <th class="bg-gray-200 text-gray-600 border border-gray-300 text-sm font-bold lg:table-cell" style=" width:10%;">PRECIO</th>
                        <th class="bg-gray-200 text-gray-600 border border-gray-300 text-sm font-bold lg:table-cell" style=" width:10%;">TOTAL</th>
                    </tr>  
                </thead>
                <tbody>
                    @foreach ($proyecto->rubros as $rubro)
                    <tr>
                        <td class="px-2 bg-white text-gray-600 border border-gray-300 text-sm text-center font-bold lg:table-cell">{{$rubro->precio_id}}</td>
                        <td class="px-2 bg-white text-gray-600 border border-gray-300 text-sm text-center font-bold lg:table-cell">{{$rubro->orden}}</td>
                        <td class="px-2 bg-white text-gray-600 border border-gray-300 text-sm font-bold lg:table-cell">{{$rubro->rubro}}</td>
                        <td class="px-2 bg-white text-gray-600 border border-gray-300 text-sm text-center font-bold lg:table-cell">{{$rubro->unidad}}</td>
                        <td class="px-2 bg-white text-gray-600 border border-gray-300 text-sm text-center font-bold lg:table-cell">{{$rubro->cantidad}}</td>
                        <td class="px-2 bg-white text-gray-600 border border-gray-300 text-sm text-center font-bold lg:table-cell">{{$rubro->precio}}</td>
                        <td class="px-2 bg-white text-gray-600 border border-gray-300 text-sm text-center font-bold lg:table-cell">{{$rubro->cantidad * $rubro->precio}}</td>
                    </tr>
                    @endforeach
                    <tfoot>
                        <tr>
                            <td class="px-2 uppercase bg-gray-100 text-gray-600 border border-gray-300 text-sm font-bold lg:table-cell" colspan="5"></td>
                            <td class="px-2 uppercase bg-gray-100 text-gray-600 border border-gray-300 text-sm font-bold lg:table-cell text-center"> Subtotal</td>
                            <td class="px-2 uppercase bg-gray-100 text-gray-600 border border-gray-300 text-sm font-bold lg:table-cell text-center">{{ $proyecto->sub_total }}</td>
                        </tr>
                        <tr>
                            <td class="px-2 uppercase bg-gray-100 text-gray-600 border border-gray-300 text-sm font-bold lg:table-cell" colspan="5"></td>
                            <td class="px-2 uppercase bg-gray-100 text-gray-600 border border-gray-300 text-sm font-bold lg:table-cell text-center">IVA {{ $proyecto->impuesto }}%</td>
                            <td class="px-2 uppercase bg-gray-100 text-gray-600 border border-gray-300 text-sm font-bold lg:table-cell text-center">{{ $proyecto->sub_total * $proyecto->impuesto/100 }}</td>
                        </tr>
                        <tr>
                            <td class="px-2 uppercase bg-gray-100 text-gray-600 border border-gray-300 text-sm font-bold lg:table-cell" colspan="5"></td>
                            <td class="px-2 uppercase bg-gray-100 text-gray-600 border border-gray-300 text-sm font-bold lg:table-cell text-center">Total</td>
                            <td class="px-2 uppercase bg-gray-100 text-gray-600 border border-gray-300 text-sm font-bold lg:table-cell text-center">{{ $proyecto->gran_total }}</td>
                        </tr>
                    </tfoot>    
                </tbody>
            </table>
        </div>  
    </div>
</x-app-layout>