const uploadArea = document.getElementById('upload-area');
const fileInput = document.getElementById('file-input');
const previewImage = document.getElementById('preview-image');
const progressBar = document.getElementById('progress-bar');
const progress = document.getElementById('progress');
const avatarOptions = document.querySelectorAll('.avatar-option');
const profilePlaceholder = document.querySelector('.profile-placeholder');
const particlesContainer = document.getElementById('particles');

// Create particles
function createParticles() {
  for (let i = 0; i < 30; i++) {
    const particle = document.createElement('div');
    particle.classList.add('particle');
    
    // Random position
    const posX = Math.random() * 100;
    const posY = Math.random() * 100;
    particle.style.left = `${posX}%`;
    particle.style.bottom = `${-20}px`;
    
    // Random size
    const size = Math.random() * 8 + 2;
    particle.style.width = `${size}px`;
    particle.style.height = `${size}px`;
    
    // Random opacity
    particle.style.opacity = Math.random() * 0.5 + 0.1;
    
    // Random animation duration
    const duration = Math.random() * 20 + 10;
    particle.style.animationDuration = `${duration}s`;
    
    // Random delay
    const delay = Math.random() * 10;
    particle.style.animationDelay = `${delay}s`;
    
    particlesContainer.appendChild(particle);
  }
}

createParticles();

// Click to upload
uploadArea.addEventListener('click', () => {
  fileInput.click();
});

// Drag and drop
['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
  uploadArea.addEventListener(eventName, preventDefaults, false);
});

function preventDefaults(e) {
  e.preventDefault();
  e.stopPropagation();
}

['dragenter', 'dragover'].forEach(eventName => {
  uploadArea.addEventListener(eventName, () => {
    uploadArea.classList.add('dragover');
  });
});

['dragleave', 'drop'].forEach(eventName => {
  uploadArea.addEventListener(eventName, () => {
    uploadArea.classList.remove('dragover');
  });
});

uploadArea.addEventListener('drop', (e) => {
  const files = e.dataTransfer.files;
  if (files.length > 0) {
    fileInput.files = files;
    handleFileSelect(files[0]);
  }
});

// File input change
fileInput.addEventListener('change', (e) => {
  if (e.target.files.length > 0) {
    handleFileSelect(e.target.files[0]);
  }
});

// Handle file selection
function handleFileSelect(file) {
  if (!file.type.startsWith('image/')) {
    alert('Please select an image file');
    return;
  }
  
  const reader = new FileReader();
  reader.onload = (e) => {
    previewImage.src = e.target.result;
    previewImage.style.display = 'block';
    profilePlaceholder.style.display = 'none';
    simulateUpload();
  };
  reader.readAsDataURL(file);
  
  // Clear avatar selection
  avatarOptions.forEach(option => option.classList.remove('selected'));
}

// Avatar selection
avatarOptions.forEach(option => {
  option.addEventListener('click', () => {
    avatarOptions.forEach(opt => opt.classList.remove('selected'));
    option.classList.add('selected');
    
    // Set preview image with animation
    const imgSrc = option.querySelector('img').src;
    previewImage.style.opacity = '0';
    previewImage.style.transform = 'scale(0.8)';
    
    setTimeout(() => {
      previewImage.src = imgSrc;
      previewImage.style.display = 'block';
      profilePlaceholder.style.display = 'none';
      
      setTimeout(() => {
        previewImage.style.opacity = '1';
        previewImage.style.transform = 'scale(1)';
      }, 50);
    }, 300);
    
    // Clear file input
    fileInput.value = '';
  });
});

// Simulate upload progress
function simulateUpload() {
  progressBar.style.display = 'block';
  let width = 0;
  
  const interval = setInterval(() => {
    width += 5;
    progress.style.width = width + '%';
    
    if (width >= 100) {
      clearInterval(interval);
      setTimeout(() => {
        progressBar.style.display = 'none';
        progress.style.width = '0%';
      }, 500);
    }
  }, 50);
}