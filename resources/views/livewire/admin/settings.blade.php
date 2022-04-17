<form wire:submit.prevent='edit'>
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
                <input type="file" wire:model.lazy='image' class="form-control" placeholder="ارفع الصورة">
                @error('image') <span class="text-danger error">{{ $message }}</span>@enderror
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
            <div class="send-btn">
                <button type="submit" class="default-btn">
                    حفظ التغييرات
                    <span></span>
                </button>
            </div>
            <br>
        </div>
    </div>
</form>
