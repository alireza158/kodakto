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
    border: none;
    background: transparent;
    cursor: pointer;
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

    .mobile-nav {
        position: fixed;
        top: 0;
        right: 0;
        height: 100vh;
        width: min(82vw, 320px);
        background-color: #fff;
        z-index: 1000;
        box-shadow: -16px 0 34px rgba(0, 0, 0, .15);
        transform: translateX(100%);
        transition: transform .25s ease;
        padding: 22px 18px;
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .mobile-nav.open {
        transform: translateX(0);
    }

    .mobile-nav-backdrop {
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, .3);
        z-index: 999;
        opacity: 0;
        visibility: hidden;
        transition: .25s ease;
    }

    .mobile-nav-backdrop.open {
        opacity: 1;
        visibility: visible;
    }

    .mobile-nav-close {
        width: 40px;
        height: 40px;
        border-radius: 12px;
        border: none;
        background: #f6ecff;
        color: #ac3deb;
        margin-bottom: 8px;
        font-size: 24px;
        line-height: 1;
    }

    .mobile-nav-list {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    .mobile-nav-list a {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 10px 8px;
        border-radius: 12px;
        color: #39342f;
        text-decoration: none;
        font-size: 14px;
        font-weight: 500;
    }

    .mobile-nav-list a.active-link {
        background: #f7e8ff;
        color: #ac3deb;
    }

    .mobile-nav-search {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: #f8f8fc;
        border-radius: 14px;
        padding: 10px 12px;
        margin-top: 8px;
        gap: 8px;
    }

    .mobile-nav-search input {
        border: none;
        outline: none;
        background: transparent;
        width: 100%;
        font-size: 13px;
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

    <button class="burger-menu d-lg-none" type="button" id="mobileMenuToggle" aria-label="باز کردن منو" aria-expanded="false" aria-controls="mobileNav">
        <img src="assets/images/Hamburger Menu.png" alt="منو" class="img-fluid">
    </button>

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
                    <div class="item-logo"><img src="assets/images/reward.png" alt="وبینارها" class="img-fluid"></div>
                    <h3 class="{{ request()->routeIs('theme.vebinar') || request()->routeIs('theme.single-vebinar') ? 'active' : '' }}">وبینارها</h3>
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

<div class="mobile-nav-backdrop" id="mobileNavBackdrop"></div>
<aside class="mobile-nav d-lg-none" id="mobileNav" aria-hidden="true">
    <button type="button" class="mobile-nav-close" id="mobileNavClose" aria-label="بستن منو">×</button>
    <ul class="mobile-nav-list">
        <li><a href="{{ route('theme.landing') }}" class="{{ request()->routeIs('theme.landing') ? 'active-link' : '' }}">خانه</a></li>
        <li><a href="{{ route('theme.vebinar') }}" class="{{ request()->routeIs('theme.vebinar') || request()->routeIs('theme.single-vebinar') ? 'active-link' : '' }}">وبینارها</a></li>
        <li><a href="{{ route('theme.about-us') }}" class="{{ request()->routeIs('theme.about-us') ? 'active-link' : '' }}">درباره ما</a></li>
        <li><a href="{{ route('theme.blog') }}" class="{{ request()->routeIs('theme.blog') || request()->routeIs('theme.single-blog') ? 'active-link' : '' }}">وبلاگ</a></li>
        <li><a href="{{ route('theme.products') }}" class="{{ request()->routeIs('theme.products') || request()->routeIs('theme.single-product') ? 'active-link' : '' }}">محصولات</a></li>
    </ul>
    <div class="mobile-nav-search">
        <input type="search" placeholder="جستجو...">
        <img src="assets/images/search 01.svg" alt="جستجو" width="18" height="18">
    </div>
</aside>

<script>
(() => {
    const menu = document.getElementById('mobileNav');
    const backdrop = document.getElementById('mobileNavBackdrop');
    const openBtn = document.getElementById('mobileMenuToggle');
    const closeBtn = document.getElementById('mobileNavClose');

    if (!menu || !backdrop || !openBtn || !closeBtn) return;

    const setState = (open) => {
        menu.classList.toggle('open', open);
        backdrop.classList.toggle('open', open);
        openBtn.setAttribute('aria-expanded', open ? 'true' : 'false');
        menu.setAttribute('aria-hidden', open ? 'false' : 'true');
        document.body.style.overflow = open ? 'hidden' : '';
    };

    openBtn.addEventListener('click', () => setState(true));
    closeBtn.addEventListener('click', () => setState(false));
    backdrop.addEventListener('click', () => setState(false));

    menu.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => setState(false));
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') setState(false);
    });
})();
</script>
