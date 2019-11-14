/* Set the width of the side navigation to 250px */
function openNav() {
    document.getElementById("myNavBar").style.width = "250px";
    /** If we want to push the content of the webpage, tho */
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";

}
/** And back to zero */
function closeNav() {
    document.getElementById("myNavBar").style.width = "0px";
    /** and back to zero */
    document.getElementById("main").style.marginLeft = "0px";
    document.body.style.backgroundColor = "white";
}