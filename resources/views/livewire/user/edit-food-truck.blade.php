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
                <input type="text" wire:model.lazy='phone' class="form-control" placeholder="الموبايل">
                @error('phone') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <input type="text" wire:model.lazy='facebook' class="form-control" placeholder="فيسبوك">
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <input type="file" wire:model.lazy='image' class="form-control">
                @error('image') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>
        @if($foodtruck->status == 2)
            <div class="col-lg-12">
                <div class="form-group">
                    <input type="text" wire:model.lazy='license_no' class="form-control" placeholder="رقم الترخيص">
                    @error('license_no') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
            </div>
        @endif
        <div class="col-lg-12">
            <div class="form-group">
                <textarea name="description" class="form-control h-auto" wire:model.lazy='description' id="description"
                    cols="30" rows="5" placeholder="تفاصيل"></textarea>
                @error('description') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <textarea name="worktime" class="form-control h-auto" id="worktime" wire:model.lazy='worktime' cols="30"
                    rows="5" placeholder="مواعيد العمل"></textarea>
                @error('worktime') <span class="text-danger error">{{ $message }}</span>@enderror
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
