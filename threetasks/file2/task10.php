<?php
function checkEligibility($age)
{
    if ($age >= 18) {
        return 'is eligible to vote';
    } else {
        return 'is not eligible to vote';
    }
}

$personAge = 15;
$eligibility = checkEligibility($personAge);

echo "The person, aged $personAge, $eligibility";
