<?php
var_dump($addForm);
?>
<form action="./" method="POST">
    <div class="bg-[#F9FAFB] h-auto w-auto flex items-center">
        <div class="h-max mx-auto flex flex-col items-center">
            <h3 class="text-xl font-bold text-center pb-10">Add Form</h3>
            <div class="bg-white shadow-xl p-10 flex flex-row gap-4 text-sm text-center">
                <div class="flex flex-col">
                <div>
                    <?php
                    $i = true;
                    foreach ($addForm as $value) {
                        ?>
                        <label for="addFormClass<?=$value["class"]?>" class="ml-4"><?=ucfirst($value["class"])?></label>
                        <input class="ps-2 me-1" type="radio" id="addFormClass<?=$value["class"]?>" name="addFormClass" value="<?=$value["class"]?>" <?= $i ? 'required' : '' ?>>
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
                    <label class="text-gray-600 font-bold inline-block pb-2" for="addFormDesc">Description</label>
                    <input class="border border-gray-400 focus:outline-slate-400 rounded-md w-full shadow-sm px-5 py-2" type="text" name="addFormDesc" id="addFormDesc" placeholder="Description" required>
                </div>
                </div>
                <div class="flex flex-col">
                <div>
                    <label class="text-gray-600 font-bold inline-block pb-2" for="addFormRw">Raw Code</label>
                    <textarea class="border border-gray-400 focus:outline-slate-400 rounded-md w-full shadow-sm px-5 py-2" name="addFormRw" id="addFormRw" placeholder="Raw" required></textarea>
                </div>
                    <div>
                        <label class="text-gray-600 font-bold inline-block pb-2" for="addFormRwCss">Raw Style</label>
                        <textarea class="border border-gray-400 focus:outline-slate-400 rounded-md w-full shadow-sm px-5 py-2" name="addFormRwCss" id="addFormRwCss" placeholder="Raw Style" required></textarea>
                    </div>
                </div>
                <div class="flex flex-col">
                <div>
                    <label class="text-gray-600 font-bold inline-block pb-2" for="addFormBs">BS Code</label>
                    <textarea class="border border-gray-400 focus:outline-slate-400 rounded-md w-full shadow-sm px-5 py-2" name="addFormBs" id="addFormBs" placeholder="Bootstrap" required></textarea>
                </div>
                <div>
                    <label class="text-gray-600 font-bold inline-block pb-2" for="addFormTw">TW Code</label>
                    <textarea class="border border-gray-400 focus:outline-slate-400 rounded-md w-full shadow-sm px-5 py-2" name="addFormTw" id="addFormTw" placeholder="Tailwind" required></textarea>
                </div>
                </div>
                <div class="flex flex-col">
                <div>
                    <label class="text-gray-600 font-bold inline-block pb-2" for="addFormJs">JS Code</label>
                    <textarea class="border border-gray-400 focus:outline-slate-400 rounded-md w-full shadow-sm px-5 py-2" name="addFormJs" id="addFormJs" placeholder="Main JS Code" required></textarea>
                </div>
                <div>
                    <label class="text-gray-600 font-bold inline-block pb-2" for="addFormJsX">JS Optional</label>
                    <textarea class="border border-gray-400 focus:outline-slate-400 rounded-md w-full shadow-sm px-5 py-2" name="addFormJsX" id="addFormJsX" placeholder="Secondary JS Code">Optional</textarea>
                </div>
                </div>
                <div class="flex flex-col">
                <div>
                    <label class="text-gray-600 font-bold inline-block pb-2" for="addFormPhp">Php Code</label>
                    <textarea class="border border-gray-400 focus:outline-slate-400 rounded-md w-full shadow-sm px-5 py-2" name="addFormPhp" id="addFormPhp" placeholder="PHP Function" required></textarea>
                </div>
                <div>
                    <label class="text-gray-600 font-bold inline-block pb-2" for="addFormPhpX">Php Call</label>
                    <textarea class="border border-gray-400 focus:outline-slate-400 rounded-md w-full shadow-sm px-5 py-2" name="addFormPhpX" id="addFormPhpX" placeholder="PHP Call" required></textarea>
                </div>
                </div>
            </div>
                <div>
                    <button class="bg-[#4F46E5] w-full py-2 px-6 mt-2 rounded-md text-white font-bold cursor-pointer hover:bg-[#181196]" type="submit">Add</button>
                </div>
        </div>
    </div>
</form>
