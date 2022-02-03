<?php require_once view('header'); ?>

<body>
    <main class="w-full h-screen bgColor-1 ff-pri">
        <?php require_once view('admin/partials/adminHeader'); ?>

        <?php require_once view('admin/partials/sidebar'); ?>

        <div class="fx fx-j-e pt-20 ff-sec color-1-800">
            <div class="w-10/12">

                <div class="w-11/12 m-0-auto mt-10 fx fx-j-btw fx-i-c">
                    <h4 class="fw-400 fs-md color-pri-600 ">
                        Groups
                    </h4>
                </div>

                <div class="w-11/12 m-0-auto fx">
                    <table class="table-auto border-collapse bgColor-trans m-0-auto">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 color-pri">Id</th>
                                <th class="px-4 py-2 color-pri">Owner</th>
                                <th class="px-4 py-2 color-pri">Icon</th>
                                <th class="px-4 py-2 color-pri">Name</th>
                                <th class="px-4 py-2 color-pri">Updated</th>
                                <th class="px-4 py-2 color-pri">Created</th>
                            </tr>
                        </thead>

                        <tbody class="txt-h-c">

                            <?php foreach ($groups as $group): ?>

                            <tr class="bgColor-1 border-0 shadow">
                                <td class="px-4 py-2 color-2-600 border-0"> <?= $group->id ?> </td>
                                <td class="px-4 py-2 color-2-600 border-0"> <?= $group->user->fullName ?> </td>
                                <td class="w-8 h-8 bgColor-pri">
                                <img class="w-full h-full cover"
                                src="<?= images_path("/group_icons/{$group->icon}")?>" alt="icon">
                                </td>
                                <td class="px-4 py-2 color-2-600 border-0"> <?= $group->name ?> </td>
                                <td class="px-4 py-2 color-2-600 border-0"> <?= $group->updated_at ?> </td>
                                <td class="px-4 py-2 color-2-600 border-0"> <?= $group->created_at ?> </td>
                            </tr>

                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>

<?php require_once view('footer'); ?>
