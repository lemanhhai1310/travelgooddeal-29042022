<?php $data["title"] = "Trang chủ"; ?>
<?php $body = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="home__block1 uk-section uk-background-norepeat uk-height-viewport" data-src="images/bg-travel-20220325111838.jpeg" uk-img>
    <div class="uk-container">
        <div uk-grid>
            <div class="uk-width-2-5@m">
                <img src="images/logo-20220325111935.png" alt="">
            </div>
        </div>
    </div>
</div>
<!--Top Deal-->
<div class="home__block2 uk-flex uk-flex-middle">
    <div class="home__block2__imgCover uk-cover-container uk-position-top-right">
        <img src="images/artboard-42x-20210416035838.png" alt="" uk-cover="">
        <canvas width="910" height="500"></canvas>
    </div>
    <div class="uk-width-1-1 uk-section">
        <div class="uk-container">
            <div class="uk-margin-medium uk-text-center">
                <div class="uk-cover-container home__block2__cover1 uk-flex-inline">
                    <img src="images/artboard-19-20210419034240.png" alt="" uk-cover="">
                    <canvas width="1224" height="550"></canvas>
                </div>
            </div>
            <div class="uk-margin-medium">
                <div class="uk-child-width-1-4@m uk-child-width-1-2 uk-grid-small uk-grid-30-m uk-grid-row-medium" uk-grid>
                    <?php
                    $data = array(
                        array(
                            'src' => 'images/screenshot_128-20220412070259.jpeg',
                            'brand' => 'https://w.ladicdn.com/s450x450/5b1a076f9066d950710a3d7f/e9dce14402f147d8d56410bc0f5479f1_tn-20220408080625.jpg',
                            'txt' => 'Khách sạn FLC giảm đến 35%',
                        ),
                        array(
                            'src' => 'images/screenshot_128-20220412070259.jpeg',
                            'brand' => 'https://w.ladicdn.com/s450x450/5b1a076f9066d950710a3d7f/screenshot_132-20220412071439.jpg',
                            'txt' => 'Khách sạn FLC giảm đến 35%',
                        ),
                        array(
                            'src' => 'images/screenshot_128-20220412070259.jpeg',
                            'brand' => 'https://w.ladicdn.com/s450x450/5b1a076f9066d950710a3d7f/screenshot_135-20220412071745.jpg',
                            'txt' => 'Khách sạn FLC giảm đến 35%',
                        ),
                        array(
                            'src' => 'images/screenshot_128-20220412070259.jpeg',
                            'brand' => 'https://w.ladicdn.com/s450x450/5b1a076f9066d950710a3d7f/images-20220414074650.jpg',
                            'txt' => 'Khách sạn FLC giảm đến 35%',
                        ),
                        array(
                            'src' => 'images/screenshot_128-20220412070259.jpeg',
                            'brand' => 'https://w.ladicdn.com/s450x450/5b1a076f9066d950710a3d7f/images-20220414074650.jpg',
                            'txt' => 'Khách sạn FLC giảm đến 35%',
                        ),
                        array(
                            'src' => 'images/screenshot_128-20220412070259.jpeg',
                            'brand' => 'https://w.ladicdn.com/s450x450/5b1a076f9066d950710a3d7f/images-20220414074650.jpg',
                            'txt' => 'Khách sạn FLC giảm đến 35%',
                        ),
                        array(
                            'src' => 'images/screenshot_128-20220412070259.jpeg',
                            'brand' => 'https://w.ladicdn.com/s450x450/5b1a076f9066d950710a3d7f/images-20220414074650.jpg',
                            'txt' => 'Khách sạn FLC giảm đến 35%',
                        ),
                        array(
                            'src' => 'images/screenshot_128-20220412070259.jpeg',
                            'brand' => 'https://w.ladicdn.com/s450x450/5b1a076f9066d950710a3d7f/images-20220414074650.jpg',
                            'txt' => 'Khách sạn FLC giảm đến 35%',
                        ),
                    );
                    foreach ($data as $k=>$v): ?>
                    <div>
                        <div class="uk-position-relative uk-text-center home__block2__box">
                            <div class="uk-cover-container uk-flex-inline home__block2__box1">
                                <img src="<?= $v['brand'] ?>" alt="" uk-cover="">
                                <canvas width="117" height="109"></canvas>
                            </div>
                        </div>
                        <div class="uk-text-center">
                            <div class="uk-cover-container home__block2__item">
                                <img src="<?= $v['src'] ?>" alt="" uk-cover="">
                                <canvas width="499" height="300"></canvas>
                            </div>
                            <div class="home__block2__item">
                                <div class="home__block2__txt1">Toàn quốc</div>
                            </div>
                            <div class="home__block2__item">
                                <div class="home__block2__txt2"><?= $v['txt'] ?></div>
                            </div>
                            <div class="home__block2__item">
                                <a href="" class="uk-button home__block2__btn uk-button-default uk-button-small uk-border-pill">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="uk-margin-medium-top uk-text-center">
                <a href="" class="home__block2__btnMore uk-button uk-button-default uk-border-rounded">Xem thêm Deal</a>
            </div>
        </div>
    </div>
</div>
<!--/Top Deal-->

<!--Booking Hotel-->
<div class="uk-height-viewport home__booking uk-flex uk-flex-middle uk-background-norepeat uk-background-center-center uk-background-cover" data-src="images/blockve2-20210416074833.png" uk-img>
    <div class="uk-section-small uk-width-1-1">
        <div class="uk-container uk-container-small">
            <div class="uk-margin uk-text-center">
                <div class="uk-cover-container uk-flex-inline" style="max-width: 388px">
                    <img src="images/hotel-20220323071143.png" alt="" uk-cover="">
                    <canvas width="848" height="600"></canvas>
                </div>
            </div>
            <div class="uk-margin">
                <div class="uk-child-width-1-2 uk-child-width-1-3@m uk-grid-small uk-grid-30-m" uk-grid>
                    <?php for ($i=1;$i<=6;$i++): ?>
                    <div>
                        <div class="home__booking__item uk-cover-container uk-background-contain" data-src="images/artboard-12-20210415031320.png" uk-img>
                            <canvas width="514" height="500"></canvas>
                            <div class="uk-cover-container uk-position-center" style="width: 62%">
                                <img src="images/screenshot_128-20220412070259.jpeg" alt="" uk-cover="">
                                <canvas width="499" height="300"></canvas>
                            </div>
                            <div class="uk-position-top-center home__booking__addressName">Nha Trang</div>
                        </div>
                        <div class="home__booking__item uk-text-center">
                            <h4 class="home__booking__title uk-h4">An Lam Retreats Ninh Van Bay - 3N2Đ</h4>
                            <div class="uk-child-width-auto uk-flex-center uk-flex-bottom uk-grid-small" uk-grid>
                                <div>
                                    <del class="home__booking__price home__booking__price--old">24.061.070</del>
                                </div>
                                <div>
                                    <div class="home__booking__price home__booking__price--new">9.855.900</div>
                                </div>
                            </div>
                        </div>
                        <div class="home__booking__item uk-text-center">
                            <a href="" class="uk-button home__block2__btn uk-button-default uk-button-small uk-border-pill">Xem chi tiết</a>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
            <div class="uk-margin-medium-top uk-text-center">
                <a href="" class="home__block2__btnMore uk-button uk-button-default uk-border-rounded">Xem thêm Deal</a>
            </div>
        </div>
    </div>
</div>
<!--/Booking Hotel-->
<?php require "template-parts/layouts/footer.php"; ?>