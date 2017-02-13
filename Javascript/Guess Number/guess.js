var guess_input;
var guess_input_text
var target;
var finished=false;
var guesses=0;
var start = new Date();

function play_game()
{
	var random_number=Math.random()*100;
	var random_number_integer=Math.floor(random_number);
	target=random_number_integer+1;

	while(!finished)
	{
		guess_input_text=prompt("Enter a number in the range of 1 to 100 \n");
		guess_input=parseInt(guess_input_text);
		guesses+=1;
		finished=check_guess();
	}
	function check_guess()
	{
		if(isNaN(guess_input))
		{
			alert("You have not entered a number");
			return false;
		}
		if((guess_input<1)&&(guess_input>100))
		{
			alert("Please enter a number in the range 1 to 100");
			return false;
		}
		if(guess_input>target)
		{
			alert("Your number is too large!");
			return false;
		}
		if(guess_input<target)
		{
			alert("Your number is too small!");
			return false;
		}
		if(guess_input==target)
		{
			var end=new Date();
			var elapsed=end-start;
			var days=Math.floor(elapsed / 86400);
    		var hours = Math.floor((elapsed - (days * 86400 ))/3600);
    		var minutes = Math.floor((elapsed - (days * 86400 ) - (hours *3600 ))/60);
    		var seconds = Math.floor((elapsed - (days * 86400 ) - (hours *3600 ) - (minutes*60)));
			alert("Hurray!"+"The number was "+target+"\n\nIt took you "+guesses+"guesses and"+seconds+"seconds to get the number!");
		}
	}
}	

