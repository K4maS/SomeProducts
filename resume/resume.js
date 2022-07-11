var galery = ["cert-html.jpg", "cert-sql.png", "test-school-cert.png"];
img.src = galery[0];
var x = 0;

forward_btn.onclick = function () {
    x++;
    if (x >= galery.length) {
        x = 0;
    }
    img.src = galery[x];
}
back_btn.onclick = function () {
    x--;
    if (x < 0) {
        x = galery.length - 1;
    }
    img.src = galery[x];
}

var kontent_val = galery.length
num = 0;
for (let i = 0; i < galery.length; i++) {
    var newbtn = document.createElement("button");
    dot.appendChild(newbtn);
    newbtn.value = i;
    newbtn.setAttribute("onclick", 'dotclick(' + i + ')');
    //switch (i) {
        //case 0:
          //  newbtn.setAttribute('style', 'left: 45%');
           // break;
     //   case 1:
         //   newbtn.setAttribute('style', 'left: 48%');
         //   break;
      //  case 2:
         //   newbtn.setAttribute('style','left: 51%');
          //  break;
       // case 3:
      //      newbtn.setAttribute('style','left: 54%');
      //      break;
     //   case 4:
       //     newbtn.setAttribute('style','left: 57%');
      //      break;
      //  case 5:
     //       newbtn.setAttribute('style','left: 60%');
     //       break;
      //  case 6:
       //     newbtn.setAttribute('style','left: 63%');
            //break;
      //  case 7:
          //  newbtn.setAttribute('style','left: 66%');
          //  break;
      //  case 8:
      //      newbtn.setAttribute('style','left: 69%');
      //      break;
       // case 9:
           // newbtn.setAttribute('style','left: 72%');
          //  break;
     //   case 10:
         //   newbtn.setAttribute('style','left: 75%');
        //    break;
  //  }  
}
function dotclick(i) { 
    img.src = galery[i];
 }
