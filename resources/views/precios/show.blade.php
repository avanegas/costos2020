<x-app-layout>
  <div class="container mx-auto"> <!-- px-4 py-2 md:py-24-->
      <div style="width: 28.52%" class="px-2 py-2">
          <div class="text-gray-600 text-sm tracking-wide font-bold text-center">AUTOR: INFOasistencia</div>
      </div>
      <div>
          <p class="text-gray-600 text-lg uppercase tracking-wide font-bold text-center mb-3">ANALISIS DE PRECIO UNITARIO</p>
      </div>

      <table class="border-collapse w-full">

        <thead>
            <tr>
              <th class="uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell">GRUPO:</th>
              <td class="px-2 bg-gray-100 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell"  colspan="4">{{$precio->grupo_precio->name}}</td>
              <th class="uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell">FECHA:</th>
              <td class="px-2 bg-gray-100 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell" >{{$precio->updated_at->isoFormat('MMMM Do YYYY')}}</td>
            </tr>
            <tr>
              <th class="uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell">RUBRO:</th>
              <td class="px-2 bg-gray-100 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell" colspan="4">{{$precio->name}}</td>
              <th class="uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell">UNIDAD:</th>
              <td class="px-2 bg-gray-100 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell" >{{$precio->unidad}}</td>
            </tr>
            <tr>
              <th class="uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell">ESPECIFICACION:</th>
              <td class="px-2 bg-gray-100 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell" colspan="6">{{$precio->detalle}}</td>
            </tr>
            <tr>
              <td class="px-2 uppercase bg-gray-100 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell" colspan="7">EQUIPOS</td>
            </tr>
            <tr>
              <th class="uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell">&nbsp;</th>
              <th class="uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell">Descripcion</th>
              <th class="uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell">Cantidad</th>
              <th class="uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell">Tarifa</th>
              <th class="uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell">Costo Hora</th>
              <th class="uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell">Rendimiento</th>
              <th class="uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell">Total</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($precio->equipos as $equipo)
            <tr>
                <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm text-center font-bold lg:table-cell">{{ $equipo->id }}</td>          
                <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell">{{ $equipo->name }}</td>
                <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm text-center font-bold lg:table-cell">{{ number_format($equipo->cantidad,4,',',' ') }}</td>
                <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm text-center font-bold lg:table-cell">{{ number_format($equipo->tarifa,4,',',' ') }}</td>
                <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm text-center font-bold lg:table-cell">{{ number_format(($equipo->tarifa * $equipo->cantidad),4,',',' ') }}</td>
                <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm text-center font-bold lg:table-cell">{{ number_format($equipo->rendimiento,4,',',' ') }}</td>
                <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm text-center font-bold lg:table-cell">{{ number_format(($equipo->tarifa * $equipo->cantidad * $equipo->rendimiento),4,',',' ') }}</td>
            </tr>
            @endforeach

            @for ($i=0; $i < 5 - count($precio->equipos); $i++)
            <tr>
              <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm text-center font-bold lg:table-cell">ND</td>
              <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell"></td>
              <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm text-center font-bold lg:table-cell"></td>
              <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm text-center font-bold lg:table-cell"></td>
              <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm text-center font-bold lg:table-cell"></td>
              <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm text-center font-bold lg:table-cell"></td>
              <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm text-center font-bold lg:table-cell"></td>
            </tr>
            @endfor
            
            <tr>
              <td class="px-2 uppercase bg-gray-100 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell" colspan="5">MANO DE OBRA</td>
              <td class="px-2 uppercase bg-gray-100 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell text-center">Subtotal</td>
              <td class="px-2 uppercase bg-gray-100 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell text-center">12.2040</td>
            </tr>
            <!-- FIN EQUIPO -->

            <tr>
              <th class="uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell">&nbsp;</th>
              <th class="uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell">Descripcion</th>
              <th class="uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell">Cantidad</th>
              <th class="uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell">Jornal Hora</th>
              <th class="uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell">Costo Hora</th>
              <th class="uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell">Rendimiento</th>
              <th class="uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell">Total</th>
            </tr>

            @foreach ($precio->obreros as $obrero)
            <tr>
                <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm text-center font-bold lg:table-cell">{{ $obrero->id }}</td>          
                <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell">{{ $obrero->name }}</td>
                <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm text-center font-bold lg:table-cell">{{ number_format($obrero->cantidad,4,',',' ') }}</td>
                <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm text-center font-bold lg:table-cell">{{ number_format($obrero->jornalhora,4,',',' ') }}</td>
                <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm text-center font-bold lg:table-cell">{{ number_format(($obrero->cantidad * $obrero->jornalhora),4,',',' ') }}</td>
                <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm text-center font-bold lg:table-cell">{{ number_format($obrero->rendimiento,4,',',' ') }}</td>
                <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm text-center font-bold lg:table-cell">{{ number_format(($obrero->jornalhora * $obrero->cantidad * $obrero->rendimiento),4,',',' ') }}</td>
            </tr>
            @endforeach

            @for ($i=0; $i < 7 - count($precio->obreros); $i++)
            <tr>
              <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm text-center font-bold lg:table-cell">ND</td>
              <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell"></td>
              <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm text-center font-bold lg:table-cell"></td>
              <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm text-center font-bold lg:table-cell"></td>
              <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm text-center font-bold lg:table-cell"></td>
              <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm text-center font-bold lg:table-cell"></td>
              <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm text-center font-bold lg:table-cell"></td>
            </tr>
            @endfor

            <tr>
              <td class="px-2 uppercase bg-gray-100 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell" colspan="5">MATERIALES</td>
              <td class="px-2 uppercase bg-gray-100 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell text-center">Subtotal</td>
              <td class="px-2 uppercase bg-gray-100 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell text-center">25.1234</td>
            </tr>
            <!-- FIN OBRERO -->

            <tr>
              <th class="uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell">&nbsp;</th>
              <th class="uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell" colspan="2">Descripcion</th>
              <th class="uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell">Unidad</th>
              <th class="uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell">Cantidad</th>
              <th class="uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell">Precio</th>
              <th class="uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell">Total</th>
            </tr>

            @foreach ($precio->materials as $material)
            <tr>
                <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm text-center font-bold lg:table-cell">{{ $material->id }}</td>          
                <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell" colspan="2">{{ $material->name }}</td>
                <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell">{{ $material->unidad }}</td>
                <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm text-center font-bold lg:table-cell">{{ number_format($material->cantidad,4,',',' ') }}</td>
                <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm text-center font-bold lg:table-cell">{{ number_format($material->precio,4,',',' ') }}</td>
                <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm text-center font-bold lg:table-cell">{{ number_format(($material->precio * $material->cantidad),4,',',' ') }}</td>
            </tr>
            @endforeach

            @for ($i=0; $i < 7 - count($precio->materials); $i++)
            <tr>
              <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm text-center font-bold lg:table-cell">ND</td>
              <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell" colspan="2"></td>
              <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm text-center font-bold lg:table-cell"></td>
              <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm text-center font-bold lg:table-cell"></td>
              <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm text-center font-bold lg:table-cell"></td>
              <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm text-center font-bold lg:table-cell"></td>
            </tr>
            @endfor

            <tr>
              <td class="px-2 uppercase bg-gray-100 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell" colspan="5">TRANSPORTE</td>
              <td class="px-2 uppercase bg-gray-100 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell text-center">Subtotal</td>
              <td class="px-2 uppercase bg-gray-100 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell text-center">5.2351</td>
            </tr>
            <!-- FIN MATERIALES -->

            <tr>
              <th class="uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell">&nbsp;</th>
              <th class="uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell" colspan="2">Descripcion</th>
              <th class="uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell">Unidad</th>
              <th class="uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell">Cantidad</th>
              <th class="uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell">Tarifa</th>
              <th class="uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell">Total</th>
            </tr>


            @foreach ($precio->transportes as $transporte)
            <tr>
                <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm text-center font-bold lg:table-cell">{{ $transporte->id }}</td>          
                <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell" colspan="2">{{ $transporte->name }}</td>
                <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell">{{ $transporte->unidad }}</td>
                <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm text-center font-bold lg:table-cell">{{ number_format($transporte->cantidad,4,',',' ') }}</td>
                <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm text-center font-bold lg:table-cell">{{ number_format($transporte->tarifa,4,',',' ') }}</td>
                <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm text-center font-bold lg:table-cell">{{ number_format(($transporte->tarifa * $transporte->cantidad),4,',',' ') }}</td>
            </tr>
            @endforeach

            @for ($i=0; $i < 4 - count($precio->transportes); $i++)
            <tr>
              <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm text-center font-bold lg:table-cell">ND</td>
              <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell" colspan="2"></td>
              <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm text-center font-bold lg:table-cell"></td>
              <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm text-center font-bold lg:table-cell"></td>
              <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm text-center font-bold lg:table-cell"></td>
              <td class="px-2 bg-white text-gray-600 border border-gray-300 hidden text-sm text-center font-bold lg:table-cell"></td>
            </tr>
            @endfor

            <tr>
              <td class="px-2 uppercase bg-gray-100 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell" colspan="5"></td>
              <td class="px-2 uppercase bg-gray-100 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell text-center">Subtotal</td>
              <td class="px-2 uppercase bg-gray-100 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell text-center">3.2121</td>
            </tr>
            <!-- FIN TRANSPORTE -->
            <tr>
                <td class="px-2 uppercase bg-gray-100 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell" colspan="3">&nbsp;</td>
                <td class="px-2 uppercase bg-gray-100 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell" colspan="3">TOTAL DE COSTO DIRECTO</td>
                <td class="px-2 uppercase bg-gray-100 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell text-center"> 12.4242</td>
            </tr>
            <tr>
                <td class="px-2 uppercase bg-gray-100 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell" colspan="3">&nbsp;</td>
                <td class="px-2 uppercase bg-gray-100 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell" colspan="2">INDIRECTOS Y UTILIDADES %</td>
                <td class="px-2 uppercase bg-gray-100 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell text-center"> 18 %</td>
                <td class="px-2 uppercase bg-gray-100 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell text-center">3.2486</td>
            </tr>
            <tr>
                <td class="px-2 uppercase bg-gray-100 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell" colspan="3">&nbsp;</td>
                <td class="px-2 uppercase bg-gray-100 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell" colspan="2">OTROS INDIRECTOS %</td>
                <td class="px-2 uppercase bg-gray-100 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell text-center">5 %</td>
                <td class="px-2 uppercase bg-gray-100 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell text-center">1.3342</td>
            </tr>
            <tr>
                <td class="px-2 uppercase bg-gray-100 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell" colspan="3">&nbsp;</td>
                <td class="px-2 uppercase bg-gray-100 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell" colspan="3">COSTO TOTAL DEL RUBRO</td>
                <td class="px-2 uppercase bg-gray-100 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell text-center">35.3264</td>
            </tr>
            <tr>
                <td class="px-2 uppercase bg-gray-100 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell" colspan="3">&nbsp;</td>
                <td class="px-2 uppercase bg-gray-100 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell" colspan="3">VALOR OFERTADO</td>
                <td class="px-2 uppercase bg-gray-100 text-gray-600 border border-gray-300 hidden text-sm font-bold lg:table-cell text-center">35.35</td>
            </tr>
          </tbody>
      </table>
  </div>

<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->

  <div class="m-4">
    <style>
      [x-cloak] {
        display: none;
      }
    </style>

    <div class="antialiased sans-serif bg-gray-100 h-screen">
        <div x-data="app()" x-init="[initDate(), getNoOfDays()]" x-cloak>
            <div class="container mx-auto px-4 py-2 md:py-24">

                <div class="font-bold text-gray-800 text-xl mb-4">
                  Calendario de compromisos
                </div>

                <div class="bg-white rounded-lg shadow overflow-hidden">

                    <div class="flex items-center justify-between py-2 px-6">
                        <div>
                            <span x-text="MONTH_NAMES[month]" class="text-lg font-bold text-gray-800"></span>
                            <span x-text="year" class="ml-1 text-lg text-gray-600 font-normal"></span>
                        </div>
                        <div class="border rounded-lg px-1" style="padding-top: 2px;">
                            <button type="button" class="leading-none rounded-lg transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 items-center" :class="{'cursor-not-allowed opacity-25': month == 0 }" :disabled="month == 0 ? true : false" @click="month--; getNoOfDays()">
                                <svg class="h-6 w-6 text-gray-500 inline-flex leading-none" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                </svg>
                            </button>
                            <div class="border-r inline-flex h-6"></div>
                            <button type="button" class="leading-none rounded-lg transition ease-in-out duration-100 inline-flex items-center cursor-pointer hover:bg-gray-200 p-1" :class="{'cursor-not-allowed opacity-25': month == 11 }" :disabled="month == 11 ? true : false" @click="month++; getNoOfDays()">
                                <svg class="h-6 w-6 text-gray-500 inline-flex leading-none" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="-mx-1 -mb-1">
                        <div class="flex flex-wrap" style="margin-bottom: -40px;">
                            <template x-for="(day, index) in DAYS" :key="index">
                                <div style="width: 14.26%" class="px-2 py-2">
                                    <div x-text="day" class="text-gray-600 text-sm uppercase tracking-wide font-bold text-center"></div>
                                </div>
                            </template>
                        </div>

                        <div class="flex flex-wrap border-t border-l">
                            <template x-for="blankday in blankdays">
                                <div style="width: 14.28%; height: 120px" class="text-center border-r border-b px-4 pt-2"></div>
                            </template>
                            <template x-for="(date, dateIndex) in no_of_days" :key="dateIndex">
                                <div style="width: 14.28%; height: 120px" class="px-4 pt-2 border-r border-b relative">
                                    <div @click="showEventModal(date)" x-text="date" class="inline-flex w-6 h-6 items-center justify-center cursor-pointer text-center leading-none rounded-full transition ease-in-out duration-100" :class="{'bg-blue-500 text-white': isToday(date) == true, 'text-gray-700 hover:bg-blue-200': isToday(date) == false }"></div>
                                    <div style="height: 80px;" class="overflow-y-auto mt-1">
                                        <!-- <div 
                                            class="absolute top-0 right-0 mt-2 mr-2 inline-flex items-center justify-center rounded-full text-sm w-6 h-6 bg-gray-700 text-white leading-none"
                                            x-show="events.filter(e => e.event_date === new Date(year, month, date).toDateString()).length"
                                            x-text="events.filter(e => e.event_date === new Date(year, month, date).toDateString()).length"></div> -->

                                        <template x-for="event in events.filter(e => new Date(e.event_date).toDateString() ===  new Date(year, month, date).toDateString() )">
                                            <div class="px-2 py-1 rounded-lg mt-1 overflow-hidden border" :class="{
                                                          'border-blue-200 text-blue-800 bg-blue-100': event.event_theme === 'blue',
                                                          'border-red-200 text-red-800 bg-red-100': event.event_theme === 'red',
                                                          'border-yellow-200 text-yellow-800 bg-yellow-100': event.event_theme === 'yellow',
                                                          'border-green-200 text-green-800 bg-green-100': event.event_theme === 'green',
                                                          'border-purple-200 text-purple-800 bg-purple-100': event.event_theme === 'purple'
                                                        }">
                                                <p x-text="event.event_title" class="text-sm truncate leading-tight"></p>
                                            </div>
                                        </template>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div style=" background-color: rgba(0, 0, 0, 0.8)" class="fixed z-40 top-0 right-0 left-0 bottom-0 h-full w-full" x-show.transition.opacity="openEventModal">
                <div class="p-4 max-w-xl mx-auto relative left-0 right-0 overflow-hidden mt-24">
                    <div class="shadow absolute right-0 top-0 w-10 h-10 rounded-full bg-white text-gray-500 hover:text-gray-800 inline-flex items-center justify-center cursor-pointer" x-on:click="openEventModal = !openEventModal">
                        <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z" />
                        </svg>
                    </div>

                    <div class="shadow w-full rounded-lg bg-white overflow-hidden block p-8">

                        <h2 class="font-bold text-2xl mb-6 text-gray-800 border-b pb-2">Actividad</h2>

                        <div class="mb-4">
                            <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide">Detalle</label>
                            <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text" x-model="event_title">
                        </div>

                        <div class="mb-4">
                            <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide">Fecha</label>
                            <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text" x-model="event_date" readonly>
                        </div>

                        <div class="inline-block w-64 mb-4">
                            <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide">Caracteristica</label>
                            <div class="relative">
                                <select @change="event_theme = $event.target.value;" x-model="event_theme" class="block appearance-none w-full bg-gray-200 border-2 border-gray-200 hover:border-gray-500 px-4 py-2 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-blue-500 text-gray-700">
                                    <template x-for="(theme, index) in themes">
                                        <option :value="theme.value" x-text="theme.label"></option>
                                    </template>

                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 text-right">
                            <button type="button" class="bg-white hover:bg-gray-100 text-gray-700 font-semibold py-2 px-4 border border-gray-300 rounded-lg shadow-sm mr-2" @click="openEventModal = !openEventModal">
                                Cancel
                            </button>
                            <button type="button" class="bg-gray-800 hover:bg-gray-700 text-white font-semibold py-2 px-4 border border-gray-700 rounded-lg shadow-sm" @click="addEvent()">
                                Save Event
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Modal -->
        </div>
    </div>
  </div>

  <script>
    const MONTH_NAMES = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Augosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
    const DAYS = ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'];

    function app() {
        return {
            month: '',
            year: '',
            no_of_days: [],
            blankdays: [],
            days: ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'],

            events: [{
                    event_date: new Date(2021, 1, 15),
                    event_title: "Carnaval",
                    event_theme: 'blue'
                },

                {
                    event_date: new Date(2021, 1, 16),
                    event_title: "Carnaval",
                    event_theme: 'blue'
                },

                {
                    event_date: new Date(2021,1 ,27),
                    event_title: "Birthday",
                    event_theme: 'green'
                }
            ],
            event_title: '',
            event_date: '',
            event_theme: 'blue',

            themes: [{
                    value: "blue",
                    label: "Blue Theme"
                },
                {
                    value: "red",
                    label: "Red Theme"
                },
                {
                    value: "yellow",
                    label: "Yellow Theme"
                },
                {
                    value: "green",
                    label: "Green Theme"
                },
                {
                    value: "purple",
                    label: "Purple Theme"
                }
            ],

            openEventModal: false,

            initDate() {
                let today = new Date();
                this.month = today.getMonth();
                this.year = today.getFullYear();
                this.datepickerValue = new Date(this.year, this.month, today.getDate()).toDateString();
            },

            isToday(date) {
                const today = new Date();
                const d = new Date(this.year, this.month, date);

                return today.toDateString() === d.toDateString() ? true : false;
            },

            showEventModal(date) {
                // open the modal
                this.openEventModal = true;
                this.event_date = new Date(this.year, this.month, date).toDateString();
            },

            addEvent() {
                if (this.event_title == '') {
                    return;
                }

                this.events.push({
                    event_date: this.event_date,
                    event_title: this.event_title,
                    event_theme: this.event_theme
                });

                console.log(this.events);

                // clear the form data
                this.event_title = '';
                this.event_date = '';
                this.event_theme = 'blue';

                //close the modal
                this.openEventModal = false;
            },

            getNoOfDays() {
                let daysInMonth = new Date(this.year, this.month + 1, 0).getDate();

                // find where to start calendar day of week
                let dayOfWeek = new Date(this.year, this.month).getDay();
                let blankdaysArray = [];
                for (var i = 1; i <= dayOfWeek; i++) {
                    blankdaysArray.push(i);
                }

                let daysArray = [];
                for (var i = 1; i <= daysInMonth; i++) {
                    daysArray.push(i);
                }

                this.blankdays = blankdaysArray;
                this.no_of_days = daysArray;
            }
        }
    }
  </script>
</x-app-layout>