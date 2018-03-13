<!DOCTYPE html>
<head>
    <link href="<?php echo base_url('assets/css/salesreport.css'); ?>" rel="stylesheet" type="text/css"  />
</head>
<body>
    <h1>Items Sold</h1>
    <table>
        <tr>
            <th><strong>Item</strong></th>
            <th><strong>Quantity</strong></th>
            <th><strong>Total</strong></th>
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
    <h1>Services Rendered</h1>
    <table>
        <tr>
            <th><strong>Service</strong></th>
            <th><strong>Quantity</strong></th>
            <th><strong>Total</strong></th>
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