<?php require_once view('header'); ?>

<body>

    <div class="h-16">
        <?php require_once view('user/nav'); ?>
    </div>

    <main class="h-screen bg-no-repeat bg-cover"
    style='background-image:url("<?= basePath() ?>/public/assets/images/bg/bg.jpg")'>

   <div class="w-5/12 m-0-auto ff-pri" >
       <div class="w-full fx fx-j-btw fx-i-c">
           <h4 class="color-2-700 fs-lg fw-normal lh-relaxed pt-4">
               Topics
           </h4>
            <a href="/create_group">
               <button id="signin_btn" class=" bgColor-pri rounded py-3 color-1
               mt-5 border-0 fw-bold hover:bgColor-pri-700 outline-0 pointer shadow"
               type="button" name="button">
                    New Topic
                </button>
            </a>
       </div>

       <?php foreach ($groups as $group): ?>
           <div class="bgColor-1 w-full h-auto shadow mt-5 pt-4">
               <a href="/group_questions/<?= $group->id ?>" class="no-line">
                   <div class="bgColor-1 h-auto w-11/12 fx fx-i-c fx-j-btw m-0-auto">
                       <div class="fx fx-i-c">
                           <div class="w-8 h-8 bgColor-pri shadow">
                           <img class="w-full h-full cover"
                           src="<?= images_path("/group_icons/{$group->icon}")?>" alt="icon">
                           </div>

                           <div class="color-2-600 fs-lg fw-bold pl-4">
                               <?= $group->name ?>
                           </div>
                       </div>

                       <div class="color-2-600 fs-md fw-bold">
                           <?= $group->created_at ?>
                       </div>
                   </div>

                   <div class="w-9/12 fx color-2-600 fs-lg
                    py-4 m-0-auto">
                       <!-- <a href="/group_members/<?= $group->id ?>"
                           class="w-8/12 no-line color-2-600 fx fx-j-btw">
                           <div class="fw-400">
                               Members:
                             <i class="fa fa-users">
                                  <?= $group->members()->count() ?>
                             </i>
                           </div>
                       </a> -->

                       <a href="/group_questions/<?= $group->id ?>"
                           class="w-8/12 no-line color-2-600 fx fx-j-btw">
                           <div class="fw-400">
                               Questions:
                               <?= $group->questions()->count() ?>
                           </div>
                       </a>
                       <?php if (auth()->user()->ownsGroup($group->user->id)): ?>
                           <a href="/delete_group/<?= $group->id ?>" class="no-line color-3-600">
                               <i class="fa fa-trash">delete</i>
                           </a>
                       <?php endif; ?>
                   </div>
               </a>
           </div>
       <?php endforeach; ?>

   </div>
</main>

</body>

<?php require_once view('footer'); ?>
