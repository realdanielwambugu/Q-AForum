<?php require_once view('header'); ?>

<body>
    <main class="h-screen bg-no-repeat bg-cover"
    style='background-image:url("<?= basePath() ?>/public/assets/images/bg/bg.jpg")'>
    <div class="h-16">
        <?php require_once view('user/nav'); ?>
    </div>

    <div class="w-5/12 m-0-auto shadow ff-pri">
        <div class="bgColor-1 w-11/12 h-auto m-0-auto mt-5 py-4 px-4">

            <div class="fs-lg fw-bold color-2-700 py-2">
                <?= $question->question ?>
            </div>

            <h4 class="color-2 fs-lg fw-normal lh-relaxed py-2">
                Answer here.
            </h4>

            <div class="w-full py-2">
              <textarea id="answer" name="answer" rows="5"
              class="bgColor-1-400 py-2 px-4 w-full outline-0
              border focus:b-color-pri outline-0 rounded color-1
              color-2-700" placeholder="What is your answer?"></textarea>
            </div>

            <p id="response" class="w-full pb-2"></p>

            <button id="answer_btn" class="w-4/12 bgColor-pri rounded py-3 color-1
             border-0 fw-bold hover:bgColor-pri-700 outline-0 pointer mb-4"
            type="button" name="button"
            onclick="(new Ajax).route('answer_question')
                     .data({
                         answer:document.getElementById('answer').value,
                         question_id:<?= $question->id ?>
                        })
                     .loader('answer_btn')
                     .flush('response')
                     .send();">
             Post answer
            </button>

        </div>
   </div>
   </main>
</body>

<?php require_once view('footer'); ?>
