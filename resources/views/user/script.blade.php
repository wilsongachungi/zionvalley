<script src="../assets/js/jquery-3.5.1.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
<script src="../assets/vendor/wow/wow.min.js"></script>
<script src="../assets/js/theme.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var myCarousel = new bootstrap.Carousel(document.getElementById('imageCarousel'), {
            interval: false, // diseble the automatic sliding
        });

        var myCarousel = new bootstrap.Carousel(document.getElementById('imageCarousel2'), {
            interval: false, // diseble the automatic sliding
        });
    });
</script>


<script>
    var openDivId = null; // Track the ID of the currently open div

    function toggleDiv(divId) {
        var myDiv = document.getElementById(divId);

        // Check if the clicked div is already open
        if (openDivId === divId && myDiv.style.display === "block") {
            // If yes, close it
            myDiv.style.display = "none";
            openDivId = null; // No div is open
        } else {
            // Close the currently open div if there is one
            if (openDivId !== null) {
                var openDiv = document.getElementById(openDivId);
                openDiv.style.display = "none";
            }

            // Open the clicked div
            myDiv.style.display = "block";
            openDivId = divId; // Update the currently open div
        }
    }
</script>

<script>
    // Get the modal and buttons
    var modal = document.getElementById("myModal");
    var openModalBtn = document.getElementById("openModalBtn");
    var closeModalBtn = document.getElementById("closeModalBtn");

    // Open the modal
    openModalBtn.onclick = function() {
        modal.style.display = "block";
    }

    // Close the modal
    closeModalBtn.onclick = function() {
        modal.style.display = "none";
    }

    // Close the modal if the user clicks outside of it
    window.onclick = function(event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    }
</script>

<script>
    let modelBox = document.getElementById("model-box");

    document.onmouseleave = function() {
        modelBox.style.display = "lock";
    }

    function closeModel() {
        modelBox.style.display = "none";
    }
</script>
