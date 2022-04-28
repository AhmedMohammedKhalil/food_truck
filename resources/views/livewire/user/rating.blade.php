<div class="rating d-inline-block">
        @if ($rating > 0)
            @for ($i = 1;$i <= $rating; $i++)
                <i class="bx bxs-star"></i>
            @endfor
        @endif
        @for ($i = 1;$i <= 5 - $rating; $i++)
            <i class="bx bx-star"></i>
        @endfor

</div>
