function itung(){
  var berat = document.getElementById("Berat").value;
  var jumlah = document.getElementById("Jumlah").value;
  var Proses = 0.1 * berat * jumlah ;

  if (berat == 0) {
    alert("Diisi terlebih dahulu");
  }else{
    document.getElementById("Proses").value = Proses;
  }

  if (berat == 0) {
    alert("Diisi terlebih dahulu");
  }else{
    document.getElementById("Proses").value = Proses;
  }
}
