if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
        navigator.serviceWorker.register('./js/service-worker.js')
            .then(registration => {
                console.log('ServiceWorker registered successfully:', registration);
            })
            .catch(error => {
                console.log('Error registering ServiceWorker:', error);
            });
    });
}