<div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">

                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    {{-- <span class="sr-only">Close modal</span> --}}
                </button>
                <form method="POST" action="{{ $route.'/update' }}" class="p-6 space-y-5">
                    @csrf
                     @method('PUT')
                  @foreach ($column as $key => $value)
                     @if ($key == 'select')
                           @foreach ($value as $key1 => $value1)
                                 <div>
                                     <label for="{{ $key1 }}" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                         {{ ucfirst(str_replace('_id', '', $key1)) }}
                                     </label>
                                     <select name="{{ $key1 }}" id="{{ $key1 }}"
                                             class="w-full rounded-md border-gray-300 text-sm dark:bg-gray-800 dark:border-gray-600 dark:text-white focus:ring-blue-500 focus:border-blue-500">
                                             @foreach ($value1 as $item)
              
                                               <option value="{{ $item->id ?? $key1}}">{{ $item->name ?? $item->titre ?? $item}}</option>
                                               {{-- @dd($item->id    ) --}}
                                             @endforeach
                                     </select>
                                 </div>
                            @endforeach
                          @elseif($key == "status")
                             <label for="{{ $key }}" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                 {{ ucfirst($key) }}
                             </label>
                             <select name="{{ $key }}" id="{{ $key }}"
                                 class="w-full rounded-md border-gray-300 text-sm dark:bg-gray-800 dark:border-gray-600 dark:text-white focus:ring-blue-500 focus:border-blue-500">
                                 @foreach ($value as $item)
                                     <option value="{{ $item }}">{{ ucfirst($item) }}</option>
                                 @endforeach
                             </select>
                          </div>
                         @else
                             <div>
                                 <label for="{{ $value }}" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">{{ $key }}</label>
                                 <input type="{{ $value }}" name="{{ $key }}" required
                                        class="w-full rounded-md border-gray-300 p-2 dark:bg-gray-800 dark:border-gray-600 dark:text-white focus:ring-blue-500 focus:border-blue-500">
                             </div>
                         @endif
                     @endforeach
              
                     <!-- Buttons -->
                     <div class="flex justify-end pt-4 border-t dark:border-gray-600">
                         <button type="submit"
                                 class="bg-blue-600 text-white font-medium rounded-lg text-sm px-5 py-2.5 hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">
                             Ajouter
                         </button>
                         <button type="button" data-modal-hide="default-modal"
                                 class="ml-3 bg-gray-100 text-gray-800 font-medium rounded-lg text-sm px-5 py-2.5 hover:bg-gray-200 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600">
                             Annuler
                         </button>
                    </div>
                </form>
        </div>
    </div>
</div>
</div>
