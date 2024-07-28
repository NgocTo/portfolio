// Typewriter effect
let introText = document.querySelector("#intro-text");
if (introText != undefined) {
  setTimeout(()=> {
    typeWriter("Hello World ", introText, 0);
  }, 500)
}

// Skill progress/efficiency
setProgress();


// Show/hide project description
let showTriggers = document.querySelectorAll('.project__title');
if (showTriggers.length > 0) {
  showTriggers.forEach(trigger => {
    trigger.addEventListener('click', function() {
      let projectDescription = this.parentNode.querySelector('.project__description');
      let icon = trigger.querySelector('.icon');
      if (projectDescription.classList.contains('expand')) {
        icon.classList.remove('up');
        projectDescription.classList.remove('expand');
        projectDescription.style.height = 0;
      } else {
        icon.classList.add('up');
        projectDescription.classList.add('expand');
        projectDescription.style.height = projectDescription.scrollHeight + 'px';
      }
    });
  });
}

// Scroll animation
let progressBar = document.querySelector('.timeline__progress');
let progressPoint = document.querySelector('.timeline__point');
if (progressBar != undefined) {
  window.addEventListener('scroll', () => {
    let scrollTop = window.scrollY;
    let docHeight = document.documentElement.scrollHeight - window.innerHeight;
    let progressHeight = (scrollTop / docHeight) * 100;

    // Update the progress
    progressBar.style.height = `${progressHeight}%`;
    progressPoint.style.top = `${progressHeight}%`;
  });
}

function setProgress() {
  let progressBars = document.querySelectorAll('.progress');
  progressBars.forEach(progressBar => {
    if (progressBar.checkVisibility())
      progressBar.style.setProperty('--progress', progressBar.getAttribute('data-efficiency'));
  });
}

function typeWriter(text, container, i) {
  if (i < text.length) {
    container.innerHTML += text.charAt(i);
    i++;
    setTimeout(() => {
      typeWriter(text, container, i);
    }, 200);
  }
}
