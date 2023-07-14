function openSideBar() {

    document.getElementById("side-navi").style.width = "250px";
    document.getElementById("content-text").style.marginLeft = "250px";
    document.getElementById("myForm").style.marginLeft = "150px";
}

function closeSideBar() {

   document.getElementById("side-navi").style.width = "0";
   document.getElementById("content-text").style.marginLeft = "0";
   document.getElementById("myForm").style.marginLeft = "0";
}

function cancelnew(){
    document.getElementById("newLine").style.display = "none";
}

function showProfile(){
    var x=document.getElementById("login_box");
    if (x.style.display == "block") {
        x.style.display = "none";
      } else {
        x.style.display = "block";
      }
    }
