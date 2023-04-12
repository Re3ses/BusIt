let sidebar_col = document.getElementById("sidebar-col");
let sidebar_exp = document.getElementById("sidebar-exp");
let hidden = true;

function expand() {
    if (hidden) {
        sidebar_exp.style.display = "block";
        sidebar_col.style.display = "none";
    } else {
        sidebar_exp.style.display = "none";
        sidebar_col.style.display = "block";
    }
    hidden = !hidden;
}