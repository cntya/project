<div class="container">
    <div class="row justify-content-center">
        <!-- Menggunakan justify-content-center untuk memusatkan baris -->
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-body justify-content-center align-item-center">
                    <div class="text-center"><strong>
                            <h4>LOGIN</h4>
                        </strong></div>
                    <center><img src="/img/logo.png " width="15%" alt=""></center>
                    <p class="text-center"> Masukkan Akses Akun Anda </p>
                    <form action="/login_user" method="POST">
                        @csrf
                        <div class="from-group">
                            <label for=""><b>Email address</b></label>
                            <input type="email" name="email" class="form-control" placeholder="name@example.com"
                                required>
                        </div>

                        <div class="from-group mt-3">
                            <label for=""><b>Password</b></label>
                            <input type="password" name="password" class="form-control" placeholder="******" required>
                        </div>
                        <div class="text-center"> <!-- Menggunakan text-center untuk memusatkan tombol -->
                            <a class='btn btn-primary btn-sm mt-4' href="javascript:history.back()">BACK</a>
                            <button class="btn btn-success btn-sm mt-4"> LOGIN <i
                                    class="fas fa-sign-in-alt"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
