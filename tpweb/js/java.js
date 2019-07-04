function cari() {
var kata = document.formcari.keyword.value; //membuat variabel kata yang isinya diambil dari data isi form input sebelumnya
var hasil = "http://www.google.com/search?q=" + kata ; //membuat variabel hasil yang isinya situs yang langsung ke google dan kata kuncinya diambil dari kata
window.open(hasil, 'google', config='height=500, width=750, scrollbars=yes location=yes'); //membuat jendala baru untuk membuka hasil data yang dicari
}

var sayHello = () => alert("Cari Data...."); //membuat variabel yang berisi alert(kotak jendela kecil) yang bertuliskan cari data....
