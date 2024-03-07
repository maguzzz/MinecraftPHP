const canvas = document.getElementById('myCanvas');
const ctx = canvas.getContext('2d');
let x = 50;
let y = 50;
let speed = 10;
let cubeSize = 40;


function getRandomNumber(max) {
  return Math.floor(Math.random() * (max - 0 + 1) + 0)
}


class RndmOre {
  constructor(positionx, positiony) {
    this.x = getRandomNumber(positionx);
    this.y = getRandomNumber(positiony);
    this.width = 40;
    this.height = 40;
    this.draw();
  }

  draw() {
    ctx.fillStyle = 'blue';
    ctx.fillRect(this.x, this.y, this.width, this.height);
  }
}

const rndmOreArray = [];

rndmOreArray.push(new RndmOre(canvas.width,canvas.height));
rndmOreArray.push(new RndmOre(canvas.width,canvas.height));
rndmOreArray.push(new RndmOre(canvas.width,canvas.height));
rndmOreArray.push(new RndmOre(canvas.width,canvas.height));
rndmOreArray.push(new RndmOre(canvas.width,canvas.height));
rndmOreArray.push(new RndmOre(canvas.width,canvas.height));


function drawSquare() {
  ctx.clearRect(0, 0, canvas.width, canvas.height);

  rndmOreArray.forEach((ore) => {
    ore.draw();
    if (checkCollision(x, y, ore)) {
      console.log('Collision detected!');
    }
  });

  ctx.fillStyle = 'black';
  ctx.fillRect(x, y, cubeSize, cubeSize);
}


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
});
