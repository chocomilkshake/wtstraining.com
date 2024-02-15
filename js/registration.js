function getInitial() {
    var middleName = document.getElementById("middleName").value;
    var middleInitial = middleName.charAt(0);
    document.getElementById("middleInitial").value = middleInitial;
}