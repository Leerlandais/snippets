<?php
var_dump($addForm);
?>
<form action="./" method="POST">
    <div class="bg-[#F9FAFB] h-auto w-auto flex items-center">
        <div class="h-max mx-auto flex flex-col items-center">
            <h3 class="text-xl font-bold text-center pb-10">Add Form</h3>
            <div class="bg-white shadow-xl p-10 flex flex-col gap-4 text-sm text-center">

                <div>
                    <?php
                    $i = true;
                    foreach ($addForm as $value) {
                        ?>
                        <label for="formClass<?=$value["class"]?>" class="ml-4"><?=ucfirst($value["class"])?></label>
                        <input class="ps-2 me-1" type="radio" id="formClass<?=$value["class"]?>" name="formClass" value="<?=$value["class"]?>" <?= $i ? 'required' : '' ?>>
                        <?php
                        $i = false;
                    }
                    ?>

                </div>

                <div>
                    <label class="text-gray-600 font-bold inline-block pb-2" for="addFormTitle">Title</label>
                    <input class="border border-gray-400 focus:outline-slate-400 rounded-md w-full shadow-sm px-5 py-2" type="text" name="addFormTitle" id="addFormTitle" placeholder="Title" required>
                </div>
                <div>
                    <button class="bg-[#4F46E5] w-full py-2 rounded-md text-white font-bold cursor-pointer hover:bg-[#181196]" type="submit">Add</button>
                </div>
            </div>
        </div>
    </div>
</form>
