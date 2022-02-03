<?php require_once view('header'); ?>

<body>
    <main class="h-screen bg-no-repeat bg-cover"
    style='background-image:url("<?= basePath() ?>/public/assets/images/bg/bg.jpg")'>
    <div class="h-16">
        <?php require_once view('user/nav'); ?>
    </div>
    <div class="w-5/12 m-0-auto shadow ff-pri">
        <form id="create_group" class="bgColor-1 w-11/12 h-auto m-0-auto mt-5 py-4 px-4"
        action="create_group" method="post">
            <h4 class="color-2-700 fs-lg fw-normal lh-relaxed py-2">
                New Topic
            </h4>
            <div class="w-full py-2">
                <label for="icon" class="block py-2 fs-sm">
                   Choose Topic Icon
                </label>
                <div class="bgColor-pri-200 py-2 px-2">
                    <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                    focus:b-color-pri outline-0" type="file" name="icon">
                </div>
            </div>
            <div class="w-full py-2">
               <input id="group" name="name" rows="5"
               class="bgColor-1-400 py-2 px-4 w-full outline-0
              border focus:b-color-pri outline-0 rounded color-1
              color-2-700" placeholder="Group Name Eg: Business Law">
            </div>

            <p id="response" class="w-full pb-2"></p>

            <button id="create_group_btn" class="w-4/12 bgColor-pri rounded py-3 color-1
             border-0 fw-bold hover:bgColor-pri-700 outline-0 pointer mb-4"
            type="button" name="button"
            onclick="(new Ajax).form('create_group')
                     .loader('create_group_btn')
                     .flush('response')
                     .send();">
                    Create Topic
             </button>
        </form>
   </div>
</main>

</body>

<?php require_once view('footer'); ?>
