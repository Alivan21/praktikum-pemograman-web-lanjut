@if ($message = Session::get('success'))
  <div id="alert" class="flex p-4 text-green-800 rounded-lg bg-green-50" role="alert">
    <ion-icon name="information-circle" class="w-5 h-5 flex-shrink-0"></ion-icon>
    <span class="sr-only">Info</span>
    <div class="ml-3 text-sm font-medium">
      {{ $message }}
    </div>
    <button type="button"
      class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8"
      data-dismiss-target="#alert" aria-label="Close">
      <span class="sr-only">Close</span>
      <ion-icon name="close" class="w-5 h-5"></ion-icon>
    </button>
  </div>
@elseif ($message = Session::get('delete'))
  <div id="alert" class="flex p-4 text-red-800 rounded-lg bg-red-50" role="alert">
    <ion-icon name="information-circle" class="w-5 h-5 flex-shrink-0"></ion-icon>
    <span class="sr-only">Info</span>
    <div class="ml-3 text-sm font-medium">
      {{ $message }}
    </div>
    <button type="button"
      class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8"
      data-dismiss-target="#alert" aria-label="Close">
      <span class="sr-only">Close</span>
      <ion-icon name="close" class="w-5 h-5"></ion-icon>
    </button>
  </div>
@endif
