
<form action="./" method="POST">
    <div class="bg-[#F9FAFB] h-auto w-screen flex items-center">
        <div class="h-max mx-auto flex flex-col items-center">
            <img class="h-[40px] w-[47px] mb-5" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
            <h3 class="text-xl font-bold text-center pb-10" id="loginFormHeader">Login</h3>
            <div class="bg-white shadow-xl p-10 flex flex-col gap-4 text-sm text-center">
                <div>
                    <label class="text-gray-600 font-bold inline-block pb-2" for="userLoginName" id="loginFormUser">Name :</label>
                    <input class="border border-gray-400 focus:outline-slate-400 rounded-md w-full shadow-sm px-5 py-2" type="text" name="userLoginName" id="userName" required>
                </div>
                <div>
                    <label class="text-gray-600 font-bold inline-block pb-2" for="userLoginPwd" id="loginFormPwd">Password :</label>
                    <input class="border border-gray-400 focus:outline-slate-400 rounded-md w-full shadow-sm px-5 py-2" type="password" name="userLoginPwd" id="userLoginPwd" required>
                </div>
                <div>
                    <button type="submit" class="bg-[#4F46E5] w-full py-2 rounded-md text-white font-bold cursor-pointer hover:bg-[#181196]">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>