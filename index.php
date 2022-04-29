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
<div class="home__block2 uk-flex uk-flex-middle">
    <div class="home__block2__imgCover uk-cover-container uk-position-top-right">
        <img src="images/artboard-42x-20210416035838.png" alt="" uk-cover="">
        <canvas width="910" height="500"></canvas>
    </div>
    <div class="uk-width-1-1 uk-section">
        <div class="uk-container">
            <div class="uk-margin uk-text-center">
                <div class="uk-cover-container home__block2__cover1 uk-flex-inline">
                    <img src="images/artboard-19-20210419034240.png" alt="" uk-cover="">
                    <canvas width="1224" height="550"></canvas>
                </div>
            </div>
            <div class="uk-margin-top">
                <div class="uk-child-width-1-4@m" uk-grid>
                    <?php
                    $data = array(
                        array(
                            'src' => '',
                            'txt' => '',
                        ),
                    );
                    foreach ($data as $k=>$v): ?>
                    <div>

                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>