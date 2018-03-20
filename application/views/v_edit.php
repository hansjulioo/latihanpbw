<html>
<head>
  <title>Edit User Data</title>
</head>

<body>
  <a href="admin.php">Home</a>
  <br/><br/>

  <?php foreach($contact as $c){ ?>
    <form action="<?php echo base_url(). 'admin/update'; ?>" method="post">
      <table border="0">
        <tr>
        <input type="hidden" name="id" value="<?php echo $c->id ?>">  
        </tr>
        <tr>
          <td>Name</td>
          <td><input type="text" name="name" value=<?php echo $c->Nama;?>></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="text" name="email" value=<?php echo $c->Email;?>></td>
        </tr>
        <tr>
          <td>Subject</td>
          <td><input type="text" name="subject" value=<?php echo $c->Subject;?>></td>
        </tr>
        <tr>
          <td>Message</td>
          <td><input type="text" name="message" value=<?php echo $c->Message;?>></td>
        </tr>
        <tr>
          <td><input type="submit" name="update" value="Update"></td>
        </tr>
      </table>
    <?php } ?>
    </form>
  </body>
  </html>
