<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1 align="center" style="color: white">SELAMAT BERBELANJA</h1>
    <div class="kotak">
    <form action="" name="fform">
        <table>
            <tr>
                <th colspan="4">
                    <h1>BERKAH KOMPUTER</h1>
                </th>
            </tr>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Jumlah</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Kingston SSD 480GB</td>
                <td>Rp. <input type="text" placeholder="450000" value="450000" name="harga_hardisk"></td>
                <td><input type="text" name="hardisk"></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Samsung Portable SSD 500GB</td>
                <td>Rp. <input type="text" placeholder="500000" value="500000" name="harga_samsungssd"></td>
                <td><input type="text" name="samsungssd"></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Samsung T5 Portable 500GB</td>
                <td>Rp. <input type="text" placeholder="750000" value="750000" name="harga_samsungt5"></td>
                <td><input type="text" name="samsungt5"></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Asrock TRX40 Taichi</td>
                <td>Rp. <input type="text" placeholder="2500000" value="2500000" name="harga_asrock"></td>
                <td><input type="text" name="asrock"></td>
            </tr>
            <tr>
                <td>5</td>
                <td>Edifier Headphone</td>
                <td>Rp. <input type="text" placeholder="75000" value="75000" name="harga_edifier"></td>
                <td><input type="text" name="edifier"></td>
            </tr>
                <tr>
                <td colspan="2">Have an MemberCard</td>
                <td colspan="2"><input type="checkbox" name="MemberCard"></td>
            </tr>
            <tr>
                <td colspan="3">Total</td>
                <td><input type="text" name="total" value="Rp. 0" readonly></td>
            </tr>
            <tr>
                <td colspan="3">Diskon member</td>
                <td><input type="text" name="diskon"value="Rp. 0" readonly></td>
            </tr>
            <tr>
                <td colspan="3">Jumlah Bayar</td>
                <td><input type="text" name="jumlahBayar"value="Rp. 0" readonly></td>
            </tr>
            <tr>
                <td colspan="4">
                    <center>
                        <button type="button" class="button" onclick="hitung()">Hitung</button>
                        <button type="reset" class="button2">Reset</button>
                    </center>
                </td>
            </tr>
        </table>
    </form>
    <script>
        function hitung() {
            var hardisk = parseInt(document.fform.hardisk.value);
            var samsungssd = parseInt(document.fform.samsungssd.value);
            var samsungt5 = parseInt(document.fform.samsungt5.value);
            var asrock = parseInt(document.fform.asrock.value);
            var edifier = parseInt(document.fform.edifier.value);

            var harga_hardisk = parseInt(document.fform.harga_hardisk.value);
            var harga_samsungssd = parseInt(document.fform.harga_samsungssd.value);
            var harga_samsungt5 = parseInt(document.fform.harga_samsungt5.value);
            var harga_asrock = parseInt(document.fform.harga_asrock.value);
            var harga_edifier = parseInt(document.fform.harga_edifier.value);

            var totalHardisk, totalSamssd, totalSamt5, totalAsrock, totalEdifier;

            if(hardisk>0){
                totalHardisk = hardisk * harga_hardisk;
            }else{
                totalHardisk = 0;
            }
            if(samsungssd>0){
                totalSamssd = samsungssd * harga_samsungssd;
            }else{
                totalSamssd = 0;
            }
            if(samsungt5>0){
                totalSamt5 = samsungt5 * harga_samsungt5;
            }else{
                totalSamt5 = 0;
            }
            if(asrock>0){
                totalAsrock = asrock * harga_asrock;
            }else{
                totalAsrock = 0;
            }
            if(edifier>0){
                totalEdifier = edifier * harga_edifier;
            }else{
                totalEdifier = 0;
            }
            
            var totalSemua = totalHardisk + totalSamssd + totalSamt5 + totalAsrock + totalEdifier;
            document.fform.total.value = "Rp." +totalSemua;

            var member = document.fform.MemberCard.checked;
            var harga;
            var diskon;
            harga = totalSemua;
            if(member==true){
                diskon = totalSemua * 0.05;
                harga = harga - diskon;
                document.fform.diskon.value = "Rp. "+diskon;
                document.fform.jumlahBayar.value = "Rp. "+harga;
            }else{
                document.fform.diskon.value = "Rp. 0";
                document.fform.jumlahBayar.value = "Rp. "+harga;
            }
        }
    </script>
</body>
</html>