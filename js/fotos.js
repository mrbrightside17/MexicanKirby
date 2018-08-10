$(document).ready(init);

function init(){
  $(".gallery").click(show);
  var modalImg;
}

function show(){
  modal = document.getElementById('myModal');
  img = document.getElementById(this.id);
  modalImg= document.getElementById("img01");

  modal.style.display = "block";
  modalImg.src = this.src;

  span = document.getElementById("close");
  span.onclick=function(){
  modal.style.display = "none";
  }

}

function update(n){
  if(parseInt(modalImg.src.slice(-6,-4)) >9){
    adjust = parseInt(modalImg.src.slice(-6,-4));
    o = adjust + n;
    if(o==13){
      modalImg.src = modalImg.src.replace(adjust,"1");
      o = 1;
    }
    else {
      modalImg.src = modalImg.src.replace(adjust,o.toString());
    }
  }
  else if (parseInt(modalImg.src.slice(-5,-4))<=9){
    adjust = parseInt(modalImg.src.slice(-5,-4));
    o = adjust + n;
    if (o==0){
      modalImg.src = modalImg.src.replace(adjust,"12");
      o =12;
    }
    else {
      modalImg.src = modalImg.src.replace(adjust,o.toString());
    }
  }
}
