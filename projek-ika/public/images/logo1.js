let teapot;

function preload() {
  // Load model with normalise parameter set to true
  teapot = loadModel('../obj/logofix3.obj', true);
  kitten = loadImage('../texture/obj.png');
}

function setup() {
  createCanvas(1490, 600, WEBGL);
}

function draw() {
  background(255);
  
  const lightDir = createVector(map(mouseX,0,width,2,-2), map(mouseY, 0, height, 2, -2), -1);
  lightDir.normalize();
  
  ambientLight(100);
  directionalLight(255, 191, 127, lightDir);
  stroke(255, 0, 0);
  strokeWeight(3);
  let l = 1000;

  
  noStroke(100);
  strokeWeight(11);
  ambientMaterial(255,255,255);
  
  scale(1.5);
  rotateZ(PI);
  //rotateY(sin(frameCount*0.5)/2+PI/4);
  
  //scale(0.4); // Scaled to make model fit into canvas

  rotateY(frameCount * 0.01);
  //normalMaterial(); // For effect
  texture(kitten);
  model(teapot);
}