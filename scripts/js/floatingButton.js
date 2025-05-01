const fabButton = document.getElementById('fabButton');
    const postDialog = document.getElementById('postDialog');
    const closeDialog = document.getElementById('closeDialog');
    let isDialogOpen = false;

    fabButton.addEventListener('click', () => {
      if (!isDialogOpen) {
        postDialog.classList.remove('hidden');
        isDialogOpen = true;
      } else {
        postDialog.classList.add('hidden');
        isDialogOpen = false;
      }
    });

    closeDialog.addEventListener('click', () => {
      postDialog.classList.add('hidden');
      isDialogOpen = false;
    });

    // Close dialog when clicking outside
    document.addEventListener('click', (event) => {
      if (isDialogOpen && !postDialog.contains(event.target) && !fabButton.contains(event.target)) {
        postDialog.classList.add('hidden');
        isDialogOpen = false;
      }
    });

    // Example functions for each post type
    function createTextPost() {
      console.log('Creating text post...');
      // Implement your text post creation logic
      postDialog.classList.add('hidden');
      isDialogOpen = false;
    }

    function createImagePost() {
      console.log('Creating image post...');
      // Implement your image post creation logic
      postDialog.classList.add('hidden');
      isDialogOpen = false;
    }

    function createVideoPost() {
      console.log('Creating video post...');
      // Implement your video post creation logic
      postDialog.classList.add('hidden');
      isDialogOpen = false;
    }