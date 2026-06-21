document.getElementById("alle-luchthavens").addEventListener("click", function() {
    if (this.checked) {
        var luchthavens = document.getElementsByClassName("luchthaven");
        for (var i = 0; i < luchthavens.length; i++) {
            luchthavens[i].checked = true;
        }
    } else {
        var luchthavens = document.getElementsByClassName("luchthaven");
        for (var i = 0; i < luchthavens.length; i++) {
            luchthavens[i].checked = false;
        }
    }
});

