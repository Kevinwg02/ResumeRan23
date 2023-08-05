// RPS

// Get the modal
var modalR = document.getElementById("myModal_Rps");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var imgR = document.getElementById("rpsimg");
var modalImgR = document.getElementById("modaltarget_rpsimg");
var captionTextR = document.getElementById("caption");
imgR.onclick = function () {
  modalR.style.display = "block";
  modalImgR.src = this.src;
  captionTextR.innerHTML = this.alt;
};

// Get the <span> element that closes the modal
var spanR = document.getElementsByClassName("closeR")[0];

// When the user clicks on <span> (x), close the modal
spanR.onclick = function () {
  modalR.style.display = "none";
};


// Miniblog
var modalMB = document.getElementById("myModal_miniblog");
var imgMB = document.getElementById("miniblogimg");
var modalImgMB = document.getElementById("modaltarget_miniblog");
var captionTextMB = document.getElementById("caption");
imgMB.onclick = function () {
  modalMB.style.display = "block";
  modalImgMB.src = this.src;
  captionTextMB.innerHTML = this.alt;
};
var spanMB = document.getElementsByClassName("closeMB")[0];
spanMB.onclick = function () {
  modalMB.style.display = "none";
};

// login
var modalL = document.getElementById("myModal_login");
var imgL = document.getElementById("loginimg");
var modalImgL = document.getElementById("modaltarget_login");
var captionTextL = document.getElementById("caption");
imgL.onclick = function () {
  modalL.style.display = "block";
  modalImgL.src = this.src;
  captionTextL.innerHTML = this.alt;
};
var spanL = document.getElementsByClassName("closeL")[0];
spanL.onclick = function () {
  modalL.style.display = "none";
};


// puissance4
var modalP = document.getElementById("myModal_puissance4");
var imgP = document.getElementById("puissance4img");
var modalImgP = document.getElementById("modaltarget_puissance4");
var captionTextP = document.getElementById("caption");
imgP.onclick = function () {
  modalP.style.display = "block";
  modalImgP.src = this.src;
  captionTextP.innerHTML = this.alt;
};
var spanP = document.getElementsByClassName("closeP")[0];
spanP.onclick = function () {
  modalP.style.display = "none";
};

// dock
var modalMD = document.getElementById("myModal_middledock");
var imgMD = document.getElementById("dockimg");
var modalImgMD = document.getElementById("modaltarget_middledock");
var captionTextMD = document.getElementById("caption");
imgMD.onclick = function () {
  modalMD.style.display = "block";
  modalImgMD.src = this.src;
  captionTextMD.innerHTML = this.alt;
};
var spanMD = document.getElementsByClassName("closeMD")[0];
spanMD.onclick = function () {
  modalMD.style.display = "none";
};