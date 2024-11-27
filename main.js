// var album = [];
for (var i = 0; i < 5; i++) {
  album[i] = new Image();
  album[i].src = "./img/anh" + i + ".jpeg";
}

var index = 0;
var isPlaying = true; // Trạng thái slideshow
var interval = setInterval(slideshow, 1000);

function slideshow() {
  index++;
  if (index > 4) {
    index = 0;
  }
  document.getElementById("banner").src = album[index].src;
}

function next() {
  clearInterval(interval); // Dừng slideshow
  isPlaying = false;
  index++;
  if (index > 4) {
    index = 0;
  }
  document.getElementById("banner").src = album[index].src;
}

function pre() {
  clearInterval(interval); // Dừng slideshow
  isPlaying = false;
  index--;
  if (index < 0) {
    index = 4;
  }
  document.getElementById("banner").src = album[index].src;
}

function toggleSlideshow() {
  if (isPlaying) {
    clearInterval(interval); // Dừng slideshow
    isPlaying = false;
  } else {
    interval = setInterval(slideshow, 1000); // Chạy lại slideshow
    isPlaying = true;
  }
}
