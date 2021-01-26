function hitung(){
  var Biaya = document.getElementById("Biaya").value;
  var Pendapatan = document.getElementById("Pendapatan").value;
  var Proses = Pendapatan - Biaya ;

  if (Biaya == 0) {
    alert("Diisi Terlebih dahulu");
  }else if (Pendapatan == 0) {
    alert("Diisi Terlebih dahulu");
  }else{
    if (Biaya > Pendapatan){
      alert("Rugi");
      document.getElementById("Proses").value = Proses;
    }else {
      alert("Untung");
      document.getElementById("Proses").value = Proses;
    }
  }
}


// function hapus(){
//   document.getElementById("Proses").value="";
//   document.getElementById("Biaya").value="";
//   document.getElementById("Pendapatan").value="";
// }
