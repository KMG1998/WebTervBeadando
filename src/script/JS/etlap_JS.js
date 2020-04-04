function showKosarhozAdModal(nev,ar) {
        document.getElementById("kosarhozAdModal").style.display = "block";
        document.getElementById("kosarhozAdNev").innerText = nev;
        document.getElementById("kosarhozAdAr").innerText = ar + " Ft";
}

function closeKosarhozAdModal(){
        document.getElementById("kosarhozAdModal").style.display = "none";
}