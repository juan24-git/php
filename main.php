var _wau = _wau || [];
_wau.push(["small", "omayra", "ke6"]);
$("#join").click(function () {
$("#info").fadeOut(0);
$("#join").fadeOut(0);
$(".spin").fadeIn(500);
setTimeout(function () {
$(".spin").fadeOut(0);
$("#age").fadeIn(500);
}, 1000);
});
$("#age button").click(function () {
$("#age").fadeOut(0);
$(".spin").fadeIn(500);
setTimeout(function () {
$(".spin").fadeOut(0);
$("#share").fadeIn(500);
}, 1000);
});
var swidth = localStorage.getItem(saved);
if (swidth !== null) {
var width = swidth * 1;
$("#info").fadeOut(0);
$("#join").fadeOut(0);
$("#share").fadeIn(0);
$("#fill2").css("width", width + "%");
$("#percentage2").text(width + "%");
} else {
var width = 0;
}
$("#whatsapp").click(function () {
window.location.href = share;
if (width == 0) {
width += 50;
} else if (width == 50) {
alert(error);
width += 15;
} else if (width == 65) {
width += 5;
} else if (width == 70) {
alert(error);
width += 10;
} else if (width == 80) {
alert(error);
width += 5;
} else if (width == 85) {
width += 5;
} else if (width == 90) {
width += 4;
} else if (width == 94) {
width += 2;
} else if (width == 96) {
width += 2;
} else {
$("#share").fadeOut(0);
$("#claim").fadeIn(1000);
}
localStorage.setItem(saved, width);
setTimeout(function () {
$("#fill2").css("width", width + "%");
$("#percentage2").text(width + "%");
}, 2000);
});
$("#offer").click(function () {
window.open(cpa, "_blank");
});