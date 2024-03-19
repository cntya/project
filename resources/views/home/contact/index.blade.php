<div class="container">
    <div class="text-center my-5">
        <h4 class="">Contact Kami</h4>
        <p>Berikan Saran Dan Masukkan Kepada Kami</p>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" id="name" placeholder="Masukkan Nama Anda">
                    </div>

                    <div class="form-group">
                        <label for="">Isi Pesan</label>
                        <textarea id="message" cols="30" rows="10" class="form-control" placeholder="Masukkan Pesan Anda"></textarea>
                    </div>

                    <!-- Tautan untuk mengarahkan ke WhatsApp dengan parameter -->
                    <a href="#" onclick="sendWhatsAppMessage()" class="btn btn-success px-5 mt-3"><i class="fab fa-whatsapp"></i>Kirim</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <!-- Peringatan pesan terkirim -->
            <div id="messageConfirmation" class="alert alert-success d-none">Pesan berhasil terkirim!</div>

            <div class="d-flex">
                <i class="fas fa-phone fa-2x px-3"></i><h3><small>081283119746</small></h3>
            </div>

            <div class="d-flex mt-3">
                <i class="fas fa-envelope fa-2x px-3"></i><h3><small>almakmurmts@gmail.com</small></h3>
            </div>

            <div class="d-flex mt-3">
                <i class="fas fa-map-marker fa-2x px-3"></i><h3><small>   
                    Kp. Mekar Mulya RT 004/004 Desa Parungpanjang </small></h3>
            </div>
        </div>
    </div>
</div>

<script>
    function sendWhatsAppMessage() {
        var name = document.getElementById("name").value;
        var message = document.getElementById("message").value;
        var phoneNumber = "6281283119746"; // Ganti dengan nomor WhatsApp tujuan Anda
        var url = "https://wa.me/" + phoneNumber + "?text=Nama:%20" + name + "%0AIsi%20Pesan:%20" + message;
        window.location.href = url;

        // Tampilkan pesan konfirmasi
        document.getElementById("messageConfirmation").classList.remove("d-none");
    }
</script>
