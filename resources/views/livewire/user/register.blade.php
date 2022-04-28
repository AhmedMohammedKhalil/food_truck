<form wire:submit.prevent='register'>
    <div class="row">
        @if (session()->has('error'))
        <div class="col-lg-12 alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
        <div class="col-lg-12">
            <div class="form-group">
                <input type="text" wire:model.lazy='name' class="form-control" placeholder="الإسم">
                @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>
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
            <div class="form-group">
                <input type="password" wire:model.lazy='confirm_password' class="form-control" placeholder="أعد كلمة السر">
                @error('confirm_password') <span class="text-danger error">{{ $message }}</span>@enderror

            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <label for="type" class="ms-2">هل انت صاحب عربة طعام</label>
                <input type="checkbox" name="type" wire:model.lazy='type' value="owner">
            </div>
        </div>
        <div class="col-lg-12">
            <div class="send-btn">
                <button type="submit" class="default-btn">
                    إنشاء حساب
                    <span></span>
                </button>
            </div>
            <br>
            <span>إذا كنت تملك حساب <a href="{{ route('user.login') }}">سجل الأن</a></span>
        </div>
    </div>
</form>
