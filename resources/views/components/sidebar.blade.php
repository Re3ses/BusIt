<div class="sidebar-wrapper d-flex flex-column h-100" id="sidebar">
    <div class="sidebar-extension d-flex flex-column align-items-center justify-content-between ">
        <button type="button" onClick="expand()" class="bg-transparent">
            <i class="fa-solid fa-bars"></i>
        </button>
        <ol class="sidebar-btns d-flex flex-column align-items-center pt-4">
            <li class="sidebar-button">
                <a class="fa-solid fa-house onHoverYellow" href="/#landing"><span class="sidebar-txt">Home</span></a>
            </li>
            <li class="sidebar-button">
                <a class="fa-solid fa-cloud onHoverYellow" href="/#weather"><span class="sidebar-txt">Weather</span></a>
            </li>
            <li class="sidebar-button">
                <a class="fa-solid fa-bus onHoverYellow" href="/#routes"><span class="sidebar-txt">Routes</span></a>
            </li>
            <li class="sidebar-button">
                <a class="fa-solid fa-newspaper onHoverYellow" href="/#news"><span class="sidebar-txt">News</span></a>
            </li>
            <li class="sidebar-button">
                <a class="fa-solid fa-map onHoverYellow" href="/#map"><span class="sidebar-txt">Map</span></a>
            </li>
            <li class="sidebar-button">
                <a class="fa-solid fa-circle-info onHoverYellow" href="/#about"><span
                        class="sidebar-txt">About</span></a>
            </li>
            @auth
                <li class="sidebar-button">
                    <a class="fa-solid fa-pen-to-square onHoverYellow" href="/edit-tables"><span
                            class="sidebar-txt">Manage</span></a>
                </li>
            @endauth
        </ol>
        <ol class="sidebar-btns h-25 d-flex flex-column justify-content-end align-items-center flex-column py-4">
            @auth
                <li class="sidebar-button">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" style="background-color: transparent; font-size: 1rem">
                            <i class="fa-solid fa-right-from-bracket onHoverYellow" href="/edit-tables">
                                <span class="sidebar-txt">Sign out</span>
                            </i>
                        </button>
                    </form>
                    {{-- <a class="fa-solid fa-right-from-bracket onHoverYellow" href="/edit-tables"><span class="sidebar-txt">Sign out</span></a> --}}
                </li>
            @endauth
            <li class="sidebar-button">
                <a class="fa-solid fa-gear onHoverYellow" href="#"><span class="sidebar-txt">Settings</span></a>
            </li>
        </ol>
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
