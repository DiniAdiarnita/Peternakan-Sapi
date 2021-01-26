function hitung(){
  var Biaya = parseInt(document.getElementById("Biaya").value);
  var Pendapatan = parseInt(document.getElementById("Pendapatan").value);
  var Proses = Pendapatan - Biaya ;
  document.getElementById("Proses").value = Proses;

  if (Biaya > Pendapatan){
    alert("Rugi");
  }else {
    alert("untung");
  }
}
