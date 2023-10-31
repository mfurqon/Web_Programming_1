<form method="post" action="proses_radio.php">
    <?php 
    echo "
    <center>
        <font size=5>
            Menggunakan Objek Radio
            <hr>
            <table>
                <tr>
                    <td>Tujuan
                    <td><input type=radio name=tujuan value=Bandung>Bandung
                </tr>
                <tr>
                    <td><td><input type=radio name=tujuan value=Jakarta>Jakarta
                </tr>
                <tr>
                    <td><td><input type=radio name=tujuan value=Bogor>Bogor
                </tr>
            </table>
            <hr>
            <input type=submit value=Proses>
            <input type=reset value=Reset>
        </font>
    </center>
    ";
    
    ?>
</form>