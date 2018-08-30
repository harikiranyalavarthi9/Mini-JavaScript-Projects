var maximumMoves = 100;
var maxColumnIndex = 3;
var maxRowIndex = 3;
var move = 0;
var begin;
var end;
function tileClick(obj) {
	move++;
	document.getElementById("move").innerHTML= move;		 
	if(obj.attributes["class"].value =="empty")
	return;
	var grid = obj.parentNode.parentNode;
	var rowIndex = obj.parentNode.rowIndex;
	var cellIndex = obj.cellIndex;
	var rightCellIndex = cellIndex + 1;
        var leftCellIndex = cellIndex - 1;
	var topRowIndex = rowIndex - 1;
	var bottomRowIndex = rowIndex + 1;
	var rightCell, leftCell, topCell, bottomCell;
	if(cellIndex < maxColumnIndex)
	        rightCell = grid.rows[rowIndex].cells[rightCellIndex];
	if(cellIndex > 0)
		leftCell = grid.rows[rowIndex].cells[leftCellIndex];
	if(rowIndex > 0)
		topCell = grid.rows[topRowIndex].cells[cellIndex];
	if(rowIndex < maxRowIndex)
		bottomCell = grid.rows[bottomRowIndex].cells[cellIndex];
		var validCellMove = false;
		var swapMove = null;
	if(rightCell && rightCell.attributes["class"].value == "empty") {	
	        validCellMove = true;
		swapMove = rightCell;
	}
	else if(leftCell && leftCell.attributes["class"].value == "empty") {
		validCellMove = true;
		swapMove = leftCell;
	}
	else if(topCell && topCell.attributes["class"].value == "empty") {
		validCellMove = true;
		swapMove = topCell;
	}
	else if(bottomCell && bottomCell.attributes["class"].value == "empty") {
		validCellMove = true;
		swapMove = bottomCell;
	}
	if(validCellMove) {
		var temp = swapMove.attributes["class"].value;
		var tempHtml = swapMove.innerHTML;			
		var className = obj.attributes["class"].value;
		className = className.replace(" highlightTile","");
	        swapMove.attributes["class"].value = className;
		swapMove.innerHTML = obj.innerHTML;
		obj.attributes["class"].value = temp;
		obj.innerHTML = tempHtml;
	}
	if(isOrganized()) {
		var message = "Whoa!! You won !!!";
		message = message+"\nTotal moves: "+move;
		var body = document.getElementsByTagName('body')[0];
		body.style.backgroundImage = "url('./images/background1.gif')" ;
		body.style.backgroundSize="100%";
		body.style.backgroundRepeat="fixed";
		end = new Date();
                var totalTime = end - begin;	
		totalTime = totalTime/1000;
		var seconds = Math.round(totalTime % 60);
		message = message+"\nTotal time in seconds: "+seconds;
		alert(message);
		document.getElementById("time").innerHTML= "\n\nTotal time taken: " +seconds;
		document.getElementById("time").style.visibility = "visible";
		grid.attributes["disabled"] = "disabled";	
	}
}
function isOrganized() {
	var grid= document.getElementById("puzzleTable");
	var lastCellClass = grid.rows[maxRowIndex].cells[maxColumnIndex].attributes["class"].value;
	if(lastCellClass != "empty")
		return false;
		var counter = 1;
                var organized = true;
	        for(var i = 0; i<= maxRowIndex;i++) {
			for(var j =0;j <= maxColumnIndex ;j++) {
				if(i != maxRowIndex || j != maxColumnIndex) { 
				        console.log("inner HTML = " + grid.rows[i].cells[j].innerHTML);
					console.log("counter = " + counter);
					console.log("compare= " + grid.rows[i].cells[j].innerHTML == counter);
					if(grid.rows[i].cells[j].innerHTML != counter.toString()) {
						return false;
					}
				}
				counter++;
			}
		}
		return true;
}
function ifEmpty(grid) {
	var emtpyCell;
	for(var i=0;i<grid.rows.length;i++) {
	    for(var j=0;j < grid.rows[i].cells.length;j++) {
		if(grid.rows[i].cells[j].attributes["class"].value=="empty") {
			emptyCell = grid.rows[i].cells[j];
		        break;
		}
	    }
        }
	return emptyCell;
}
function getRandomMove(array) {
	var rand = array[Math.floor(Math.random() * array.length)];
	return rand;
}
function shuffle() {
	initialize();
	var grid = document.getElementById("puzzleTable");
	for(var count = 0;count < maximumMoves; count++) {
	    var emptyCell = ifEmpty(grid);
            var emptyCellIndex = emptyCell.cellIndex;
	    var emptyRowIndex = emptyCell.parentNode.rowIndex;
	    var validMoves = [];
	    var rightCellIndex = emptyCellIndex + 1;
	    var leftCellIndex = emptyCellIndex - 1;
	    var topRowIndex = emptyRowIndex - 1;
	    var bottomRowIndex = emptyRowIndex + 1;
            var rightCell, leftCell, topCell, bottomCell;
	if(emptyCellIndex < maxColumnIndex)
	        validMoves.push(1);
        if(emptyCellIndex > 0)
	        validMoves.push(3)
        if(emptyRowIndex > 0)
		validMoves.push(0)
	if(emptyRowIndex < maxRowIndex)
		validMoves.push(2);
		var randomMove = getRandomMove(validMoves);
		console.log(randomMove);
	        var cellToMove ;
	if(randomMove == 0)
		cellToMove = grid.rows[topRowIndex].cells[emptyCellIndex];
	else if(randomMove == 1 )
		cellToMove = grid.rows[emptyRowIndex].cells[rightCellIndex];
	else if(randomMove == 2)
		cellToMove = grid.rows[bottomRowIndex].cells[emptyCellIndex];
	else if(randomMove == 3)
		cellToMove = grid.rows[emptyRowIndex].cells[leftCellIndex];
		var temp = emptyCell.attributes["class"].value;
		var tempHtml = emptyCell.innerHTML;
		emptyCell.attributes["class"].value = cellToMove.attributes["class"].value;
	        emptyCell.innerHTML = cellToMove.innerHTML;
		cellToMove.attributes["class"].value = temp;
		cellToMove.innerHTML = tempHtml;
	}
				
}
function transform(obj) {
	var grid = document.getElementById("puzzleTable");
	var cellIndex = obj.cellIndex;
	var rowIndex = obj.parentNode.rowIndex;
	var leftCellIndex = cellIndex - 1;
	var rightCellIndex = cellIndex + 1;
	var topRowIndex =  rowIndex - 1;
	var bottomRowIndex = rowIndex + 1;
	var rightCell, leftCell, topCell, bottomCell;
	if(cellIndex < maxColumnIndex)
	        rightCell = grid.rows[rowIndex].cells[rightCellIndex];
	if(cellIndex > 0)
		leftCell = grid.rows[rowIndex].cells[leftCellIndex];
	if(rowIndex > 0)
		topCell = grid.rows[topRowIndex].cells[cellIndex];
	if(rowIndex < maxRowIndex)
		bottomCell = grid.rows[bottomRowIndex].cells[cellIndex];
		var isValidCell = false;
	if(rightCell && rightCell.attributes["class"].value == "empty") {	
		isValidCell = true;
	}
	else if(leftCell && leftCell.attributes["class"].value == "empty") {
		isValidCell = true;
	}
	else if(topCell && topCell.attributes["class"].value == "empty") {
		isValidCell = true;
	}
	else if(bottomCell && bottomCell.attributes["class"].value == "empty") {
		isValidCell = true;
	}
	if(isValidCell) {
		obj.attributes["class"].value = obj.attributes["class"].value + " highlightTile";
	}
}
function noTransform(obj) {
	var className = obj.attributes["class"].value;
	className = className.replace(" highlightTile","");
	obj.attributes["class"].value = className;
}
function background(){
	var option = document.getElementById("changeBg");
	var val = option.options[option.selectedIndex].value;
	var body = document.getElementsByTagName('body')[0];
        if(val==0){
		window.location.href = "http://codd.cs.gsu.edu/~hyalavarthi1/Project3/bravo/puzzle.html";
	} 
	else if(val==1){
	        window.location.href = "http://codd.cs.gsu.edu/~hyalavarthi1/Project3/mickey/puzzle.html";
	}
	else if(val==2){
		window.location.href = "http://codd.cs.gsu.edu/~hyalavarthi1/Project3/spongebob/puzzle.html";
	}
	else if(val==3){
		window.location.href = "http://codd.cs.gsu.edu/~hyalavarthi1/Project3/courage/puzzle.html";
	}  
}
function initialize(){
	var body = document.getElementsByTagName('body')[0];
	body.style.backgroundImage = "url('./images/background.jpg')" ;
	document.getElementById("move").innerHTML= "0";
	document.getElementById("time").style.visibility = "hidden";
	begin = new Date();
}
 
