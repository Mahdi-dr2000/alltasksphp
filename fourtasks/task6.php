<?php
class StringToDate
{
    private $inputString;

    public function __construct($inputString)
    {
        $this->inputString = $inputString;
    }

    public function convertToDate()
    {
        $date = DateTime::createFromFormat('d-m-Y', $this->inputString);
        if ($date !== false) {
            return $date->format('Y-m-d');
        } else {
            return "Invalid date format";
        }
    }

    public function convertToDateTime()
    {
        $dateTime = DateTime::createFromFormat('d-m-Y', $this->inputString);
        if ($dateTime !== false) {
            return $dateTime->format('Y-m-d H:i:s');
        } else {
            return "Invalid date format";
        }
    }
}

$inputDate = '12-08-2004';

$dateConverter = new StringToDate($inputDate);
$convertedDate = $dateConverter->convertToDate();
$convertedDateTime = $dateConverter->convertToDateTime();

echo "Converted Date (Y-m-d format): $convertedDate <br>";
echo "Converted DateTime (Y-m-d H:i:s format): $convertedDateTime";
