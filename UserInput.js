const canvas = document.getElementById('myCanvas');
const ctx = canvas.getContext('2d');
let x = 50;
let y = 50;
let speed = 8;
let cubeSize = 40;


function drawSquare() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    ctx.fillRect(x, y, cubeSize, cubeSize);
  }
  
  function moveLeft() {
    if (x - 10 >= 0) {
      x -= 10;
      drawSquare();
    }
  }
  
  function moveRight() {
    if (x + cubeSize + 10 <= canvas.width) {
      x += 10;
      drawSquare();
    }
  }
  
  function moveUp() {
    if (y - 10 >= 0) {
      y -= 10;
      drawSquare();
    }
  }
  
  function moveDown() {
    if (y + cubeSize + 10 <= canvas.height) {
      y += 10;
      drawSquare();
    }
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
  if (event.code === "KeyA") {
    moveLeft();
  } else if (event.code === "KeyD") {
    moveRight();
  } else if (event.code === "KeyW") {
    moveUp();
  } else if (event.code === "KeyS") {
    moveDown();
  }
});
