  <style>
    /* Header Styles */
.header {
    width: 100%;
    height: 80px;
    background-color: #ffe1ff;
    border-radius: 50px;
    margin: auto;
    margin-top: 41px;
    display: flex;
    align-items: center;
    padding: 0 20px;
    justify-content: space-between;
}

.logo {
    width: 70px;
    height: 31px;
    margin-right: 33px;
    margin-left: 80px;
}

.nav {
    flex-grow: 1;
    display: flex;
    justify-content: center;
}

.nav-items {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 36px;
}

.nav-link {
    display: flex;
    justify-content: center;
    align-items: center;
    text-decoration: none;
    color: inherit;
}

.nav-items h3 {
    font-size: 14px;
    color: #8e8e8e;
    margin-right: 4px;
}

.active {
    color: #ac3deb !important;
}

.search {
    width: 296px;
    height: 48px;
    border-radius: 50px;
    background-color: #fff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 16px;
}

#search {
    width: 156px;
    height: 16px;
    border: none;
    outline: none;
}

#search::placeholder {
    font-size: 13px;
    color: #aaaaaa;
}

.burger-menu {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.burger-menu img {
    width: 24px;
    height: 24px;
}

/* Media Queries */
@media screen and (max-width: 768px) {
    .header {
        justify-content: space-between;
    }

    .nav {
        display: none;
    }

    .search {
        display: none;
    }

    .burger-menu {
        display: flex;
    }

    .search {
        width: 100%;
        margin-top: 10px;
    }
}
      </style>
    <link rel="stylesheet" href="assets/css/all.css">
 <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
<header class="header d-flex align-items-center">
    <div class="logo">
        <a href="{{ route('theme.landing') }}">
            <img src="assets/images/کودکتو.png" alt="کودکتو" class="img-fluid">
        </a>
    </div>

    <div class="burger-menu d-lg-none">
        <img src="assets/images/Hamburger Menu.png" alt="منو" class="img-fluid">
    </div>

    <nav class="nav d-none d-lg-flex flex-grow-1 justify-content-center">
        <ul class="nav-items list-unstyled d-flex justify-content-center align-items-center mb-0">
            <li>
                <a href="{{ route('theme.landing') }}" class="nav-link">
                    <div class="item-logo"><img src="assets/images/home 04.png" alt="خانه" class="img-fluid"></div>
                    <h3 class="{{ request()->routeIs('theme.landing') ? 'active' : '' }}">خانه</h3>
                </a>
            </li>
            <li>
                <a href="{{ route('theme.vebinar') }}" class="nav-link">
                    <div class="item-logo"><img src="assets/images/reward.png" alt="پیشنهاد ویژه" class="img-fluid"></div>
                    <h3 class="{{ request()->routeIs('theme.vebinar') ? 'active' : '' }}">پیشنهاد ویژه</h3>
                </a>
            </li>
            <li>
                <a href="{{ route('theme.about-us') }}" class="nav-link">
                    <div class="item-logo"><img src="assets/images/store.png" alt="درباره ما" class="img-fluid"></div>
                    <h3 class="{{ request()->routeIs('theme.about-us') ? 'active' : '' }}">درباره‌ما</h3>
                </a>
            </li>
            <li>
                <a href="{{ route('theme.blog') }}" class="nav-link">
                    <div class="item-logo"><img src="assets/images/receipt.png" alt="وبلاگ" class="img-fluid"></div>
                    <h3 class="{{ request()->routeIs('theme.blog') || request()->routeIs('theme.single-blog') ? 'active' : '' }}">وبلاگ</h3>
                </a>
            </li>
            <li>
                <a href="{{ route('theme.products') }}" class="nav-link">
                    <div class="item-logo"><img src="assets/images/shopping basket 02.png" alt="محصولات" class="img-fluid"></div>
                    <h3 class="{{ request()->routeIs('theme.products') || request()->routeIs('theme.single-product') ? 'active' : '' }}">محصولات</h3>
                </a>
            </li>
        </ul>
    </nav>

    <div class="search d-none d-lg-flex align-items-center">
        <input type="search" id="search" placeholder="محصول مورد نظر را جستجو کنید" class="form-control">
        <div class="search-logo"><img src="assets/images/search 01.svg" alt="جستجو" class="img-fluid"></div>
    </div>
</header>