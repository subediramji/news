<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nepali Date Convertion utility</title>
<style type="text/css">

body {
 background-color: #fff;
 margin: 40px;
 font-family: Lucida Grande, Verdana, Sans-serif;
 font-size: 14px;
 color: #4F5155;
}

a {
 color: #003399;
 background-color: transparent;
 font-weight: normal;
}

h1 {
 color: #444;
 background-color: transparent;
 border-bottom: 1px solid #D0D0D0;
 font-size: 16px;
 font-weight: bold;
 margin: 24px 0 2px 0;
 padding: 5px 0 6px 0;
}

strong {
 font-family: Monaco, Verdana, Sans-serif;
 font-size: 12px;
 background-color: #f9f9f9;
 border: 1px solid #D0D0D0;
 color: #002166;
 display: block;
 margin: 14px 0 14px 0;
 padding: 12px 10px 12px 10px;
}

</style>
</head>
<body>
<p>A web-base date conversion utility, which convert the date from English Date (After Christ AD) to Nepali (Bikram Shambat - BS) and vise versa.</p>

<h1>English To Nepali.</h1>
<form method="post" name="cnv_to_nepali" action="<?php echo base_url()."Nepali_calendar/index" ?>">
	<input type="hidden" value="to_nepali" name="cnv" />
	<table width="50%" cellspacing="2" cellpadding="2" border="0">
		<tr>
			<td>Year:
				<select name="yy">
					<?php
						$year = (isset($_GET['yy']) && isset($_GET['cnv']) && $_GET['cnv'] == 'to_nepali') ? $_GET['yy'] : gmdate('Y');
						for($i = 1944; $i <= 2033; $i++):
					?>
					<option <?php if($i == $year): ?>selected="selected"<?php endif;?>>
						<?php echo $i ?>
					</option>
					<?php endfor; ?>
				</select>
			</td>
			<td>Month:
				<select name="mm">
					<?php
						$month = (isset($_GET['mm']) && isset($_GET['cnv']) && $_GET['cnv'] == 'to_nepali') ? $_GET['mm'] : gmdate('m');
						for($i = 1; $i <= 12; $i++):
					?>
					<option <?php if($i == $month): ?>selected="selected"<?php endif;?>>
						<?php echo $i ?>
					</option>
					<?php endfor; ?>
				</select>
			</td>
			<td>Day:
				<select name="dd">
					<?php
						$day = (isset($_GET['dd']) && isset($_GET['cnv']) && $_GET['cnv'] == 'to_nepali') ? $_GET['dd'] : gmdate('d');
						for($i = 1; $i <= 31; $i++):
					?>
					<option <?php if($i == $day): ?>selected="selected"<?php endif;?>>
						<?php echo $i ?>
					</option>
					<?php endfor; ?>
				</select>
			</td>
			<td><input type="submit" value="Convert" /></td>
		</tr>
		
		<?php//if($nepali_conversion !== ''): ?>
		<tr>
			<td align="center" colspan="4"><strong><?php //echo $nepali_conversion; ?></strong></td>
		</tr>
		<?php //endif; ?>
	</table>	
</form>

<h1>Nepali To English.</h1>
<?php 
	//$ndate = new Nepali_Calendar();
	//$ndate = $ndate->eng_to_nep(gmdate(Y),gmdate(m),gmdate(d));
?>
<form method="post" name="cnv_to_nepali" action="<?php echo base_url()."Nepali_calendar/convert" ?>">
	<input type="hidden" value="to_english" name="cnv" />
	<table width="50%" cellspacing="2" cellpadding="2" border="0">
		<tr>
			<td>Year:
				<select name="yy">
					<?php
						//$year = (isset($_GET['yy']) && isset($_GET['cnv']) && $_GET['cnv'] == 'to_english') ? $_GET['yy'] : $ndate['year'];
						for($i = 2000; $i <= 2089; $i++):
					?>
					<option <?php if($i == $year): ?>selected="selected"<?php endif;?>>
						<?php echo $i ?>
					</option>
					<?php endfor; ?>
				</select>
			</td>
			<td>Month:
				<select name="mm">
					<?php
						//$month = (isset($_GET['mm']) && isset($_GET['cnv']) && $_GET['cnv'] == 'to_english') ? $_GET['mm'] : $ndate['month'];
						for($i = 1; $i <= 12; $i++):
					?>
					<option <?php if($i == $month): ?>selected="selected"<?php endif;?>>
						<?php echo $i ?>
					</option>
					<?php endfor; ?>
				</select>
			</td>
			<td>Day:
				<select name="dd">
					<?php
						//$day = (isset($_GET['dd']) && isset($_GET['cnv']) && $_GET['cnv'] == 'to_english') ? $_GET['dd'] : $ndate['date'];
						for($i = 1; $i <= 31; $i++):
					?>
					<option <?php if($i == $day): ?>selected="selected"<?php endif;?>>
						<?php echo $i ?>
					</option>
					<?php endfor; ?>
				</select>
			</td>
			<td><input type="submit" value="Convert" /></td>
		</tr>
		<?php// if($english_conversion !== ''): ?>
		<tr>
			<td align="center" colspan="4"><strong><?php// echo $english_conversion; ?></strong></td>			
		</tr>
		<?php //endif; ?>
	</table>
</form>

</body>
</html>
