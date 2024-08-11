<?php

?>
<form action="./" method="POST" id="addNewForm">
    <div class="bg-[#F9FAFB] h-auto w-auto flex items-center">
        <div class="h-max mx-auto flex flex-col items-center">
            <h3 class="text-xl font-bold text-center pb-10">Add Form</h3>
        <div class="bg-white shadow-xl p-10 flex flex-row gap-4 text-sm text-center">
            <div class="flex flex-row">
                <div class="flex flex-col">
                    <div>
                        <?php
                            $i = false;
                            foreach ($buttonsForAddForm as $button) {
                        ?>
                            <label for="addFormClass<?=$button["class"]?>" class="ml-4"><?=ucfirst($button["class"])?></label>
                            <input class="ps-2 me-1 addFormClass" type="radio" id="addFormClass<?=$button["class"]?>" name="addFormClass" value="<?=$button["class"]?>" <?= $i ? 'required' : '' ?>>
                        <?php
                            $i = false;
                            }
                        ?>
                    </div>
                <label class="text-gray-600 font-bold inline-block pb-2" for="addFormClassNew">Add Class</label>
                <input class="border border-gray-400 focus:outline-slate-400 rounded-md w-full shadow-sm px-5 py-2" type="text" name="addFormClass" id="addFormClassNew" placeholder="Add New Class">
                <div>
                    <label class="text-gray-600 font-bold inline-block pb-2" for="addFormTitle">Title</label>
                    <input class="border border-gray-400 focus:outline-slate-400 rounded-md w-full shadow-sm px-5 py-2" type="text" name="addFormTitle" id="addFormTitle" placeholder="Title" required>
                </div>
                <div>
                    <label class="text-gray-600 font-bold inline-block pb-2" for="addFormDesc">Description</label>
                    <input class="border border-gray-400 focus:outline-slate-400 rounded-md w-full shadow-sm px-5 py-2" type="text" name="addFormDesc" id="addFormDesc" placeholder="Description" required>
                </div>
                <div>
                    <label class="text-gray-600 font-bold inline-block pb-2" for="addFormImage">Image Location</label>
                    <input class="border border-gray-400 focus:outline-slate-400 rounded-md w-full shadow-sm px-5 py-2" type="text" name="addFormImage" id="addFormImage" placeholder="Location of Image" required>
                </div>
                <div>
                    <label class="text-gray-600 font-bold inline-block pb-2" for="addFormCode">Code</label>
                    <textarea class="border border-gray-400 focus:outline-slate-400 rounded-md w-full shadow-sm px-5 py-2" name="addFormCode" id="addFormCode" placeholder="Code" required></textarea>
                    <input type="text" name="addFormMode" id="addFormMode" value="<?=$_GET["mode"]?>">
                </div>
                </div>
        <!--        <div class="flex flex-col"></div>       -->
            </div>
        </div>
                <div>
                    <button class="bg-[#4F46E5] w-full py-2 px-6 mt-2 rounded-md text-white font-bold cursor-pointer hover:bg-[#181196]" type="submit">Add</button>
                </div> 
        </div>
    </div>
</form>
