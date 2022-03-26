// const btn = document.getElementsByClassName('pb');

// console.log(btn);
// console.log(document.getElementsByClassName("pb"));
// document.getElementsByClassName("pb").addEventListener("click", function () { alert("hello") });


function check() {
    console.log("processing");

    var btn = document.getElementById('pb');

    if (btn !== null) {
        btn.addEventListener("click", function () {
            var con = document.getElementsByClassName('slider-container');
            var cen = document.getElementById("center");
            var left = document.getElementById("left");
            if (cen !== null & left !== null & con !== null) {
                console.log("changeeee..");
                const lb = window.getComputedStyle(left, null).getPropertyValue('background');
                left.style.background = window.getComputedStyle(cen, null).getPropertyValue('background');
                cen.style.background = lb;
                var lh = left.innerHTML;
                left.innerHTML = cen.innerHTML;
                cen.innerHTML = lh;

            } else {
                console.log("item-not found");
            }
        });
    } else console.log("ERROR");

}

window.onload = check;
