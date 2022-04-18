<form wire:submit.prevent='edit'>
    <div class="row">
        @if (session()->has('error'))
        <div class="col-lg-12 alert alert-danger">
            {{ session('error') }}
        </div>
        @endif

        <div class="col-lg-12">
            <div class="form-group">
                <input type="file" wire:model.lazy='images' class="form-control" multiple>
                @error('images.*') <span class="text-danger error">{{ $message }}</span>@enderror
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
