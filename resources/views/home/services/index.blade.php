<div class="row">
    @foreach ($services as $items)
        <div class="col-md-3 mb-4"> <!-- Menggunakan col-md-3 untuk membuat setiap kartu memiliki lebar yang sama di layar yang lebih besar -->
            <div class="card" style="display: flex; flex-direction: column; height: 100%;">
                <div class="mt-2" style="display: flex; justify-content: center; align-items: center; height:200px;">
                    <img src="{{ asset('pos_services/' . $items->icon) }}" id="preview" class="rounded" alt="Cinque Terre" style="max-width: 100%; max-height: 100%;">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $items->title }}</h5>
                    <p class="card-text">{!! strip_tags($items->desc) !!}</p>
                </div>
                <div class="card-footer" style="align-self: center;"> <!-- Tambahkan kelas card-footer dan atur align-self: center; -->
                    <!-- Tambahkan tombol atau teks tambahan di sini -->
                </div>
            </div>
        </div>
    @endforeach
</div>