<?php 




$age= $_POST['age'];



switch(true){

	case ($age >=18 && $age <= 24 ):
		echo "Your are Egilible For Assistance level";
		
	break;

	case ($age >= 25 && $age <= 30):
		echo "Your are Egilible For Junior Assistance level";
	break;

	case($age >=31 && $age <=40):
		echo "Your are Egilible For Management Trannie level";
	break
		;
	default:
	echo "You are not Eligible for any post";
	break;


}

/*switch ($var) {
	case 1:
		echo "sunday";
		break;

		case 2:
		echo "monday";
		break;

		case 3:
		echo "Tuesday";
		break;

		case 4:
		echo "Wednesday";
		break;

		case 5:
		echo "Thrusday";
		break;
		case 6:

		echo "friday";
		break;

		case 7:
		echo "Saturday";
		break;
	
	default:
		echo "Invaid Data";
		break;
}*/