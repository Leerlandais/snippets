document.addEventListener('DOMContentLoaded', function(){

    const   addFormClassNew = document.getElementById("addFormClassNew"),
        addFormClass = document.querySelectorAll(".addFormClass"),
        addNewForm = document.getElementById("addNewForm");
console.log(addFormClass.length);
    addNewForm.addEventListener("submit", function(e){
        e.preventDefault();
        if (addFormClassNew.value === "") {
            for (let i=0; i<addFormClass.length; i++ ) {
                if(addFormClass[i].checked === true) {
                    addFormClassNew.value = addFormClass[i].value;
                }
            }
        }
        addNewForm.submit();
    });


    addFormClassNew.addEventListener("input", function() {
        console.log("input");
        for (let i=0; i<addFormClass.length; i++ ) {
            addFormClass[i].checked = false;
        }
    });
});