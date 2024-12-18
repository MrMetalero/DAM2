const express = require("express");
const fetch = require("node-fetch");
const app = express();

app.get("/api/steam", async (req, res) => {
    const { steamid, appid } = req.query;
    const apiKey = "7CA27BA0444D3DE930BC7C2619FB466D";
    const url = `https://api.steampowered.com/ISteamUserStats/GetPlayerAchievements/v1/?key=${apiKey}&steamid=${steamid}&appid=${appid}`;

    try {
        const response = await fetch(url);
        const data = await response.json();
        res.json(data);
    } catch (error) {
        res.status(500).send(error.message);
    }
});

app.listen(3000, () => console.log("Proxy running on http://localhost:3000"));