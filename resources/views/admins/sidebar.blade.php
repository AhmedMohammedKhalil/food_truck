<aside class="widget-area" id="secondary">
    <section class="widget widget_categories mt-5">
        <ul>
            <li>
                <a href="{{ route('admin.dashboard') }}">لوحة التحكم</a>
            </li>
            <li>
                <a href="{{ route('admin.regions.index') }}">المناطق</a>
            </li>
            <li>
                <a href="{{ route('admin.foodtrucks.all') }}">
                    <span> عربات الطعام </span>
                    @if($foodTruck_count > 0)
                        <span class="d-inline-block pe-2">{{ $foodTruck_count }}</span>
                    @endif
                </a>
            </li>
            <li>
                <a href="{{ route('admin.users.index') }}">المستخدمين</a>
            </li>
            <li>
                <a href="{{ route('admin.profile') }}">البروفايل</a>
            </li>
            <li>
                <a href="{{ route('admin.settings') }}">الإعدادت</a>
            </li>
            <li>
                <a href="{{ route('admin.logout') }}">تسجيل خروج</a>
            </li>
        </ul>
    </section>
</aside>
