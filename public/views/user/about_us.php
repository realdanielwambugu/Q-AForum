<?php require_once view('header'); ?>

<body>
    <main class="w-full  h-auto bgColor-1 ff-sec">
        <?php require_once view('user/nav'); ?>
        <div class="w-full pt-16">
            <div class="w-7/12 m-0-auto h-auto">
                <div class="w-8/12">
                    <h1 class="pt-5 pb-2 px-4 fw-black">
                       <?= app_name() ?>
                    </h>
                </div>

                <div class="w-full h-auto mt-5 pb-8">
                    <div class="w-full h-auto">
                        <h2 class="pb-2 px-4 fw-black">
                            About Us.
                       </h2>
                        <h5 class="px-4 lh-loose ls-wide color-2-600">
                            <?= $settings->about_us ?>
                        </h5>
                    </div>

                </div>
            </div>
        </div>

    </main>

</body>

<?php require_once view('footer'); ?>
