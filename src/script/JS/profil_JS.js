function showEditKedvencekModal() {
    document.getElementById("editModal").style.display ="block";
    document.getElementById("editKedvencekForm").style.display = "flex";
    document.getElementById("jelszoCsereForm").style.display = "none";
    document.getElementById("editAdatokForm").style.display = "none";
    document.getElementById("kepFeltoltForm").style.display = "none";
}

function showEditAdatokModal() {
    document.getElementById("editModal").style.display ="block";
    document.getElementById("editAdatokForm").style.display = "block";
    document.getElementById("editKedvencekForm").style.display = "none";
    document.getElementById("jelszoCsereForm").style.display = "none";
    document.getElementById("kepFeltoltForm").style.display = "none";
}

function showJelszoCsereModal() {
    document.getElementById("editModal").style.display ="block";
    document.getElementById("jelszoCsereForm").style.display = "block";
    document.getElementById("editAdatokForm").style.display = "none";
    document.getElementById("editKedvencekForm").style.display = "none";
    document.getElementById("kepFeltoltForm").style.display = "none";
}

function showUploadModal() {
    document.getElementById("editModal").style.display ="block";
    document.getElementById("jelszoCsereForm").style.display = "none";
    document.getElementById("editAdatokForm").style.display = "none";
    document.getElementById("editKedvencekForm").style.display = "none";
    document.getElementById("kepFeltoltForm").style.display = "block";
}

function closeEditModal() {
    document.getElementById("editModal").style.display ="none";
}