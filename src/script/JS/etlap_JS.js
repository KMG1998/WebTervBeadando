function showKosarhozAdModal(nev,ar) {
        document.getElementById("kosarhozAdModal").style.display = "block";
        document.getElementById("kosarhozAdNev").value = nev;
        document.getElementById("kosarhozAdAr").value = ar + " Ft";
}

function closeKosarhozAdModal(){
        document.getElementById("kosarhozAdModal").style.display = "none";
}