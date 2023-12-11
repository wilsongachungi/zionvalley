<script src="https://kit.fontawesome.com/e4203622a6.js" crossorigin="anonymous"></script>

<script>
    function changePage(pageNumber) {
        // Reset active class for all buttons
        var buttons = document.querySelectorAll('.pagination button');
        buttons.forEach(function(button) {
            button.classList.remove('active');
        });

        // Set active class for the clicked button
        var selectedButton = document.querySelector('.pagination button:nth-child(' + pageNumber + ')');
        selectedButton.classList.add('active');

        // You can add logic here to fetch and display data for the selected page
    }
</script>
