<header class="header">
    <div class="logo">
        <a href="{{ route('theme.landing') }}"><img src="assets/images/کودکتو.png" alt="کودکتو"></a>
    </div>

    <div class="burger-menu">
        <img src="assets/images/Hamburger Menu.png" alt="منو">
    </div>

    <div class="nav">
        <ul class="nav-items">
            <ol>
                <a href="{{ route('theme.landing') }}">
                    <div class="item-logo"><img src="assets/images/home 04.png" alt="خانه"></div>
                    <h3 class="{{ request()->routeIs('theme.landing') ? 'active' : '' }}">خانه</h3>
                </a>
            </ol>
            <ol>
                <a href="{{ route('theme.vebinar') }}">
                    <div class="item-logo"><img src="assets/images/reward.png" alt="پیشنهاد ویژه"></div>
                    <h3 class="{{ request()->routeIs('theme.vebinar') ? 'active' : '' }}">پیشنهاد ویژه</h3>
                </a>
            </ol>
            <ol>
                <a href="{{ route('theme.about-us') }}">
                    <div class="item-logo"><img src="assets/images/store.png" alt="درباره ما"></div>
                    <h3 class="{{ request()->routeIs('theme.about-us') ? 'active' : '' }}">درباره‌ما</h3>
                </a>
            </ol>
            <ol>
                <a href="{{ route('theme.blog') }}">
                    <div class="item-logo"><img src="assets/images/receipt.png" alt="وبلاگ"></div>
                    <h3 class="{{ request()->routeIs('theme.blog') || request()->routeIs('theme.single-blog') ? 'active' : '' }}">وبلاگ</h3>
                </a>
            </ol>
            <ol>
                <a href="{{ route('theme.products') }}">
                    <div class="item-logo"><img src="assets/images/shopping basket 02.png" alt="محصولات"></div>
                    <h3 class="{{ request()->routeIs('theme.products') || request()->routeIs('theme.single-product') ? 'active' : '' }}">محصولات</h3>
                </a>
            </ol>
        </ul>
    </div>

    <div class="search">
        <input type="search" id="search" placeholder="محصول مورد نطر را جستجو کنید">
        <div class="search-logo"><img src="assets/images/search 01.svg" alt="جستجو"></div>
    </div>
</header>
