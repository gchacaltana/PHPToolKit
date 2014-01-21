/**
* return true if datetime format is valid.
* @author Gonzalo Chacaltana Buleje <gchacaltanab@outlook.com>
* @param datime $datetime, ISO 8601 format: YYYY-mm-dd HH:mm:ss
*/
public static function checkDatetimeIsoFormat($datetime)
{
  if (preg_match("/^(\d{4})-(\d{2})-(\d{2}) ([01][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/", $datetime)) {
      return true;
  } else {
      return false;
  }
}
