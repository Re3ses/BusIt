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
        <a href="#" class="pb-4">
            <button type="button" class="bg-transparent">
                <i class="fa-solid fa-gear"><span class="sidebar-txt">Settings</span></i>
            </button>
        </a>
    </div>

</div>


<script>
    let sidebar = document.getElementById("sidebar");
    let hiddenElements = document.querySelectorAll(".sidebar-txt");
    let sidebarButtons = document.querySelectorAll(".sidebar-button");
    let width = 4;
    let hidden = true;

    function expand() {
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
                button.style.width = width + "vw";
            } else {
                button.style.width = 13 + "vw";
            }
        });

        hidden = !hidden;
    }

    function animate(toExpand) {
        if (toExpand === true) {
            width += 2;
            sidebar.style.width = width + "vw";
            if (width < 13) {
                requestAnimationFrame(() => animate(toExpand));
            }
        } else {
            width--;
            if (width >= 4) {
                sidebar.style.width = width + "vw";
                requestAnimationFrame(() => animate(toExpand));
            }
        }
    }

    // document.addEventListener('click', function(event) {
    //     // If the click is outside of the sidebar and the sidebar is expanded
    //     if (!sidebar.contains(event.target) && !hidden) {
    //         // Collapse the sidebar
    //         expand();
    //     }
    // });
</script>
