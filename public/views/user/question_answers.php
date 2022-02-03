<?php require_once view('header'); ?>

<body>

    <main class="h-screen bg-no-repeat bg-cover"
    style='background-image:url("<?= basePath() ?>/public/assets/images/bg/bg.jpg")'>

    <div class="h-16">
        <?php require_once view('user/nav'); ?>
    </div>

    <div class="w-5/12  m-0-auto ff-pri">

        <div class="bgColor-1 w-full h-auto mt-5 pt-4">
            <div class="shadow">
                <a href="/profile/<?= $question->user->id ?>" class="no-line">
                    <div class="bgColor-1 h-auto w-11/12 fx fx-i-c fx-j-btw m-0-auto
                    pt-2 px-4 py-4">
                        <div class="fx fx-i-c">
                            <div class="w-8 h-8 bgColor-pri shadow">
                            <img class="w-full h-full cover"
                            src="<?= images_path("/default/default.png")?>" alt="pic">
                            </div>

                            <div class="color-2-600 fs-lg fw-bold pl-4">
                                <?= $question->user->fullName ?>
                            </div>
                        </div>

                        <div class="color-2-600 fs-md fw-bold">
                            <?= $question->created_at ?>
                        </div>
                    </div>
                </a>

                <div class="w-10/12 m-0-auto py-4 pl-4">
                    <a href="/answers" class="no-line">
                        <div class="fs-lg fw-bold color-2-700">
                            <?= $question->question ?>
                        </div>
                    </a>
                </div>
            </div>
            <div class="w-full fx fx-j-btw fx-i-c px-4 py-4">
                <h4 class="color-2-700 fs-lg fw-normal lh-relaxed pt-4">
                   Answers: <?= $question->answer()->count() ?>
                </h4>
                 <a href="/answer_question/<?= $question->id ?>">
                    <button id="signin_btn" class=" bgColor-pri rounded py-3 color-1
                    mt-5 border-0 fw-bold hover:bgColor-pri-700 outline-0 pointer shadow"
                    type="button" name="button">
                     ADD YOUR ANSWER
                     </button>
                 </a>
            </div>

         </div>

     <!-- Answers -->
     <?php if ($question->answer()->count()): ?>

         <?php foreach ($question->answer as $answer): ?>

             <div class="bgColor-1 w-full h-auto shadow mt-5 pt-4">
                     <a href="/profile/<?= $answer->user->id ?>" class="no-line">
                         <div class="bgColor-1 h-auto w-11/12 fx fx-i-c fx-j-btw m-0-auto">
                             <div class="fx fx-i-c">
                                 <div class="w-5 h-5 bgColor-pri shadow">
                                 <img class="w-full h-full cover"
                                 src="<?= images_path("/default/default.png")?>" alt="pic">
                                 </div>

                                 <div class="color-2-600 fs-md fw-bold pl-4">
                                     <?= $answer->user->fullName ?>
                                 </div>
                             </div>

                             <div class="color-2-600 fs-sm fw-bold">
                                 <?= $answer->created_at ?>
                             </div>
                         </div>
                     </a>

                     <div class="w-10/12 m-0-auto pt-2 fs-md fw-normal lh-relaxed pl-4
                     color-2-600 py-2">
                         <?= $answer->answer ?>
                     </div>

                     <div class="w-10/12 m-0-auto color-2-600 fs-lg pb-4 fx fx-j-e ">
                         <a href="/delete_answer/<?=$question->id?>/<?=$answer->id?>"
                            class="no-line color-3-600">
                             <i class="fa fa-trash">delete</i>
                         </a>
                     </div>

                </div>

         <?php endforeach; ?>

     <?php else: ?>

         <p class="txt-h-c py-4 color-3">
             Sorry! This question has no answers.
         </p>

     <?php endif; ?>

 </div>
 </main>

</body>

<?php require_once view('footer'); ?>
