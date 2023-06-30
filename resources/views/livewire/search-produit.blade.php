<div x-data="{isEnable: true}" class="relative">
    <input @click.away = "isEnable= false ; @this.resetIndex() ;" @click="isEnable = true" 
    class=" bg-gray-300 text-gray-700 ml-3 px-5 focus-outline-none border-1 
     w-64 h-12 font-semibold placeholder-gray-500 
     " placeholder="search..." wire:model="query" 
    wire:keydown.arrow-down.prevent="incrementIndex"
    wire:keydown.arrow-up.prevent="decrementIndex"
    wire:keydown.backspace="resetIndex"
    >

    




      <button class="  absolute top-0 right-0 h-full  ml-5 inline-flex items-center px-4 py-2 bg-blue-800 border border-transparent
            rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700
            focus:bg-blue-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 
            transition ease-in-out duration-150">

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-center text-white font-extrabold">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>
        </button>
            

    @if (strlen($query)>3)
        
   
    <div class="absolute bg-gray-100 px-2 my-3 py-5 w-64 shadow-lg rounded"
    x-show="isEnable">
        @if(count($produits)>0) 
            <h1 class="font-extrabold uppercase text-center mt-1">resultat</h1>
            @foreach ($produits as $index => $prod)
                <div class="flex items-center px-0"> 
                    
                    <img src="{{ Storage::url($prod->url_prod)}}" alt="...." width="50" height="50">   
                <p class=" {{$index==$selectedIndex ? 'text-blue-500':''}}  ">{{$prod->nom_prod}}</p>
                </div>
            @endforeach
        @else
            <span class=" text-orange-700 text-center"> aucun resultat trouver pour "{{$query}}"</span>
        @endif


    </div>
    @endif
</div>
