<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transections</title>
    <style>
            table {
                width: 100%;
                border-collapse: collapse;
                text-align: center;
            }

            table tr th, table tr td {
                padding: 5px;
                border: 1px #eee solid;
            }

            tfoot tr th, tfoot tr td {
                font-size: 20px;
            }

            tfoot tr th {
                text-align: right;
            }
        </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Bill Number</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            
            if(!empty($transections)):?>
                <?php foreach($transections as $transection): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($transection[0]) ;?></td>
                        <td><?php echo htmlspecialchars($transection[1]) ;?></td>
                        <td><?php echo htmlspecialchars($transection[2]) ;?></td>
                        
                    </tr>
            <?php endforeach;?>    
            <?php endif;?>  
            

        </tbody>
        <tfoot>
            <tr>
                <td></td>
                <td>Total Income</td>
                <td><?php echo htmlspecialchars($total); ?></td>
            </tr>
            <tr>
                <td></td>
                <td>Total expense</td>
                <td><?php echo htmlspecialchars(-1 * $expense); ?></td>
            </tr>
            <tr>
                <td></td>
                <td>Net Income</td>
                <td><?php echo htmlspecialchars($total + $expense); ?></td>
            </tr>
        </tfoot>
    </table>
    
</body>
</html>