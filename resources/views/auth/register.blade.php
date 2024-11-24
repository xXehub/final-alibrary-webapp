<x-app>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-7 mx-auto">
                <div class="card">
                    <div class="card-body">

                        <h5 class="card-title">
                            <i class="fas fa-chevron-right me-2" style="color: var(--bs-primary);"></i>
                            Registrasi Akun
                        </h5>

                        <div class="border-bottom my-3"></div>

                        <form id="form">

                            @csrf

                            <div class="mb-3">
                                <x-input-label for="name" :value="__('Username')" />
                                
                                <x-text-input class="block w-full" type="text" id="name" name="name"
                                    :value="old('name')" :messages="$errors->get('name')" required autofocus autocomplete="name" />
                            </div>

                            <div class="mb-3">
                                <x-input-label for="email" :value="__('Email')" />

                                <x-text-input class="block w-full" id="email" type="email" name="email"
                                    :value="old('email')" :messages="$errors->get('email')" required autocomplete="email" />

                                <div class="form-text">
                                    Please use your real email for future recovery.
                                </div>
                            </div>

                            <div class="mb-3">
                                <x-input-label for="gender" :value="__('Gender')" />

                                <select class="form-select" name="gender">
                                    <option selected value="M">Pria</option>
                                    <option value="F">Wanita</option>
                                </select>
                            </div>

                            <div class="row mb-3">
                                <div class="col">
                                    <div>
                                        <x-input-label for="password" :value="__('Password')" />

                                        <x-text-input id="password" class="block w-full" type="password"
                                            name="password" :messages="$errors->get('password')" required autocomplete="new-password" />
                                    </div>
                                </div>
                                <div class="col">
                                    <div>
                                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                        <x-text-input id="password_confirmation" class="block w-full" type="password"
                                            name="password_confirmation" :messages="$errors->get('password_confirmation')" required
                                            autocomplete="new-password" />
                                    </div>
                                </div>
                                <div class="form-text">
                                    Password harus mengandung be 8-20 panjang karakter, mengandung huruf dan angka, dan tidak ada spasi
                                    , special characters, atau emoji.
                                </div>
                            </div>

                            <div class="d-grid gap-2">
                                <button class="btn btn-danger text-uppercase fw-bold" type="submit" id="submit">
                                    REGISTER
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('body')
        {!! HCaptcha::script() !!}

        <script>
            $(document).ready(function() {
                $('#form').submit(function(event) {
                    event.preventDefault();

                    const btn = $('#submit');
                    const previousBtn = btn.html();

                    $.ajax({
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        url: "{{ route('register') }}",
                        type: 'POST',
                        data: $('#form').serialize(),
                        dataType: 'JSON',
                        beforeSend: function() {
                            btn.html(
                                `<i class="fa-solid fa-spinner-third fa-spin me-2"></i>`
                            );
                            btn.attr("disabled", true);
                        },
                        error: function(data) {
                            sendMsg('error', data.responseJSON.message);

                            btn.html(previousBtn);
                            btn.attr("disabled", false);
                        },
                        success: function(data) {
                            btn.html(previousBtn);
                            btn.attr("disabled", false);
                            window.location.href = data.redirect;
                        }
                    })
                })
            });
        </script>
    @endpush
</x-app>
