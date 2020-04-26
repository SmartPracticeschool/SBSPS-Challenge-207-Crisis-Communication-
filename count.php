<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        covid-19</title>
        <link rel="stylesheet" href="hack.css">
<head>
    <body>
    <?php
$url = 'https://pomber.github.io/covid19/timeseries.json';
$json = file_get_contents($url,true);
$mves = json_decode($json);
$msg=$_POST["message"];

    $len=count($mves->$msg);


?>


          <div class="container--wrap">
            <p style="color: #DFDFEF; font-size: 30px; text-align: center; padding-top: 15px; font-weight: bolder; margin-bottom: 0;">
              Quick Facts
            </p>
            <p style="color: rgb(101, 221, 155); font-weight: bold; text-align: center; border-bottom: 0; font-size: 50px; margin-bottom: 0px;">
            <?php echo $msg ?>
                </p>
            <p style="color: #DFDFEF; font-size: 12px; text-align: center; font-weight: bolder; margin-bottom: 0;">
              Last updated: <i><?php echo $mves->$msg[$len-1]->date; ?></i>
            </p>
            <p style="color: rgb(101, 221, 155); font-weight: bold; text-align: center; border-bottom: 0; font-size: 50px; margin-bottom: 0px;">
            <?php echo $mves->$msg[$len-1]->confirmed; ?>
                </p><p style="color: #DFDFEF; font-size: 18px; font-weight: bold; border-bottom: 0; text-align: center;">
                  Total Confirmed
                
                </p><p style="color: #F65164; font-weight: bold; text-align: center; border-bottom: 0; font-size: 50px; margin-bottom: 0px;">
                <?php echo $mves->$msg[$len-1]->deaths; ?>
                </p><p style="color: #DFDFEF; font-size: 18px; font-weight: bold; border-bottom: 0; text-align: center;">
                  Total Deceased
                </p><p style="color: rgb(248, 245, 64); font-weight: bold; text-align: center; border-bottom: 0; font-size: 50px; margin-bottom: 0px;">
                
                </p><p style="color: rgb(68, 155, 226); font-weight: bold; text-align: center; border-bottom: 0; font-size: 50px; margin-bottom: 0px;">
                <?php echo $mves->$msg[$len-1]->recovered; ?>
                </p><p style="color: #DFDFEF; font-size: 18px; font-weight: bold; border-bottom: 0; text-align: center;">
                  Total Recovered
                </p><table>
              <tbody><tr>
                
                
              </tr>
              <tr>
                
                
              </tr>
              <tr>
                
                
              </tr>
              <tr>
                
                
              </tr>
              <tr>
                
                
              </tr>
            </tbody></table>
          </div>


          









      
    
      
    </div>
  </nav>
</body>
</html>