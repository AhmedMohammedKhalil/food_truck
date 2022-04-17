<aside class="widget-area" id="secondary">
    <section class="widget widget_categories mt-5">
        <ul>
        @if(auth('user')->user()->type == 'owner')
            <li>
                @if(auth('user')->user()->food_truck()->count() == 1)
                    <a href="{{ route('user.food_truck.index') }}">عربة الطعام</a>
                @else
                    <a href="{{ route('user.food_truck.create') }}">عربة الطعام</a>
                @endif
            </li>
        @endif
            <li>
                <a href="{{ route('user.profile') }}">البروفايل</a>
            </li>
            <li>
                <a href="{{ route('user.settings') }}">الإعدادت</a>
            </li>
            <li>
                <a href="{{ route('user.logout') }}">تسجيل خروج</a>
            </li>
        </ul>
    </section>
</aside>
