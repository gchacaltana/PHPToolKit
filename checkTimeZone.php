/**
 * return true if timezone exist.
 * @author Gonzalo Chacaltana Buleje <gchacaltanab@outlook.com>
 * @param string $timezone, timezone. example: America/Lima
 */
public static function checkTimeZone($timezone)
{
    if (!empty($timezone)) {
        $listTimeZone = DateTimeZone::listIdentifiers(DateTimeZone::ALL);
        foreach ($listTimeZone as $row) {
            if ($row === $timezone) {
                return true;
            }
        }
    }
    return false;
}
