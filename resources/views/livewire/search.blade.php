<aside class="widget-area" id="secondary">
    <section class="widget widget_search">
        <form class="search-form search-top" wire:submit.prevent='makeSearch'>
            <label>
                <input type="search" wire:model.lazy='search' class="search-field" placeholder="بحث">
            </label>
            <button type="submit">
                <i class='bx bx-search-alt'></i>
            </button>
        </form>
    </section>
    <section class="widget widget_tag_cloud">
        <h3 class="widget-title">المناطق</h3>
        <div class="tagcloud section-bottom">
            @foreach ($regions as $r)
                @if ($r->locations->count() > 0)
                    <a href="javascript:void(0)" wire:click='searchByRegion({{ $r->id }})'>
                        {{ $r->name }}
                    </a>
                @endif
            @endforeach
        </div>
    </section>
</aside>
