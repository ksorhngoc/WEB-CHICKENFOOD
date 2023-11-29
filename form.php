<html>
  <head>
    <meta charset="utf8">
    <title> Đổi mật khẩu</title>
  </head>
  <body>
    <table align="center">
      <form action="doimk.php" method="POST">
          
        <tr align="center"><td colspan="2">Đổi mật khẩu</td></tr>

        <tr>
          <td>Tài khoản cần đổi:</td>
          <td>
            <input type="text" name="tk">
          </td>
        </tr>

        <tr>
          <td>Mật khẩu hiện tại:</td>
          <td>
            <input type="password" name="mkht">
          </td>
        </tr>


        <tr>
          <td>Mật khẩu mới:</td>
          <td>
            <input type="password" name="mkm">
          </td>
        </tr> 

        <tr>
          <td>Nhập lại mật khẩu mới:</td>
          <td>
            <input type="password" name="nlmkm">
          </td>
        </tr>

        <tr align="center">
          <td  colspan="2">
            <input type="submit" name="dmk" value="Đổi mật khẩu">
          </td>
        </tr>

      </form>
    </table>
  </body>
</html>