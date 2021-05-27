<div class="w-1/2 mx-auto mt-4 mb-4 border-4 rounded-md border-gray-300">         
    <form class="w-full">
        <div class="m-4">

            <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2" for="grid-first-name">
                Id Barang
            </label>        
            <div class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name">
                {{ $barang->id_barang }}
            </div>
            
            <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2" for="grid-first-name">
                Nama Barang
            </label>
            <div class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name">
                {{ $barang->nama }}
            </div>        
            
            
            <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2" for="grid-first-name">
                Jenis Barang
            </label>
            <div class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name">
                 {{ $barang->jenisBarang->jenis_barang }}
            </div>
            
            <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2" for="grid-first-name">
                Stok Tersisa
            </label>        
            <div class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name">
                   {{ $barang->stok}}
            </div>

            <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2" for="grid-first-name">
                Harga Barang
            </label>        
            <div class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name">
                @money($barang->harga)
            </div>

            <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2" for="grid-first-name">
                Harga Ganti Rusak
            </label>       
            <div class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name">
                @money($barang->ganti_rusak)
            </div>
            
            <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2" for="grid-first-name">
                Harga Ganti Hilang
            </label>       
            <div class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name">
                @money($barang->ganti_hilang)
            </div>
            
            <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2">
                Jumlah Pesanan
            </label>
            @if ($errors->has('jumlah_pesanan'))
                    <p class="text-red-500 text-xs italic">{{ $errors->first('ganti_hilang') }}</p>
            @endif

            <input wire:model="jumlah_pesanan" type="number" placeholder="Masukkan Jumlah Barang Yang Ingin Dipesan" class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">

            <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2" for="grid-first-name">
                Tanggal Mulai Pinjam
            </label>            
            @if ($errors->has('tanggal_mulai'))
                    <p class="text-red-500 text-xs italic">{{ $errors->first('ganti_hilang') }}</p>
            @endif
                  
            <input wire:model="tanggal_mulai" type="date" class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">

            <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2" for="grid-first-name">
                Tanggal Selesai Pinjam
            </label> 
            @if ($errors->has('tanggal_mulai'))
                    <p class="text-red-500 text-xs italic">{{ $errors->first('ganti_hilang') }}</p>
            @endif      
            <input wire:model="tanggal_selesai" type="date" class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
            
            <div class="flex justify-between">
                <a href="/" class="my-3 bg-red-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"> Cancel </a>
                <button wire:click.prevent="store('{{ $barang->id_barang }}')" type="button" class="my-3 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"> Sewa Sekarang</button>
            </div>
        </div>
        
    </form>                            
</div>