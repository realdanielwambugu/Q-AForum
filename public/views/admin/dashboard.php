<?php require_once view('header');  ?>

<body>
    <main class="w-full h-screen bgColor-1 ff-pri">
        <?php require_once view('admin/partials/adminHeader'); ?>

        <?php require_once view('admin/partials/sidebar'); ?>

        <div class="fx fx-j-e pt-20 ff-sec color-1-800">
            <div class="w-10/12">

                <div class="w-11/12 m-0-auto mt-10">
                    <h4 class="fw-400 fs-md color-pri-600 pb-4">
                        Dashboard
                    </h4>
                </div>

                <div class="w-11/12 m-0-auto fx">
                    <div style="background-color:#3C41C5;"
                    class="bgColor-pri w-3/12 h-40">
                    <div class="w-full txt-h-c pt-6">
                        <h4 class="py-2">Users</h4>
                        <h2 class="py-2"> <?= number_format($users)?></h2>
                    </div>
                    </div>
                    <div style="background-color:#503B7C;"
                    class="bgColor-pri w-3/12 h-40 ml-6">
                    <div class="w-full txt-h-c pt-6">
                        <h4 class="py-2">Questions</h4>
                        <h2 class="py-2"> <?= number_format($Question)?></h2>
                    </div>
                    </div>
                    <div style="background-color:#6B124D;"
                    class="bgColor-pri w-3/12 h-40 ml-6">
                    <div class="w-full txt-h-c pt-6">
                        <h4 class="py-2">Groups</h4>
                        <h2 class="py-2"><?= $groups?></h2>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

<?php require_once view('footer'); ?>
