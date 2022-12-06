<!DOCTYPE html>
<html><head>
    <title></title>
    <style>
    body {
    	width: 90%;
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
		padding: 12px;
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

	.right {
		text-align: right;
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
            <th class="center">Expenditure ID</th>
            <th>Detail</th>
            <th>Total</th>
            <th>Exp. Date</th>
            <th class="center">Employee ID</th>
            <th>Employee Name</th>
		</tr>
		<?php
            $no = 1;
            $total_pengeluaran = 0;
            foreach ($data_pengeluaran as $pengeluaran) {
            	$total_pengeluaran += $pengeluaran->total;
        ?>
        <tr>
            <th class="center"><?php echo $no++ ?></th>
            <td class="center"><?php echo $pengeluaran->pengeluaran_id ?></td>
            <td><?php echo $pengeluaran->detail ?></td>
            <td>$<?php echo $pengeluaran->total ?></td>
            <td><?php echo $pengeluaran->tgl_pengeluaran ?></td>
            <td class="center"><?php echo $pengeluaran->karyawan_id ?></td>
            <td><?php echo $pengeluaran->nama_karyawan ?></td>
		</tr>
		<?php 
			}
		?>
		<tr>
			<td colspan="3"><b>Total Expenditure</b></td>
			<td colspan="4"><b>$ <?php echo $total_pengeluaran ?></b></td>
		</tr>
	</table>
	<p>Note: Year-month-day time format (yyyy-mm-dd)</p>
</body></html>