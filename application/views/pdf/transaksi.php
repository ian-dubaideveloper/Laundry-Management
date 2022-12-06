<!DOCTYPE html>
<html><head>
    <title></title>
    <style>
    body {
    	width: 100%;
    	margin: auto;
    }

    table {
		border: 1px solid #ddd;
		width: 100%;
		margin-top: 20px;
		margin-bottom: 12px;
		border-collapse: collapse;
		text-align: left;
	}

	td, th {
		border: 1px solid #ddd;
		padding: 6px;
	}

	table th {
		font-weight: bold;
		text-align: left;
	}

	span {
		margin-left: 20px;
	}

	.center {
		text-align: center;
	}

	#no {
		width: 30px;
	}

	</style>
</head><body>
	<h5>LAUNDRY</h5>
	<h1>Transaction Data Report</h1>
	<?php 
		echo '<p>The transaction is completed in the time range</p>';
		echo '<p>From: '.$dari.'<span>To: '.$sampai.'</span></p>';
	?>
    <table>
		<tr>
			<th class="center" id="no">#</th>
            <th class="center">Transc. ID</th>
            <th class="center">Customer ID</th>
            <th>Customer's Name</th>
            <th class="center">Employee ID</th>
            <th>Employee Name</th>
            <th>Weight</th>
            <th>Total</th>
            <th>Order Date</th>
            <th>Done Date</th>
		</tr>
		<?php
            $no = 1;
            $total_pendapatan = 0;
            foreach ($data_transaksi as $transaksi) {
            	$total_pendapatan += $transaksi->total;
        ?>
        <tr>
            <th class="center"><?php echo $no++ ?></th>
            <td class="center"><?php echo $transaksi->transaksi_id ?></td>
            <td class="center"><?php echo $transaksi->pelanggan_id ?></td>
            <td><?php echo $transaksi->nama_pelanggan ?></td>
            <td class="center"><?php echo $transaksi->karyawan_id ?></td>
            <td><?php echo $transaksi->nama_karyawan ?></td>
            <td><?php echo $transaksi->berat ?> KG</td>
            <td>$<?php echo $transaksi->total ?></td>
            <td><?php echo $transaksi->tgl_order ?></td>
            <td><?php if ($transaksi->tgl_selesai == '0000-00-00') { echo '-'; } else { echo $transaksi->tgl_selesai; } ?></td>
		</tr>
		<?php 
			}
		?>
		<tr>
			<td colspan="7"><b>Total Income</b></td>
			<td colspan="3"><b>$ <?php echo $total_pendapatan ?></b></td>
		</tr>
	</table>
	<p>Note: Year-month-day time format (yyyy-mm-dd)</p>
</body></html>