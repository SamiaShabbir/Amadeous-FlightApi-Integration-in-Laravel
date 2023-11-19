<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
</script>
<script src="{{ asset('scripts/extras.1.1.0.min.js') }}"></script>
<script src="{{ asset('scripts/shards-dashboards.1.1.0.min.js') }}"></script>
<script src="{{ asset('scripts/app/app-blog-overview.1.1.0.js') }}"></script>
<script src="{{ asset('scripts/app/app-blog-new-post.1.1.0.js') }}"></script>
<script src="{{ asset('scripts/app/app-blog-new-post.1.1.0.min.js') }}"></script>
<script src="{{ asset('scripts/app/app-blog-overview.1.1.0.js') }}"></script>
<script src="{{ asset('scripts/app/app-blog-overview.1.1.0.min.js') }}"></script>
<script src="{{ asset('scripts/app/app-components-overview.1.1.0.js') }}"></script>
<script src="{{ asset('scripts/app/app-components-overview.1.1.0.min.js') }}"></script>
<script src="https://buttons.github.io/buttons.js"></script>

{{-- All Page loader script  --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var loader = document.getElementById('loader');
        var content = document.getElementById('content');
        loader.style.display = 'none';
        content.style.display = 'block';
    });
</script>

{{-- navbar highlightning and reset table field script  --}}
<script>
    // setting the current year to the footer
    document.getElementById("year").innerHTML = new Date().getFullYear();
    // ------------------------------------------------------------------

    //activating the nav-item using the route of the page
    const navItem = document.getElementsByClassName('nav-item');
    for (let i = 0; i <= navItem.length - 1; i++) {
        if ((location.href.split('/')[4] || location.href.split('/')[3]) === navItem[i].id) {
            console.log(navItem[i])
            navItem[i].className = 'nav-item active';
            navItem[i].style.backgroundColor = 'rgb(0,0,0,0.08)';
        }
    }
    //-------------------------------------------------------------------
    //function to reset the search values of the table
    const reset = () => {
        const inputIds = ['search_input', 'date_from_input', 'date_to_input'];
        inputIds.forEach(id => {
            document.getElementById(id).value = '';
        });
    };
</script>

{{-- pagination script  --}}
<script>
    var rowsPerPage = 20;
    var table = document.getElementById("myTable");
    var tableBody = table.getElementsByTagName("tbody")[0];
    var rows = tableBody.getElementsByTagName("tr");
    document.getElementById("length_Hotel__booking_table").innerHTML = "(" + rows.length + ")";
    var numPages = Math.ceil(rows.length / rowsPerPage);
    var pagination = document.createElement("div");

    pagination.className = "pagination";

    var backButton = document.createElement("button");
    backButton.type = "button";
    backButton.className = "btn btn-primary";
    backButton.innerHTML = "Back";
    backButton.addEventListener("click", function() {
        showPage(currentPage - 1);
    });

    pagination.appendChild(backButton);

    for (var i = 1; i <= numPages; i++) {
        (function(pageNum) {
            var link = document.createElement("a");
            link.href = "#";
            link.innerHTML = pageNum;

            link.addEventListener("click", function() {
                showPage(pageNum);
            });

            pagination.appendChild(link);
        })(i);
    }

    var forwardButton = document.createElement("button");
    forwardButton.type = "button";
    forwardButton.className = "btn btn-primary";
    forwardButton.innerHTML = "Next";
    forwardButton.addEventListener("click", function() {
        showPage(currentPage + 1);
    });

    pagination.appendChild(forwardButton);

    table.parentNode.appendChild(pagination);

    var currentPage = 1;

    function showPage(pageNum) {
        var start = (pageNum - 1) * rowsPerPage;
        var end = start + rowsPerPage;

        for (var i = 0; i < rows.length; i++) {
            rows[i].style.display = "none";
        }
        for (var j = start; j < end && j < rows.length; j++) {
            rows[j].style.display = "table-row";
        }
        currentPage = pageNum;

        var paginationLinks = pagination.getElementsByTagName("a");
        for (var k = 0; k < paginationLinks.length; k++) {
            paginationLinks[k].classList.remove("active");
        }

        paginationLinks[currentPage - 1].classList.add("active");
        backButton.disabled = currentPage === 1;
        forwardButton.disabled = currentPage === numPages;
    }
    showPage(1);
</script>
