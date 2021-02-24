let bar=document.getElementById("bar");
let state=true;
 function hide() {
    changeState()
     state?this.bar.style.display = "block":this.bar.style.display = "none";
 }
 function changeState()
 {
    state?state=false:state=true;

 }