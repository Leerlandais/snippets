document.addEventListener('DOMContentLoaded', function(){

const   addFormClassNew = document.getElementById("addFormClassNew"),
        addFormClass = document.querySelectorAll(".addFormClass");

addFormClassNew.addEventListener("input", function() {
    console.log("input");
    for (let i=0; i<addFormClass.length; i++ ) {
        addFormClass[i].checked = false;
    }
});


});