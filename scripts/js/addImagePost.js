// Function to update character count
function updateCharCount(text) {
  const charCount = text.length;
  const charCountElement = document.getElementById('charCount');
  charCountElement.textContent = charCount;

  if (charCount > 500) {
      charCountElement.classList.add('text-red-500');
      charCountElement.classList.remove('text-blue-600', 'dark:text-blue-400');
  } else {
      charCountElement.classList.remove('text-red-500');
      charCountElement.classList.add('text-blue-600', 'dark:text-blue-400');
  }

  document.getElementById('previewText').textContent = text || 'Your post preview will appear here...';
}

// Update hidden tags input whenever tags are updated
function updateHiddenTags() {
  const tags = Array.from(document.querySelectorAll('#tagContainer .tag-pill'))
      .map(tag => tag.textContent.trim());
  document.getElementById('hiddenTags').value = tags.join(','); // Update the hidden input
}

// Add a tag to the container
function addTag(tagText) {
  if (!tagText) return;

  tagText = tagText.replace(/,/g, ''); // Remove commas
  const tagContainer = document.getElementById('tagContainer');

  const colors = [
      'bg-blue-100 text-blue-800 dark:bg-blue-900/40 dark:text-blue-200',
      'bg-indigo-100 text-indigo-800 dark:bg-indigo-900/40 dark:text-indigo-200',
      'bg-purple-100 text-purple-800 dark:bg-purple-900/40 dark:text-purple-200',
      'bg-teal-100 text-teal-800 dark:bg-teal-900/40 dark:text-teal-200',
      'bg-pink-100 text-pink-800 dark:bg-pink-900/40 dark:text-pink-200'
  ];
  const randomColor = colors[Math.floor(Math.random() * colors.length)];

  const tagElement = document.createElement('span');
  tagElement.className =
      `tag-pill inline-flex items-center px-3 py-1.5 rounded-full text-sm font-medium ${randomColor}`;
  tagElement.innerHTML = `
          ${tagText}
          <button type="button" class="ml-2 hover:text-red-500"><i class="fas fa-times text-xs"></i></button>
      `;

  tagElement.querySelector('button').addEventListener('click', function() {
      tagElement.remove();
      updatePreviewTags(); // Update preview and hidden input when tag is removed
      updateHiddenTags(); // Update hidden input after removal
  });

  tagContainer.appendChild(tagElement);
  updatePreviewTags(); // Update preview and hidden input after tag is added
  updateHiddenTags(); // Update hidden input
}

// Update preview of tags in the live preview section
function updatePreviewTags() {
  const tags = Array.from(document.querySelectorAll('#tagContainer .tag-pill'))
      .map(tag => '#' + tag.textContent.trim());
  document.getElementById('previewTags').textContent = tags.join(' ');
}

// Handle the input for tags
document.getElementById('tagInput').addEventListener('keydown', function(e) {
  if (e.key === 'Enter' || e.key === ',') {
      e.preventDefault();
      addTag(this.value.trim());
      this.value = '';
  }
});

// Handle click on the "Add" button to add tags
document.getElementById('addTagBtn').addEventListener('click', function() {
  const tagInput = document.getElementById('tagInput');
  addTag(tagInput.value.trim());
  tagInput.value = '';
});

// Handle anonymous toggle
document.getElementById('anonymousToggle').addEventListener('change', function() {
  const anonymousBadge = document.getElementById('anonymousBadge');
  if (this.checked) {
      anonymousBadge.classList.remove('hidden');
  } else {
      anonymousBadge.classList.add('hidden');
  }
});

// Handle image upload
document.getElementById('uploadPrompt').addEventListener('click', function() {
  document.getElementById('imageUpload').click();
});

document.getElementById('imageUpload').addEventListener('change', function(e) {
  if (e.target.files && e.target.files[0]) {
      const reader = new FileReader();
      reader.onload = function(e) {
          document.getElementById('imagePreview').src = e.target.result;
          document.getElementById('previewImageContainer').classList.remove('hidden');
      }
      reader.readAsDataURL(e.target.files[0]);
  }
});

document.getElementById('removeImage').addEventListener('click', function() {
  document.getElementById('imageUpload').value = '';
  document.getElementById('previewImageContainer').classList.add('hidden');
});


document.querySelectorAll('#toast-container button').forEach(button => {
  button.addEventListener('click', () => {
      const toast = button.closest('[role="alert"]');
      toast.classList.add('opacity-0');
      setTimeout(() => {
          toast.remove();
      }, 300);
  });
});

// Auto-dismiss after 5 seconds
setTimeout(() => {
  const toasts = document.querySelectorAll('#toast-container [role="alert"]');
  toasts.forEach(toast => {
      toast.classList.add('opacity-0', 'transition-opacity', 'duration-300');
      setTimeout(() => {
          toast.remove();
      }, 300);
  });
}, 5000);
