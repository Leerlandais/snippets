
<form action="./" method="POST">
    <div class="bg-[#F9FAFB] h-auto w-auto flex items-center">
        <div class="h-max mx-auto flex flex-col items-center">
            <h3 class="text-xl font-bold text-center pb-10">Add Form</h3>
            <div class="bg-white shadow-xl p-10 flex flex-col gap-4 text-sm text-center">

                <div>
                    <label for="formClassRw" class="ml-4">Login</label>
                    <input class="ps-2 me-1" type="radio" name="addFormClass" id="formClassRw" checked value="rw">
                    <label for="formClassBs" class="ml-4">BS</label>
                    <input class="ps-2 me-1" type="radio" name="addFormClass" id="formClassBs" value="bs">
                    <label for="formClassTw" class="ml-4" >TW</label>
                    <input class="ps-2 me-1" type="radio" name="addFormClass" id="formClassTw" value="tw">
                </div>

                <div>
                    <label class="updateLabels" for="addTextLocation">Location</label>
                    <input class="updateInputs" type="text" name="addTextLocation" id="addTextLocation" placeholder="Text" required>
                </div>
                <div>
                    <label class="updateLabels" for="addTextElement">Element</label>
                    <input class="updateInputs" type="text" name="addTextElement" id="addTextElement" placeholder="Elem Name" required>
                </div>

                <div>
                    <label class="text-gray-600 font-bold inline-block pb-2" for="addTextEnglish">English</label>
                    <input class="border border-gray-400 focus:outline-slate-400 rounded-md w-full shadow-sm px-5 py-2" type="text" name="addTextEnglish" id="addTextEnglish" placeholder="English Text" required>
                </div>
                <div>
                    <label class="updateLabels" for="addTextFrench">Français</label>
                    <input class="updateInputs" type="text" name="addTextFrench" id="addTextFrench" placeholder="French Text" required>
                </div>
                <div>
                    <button class="bg-[#4F46E5] w-full py-2 rounded-md text-white font-bold cursor-pointer hover:bg-[#181196]" type="submit">Add</button>
                </div>
            </div>
        </div>
    </div>
</form>
