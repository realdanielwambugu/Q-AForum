<?php require_once view('header'); ?>

<body>
    <div class="w-full h-screen fx fx-j-c fx-i-c">
        <div class="txt-h-c ff-pri fw-600">
            <h2 class="color-pri">
                Welcome to <?= app_name(); ?>
            </h2>
            <p class="color-2-700 pt-2 fs-sm">
                let's Create something awesome
            </p>

            <?php if (auth()->check()): ?>

                <a href="/logout">
                    <button class="bgColor-3 color-1 py-2 px-4 border-0 mt-4 shadow
                    pointer hover:bgColor-3-600"
                    type="button" name="button">
                        Sign Out
                    </button>
                </a>

            <?php else: ?>

                <a href="/signin">
                    <button class="bgColor-pri color-1 py-2 px-4 border-0 mt-4 shadow
                    pointer hover:bgColor-pri-600"
                    type="button" name="button">
                        Sign In
                    </button>
                </a>

            <?php endif; ?>

        </div>
    </div>
</body>

<?php require_once view('footer'); ?>
