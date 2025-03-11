// Club DV8 GR-55 Preset Tester SPA

const apiUrl = 'http://api.scottgrocott.com/api/v1/gr55/presets/';

document.addEventListener('DOMContentLoaded', () => {
    const fetchButton = document.getElementById('fetch-presets');
    const presetList = document.getElementById('preset-list');
    const errorMessage = document.getElementById('error-message');

    fetchButton.addEventListener('click', fetchPresets);

    async function fetchPresets() {
        // Clear previous content
        presetList.innerHTML = '';
        errorMessage.classList.add('hidden');
        fetchButton.disabled = true;

        try {
            const response = await fetch(apiUrl, {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                    // Add authentication headers if your API requires it, e.g.:
                    // 'Authorization': 'Bearer YOUR_TOKEN_HERE'
                }
            });

            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
            }

            const presets = await response.json();
            displayPresets(presets);
        } catch (error) {
            showError(`Failed to load presets: ${error.message}`);
        } finally {
            fetchButton.disabled = false;
        }
    }

    function displayPresets(presets) {
        //console.log(presets);
        if (!presets || presets.length === 0) {
            presetList.innerHTML = '<p>No presets found.</p>';
            return;
        }

        presets.forEach(preset => {
            const presetDiv = document.createElement('div');
            presetDiv.classList.add('preset-item');
            // Assuming the API returns objects with fields like 'name', 'id', etc.
            // Adjust these based on your actual API response structure
            console.log(preset);
            presetDiv.innerHTML = `
                <strong>Preset:</strong> ${preset.title || 'Unnamed'}<br>
                <small>ID: ${preset._id || 'N/A'}</small>
            `;
            presetList.appendChild(presetDiv);
        });
    }

    function showError(message) {
        errorMessage.textContent = message;
        errorMessage.classList.remove('hidden');
    }
});