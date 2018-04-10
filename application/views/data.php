<html>
<head>
  <style>
  table,td,tr{
    border:1px solid black;
    border-collapse: collapse;
  }
  </style>
</head>
<body>
  <table style="border:1px">
    <tr>
      <td>id</td>
      <td>Nama</td>
      <td>Email</td>
      <td>Subject</td>
      <td>Message</td>
    </tr>
    <?php
    $query = $this->db->query('SELECT id,Nama, Email, Subject,Message FROM contact');

		foreach ($query->result_array() as $row){
    ?>
    <tr>
      <td><?php echo $row['id'] ?></td>
      <td><?php echo $row['Nama'] ?></td>
      <td><?php echo $row['Email'] ?></td>
      <td><?php echo $row['Subject'] ?></td>
      <td><?php echo $row['Message'] ?></td>
    </tr>
  <?php } ?>
  </table>
</body>
</html>
