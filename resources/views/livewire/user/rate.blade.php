
<form wire:submit.prevent="makeRate">
    <div class="input-counter">
        <span wire:click="minus" class="minus-btn">
                <i class="bx bx-minus"></i>
        </span>
        <input type="text" wire:model="user_rate" min="1" max="5">
        <span wire:click="plus" class="plus-btn">
                <i class="bx bx-plus"></i>
        </span>
    </div>
    <button type="submit" class="default-btn">
            تقييم
            <span style="top: 9.42188px; left: 219.172px;"></span>
    </button>
</form>
