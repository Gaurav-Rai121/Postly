<script>
    // Character count update function
    function updateCharCount(value) {
            const count = value.length;
            const countElement = document.getElementById('charCount');
            countElement.textContent = count;
            
            // Update preview text
            document.getElementById('previewText').textContent = value || 'Your tweet preview will appear here...';
            
            // Add visual feedback for character limit
            if (count > 240 && count <= 280) {
                countElement.classList.add('text-yellow-500');
                countElement.classList.remove('text-blue-600', 'text-red-500');
            } else if (count > 280) {
                countElement.classList.add('text-red-500');
                countElement.classList.remove('text-blue-600', 'text-yellow-500');
            } else {
                countElement.classList.add('text-blue-600');
                countElement.classList.remove('text-yellow-500', 'text-red-500');
            }
        }

        // Tags handling
        const tagInput = document.getElementById('tagInput');
        const addTagBtn = document.getElementById('addTagBtn');
        const tagContainer = document.getElementById('tagContainer');
        const hiddenTags = document.getElementById('hiddenTags');
        const tags = [];

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


        function updatePreviewTags() {
            const previewTags = document.getElementById('previewTags');
            if (tags.length > 0) {
                previewTags.innerHTML = tags.map(tag => `<span class="mr-2">#${tag}</span>`).join('');
            } else {
                previewTags.innerHTML = '';
            }
        }

        // Add tag events
        tagInput.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ',') {
                e.preventDefault();
                const value = tagInput.value.replace(/,/g, '');
                addTag(value);
            }
        });

        addTagBtn.addEventListener('click', function() {
            addTag(tagInput.value);
        });

        // Anonymous toggle
        const anonymousToggle = document.getElementById('anonymousToggle');
        const anonymousBadge = document.getElementById('anonymousBadge');
        const previewUsername = document.getElementById('previewUsername');
        const previewAvatar = document.getElementById('previewAvatar');

        anonymousToggle.addEventListener('change', function() {
            if (this.checked) {
                anonymousBadge.classList.remove('hidden');
                previewUsername.textContent = 'Anonymous User';
                previewAvatar.src = '/api/placeholder/100/100'; // Replace with a default anonymous avatar
            } else {
                anonymousBadge.classList.add('hidden');
                previewUsername.textContent = '<?php echo $row['username'] ?>'; // Reset to actual username
                previewAvatar.src = '<?php echo isset($row['profilePicture']) ? $row['profilePicture'] : "/api/placeholder/100/100" ?>'; // Reset to actual avatar
            }
        });
</script>