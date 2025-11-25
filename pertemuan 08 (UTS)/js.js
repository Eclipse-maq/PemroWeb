console.log("Data dijalankan");

const myForm = document.getElementById('Mhsdata');

const dataMhs = [];

document
Mhsdata.addEventListener('submit', function (event) {
    event.preventDefault();

    const nama = document.getElementById("nama").value;
    const nim = document.getElementById("nim").value;
    const semester = document.getElementById("semester").value;
    const prodi = document.getElementById("prodi").value;
    const email = document.getElementById("email").value;

    const dataBaru = {
      Nama: nama,
      NIM: parseInt(nim),
      Semester: parseInt(semester),
      ProgramStudi: prodi,
      Email: email,
    };

    dataMhs.push(dataBaru);

    console.log(dataMhs);

    document.getElementById('Mhsdata').reset();
  });
