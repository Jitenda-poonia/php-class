<?php
// month = december, january, february => output is => It's winter. month = march, april, may => output is => It's spring. month june, july, august => output is => I * t' * s Summer. = month = september, october, november => output is => It's autumn (fall).

// otherwise => Invalid input. Please enter a valid month.
// ===========================
$month = "june";
switch($month){
    case "january" : case "february" : case "december" :
        echo "it is winter";
        break;
        case "march": case "apirl" : case "may":
            echo " it is spring";
            break;
            case "june": case "july" : case "august":
                echo " it is summer";
                break;
                      case "sepetember": case "october" : case "november":
                          echo " it is autumn";
                      break;
                      default:
                            echo "please enter vailid month";
                

}










?>