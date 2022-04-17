
    <form wire:submit.prevent='login'>
        <div class="row">
            @if (session()->has('error'))
            <div class="col-lg-12 alert alert-danger">
                {{ session('error') }}
            </div>
            @endif
            <div class="col-lg-12">
                <div class="form-group">
                    <input type="email" wire:model.lazy='email' class="form-control" placeholder="الايميل">
                    @error('email') <span class="text-danger error">{{ $message }}</span>@enderror

                </div>
            </div>

            <div class="col-lg-12">
                <div class="form-group">
                    <input type="password" wire:model.lazy='password' class="form-control" placeholder="كلمة السر">
                    @error('password') <span class="text-danger error">{{ $message }}</span>@enderror

                </div>
            </div>
            <div class="col-lg-12">
                <div class="send-btn">
                    <button type="submit" class="default-btn">
                        دخول الأن
                        <span></span>
                    </button>
                </div>
                <br>
            </div>
        </div>
    </form>
