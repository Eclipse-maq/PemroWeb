function ubahDenganId() {
    const paragrahId = document.getElementById("teks-id");
    paragrahId.textContent = "teks ini diubahb dengan getelementid()";
    paragrahId.style.color = "green";
    paragrahId.style.fontWeight = "bold";
    console.log("berhasil ubah dengan getelementid()");
}

function ubahDenganQuery() {
    const paragrahClass = document.querySelector(".teks-class");
    paragrahClass.textContent = "teks ini diubah  dengan querysekector()";
    paragrahClass.style.color = "blue";
    paragrahClass.style.fontStyle = "italic";
    console.log("berhasol ubah dengan quweryselctor()")
}