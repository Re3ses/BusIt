let sidebar = document.getElementById("sidebar");
let hiddenElements = document.querySelectorAll(".sidebar-txt");
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

    hidden = !hidden;
}

function animate(toExpand) {
    if (toExpand === true) {
        width++;
        sidebar.style.width = width + "vw";
        if (width < 15) {
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
