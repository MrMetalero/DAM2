const express = require('express');
const fetch = require('node-fetch');
const app = express();

const STEAM_API_KEY = 'YOUR_STEAM_API_KEY';

app.get('/api/achievements', async (req, res) => {
    const steamid = req.query.steamid;

    if (!steamid) {
        return res.status(400).send({ error: 'Steam ID is required.' });
    }

    try {
        const response = await fetch(
            `https://api.steampowered.com/ISteamUserStats/GetPlayerAchievements/v1/?key=${STEAM_API_KEY}&steamid=${steamid}`
        );
        const data = await response.json();
        res.json(data);
    } catch (error) {
        console.error('Error fetching from Steam API:', error);
        res.status(500).send({ error: 'Failed to fetch data from Steam API.' });
    }
});

const PORT = 3000;
app.listen(PORT, () => {
    console.log(`Proxy server running on http://localhost:${PORT}`);
});
