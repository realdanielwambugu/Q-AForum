<?php require_once view('header'); ?>

<body>

    <div class="h-16">
        <?php require_once view('user/nav'); ?>
    </div>

    <main class="h-screen bg-no-repeat bg-cover"
    style='background-image:url("<?= basePath() ?>/public/assets/images/bg/bg.jpg")'>

   <div class="w-5/12 m-0-auto ff-pri pb-10" >

       <div class="w-full fx fx-j-btw fx-i-c">
           <h4 class="color-2-700 fs-lg fw-normal lh-relaxed pt-4">
               <?= $title ?> :
           </h4>
            <a href="/ask_question/<?= $group->id ?>">
               <button id="signin_btn" class=" bgColor-pri rounded py-3 color-1
               mt-5 border-0 fw-bold hover:bgColor-pri-700 outline-0 pointer shadow"
               type="button" name="button">
                ASK A QUESTION
                </button>
            </a>
       </div>

       <?php if ($group->questions()->count()): ?>

           <?php foreach ($group->questions as $question): ?>

               <div class="bgColor-1 w-full h-auto shadow mt-5 pt-4">
                    <a href="/profile/<?= $question->user->id ?>" class="no-line">
                        <div class="bgColor-1 h-auto w-11/12 fx fx-i-c fx-j-btw m-0-auto">
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

                    <div class="w-10/12 m-0-auto py-2">
                        <a href="/question_answers/<?= $question->id ?>" class="no-line">
                            <div class="color-2-700 pl-4">
                                <div class="fs-lg fw-bold">
                                    <?= $question->question ?>
                                </div>

                                <?php if ($question->answer()->count()): ?>

                                <div class="bgColor-1 w-full h-auto shadow mt-5 pt-4">
                                    <div class="bgColor-1 h-auto w-11/12 fx fx-i-c fx-j-btw m-0-auto">
                                        <div class="fx fx-i-c">
                                            <div class="w-5 h-5 bgColor-pri shadow">
                                            <img class="w-full h-full cover"
                                            src="<?= images_path("/default/default.png")?>" alt="pic">
                                            </div>

                                            <div class="color-2-600 fs-md fw-bold pl-4">
                                                <?= $question->answer()->first()->user->fullName ?>
                                            </div>
                                        </div>

                                        <div class="color-2-600 fs-sm fw-bold">
                                            <?= $question->answer()->first()->created_at ?>
                                        </div>
                                    </div>

                                    <div class="w-10/12 m-0-auto pt-2 fs-md fw-normal lh-relaxed pl-4
                                    color-2-600 py-2">
                                        <?= $question->answer()->first()->answer ?>
                                    </div>
                                </div>

                            <?php endif; ?>

                            </div>
                        </a>

                        <div class="w-10/12 fx fx-j-btw color-2-600 fs-lg
                         py-4 pl-4">
                            <a href="/question_answers/<?= $question->id ?>"
                                class="w-9/12 no-line color-2-600 fx fx-j-btw">
                                <div class="fw-bold">
                                    Answers:
                                  <i class="fa fa-comment">
                                       <?= $question->answer()->count() ?>
                                  </i>
                                </div>
                            </a>
                            <a href="/answer_question/<?= $question->id ?>"
                                class="w-9/12 no-line color-2-600 fx fx-j-btw">
                                <div class="fx fx-i-c">
                                    <p class="fw-600">Answer</p>
                                    <i class="fa fa-pencil"></i>
                                </div>
                           </a>

                            <a href="/delete_question/<?= $question->id ?>" class="no-line color-3-600">
                                <i class="fa fa-trash">delete</i>
                            </a>
                        </div>

                    </div>

                </div>
            </div>

           <?php endforeach; ?>

        <?php else: ?>

            <p class="txt-h-c py-4 color-3">
                Sorry! No questions in this category.
            </p>

       <?php endif; ?>

   </div>
   </main>
</body>

<?php require_once view('footer'); ?>
