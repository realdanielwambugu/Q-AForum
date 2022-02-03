<header class="w-full bgColor-1 t-0 shadow fixed">
    <div class="w-10/12 m-0-auto h-16 lg:fx fx-j-btw">
        <div class="w-full lg:w-1/5 fx fx-j-btw fx-i-c h-full">
            <div class="h-16 color-pri fx fx-i-c fs-lg">
               <i class="fal fa-star"></i>
               <h4 class="fx fx-i-c h-16 px-1"><?= app_name(); ?> </h4>
            </div>
        </div>

        <nav id="nav"  class="w-full lg:w-9/12 xs:hide fx
         fx-j-btw fx-i-c ">
            <ul class="w-full fw-bold lg:fw-bold lg:fx fx-j-a fx-i-c
            lg:h-full pb-5 lg:pb-0 ls-wide fs-lg color-3-600 list-none">

            <a href="/groups" class="no-line">
                <li class="pointer py-2 lg:py-0 color-pri">
                Topics
                </li>
            </a>

            <a href="/support" class="no-line">
                <li class="pointer py-2 lg:py-0 color-pri">
                 Support
                </li>
            </a>

            <a href="/about_us" class="no-line">
                <li class="pointer py-2 lg:py-0 color-pri">
                 About Us
                </li>
            </a>

            <a href="/terms_of_use" class="no-line">
                <li class="pointer py-2 lg:py-0 color-pri">

                </li>
            </a>

                <?php if (auth()->check()): ?>

                    <a href="/logout" class="no-line xs:hide">
                       <button class="bgColor-pri color-1 fs-xs  py-2
                        w-24  border-0 rounded fw-bold ff-pri pointer outline-0
                       shadow hover:bgColor-3"
                       type="button" name="button">
                            <i class="fa fa-sign-out px-1"></i> Signout
                       </button>
                    </a>

                    <a href="/profile" class="no-line xs:hide">
                       <button class="bgColor-pri color-1 fs-xs  py-2
                        w-24  border-0 rounded fw-bold ff-pri pointer outline-0
                       shadow hover:bgColor-pri-500"
                       type="button" name="button">
                            <i class="fa fa-user px-1"></i> Account
                       </button>
                    </a>


                <?php else: ?>
                    <a href="/signin" class="no-line xs:hide">
                       <button class="bgColor-pri color-1 fs-xs  py-2
                        w-24  border-0 rounded fw-bold ff-pri pointer outline-0
                       shadow hover:bgColor-pri-500"
                       type="button" name="button">
                            <i class="fa fa-sign-in px-1"></i> Signin
                       </button>
                    </a>

                    <a href="/signup" class="no-line xs:hide">
                       <button class="bgColor-pri color-1 fs-xs  py-2
                        w-24  border-0 rounded fw-bold ff-pri pointer outline-0
                       shadow hover:bgColor-pri-500"
                       type="button" name="button">
                            <i class="fa fa-user px-1"></i> Sign  Up
                       </button>
                    </a>

                <?php endif; ?>
            </ul>

        </nav>

    </div>
</header>
