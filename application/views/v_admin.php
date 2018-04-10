
<h1 align="center">Welcome</h1>
<p align="center"><a href="<?php echo base_url('login/logout'); ?>">Logout</a></p>

<html>
<head>
    <title>Homepage</title>
</head>

<body>

    <table width='80%' border=1>

    <tr>
        <th>Name</th> <th>Subject</th> <th>Email</th> <th>Message</th> <th>Update</th>
    </tr>
    <?php
        foreach($contact as $c){
        ?>
        <tr>
          <td><?php echo $c->Nama ?></td>
          <td><?php echo $c->Email ?></td>
          <td><?php echo $c->Subject ?></td>
          <td><?php echo $c->Message ?></td>
          <td>
                <?php echo anchor('admin/edit/'.$c->id,'Edit'); ?>
                                  <?php echo anchor('admin/hapus/'.$c->id,'Hapus'); ?>
          </td>
        </tr>
        <?php } ?>
    </table>
    <form action="<?php echo site_url("welcome/download")?>">
		<button type="submit">Download Laporan</button>
	</form>

  <form action="<?php echo site_url("chart/index")?>">
  <button type="submit">Lihat Statistik Pengunjung</button>
  </form>

</body>
</html>
