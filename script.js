const hitungBarang = () => {
    let jenisBarang = document.getElementById("jenisBarang").value;
    let jumlahBarang = parseFloat(document.getElementById("jumlahBarang").value);
    let totalHargaBarang = 0, hargaBarang = 0, diskon = 0, totalSetelahDiskon = 0;

    //Perhitungan Barang
    if (jenisBarang == "semen") hargaBarang = 60000;
    else if (jenisBarang == "pasir") hargaBarang = 1000000;
    else if (jenisBarang == "bata") hargaBarang = 1000;
    else if (jenisBarang == "kerikil") hargaBarang = 35000;
    else if (jenisBarang == "triplek") hargaBarang = 100000;
    else if (jenisBarang == "keramik") hargaBarang = 100000;
    else if (jenisBarang == "cat") hargaBarang = 80000;
    else if (jenisBarang == "pipa") hargaBarang = 150000;
    else if (jenisBarang == "alat") hargaBarang = 40000;
    else if (jenisBarang == "paku") hargaBarang = 35000;
    
    //Perhitungan total harga barang
    if (!isNaN(jumlahBarang)) totalHargaBarang = hargaBarang * jumlahBarang;

    //Perhitungan Diskon
    if (totalHargaBarang > 500000) diskon = totalHargaBarang * 0.15;

    //Perhitungan total harga setelah diskon
    totalSetelahDiskon = totalHargaBarang - diskon;

    let formatDiskon = new Intl.NumberFormat('id-ID').format(diskon);
    let formatTotalHarga = new Intl.NumberFormat('id-ID').format(totalSetelahDiskon);

    document.getElementById("diskon").value = diskon;
    document.getElementById("totalHargaBarang").value = totalSetelahDiskon;
}