<style>
    footer {
    width: 100%;
    max-width: 1440px;
    height: auto;
    background-image: url(../images/Frame\ 1261157167.png);
    padding-top: 130.61px;
    padding-bottom: 40px;
    background-size: cover;
    margin: 0 auto;
}

.foot-container {
    display: flex;
    justify-content: space-between;
    margin: auto;
    width: 1085px;
    flex-wrap: wrap;
}

.footer-bio, .quik-access, .contactus, .licence {
    flex: 1;
    min-width: 250px;
    margin: 10px;
}

.footer-bio img {
    width: 47px;
    height: 33px;
    margin-bottom: 10px;
}

.footer-bio p {
    font-size: 14px;
    color: #6F6F6F;
    line-height: 30px;
}

.quik-access {
    display: flex;
    flex-direction: column;
}

.quik-access h1 {
    font-size: 14px;
    color: #39342F;
    margin-bottom: 10px;
}

.quik-item {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.quik-card {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 14px;
    color: #808080;
    text-decoration: none;
}

.contactus h1 {
    font-size: 14px;
    color: #39342F;
    margin-bottom: 10px;
}

.contactus-item {
    display: flex;
    flex-direction: column;
    gap: 8px;
    margin-bottom: 28.61px;
}

.contactus-card {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 14px;
    color: #808080;
}

.online-chat {
    background-color: #AC3DEB;
    color: white;
    border-radius: 50px 10px 10px 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 8px;
    font-size: 14px;
    gap: 10px;
}

.chat-btn {
    background-color: white;
    width: 33px;
    height: 33px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
}

.dot {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background-color: #AC3DEB;
}

.licence-img {
    display: flex;
    gap: 10px;
}

.licence-img img {
    width: 70px;
    height: auto;
}

.footer-social {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 40px;
}

.footer-social a img {
    width: 30px;
    height: 30px;
}

@media screen and (max-width: 768px) {
    footer {
        padding-top: 40px;
    }
    
    .foot-container {
        flex-direction: column;
    }

    .footer-bio, .quik-access, .contactus, .licence {
        margin-bottom: 20px;
    }

    .footer-social {
        flex-direction: column;
        gap: 10px;
    }
}
</style>

<footer>
    <div class="foot-container">
        <div class="footer-bio">
            <img src="assets/images/لوگو.png" alt="لوگو">
            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است...</p>
        </div>
        <div class="quik-access">
            <h1>دسترسی سریع</h1>
            <div class="quik-item">
                <a class="quik-card" href="{{ route('theme.landing') }}">
                    <div class="dot"></div>
                    <span>خانه</span>
                </a>
                <a class="quik-card" href="{{ route('theme.blog') }}">
                    <div class="dot"></div>
                    <span>مقالات</span>
                </a>
                <a class="quik-card" href="{{ route('theme.vebinar') }}">
                    <div class="dot"></div>
                    <span>دوره ها</span>
                </a>
                <a class="quik-card" href="{{ route('theme.products') }}">
                    <div class="dot"></div>
                    <span>فروشگاه</span>
                </a>
                <a class="quik-card" href="{{ route('theme.about-us') }}">
                    <div class="dot"></div>
                    <span>درباره ما</span>
                </a>
            </div>
        </div>

        <div class="contactus">
            <h1>ارتباط با ما</h1>
            <div class="contactus-item">
                <div class="contactus-card">
                    <div class="dot"></div>
                    <span>09056116431</span>
                </div>
                <div class="contactus-card">
                    <div class="dot"></div>
                    <span>kodakto@gmail.com</span>
                </div>
            </div>
            <div class="online-chat">
                <a class="chat-btn" href="{{ route('theme.contact-us') }}">
                    <img src="assets/images/left 01.png" alt="تماس با ما">
                </a>
                <span>چت آنلاین</span>
            </div>
        </div>

        <div class="licence">
            <h1>مجازات و تاییدیه ها</h1>
            <div class="licence-img">
                <img src="assets/images/تصویر-تاییدیه-زرین-پال-1 1.png" alt="زرین پال">
                <img src="assets/images/تصویر-تاییدیه-زیبال 1.png" alt="زیبال">
            </div>
        </div>
    </div>

    <div class="footer-social">
        <a href="https://youtube.com" target="_blank" rel="noopener noreferrer">
            <img src="assets/images/youtube.svg" alt="YouTube">
        </a>
        <a href="https://telegram.org" target="_blank" rel="noopener noreferrer">
            <img src="assets/images/telegram.svg" alt="Telegram">
        </a>
        <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer">
            <img src="assets/images/linkedln.svg" alt="LinkedIn">
        </a>
        <a href="https://instagram.com" target="_blank" rel="noopener noreferrer">
            <img src="assets/images/instagram.svg" alt="Instagram">
        </a>
    </div>
</footer>