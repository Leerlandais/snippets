<?php

?>


<div class="flex flex-col justify-center overflow-hidden bg-gray-50 py-6 mt-16">
    <div class="mx-auto">
        <div class="grid grid-cols-2 gap-6">
            <?php
            foreach ($getForms as $form) {
            ?>
            <div class="group pb-24 relative overflow-hidden text-center">
                <img src="<?=$form["img"]?>" class="d-block w-25 my-0 mx-auto"  alt="<?=$form["title"]?>">
                <p><?=$form["descp"]?></p>
            </div>
            <?php
            }
            ?>
            <div class="group pb-24 relative overflow-hidden">
test
            </div>

            <div class="group pb-24 relative overflow-hidden">

            </div>

            <div class="group pb-24 relative overflow-hidden">

            </div>



        </div>
    </div>
</div>