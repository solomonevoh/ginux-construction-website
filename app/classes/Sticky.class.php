<?php
class Sticky
{
    public static function stickyInput($input)
    {
        if (isset($_POST[$input])) {
            echo trim($_POST[$input]);
        } else {
            echo "";
        }
    }

    public static function stickyDropDown($par, $value)
    {
        if (isset($_POST[$par]) && $_POST[$par] == $value) {
            if ($value == 0) {
                return "selected=\"selected\" disabled";
            //return "selected=\"selected\"";
            } else {
                return " selected=\"selected\"";
            }//end of else
        }
    } //end of method

    public static function stickyRadio($par, $value, $def = null)
    {
        if (isset($_POST[$par]) && $_POST[$par]== $value) {
            if ($value == 0) {
                return "checked=\"checked\"";
            } else ($value == $def);
            {
            return "checked=\"checked\"";
            }//end of else
        }
    } //end of method


    public static function stickyCheckbox($par, $def = null)
    {
        if (isset($_POST[$par])) {
            if ($_POST[$par] == 'on') {
                return "checked=\"checked\"";
            } elseif ($value == $def);
            {
            return;
            }//end of else
        }
    } //end of method


    public static function genericDrodwown($array)
    {

      //get dropdwon type sent by the user
        $dropdownType = $array['type'] ?? 'date';
        $startDate = $array['start'] ?? '';
        $endDate = $array['end'] ?? '';
        $format = $array['format'] ?? "YMD";

        if ($dropdownType == 'date') {
            //Create date period from start and end
            //if the end date is not supplied, use current date
            if ($endDate == "") {
                $endDate = new DateTime();
            } else {
                $endDate = new DateTime($endDate);
            }
            $startDate = new DateTime($startDate);
            $interval = new DateInterval('P' .$array['recurrence'].'');


            // create date periods
            $period = new DatePeriod($startDate, $interval, $endDate);
            foreach ($period as $key => $dates) {
                $date = Dates::formatDate($dates, Dates::${$format});
                echo "<option value=\"$key\"";
                echo self::stickyDropDown($key, $date);
                echo ">{$date}</option>";
            }
            return;
        } elseif ($dropdownType = 'number') {
            //Make Range
            foreach (range($startDate, $endDate) as $key => $number) {
                echo "<option value=\"$key\"";
                echo self::stickyDropDown($key, $number);
                echo ">{$number}</option>";
            }
            return;
        }
    }


    public static function jsonDrodwown($file, $subcat = "")
    {
        //Check if file exists
        $filename = $file.'.json';
        if (file_exists($filename)) {
        } else {
            $filename = '../'.$file.'.json';
        }
        //Get file
        $json = file_get_contents($filename);
        $options = json_decode($json);

        //Loop through the json objects
        foreach ($options as $key => $option) {
            foreach ($option as $car) {

          //If we are looking for a subcategory
                if (!empty($subcat)) {
                    //find sub category match
                    //If match is found, echo select options
                    if ($car->manufacture_id === $subcat) {
                        echo "<option value=\"$car->manufacture_id\"";
                        echo self::stickyDropDown($car->manufacture_id, $car->manufacture_id);
                        echo ">{$car->model}</option>";
                    }
                } else {
                    echo "<option value=\"$car->car_ID\"";
                    echo self::stickyDropDown($car->car_ID, $car->manufacturer);
                    echo ">{$car->manufacturer}</option>";
                }
            }
            return;
        }
    }
}
