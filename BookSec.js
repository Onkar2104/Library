let themeBtn=document.querySelector("#theme");
let currtheme="light";

themeBtn.addEventListener("click",()=>{
    if(currtheme==="light"){
        currtheme="dark";
        document.querySelector("body").style.backgroundColor="black";
    }else{
        currtheme="light";
        document.querySelector("body").style.backgroundColor="white";
    }
    console.log(currtheme);
});