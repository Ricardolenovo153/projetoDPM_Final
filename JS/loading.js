const slider = document.getElementById("rpmSlider");
const needle = document.getElementById("needle");
const rpmText = document.getElementById("rpmValue");
 
slider.addEventListener("input", () => {
  const rpm = parseInt(slider.value);
  rpmText.textContent = rpm;
 
  // Map RPM (0 - 8000) to degrees (-90 to 90)
  
  // Forçar implementaçao do commit
  const angle = (rpm / 8000) * 197 - 135;
  needle.style.transform = `rotate(${angle}deg)`;
});
 

const ticksContainer = document.getElementById("ticks");
 
const minAngle = -135;
const maxAngle = 85;
const maxRPM = 8000;
const divisions = 8;
 
for (let i = 0; i <= divisions; i++) {
  const rpm = (i);
  const angle = minAngle + (i * (maxAngle - minAngle) / divisions);
 

  const tick = document.createElement("div");
  tick.className = "tick";
  tick.style.transform = `rotate(${angle}deg) translateY(-130px)`;
  ticksContainer.appendChild(tick);
 

  const label = document.createElement("div");
  label.className = "tick-label";
 

  const radius = 110;
  const rad = (angle * Math.PI / 180) - 8;
  const x = 155 + radius * Math.cos(rad); 
  const y = 157 + radius * Math.sin(rad);
 
  label.style.left = `${x}px`;
  label.style.top = `${y}px`;
  label.textContent = rpm;
  ticksContainer.appendChild(label);
}
 

 
function animateRPM(targetRPM, duration = 2000) {
  let currentRPM = 0;
  const startTime = performance.now();
 
  function update(now) {
    const elapsed = now - startTime;
    const progress = Math.min(elapsed / duration, 1);
    currentRPM = Math.floor(progress * targetRPM);
 

    rpmText.textContent = currentRPM;
    const angle = (currentRPM / 8000) * 197 - 135;
    needle.style.transform = `rotate(${angle}deg)`;
 
    if (progress < 1) {
      requestAnimationFrame(update);
    }
  }
 
  requestAnimationFrame(update);
}
 
 
animateRPM(9000);