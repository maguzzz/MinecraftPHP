const canvas = document.getElementById('myCanvas');
const ctx = canvas.getContext('2d');
let x = 150;
let y = 100;
let speed = 10;
let cubeSize = 40;


function getRandomNumber(max) {
  return Math.floor(Math.random() * (max - 80 + 1) + 80)
}

class RndmOre {
  static highestId = 0;

  constructor(positionx, positiony, oretype) {

    RndmOre.highestId++;
    this.id = RndmOre.highestId

    this.x = getRandomNumber(positionx);
    this.y = getRandomNumber(positiony);
    this.width = 40;
    this.height = 40;
    this.draw();
    this.oretype = oretype;

    switch (this.oretype) {
      case "coal":
        this.orecolor = "black";
        break;
      case "iron":
        this.orecolor = "#aba595";
        break;
      case "wood":
        this.orecolor = "#8f6443";
        break;
      case "stone":
        this.orecolor = "gray";
        break;
      case "iron":
        this.orecolor = "#c9c9c9";
        break;
      case "diamond":
        this.orecolor = "#94E1E5";
        break;
      default:
        this.orecolor = "red";
    }
  }

  draw() {
    ctx.fillStyle = this.orecolor;
    ctx.fillRect(this.x, this.y, this.width, this.height);
  }
}

const rndmOreArray = [];
rndmOreArray.push(new RndmOre(canvas.width, canvas.height, "wood"));
rndmOreArray.push(new RndmOre(canvas.width, canvas.height, "wood"));
rndmOreArray.push(new RndmOre(canvas.width, canvas.height, "wood"));
rndmOreArray.push(new RndmOre(canvas.width, canvas.height, "stone"))
rndmOreArray.push(new RndmOre(canvas.width, canvas.height, "stone"))
rndmOreArray.push(new RndmOre(canvas.width, canvas.height, "stone"))
rndmOreArray.push(new RndmOre(canvas.width, canvas.height, "stone"))
rndmOreArray.push(new RndmOre(canvas.width, canvas.height, "iron"));
rndmOreArray.push(new RndmOre(canvas.width, canvas.height, "iron"));
rndmOreArray.push(new RndmOre(canvas.width, canvas.height, "iron"));
rndmOreArray.push(new RndmOre(canvas.width, canvas.height, "iron"));
rndmOreArray.push(new RndmOre(canvas.width, canvas.height, "diamond"));
rndmOreArray.push(new RndmOre(canvas.width, canvas.height, "coal"));
rndmOreArray.push(new RndmOre(canvas.width, canvas.height, "coal"));
rndmOreArray.push(new RndmOre(canvas.width, canvas.height, "coal"));;
rndmOreArray.push(new RndmOre(canvas.width, canvas.height, "coal"));
rndmOreArray.push(new RndmOre(canvas.width, canvas.height, "coal"));

function drawSquare() {
  ctx.clearRect(0, 0, canvas.width, canvas.height);

  rndmOreArray.forEach((ore) => {
    ore.draw();
    if (checkCollision(x, y, ore)) {
      console.log('Collision detected!');
    }
  });

  ctx.fillStyle = '#ffffff';
  ctx.fillRect(x, y, cubeSize, cubeSize);
}

function checkCollision(newX, newY) {
  let collision = false;
  rndmOreArray.forEach((ore) => {
    if (
      newX < ore.x + ore.width &&
      newX + cubeSize > ore.x &&
      newY < ore.y + ore.height &&
      newY + cubeSize > ore.y
    ) {
      collision = true;
    }
  });

  return collision;
}

function resizeCanvas() {
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
  drawSquare();
}

drawSquare();
resizeCanvas();

window.addEventListener('resize', resizeCanvas);

canvas.addEventListener('mousemove', handleMouseMove);


function oreClick() {
  if(document.getElementById("oretype").textContent != ""){
    document.addEventListener('mousedown', function (event) {
      if (event.button === 0) {
        console.log("Click")
        $oretype = document.getElementById("oretype").textContent;
        callPHP($oretype)
        
      }
    });
  }

};

function callPHP(params) {
  console.log("sending DAta : " + params);
  var httpc = new XMLHttpRequest(); // simplified for clarity
  var url = "Ajax/BreakCall.php";
  httpc.open("POST", url, true); // sending as POST

  httpc.onreadystatechange = function () { //Call a function when the state changes.
    if (httpc.readyState == 4 && httpc.status == 200) { // complete and no errors
    }
  };
  httpc.send(params);
}

oreClick();

function handleMouseMove(event) {
  var element = document.getElementById("myCanvas");

  var mouseX = event.clientX - element.getBoundingClientRect().left;
  var mouseY = event.clientY - element.getBoundingClientRect().top;

  var oreType = getOreType(mouseX, mouseY);

  if (oreType) {
    element.classList.add("custom-cursor");
    document.getElementById("oretype").textContent = oreType;
  } else {
    document.getElementById("oretype").textContent = "";
    element.classList.remove("custom-cursor");
  }
}

function getOreType(mouseX, mouseY) {
  var foundOre = rndmOreArray.find((ore) => {
    var canvasItemX = ore.x;
    var canvasItemY = ore.y;
    var canvasItemWidth = 40;
    var canvasItemHeight = 40;

    return (
      mouseX >= canvasItemX &&
      mouseX <= canvasItemX + canvasItemWidth &&
      mouseY >= canvasItemY &&
      mouseY <= canvasItemY + canvasItemHeight
    );
  });

  return foundOre ? foundOre.oretype : null;
}


function addInvSlot(containerId, count) {
  var container = document.getElementById(containerId);
  for (var i = 1; i <= count; i++) {

    var newDiv = document.createElement('div');
    newDiv.className = 'singleItem';
    var newParagraph = document.createElement('p');
    newParagraph.textContent = i;
    newDiv.appendChild(newParagraph);
    container.appendChild(newDiv);
  }
}
addInvSlot('inventoryContainer', 5);



function moveLeft() {
  if (!checkCollision(x - speed, y)) {
    x -= speed;
    drawSquare();
  }
}

function moveRight() {
  if (!checkCollision(x + speed, y)) {
    x += speed;
    drawSquare();
  }
}

function moveUp() {
  if (!checkCollision(x, y - speed)) {
    y -= speed;
    drawSquare();
  }
}

function moveDown() {
  if (!checkCollision(x, y + speed)) {
    y += speed;
    drawSquare();
  }
}

document.addEventListener('keydown', (event) => {
  if (event.code === 'KeyA') {
    moveLeft();
  } else if (event.code === 'KeyD') {
    moveRight();
  } else if (event.code === 'KeyW') {
    moveUp();
  } else if (event.code === 'KeyS') {
    moveDown();
  }
  console.log("event.code")
});
