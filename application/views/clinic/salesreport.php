<!DOCTYPE html>
<head>
    <link href="<?php echo base_url('assets/css/salesreport.css'); ?>" rel="stylesheet" type="text/css"  />
</head>
<body>
    <table>
        <tr>
            <th>Item</th>
            <th>Quantity</th>
            <th>Total</th>
        </tr>
        <?php
            if(isset($itemsReport)){
                foreach($itemsReport as $i){
                    echo '<tr>
                            <td>'.$i['desc'].'</td>
                            <td>'.$i['qty'].'</td>
                            <td>'.$i['total'].'</td>
                          </tr>';
                }
            }
        ?>
    </table>
    <br />
    <br />
    <br />
    <table>
        <tr>
            <th>Service</th>
            <th>Quantity</th>
            <th>Total</th>
        </tr>
        <?php
            if(isset($servReport)){
                foreach($servReport as $s){
                    echo '<tr>
                            <td>'.$s['desc'].'</td>
                            <td>'.$s['qty'].'</td>
                            <td>'.$s['total'].'</td>
                          </tr>';
                }
            }
        ?>
    </table>
</body>