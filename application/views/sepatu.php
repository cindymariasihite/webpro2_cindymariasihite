<html>
    <head>
        <title>Form Input data Sepatu</title>
    </head>
    <body>
        <?php echo validation_errors(); ?>
        <center>
            <form action="<?= base_url('sepatu/hasil'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3"> Form Input data Toko Sepatu </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
<tr>
    <th>Nama Pembeli</th>
    <th>:</th>
    <td>
        <input type="text" name="pembeli" id="pembeli" placeholder='Input Nama Pembeli'>
    </td>  
</tr>
<tr>
    <th>No Handphone</th>
    <td>;</td>
    <td>
        <input type="text" name="nohp" id="nohp" placeholder='Input No Hp'>
    </td>
</tr>
<tr>
    <th>Merk<?th>
    <td>:</td>
    <td> <select name="merk" id="merk">
         <option value="">Pilih Merk</option>
         <option value="Nike">Nike</option>
         <option value="Adidas">Adidas</option>
         <option value="Kickers">Kickers</option>
         <option value="Eiger">Eiger</option>
         <option value="Bucherri">Bucherri</option>
    <select>
</td>
</tr>

