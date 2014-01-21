/**
 * return true if timezone exist.
 * @author Gonzalo Chacaltana Buleje <gchacaltanab@outlook.com>
 * @param string $timezone, timezone. example: America/Lima
 */
public static function checkTimeZone($timezone)
{
    if (!empty($timezone)) {
        if (in_array($timezone, DateTimeZone::listIdentifiers(DateTimeZone::ALL))) {
            return true;
        }
    }
    return false;
}
