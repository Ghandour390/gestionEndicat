@extends('layouts.app')
  {{--------------------------- modal ---------------------}}
  

<!-- Modal toggle -->
<button data-modal-target="default-modal" data-modal-toggle="default-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
    Ajouter
  </button>
  
  <!-- Main modal -->
  <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative p-4 w-full max-w-2xl max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
              <!-- Modal header -->
              <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                  <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                      Ajouter
                  </h3>
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                      </svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>
              <!-- Modal body -->
              <form class="max-w-md mx-auto bg-white p-8 rounded-xl shadow-md space-y-6" method="POST" action="{{$route.'/create'}}">
                @csrf
                @method('POST')
                @foreach ( $column as $key=>$value )
                <div>
                    @if($key == 'select')
                    @foreach ($value as $key1 => $value1)
                    <label for="{{$key1}}" class="block text-sm font-medium text-gray-700 mb-1">{{ ucfirst(str_replace('_id', '', $key1)) }}</label>
                        <select name="{{$key1}}" id="{{$key1}}" class="mt-1.5 w-full rounded-lg border-gray-300 text-gray-700 sm:text-sm">
                            @foreach ($value1 as $item)
                                <option value="{{$item->id}}">{{$item->name ?? $item->titre}}</option>
                            @endforeach
                        </select>
                    @endforeach
                   {{-- @foreach ($value as $rol)
                       
                   
                   <select name="{{$role}}" id="{{$rol}}" class="mt-1.5 w-full rounded-lg border-gray-300 text-gray-700 sm:text-sm">
                    @foreach ($ as $itemkey=>$itemvalue)
                        <option value="{{$itemvalue->id}}">{{$itemvalue->name   }}</option>
                    @endforeach
                   </select> --}}
                   @elseif($key!=='select')
                    <label for="{{$value}}" class="block text-sm font-medium text-gray-700 mb-1">{{$key}}</label>
                    <input type="{{$value}}" id="name" name="{{$key}}" required
                    class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                @endif
                @endforeach
                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="default-modal" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">ajouter</button>
                    <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">anulue</button>
                </div>
            </form>
              <!-- Modal footer -->
              
          </div>
      </div>
  </div>
  