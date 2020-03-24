var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlide(n) {
    showSlides(slideIndex += n);
}


function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("carousel-slide");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slides[slideIndex - 1].style.display = "block";
}

// -----------------X--------------Slide-----------------------X---------------

// ----------------------------------Featured product---------------------------------------

$(document).ready(function(){
    $("a").click(function(event){
        if($(this).attr("id") === "new"){
            event.preventDefault();
            $("#new").css("color", "#86ba09");
            $("#discount").css("color", "rgba(102, 102, 102, 0.85)");
            $("#selling").css("color", "rgba(102, 102, 102, 0.85)");

            $("#tab-new").show("fast", function(){
                $("#tab-new").css("display", "grid");
            });
            $("#tab-discount").hide();
            $("#tab-selling").hide();
        }else if($(this).attr("id") === "discount"){
            event.preventDefault();
            $("#discount").css("color", "#86ba09");
            $("#new").css("color", "rgba(102, 102, 102, 0.85)");
            $("#selling").css("color", "rgba(102, 102, 102, 0.85)");

            $("#tab-new").hide();
            $("#tab-discount").show("fast", function(){
                $("#tab-discount").css("display", "grid");
            });
            $("#tab-selling").hide();
        }else if($(this).attr("id") === "selling"){
            event.preventDefault();
            $("#selling").css("color", "#86ba09");
            $("#discount").css("color", "rgba(102, 102, 102, 0.85)");
            $("#new").css("color", "rgba(102, 102, 102, 0.85)");

            $("#tab-new").hide();
            $("#tab-discount").hide();
            $("#tab-selling").show("fast", function(){
                $("#tab-selling").css("display", "grid");
            });
        }
    })
})
