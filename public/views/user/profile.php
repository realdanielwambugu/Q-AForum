<?php require_once view('header'); ?>
<body>

    <?php require_once view('user/nav'); ?>
    <main class="h-screen bg-no-repeat bg-cover"
    style='background-image:url("<?= basePath() ?>/public/assets/images/bg/bg.jpg")'>
    <div class=" w-11/12 h-auto m-0-auto ff-pri fx ">

        <div class="bgColor-1 w-9/12 h-auto m-0-auto shadow mt-20 py-4">

            <h3 class="w-full py-2 txt-h-c color-pri-700">My Profile</h3>

            <form id="update_form" class="w-8/12 fx fx-j-btw m-0-auto txt-h-l"
                action="update" method="post">
                <div class="w-7/12">
                    <h2 class="pb-3 pt-8 color-pri">
                        Personal Details.
                    </h2>
                  <input type="hidden" name="id" value="<?= $user->id ?>">
                    <div class="w-11/12 fw-600 mb-2">
                        <label for="Name" class="block py-2 fs-sm color-pri-600">Full Name</label>
                        <div class="bgColor-pri-200 py-2 px-2">
                            <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                            focus:b-color-pri outline-0"
                            type="text" name="fullName" value="<?= $user->fullName ?>">
                        </div>
                    </div>

                    <div class="w-11/12 fw-600 mb-2">
                        <label for="beds" class="block py-2 fs-sm color-pri-600">Email</label>
                        <div class="bgColor-pri-200 py-2 px-2">
                            <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                            focus:b-color-pri outline-0"
                            type="text" name="email" value="<?= $user->email ?>">
                        </div>
                    </div>

                    <div class="w-11/12 fw-600 mb-2">
                        <label for="beds" class="block py-2 fs-sm color-pri-600">Status</label>
                        <div class="bgColor-pri-200 py-2 px-2">
                            <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                            focus:b-color-pri outline-0"
                            type="text" name="status" value="<?= $user->status ?>" disabled>
                        </div>
                    </div>

                </div>
                <div class="w-6/12 pt-4">
                    <h3 class="pb-3 pt-8 color-pri">
                        Password Update
                    </h3>

                    <div class="fw-600 mb-2">
                        <label for="Name" class="block py-2 fs-sm color-pri-600">New Password</label>
                        <div class="bgColor-pri-200 py-2 px-2">
                            <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                            focus:b-color-pri outline-0"
                            type="text" name="password" placeholder="eg: 123456">
                        </div>
                    </div>

                    <div class="fw-600 mb-2">
                        <label for="beds" class="block py-2 fs-sm color-pri-600">Confirm Password</label>
                        <div class="bgColor-pri-200 py-2 px-2">
                            <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                            focus:b-color-pri outline-0"
                            type="text" name="confirmPassword" placeholder="eg: 123456">
                        </div>
                    </div>

                    <div class="w-full fx fx-j-c">
                        <p class="txt-h-c py-2"></p>
                        <div class="">
                            <p id="response" class="w-full pt-4"></p>
                            <button id="update_btn" class="bgColor-pri
                            rounded-full px-5 py-3 color-1 mt-5 border-0 fw-500
                            hover:bgColor-pri-700 outline-0 pointer rounded fs-sm"
                            type="button" name="button"
                            onclick="(new Ajax).form('update_form')
                                               .loader('update_btn')
                                               .flush('response')
                                               .send();">
                                Update account
                            </button>
                        </div>
                    </div>

                </div>
            </form>


        </div>

    </div>
</main>

</body>
<?php require_once view('footer'); ?>
