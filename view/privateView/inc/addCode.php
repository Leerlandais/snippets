<?php

?>
<!-- component -->
<!--
  Welcome to Tailwind Play, the official Tailwind CSS playground!

  Everything here works just like it does when you're running Tailwind locally
  with a real build pipeline. You can customize your config file, use features
  like `@apply`, or even add third-party plugins.

  Feel free to play with this example if you're just learning, or trash it and
  start from scratch if you know enough to be dangerous. Have fun!
-->
<div class="flex flex-col justify-center overflow-hidden bg-gray-50 py-6 mt-16">
    <div class="mx-auto">
        <div class="grid grid-cols-4 gap-6">
            <div class="group pb-24 relative overflow-hidden">
                <form action="./" method="POST" class="border border-black px-8 text-center">

                    <h3 class="text-xl font-bold text-center pb-10" id="addCodePhpHeader">Add PHP Function</h3>

                    <div>
                        <label class="text-gray-600 font-bold inline-block pb-2" for="addCodePhpFunc">Code</label>
                        <textarea class="border border-gray-400 focus:outline-slate-400 rounded-md w-full shadow-sm px-5 py-2" type="text" name="addCodePhpFunc" rows="10" required></textarea>
                    </div>
                    <div class="flex flex-col">
                        <label class="text-gray-600 font-bold inline-block pb-2" for="userLoginPwd" id="loginFormPwd">Target :</label>

                        <select x-cloak>
                            <option value="addCodePhpFuncTarget0">FreeStanding</option>
                            <?php
                            foreach ($existingForms as $form) {
                            ?>
                            <option value="addCodePhpFuncTarget<?=$form["id"]?>"><?=$form["title"]?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="flex justify-center py-6">
                        <button type="submit" class="bg-[#4F46E5] w-auto mt-3 p-2 rounded-md text-white font-bold cursor-pointer hover:bg-[#181196]">Submit</button>
                    </div>
                </form>
            </div>

            <div class="group pb-24 relative overflow-hidden">
                test
            </div>

            <div class="group pb-24 relative overflow-hidden">
                test
            </div>

            <div class="group pb-24 relative overflow-hidden">
                test
            </div>



        </div>
    </div>
</div>