<div class="sidebar-wrapper d-flex flex-column h-100" id="sidebar">
    <div class="sidebar-extension d-flex flex-column align-items-center justify-content-between ">
        <button type="button" onClick="expand()" class="bg-transparent">
            <i class="fa-solid fa-bars"></i>
        </button>
        <ol class="sidebar-btns d-flex flex-column align-items-center pt-4">
            <li class="sidebar-button">
                <a class="fa-solid fa-house" href="#landing"><span class="sidebar-txt">Home</span></a>
            </li>
            <li class="sidebar-button">
                <a class="fa-solid fa-cloud" href="#weather"><span class="sidebar-txt">Weather</span></a>
            </li>
            <li class="sidebar-button">
                <a class="fa-solid fa-bus" href="#routes"><span class="sidebar-txt">Routes</span></a>
            </li>
            <li class="sidebar-button">
                <a class="fa-solid fa-newspaper" href="#news"><span class="sidebar-txt">News</span></a>
            </li>
            <li class="sidebar-button">
                <a class="fa-solid fa-map" href="#map"><span class="sidebar-txt">Map</span></a>
            </li>
            <li class="sidebar-button">
                <a class="fa-solid fa-circle-info" href="#about"><span class="sidebar-txt">About</span></a>
            </li>
        </ol>
        <div class="d-flex flex-column py-4">
            <a href="#">
                <i class="fa-solid fa-gear"><span class="sidebar-txt">Settings</span></i>
            </a>
        </div>
    </div>

</div>


<script>
    /*
     *   Script for expanding and collapsing sidebar
     */
    let sidebar = document.getElementById("sidebar");
    let hiddenElements = document.querySelectorAll(".sidebar-txt");
    let sidebarButtons = document.querySelectorAll(".sidebar-button");
    let width = 100;
    let hidden = true;
    let animating = false;

    function expand() {
        if (!animating) {
            animating = true;
            animate(hidden);

            hiddenElements.forEach(element => {
                if (hidden) {
                    element.style.display = 'inline';
                } else {
                    element.style.display = 'none';
                }
            });

            sidebarButtons.forEach(button => {
                if (hidden) {
                    button.style.width = width + "%";
                } else {
                    button.style.width = 400 + "%";
                }
            });

            hidden = !hidden;
        }
    }

    function animate(toExpand) {
        if (toExpand === true) {
            width += 50;
            sidebar.style.width = width + "%";
            if (width < 400) {
                requestAnimationFrame(() => animate(toExpand));
            } else {
                animating = false;
            }
        } else {
            width -= 50;
            if (width >= 100) {
                sidebar.style.width = width + "%";
                requestAnimationFrame(() => animate(toExpand));
            } else {
                animating = false;
            }
        }
    }

    document.addEventListener('click', function(event) {
        // If the click is outside of the sidebar and the sidebar is expanded
        if (!sidebar.contains(event.target) && !hidden) {
            // Collapse the sidebar
            expand();
        }
    });
</script>
