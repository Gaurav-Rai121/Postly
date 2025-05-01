






// Function to add a new tag
// function addTag(text) {
//     const tag = document.createElement('div');
//     tag.className = 'tag';
    
//     const tagText = document.createElement('span');
//     tagText.className = 'tag-text';
//     tagText.textContent = text;
    
//     const tagRemove = document.createElement('span');
//     tagRemove.className = 'tag-remove';
//     tagRemove.innerHTML = '<i class="fas fa-times"></i>';
//     tagRemove.addEventListener('click', function() {
//         tag.remove();
//     });
    
//     tag.appendChild(tagText);
//     tag.appendChild(tagRemove);
//     tagsContainer.appendChild(tag);
// }


// File upload preview
// const fileInput = document.getElementById('screenshot');
// const fileLabel = document.querySelector('.file-upload-label');
// const originalLabelText = fileLabel.innerHTML;

// fileInput.addEventListener('change', function() {
//     if (this.files.length > 0) {
//         const fileNames = Array.from(this.files).map(file => file.name);
//         fileLabel.innerHTML = `
//             <span class="file-upload-icon"><i class="fas fa-check"></i></span>
//             <span>${fileNames.length} file(s) selected: ${fileNames.join(', ')}</span>
//         `;
//         fileLabel.style.borderColor = 'var(--success)';
//     } else {
//         fileLabel.innerHTML = originalLabelText;
//         fileLabel.style.borderColor = '';
//     }
// });

// Form submission with validation
// const form = document.getElementById('feedbackForm');

// form.addEventListener('submit', function(e) {
//     e.preventDefault();
    
//     // Simulate form submission with animation
//     const submitButton = form.querySelector('button[type="submit"]');
//     const originalButtonText = submitButton.innerHTML;
    
//     submitButton.disabled = true;
//     submitButton.innerHTML = `
//         <span class="loading-spinner">
//             <i class="fas fa-spinner fa-spin"></i>
//         </span>
//         Submitting...
//     `;
    
//     // Simulate API call delay
//     // setTimeout(() => {
//     //     const cardBody = document.querySelector('.card-body');
//     //     cardBody.innerHTML = `
            
//     //     `;
//     // }, 2000);
// });



  // Auto-hide toasts after 3 seconds
//   setTimeout(() => {
//     document.querySelectorAll('#toast-container > div').forEach(el => {
//       el.classList.add('opacity-0', 'transition-opacity', 'duration-500');
//       setTimeout(() => el.remove(), 500); // Remove after fade-out
//     });
//   }, 3000);

// document.getElementById('feedbackForm').addEventListener('submit', function (e) {
   
  
//     const form = this;
//     const formData = new FormData(form);
  
//     // Show loader and hide form
//     form.style.display = 'none';
//     document.getElementById('loaderContainer').style.display = 'flex';
  
//     fetch('submit_feedback.php', {
//       method: 'POST',
//       body: formData
//     })
//     .then(response => response.text())
//     .then(result => {
//       document.getElementById('loaderContainer').style.display = 'none';

//     })
//     .catch(error => {
//       console.error('Error:', error);
//       alert("Something went wrong!");
//       form.style.display = 'block';
//       document.getElementById('loaderContainer').style.display = 'none';
//     });
//   });
  