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
        width++;
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
