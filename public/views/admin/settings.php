<?php require_once view('header'); ?>
<body>
    <main class="w-full h-screen bgColor-1 ff-pri">
        <?php require_once view('admin/partials/adminHeader'); ?>

        <?php require_once view('admin/partials/sidebar'); ?>

        <div class="fx fx-j-e pt-20 ff-sec color-1-800">
            <form id="add_settings" class="w-10/12" action="admin/add_settings"
               method="post">
               <input type="hidden" name="id" value="<?= $settings->id ?>">
                <div class="w-11/12 m-0-auto mt-10 txt-h-c">
                    <h4 class="fw-400 fs-md color-pri-600 pb-4">
                        Settings
                    </h4>
                </div>
                <div class="w-8/12 m-0-auto fx fx-j-a">
                    <div class="w-11/12 fw-600 mb-2">
                        <label for="about_us" class="block py-2 fs-sm color-pri-600">About Us</label>
                        <div class="bgColor-pri-200 py-2 px-2">
                            <textarea id="about_us" class="w-full" name="about_us" rows="7"
                           ><?= $settings->about_us ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="w-8/12 fx fx-j-a m-0-auto">
                    <div class="w-5/12">
                        <div class="fw-600 mb-2">
                            <label for="website" class="block py-2 fs-sm color-pri-600">Website</label>
                            <div class="bgColor-pri-200 py-2 px-2">
                                <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                focus:b-color-pri outline-0"
                                type="text" name="website" value="<?= $settings->website ?>">
                            </div>
                        </div>
                        <div class="fw-600 mb-2">
                            <label for="email" class="block py-2 fs-sm color-pri-600">Email</label>
                            <div class="bgColor-pri-200 py-2 px-2">
                                <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                focus:b-color-pri outline-0"
                                type="text" name="email" value="<?= $settings->email ?>">
                            </div>
                        </div>
                    </div>
                    <div class="w-5/12">
                        <div class="fw-600 mb-2">
                            <label for="phone" class="block py-2 fs-sm color-pri-600">Phone</label>
                            <div class="bgColor-pri-200 py-2 px-2">
                                <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                focus:b-color-pri outline-0"
                                type="text" name="phone" value="<?= $settings->phone ?>">
                            </div>
                        </div>
                        <div class="w-full fx fx-j-c">
                            <div class="">
                                <p id="response" class="w-full pt-4"></p>
                                <button id="add_settings_btn" class="bgColor-pri
                                rounded-full px-5 py-3 color-1 mt-5 border-0 fw-500
                                hover:bgColor-pri-700 outline-0 pointer rounded fs-sm"
                                type="button" name="button"
                                onclick="(new Ajax).form('add_settings')
                                                   .loader('add_settings_btn')
                                                   .flush('response')
                                                   .send();">
                                    Save settings
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </main>
</body>

<?php require_once view('footer'); ?>
