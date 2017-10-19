var TilesContent= "";
var TimeAllotted = 0;
var won = 0;
var timeout;
var tilesImagesArray;
var NoOfTiles;
var difficulty;


var AlreadyCellClicked = 0;
var PreviousCellNo = 0 ;
var match = 0;

function shuffle(o){
    for(var j, x, i = o.length; i; j = Math.floor(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
    return o;
}

function randomizeArray() {
    tilesImagesArray = [];
    var j  = 0 ;
    while (j<2) {
        for (var i = 1; i <= NoOfTiles / 2; i++) {
            tilesImagesArray.push(i);
        }
        j++;
    }

    shuffle(tilesImagesArray);
}

function SetDifficulty() {
    var level = document.getElementById('difficulty').selectedIndex;

    var time = [3, 5 , 8];
    difficulty = time[level];

    document.getElementById("Difficulty").innerHTML = " Difficulty Level set to "+time[level];
}

function assignImagesForTiles() {

    for (var i = 0; i< NoOfTiles ; i++) {
        cell = "cell"+i;
        document.getElementById(cell).src="images_new/"+i+".gif" ;
    }
}

function resetImages() {
    for (var i = 0; i < NoOfTiles; i++ ) {
        document.getElementById("cell"+i).src = "images/"+(i+1)+".gif";
    }
}


function CellClick(cellNumber) {
    cell = "cell"+cellNumber;
    document.getElementById(cell).src="images_new/"+tilesImagesArray[cellNumber]+".gif";

    if (cellNumber == PreviousCellNo) {
        return;
    }
    if (AlreadyCellClicked) {
        if (tilesImagesArray[cellNumber] == tilesImagesArray[PreviousCellNo]) {
            console.log("Matched..."+tilesImagesArray[cellNumber] +tilesImagesArray[PreviousCellNo] );
            match = match + 2;

            if (match == NoOfTiles) {
                won = 1;
                alert("You Won... Congrats!!!!");
            }

        } else {
            presentcell = "cell"+cellNumber;
            previouscell = "cell"+PreviousCellNo;

            document.getElementById(presentcell).src = "images/"+(cellNumber+1)+".gif";


            document.getElementById(previouscell).src = "images/"+(PreviousCellNo+1)+".gif";

        }

        AlreadyCellClicked = 0;
    } else {
        AlreadyCellClicked = 1;
        PreviousCellNo = cellNumber;


    }
}


function arrangeTiles(nooftiles) {

    if(nooftiles == 0 ) {
        document.getElementById("tiles").innerHTML = "<br/>";
        document.getElementById("info").innerHTML = "";
        TilesContent = "";
        TimeAllotted = 0;
        var sel = document.getElementById("nooftiles");
        sel.selectedIndex = 0;

    } else {
         clearTimeout(difficulty);
         TilesContent = nooftiles;
         document.getElementById("info").innerHTML = " Selected Number of Tiles = "+nooftiles;
         document.getElementById("info").innerHTML += "<br/> Time Allocated to solve ="+TimeAllotted;
        console.log(tilesImagesArray);
         TilesContent = "<table>";
         for (var i = 0; i<nooftiles ;) {
             if ( i%4 == 0) {
                 TilesContent += "<tr>";
             }
             TilesContent += "<td>";
             TilesContent += "<img id=\"cell"+i+"\" name=\"image\" src=\"images_new\/"+tilesImagesArray[i]+".gif\" onclick=\"CellClick("+i+")\"/>";
             TilesContent += "</td>";
             i++;
             if ( i%4 == 0) {
                 TilesContent += "</tr>";
             }
         }
        TilesContent += "</table>";

    }



}

function EndGame() {
    if (won == 0) {
        alert("Game Over, Game will restart");
        arrangeTiles(0);
    }
}

function startGame() {
    match = 0;
    randomizeArray();
    arrangeTiles(NoOfTiles);
    clearTimeout(timeout);
    clearTimeout(difficulty);
    console.log(tilesImagesArray);
    document.getElementById("tiles").innerHTML = TilesContent;
    timeout = setTimeout(EndGame, TimeAllotted*1000);
    setTimeout(resetImages, difficulty*1000);
}

function TilesNumberChange() {
    var nooftilesIndex = document.getElementById('nooftiles').selectedIndex;

    var nooftiles = [0, 8, 10, 12];
    var timealloted = [0, 120, 150, 180];

    TimeAllotted = timealloted[nooftilesIndex];

    NoOfTiles = nooftiles[nooftilesIndex];
    randomizeArray();
    arrangeTiles(nooftiles[nooftilesIndex]);


}

function LoadingPage() {
    SetDifficulty();
}