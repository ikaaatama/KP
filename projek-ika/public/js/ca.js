window.onload = function() {
    var bn = $(".banner-side"), jmlbn = bn.length;
    if (jmlbn > 1) {
        for (let i = 0; i < jmlbn; i++) {
            if (i == jmlbn - 1) {
                bn[i].style.display = "block";
            }
        }
    }
}