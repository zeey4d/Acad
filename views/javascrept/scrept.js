// menu bar 

// let menulist = document.getElementById('menulist')
// menulist.style.display("none");

function togglemenu(){
    if(menulist.style.maxHeight=="0px")
    {
        menulist.style.maxHeight= "300px";
    }
    else {
        menulist.style.maxHeight= "0px";
    }
}

const button = document.getElementById("toggleBtn");
const closee = document.getElementById("close");

button.addEventListener("click", () => {
    content.style.display = "block"; 
});

closee.addEventListener("click", () => {
    content.style.display = "4444"; 
});