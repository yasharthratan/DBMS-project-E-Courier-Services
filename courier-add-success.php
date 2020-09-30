<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
  <title>Courier / Cargo Tracking Script in PHP - Ver 0.97</title>
  <link href="css/mystyle.css" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link href="new.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-md sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="http://localhost/index.php#"><img src="images/logo.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="http://localhost/index.php#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Admin Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
    <tbody>
      <tr>
        <td width="900">
          <?php include("header.php"); ?> </td>
      </tr>

      <tr>
        <td bgcolor="#FFFFFF">
          <table border="0" cellpadding="1" cellspacing="1" align="center" width="98%">
            <tbody>
              <tr>
                <td class="Partext1">&nbsp;</td>
              </tr>

              <tr>
                <td class="Partext1">
                  <div align="center">
                    <table cellpadding="4" cellspacing="0" align="center" width="70%">
                      <script language="javascript">
                        function validate() {
                          if (form.Consignment.value == "") {
                            alert("Consignment No is required.");
                            form.track.focus();
                            return false;
                          }
                        }
                      </script>

                      <tbody>
                        <tr>
                          <td class="TrackTitle" valign="top">
                            <div class="newtext" align="center"></div>
                          </td>
                        </tr>
                        <tr>
                          <td class="bottom" valign="middle">&nbsp;</td>
                        </tr>
                        <tr bgcolor="EFEFEF">
                          <td valign="top" class="alert alert-primary">Courier is added successfully.<br />
                          </td>
                        </tr>
                        <tr bgcolor="EFEFEF">
                          <td class="TrackNormalBlue" bgcolor="#FFFFFF" valign="top">&nbsp;</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="Partext1">&nbsp;</td>
              </tr>


              <tr>
                <td>&nbsp;</td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
      <tr>
        <td>
          <table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
            <tbody>
              <tr>
                <td bgcolor="" height="40" width="476">&nbsp;</td>
                <td bgcolor="" width="304">&nbsp;</td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
    </tbody>
  </table>

  <!--- Connect -->
  <footer id="connect">
    <div class="container-fluid padding">
      <div class="row text-center">
        <div class="col-md-4">
          <a class="navbar-brand" href="#"><img src="images/logo.png"></a>
          <hr class="light">
          <p>999-999-9999</p>
          <p>email@gmail.com</p>
          <p>Dtreet name</p>
          <p>City, State, 00000</p>
        </div>
        <div class="col-md-4">
          <hr class="light">
          <h5>Our hours</h5>
          <hr class="light">
          <p>Monday: 9am to 5pm</p>
          <p>Saturday: 10am to 6pm</p>
          <p>Sunday closed</p>
        </div>
        <div class="col-md-4">
          <hr class="light">
          <h5>Service Area</h5>
          <hr class="light">
          <p>City, State, 00000</p>
          <p>City, State, 00000</p>
          <p>City, State, 00000</p>
          <p>City, State, 00000</p>
        </div>
      </div>
    </div>
  </footer>

</body>

</html>