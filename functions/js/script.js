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

// Might try to use this code for the star filter, but it doesn't work yet. 
// I'm gonna try to use this to automatically the filters for changes, 
// so I can remove the submit buttons. So if you click on a filter, 
// it will automatically update the overview filters.

var alleSterren = document.getElementById("alle-sterren");
alleSterren.addEventListener("click", function() {
    if (this.checked) {
        starFilterItems = document.getElementsByClassName("star-filter-item");
        for (var i = 0; i < starFilterItems.length; i++) {
            if(this.checked) {
                starFilterItemsChecked.push(starFilterItems[i].value);
            } else {
                starFilterItems[i].checked = false;
            }
        }}
    });
var reviewFilterItems = document.getElementsByClassName("review-filter-item");
const reviewFilterItemsChecked = [];
for (var i = 0; i < reviewFilterItems.length; i++) {
    reviewFilterItems[i].addEventListener("click", function() {
        if (this.checked) {
            // Code to filter reviews based on the selected rating
              reviewFilterItemsChecked.push(this.value);

        } else {
            reviewFilterItemsChecked.splice(reviewFilterItemsChecked.indexOf(this.value), 1);
            i++; // Increment the index to check the next filter item
            
        }
        document.getElementById("review-checked").innerHTML = reviewFilterItemsChecked;
    });
    
 }
