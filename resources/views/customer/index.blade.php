<html>
    <head>
        <title>Script PHP Menghitung Selisih Tanggal</title>
    </head>
    <body>
        <div style="border:1px solid #B0C4DE; padding:10px; overflow:auto; width:1113px; height:408px;">
        
        <form action="index.php" method="post">
            <table width="100%" style="padding:0 0 0 10px;" align="center" cellpadding="0" cellspacing="0">
                <tr height="36">
                    <td><font color="orange" size="2"><b>REPORT AGING BOOKING</b></font></td>
                </tr>
            </table>
            <table width="100%" style="padding:0 0 0 10px;" align="center" cellpadding="0" cellspacing="0">
                <tr height="36">
                    <td width="80">Report</td>
                    <td width="286"><input type="submit" value="Get Report" name="tampil_data"/></td>
                    <td width="80"></td>
                    <td width="286"></td>
                    <td width="80"></td>
                    <td width="286"></td>
                </tr>
            </table>
        </form>
        <p>
        <?php
        if(isset($_POST['tampil_data'])){
            $query=mysql_query("SELECT * FROM tb_booking");
            ?>
          Current Date: <?php echo date("l, j F Y");?>
        </p>
        <table width="1100" align="center" cellpadding="0" cellspacing="0" style="border:1px solid #B0C4DE;">
            <tr bgcolor="#FFA800" height="32">
                <td width="40" align="center">ID</td> 
                <td width="150">Nama</td> 
                <td width="150">Tanggal Booking</td> 
                <td width="100">Status</td> 
                <td width="100">Aging</td> 
            </tr>
        <?php
            $no=0;    
            //menampilkan tanggal
            while($row=mysql_fetch_array($query)){
            ?>
           <tr height="30">
                <td align="center"><?php echo $row['id'];?></td>
                <td><?php echo $row['nama'];?></td>
                <td><?php echo $row['tgl'];?></td>
                <td><?php echo $row['status'];?></td>
                <td><?php $booking    =new DateTime($row['tgl']);
                        $today        =new DateTime();
                        $diff = $today->diff($booking);
                        echo $diff->d; echo " Hari";
                    ?>
                </td>
            </tr>
            <?php
            }
            ?>    
            <tr>
                <td colspan="4" height="28"> 
                <?php
                //jika data tidak ditemukan
                if(mysql_num_rows($query)==0){
                    echo "<font color=red><blink>Report Null!</blink></font>";
                }
                ?>
                </td>
            </tr> 
        </table>
        <?php
        }
        ?>
    </body>
</html>