<form wire:submit.prevent='edit'>
    <div class="row">
        @if (session()->has('error'))
        <div class="col-lg-12 alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
        <div class="col-lg-12">
            <div class="form-group">
                  <select class="form-control w-100 mb-3" name="region_id" id="region_id" wire:model.lazy='region_id'>
                    @foreach ($regions as $r)
                        <option value="{{ $r->id }}" @if($r->id == $region_id) selected @endif>{{ $r->name }}</option>
                    @endforeach
                  </select>
                  @error('region_id') <span class="text-danger error">{{ $message }}</span>@enderror

            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                <input type="text" wire:model.lazy='block' class="form-control" placeholder="البلوك">
                @error('block') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <input type="text" wire:model.lazy='streat' class="form-control" placeholder="الشارع">
                @error('streat') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <input type="text" wire:model.lazy='house' class="form-control" placeholder="المنزل">
                @error('house') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>
        <div class="col-lg-12">
            <div class="send-btn">
                <button type="submit" class="default-btn">
                    تعديل
                    <span></span>
                </button>
            </div>
            <br>
        </div>
    </div>
</form>
