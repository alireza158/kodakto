<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="{{ asset('theme') }}/">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/landing.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <title>Document</title>
</head>
<body>
    @include('theme.partials.header')

    <main>
        <section class="big-banner-container">
            <div class="big-banner-image"></div>
            <div class="big-banner-item">
                <div class="bb-item">
                    <div class="bb-img"></div>
                    <span>نوزاد تا 1 سالگی</span>
                </div>
                <div class="bb-item">
                    <div class="bb-img"></div>
                    <span>1 تا 2 سالگی</span>
                </div>
                <div class="bb-item">
                    <div class="bb-img"></div>
                    <span>2 تا 3 سالگی</span>
                </div>
                <div class="bb-item">
                    <div class="bb-img"></div>
                    <span>3 تا 5 سالگی</span>
                </div>
                <div class="bb-item">
                    <div class="bb-img"></div>
                    <span>6 تا 8 سالگی</span>
                </div>
                <div class="bb-item">
                    <div class="bb-img"></div>
                    <span>9 تا 11 سالگی</span>
                </div>
                <div class="bb-item">
                    <div class="bb-img"></div>
                    <span>12 تا 14 سالگی</span>
                </div>
                <div class="bb-item">
                    <div class="bb-img"></div>
                    <span>15 تا 17 سالگی</span>
                </div>
            </div>
        </section>

        <section class="section2">
            <div class="section2-banner">
                <img src="assets/images/section2 image1.png" alt="">
                <div class="banner-shadow"></div>
                <div class="banner-foot">
                    <span>خلاقیت کودکان</span>
                    <img src="assets/images/Vector 174.svg" alt="">
                </div>
            </div>
            <div class="section2-banner">
                <img src="assets/images/section2 image2.png" alt="">
                <div class="banner-shadow"></div>
                <div class="banner-foot">
                    <span>خانواده کودکان</span>
                    <img src="assets/images/Vector 174.svg" alt="">
                </div>
            </div>
            <div class="section2-banner">
                <img src="assets/images/section2 image3.png" alt="">
                <div class="banner-shadow"></div>
                <div class="banner-foot">
                    <span>اختلاتات یادگیری</span>
                    <img src="assets/images/Vector 174.svg" alt="">
                </div>
            </div>
            <div class="section2-banner">
                <img src="assets/images/section2 image4.png" alt="">
                <div class="banner-shadow"></div>
                <div class="banner-foot">
                    <span>پزشک کودکان</span>
                    <img src="assets/images/Vector 174.svg" alt="">
                </div>
            </div>
        </section>

        <!-- <section class="docters-container">
            <div class="docters-head">
                <h1>برترین پزشکان</h1>
                <img src="assets/images/Star 6.png" alt="">
                <div class="docters-information">
                    <div class="docters-search">
                        <div class="choose-city">
                            <img class="location" src="assets/images/location 03.svg" alt="">
                            <span>انتخاب شهر</span>
                            <img class="vector" src="assets/images/Vector 175.svg" alt="">
                        </div>
                        <img src="assets/images/search 01.svg" alt="">
                        <input type="search" id="search" placeholder="نام پزشک، تخصص و...">
                    </div>
                    <div class="docters-popup">
                        <span>پزشک کودکان</span>
                        <img src="assets/images/Vector svg.svg" alt="">
                    </div>
                </div>
            </div>
            
            <div class="doctors-name">
                <div class="docters-item">
                    <div class="docter-image">
                        <img src="assets/images/user.svg" alt="">
                    </div>
                    <div class="docter-name">
                        <h1>محمدحسین شاکری</h1>
                        <span>متخصص کودکان</span>
                    </div>
                    <div class="docter-rating">
                        <span>4.5</span>
                        <img src="assets/images/Star 5.png" alt="">
                    </div>
                </div>

                <div class="docters-item">
                    <div class="docter-image">
                        <img src="assets/images/user.svg" alt="">
                    </div>
                    <div class="docter-name">
                        <h1>محمدحسین شاکری</h1>
                        <span>متخصص کودکان</span>
                    </div>
                    <div class="docter-rating">
                        <span>4.5</span>
                        <img src="assets/images/Star 5.png" alt="">
                    </div>
                </div>

                <div class="docters-item">
                    <div class="docter-image">
                        <img src="assets/images/user.svg" alt="">
                    </div>
                    <div class="docter-name">
                        <h1>محمدحسین شاکری</h1>
                        <span>متخصص کودکان</span>
                    </div>
                    <div class="docter-rating">
                        <span>4.5</span>
                        <img src="assets/images/Star 5.png" alt="">
                    </div>
                </div>

                <div class="docters-item">
                    <div class="docter-image">
                        <img src="assets/images/user.svg" alt="">
                    </div>
                    <div class="docter-name">
                        <h1>محمدحسین شاکری</h1>
                        <span>متخصص کودکان</span>
                    </div>
                    <div class="docter-rating">
                        <span>4.5</span>
                        <img src="assets/images/Star 5.png" alt="">
                    </div>
                </div>

                <div class="docters-item">
                    <div class="docter-image">
                        <img src="assets/images/user.svg" alt="">
                    </div>
                    <div class="docter-name">
                        <h1>محمدحسین شاکری</h1>
                        <span>متخصص کودکان</span>
                    </div>
                    <div class="docter-rating">
                        <span>4.5</span>
                        <img src="assets/images/Star 5.png" alt="">
                    </div>
                </div>

                <div class="docters-item">
                    <div class="docter-image">
                        <img src="assets/images/user.svg" alt="">
                    </div>
                    <div class="docter-name">
                        <h1>محمدحسین شاکری</h1>
                        <span>متخصص کودکان</span>
                    </div>
                    <div class="docter-rating">
                        <span>4.5</span>
                        <img src="assets/images/Star 5.png" alt="">
                    </div>
                </div>

                <div class="docters-item">
                    <div class="docter-image">
                        <img src="assets/images/user.svg" alt="">
                    </div>
                    <div class="docter-name">
                        <h1>محمدحسین شاکری</h1>
                        <span>متخصص کودکان</span>
                    </div>
                    <div class="docter-rating">
                        <span>4.5</span>
                        <img src="assets/images/Star 5.png" alt="">
                    </div>
                </div>

                <div class="docters-item">
                    <div class="docter-image">
                        <img src="assets/images/user.svg" alt="">
                    </div>
                    <div class="docter-name">
                        <h1>محمدحسین شاکری</h1>
                        <span>متخصص کودکان</span>
                    </div>
                    <div class="docter-rating">
                        <span>4.5</span>
                        <img src="assets/images/Star 5.png" alt="">
                    </div>
                </div>

                <div class="docters-item">
                    <div class="docter-image">
                        <img src="assets/images/user.svg" alt="">
                    </div>
                    <div class="docter-name">
                        <h1>محمدحسین شاکری</h1>
                        <span>متخصص کودکان</span>
                    </div>
                    <div class="docter-rating">
                        <span>4.5</span>
                        <img src="assets/images/Star 5.png" alt="">
                    </div>
                </div>

                <div class="docters-item">
                    <div class="docter-image">
                        <img src="assets/images/user.svg" alt="">
                    </div>
                    <div class="docter-name">
                        <h1>محمدحسین شاکری</h1>
                        <span>متخصص کودکان</span>
                    </div>
                    <div class="docter-rating">
                        <span>4.5</span>
                        <img src="assets/images/Star 5.png" alt="">
                    </div>
                </div>

                <div class="docters-item">
                    <div class="docter-image">
                        <img src="assets/images/user.svg" alt="">
                    </div>
                    <div class="docter-name">
                        <h1>محمدحسین شاکری</h1>
                        <span>متخصص کودکان</span>
                    </div>
                    <div class="docter-rating">
                        <span>4.5</span>
                        <img src="assets/images/Star 5.png" alt="">
                    </div>
                </div>

                <div class="docters-item">
                    <div class="docter-image">
                        <img src="assets/images/user.svg" alt="">
                    </div>
                    <div class="docter-name">
                        <h1>محمدحسین شاکری</h1>
                        <span>متخصص کودکان</span>
                    </div>
                    <div class="docter-rating">
                        <span>4.5</span>
                        <img src="assets/images/Star 5.png" alt="">
                    </div>
                </div>
            </div>
        </section> -->

        <section class="blog">
            <h1 class="blog-title"><b>مقالات وبسایت</b></h1>
            <div class="blog-item">
                <div class="blog-card blog-card-active blog-card1"><span>اختلالات یادگیری</span></div>
                <div class="blog-card blog-card2"><span>خلاقیت</span></div>
                <div class="blog-card blog-card3"><span>بازی</span></div>
                <div class="blog-card blog-card4"><span>کاردستی</span></div>
            </div>

            <div class="blog-slide blog-item1">
                <div class="owl-carousel owl-one owl-theme">
                    <div class="item blog-cardslide">
                        <img src="assets/images/blog-card.png" alt="">
                        <h1>دیر یادگرفتن مطالب توسط کودکان</h1>
                        <div class="card-foot">
                            <p>لورم اپیسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است...</p>
    
                            <div class="submit-card">
                                <img src="assets/images/direction-left.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-slide blog-item2">
                <div class="owl-carousel owl-one owl-theme">
                    <div class="item blog-cardslide">
                        <img src="assets/images/blog-card.png" alt="">
                        <h1>دیر یادگرفتن مطالب توسط کودکان</h1>
                        <div class="card-foot">
                            <p>لورم اپیسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است...</p>
    
                            <div class="submit-card">
                                <img src="assets/images/direction-left.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-slide blog-item3">
                <div class="owl-carousel owl-one owl-theme">
                    <div class="item blog-cardslide">
                        <img src="assets/images/blog-card.png" alt="">
                        <h1>دیر یادگرفتن مطالب توسط کودکان</h1>
                        <div class="card-foot">
                            <p>لورم اپیسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است...</p>
    
                            <div class="submit-card">
                                <img src="assets/images/direction-left.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-slide blog-item4">
                <div class="owl-carousel owl-one owl-theme">
                    <div class="item blog-cardslide">
                        <img src="assets/images/blog-card.png" alt="">
                        <h1>دیر یادگرفتن مطالب توسط کودکان</h1>
                        <div class="card-foot">
                            <p>لورم اپیسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است...</p>
    
                            <div class="submit-card">
                                <img src="assets/images/direction-left.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="child-container">
            <div class="child-head">
                <h1>تفریح کودکان</h1>
                <img src="assets/images/Star 6.png" alt="">
                <div class="child-information">
                    <div class="child-search">
                        <div class="choose-city">
                            <img class="location" src="assets/images/location 03.svg" alt="">
                            <span>فیلترها</span>
                            <img class="vector" src="assets/images/Vector 175.svg" alt="">
                        </div>
                        <img src="assets/images/search 01.svg" alt="">
                        <input type="search" id="search" placeholder="جستجو مکان مورد نظر">
                    </div>
                    <div class="child-btns">
                        <div class="chide-btns-next">
                            <img src="assets/images/direction-right 01.png" alt="">
                        </div>
                        <div class="chide-btns-prev">
                            <img src="assets/images/direction-left 01.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="location-box">
                <div class="owl-carousel owl-two owl-theme">

                    <div class="item location-card">
                        <img src="assets/images/park.png" alt="">
                        <div class="park-information">
                            <h1>شهر بازی پارک ارم</h1>
                            <div class="park-loc">
                                <img src="assets/images/location 03.png" alt="">
                                <span>تهران</span>
                            </div>
                        </div>
                        <div class="park-btn"><span>بزن بریم!</span></div>
                    </div>
                    <div class="location-card">
                        <img src="assets/images/park.png" alt="">
                        <div class="park-information">
                            <h1>شهر بازی پارک ارم</h1>
                            <div class="park-loc">
                                <img src="assets/images/location 03.png" alt="">
                                <span>تهران</span>
                            </div>
                        </div>
                        <div class="park-btn"><span>بزن بریم!</span></div>
                    </div>
                    <div class="location-card">
                        <img src="assets/images/park.png" alt="">
                        <div class="park-information">
                            <h1>شهر بازی پارک ارم</h1>
                            <div class="park-loc">
                                <img src="assets/images/location 03.png" alt="">
                                <span>تهران</span>
                            </div>
                        </div>
                        <div class="park-btn"><span>بزن بریم!</span></div>
                    </div>
                    <div class="location-card">
                        <img src="assets/images/park.png" alt="">
                        <div class="park-information">
                            <h1>شهر بازی پارک ارم</h1>
                            <div class="park-loc">
                                <img src="assets/images/location 03.png" alt="">
                                <span>تهران</span>
                            </div>
                        </div>
                        <div class="park-btn"><span>بزن بریم!</span></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="question">
            <h1><span style="color: #39342F;">سوالات </span>متداول ؟</h1>
            <div class="question-group">
                <div class="accordian">
                    <div class="accordian-card acc1">
                        <div style="display: flex; align-items: center; justify-content: space-between;">
                            <span>آیا این دوره پیش نیاز دارید؟</span>
                            <img src="assets/images/direction-left 01.svg" alt="">
                        </div>

                        <div class="accordian-answer1">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, voluptates sed? Soluta architecto dolorum rerum animi nihil ducimus. Ex dicta deserunt, sunt quo dignissimos quod? A minus sit delectus eius vel, corrupti dicta, nihil tenetur illum culpa animi obcaecati fugiat ea suscipit quisquam sequi sint corporis blanditiis iste placeat distinctio, unde dolorem maxime. Cum, nesciunt voluptates porro recusandae accusamus repudiandae, accusantium voluptate quod numquam ipsum, animi praesentium officia eligendi? Sequi minus consequuntur unde earum architecto esse in, totam consequatur et, laudantium neque temporibus! Officia dolores, non aperiam tenetur est animi debitis quisquam, alias ab laboriosam fugit amet totam maxime inventore.</p>
                        </div>
                    </div>
                    <div class="accordian-card acc2">
                        <div style="display: flex; align-items: center; justify-content: space-between;">
                            <span>آیا این دوره پیش نیاز دارید؟</span>
                            <img src="assets/images/direction-left 01.svg" alt="">
                        </div>

                        <div class="accordian-answer2">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, voluptates sed? Soluta architecto dolorum rerum animi nihil ducimus. Ex dicta deserunt, sunt quo dignissimos quod? A minus sit delectus eius vel, corrupti dicta, nihil tenetur illum culpa animi obcaecati fugiat ea suscipit quisquam sequi sint corporis blanditiis iste placeat distinctio, unde dolorem maxime. Cum, nesciunt voluptates porro recusandae accusamus repudiandae, accusantium voluptate quod numquam ipsum, animi praesentium officia eligendi? Sequi minus consequuntur unde earum architecto esse in, totam consequatur et, laudantium neque temporibus! Officia dolores, non aperiam tenetur est animi debitis quisquam, alias ab laboriosam fugit amet totam maxime inventore.</p>
                        </div>
                    </div>
                    <div class="accordian-card acc3">
                        <div style="display: flex; align-items: center; justify-content: space-between;">
                            <span>آیا این دوره پیش نیاز دارید؟</span>
                            <img src="assets/images/direction-left 01.svg" alt="">
                        </div>

                        <div class="accordian-answer3">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, voluptates sed? Soluta architecto dolorum rerum animi nihil ducimus. Ex dicta deserunt, sunt quo dignissimos quod? A minus sit delectus eius vel, corrupti dicta, nihil tenetur illum culpa animi obcaecati fugiat ea suscipit quisquam sequi sint corporis blanditiis iste placeat distinctio, unde dolorem maxime. Cum, nesciunt voluptates porro recusandae accusamus repudiandae, accusantium voluptate quod numquam ipsum, animi praesentium officia eligendi? Sequi minus consequuntur unde earum architecto esse in, totam consequatur et, laudantium neque temporibus! Officia dolores, non aperiam tenetur est animi debitis quisquam, alias ab laboriosam fugit amet totam maxime inventore.</p>
                        </div>
                    </div>
                    <div class="accordian-card acc4">
                        <div style="display: flex; align-items: center; justify-content: space-between;">
                            <span>آیا این دوره پیش نیاز دارید؟</span>
                            <img src="assets/images/direction-left 01.svg" alt="">
                        </div>

                        <div class="accordian-answer4">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, voluptates sed? Soluta architecto dolorum rerum animi nihil ducimus. Ex dicta deserunt, sunt quo dignissimos quod? A minus sit delectus eius vel, corrupti dicta, nihil tenetur illum culpa animi obcaecati fugiat ea suscipit quisquam sequi sint corporis blanditiis iste placeat distinctio, unde dolorem maxime. Cum, nesciunt voluptates porro recusandae accusamus repudiandae, accusantium voluptate quod numquam ipsum, animi praesentium officia eligendi? Sequi minus consequuntur unde earum architecto esse in, totam consequatur et, laudantium neque temporibus! Officia dolores, non aperiam tenetur est animi debitis quisquam, alias ab laboriosam fugit amet totam maxime inventore.</p>
                        </div>
                    </div>
                </div>
                <div class="question-image">
                    <img src="assets/images/Group 238045.png" alt="">
                </div>
            </div>
        </section>

        <section class="products">
            <div class="product-information">
                <img style="margin-top: 25px; margin-bottom: 10px;" src="assets/images/Group text.png" alt="">
                <p>لورم اپیسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان</p>
                <button class="product-btn">مشاهده همه</button>
            </div>

            <div class="owl-carousel owl-three owl-theme owl-css">
                <div class="item product-card">
                    <img src="assets/images/16 1.png" alt="">
                    <div class="product-card-title">
                        <h1>شیشه شیر</h1>
                        <span>4.5</span>
                        <img src="assets/images/Star 5.png" alt="">
                    </div>
                    <p>این شیشه شیر از برند پینو میباشد...</p>
                    <div class="product-price">
                        <div class="add-product">
                            <img src="assets/images/bag-add.png" alt="">
                        </div>
                        <div class="price">
                            <span>260،000 تومان</span>
                            <h1><span style="color: #AC3DEB; text-decoration: none; font-size: 15px;">200،000</span> تومان</h1>
                        </div>
                    </div>
                </div>
    
                <div class="item product-card">
                    <img src="assets/images/16 1.png" alt="">
                    <div class="product-card-title">
                        <h1>شیشه شیر</h1>
                        <span>4.5</span>
                        <img src="assets/images/Star 5.png" alt="">
                    </div>
                    <p>این شیشه شیر از برند پینو میباشد...</p>
                    <div class="product-price">
                        <div class="add-product">
                            <img src="assets/images/bag-add.png" alt="">
                        </div>
                        <div class="price">
                            <span>260،000 تومان</span>
                            <h1><span style="color: #AC3DEB; text-decoration: none; font-size: 15px;">200،000</span> تومان</h1>
                        </div>
                    </div>
                </div>
    
                <div class="item product-card">
                    <img src="assets/images/16 1.png" alt="">
                    <div class="product-card-title">
                        <h1>شیشه شیر</h1>
                        <span>4.5</span>
                        <img src="assets/images/Star 5.png" alt="">
                    </div>
                    <p>این شیشه شیر از برند پینو میباشد...</p>
                    <div class="product-price">
                        <div class="add-product">
                            <img src="assets/images/bag-add.png" alt="">
                        </div>
                        <div class="price">
                            <span>260،000 تومان</span>
                            <h1><span style="color: #AC3DEB; text-decoration: none; font-size: 15px;">200،000</span> تومان</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


    @include('theme.partials.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>